<?php

namespace Tests\Feature;

use DOMDocument;
use Tests\TestCase;

class ContentTest extends TestCase
{
    public function test_five_guides_have_unique_seo_related_links_and_one_service_promotion(): void
    {
        $this->withoutVite();
        $this->assertCount(5, config('guides'));
        $titles = [];
        foreach (config('guides') as $slug => $guide) {
            $response = $this->get('/'.$slug.'?source=test')->assertOk();
            $html = $response->getContent();
            $dom = new DOMDocument;
            @$dom->loadHTML('<?xml encoding="utf-8" ?>'.$html);
            $this->assertSame(1, $dom->getElementsByTagName('h1')->length);
            $titles[] = $dom->getElementsByTagName('title')->item(0)->textContent;
            $this->assertSame(1, substr_count($html, 'pagead/js/adsbygoogle.js'));
            $this->assertSame(1, substr_count($html, 'class="service-promo '));
            $this->assertStringContainsString('href="https://tienda.paginas.art"', $html);
            $this->assertStringNotContainsString('Cloudi IP Tool', $html);
            $this->assertStringNotContainsString('data-ad-preview', $html);
            $this->assertStringNotContainsString('noindex', $html);
            $this->assertStringContainsString('href="https://ipcloudi.com/'.$slug.'"', $html);
            $this->assertStringContainsString('property="og:image"', $html);
            $schemas = [];
            foreach ($dom->getElementsByTagName('script') as $script) {
                if ($script->getAttribute('type') === 'application/ld+json') {
                    $schemas[] = json_decode($script->textContent, true, 512, JSON_THROW_ON_ERROR);
                }
            }
            $this->assertSame(['Article', 'BreadcrumbList'], array_column($schemas, '@type'));
            $this->assertSame('IPCloudi', $schemas[0]['publisher']['name']);
            $this->assertSame('https://ipcloudi.com/'.$slug, $schemas[1]['itemListElement'][2]['item']);
            foreach (config('guides') as $relatedSlug => $related) {
                if ($slug !== $relatedSlug) $this->assertStringContainsString('href="/'.$relatedSlug.'"', $html);
            }
            foreach ($dom->getElementsByTagName('a') as $link) {
                $href = $link->getAttribute('href');
                if (str_starts_with($href, '/') && !str_starts_with($href, '//')) {
                    $this->get($href)->assertOk();
                }
            }
            if (isset($guide['published'])) {
                $this->assertSame($guide['published'], $schemas[0]['datePublished']);
                $articleText = $dom->getElementsByTagName('article')->item(0)->textContent;
                $this->assertGreaterThanOrEqual(1200, count(preg_split('/\s+/u', trim($articleText))));
                $this->assertLessThanOrEqual(1900, count(preg_split('/\s+/u', trim($articleText))));
            }
        }
        $this->assertCount(5, array_unique($titles));
    }

    public function test_guides_index_and_sitemap_expose_every_guide_once(): void
    {
        $this->withoutVite();
        $html = $this->get('/guias')->assertOk()->getContent();
        $xml = simplexml_load_file(public_path('sitemap.xml'));
        $urls = array_map(fn ($item) => (string) $item->loc, iterator_to_array($xml->url, false));
        $this->assertSame($urls, array_values(array_unique($urls)));
        foreach (config('guides') as $slug => $guide) {
            $this->assertStringContainsString('href="/'.$slug.'"', $html);
            $this->assertContains('https://ipcloudi.com/'.$slug, $urls);
        }
    }
}

<?php

namespace Tests\Feature;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Client\ConnectionException;
use Tests\TestCase;

class AuditTest extends TestCase
{
    public function test_public_pages_have_canonical_spanish_and_one_adsense_script(): void
    {
        $this->withoutVite();
        foreach (['/', '/privacy-policy', '/terms', '/contact', '/about', '/what-is-my-ip', '/ip-lookup'] as $path) {
            $response = $this->get($path.'?tracking=test');
            $response->assertOk()->assertSee('lang="es-MX"', false)
                ->assertSee('href="https://ipcloudi.com'.($path === '/' ? '/' : $path).'"', false)
                ->assertSee('href="/privacy-policy"', false)->assertSee('href="/contact"', false);
            $html = $response->getContent();
            $this->assertSame(1, substr_count($html, 'pagead/js/adsbygoogle.js'));
            $this->assertSame(1, substr_count($html, '<h1'));
            $this->assertStringNotContainsString('Google Ads Display', $html);
            $this->assertStringNotContainsString('Google Ads Bottom', $html);
        }
        $this->get('/not-a-real-page')->assertNotFound();
    }

    public function test_untrusted_forwarded_headers_cannot_change_detected_ip(): void
    {
        foreach (['/api/myip', '/api/myipV2', '/api/myipV3'] as $path) {
            $this->withServerVariables(['REMOTE_ADDR' => '8.8.8.8'])
                ->withHeaders(['X-Forwarded-For' => '1.1.1.1', 'CF-Connecting-IP' => '9.9.9.9'])
                ->getJson($path)->assertOk()->assertJsonPath('ip', '8.8.8.8')
                ->assertHeader('Cache-Control', 'no-store, private');
        }
    }

    public function test_ipv6_is_detected_without_inventing_an_ipv4_address(): void
    {
        $this->withServerVariables(['REMOTE_ADDR' => '2606:4700:4700::1111'])->getJson('/api/myipV3')
            ->assertOk()->assertJsonPath('ipv6', '2606:4700:4700::1111')->assertJsonPath('ipv4', null);
    }

    public function test_private_addresses_do_not_reach_the_provider(): void
    {
        Http::preventStrayRequests();
        $this->withServerVariables(['REMOTE_ADDR' => '127.0.0.1'])
            ->getJson('/api/ip')->assertStatus(422);
        Http::assertNothingSent();
    }

    public function test_localhost_in_development_looks_up_public_egress(): void
    {
        $this->app->instance('env', 'local');
        Http::fake(['api.ipquery.io/?format=json' => Http::response(['ip' => '8.8.8.8'])]);
        $this->withServerVariables(['REMOTE_ADDR' => '127.0.0.1'])->getJson('/api/ip')
            ->assertOk()->assertJsonPath('ip', '8.8.8.8')->assertJsonPath('lookup_context', 'local_egress');
        Http::assertSent(fn ($request) => $request->url() === 'https://api.ipquery.io/?format=json');
    }

    public function test_localhost_in_production_does_not_show_server_ip(): void
    {
        $this->app->instance('env', 'production');
        Http::preventStrayRequests();
        $this->withServerVariables(['REMOTE_ADDR' => '127.0.0.1'])->getJson('/api/ip')->assertStatus(422);
        Http::assertNothingSent();
    }

    public function test_lookup_uses_visitor_ip_and_does_not_reuse_another_visitors_result(): void
    {
        Http::fake([
            'api.ipquery.io/8.8.8.8' => Http::response(['ip' => '8.8.8.8']),
            'api.ipquery.io/1.1.1.1' => Http::response(['ip' => '1.1.1.1']),
        ]);
        foreach (['8.8.8.8', '1.1.1.1'] as $ip) {
            $this->withServerVariables(['REMOTE_ADDR' => $ip])->getJson('/api/ip')
                ->assertOk()->assertJsonPath('ip', $ip)->assertHeader('Cache-Control', 'no-store, private');
        }
        Http::assertSentCount(2);
    }

    public function test_provider_failure_and_invalid_payload_return_recoverable_errors(): void
    {
        foreach ([Http::response([], 500), Http::response(['ip' => '1.1.1.1']), Http::response('invalid json')] as $fake) {
            Http::fake(['*' => $fake]);
            $this->withServerVariables(['REMOTE_ADDR' => '8.8.8.8'])->getJson('/api/ip')->assertStatus(503);
        }
        Http::fake(fn () => throw new ConnectionException('timeout'));
        $this->withServerVariables(['REMOTE_ADDR' => '8.8.8.8'])->getJson('/api/ip')->assertStatus(503);
    }

    public function test_lookup_is_rate_limited(): void
    {
        for ($i = 0; $i < 30; $i++) {
            $this->withServerVariables(['REMOTE_ADDR' => '127.0.0.2'])->getJson('/api/myip')->assertOk();
        }
        $this->getJson('/api/myip')->assertStatus(429);
    }

    public function test_static_ads_file_matches_existing_publisher_and_sitemap_urls_exist(): void
    {
        $this->assertSame("google.com, pub-9068723123011153, DIRECT, f08c47fec0942fa0\n", file_get_contents(public_path('ads.txt')));
        $xml = simplexml_load_file(public_path('sitemap.xml'));
        $this->withoutVite();
        foreach ($xml->url as $url) {
            $this->get(parse_url((string) $url->loc, PHP_URL_PATH) ?: '/')->assertOk();
        }
    }
}

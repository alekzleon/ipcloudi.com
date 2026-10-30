@php
    $slug = trim(request()->getPathInfo(), '/');
    $guide = config('guides')[$slug] ?? null;
    $metaTitle = ($guide['meta_title'] ?? $guide['title'] ?? $title ?? config('site.name'));
    $metaDescription = $guide['description'] ?? $description ?? config('site.description');
    $canonical = rtrim(config('site.url'), '/') . ($slug ? '/'.$slug : '/');
    $fullTitle = $metaTitle . ' | ' . config('site.name');
@endphp
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>{{ $fullTitle }}</title>
<meta name="description" content="{{ $metaDescription }}">
<link rel="canonical" href="{{ $canonical }}">
<link rel="icon" type="image/png" href="{{ asset(ltrim(config('site.logo'), '/')) }}">
<meta property="og:type" content="{{ $guide ? 'article' : 'website' }}">
<meta property="og:locale" content="es_MX">
<meta property="og:site_name" content="{{ config('site.name') }}">
<meta property="og:title" content="{{ $fullTitle }}">
<meta property="og:description" content="{{ $metaDescription }}">
<meta property="og:url" content="{{ $canonical }}">
<meta property="og:image" content="{{ config('site.url') . config('site.social_image') }}">
<meta property="og:image:alt" content="{{ config('site.name') }}">
<meta name="twitter:card" content="summary">
<meta name="twitter:title" content="{{ $fullTitle }}">
<meta name="twitter:description" content="{{ $metaDescription }}">
<meta name="twitter:image" content="{{ config('site.url') . config('site.social_image') }}">
@if($guide)
@php
    $articleSchema = [
        '@context' => 'https://schema.org', '@type' => 'Article',
        'headline' => $guide['title'], 'description' => $metaDescription,
        'mainEntityOfPage' => $canonical, 'inLanguage' => 'es-MX',
        'author' => ['@type' => 'Organization', 'name' => config('site.publisher')],
        'publisher' => ['@type' => 'Organization', 'name' => config('site.publisher'),
            'logo' => ['@type' => 'ImageObject', 'url' => config('site.url').config('site.logo')]],
    ];
    if (isset($guide['published'])) $articleSchema['datePublished'] = $guide['published'];
    $breadcrumbSchema = ['@context' => 'https://schema.org', '@type' => 'BreadcrumbList', 'itemListElement' => [
        ['@type' => 'ListItem', 'position' => 1, 'name' => 'Inicio', 'item' => config('site.url').'/'],
        ['@type' => 'ListItem', 'position' => 2, 'name' => 'Guías', 'item' => config('site.url').'/guias'],
        ['@type' => 'ListItem', 'position' => 3, 'name' => $guide['title'], 'item' => $canonical],
    ]];
@endphp
<script type="application/ld+json">{!! json_encode($articleSchema, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_HEX_QUOT) !!}</script>
<script type="application/ld+json">{!! json_encode($breadcrumbSchema, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_HEX_QUOT) !!}</script>
@endif

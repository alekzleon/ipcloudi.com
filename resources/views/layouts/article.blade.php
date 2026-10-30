<!DOCTYPE html>
<html lang="es-MX">
<head>
    @include('partials.meta')
    @vite(['resources/css/app.css'])
    @include('partials.adsense')
</head>
<body class="bg-black text-gray-900">
    <header class="max-w-6xl mx-auto px-6 py-6 space-y-4">
        <a href="/" class="text-white text-xl font-bold">{{ config('site.name') }}</a>
        @include('partials.navigation', ['dark' => true])
    </header>
    <main class="max-w-4xl mx-auto px-3 md:px-6">
        <article class="rounded-3xl bg-white p-5 md:p-10 min-w-0">
            <nav aria-label="Ruta de navegación" class="text-sm text-gray-500 mb-6 flex flex-wrap gap-2">
                <a href="/">Inicio</a><span aria-hidden="true">/</span><a href="/guias">Guías</a>
            </nav>
            <h1 class="text-3xl md:text-4xl font-black tracking-tight">{{ $article['title'] }}</h1>
            <p class="mt-4 text-sm text-gray-500">Por {{ config('site.publisher') }} · Publicado el <time datetime="{{ $article['published'] }}">29 de octubre de 2026</time></p>
            <div class="article-content mt-8">@yield('content')</div>
            @include('partials.related-articles')
            @include('partials.service-promo')
        </article>
    </main>
    @include('partials.footer')
</body>
</html>

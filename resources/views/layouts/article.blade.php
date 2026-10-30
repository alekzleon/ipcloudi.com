<!DOCTYPE html>
<html lang="es-MX">
<head>
    @include('partials.meta')
    @vite(['resources/css/app.css'])
    @include('partials.adsense')
</head>
<body class="bg-black text-white overflow-x-hidden">
    <main class="px-4 py-4 md:px-6 md:py-6">
        <div class="max-w-6xl mx-auto mb-5">@include('partials.navigation', ['dark' => true])</div>
        <div class="mx-auto max-w-6xl">
            <section class="rounded-[2rem] bg-white text-gray-900 border border-white/10 overflow-hidden relative shadow-2xl">
                <div class="absolute -top-20 -left-20 w-72 h-72 bg-[#FF2669]/20 blur-3xl rounded-full pointer-events-none"></div>
                <div class="absolute bottom-0 right-0 w-72 h-72 bg-sky-300/20 blur-3xl rounded-full pointer-events-none"></div>
                <div class="relative z-10 p-6 md:p-8 lg:p-10">
                    <div class="flex flex-wrap items-center gap-3 mb-5">
                        <a href="/" class="inline-flex items-center gap-2 rounded-full border border-gray-200 bg-white px-4 py-2 text-sm font-medium text-gray-700 hover:text-[#FF2669] hover:border-[#FF2669]/30 transition">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" /></svg>
                            Volver a la herramienta
                        </a>
                        <span class="inline-flex items-center rounded-full px-3 py-1 text-xs font-semibold bg-[#FF2669]/10 text-[#FF2669] border border-[#FF2669]/20">{{ $article['label'] }}</span>
                    </div>
                    <div class="max-w-4xl">
                        <p class="text-[11px] md:text-xs uppercase tracking-[0.2em] text-[#FF2669] font-semibold mb-3">{{ config('site.name') }}</p>
                        <h1 class="text-3xl md:text-5xl font-black tracking-tight leading-tight text-gray-900">{{ $article['title'] }}</h1>
                        <div class="mt-5 text-base md:text-lg leading-8 text-gray-600 max-w-3xl">@yield('intro')</div>
                    </div>
                    <div class="mt-8 grid grid-cols-1 md:grid-cols-3 gap-4">
                        @foreach($article['highlights'] as [$label, $heading, $detail])
                            <div class="rounded-3xl border border-gray-200 bg-gray-50 p-5">
                                <p class="text-xs uppercase tracking-wide text-gray-400 mb-2">{{ $label }}</p>
                                <p class="font-bold text-gray-900">{{ $heading }}</p>
                                <p class="text-sm text-gray-600 mt-2">{{ $detail }}</p>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>
            <section class="mt-5 grid grid-cols-1 lg:grid-cols-12 gap-5 items-start">
                <article class="lg:col-span-8 min-w-0 rounded-[2rem] bg-white text-gray-900 border border-white/10 shadow-2xl p-6 md:p-8">
                    <div class="article-content guide-content">@yield('content')</div>
                    <p class="mt-6 text-sm text-gray-500">Por {{ config('site.publisher') }} · Publicado el <time datetime="{{ $article['published'] }}">29 de octubre de 2026</time></p>
                    @include('partials.related-articles')
                    @include('partials.service-promo')
                </article>
                <aside class="lg:col-span-4 space-y-5 lg:sticky lg:top-5" aria-label="Resumen y siguiente lectura">
                    <div class="rounded-[2rem] bg-white text-gray-900 border border-white/10 shadow-2xl p-6">
                        <p class="text-xs uppercase tracking-[0.18em] text-[#FF2669] font-semibold mb-3">Resumen rápido</p>
                        <ul class="space-y-3 text-sm text-gray-600">
                            @foreach($article['summary'] as $point)<li>• {{ $point }}</li>@endforeach
                        </ul>
                    </div>
                    @php($nextGuide = config('guides')[$article['next']])
                    <div class="rounded-[2rem] bg-white text-gray-900 border border-white/10 shadow-2xl p-6">
                        <p class="text-xs uppercase tracking-[0.18em] text-[#FF2669] font-semibold mb-3">Siguiente lectura</p>
                        <h3 class="text-xl font-black text-gray-900">{{ $nextGuide['title'] }}</h3>
                        <p class="text-sm text-gray-600 leading-7 mt-3">{{ $article['next_description'] }}</p>
                        <a href="/{{ $article['next'] }}" class="mt-5 inline-flex items-center gap-2 rounded-full bg-[#FF2669] px-5 py-3 text-sm font-semibold text-white hover:opacity-90 transition">
                            Leer guía
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" /></svg>
                        </a>
                    </div>
                </aside>
            </section>
        </div>
    </main>
    @include('partials.footer')
</body>
</html>

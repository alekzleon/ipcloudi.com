<!DOCTYPE html>
<html lang="es-MX">
<head>
    @include('partials.meta', ['title' => trim($__env->yieldContent('title')), 'description' => trim($__env->yieldContent('description'))])
    @vite(['resources/css/app.css'])
    @include('partials.adsense')
</head>
<body class="bg-black text-white min-h-screen flex flex-col">
    <header class="w-full max-w-[1280px] mx-auto px-6 md:px-10 py-7 flex flex-wrap items-center justify-between gap-6 border-b border-white/10">
        <a href="/" class="inline-flex items-center gap-3 font-semibold text-xl tracking-tight">
            <img src="{{ asset(ltrim(config('site.logo'), '/')) }}" alt="" width="32" height="32" class="h-8 w-8 object-contain">
            {{ config('site.name') }}
        </a>
        @include('partials.navigation', ['dark' => true])
    </header>
    <main class="w-full max-w-[1280px] mx-auto px-6 md:px-10 pt-12 pb-16 md:pt-16 md:pb-24 flex-1">
        <h1 class="text-3xl md:text-4xl font-bold tracking-tight leading-tight mb-10">@yield('title')</h1>
        <div class="{{ request()->routeIs('guides') ? 'space-y-6' : 'info-content' }}">
            @yield('content')
        </div>
    </main>
    @include('partials.footer')
</body>
</html>

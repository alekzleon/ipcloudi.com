<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') | IPCloudi</title>
    <meta name="description" content="@yield('description')">
    <link rel="canonical" href="https://ipcloudi.com{{ request()->getPathInfo() }}">
    @vite(['resources/css/app.css'])
    @include('partials.adsense')
    <link rel="icon" type="image/png" href="{{ asset('asset/icon_cloudi.png') }}">
</head>
<body class="bg-black text-white">
    <main class="max-w-3xl mx-auto py-12 px-6 space-y-6">
        <a href="/" class="text-pink-400">← Volver a IPCloudi</a>
        <h1 class="text-3xl font-bold">@yield('title')</h1>
        @yield('content')
    </main>
    @include('partials.footer')
</body>
</html>

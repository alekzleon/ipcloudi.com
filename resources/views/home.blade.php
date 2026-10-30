<!DOCTYPE html>
<html lang="es-MX">
<head>
    @include('partials.meta', ['title' => '¿Cuál es mi IP pública?'])

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @include('partials.adsense')
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-Z5NTGVNK06"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-Z5NTGVNK06');
    </script>
</head>
<body class="bg-black text-gray-900 overflow-x-hidden">
    <noscript>
        <style>#ip-box, #details { display: none; }</style>
        <div class="bg-yellow-100 text-yellow-900 text-center text-sm px-4 py-3">
            Activa JavaScript para consultar tu IP. Puedes leer las guías y la información del sitio sin activarlo.
        </div>
    </noscript>

    <main class="px-3 py-3">
        <div class="mx-auto max-w-6xl grid grid-cols-1 gap-4 items-start">

            <!-- Main Content -->
            <section>
                <div class="w-full rounded-[2rem] bg-white shadow-2xl border border-white/10 relative overflow-hidden">

                    <!-- Decorative background -->
                    <div class="absolute -top-24 -left-24 w-[300px] h-[300px] bg-[#FF2669]/20 blur-3xl rounded-full pointer-events-none"></div>
                    <div class="absolute bottom-0 left-0 w-[220px] h-[220px] bg-sky-300/20 blur-3xl rounded-full pointer-events-none"></div>
                    <div class="absolute top-1/2 -right-12 w-[180px] h-[180px] bg-[#FF2669]/10 blur-3xl rounded-full pointer-events-none"></div>

                    <div class="relative z-10 p-4 md:p-5 lg:p-6">

                        <!-- Header -->
                        <header class="flex flex-col gap-3 md:flex-row md:items-center md:justify-between mb-5">
                            <div class="flex items-center gap-3">
                                <div class="w-9 h-9 rounded-2xl bg-[#FF2669]/10 flex items-center justify-center shrink-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-[#FF2669]" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l-5 5 5 5m6-10l-5 5 5 5" />
                                    </svg>
                                </div>

                                <div>
                                    <p class="font-semibold text-gray-900 text-base">IPCloudi</p>
                                    <p class="text-xs text-gray-500">{{ config('site.description') }}</p>
                                </div>
                            </div>

                            @include('partials.navigation')

                            <div class="text-xs text-gray-500 flex flex-wrap items-center gap-2">
                                <span id="header-localtime" class="font-medium">Consultando hora local…</span>
                                <span class="hidden md:inline">◆</span>
                                <span id="header-location">Consultando ubicación…</span>
                            </div>
                        </header>

                        <!-- Main -->
                        <section class="grid grid-cols-1 lg:grid-cols-12 gap-4 items-start">
                            <!-- Left -->
                            <div class="lg:col-span-7">
                                <div class="max-w-2xl">
                                    <p class="text-[11px] md:text-xs uppercase tracking-[0.18em] text-[#FF2669] font-semibold mb-2">
                                        Herramienta gratuita de IP
                                    </p>

                                    <h1 class="text-2xl md:text-3xl lg:text-4xl font-black leading-tight tracking-tight text-gray-900">
                                        ¿Cuál es mi dirección IP?
                                    </h1>

                                    <p class="mt-3 text-sm md:text-base leading-7 text-gray-600 max-w-xl">
                                        Consulta tu IP pública, ubicación aproximada, proveedor y zona horaria. Las señales de VPN, proxy, TOR y datacenter son orientativas y pueden ser incorrectas.
                                    </p>
                                </div>

                                <!-- Main IP Box -->
                                <div id="ip-box" role="status" aria-live="polite" class="mt-5 rounded-[1.5rem] bg-gray-50 border border-gray-200 p-4 md:p-5 shadow-inner transition-all duration-300 hover:shadow-lg animate-pulse">
                                    <div class="h-8 bg-gray-200 rounded-xl w-2/3 mb-4"></div>
                                    <div class="h-4 bg-gray-200 rounded-lg w-1/3 mb-5"></div>

                                    <div class="grid grid-cols-2 md:grid-cols-4 gap-3">
                                        <div class="h-14 bg-gray-200 rounded-2xl"></div>
                                        <div class="h-14 bg-gray-200 rounded-2xl"></div>
                                        <div class="h-14 bg-gray-200 rounded-2xl"></div>
                                        <div class="h-14 bg-gray-200 rounded-2xl"></div>
                                    </div>
                                </div>


                                <!-- Related Articles -->
                                <section class="mt-5">
                                    <div class="rounded-[1.5rem] bg-white border border-gray-200 p-4 md:p-5 shadow-sm">
                                        <div class="mb-4">
                                            <p class="text-[11px] md:text-xs uppercase tracking-[0.18em] text-[#FF2669] font-semibold mb-2">
                                                Guías relacionadas
                                            </p>
                                            <h2 class="text-lg md:text-xl font-black text-gray-900">
                                                Aprende sobre direcciones IP y consultas de red
                                            </h2>
                                            <p class="text-sm text-gray-600 mt-2">
                                                Conoce mejor tu conexión con estas guías. <a href="/guias" class="font-semibold text-pink-600 underline">Ver todas las guías</a>
                                            </p>
                                        </div>

                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                            <a
                                                href="{{ url('/what-is-my-ip') }}"
                                                class="group rounded-2xl border border-gray-200 bg-gray-50 p-4 hover:bg-white hover:shadow-lg transition-all duration-300"
                                            >
                                                <div class="flex items-start justify-between gap-3 mb-3">
                                                    <div class="w-11 h-11 rounded-2xl bg-[#FF2669]/10 flex items-center justify-center shrink-0">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-[#FF2669]" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16h6M7 5h10a2 2 0 012 2v10a2 2 0 01-2 2H7a2 2 0 01-2-2V7a2 2 0 012-2z" />
                                                        </svg>
                                                    </div>

                                                    <span class="inline-flex items-center rounded-full px-3 py-1 text-[11px] font-semibold bg-white border border-gray-200 text-gray-600">
                                                        Básico
                                                    </span>
                                                </div>

                                                <h3 class="text-base md:text-lg font-bold text-gray-900 group-hover:text-[#FF2669] transition-colors">
                                                    ¿Qué es mi IP?
                                                </h3>

                                                <p class="mt-2 text-sm text-gray-600 leading-6">
                                                    Entiende qué es una dirección IP, para qué sirve y qué revela sobre tu conexión.
                                                </p>

                                                <div class="mt-4 inline-flex items-center gap-2 text-sm font-semibold text-[#FF2669]">
                                                    Leer guía
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 transition-transform duration-300 group-hover:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                                    </svg>
                                                </div>
                                            </a>

                                            <a
                                                href="{{ url('/ip-lookup') }}"
                                                class="group rounded-2xl border border-gray-200 bg-gray-50 p-4 hover:bg-white hover:shadow-lg transition-all duration-300"
                                            >
                                                <div class="flex items-start justify-between gap-3 mb-3">
                                                    <div class="w-11 h-11 rounded-2xl bg-sky-100 flex items-center justify-center shrink-0">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-sky-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-4.35-4.35M10.5 18a7.5 7.5 0 100-15 7.5 7.5 0 000 15z" />
                                                        </svg>
                                                    </div>

                                                    <span class="inline-flex items-center rounded-full px-3 py-1 text-[11px] font-semibold bg-white border border-gray-200 text-gray-600">
                                                        Lookup
                                                    </span>
                                                </div>

                                                <h3 class="text-base md:text-lg font-bold text-gray-900 group-hover:text-sky-600 transition-colors">
                                                    IP Lookup
                                                </h3>

                                                <p class="mt-2 text-sm text-gray-600 leading-6">
                                                    Aprende cómo funciona una consulta IP y qué datos aproximados ofrece sobre ubicación, proveedor y señales de riesgo.
                                                </p>

                                                <div class="mt-4 inline-flex items-center gap-2 text-sm font-semibold text-sky-600">
                                                    Leer guía
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 transition-transform duration-300 group-hover:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                                    </svg>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </section>
                            </div>

                            <!-- Right -->
                            <div class="lg:col-span-5">
                                <div id="details" role="status" aria-live="polite" class="rounded-[1.5rem] bg-white/80 backdrop-blur border border-gray-200 p-4 md:p-5 shadow-xl transition-all duration-300 hover:shadow-2xl animate-pulse">
                                    <div class="h-5 bg-gray-200 rounded w-1/2 mb-5"></div>

                                    <div class="space-y-3">
                                        <div class="h-4 bg-gray-200 rounded"></div>
                                        <div class="h-4 bg-gray-200 rounded"></div>
                                        <div class="h-4 bg-gray-200 rounded"></div>
                                        <div class="h-4 bg-gray-200 rounded"></div>
                                        <div class="h-4 bg-gray-200 rounded"></div>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <!-- SEO Content -->
                        <section class="mt-5 grid grid-cols-1 lg:grid-cols-3 gap-4">
                            <div class="lg:col-span-2 rounded-3xl bg-gray-50 border border-gray-200 p-4 md:p-5">
                                <h2 class="text-lg md:text-xl font-bold text-gray-900 mb-3">¿Qué es una dirección IP?</h2>
                                <p class="text-sm text-gray-600 leading-7">
                                    Una dirección IP identifica una conexión en una red y permite que los equipos se comuniquen. Una IP pública puede ser compartida por varios dispositivos o usuarios; puede aportar datos aproximados sobre la red y el proveedor, pero no identifica por sí sola a una persona.
                                </p>
                                <p class="text-sm text-gray-600 leading-7 mt-3">
                                    IPCloudi consulta api.ipquery.io desde el servidor. La ubicación no es un domicilio exacto y las señales de red no garantizan seguridad. Los datos pueden cambiar o no estar disponibles.
                                </p>
                            </div>

                            <div class="rounded-3xl bg-gray-50 border border-gray-200 p-4 md:p-5">
                                <h3 class="text-lg font-bold text-gray-900 mb-3">¿Qué puedes consultar?</h3>
                                <ul class="space-y-2 text-sm text-gray-600">
                                    <li>• Dirección IP pública</li>
                                    <li>• País, estado y ciudad aproximados</li>
                                    <li>• Proveedor, ASN y organización</li>
                                    <li>• Zona horaria y hora local</li>
                                    <li>• Señales de VPN, proxy, TOR y datacenter</li>
                                </ul>
                            </div>
                        </section>



                    </div>
                </div>
            </section>


        </div>
    </main>

    @include('partials.footer')
    <!-- Toast -->
    <div id="toast" role="status" aria-live="polite" class="fixed bottom-5 right-5 translate-y-3 opacity-0 pointer-events-none transition-all duration-300 bg-gray-950 text-white px-4 py-3 rounded-2xl shadow-2xl text-sm font-medium z-50">
        IP copiada
    </div>

    <script>
        const ipBox = document.getElementById('ip-box');
        const detailsBox = document.getElementById('details');
        const toast = document.getElementById('toast');
        const headerLocaltime = document.getElementById('header-localtime');
        const headerLocation = document.getElementById('header-location');

        function escapeHtml(value) {
            if (value === null || value === undefined) return 'No disponible';

            return String(value)
                .replace(/&/g, '&amp;')
                .replace(/</g, '&lt;')
                .replace(/>/g, '&gt;')
                .replace(/"/g, '&quot;')
                .replace(/'/g, '&#039;');
        }

        function booleanBadge(value, positiveText = 'Sí', negativeText = 'No') {
            if (value !== true && value !== false) return '<span class="text-gray-500">No concluyente</span>';
            const isTrue = value;

            return `
                <span class="inline-flex items-center gap-2 rounded-full px-2.5 py-1 text-[11px] font-semibold ${
                    isTrue
                        ? 'bg-red-50 text-red-600 border border-red-200'
                        : 'bg-emerald-50 text-emerald-600 border border-emerald-200'
                }">
                    <span class="w-2 h-2 rounded-full ${isTrue ? 'bg-red-500' : 'bg-emerald-500'}"></span>
                    ${isTrue ? positiveText : negativeText}
                </span>
            `;
        }

        function showToast(message = 'IP copiada') {
            toast.textContent = message;
            toast.classList.remove('opacity-0', 'translate-y-3');
            toast.classList.add('opacity-100', 'translate-y-0');

            setTimeout(() => {
                toast.classList.add('opacity-0', 'translate-y-3');
                toast.classList.remove('opacity-100', 'translate-y-0');
            }, 1800);
        }

        async function copyToClipboard(text) {
            try {
                await navigator.clipboard.writeText(text);
                showToast('IP copiada');
            } catch (error) {
                showToast('No se pudo copiar la IP');
            }
        }

        async function loadIpData() {
            ipBox.textContent = 'Consultando IP…';
            detailsBox.textContent = 'Consultando detalles de red…';
            headerLocaltime.textContent = 'Consultando hora…';
            headerLocation.textContent = 'Consultando ubicación…';
            try {
                const response = await fetch('/api/ip', {
                    signal: AbortSignal.timeout(10000),
                    cache: 'no-store',
                    headers: {
                        'Accept': 'application/json'
                    }
                });

                if (!response.ok) {
                    throw new Error('No se pudo consultar la IP');
                }

                const data = await response.json();
                if (typeof data.ip !== 'string' || !data.ip) throw new Error('Respuesta inválida');

                const ip = escapeHtml(data.ip);
                const ispName = escapeHtml(data?.isp?.isp);
                const org = escapeHtml(data?.isp?.org);
                const asn = escapeHtml(data?.isp?.asn);

                const country = escapeHtml(data?.location?.country);
                const countryCode = escapeHtml(data?.location?.country_code);
                const city = escapeHtml(data?.location?.city);
                const state = escapeHtml(data?.location?.state);
                const zipcode = escapeHtml(data?.location?.zipcode || 'No disponible');
                const latitude = escapeHtml(data?.location?.latitude);
                const longitude = escapeHtml(data?.location?.longitude);
                const timezone = escapeHtml(data?.location?.timezone);
                const localtime = escapeHtml(data?.location?.localtime);

                const isMobile = data?.risk?.is_mobile;
                const isVpn = data?.risk?.is_vpn;
                const isTor = data?.risk?.is_tor;
                const isProxy = data?.risk?.is_proxy;
                const isDatacenter = data?.risk?.is_datacenter;
                const riskScore = escapeHtml(data?.risk?.risk_score);

                headerLocaltime.textContent = data?.location?.localtime ?? 'No disponible';
                headerLocation.textContent = [data?.location?.city, data?.location?.country].filter(Boolean).join(', ') || 'No disponible';

                ipBox.classList.remove('animate-pulse');
                detailsBox.classList.remove('animate-pulse');

                ipBox.innerHTML = `
                    <div class="flex flex-wrap items-center gap-3 mb-3">
                        <div class="text-3xl md:text-4xl lg:text-[2.6rem] font-black tracking-tight text-gray-950 break-all leading-none">
                            ${ip}
                        </div>

                        <button
                            id="copyBtn"
                            type="button"
                            class="inline-flex items-center justify-center w-11 h-11 rounded-2xl bg-[#FF2669]/10 hover:bg-[#FF2669]/20 active:scale-95 transition-all duration-200 border border-[#FF2669]/10 shrink-0"
                            aria-label="Copiar IP"
                            title="Copiar IP"
                        >
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-[#FF2669]" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <rect x="9" y="9" width="10" height="10" rx="2" stroke-width="2"></rect>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 15H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h7a2 2 0 0 1 2 2v1"></path>
                            </svg>
                        </button>
                    </div>

                    <div class="text-xs md:text-sm text-gray-500 mb-5">
                        ${timezone} • ${city}, ${state}, ${country}
                    </div>

                    <div class="grid grid-cols-2 md:grid-cols-4 gap-3">
                        <div class="rounded-2xl bg-white border border-gray-200 p-3">
                            <p class="text-[10px] uppercase tracking-wide text-gray-400 mb-1.5">País</p>
                            <p class="font-bold text-sm text-gray-900">${countryCode}</p>
                        </div>

                        <div class="rounded-2xl bg-white border border-gray-200 p-3">
                            <p class="text-[10px] uppercase tracking-wide text-gray-400 mb-1.5">Ciudad</p>
                            <p class="font-bold text-sm text-gray-900">${city}</p>
                        </div>

                        <div class="rounded-2xl bg-white border border-gray-200 p-3">
                            <p class="text-[10px] uppercase tracking-wide text-gray-400 mb-1.5">ISP</p>
                            <p class="font-bold text-sm text-gray-900 break-words">${ispName}</p>
                        </div>

                        <div class="rounded-2xl bg-white border border-gray-200 p-3">
                            <p class="text-[10px] uppercase tracking-wide text-gray-400 mb-1.5">Riesgo</p>
                            <p class="font-bold text-sm text-gray-900">${riskScore}</p>
                        </div>
                    </div>
                `;

                detailsBox.innerHTML = `
                    <div class="flex items-center justify-between gap-4 mb-5">
                        <h2 class="text-xl font-bold text-gray-900">Información de red</h2>
                        <span class="inline-flex items-center rounded-full px-3 py-1 text-[11px] font-semibold bg-[#FF2669]/10 text-[#FF2669] border border-[#FF2669]/20">
                            IPCloudi
                        </span>
                    </div>

                    <div class="space-y-5 text-xs md:text-sm">
                        <div>
                            <h3 class="text-[10px] uppercase tracking-[0.2em] text-gray-400 font-bold mb-2.5">ISP</h3>
                            <div class="space-y-2">
                                <div class="flex justify-between gap-4 border-b border-gray-100 pb-2">
                                    <span class="text-gray-500">Proveedor</span>
                                    <span class="font-semibold text-gray-900 text-right">${ispName}</span>
                                </div>
                                <div class="flex justify-between gap-4 border-b border-gray-100 pb-2">
                                    <span class="text-gray-500">Organización</span>
                                    <span class="font-semibold text-gray-900 text-right">${org}</span>
                                </div>
                                <div class="flex justify-between gap-4">
                                    <span class="text-gray-500">ASN</span>
                                    <span class="font-semibold text-gray-900 text-right">${asn}</span>
                                </div>
                            </div>
                        </div>

                        <div>
                            <h3 class="text-[10px] uppercase tracking-[0.2em] text-gray-400 font-bold mb-2.5">Ubicación aproximada</h3>
                            <div class="space-y-2">
                                <div class="flex justify-between gap-4 border-b border-gray-100 pb-2">
                                    <span class="text-gray-500">País</span>
                                    <span class="font-semibold text-gray-900 text-right">${country} (${countryCode})</span>
                                </div>
                                <div class="flex justify-between gap-4 border-b border-gray-100 pb-2">
                                    <span class="text-gray-500">Estado</span>
                                    <span class="font-semibold text-gray-900 text-right">${state}</span>
                                </div>
                                <div class="flex justify-between gap-4 border-b border-gray-100 pb-2">
                                    <span class="text-gray-500">Ciudad</span>
                                    <span class="font-semibold text-gray-900 text-right">${city}</span>
                                </div>
                                <div class="flex justify-between gap-4 border-b border-gray-100 pb-2">
                                    <span class="text-gray-500">Código postal</span>
                                    <span class="font-semibold text-gray-900 text-right">${zipcode}</span>
                                </div>
                                <div class="flex justify-between gap-4 border-b border-gray-100 pb-2">
                                    <span class="text-gray-500">Latitud</span>
                                    <span class="font-semibold text-gray-900 text-right">${latitude}</span>
                                </div>
                                <div class="flex justify-between gap-4 border-b border-gray-100 pb-2">
                                    <span class="text-gray-500">Longitud</span>
                                    <span class="font-semibold text-gray-900 text-right">${longitude}</span>
                                </div>
                                <div class="flex justify-between gap-4 border-b border-gray-100 pb-2">
                                    <span class="text-gray-500">Zona horaria</span>
                                    <span class="font-semibold text-gray-900 text-right">${timezone}</span>
                                </div>
                                <div class="flex justify-between gap-4">
                                    <span class="text-gray-500">Hora local</span>
                                    <span class="font-semibold text-gray-900 text-right">${localtime}</span>
                                </div>
                            </div>
                        </div>

                        <div>
                            <h3 class="text-[10px] uppercase tracking-[0.2em] text-gray-400 font-bold mb-2.5">Señales orientativas</h3>

                            <div class="grid grid-cols-2 gap-3">
                                <div class="rounded-2xl border border-gray-200 p-3 bg-gray-50">
                                    <p class="text-gray-500 text-[10px] uppercase tracking-wide mb-2">Red móvil</p>
                                    ${booleanBadge(isMobile, 'Sí', 'No')}
                                </div>

                                <div class="rounded-2xl border border-gray-200 p-3 bg-gray-50">
                                    <p class="text-gray-500 text-[10px] uppercase tracking-wide mb-2">VPN</p>
                                    ${booleanBadge(isVpn, 'Sí', 'No')}
                                </div>

                                <div class="rounded-2xl border border-gray-200 p-3 bg-gray-50">
                                    <p class="text-gray-500 text-[10px] uppercase tracking-wide mb-2">TOR</p>
                                    ${booleanBadge(isTor, 'Sí', 'No')}
                                </div>

                                <div class="rounded-2xl border border-gray-200 p-3 bg-gray-50">
                                    <p class="text-gray-500 text-[10px] uppercase tracking-wide mb-2">Proxy</p>
                                    ${booleanBadge(isProxy, 'Sí', 'No')}
                                </div>

                                <div class="rounded-2xl border border-gray-200 p-3 bg-gray-50 col-span-2">
                                    <div class="flex items-center justify-between gap-4">
                                        <div>
                                            <p class="text-gray-500 text-[10px] uppercase tracking-wide mb-2">Datacenter</p>
                                            ${booleanBadge(isDatacenter, 'Sí', 'No')}
                                        </div>

                                        <div class="text-right">
                                            <p class="text-gray-500 text-[10px] uppercase tracking-wide mb-1">Puntuación del proveedor</p>
                                            <p class="text-xl font-black text-gray-900">${riskScore}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                `;

                const copyBtn = document.getElementById('copyBtn');
                copyBtn.addEventListener('click', () => copyToClipboard(data.ip));

            } catch (error) {
                ipBox.classList.remove('animate-pulse');
                detailsBox.classList.remove('animate-pulse');

                ipBox.innerHTML = `
                    <div class="rounded-3xl border border-red-200 bg-red-50 p-5">
                        <h2 class="text-xl font-bold text-red-700 mb-2">No se pudieron cargar los datos IP</h2>
                        <p class="text-sm text-red-600">
                            No fue posible consultar los datos. Puedes reintentar sin recargar la página.
                        </p>
                        <button id="retry-ip" type="button" class="mt-4 rounded-lg bg-red-700 text-white px-4 py-2">Reintentar</button>
                    </div>
                `;

                detailsBox.innerHTML = `
                    <div class="rounded-3xl border border-red-200 bg-red-50 p-5">
                        <h2 class="text-lg font-bold text-red-700 mb-2">Error de conexión</h2>
                        <p class="text-sm text-red-600">
                            Los detalles de red no están disponibles ahora.
                        </p>
                    </div>
                `;

                document.getElementById('retry-ip').addEventListener('click', loadIpData);
                headerLocaltime.textContent = 'No disponible';
                headerLocation.textContent = 'Sin datos';
            }
        }

        loadIpData();
    </script>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>What Is My IP Address? | IPCloudi</title>
    <meta name="description" content="Check your public IP address instantly. See your approximate location, ISP, timezone and connection security signals like VPN, proxy, TOR and datacenter detection.">
    <meta name="keywords" content="what is my ip, my ip address, check ip, ip lookup, public ip, ip location, vpn detection, proxy detection">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="https://ipcloudi.com/">
    <link rel="icon" href="https://cloudi.mx/assets/logos/4_short.png">

    <!-- Open Graph -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="What Is My IP Address? | IPCloudi">
    <meta property="og:description" content="Check your public IP address instantly and review location, ISP, timezone and security signals.">
    <meta property="og:url" content="https://ipcloudi.com/">
    <meta property="og:site_name" content="IPCloudi">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="What Is My IP Address? | IPCloudi">
    <meta name="twitter:description" content="Check your public IP address instantly and review location, ISP, timezone and security signals.">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Google AdSense -->
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-9068723123011153" crossorigin="anonymous"></script>
</head>
<body class="bg-black text-gray-900 overflow-x-hidden">
    <noscript>
        <div class="bg-yellow-100 text-yellow-900 text-center text-sm px-4 py-3">
            This site works better with JavaScript enabled because IP data is loaded dynamically.
        </div>
    </noscript>

    <!-- Top Ad -->
    <section class="w-full px-3 pt-3">
        <div class="mx-auto max-w-[1700px]">
            <div class="h-20 rounded-2xl border border-white/10 bg-white/5 text-white/40 flex items-center justify-center text-sm">
                Google Ads Top
            </div>
        </div>
    </section>

    <main class="px-3 py-3">
        <div class="mx-auto max-w-[1700px] grid grid-cols-1 xl:grid-cols-[180px_minmax(0,1fr)_180px] gap-4 items-start">

            <!-- Left Ad -->
            <aside class="hidden xl:block" aria-label="Left advertising area">
                <div class="sticky top-3">
                    <div class="h-[720px] rounded-3xl border border-white/10 bg-white/5 text-white/40 flex items-center justify-center text-sm">
                        Tu marca aquí
                    </div>
                </div>
            </aside>

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
                                    <p class="text-xs text-gray-500">Public IP checker and network information tool</p>
                                </div>
                            </div>

                            <nav class="text-xs text-gray-500 flex flex-wrap items-center gap-4 justify-center" aria-label="Legal navigation">
                                <a href="/privacy-policy" class="hover:text-[#FF2669] transition-colors">Privacy Policy</a>
                                <a href="/terms" class="hover:text-[#FF2669] transition-colors">Terms</a>
                                <a href="/contact" class="hover:text-[#FF2669] transition-colors">Contact</a>
                            </nav>

                            <div class="text-xs text-gray-500 flex flex-wrap items-center gap-2">
                                <span id="header-localtime" class="font-medium">Loading local time...</span>
                                <span class="hidden md:inline">◆</span>
                                <span id="header-location">Loading location...</span>
                            </div>
                        </header>

                        <!-- Main -->
                        <section class="grid grid-cols-1 lg:grid-cols-12 gap-4 items-start">
                            <!-- Left -->
                            <div class="lg:col-span-7">
                                <div class="max-w-2xl">
                                    <p class="text-[11px] md:text-xs uppercase tracking-[0.18em] text-[#FF2669] font-semibold mb-2">
                                        Free IP tool
                                    </p>

                                    <h1 class="text-2xl md:text-3xl lg:text-4xl font-black leading-tight tracking-tight text-gray-900">
                                        What is my IP address?
                                    </h1>

                                    <p class="mt-3 text-sm md:text-base leading-7 text-gray-600 max-w-xl">
                                        Check your IP address instantly. This tool shows your public IP, approximate location, ISP, timezone and security status including VPN, proxy, TOR and datacenter signals.
                                    </p>
                                </div>

                                <!-- Main IP Box -->
                                <div id="ip-box" class="mt-5 rounded-[1.5rem] bg-gray-50 border border-gray-200 p-4 md:p-5 shadow-inner transition-all duration-300 hover:shadow-lg animate-pulse">
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
                                                Related articles
                                            </p>
                                            <h2 class="text-lg md:text-xl font-black text-gray-900">
                                                Learn more about IP addresses and network lookups
                                            </h2>
                                            <p class="text-sm text-gray-600 mt-2">
                                                Want to understand your IP better? Start with these quick guides.
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
                                                        Basic
                                                    </span>
                                                </div>

                                                <h3 class="text-base md:text-lg font-bold text-gray-900 group-hover:text-[#FF2669] transition-colors">
                                                    What is my IP?
                                                </h3>

                                                <p class="mt-2 text-sm text-gray-600 leading-6">
                                                    Understand what an IP address is, why it matters and what it can reveal about your connection.
                                                </p>

                                                <div class="mt-4 inline-flex items-center gap-2 text-sm font-semibold text-[#FF2669]">
                                                    Read article
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
                                                    Learn how an IP lookup works and what kind of data it can show such as location, ISP and risk indicators.
                                                </p>

                                                <div class="mt-4 inline-flex items-center gap-2 text-sm font-semibold text-sky-600">
                                                    Read article
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
                                <div id="details" class="rounded-[1.5rem] bg-white/80 backdrop-blur border border-gray-200 p-4 md:p-5 shadow-xl transition-all duration-300 hover:shadow-2xl animate-pulse">
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

                        <!-- Middle Ad -->
                        <section class="mt-5">
                            <div class="h-24 rounded-2xl border border-dashed border-gray-300 bg-gray-50 text-gray-400 flex items-center justify-center text-sm">
                                Google Ads Display
                            </div>
                        </section>

                        <!-- SEO Content -->
                        <section class="mt-5 grid grid-cols-1 lg:grid-cols-3 gap-4">
                            <div class="lg:col-span-2 rounded-3xl bg-gray-50 border border-gray-200 p-4 md:p-5">
                                <h2 class="text-lg md:text-xl font-bold text-gray-900 mb-3">What is an IP address?</h2>
                                <p class="text-sm text-gray-600 leading-7">
                                    An IP address is a unique numerical identifier assigned to a device connected to the internet or a network. It helps systems communicate with each other and can reveal useful details such as your approximate location, internet provider and connection type.
                                </p>
                                <p class="text-sm text-gray-600 leading-7 mt-3">
                                    With IPCloudi you can instantly check your public IP, review location and ISP information, and detect basic signals related to VPN, proxy, TOR or datacenter usage.
                                </p>
                            </div>

                            <div class="rounded-3xl bg-gray-50 border border-gray-200 p-4 md:p-5">
                                <h3 class="text-lg font-bold text-gray-900 mb-3">What can you check here?</h3>
                                <ul class="space-y-2 text-sm text-gray-600">
                                    <li>• Public IP address</li>
                                    <li>• Country, state and city</li>
                                    <li>• ISP, ASN and organization</li>
                                    <li>• Timezone and local time</li>
                                    <li>• VPN, proxy, TOR and datacenter signals</li>
                                </ul>
                            </div>
                        </section>

                        <!-- Bottom legal footer inside card -->
                        <footer class="mt-8 pt-5 border-t border-gray-200">
                            <div class="flex flex-col md:flex-row items-center justify-between gap-3 text-xs text-gray-500">
                                <p>© {{ date('Y') }} IPCloudi. Free IP checker tool.</p>

                                <nav class="flex flex-wrap items-center justify-center gap-4" aria-label="Footer navigation">
                                    <a href="/privacy-policy" class="hover:text-[#FF2669] transition-colors">Privacy Policy</a>
                                    <a href="/terms" class="hover:text-[#FF2669] transition-colors">Terms</a>
                                    <a href="/contact" class="hover:text-[#FF2669] transition-colors">Contact</a>
                                </nav>
                            </div>
                        </footer>
                    </div>
                </div>
            </section>

            <!-- Right Ad -->
            <aside class="hidden xl:block" aria-label="Right advertising area">
                <div class="sticky top-3">
                    <div class="h-[720px] rounded-3xl border border-white/10 bg-white/5 text-white/40 flex items-center justify-center text-sm">
                        Tu marca aquí
                    </div>
                </div>
            </aside>
        </div>
    </main>

    <!-- Bottom Ad -->
    <section class="w-full px-3 pb-3">
        <div class="mx-auto max-w-[1700px]">
            <div class="h-24 rounded-2xl border border-white/10 bg-white/5 text-white/40 flex items-center justify-center text-sm">
                Google Ads Bottom
            </div>
        </div>
    </section>

    <!-- Toast -->
    <div id="toast" class="fixed bottom-5 right-5 translate-y-3 opacity-0 pointer-events-none transition-all duration-300 bg-gray-950 text-white px-4 py-3 rounded-2xl shadow-2xl text-sm font-medium z-50">
        IP copied successfully
    </div>

    <script>
        const ipBox = document.getElementById('ip-box');
        const detailsBox = document.getElementById('details');
        const toast = document.getElementById('toast');
        const headerLocaltime = document.getElementById('header-localtime');
        const headerLocation = document.getElementById('header-location');

        function escapeHtml(value) {
            if (value === null || value === undefined) return 'Not available';

            return String(value)
                .replace(/&/g, '&amp;')
                .replace(/</g, '&lt;')
                .replace(/>/g, '&gt;')
                .replace(/"/g, '&quot;')
                .replace(/'/g, '&#039;');
        }

        function booleanBadge(value, positiveText = 'Yes', negativeText = 'No') {
            const isTrue = Boolean(value);

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

        function showToast(message = 'IP copied successfully') {
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
                showToast('IP copied successfully');
            } catch (error) {
                showToast('Could not copy the IP');
            }
        }

        async function loadIpData() {
            try {
                const response = await fetch('/api/ip', {
                    headers: {
                        'Accept': 'application/json'
                    }
                });

                if (!response.ok) {
                    throw new Error('Could not fetch IP data');
                }

                const data = await response.json();

                const ip = escapeHtml(data.ip);
                const ispName = escapeHtml(data?.isp?.isp);
                const org = escapeHtml(data?.isp?.org);
                const asn = escapeHtml(data?.isp?.asn);

                const country = escapeHtml(data?.location?.country);
                const countryCode = escapeHtml(data?.location?.country_code);
                const city = escapeHtml(data?.location?.city);
                const state = escapeHtml(data?.location?.state);
                const zipcode = escapeHtml(data?.location?.zipcode || 'Not available');
                const latitude = escapeHtml(data?.location?.latitude);
                const longitude = escapeHtml(data?.location?.longitude);
                const timezone = escapeHtml(data?.location?.timezone);
                const localtime = escapeHtml(data?.location?.localtime);

                const isMobile = Boolean(data?.risk?.is_mobile);
                const isVpn = Boolean(data?.risk?.is_vpn);
                const isTor = Boolean(data?.risk?.is_tor);
                const isProxy = Boolean(data?.risk?.is_proxy);
                const isDatacenter = Boolean(data?.risk?.is_datacenter);
                const riskScore = escapeHtml(data?.risk?.risk_score);

                headerLocaltime.textContent = localtime;
                headerLocation.textContent = `${city}, ${country}`;

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
                            aria-label="Copy IP"
                            title="Copy IP"
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
                            <p class="text-[10px] uppercase tracking-wide text-gray-400 mb-1.5">Country</p>
                            <p class="font-bold text-sm text-gray-900">${countryCode}</p>
                        </div>

                        <div class="rounded-2xl bg-white border border-gray-200 p-3">
                            <p class="text-[10px] uppercase tracking-wide text-gray-400 mb-1.5">City</p>
                            <p class="font-bold text-sm text-gray-900">${city}</p>
                        </div>

                        <div class="rounded-2xl bg-white border border-gray-200 p-3">
                            <p class="text-[10px] uppercase tracking-wide text-gray-400 mb-1.5">ISP</p>
                            <p class="font-bold text-sm text-gray-900 break-words">${ispName}</p>
                        </div>

                        <div class="rounded-2xl bg-white border border-gray-200 p-3">
                            <p class="text-[10px] uppercase tracking-wide text-gray-400 mb-1.5">Risk</p>
                            <p class="font-bold text-sm text-gray-900">${riskScore}</p>
                        </div>
                    </div>
                `;

                detailsBox.innerHTML = `
                    <div class="flex items-center justify-between gap-4 mb-5">
                        <h2 class="text-xl font-bold text-gray-900">Network information</h2>
                        <span class="inline-flex items-center rounded-full px-3 py-1 text-[11px] font-semibold bg-[#FF2669]/10 text-[#FF2669] border border-[#FF2669]/20">
                            IPCloudi
                        </span>
                    </div>

                    <div class="space-y-5 text-xs md:text-sm">
                        <div>
                            <h3 class="text-[10px] uppercase tracking-[0.2em] text-gray-400 font-bold mb-2.5">ISP</h3>
                            <div class="space-y-2">
                                <div class="flex justify-between gap-4 border-b border-gray-100 pb-2">
                                    <span class="text-gray-500">Provider</span>
                                    <span class="font-semibold text-gray-900 text-right">${ispName}</span>
                                </div>
                                <div class="flex justify-between gap-4 border-b border-gray-100 pb-2">
                                    <span class="text-gray-500">Organization</span>
                                    <span class="font-semibold text-gray-900 text-right">${org}</span>
                                </div>
                                <div class="flex justify-between gap-4">
                                    <span class="text-gray-500">ASN</span>
                                    <span class="font-semibold text-gray-900 text-right">${asn}</span>
                                </div>
                            </div>
                        </div>

                        <div>
                            <h3 class="text-[10px] uppercase tracking-[0.2em] text-gray-400 font-bold mb-2.5">Location</h3>
                            <div class="space-y-2">
                                <div class="flex justify-between gap-4 border-b border-gray-100 pb-2">
                                    <span class="text-gray-500">Country</span>
                                    <span class="font-semibold text-gray-900 text-right">${country} (${countryCode})</span>
                                </div>
                                <div class="flex justify-between gap-4 border-b border-gray-100 pb-2">
                                    <span class="text-gray-500">State</span>
                                    <span class="font-semibold text-gray-900 text-right">${state}</span>
                                </div>
                                <div class="flex justify-between gap-4 border-b border-gray-100 pb-2">
                                    <span class="text-gray-500">City</span>
                                    <span class="font-semibold text-gray-900 text-right">${city}</span>
                                </div>
                                <div class="flex justify-between gap-4 border-b border-gray-100 pb-2">
                                    <span class="text-gray-500">ZIP code</span>
                                    <span class="font-semibold text-gray-900 text-right">${zipcode}</span>
                                </div>
                                <div class="flex justify-between gap-4 border-b border-gray-100 pb-2">
                                    <span class="text-gray-500">Latitude</span>
                                    <span class="font-semibold text-gray-900 text-right">${latitude}</span>
                                </div>
                                <div class="flex justify-between gap-4 border-b border-gray-100 pb-2">
                                    <span class="text-gray-500">Longitude</span>
                                    <span class="font-semibold text-gray-900 text-right">${longitude}</span>
                                </div>
                                <div class="flex justify-between gap-4 border-b border-gray-100 pb-2">
                                    <span class="text-gray-500">Timezone</span>
                                    <span class="font-semibold text-gray-900 text-right">${timezone}</span>
                                </div>
                                <div class="flex justify-between gap-4">
                                    <span class="text-gray-500">Local time</span>
                                    <span class="font-semibold text-gray-900 text-right">${localtime}</span>
                                </div>
                            </div>
                        </div>

                        <div>
                            <h3 class="text-[10px] uppercase tracking-[0.2em] text-gray-400 font-bold mb-2.5">Security</h3>

                            <div class="grid grid-cols-2 gap-3">
                                <div class="rounded-2xl border border-gray-200 p-3 bg-gray-50">
                                    <p class="text-gray-500 text-[10px] uppercase tracking-wide mb-2">Mobile</p>
                                    ${booleanBadge(isMobile, 'Yes', 'No')}
                                </div>

                                <div class="rounded-2xl border border-gray-200 p-3 bg-gray-50">
                                    <p class="text-gray-500 text-[10px] uppercase tracking-wide mb-2">VPN</p>
                                    ${booleanBadge(isVpn, 'Yes', 'No')}
                                </div>

                                <div class="rounded-2xl border border-gray-200 p-3 bg-gray-50">
                                    <p class="text-gray-500 text-[10px] uppercase tracking-wide mb-2">TOR</p>
                                    ${booleanBadge(isTor, 'Yes', 'No')}
                                </div>

                                <div class="rounded-2xl border border-gray-200 p-3 bg-gray-50">
                                    <p class="text-gray-500 text-[10px] uppercase tracking-wide mb-2">Proxy</p>
                                    ${booleanBadge(isProxy, 'Yes', 'No')}
                                </div>

                                <div class="rounded-2xl border border-gray-200 p-3 bg-gray-50 col-span-2">
                                    <div class="flex items-center justify-between gap-4">
                                        <div>
                                            <p class="text-gray-500 text-[10px] uppercase tracking-wide mb-2">Datacenter</p>
                                            ${booleanBadge(isDatacenter, 'Yes', 'No')}
                                        </div>

                                        <div class="text-right">
                                            <p class="text-gray-500 text-[10px] uppercase tracking-wide mb-1">Risk score</p>
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
                        <h2 class="text-xl font-bold text-red-700 mb-2">Could not load IP data</h2>
                        <p class="text-sm text-red-600">
                            There was a problem loading your IP information. Please refresh the page and try again.
                        </p>
                    </div>
                `;

                detailsBox.innerHTML = `
                    <div class="rounded-3xl border border-red-200 bg-red-50 p-5">
                        <h2 class="text-lg font-bold text-red-700 mb-2">Connection error</h2>
                        <p class="text-sm text-red-600">
                            Network details are not available right now.
                        </p>
                    </div>
                `;

                headerLocaltime.textContent = 'Not available';
                headerLocation.textContent = 'No data';
            }
        }

        loadIpData();
    </script>
</body>
</html>
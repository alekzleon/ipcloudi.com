<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IP Lookup: qué es, cómo funciona y qué información muestra | Cloudi</title>
    <meta name="description" content="Aprende qué es un IP Lookup, cómo funciona y qué datos puede mostrar una consulta IP como ubicación aproximada, proveedor, ASN, VPN, proxy y riesgo.">
    <meta name="keywords" content="ip lookup, consulta ip, buscar ip, ip pública, ubicación ip, vpn proxy tor">

    <link href="https://cloudi.mx/assets/logos/4_short.png" rel="icon">
    @vite(['resources/css/app.css'])
</head>

<body class="bg-black text-white overflow-x-hidden">

    <main class="px-4 py-4 md:px-6 md:py-6">
        <div class="mx-auto max-w-6xl">

            <!-- Hero -->
            <section class="rounded-[2rem] bg-white text-gray-900 border border-white/10 overflow-hidden relative shadow-2xl">
                <div class="absolute -top-24 right-0 w-72 h-72 bg-sky-300/20 blur-3xl rounded-full pointer-events-none"></div>
                <div class="absolute bottom-0 left-0 w-72 h-72 bg-[#FF2669]/15 blur-3xl rounded-full pointer-events-none"></div>

                <div class="relative z-10 p-6 md:p-8 lg:p-10">
                    <div class="flex flex-wrap items-center gap-3 mb-5">
                        <a href="/" class="inline-flex items-center gap-2 rounded-full border border-gray-200 bg-white px-4 py-2 text-sm font-medium text-gray-700 hover:text-sky-600 hover:border-sky-300 transition">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                            </svg>
                            Volver a la herramienta
                        </a>

                        <span class="inline-flex items-center rounded-full px-3 py-1 text-xs font-semibold bg-sky-100 text-sky-700 border border-sky-200">
                            Lookup guide
                        </span>
                    </div>

                    <div class="max-w-4xl">
                        <p class="text-[11px] md:text-xs uppercase tracking-[0.2em] text-sky-600 font-semibold mb-3">
                            Cloudi IP Tool
                        </p>

                        <h1 class="text-3xl md:text-5xl font-black tracking-tight leading-tight text-gray-900">
                            IP Lookup: qué es, cómo funciona y qué información puede mostrar
                        </h1>

                        <p class="mt-5 text-base md:text-lg leading-8 text-gray-600 max-w-3xl">
                            Un IP Lookup es una consulta que analiza una dirección IP para mostrar datos técnicos y contextuales
                            sobre la conexión. Puede ayudarte a entender desde qué red sale una solicitud, qué proveedor la maneja
                            y si existen señales relacionadas con VPN, proxy o datacenter.
                        </p>
                    </div>

                    <div class="mt-8 grid grid-cols-1 md:grid-cols-3 gap-4">
                        <div class="rounded-3xl border border-gray-200 bg-gray-50 p-5">
                            <p class="text-xs uppercase tracking-wide text-gray-400 mb-2">Qué hace</p>
                            <p class="font-bold text-gray-900">Consulta contexto de red</p>
                            <p class="text-sm text-gray-600 mt-2">Te muestra datos técnicos asociados a una IP.</p>
                        </div>

                        <div class="rounded-3xl border border-gray-200 bg-gray-50 p-5">
                            <p class="text-xs uppercase tracking-wide text-gray-400 mb-2">Qué puede mostrar</p>
                            <p class="font-bold text-gray-900">ISP, ASN y ubicación</p>
                            <p class="text-sm text-gray-600 mt-2">Ofrece una visión aproximada de la red y la región.</p>
                        </div>

                        <div class="rounded-3xl border border-gray-200 bg-gray-50 p-5">
                            <p class="text-xs uppercase tracking-wide text-gray-400 mb-2">Qué ayuda a detectar</p>
                            <p class="font-bold text-gray-900">VPN, proxy o TOR</p>
                            <p class="text-sm text-gray-600 mt-2">Puede ayudarte a interpretar señales de anonimización.</p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Content -->
            <section class="mt-5 grid grid-cols-1 lg:grid-cols-12 gap-5 items-start">

                <!-- Main -->
                <article class="lg:col-span-8 rounded-[2rem] bg-white text-gray-900 border border-white/10 shadow-2xl p-6 md:p-8">
                    <p class="text-lg leading-8 text-gray-600">
                        Cuando una herramienta hace un IP Lookup, no está “leyendo tu dispositivo” ni accediendo a todo tu sistema.
                        Lo que hace es analizar bases de datos y señales asociadas a una dirección IP pública para ofrecer información
                        útil sobre la conexión y su contexto.
                    </p>

                    <h2 class="mt-10 text-2xl md:text-3xl font-black text-gray-900">¿Qué es un IP Lookup?</h2>
                    <p class="mt-4 text-base leading-8 text-gray-600">
                        Un IP Lookup es el proceso de consultar una dirección IP para obtener datos como país, ciudad aproximada,
                        proveedor de internet, organización, ASN, zona horaria y posibles indicadores de riesgo. Es una herramienta
                        útil tanto para usuarios comunes como para administradores, analistas o negocios digitales.
                    </p>

                    <div class="my-8 rounded-[1.5rem] border border-gray-200 bg-gray-50 p-5">
                        <p class="text-sm font-semibold text-gray-900 mb-2">Ejemplo simple:</p>
                        <p class="text-sm leading-7 text-gray-600">
                            si una visita entra a tu sitio web, un IP Lookup puede ayudarte a entender desde qué tipo de red llegó,
                            qué proveedor usa y si la conexión parece residencial, móvil, corporativa o de datacenter.
                        </p>
                    </div>

                    <h2 class="mt-10 text-2xl md:text-3xl font-black text-gray-900">¿Qué tipo de información puede mostrar?</h2>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 my-8">
                        <div class="rounded-3xl border border-gray-200 p-5">
                            <h3 class="font-bold text-gray-900 mb-3">Datos generales</h3>
                            <ul class="space-y-2 text-sm text-gray-600">
                                <li>• Dirección IP</li>
                                <li>• País</li>
                                <li>• Estado o región</li>
                                <li>• Ciudad aproximada</li>
                                <li>• Código postal aproximado</li>
                                <li>• Zona horaria</li>
                            </ul>
                        </div>

                        <div class="rounded-3xl border border-gray-200 p-5">
                            <h3 class="font-bold text-gray-900 mb-3">Datos técnicos</h3>
                            <ul class="space-y-2 text-sm text-gray-600">
                                <li>• ISP o proveedor de internet</li>
                                <li>• Organización</li>
                                <li>• ASN</li>
                                <li>• Conexión móvil</li>
                                <li>• Datacenter</li>
                                <li>• Nivel o score de riesgo</li>
                            </ul>
                        </div>
                    </div>

                    <h2 class="mt-10 text-2xl md:text-3xl font-black text-gray-900">¿Qué detecta sobre seguridad?</h2>
                    <p class="mt-4 text-base leading-8 text-gray-600">
                        Algunas herramientas avanzadas no solo muestran ubicación o proveedor, también evalúan si la IP parece asociada a:
                    </p>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 my-8">
                        <div class="rounded-[1.5rem] border border-red-200 bg-red-50 p-5">
                            <h3 class="text-lg font-bold text-red-700 mb-2">VPN o proxy</h3>
                            <p class="text-sm leading-7 text-red-700/90">
                                Señales de que la conexión podría estar ocultando la IP original del usuario.
                            </p>
                        </div>

                        <div class="rounded-[1.5rem] border border-amber-200 bg-amber-50 p-5">
                            <h3 class="text-lg font-bold text-amber-700 mb-2">TOR o datacenter</h3>
                            <p class="text-sm leading-7 text-amber-700/90">
                                Indicadores de tráfico que puede venir desde redes de anonimato o infraestructura de servidores.
                            </p>
                        </div>
                    </div>

                    <h2 class="mt-10 text-2xl md:text-3xl font-black text-gray-900">¿Para qué sirve un IP Lookup en la práctica?</h2>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 my-8">
                        <div class="rounded-3xl border border-gray-200 p-5">
                            <p class="text-xs uppercase tracking-wide text-gray-400 mb-2">Usuarios</p>
                            <h3 class="font-bold text-gray-900">Verificar su conexión</h3>
                            <p class="text-sm text-gray-600 mt-2">Saber qué IP tienen y revisar si aparece VPN o proxy.</p>
                        </div>

                        <div class="rounded-3xl border border-gray-200 p-5">
                            <p class="text-xs uppercase tracking-wide text-gray-400 mb-2">Empresas</p>
                            <h3 class="font-bold text-gray-900">Analizar tráfico</h3>
                            <p class="text-sm text-gray-600 mt-2">Entender de dónde llegan visitas o señales sospechosas.</p>
                        </div>

                        <div class="rounded-3xl border border-gray-200 p-5">
                            <p class="text-xs uppercase tracking-wide text-gray-400 mb-2">Soporte / TI</p>
                            <h3 class="font-bold text-gray-900">Diagnóstico rápido</h3>
                            <p class="text-sm text-gray-600 mt-2">Revisar proveedor, región y contexto técnico de una conexión.</p>
                        </div>
                    </div>

                    <h2 class="mt-10 text-2xl md:text-3xl font-black text-gray-900">Lo que un IP Lookup no hace</h2>
                    <p class="mt-4 text-base leading-8 text-gray-600">
                        Es importante entender sus límites. Un IP Lookup no suele mostrar información privada exacta como nombre completo,
                        domicilio preciso o contenido personal del dispositivo. Su valor está en el contexto técnico, no en revelar toda
                        la identidad del usuario.
                    </p>

                    <div class="my-8 rounded-[1.5rem] border border-gray-200 bg-gray-50 p-5">
                        <h3 class="text-lg font-bold text-gray-900 mb-2">Punto clave</h3>
                        <p class="text-sm leading-7 text-gray-600">
                            La información mostrada normalmente es aproximada y depende de bases de datos, redes, proveedores y señales públicas.
                            Por eso una ciudad o región puede no ser exacta al 100%.
                        </p>
                    </div>

                    <h2 class="mt-10 text-2xl md:text-3xl font-black text-gray-900">Preguntas frecuentes</h2>

                    <div class="mt-6 space-y-4">
                        <div class="rounded-3xl border border-gray-200 p-5">
                            <h3 class="font-bold text-gray-900">¿Un IP Lookup muestra mi dirección exacta?</h3>
                            <p class="text-sm text-gray-600 mt-2 leading-7">
                                No normalmente. Lo habitual es mostrar una ubicación aproximada, no una dirección precisa.
                            </p>
                        </div>

                        <div class="rounded-3xl border border-gray-200 p-5">
                            <h3 class="font-bold text-gray-900">¿Puede decir si uso VPN?</h3>
                            <p class="text-sm text-gray-600 mt-2 leading-7">
                                Muchas herramientas intentan detectarlo, aunque depende de la calidad de la base de datos y la red usada.
                            </p>
                        </div>

                        <div class="rounded-3xl border border-gray-200 p-5">
                            <h3 class="font-bold text-gray-900">¿Sirve para revisar una IP sospechosa?</h3>
                            <p class="text-sm text-gray-600 mt-2 leading-7">
                                Sí, puede ayudarte a obtener contexto sobre la red, el proveedor y posibles señales de anonimización.
                            </p>
                        </div>
                    </div>
                </article>

                <!-- Sidebar -->
                <aside class="lg:col-span-4 space-y-5 lg:sticky lg:top-5">
                    <div class="rounded-[2rem] bg-white text-gray-900 border border-white/10 shadow-2xl p-6">
                        <p class="text-xs uppercase tracking-[0.18em] text-sky-600 font-semibold mb-3">Resumen rápido</p>
                        <ul class="space-y-3 text-sm text-gray-600">
                            <li>• Un IP Lookup consulta datos asociados a una IP pública.</li>
                            <li>• Puede mostrar ubicación aproximada, ISP, ASN y organización.</li>
                            <li>• También puede detectar señales de VPN, proxy, TOR o datacenter.</li>
                            <li>• Es útil para diagnóstico, análisis y revisión básica de seguridad.</li>
                        </ul>
                    </div>

                    <div class="rounded-[2rem] bg-white text-gray-900 border border-white/10 shadow-2xl p-6">
                        <p class="text-xs uppercase tracking-[0.18em] text-sky-600 font-semibold mb-3">Siguiente lectura</p>
                        <h3 class="text-xl font-black text-gray-900">¿Qué es una IP?</h3>
                        <p class="text-sm text-gray-600 leading-7 mt-3">
                            Si quieres ir más a la base, primero revisa la guía donde explicamos qué es una dirección IP y cómo funciona realmente.
                        </p>

                        <a href="{{ url('/what-is-my-ip') }}" class="mt-5 inline-flex items-center gap-2 rounded-full bg-sky-600 px-5 py-3 text-sm font-semibold text-white hover:opacity-90 transition">
                            Leer guía básica
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </a>
                    </div>

                    <div class="rounded-[2rem] border border-white/10 bg-white/5 p-6 text-white/70">
                        <p class="text-sm font-semibold mb-2">TU ECOMMERCE EN 24 HORAS</p>
                        <p class="text-xs leading-6">
                            <a href="https://tienda.paginas.art">Tu ecommerce, click aquí</a>
                        </p>
                    </div>
                </aside>
            </section>
        </div>
    </main>
</body>
</html>
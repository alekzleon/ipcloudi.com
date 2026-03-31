<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>¿Qué es una dirección IP y cómo funciona? | Cloudi</title>
    <meta name="description" content="Descubre qué es una dirección IP, cómo funciona, por qué cambia, qué diferencia hay entre IP pública y privada, y cómo saber si tu conexión usa VPN o proxy.">
    <meta name="keywords" content="qué es una ip, dirección ip, ip pública, ip privada, cómo funciona una ip, mi ip">

    <link href="https://cloudi.mx/assets/logos/4_short.png" rel="icon">
    @vite(['resources/css/app.css'])
</head>

<body class="bg-black text-white overflow-x-hidden">

    <main class="px-4 py-4 md:px-6 md:py-6">
        <div class="mx-auto max-w-6xl">

            <!-- Hero -->
            <section class="rounded-[2rem] bg-white text-gray-900 border border-white/10 overflow-hidden relative shadow-2xl">
                <div class="absolute -top-20 -left-20 w-72 h-72 bg-[#FF2669]/20 blur-3xl rounded-full pointer-events-none"></div>
                <div class="absolute bottom-0 right-0 w-72 h-72 bg-sky-300/20 blur-3xl rounded-full pointer-events-none"></div>

                <div class="relative z-10 p-6 md:p-8 lg:p-10">
                    <div class="flex flex-wrap items-center gap-3 mb-5">
                        <a href="/" class="inline-flex items-center gap-2 rounded-full border border-gray-200 bg-white px-4 py-2 text-sm font-medium text-gray-700 hover:text-[#FF2669] hover:border-[#FF2669]/30 transition">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                            </svg>
                            Volver a la herramienta
                        </a>

                        <span class="inline-flex items-center rounded-full px-3 py-1 text-xs font-semibold bg-[#FF2669]/10 text-[#FF2669] border border-[#FF2669]/20">
                            Guía básica
                        </span>
                    </div>

                    <div class="max-w-4xl">
                        <p class="text-[11px] md:text-xs uppercase tracking-[0.2em] text-[#FF2669] font-semibold mb-3">
                            Cloudi IP Tool
                        </p>

                        <h1 class="text-3xl md:text-5xl font-black tracking-tight leading-tight text-gray-900">
                            ¿Qué es una dirección IP y cómo funciona?
                        </h1>

                        <p class="mt-5 text-base md:text-lg leading-8 text-gray-600 max-w-3xl">
                            Una dirección IP es el identificador que permite que tu dispositivo se conecte y se comunique dentro de internet.
                            Cada vez que navegas, entras a una web o usas una app conectada, tu red utiliza una IP para enviar y recibir información.
                        </p>
                    </div>

                    <div class="mt-8 grid grid-cols-1 md:grid-cols-3 gap-4">
                        <div class="rounded-3xl border border-gray-200 bg-gray-50 p-5">
                            <p class="text-xs uppercase tracking-wide text-gray-400 mb-2">Qué aprenderás</p>
                            <p class="font-bold text-gray-900">Qué es una IP</p>
                            <p class="text-sm text-gray-600 mt-2">Entiende su función real dentro de internet.</p>
                        </div>

                        <div class="rounded-3xl border border-gray-200 bg-gray-50 p-5">
                            <p class="text-xs uppercase tracking-wide text-gray-400 mb-2">Diferencias clave</p>
                            <p class="font-bold text-gray-900">Pública vs privada</p>
                            <p class="text-sm text-gray-600 mt-2">Descubre por qué no todas las IP son iguales.</p>
                        </div>

                        <div class="rounded-3xl border border-gray-200 bg-gray-50 p-5">
                            <p class="text-xs uppercase tracking-wide text-gray-400 mb-2">Seguridad</p>
                            <p class="font-bold text-gray-900">VPN, proxy y riesgo</p>
                            <p class="text-sm text-gray-600 mt-2">Aprende qué señales pueden aparecer en una consulta IP.</p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Content -->
            <section class="mt-5 grid grid-cols-1 lg:grid-cols-12 gap-5 items-start">

                <!-- Main article -->
                <article class="lg:col-span-8 rounded-[2rem] bg-white text-gray-900 border border-white/10 shadow-2xl p-6 md:p-8">

                    <div class="prose prose-lg max-w-none prose-headings:font-black prose-headings:text-gray-900 prose-p:text-gray-600 prose-li:text-gray-600">
                        <p class="text-lg leading-8 text-gray-600">
                            Aunque normalmente no la vemos, la dirección IP forma parte de casi todo lo que hacemos en línea.
                            Es una pieza esencial para que una red sepa a dónde enviar la información correcta, ya sea una página web,
                            un video, un correo o una solicitud desde una aplicación.
                        </p>

                        <h2 class="mt-10 text-2xl md:text-3xl font-black">¿Qué es exactamente una dirección IP?</h2>

                        <p class="mt-4 text-base leading-8 text-gray-600">
                            IP significa <strong>Internet Protocol</strong>. Una dirección IP es una serie de números o caracteres
                            que identifica a un dispositivo dentro de una red. Su función principal es hacer posible la comunicación
                            entre equipos, servidores, routers, teléfonos, computadoras y servicios conectados a internet.
                        </p>

                        <div class="my-8 rounded-[1.5rem] border border-gray-200 bg-gray-50 p-5">
                            <p class="text-sm font-semibold text-gray-900 mb-2">En palabras simples:</p>
                            <p class="text-sm leading-7 text-gray-600">
                                tu dirección IP funciona como una especie de dirección digital. Así como una paquetería necesita una
                                dirección física para entregar un paquete, internet necesita una IP para saber a qué dispositivo enviar la información.
                            </p>
                        </div>

                        <h2 class="mt-10 text-2xl md:text-3xl font-black">¿Cómo funciona una IP cuando navegas por internet?</h2>

                        <p class="mt-4 text-base leading-8 text-gray-600">
                            Cuando escribes una página en tu navegador o abres una app, tu dispositivo envía una solicitud. Esa solicitud
                            sale desde tu red con una IP identificable, llega a un servidor, y el servidor responde enviando la información
                            de vuelta a la dirección correcta. Ese intercambio sucede en segundos.
                        </p>

                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 my-8">
                            <div class="rounded-3xl border border-gray-200 p-5">
                                <p class="text-xs uppercase tracking-wide text-gray-400 mb-2">Paso 1</p>
                                <h3 class="font-bold text-gray-900">Tu dispositivo solicita</h3>
                                <p class="text-sm text-gray-600 mt-2">Abres una página o una app y se genera una petición.</p>
                            </div>

                            <div class="rounded-3xl border border-gray-200 p-5">
                                <p class="text-xs uppercase tracking-wide text-gray-400 mb-2">Paso 2</p>
                                <h3 class="font-bold text-gray-900">La red identifica</h3>
                                <p class="text-sm text-gray-600 mt-2">Tu conexión usa una IP para indicar desde dónde viene la solicitud.</p>
                            </div>

                            <div class="rounded-3xl border border-gray-200 p-5">
                                <p class="text-xs uppercase tracking-wide text-gray-400 mb-2">Paso 3</p>
                                <h3 class="font-bold text-gray-900">El servidor responde</h3>
                                <p class="text-sm text-gray-600 mt-2">La información regresa al dispositivo correcto gracias a esa IP.</p>
                            </div>
                        </div>

                        <h2 class="mt-10 text-2xl md:text-3xl font-black">Diferencia entre IP pública e IP privada</h2>

                        <p class="mt-4 text-base leading-8 text-gray-600">
                            Este es uno de los puntos más importantes. No todas las direcciones IP cumplen el mismo papel.
                        </p>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 my-8">
                            <div class="rounded-[1.5rem] border border-gray-200 bg-[#FF2669]/[0.04] p-5">
                                <h3 class="text-xl font-bold text-gray-900 mb-3">IP pública</h3>
                                <p class="text-sm leading-7 text-gray-600">
                                    Es la dirección visible hacia internet. Normalmente te la asigna tu proveedor de internet y es la que
                                    puede ver una página o servicio cuando te conectas.
                                </p>
                            </div>

                            <div class="rounded-[1.5rem] border border-gray-200 bg-sky-50 p-5">
                                <h3 class="text-xl font-bold text-gray-900 mb-3">IP privada</h3>
                                <p class="text-sm leading-7 text-gray-600">
                                    Es la que se usa dentro de tu red local, por ejemplo entre tu router, tu laptop, tu celular o una impresora.
                                    No suele ser visible directamente en internet.
                                </p>
                            </div>
                        </div>

                        <h2 class="mt-10 text-2xl md:text-3xl font-black">¿Por qué tu dirección IP puede cambiar?</h2>

                        <p class="mt-4 text-base leading-8 text-gray-600">
                            En muchos casos tu IP no es fija. Puede cambiar cuando reinicias tu router, cuando te conectas desde otra red,
                            cuando cambias de datos móviles a Wi-Fi, o cuando tu proveedor reasigna direcciones automáticamente.
                        </p>

                        <ul class="mt-5 space-y-3 text-base text-gray-600">
                            <li>• Cambias de red Wi-Fi</li>
                            <li>• Usas datos móviles</li>
                            <li>• Reinicias el módem o router</li>
                            <li>• Tu proveedor renueva tu conexión</li>
                            <li>• Activas una VPN o proxy</li>
                        </ul>

                        <h2 class="mt-10 text-2xl md:text-3xl font-black">¿Qué información puede mostrar una consulta de IP?</h2>

                        <p class="mt-4 text-base leading-8 text-gray-600">
                            Una herramienta de consulta IP no suele mostrar información personal exacta como tu nombre o tu dirección precisa,
                            pero sí puede ofrecer una idea bastante útil del contexto de tu conexión.
                        </p>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 my-8">
                            <div class="rounded-3xl border border-gray-200 p-5">
                                <h3 class="font-bold text-gray-900 mb-3">Datos comunes</h3>
                                <ul class="space-y-2 text-sm text-gray-600">
                                    <li>• Dirección IP pública</li>
                                    <li>• Ciudad o región aproximada</li>
                                    <li>• País</li>
                                    <li>• Proveedor de internet</li>
                                    <li>• ASN u organización de red</li>
                                </ul>
                            </div>

                            <div class="rounded-3xl border border-gray-200 p-5">
                                <h3 class="font-bold text-gray-900 mb-3">Señales técnicas o de riesgo</h3>
                                <ul class="space-y-2 text-sm text-gray-600">
                                    <li>• VPN activa</li>
                                    <li>• Uso de proxy</li>
                                    <li>• Nodo TOR</li>
                                    <li>• Datacenter</li>
                                    <li>• Puntaje de riesgo</li>
                                </ul>
                            </div>
                        </div>

                        <h2 class="mt-10 text-2xl md:text-3xl font-black">¿Es peligroso que otros vean tu IP?</h2>

                        <p class="mt-4 text-base leading-8 text-gray-600">
                            Ver tu IP pública no significa automáticamente que alguien pueda acceder a todo tu dispositivo.
                            Sin embargo, sí puede dar contexto sobre tu red, tu ubicación aproximada y el tipo de conexión que usas.
                            Por eso es buena práctica revisar tu seguridad, mantener tu red protegida y evitar conexiones sospechosas.
                        </p>

                        <div class="my-8 rounded-[1.5rem] border border-amber-200 bg-amber-50 p-5">
                            <h3 class="text-lg font-bold text-amber-800 mb-2">Consejo práctico</h3>
                            <p class="text-sm leading-7 text-amber-700">
                                Si usas redes públicas, trabajas con información sensible o quieres más privacidad, puede ayudarte revisar tu IP,
                                confirmar si una VPN está activa y evitar exponer servicios inseguros en tu red.
                            </p>
                        </div>

                        <h2 class="mt-10 text-2xl md:text-3xl font-black">Preguntas frecuentes</h2>

                        <div class="mt-6 space-y-4">
                            <div class="rounded-3xl border border-gray-200 p-5">
                                <h3 class="font-bold text-gray-900">¿Mi IP revela mi ubicación exacta?</h3>
                                <p class="text-sm text-gray-600 mt-2 leading-7">
                                    No de forma exacta. Normalmente muestra una ubicación aproximada como ciudad, estado o región.
                                </p>
                            </div>

                            <div class="rounded-3xl border border-gray-200 p-5">
                                <h3 class="font-bold text-gray-900">¿La IP de mi casa y la de mi celular son iguales?</h3>
                                <p class="text-sm text-gray-600 mt-2 leading-7">
                                    No siempre. Si usas datos móviles tendrás una IP distinta a la de tu red Wi-Fi doméstica.
                                </p>
                            </div>

                            <div class="rounded-3xl border border-gray-200 p-5">
                                <h3 class="font-bold text-gray-900">¿Una VPN cambia mi IP?</h3>
                                <p class="text-sm text-gray-600 mt-2 leading-7">
                                    Sí. Una VPN suele mostrar una IP diferente porque tu tráfico sale a través de otro servidor.
                                </p>
                            </div>
                        </div>
                    </div>
                </article>

                <!-- Sidebar -->
                <aside class="lg:col-span-4 space-y-5 lg:sticky lg:top-5">
                    <div class="rounded-[2rem] bg-white text-gray-900 border border-white/10 shadow-2xl p-6">
                        <p class="text-xs uppercase tracking-[0.18em] text-[#FF2669] font-semibold mb-3">Resumen rápido</p>
                        <ul class="space-y-3 text-sm text-gray-600">
                            <li>• Una IP identifica tu conexión dentro de internet.</li>
                            <li>• La IP pública es la visible hacia sitios y servicios.</li>
                            <li>• La IP privada funciona dentro de tu red local.</li>
                            <li>• Puede cambiar según tu red, proveedor o uso de VPN.</li>
                            <li>• Sirve para revisar contexto, ubicación aproximada y seguridad.</li>
                        </ul>
                    </div>

                    <div class="rounded-[2rem] bg-white text-gray-900 border border-white/10 shadow-2xl p-6">
                        <p class="text-xs uppercase tracking-[0.18em] text-[#FF2669] font-semibold mb-3">Siguiente lectura</p>
                        <h3 class="text-xl font-black text-gray-900">IP Lookup</h3>
                        <p class="text-sm text-gray-600 leading-7 mt-3">
                            Ahora que ya sabes qué es una dirección IP, el siguiente paso es entender cómo funciona una búsqueda de IP y qué datos puede mostrar.
                        </p>

                        <a href="{{ url('/ip-lookup') }}" class="mt-5 inline-flex items-center gap-2 rounded-full bg-[#FF2669] px-5 py-3 text-sm font-semibold text-white hover:opacity-90 transition">
                            Leer IP Lookup
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
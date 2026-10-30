<footer class="site-footer mt-10 border-t border-white/10 bg-[#101012] text-gray-300">
    <div class="mx-auto max-w-[1440px] px-6 py-10 md:px-10 lg:py-12 grid grid-cols-1 gap-8 lg:grid-cols-[auto_1fr_auto] lg:items-center lg:gap-10">
        <a href="/" class="inline-flex items-center gap-3 text-white justify-self-start">
            <img src="{{ asset(ltrim(config('site.logo'), '/')) }}" alt="" width="40" height="40" class="h-10 w-10 object-contain">
            <span class="text-2xl font-semibold tracking-tight">{{ config('site.name') }}</span>
        </a>
        <nav aria-label="Enlaces del pie de página" class="flex flex-wrap items-center gap-x-6 gap-y-4 text-sm lg:justify-center">
            <a href="/guias" class="hover:text-white transition-colors">Guías</a>
            <a href="/about" class="hover:text-white transition-colors">Acerca de</a>
            <a href="/privacy-policy" class="hover:text-white transition-colors">Aviso de privacidad</a>
            <a href="/terms" class="hover:text-white transition-colors">Términos de uso</a>
            <a href="/contact" class="hover:text-white transition-colors">Contacto</a>
        </nav>
        <div class="text-xs leading-6 text-gray-400 lg:text-right">
            <p>© {{ date('Y') }} {{ config('site.name') }}</p>
            <p>Una herramienta de Cloudi.</p>
        </div>
    </div>
</footer>

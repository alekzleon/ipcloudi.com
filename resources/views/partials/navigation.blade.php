<nav aria-label="Navegación principal" class="flex flex-wrap items-center gap-x-5 gap-y-3 text-sm {{ ($dark ?? false) ? 'text-gray-200' : 'text-gray-600' }}">
    @foreach(['/' => 'Inicio', '/guias' => 'Guías', '/about' => 'Acerca de', '/contact' => 'Contacto'] as $path => $label)
        <a href="{{ $path }}" @if(request()->getPathInfo() === $path) aria-current="page" @endif class="hover:text-[#FF2669] focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-pink-500">{{ $label }}</a>
    @endforeach
</nav>

<section class="related-articles mt-10 border-t border-gray-200 pt-6" aria-label="Artículos relacionados">
    <h2 class="text-xl font-bold text-gray-900">Artículos relacionados</h2>
    <ul class="mt-4 grid grid-cols-1 sm:grid-cols-2 gap-4">
        @foreach(config('guides') as $slug => $item)
            @if('/'.$slug !== request()->getPathInfo())
                <li><a class="block h-full rounded-2xl border border-gray-200 bg-gray-50 p-4 text-sm font-semibold text-gray-800 hover:text-pink-600 focus-visible:outline focus-visible:outline-pink-500" href="/{{ $slug }}">{{ $item['title'] }}</a></li>
            @endif
        @endforeach
    </ul>
</section>

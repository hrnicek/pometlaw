@props(['title', 'excerpt' => null, 'href' => '#', 'image' => null, 'date' => null])

<article class="group flex flex-col h-full bg-transparent">
  <a href="{{ $href }}" class="block overflow-hidden rounded-2xl mb-6 relative aspect-[3/2]">
    <div class="absolute inset-0 bg-delft-blue/0 group-hover:bg-delft-blue/10 transition-colors duration-300 z-10"></div>

    @if($image)
      <img src="{{ $image }}" alt="{{ $title }}" class="w-full h-full object-cover">
    @else
      <div class="w-full h-full bg-gray-5 flex items-center justify-center">
        <svg class="w-12 h-12 text-gray-20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
        </svg>
      </div>
    @endif
  </a>

  <div class="flex flex-col flex-grow">
    @if($date)
      <div class="flex items-center text-xs font-medium text-moonstone uppercase tracking-wider mb-3">
        <time datetime="{{ $date->format('Y-m-d') }}">
          {{ $date->format('d. m. Y') }}
        </time>
      </div>
    @endif

    <h3 class="text-2xl font-heading font-bold text-delft-blue mb-3 group-hover:text-moonstone transition-colors duration-200">
      <a href="{{ $href }}">{{ $title }}</a>
    </h3>

    @if($excerpt)
      <p class="text-gray-50 text-base leading-relaxed mb-6 line-clamp-3">{{ $excerpt }}</p>
    @endif

    <div class="mt-auto">
      <a href="{{ $href }}" class="inline-flex items-center text-sm font-bold text-delft-blue group-hover:text-moonstone transition-colors">
        Číst článek
        <svg class="w-4 h-4 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
        </svg>
      </a>
    </div>
  </div>
</article>

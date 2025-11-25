@props(['title', 'excerpt' => null, 'href' => '#', 'image' => null, 'date' => null])

<div class="group flex flex-col bg-white rounded-2xl border border-zinc-200 hover:border-delft-blue/30 transition-colors duration-300 overflow-hidden">
  @if($image)
    <figure>
      <img src="{{ $image }}" alt="{{ $title }}" class="w-full h-48 object-cover" />
    </figure>
  @endif
  <div class="p-6 flex-1 flex flex-col">
    @if($date)
      <div class="flex items-center justify-between mb-3">
        <span class="text-sm text-zinc-500 flex items-center gap-1">
          <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
          </svg>
          {{ $date->format('j. n. Y') }}
        </span>
      </div>
    @endif
    <h3 class="text-xl font-bold text-zinc-900 mb-3 group-hover:text-delft-blue transition-colors">
      <a href="{{ $href }}">{{ $title }}</a>
    </h3>
    @if($excerpt)
      <p class="text-sm text-zinc-500 line-clamp-3 mb-6 flex-1">{{ $excerpt }}</p>
    @endif
    <div class="pt-4 border-t border-zinc-100 flex items-center justify-end mt-auto">
      <a href="{{ $href }}" class="text-sm font-medium text-delft-blue hover:text-delft-blue/80 flex items-center gap-1">
        Číst více
        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
        </svg>
      </a>
    </div>
  </div>
</div>

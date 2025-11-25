@props(['event'])

<div class="group flex flex-col bg-white rounded-2xl border border-gray-20 hover:border-delft-blue/30 shadow-sm hover:shadow-md transition-all duration-300 overflow-hidden h-full">
  <div class="p-6 flex-1 flex flex-col">
    <div class="flex items-center justify-between mb-4">
      @if($event->eventCategory)
        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-gray-10 text-gray-75">
          {{ $event->eventCategory->name }}
        </span>
      @endif

      @if($event->datetime_from)
        <span class="text-sm text-gray-50 flex items-center gap-1">
          <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
          </svg>
          {{ $event->datetime_from->format('j.n Y') }}
        </span>
      @endif
    </div>

    <h3 class="text-xl font-bold text-delft-blue mb-3 group-hover:text-moonstone transition-colors">
      <a href="{{ route('events.show', $event) }}">
        {{ $event->name }}
      </a>
    </h3>

    <p class="text-sm text-gray-50 line-clamp-3 mb-6 flex-1 leading-relaxed">
      {{ Str::limit($event->description, 120) }}
    </p>

    <div class="pt-4 border-t border-gray-10 flex items-center justify-between mt-auto">
      <div class="text-lg font-bold text-delft-blue">
        {{ number_format($event->price, 0, ',', ' ') }} Kč
      </div>
      <a href="{{ route('events.show', $event) }}" class="text-sm font-medium text-delft-blue hover:text-delft-blue/80 flex items-center gap-1 group-hover:translate-x-1 transition-transform">
        Detail akce
        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
        </svg>
      </a>
    </div>
  </div>
</div>

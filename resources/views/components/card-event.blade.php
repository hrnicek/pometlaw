@props(['event'])

<div class="group flex flex-col bg-white rounded-2xl border border-zinc-200 hover:border-delft-blue/30 transition-colors duration-300 overflow-hidden">
  <div class="p-6 flex-1 flex flex-col">
    <div class="flex items-center justify-between mb-4">
      @if($event->eventCategory)
        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-zinc-100 text-zinc-800">
          {{ $event->eventCategory->name }}
        </span>
      @endif

      @if($event->datetime_from)
        <span class="text-sm text-zinc-500 flex items-center gap-1">
          <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
          </svg>
          {{ $event->datetime_from->format('j.n Y') }}
        </span>
      @endif
    </div>

    <h3 class="text-xl font-bold text-zinc-900 mb-3 group-hover:text-delft-blue transition-colors">
      <a href="{{ route('events.show', $event) }}">
        {{ $event->name }}
      </a>
    </h3>

    <p class="text-sm text-zinc-500 line-clamp-3 mb-6 flex-1">
      {{ Str::limit($event->description, 120) }}
    </p>

    <div class="pt-4 border-t border-zinc-100 flex items-center justify-between mt-auto">
      <div class="text-lg font-bold text-zinc-900">
        {{ number_format($event->price, 0, ',', ' ') }} Kč
      </div>
      <a href="{{ route('events.show', $event) }}" class="text-sm font-medium text-delft-blue hover:text-delft-blue/80 flex items-center gap-1">
        Detail akce
        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
        </svg>
      </a>
    </div>
  </div>
</div>

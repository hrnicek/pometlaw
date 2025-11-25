@props(['events' => []])

<section class="py-16 bg-white">
  <div class="container mx-auto px-4">
    <div class="text-center mb-12">
      <h2 class="text-3xl md:text-4xl font-bold text-zinc-900 mb-4">
        Naše kurzy a semináře
      </h2>
      <p class="text-lg text-zinc-500 max-w-2xl mx-auto">
        Rozšiřte své znalosti v oblasti veřejných zakázek s našimi odbornými kurzy vedenými zkušenými lektory.
      </p>
    </div>

    @if ($events->count() > 0)
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        @foreach ($events as $event)
          <div class="group flex flex-col bg-white rounded-2xl border border-zinc-200 hover:border-delft-blue/30 transition-colors duration-300 overflow-hidden">
            <div class="p-6 flex-1 flex flex-col">
              {{-- Category & Date --}}
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
                    {{ $event->datetime_from->format('j. n. Y') }}
                  </span>
                @endif
              </div>

              {{-- Title --}}
              <h3 class="text-xl font-bold text-zinc-900 mb-3 group-hover:text-delft-blue transition-colors">
                <a href="{{ route('events.show', $event) }}">
                  {{ $event->name }}
                </a>
              </h3>

              {{-- Description --}}
              <p class="text-sm text-zinc-500 line-clamp-3 mb-6 flex-1">
                {{ Str::limit($event->description, 120) }}
              </p>

              {{-- Footer / Action --}}
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
        @endforeach
      </div>

      <div class="text-center mt-12">
        <a href="{{ route('events.index') }}"
          class="inline-flex items-center px-6 py-3 bg-delft-blue text-white font-medium rounded-xl hover:bg-delft-blue/90 transition-colors">
          Zobrazit všechny kurzy
          <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
          </svg>
        </a>
      </div>
    @else
      <div class="text-center py-20">
        <div class="inline-flex items-center justify-center w-16 h-16 rounded-full bg-zinc-100 mb-6">
          <svg class="w-8 h-8 text-zinc-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
          </svg>
        </div>
        <h3 class="text-xl font-semibold text-zinc-900 mb-2">Žádné nadcházející kurzy</h3>
        <p class="text-zinc-500 max-w-md mx-auto mb-8">
          Momentálně nemáme žádné naplánované kurzy. Zkontrolujte prosím později.
        </p>
      </div>
    @endif
  </div>
</section>

@props(['events' => []])

<section class="py-16 bg-gray-5">
  <div class="container mx-auto px-4">
    <div class="text-center mb-12">
      <h2 class="text-3xl md:text-4xl font-bold text-gray-75 mb-4">
        Naše kurzy a semináře
      </h2>
      <p class="text-lg text-gray-50 max-w-2xl mx-auto">
        Rozšiřte své znalosti v oblasti práva s našimi odbornými kurzy a semináři vedenými zkušenými lektory.
      </p>
    </div>

    @if ($events->count() > 0)
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        @foreach ($events as $event)
          <div class="bg-white rounded-3xl border border-gray-20 overflow-hidden">
            <div class="p-6">
              <div class="flex items-center justify-between mb-4">
                <span class="inline-block px-3 py-1 bg-delft-blue text-white text-sm font-medium rounded">
                  {{ $event->eventCategory->name ?? 'Kategorie' }}
                </span>
                <span class="text-sm text-gray-50">
                  {{ $event->formatted_event_date }}
                </span>
              </div>

              <h3 class="text-xl font-semibold text-gray-75 mb-3">
                <a href="{{ route('events.show', $event) }}">
                  {{ $event->name }}
                </a>
              </h3>

              <p class="text-gray-50 mb-4 line-clamp-3">
                {{ Str::limit($event->description, 150) }}
              </p>

              <div class="flex items-center justify-between">
                <div class="flex items-center space-x-2">
                  @if ($event->lecturers->count() > 0)
                    <div class="flex -space-x-2">
                      @foreach ($event->lecturers->take(2) as $lecturer)
                        @if ($lecturer->photo)
                          <img src="{{ asset('storage/' . $lecturer->photo) }}" alt="{{ $lecturer->full_name }}"
                            class="w-8 h-8 rounded border-2 border-white">
                        @else
                          <div
                            class="w-8 h-8 rounded bg-delft-blue border-2 border-white flex items-center justify-center">
                            <span class="text-white text-xs font-medium">
                              {{ substr($lecturer->first_name, 0, 1) }}{{ substr($lecturer->last_name, 0, 1) }}
                            </span>
                          </div>
                        @endif
                      @endforeach
                    </div>
                    <span class="text-sm text-gray-50">
                      {{ $event->lecturers->count() === 1 ? $event->lecturers->first()->full_name : $event->lecturers->count() . ' lektorů' }}
                    </span>
                  @endif
                </div>

                @if ($event->price > 0)
                  <span class="text-lg font-semibold text-delft-blue">
                    {{ number_format($event->price, 0, ',', ' ') }} Kč
                  </span>
                @else
                  <span class="text-lg font-semibold text-moonstone">
                    Zdarma
                  </span>
                @endif
              </div>

              <div class="mt-4 pt-4 border-t border-gray-20">
                <a href="{{ route('events.show', $event) }}"
                  class="inline-flex items-center justify-center w-full px-4 py-2 bg-delft-blue text-white font-medium rounded">
                  Zobrazit detail
                </a>
              </div>
            </div>
          </div>
        @endforeach
      </div>

      <div class="text-center mt-12">
        <a href="{{ route('events.index') }}"
          class="inline-flex items-center px-6 py-3 bg-paynes-gray text-white font-medium rounded">
          Zobrazit všechny kurzy
          <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
          </svg>
        </a>
      </div>
    @else
      <div class="text-center py-12">
        <div class="max-w-md mx-auto">
          <svg class="mx-auto h-12 w-12 text-gray-30" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253">
            </path>
          </svg>
          <h3 class="mt-4 text-lg font-medium text-gray-75">Žádné nadcházející kurzy</h3>
          <p class="mt-2 text-gray-50">
            Momentálně nemáme žádné naplánované kurzy. Zkontrolujte prosím později.
          </p>
        </div>
      </div>
    @endif
  </div>
</section>

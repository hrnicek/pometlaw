@props(['events' => []])

<section class="py-16 bg-white">
  <div class="container mx-auto px-4">
    <div class="text-center mb-12">
      <h2>Naše kurzy a semináře</h2>
      <p class="text-lg text-gray-50 max-w-2xl mx-auto">
        Rozšiřte své znalosti v oblasti veřejných zakázek s našimi odbornými kurzy vedenými zkušenými lektory.
      </p>
    </div>

    @if ($events->count() > 0)
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        @foreach ($events as $event)
          <x-card-event :event="$event" />
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

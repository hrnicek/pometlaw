@extends('layouts.app')

@section('content')
<x-page-header 
    :title="$event->name" 
    :description="($event->formatted_event_date)
        .($event->datetime_from ? ' • '. $event->datetime_from->format('H:i') : '')
        .($event->datetime_to ? '–'. $event->datetime_to->format('H:i') : '')
        .($event->location ? ' • '. $event->location : '')">
    {{ $event->eventCategory->name ?? 'Školení' }}
</x-page-header>

<section class="py-16 bg-white">
  <div class="container mx-auto px-4">
    <div class="max-w-2xl mx-auto space-y-8">
      <div class="bg-white rounded-2xl border border-zinc-200 p-6">
        <div class="space-y-3 text-sm">
          <div class="flex items-center gap-2 text-zinc-600">
            <svg class="w-5 h-5 text-zinc-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
            </svg>
            <span>{{ $event->formatted_event_date }}</span>
          </div>
          @if($event->datetime_from)
            <div class="flex items-center gap-2 text-zinc-600">
              <svg class="w-5 h-5 text-zinc-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
              </svg>
              <span>
                {{ $event->datetime_from->format('H:i') }}
                @if($event->datetime_to)
                  – {{ $event->datetime_to->format('H:i') }}
                @endif
              </span>
            </div>
          @endif
          <div class="flex items-center gap-2 text-zinc-600">
            <svg class="w-5 h-5 text-zinc-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
            </svg>
            <span>{{ $event->location }}</span>
          </div>
          <div class="flex items-center gap-2 text-zinc-600">
            <svg class="w-5 h-5 text-zinc-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-4.418 0-8 1.79-8 4v4h16v-4c0-2.21-3.582-4-8-4z"></path>
            </svg>
            <span>Kapacita: {{ $event->capacity }} míst</span>
          </div>
          <div class="flex items-center gap-2 text-zinc-900">
            <span class="text-sm text-zinc-500">Cena</span>
            <span class="text-lg font-bold">{{ number_format($event->price, 0, ',', ' ') }} Kč</span>
          </div>
        </div>
      </div>

      <div class="bg-white p-8 rounded-2xl border border-zinc-200 shadow-sm">
        @if(session('success'))
          <div class="mb-6 rounded-xl bg-green-50 border border-green-200 text-green-800 px-4 py-3">
            {{ session('success') }}
          </div>
        @endif
        <form action="{{ route('events.reservations.store', $event) }}" method="POST" class="space-y-6">
          @csrf
          <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
            <div>
              <label for="first_name" class="block text-sm font-medium text-zinc-700 mb-2">Jméno *</label>
              <input type="text" id="first_name" name="first_name" required class="w-full px-4 py-3 bg-zinc-50 border border-zinc-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-delft-blue/20 focus:border-delft-blue transition-all" />
            </div>
            <div>
              <label for="last_name" class="block text-sm font-medium text-zinc-700 mb-2">Příjmení *</label>
              <input type="text" id="last_name" name="last_name" required class="w-full px-4 py-3 bg-zinc-50 border border-zinc-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-delft-blue/20 focus:border-delft-blue transition-all" />
            </div>
          </div>
          <div>
            <label for="email" class="block text-sm font-medium text-zinc-700 mb-2">E-mail *</label>
            <input type="email" id="email" name="email" required class="w-full px-4 py-3 bg-zinc-50 border border-zinc-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-delft-blue/20 focus:border-delft-blue transition-all" />
          </div>
          <div>
            <label for="phone" class="block text-sm font-medium text-zinc-700 mb-2">Telefon</label>
            <input type="tel" id="phone" name="phone" class="w-full px-4 py-3 bg-zinc-50 border border-zinc-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-delft-blue/20 focus:border-delft-blue transition-all" />
          </div>
          <div>
            <label for="note" class="block text-sm font-medium text-zinc-700 mb-2">Poznámka</label>
            <textarea id="note" name="note" rows="4" class="w-full px-4 py-3 bg-zinc-50 border border-zinc-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-delft-blue/20 focus:border-delft-blue transition-all resize-none"></textarea>
          </div>
          <button type="submit" class="w-full py-4 px-6 bg-zinc-900 text-white font-medium rounded-xl hover:bg-zinc-800 transition-colors">Odeslat rezervaci</button>
        </form>
      </div>
    </div>
  </div>
</section>
@endsection

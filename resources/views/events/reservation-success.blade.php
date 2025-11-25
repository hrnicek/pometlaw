@extends('layouts.app')

@section('content')
<x-page-header 
    title="Rezervace odeslána" 
    :description="($event->name)
        .' • '.($event->formatted_event_date)
        .($event->datetime_from ? ' • '. $event->datetime_from->format('H:i') : '')
        .($event->datetime_to ? '–'. $event->datetime_to->format('H:i') : '')
        .($event->location ? ' • '. $event->location : '')">
    {{ $event->eventCategory->name ?? 'Školení' }}
</x-page-header>

<section class="py-16 bg-white">
  <div class="container mx-auto px-4">
    <div class="max-w-2xl mx-auto space-y-8">
      <div class="bg-white rounded-2xl border border-zinc-200 p-8 text-center">
        <div class="mx-auto mb-4 w-14 h-14 rounded-full bg-green-100 border border-green-200 flex items-center justify-center">
          <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
          </svg>
        </div>
        <h3 class="text-2xl font-semibold text-zinc-900">Děkujeme za rezervaci</h3>
        <p class="text-zinc-600 mt-2">Brzy se vám ozveme s potvrzením a dalšími informacemi k akci.</p>
        <div class="mt-6 flex items-center justify-center gap-3">
          <a href="{{ route('events.show', $event) }}" class="inline-flex items-center px-5 py-3 bg-zinc-900 text-white font-medium rounded-xl hover:bg-zinc-800 transition-colors">Zobrazit detail akce</a>
          <a href="{{ route('events.index') }}" class="inline-flex items-center px-5 py-3 bg-white border border-zinc-200 text-zinc-900 font-medium rounded-xl hover:bg-zinc-50 transition-colors">Zpět na přehled</a>
        </div>
      </div>

      <div class="bg-white rounded-2xl border border-zinc-200 p-6">
        <h4 class="text-lg font-semibold text-zinc-900 mb-4">Přehled o události</h4>
        <div class="space-y-3 text-sm">
          <div class="flex items-center gap-2 text-zinc-600">
            <svg class="w-5 h-5 text-zinc-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
            </svg>
            <span>{{ $event->formatted_event_date }}</span>
          </div>
          @if($event->datetime_from)
          <div class="flex items-center gap-2 text-zinc-600">
            <svg class="w-5 h-5 text-zinc-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
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
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
            </svg>
            <span>{{ $event->location }}</span>
          </div>
          <div class="flex items-center gap-2 text-zinc-600">
            <svg class="w-5 h-5 text-zinc-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-4.418 0-8 1.79-8 4v4h16v-4c0-2.21-3.582-4-8-4z" />
            </svg>
            <span>Kapacita: {{ $event->capacity }} míst</span>
          </div>
          <div class="flex items-center gap-2 text-zinc-900">
            <span class="text-sm text-zinc-500">Cena</span>
            <span class="text-lg font-bold">{{ number_format($event->price, 0, ',', ' ') }} Kč</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection


@extends('layouts.app')

@section('content')
<x-navbar />

<section class="py-20 lg:py-32">
  <div class="container mx-auto px-4">
    <div class="text-center mb-16">
      <h1 class="text-5xl md:text-7xl font-bold text-gray-75 mb-6">
        Naše školení
      </h1>
      <p class="text-xl md:text-2xl text-gray-50 max-w-3xl mx-auto">
        Komplexní vzdělávací programy pro moderní veřejné zakázky
      </p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
      @forelse($events as $event)
        <div class="bg-white border border-gray-20 rounded p-8">
          <div class="mb-6">
            <span class="inline-block px-3 py-1 bg-moonstone/10 text-moonstone font-medium rounded text-sm">
              {{ $event->type ?? 'Školení' }}
            </span>
          </div>
          <h3 class="text-2xl font-semibold text-gray-75 mb-4">{{ $event->title }}</h3>
          <p class="text-gray-50 mb-6">{{ $event->description }}</p>
          
          @if($event->date)
          <div class="flex items-center text-gray-50 mb-4">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
            </svg>
            {{ $event->date->format('d.m.Y') }}
          </div>
          @endif
          
          <a href="{{ route('contact') }}" 
             class="inline-flex items-center px-6 py-3 bg-delft-blue text-white font-medium rounded w-full justify-center">
            Přihlásit se
            <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
            </svg>
          </a>
        </div>
      @empty
        <div class="col-span-full text-center py-16">
          <h3 class="text-2xl font-semibold text-gray-75 mb-4">Připravujeme nová školení</h3>
          <p class="text-gray-50 mb-8">Brzy spustíme nové vzdělávací programy. Kontaktujte nás pro více informací.</p>
          <a href="{{ route('contact') }}" class="inline-flex items-center px-6 py-3 bg-delft-blue text-white font-medium rounded">
            Kontaktovat nás
          </a>
        </div>
      @endforelse
    </div>
  </div>
</section>

<!-- CTA Section -->
<x-cta-section />
@endsection

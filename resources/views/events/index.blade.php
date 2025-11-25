@extends('layouts.app')

@section('content')
    <x-page-header 
        title="Naše školení" 
        description="Komplexní vzdělávací programy pro moderní veřejné zakázky. Získejte jistotu v procesech a legislativě.">
        Vzdělávání
    </x-page-header>

    <div class="bg-white min-h-screen pb-20">

        {{-- Events Grid --}}
        <div class="container mx-auto px-4 py-12">
            @if($events->count() > 0)
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach($events as $event)
                        <x-card-event :event="$event" />
                    @endforeach
                </div>
            @else
                <div class="text-center py-20">
                    <div class="inline-flex items-center justify-center w-16 h-16 rounded-full bg-zinc-100 mb-6">
                        <svg class="w-8 h-8 text-zinc-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-zinc-900 mb-2">Momentálně nejsou vypsána žádná školení</h3>
                    <p class="text-zinc-500 max-w-md mx-auto mb-8">
                        Připravujeme pro vás nové termíny. Sledujte nás nebo se ozvěte, pokud máte zájem o školení na míru.
                    </p>
                    <a href="{{ route('contact') }}" class="inline-flex items-center px-6 py-3 bg-delft-blue text-white font-medium rounded-xl hover:bg-delft-blue/90 transition-colors">
                        Kontaktovat nás
                    </a>
                </div>
            @endif
        </div>
    </div>

    <x-cta-section />
@endsection

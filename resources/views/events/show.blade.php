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

    <div class="bg-white min-h-screen pb-20">

        {{-- Main Content --}}
        <div class="container mx-auto px-4 max-w-5xl py-12">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
                
                {{-- Left Column: Description & Lecturers --}}
                <div class="lg:col-span-2 space-y-12">
                    {{-- Description --}}
                    <div class="prose prose-zinc max-w-none">
                        <h3 class="text-xl font-semibold text-zinc-900 mb-4">O akci</h3>
                        <div class="text-zinc-600 leading-relaxed">
                            {!! nl2br(e($event->description)) !!}
                        </div>
                    </div>

                    {{-- Lecturers --}}
                    @if($event->lecturers->count() > 0)
                        <div class="border-t border-zinc-100 pt-8">
                            <h3 class="text-xl font-semibold text-zinc-900 mb-6">Lektoři</h3>
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                                @foreach($event->lecturers as $lecturer)
                                    <div class="flex items-start gap-4">
                                        {{-- Placeholder Avatar if no image --}}
                                        <div class="w-12 h-12 rounded-full bg-zinc-100 flex items-center justify-center text-zinc-400 shrink-0">
                                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                            </svg>
                                        </div>
                                        <div>
                                            <h4 class="font-medium text-zinc-900">{{ $lecturer->name }}</h4>
                                            @if($lecturer->bio)
                                                <p class="text-sm text-zinc-500 mt-1 line-clamp-2">{{ $lecturer->bio }}</p>
                                            @endif
                                            <a href="{{ route('lecturers.show', $lecturer) }}" class="text-sm text-blue-600 hover:text-blue-700 mt-1 inline-block">Zobrazit profil</a>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endif
                </div>

                {{-- Right Column: Sticky Sidebar --}}
                <div class="lg:col-span-1">
                    <div class="sticky top-8">
                        <div class="bg-white rounded-2xl border border-zinc-200 p-6 shadow-sm">
                            <div class="flex flex-col gap-6">
                                <div>
                                    <p class="text-sm text-zinc-500 mb-1">Cena za účastníka</p>
                                    <div class="text-3xl font-bold text-zinc-900">
                                        {{ number_format($event->price, 0, ',', ' ') }} Kč
                                        <span class="text-sm font-normal text-zinc-400">/ os.</span>
                                    </div>
                                </div>

                                <div class="space-y-3 pt-4 border-t border-zinc-100">
                                    <div class="flex justify-between text-sm">
                                        <span class="text-zinc-500">Kapacita</span>
                                        <span class="font-medium text-zinc-900">{{ $event->capacity }} míst</span>
                                    </div>
                                    {{-- You might want to calculate available spots here if you have bookings --}}
                                </div>

                                <div class="pt-4">
                                    <a href="{{ route('events.reservations.create', $event) }}" class="w-full inline-flex items-center justify-center bg-zinc-900 hover:bg-zinc-800 text-white font-medium py-3 px-4 rounded-xl transition-colors duration-200 gap-2">
                                        <span>Registrovat na akci</span>
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                        </svg>
                                    </a>
                                    <p class="text-xs text-center text-zinc-400 mt-3">
                                        Rezervace je nezávazná do potvrzení platby.
                                    </p>
                                </div>
                            </div>
                        </div>

                        {{-- Contact Box --}}
                        <div class="mt-6 p-6 bg-zinc-50 rounded-2xl border border-zinc-100">
                            <h4 class="font-medium text-zinc-900 mb-2">Máte dotaz?</h4>
                            <p class="text-sm text-zinc-500 mb-4">
                                Pokud potřebujete poradit s výběrem nebo máte specifické požadavky, ozvěte se nám.
                            </p>
                            <a href="{{ route('contact') }}" class="text-sm font-medium text-zinc-900 hover:text-zinc-700 flex items-center gap-2">
                                Napsat nám
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection

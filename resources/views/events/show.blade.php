@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-white">
    <!-- Breadcrumbs -->
    <section class="bg-gray-50 py-6">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <nav class="flex items-center space-x-2 text-sm">
                <a href="{{ route('home') }}" class="text-paynes-gray hover:text-delft-blue">
                    Domů
                </a>
                <x-hugeicons-arrow-right-01 class="w-4 h-4 text-paynes-gray"/>
                <a href="{{ route('events.index') }}" class="text-paynes-gray hover:text-delft-blue">
                    Kurzy
                </a>
                <x-hugeicons-arrow-right-01 class="w-4 h-4 text-paynes-gray"/>
                <span class="text-brand-text font-medium">{{ $event->name }}</span>
            </nav>
        </div>
    </section>

    <!-- Hlavní obsah -->
    <section class="py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
                <!-- Hlavní obsah -->
                <div class="lg:col-span-2 space-y-8">
                    <!-- Kategorie -->
                    <div class="inline-flex items-center px-4 py-2 bg-delft-blue/10 text-delft-blue text-sm font-medium rounded-xl">
                        {{ $event->eventCategory->name }}
                    </div>

                    <!-- Nadpis -->
                    <div>
                        <h1 class="text-4xl md:text-5xl font-bold text-delft-blue leading-tight mb-6">
                            {{ $event->name }}
                        </h1>
                    </div>

                    <!-- Základní informace -->
                    <div class="bg-gray-50 rounded-xl p-8 space-y-6">
                        <h2 class="text-2xl font-bold text-brand-text mb-6">
                            Základní informace
                        </h2>
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <!-- Datum a čas -->
                            <div class="flex items-start">
                                <x-hugeicons-calendar-03 class="w-6 h-6 text-moonstone mr-4 mt-1 flex-shrink-0"/>
                                <div>
                                    <div class="font-medium text-brand-text">Datum konání</div>
                                    <div class="text-lg font-bold text-delft-blue">
                                        {{ $event->formatted_event_date }}
                                    </div>
                                    <div class="text-paynes-gray">
                                        {{ $event->event_date->format('H:i') }}
                                    </div>
                                </div>
                            </div>

                            <!-- Místo -->
                            <div class="flex items-start">
                                <x-hugeicons-location-01 class="w-6 h-6 text-moonstone mr-4 mt-1 flex-shrink-0"/>
                                <div>
                                    <div class="font-medium text-brand-text">Místo konání</div>
                                    <div class="text-lg text-delft-blue">
                                        {{ $event->location }}
                                    </div>
                                </div>
                            </div>

                            <!-- Kapacita -->
                            <div class="flex items-start">
                                <x-hugeicons-user-group class="w-6 h-6 text-moonstone mr-4 mt-1 flex-shrink-0"/>
                                <div>
                                    <div class="font-medium text-brand-text">Kapacita</div>
                                    <div class="text-lg text-delft-blue">
                                        {{ $event->capacity }} účastníků
                                    </div>
                                </div>
                            </div>

                            <!-- Cena -->
                            <div class="flex items-start">
                                <x-hugeicons-money-01 class="w-6 h-6 text-moonstone mr-4 mt-1 flex-shrink-0"/>
                                <div>
                                    <div class="font-medium text-brand-text">Cena</div>
                                    <div class="text-2xl font-bold text-delft-blue">
                                        {{ $event->formatted_price }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Popis kurzu -->
                    <div class="prose prose-lg max-w-none">
                        <h2 class="text-2xl font-bold text-brand-text mb-6">
                            O kurzu
                        </h2>
                        <div class="text-brand-text leading-relaxed whitespace-pre-line">
                            {{ $event->description }}
                        </div>
                    </div>

                    <!-- Lektoři -->
                    @if($event->lecturers->count() > 0)
                        <div>
                            <h2 class="text-2xl font-bold text-brand-text mb-6">
                                {{ $event->lecturers->count() === 1 ? 'Lektor' : 'Lektoři' }}
                            </h2>
                            
                            <div class="space-y-6">
                                @foreach($event->lecturers as $lecturer)
                                    <div class="bg-gray-50 rounded-xl p-8">
                                        <div class="flex items-start space-x-6">
                                            @if($lecturer->photo)
                                                <img 
                                                    src="{{ asset('storage/' . $lecturer->photo) }}" 
                                                    alt="{{ $lecturer->full_name }}"
                                                    class="w-20 h-20 rounded-xl object-cover flex-shrink-0"
                                                >
                                            @else
                                                <div class="w-20 h-20 bg-delft-blue/10 rounded-xl flex items-center justify-center flex-shrink-0">
                                                    <x-hugeicons-user class="w-10 h-10 text-delft-blue"/>
                                                </div>
                                            @endif
                                            
                                            <div class="flex-1">
                                                <h3 class="text-xl font-bold text-delft-blue mb-2">
                                                    {{ $lecturer->full_name }}
                                                </h3>
                                                @if($lecturer->biography)
                                                    <p class="text-brand-text leading-relaxed">
                                                        {{ $lecturer->biography }}
                                                    </p>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endif
                </div>

                <!-- Sidebar s registrací -->
                <div class="lg:col-span-1">
                    <div class="sticky top-8">
                        <div class="bg-white border border-paynes-gray rounded-xl p-8 space-y-6">
                            <div class="text-center">
                                <div class="text-3xl font-bold text-delft-blue mb-2">
                                    {{ $event->formatted_price }}
                                </div>
                                <div class="text-paynes-gray">
                                    za osobu
                                </div>
                            </div>

                            @if($event->is_upcoming)
                                <!-- Registrační formulář -->
                                <form action="{{ route('events.register', $event) }}" method="POST" class="space-y-4">
                                    @csrf
                                    
                                    <div>
                                        <label for="jmeno" class="block text-sm font-medium text-brand-text mb-2">
                                            Jméno *
                                        </label>
                                        <input 
                                            type="text" 
                                            id="jmeno" 
                                            name="jmeno" 
                                            required
                                            value="{{ old('jmeno') }}"
                                            class="w-full px-4 py-3 border border-paynes-gray rounded-xl focus:ring-4 focus:ring-delft-blue/20 focus:border-delft-blue @error('jmeno') border-red-500 @enderror"
                                        >
                                        @error('jmeno')
                                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div>
                                        <label for="prijmeni" class="block text-sm font-medium text-brand-text mb-2">
                                            Příjmení *
                                        </label>
                                        <input 
                                            type="text" 
                                            id="prijmeni" 
                                            name="prijmeni" 
                                            required
                                            value="{{ old('prijmeni') }}"
                                            class="w-full px-4 py-3 border border-paynes-gray rounded-xl focus:ring-4 focus:ring-delft-blue/20 focus:border-delft-blue @error('prijmeni') border-red-500 @enderror"
                                        >
                                        @error('prijmeni')
                                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div>
                                        <label for="email" class="block text-sm font-medium text-brand-text mb-2">
                                            E-mail *
                                        </label>
                                        <input 
                                            type="email" 
                                            id="email" 
                                            name="email" 
                                            required
                                            value="{{ old('email') }}"
                                            class="w-full px-4 py-3 border border-paynes-gray rounded-xl focus:ring-4 focus:ring-delft-blue/20 focus:border-delft-blue @error('email') border-red-500 @enderror"
                                        >
                                        @error('email')
                                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div>
                                        <label for="telefon" class="block text-sm font-medium text-brand-text mb-2">
                                            Telefon
                                        </label>
                                        <input 
                                            type="tel" 
                                            id="telefon" 
                                            name="telefon"
                                            value="{{ old('telefon') }}"
                                            class="w-full px-4 py-3 border border-paynes-gray rounded-xl focus:ring-4 focus:ring-delft-blue/20 focus:border-delft-blue @error('telefon') border-red-500 @enderror"
                                        >
                                        @error('telefon')
                                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <x-button-primary type="submit" class="w-full">
                                        Přihlásit se na kurz
                                        <x-hugeicons-arrow-right-01 class="w-4 h-4 ml-2"/>
                                    </x-button-primary>
                                </form>
                            @else
                                <!-- Kurz již proběhl -->
                                <div class="text-center py-6">
                                    <x-hugeicons-calendar-03 class="w-12 h-12 text-paynes-gray mx-auto mb-4"/>
                                    <p class="text-paynes-gray font-medium">
                                        Tento kurz již proběhl
                                    </p>
                                </div>
                            @endif

                            <!-- Kontaktní informace -->
                            <div class="border-t border-paynes-gray pt-6">
                                <h3 class="font-bold text-brand-text mb-4">
                                    Máte dotazy?
                                </h3>
                                <div class="space-y-3 text-sm">
                                    <div class="flex items-center">
                                        <x-hugeicons-mail-01 class="w-4 h-4 text-moonstone mr-3"/>
                                        <a href="mailto:info@pometlaw.cz" class="text-delft-blue hover:underline">
                                            info@pometlaw.cz
                                        </a>
                                    </div>
                                    <div class="flex items-center">
                                        <x-hugeicons-call class="w-4 h-4 text-moonstone mr-3"/>
                                        <a href="tel:+420123456789" class="text-delft-blue hover:underline">
                                            +420 123 456 789
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
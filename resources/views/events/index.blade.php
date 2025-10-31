@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-white">
    <!-- Hero sekce -->
    <section class="bg-delft-blue py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h1 class="text-4xl md:text-5xl font-bold text-white mb-6">
                    Vzdělávací Kurzy
                </h1>
                <p class="text-xl text-white/90 max-w-3xl mx-auto leading-relaxed">
                    Profesionální vzdělávání v oblasti práva, veřejných zakázek a legislativy
                </p>
            </div>
        </div>
    </section>

    <!-- Filtrování a vyhledávání -->
    <section class="py-12 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <form method="GET" action="{{ route('events.index') }}" class="bg-white p-8 border border-paynes-gray">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <!-- Vyhledávání -->
                    <div>
                        <label for="search" class="block text-sm font-medium text-brand-text mb-2">
                            Vyhledávání
                        </label>
                        <div class="relative">
                            <x-hugeicons-search-01 class="absolute left-3 top-1/2 transform -translate-y-1/2 w-5 h-5 text-paynes-gray"/>
                            <input 
                                type="text" 
                                id="search" 
                                name="search" 
                                value="{{ request('search') }}"
                                placeholder="Název kurzu, popis..."
                                class="w-full pl-10 pr-4 py-3 border border-paynes-gray focus:ring-4 focus:ring-delft-blue/20 focus:border-delft-blue"
                            >
                        </div>
                    </div>

                    <!-- Kategorie -->
                    <div>
                        <label for="category" class="block text-sm font-medium text-brand-text mb-2">
                            Kategorie
                        </label>
                        <select 
                            id="category" 
                            name="category"
                            class="w-full px-4 py-3 border border-paynes-gray focus:ring-4 focus:ring-delft-blue/20 focus:border-delft-blue"
                        >
                            <option value="">Všechny kategorie</option>
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}" {{ request('category') == $category->id ? 'selected' : '' }}>
                                    {{ $category->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Tlačítka -->
                    <div class="flex items-end space-x-4">
                        <x-button-primary type="submit" class="flex-1">
                            <x-hugeicons-search-01 class="w-4 h-4 mr-2"/>
                            Vyhledat
                        </x-button-primary>
                        <x-button-outline href="{{ route('events.index') }}" class="px-6">
                            Vymazat
                        </x-button-outline>
                    </div>
                </div>
            </form>
        </div>
    </section>

    <!-- Seznam kurzů -->
    <section class="py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            @if($events->count() > 0)
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach($events as $event)
                        <x-card-event
                            :title="$event->name"
                            :description="Str::limit($event->description, 120)"
                            :date="$event->formatted_event_date"
                            :time="$event->event_date->format('H:i')"
                            :lecturer="$event->lecturers->pluck('full_name')->join(', ')"
                            :price="$event->formatted_price"
                            :category="$event->eventCategory->name"
                            :href="route('events.show', $event)"
                        />
                    @endforeach
                </div>

                <!-- Stránkování -->
                @if($events->hasPages())
                    <div class="mt-12 flex justify-center">
                        {{ $events->appends(request()->query())->links() }}
                    </div>
                @endif
            @else
                <!-- Prázdný stav -->
                <div class="text-center py-20">
                    <x-hugeicons-calendar-03 class="w-16 h-16 text-paynes-gray mx-auto mb-6"/>
                    <h3 class="text-2xl font-bold text-brand-text mb-4">
                        Žádné kurzy nenalezeny
                    </h3>
                    <p class="text-paynes-gray max-w-md mx-auto leading-relaxed">
                        @if(request()->hasAny(['search', 'category']))
                            Zkuste upravit kritéria vyhledávání nebo se podívejte na všechny dostupné kurzy.
                        @else
                            V současné době nejsou k dispozici žádné kurzy. Sledujte naše stránky pro aktuální nabídku.
                        @endif
                    </p>
                    @if(request()->hasAny(['search', 'category']))
                        <div class="mt-8">
                            <x-button-primary href="{{ route('events.index') }}">
                                Zobrazit všechny kurzy
                            </x-button-primary>
                        </div>
                    @endif
                </div>
            @endif
        </div>
    </section>
</div>
@endsection
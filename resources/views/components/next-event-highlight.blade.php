@props(['nearestEvent'])

@if($nearestEvent)
<section class="py-12 bg-gray-5">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="text-2xl md:text-3xl font-bold text-gray-75 mb-4">
                Nejbližší kurz
            </h2>
            <div class="bg-white border border-gray-20 rounded-lg p-6 md:p-8">
                <h3 class="text-xl md:text-2xl font-semibold text-gray-75 mb-2">{{ $nearestEvent->name }}</h3>
                <p class="text-lg text-gray-50 mb-4">{{ $nearestEvent->formatted_event_date }}</p>
                <p class="text-gray-50 mb-6">{{ Str::limit($nearestEvent->description, 200) }}</p>
                <x-ui.button-primary href="{{ route('events.show', $nearestEvent) }}">
                    Zobrazit detail kurzu
                </x-ui.button-primary>
            </div>
        </div>
    </div>
</section>
@endif
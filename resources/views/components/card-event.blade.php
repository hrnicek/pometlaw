@props([
    'title' => '',
    'description' => '',
    'date' => '',
    'time' => '',
    'lecturer' => '',
    'price' => '',
    'category' => '',
    'href' => '#'
])

<div class="bg-white border border-paynes-gray rounded-xl p-6 space-y-6">
    <!-- Kategorie -->
    <div class="inline-flex items-center px-3 py-1 bg-delft-blue/10 text-delft-blue text-sm font-medium rounded-xl">
        {{ $category }}
    </div>
    
    <!-- Obsah -->
    <div class="space-y-4">
        <h3 class="text-xl font-bold text-delft-blue leading-tight">
            {{ $title }}
        </h3>
        
        <p class="text-brand-text leading-relaxed">
            {{ $description }}
        </p>
        
        <!-- Detaily kurzu -->
        <div class="space-y-3">
            <!-- Datum a čas -->
            <div class="flex items-center text-brand-text">
                <x-hugeicons-calendar-03 class="w-4 h-4 text-moonstone mr-3 flex-shrink-0"/>
                <span class="font-medium">{{ $date }}</span>
                <span class="mx-2 text-paynes-gray">•</span>
                <span>{{ $time }}</span>
            </div>
            
            <!-- Lektor -->
            <div class="flex items-center text-brand-text">
                <x-hugeicons-user class="w-4 h-4 text-moonstone mr-3 flex-shrink-0"/>
                <span>{{ $lecturer }}</span>
            </div>
            
            <!-- Cena -->
            <div class="flex items-center">
                <x-hugeicons-money-01 class="w-4 h-4 text-moonstone mr-3 flex-shrink-0"/>
                <span class="text-xl font-bold text-delft-blue">{{ $price }}</span>
            </div>
        </div>
        
        <!-- CTA tlačítko -->
        <x-button-primary href="#kurzy" class="w-full">
            Přihlásit se
            <x-hugeicons-arrow-right-01 class="w-4 h-4 ml-2"/>
        </x-button-primary>
    </div>
</div>

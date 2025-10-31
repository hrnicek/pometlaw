@props([
    'image' => null,
    'title' => '',
    'description' => '',
    'href' => null,
    'badge' => null,
    'hover' => true,
    'lazy' => true
])

@php
    $cardClasses = 'bg-white rounded-xl border border-gray-20 overflow-hidden transition-all duration-200';
    if ($hover) {
        $cardClasses .= ' hover:shadow-lg hover:-translate-y-1';
    }
@endphp

@if($href)
    <a href="{{ $href }}" class="{{ $cardClasses }}">
@else
    <div class="{{ $cardClasses }}">
@endif

    @if($image)
        <div class="aspect-video overflow-hidden">
            <img
                src="{{ $image }}"
                alt="{{ $title }}"
                class="w-full h-full object-cover transition-transform duration-300 {{ $hover ? 'hover:scale-105' : '' }}"
                {{ $lazy ? 'loading="lazy"' : 'loading="eager"' }}
            >
        </div>
    @endif

    <div class="p-6">
        @if($badge)
            <div class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-delft-blue text-white mb-3">
                {{ $badge }}
            </div>
        @endif

        @if($title)
            <h3 class="text-lg font-semibold text-gray-75 dark:text-gray-75 mb-2 line-clamp-2">
                {{ $title }}
            </h3>
        @endif

        @if($description)
            <p class="text-gray-50 dark:text-gray-50 text-sm leading-relaxed line-clamp-3">
                {{ $description }}
            </p>
        @endif

        {{ $slot }}
    </div>

@if($href)
    </a>
@else
    </div>
@endif
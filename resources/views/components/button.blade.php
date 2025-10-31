@props([
    'variant' => 'primary',
    'size' => 'md',
    'type' => 'button',
    'disabled' => false,
    'loading' => false,
    'href' => null,
    'external' => false
])

@php
    $baseClasses = 'inline-flex items-center justify-center font-medium rounded-md focus:outline-none focus-visible:ring-2 focus-visible:ring-offset-2 transition-all duration-200 disabled:opacity-50 disabled:cursor-not-allowed';

    $variantClasses = [
        'primary' => 'bg-delft-blue hover:bg-paynes-gray text-white focus-visible:ring-delft-blue shadow-sm hover:shadow-md',
        'secondary' => 'bg-gray-10 hover:bg-gray-20 text-brand-text focus-visible:ring-gray-30 border border-gray-30',
        'outline' => 'border border-delft-blue text-delft-blue hover:bg-delft-blue hover:text-white focus-visible:ring-delft-blue',
        'ghost' => 'text-brand-text hover:text-delft-blue hover:bg-gray-5 focus-visible:ring-gray-30',
        'destructive' => 'bg-destructive hover:bg-destructive/90 text-white focus-visible:ring-destructive shadow-sm hover:shadow-md',
    ];

    $sizeClasses = [
        'sm' => 'px-3 py-1.5 text-sm',
        'md' => 'px-4 py-2 text-sm',
        'lg' => 'px-6 py-3 text-base',
        'xl' => 'px-8 py-4 text-lg',
    ];

    $classes = $baseClasses . ' ' . ($variantClasses[$variant] ?? $variantClasses['primary']) . ' ' . ($sizeClasses[$size] ?? $sizeClasses['md']);

    if ($loading) {
        $classes .= ' cursor-wait';
    }

    if ($disabled) {
        $classes .= ' pointer-events-none';
    }
@endphp

@if($href)
    <a
        href="{{ $href }}"
        {{ $external ? 'target="_blank" rel="noopener noreferrer"' : '' }}
        class="{{ $classes }}"
        {{ $disabled ? 'aria-disabled="true"' : '' }}
        @if($loading) aria-busy="true" @endif
    >
        @if($loading)
            <svg class="animate-spin -ml-1 mr-2 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
            </svg>
        @endif
        {{ $slot }}
    </a>
@else
    <button
        type="{{ $type }}"
        class="{{ $classes }}"
        {{ $disabled ? 'disabled aria-disabled="true"' : '' }}
        @if($loading) aria-busy="true" @endif
    >
        @if($loading)
            <svg class="animate-spin -ml-1 mr-2 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
            </svg>
        @endif
        {{ $slot }}
    </button>
@endif
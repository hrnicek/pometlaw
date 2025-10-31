@props([
    'size' => 'md',
    'href' => null,
    'type' => 'button',
    'disabled' => false,
    'class' => '',
])

@php
    $sizeClasses = [
        'xs' => 'py-1.5 px-3 text-xs font-medium rounded-lg gap-1.5',
        'sm' => 'py-2 px-3 text-sm font-medium rounded-lg gap-2',
        'md' => 'py-3 px-4 text-sm font-semibold rounded-xl gap-2',
        'lg' => 'py-3 px-6 text-base font-semibold rounded-xl gap-2.5',
        'xl' => 'py-4 px-8 text-lg font-bold rounded-2xl gap-3',
    ];

    $baseClasses = 'inline-flex items-center justify-center text-center bg-delft-blue text-white focus:outline-none focus:ring-2 focus:ring-delft-blue focus:ring-offset-2';
    
    $disabledClasses = $disabled ? 'opacity-50 cursor-not-allowed' : 'active:bg-delft-blue/95';
    
    $classes = trim($baseClasses . ' ' . ($sizeClasses[$size] ?? $sizeClasses['md']) . ' ' . $disabledClasses . ' ' . $class);
@endphp

@if($href)
    <a href="{{ $href }}" class="{{ $classes }}" {{ $attributes->except(['href', 'size', 'type', 'disabled', 'class']) }}>
        {{ $slot }}
    </a>
@else
    <button type="{{ $type }}" {{ $disabled ? 'disabled' : '' }} class="{{ $classes }}" {{ $attributes->except(['href', 'size', 'type', 'disabled', 'class']) }}>
        {{ $slot }}
    </button>
@endif
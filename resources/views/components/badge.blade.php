@props([
    'variant' => 'default',
    'class' => ''
])

@php
    $baseClasses = 'inline-flex items-center rounded-full px-2.5 py-0.5 text-xs font-medium transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2';

    $variantClasses = [
        'default' => 'border border-transparent bg-delft-blue text-white hover:bg-paynes-gray',
        'secondary' => 'border border-transparent bg-gray-10 text-gray-75 hover:bg-gray-20',
        'destructive' => 'border border-transparent bg-destructive text-white hover:bg-destructive/90',
        'outline' => 'text-brand-text border border-gray-30 hover:bg-gray-5',
    ];

    $classes = $baseClasses . ' ' . ($variantClasses[$variant] ?? $variantClasses['default']) . ' ' . $class;
@endphp

<span {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</span>
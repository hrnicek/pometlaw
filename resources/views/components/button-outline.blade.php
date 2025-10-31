@props([
    'size' => 'md',
    'href' => null,
    'type' => 'button',
    'disabled' => false,
    'class' => '',
])

@php
  $sizeClasses = [
      'xs' => 'py-1.5 px-3 text-xs font-medium  gap-1.5',
      'sm' => 'py-2 px-3 text-sm font-medium  gap-2',
      'md' => 'py-3 px-4 text-sm font-semibold  gap-2',
      'lg' => 'py-3 px-6 text-base font-semibold  gap-2.5',
      'xl' => 'py-4 px-8 text-lg font-bold  gap-3',
  ];

  $baseClasses =
      'inline-flex items-center justify-center text-center border-2 border-delft-blue text-delft-blue bg-transparent focus:outline-none focus:ring-2 focus:ring-delft-blue focus:ring-offset-2';

  $disabledClasses = $disabled ? 'opacity-50 cursor-not-allowed' : '';

  $classes = trim(
      $baseClasses . ' ' . ($sizeClasses[$size] ?? $sizeClasses['md']) . ' ' . $disabledClasses . ' ' . $class,
  );
@endphp

@if ($href)
  <a href="{{ $href }}" class="{{ $classes }}"
    {{ $attributes->except(['href', 'size', 'type', 'disabled', 'class']) }}>
    {{ $slot }}
  </a>
@else
  <button type="{{ $type }}" {{ $disabled ? 'disabled' : '' }} class="{{ $classes }}"
    {{ $attributes->except(['href', 'size', 'type', 'disabled', 'class']) }}>
    {{ $slot }}
  </button>
@endif

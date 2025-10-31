@props([
    'type' => 'info',
    'dismissible' => true,
    'autoDismiss' => true,
    'duration' => 5000
])

@php
    $typeClasses = [
        'success' => 'bg-green-50 dark:bg-green-900/20 border-green-200 dark:border-green-800 text-green-800 dark:text-green-200',
        'error' => 'bg-destructive/10 border-destructive/20 text-destructive',
        'warning' => 'bg-yellow-50 dark:bg-yellow-900/20 border-yellow-200 dark:border-yellow-800 text-yellow-800 dark:text-yellow-200',
        'info' => 'bg-blue-50 dark:bg-blue-900/20 border-blue-200 dark:border-blue-800 text-blue-800 dark:text-blue-200',
    ];

    $iconClasses = [
        'success' => 'text-green-400',
        'error' => 'text-destructive',
        'warning' => 'text-yellow-400',
        'info' => 'text-blue-400',
    ];

    $icons = [
        'success' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>',
        'error' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4c-.77-.833-1.964-.833-2.732 0L3.732 16.5c-.77.833.192 2.5 1.732 2.5z"></path>',
        'warning' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4c-.77-.833-1.964-.833-2.732 0L3.732 16.5c-.77.833.192 2.5 1.732 2.5z"></path>',
        'info' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>',
    ];
@endphp

<div
    x-data="{
        show: true,
        autoDismiss: {{ $autoDismiss ? 'true' : 'false' }},
        duration: {{ $duration }}
    }"
    x-show="show"
    x-transition:enter="transition ease-out duration-300"
    x-transition:enter-start="opacity-0 transform scale-95"
    x-transition:enter-end="opacity-100 transform scale-100"
    x-transition:leave="transition ease-in duration-200"
    x-transition:leave-start="opacity-100 transform scale-100"
    x-transition:leave-end="opacity-0 transform scale-95"
    x-init="if (autoDismiss) setTimeout(() => show = false, duration)"
    class="border-l-4 p-6 rounded-r-xl {{ $typeClasses[$type] ?? $typeClasses['info'] }}"
    role="alert"
    aria-live="polite"
>
    <div class="flex items-start">
        <div class="flex-shrink-0">
            <svg class="h-5 w-5 {{ $iconClasses[$type] ?? $iconClasses['info'] }}" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                {!! $icons[$type] ?? $icons['info'] !!}
            </svg>
        </div>
        <div class="ml-3 flex-1">
            <div class="text-sm">
                {{ $slot }}
            </div>
        </div>
        @if($dismissible)
            <div class="ml-auto pl-3">
                <div class="-mx-1.5 -my-1.5">
                    <button
                        @click="show = false"
                        class="inline-flex rounded-md p-1.5 focus:outline-none focus:ring-2 focus:ring-gray-600 focus:ring-offset-2 {{ $typeClasses[$type] ?? $typeClasses['info'] }} hover:bg-black/5 dark:hover:bg-white/5 transition-colors duration-200"
                        aria-label="Zavřít"
                    >
                        <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>
            </div>
        @endif
    </div>
</div>
@props([
    'type' => 'text',
    'name' => '',
    'value' => '',
    'placeholder' => '',
    'required' => false,
    'disabled' => false,
    'readonly' => false,
    'error' => null,
    'label' => null,
    'hint' => null,
    'floating' => false,
    'icon' => null
])

@php
    $inputId = $name ? $name : 'input-' . uniqid();
    $hasError = !empty($error);
@endphp

<div class="relative">
    @if($label && !$floating)
        <label for="{{ $inputId }}" class="block text-sm font-medium text-gray-75 dark:text-gray-75 mb-1">
            {{ $label }}
            @if($required)
                <span class="text-destructive" aria-label="povinné pole">*</span>
            @endif
        </label>
    @endif

    <div class="relative">
        @if($icon)
            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                <svg class="h-5 w-5 text-gray-50 dark:text-gray-50" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    {!! $icon !!}
                </svg>
            </div>
        @endif

        @if($floating && $label)
            <input
                id="{{ $inputId }}"
                type="{{ $type }}"
                name="{{ $name }}"
                value="{{ old($name, $value) }}"
                placeholder="{{ $placeholder ?: $label }}"
                {{ $required ? 'required' : '' }}
                {{ $disabled ? 'disabled' : '' }}
                {{ $readonly ? 'readonly' : '' }}
                class="
                    peer w-full px-3 py-2 border rounded-md shadow-sm placeholder-transparent
                    focus:outline-none focus:ring-2 focus:ring-delft-blue dark:focus:ring-moonstone focus:border-transparent
                    transition-colors duration-200
                    {{ $icon ? 'pl-10' : '' }}
                    {{ $hasError
                        ? 'border-destructive focus:ring-destructive'
                        : 'border-gray-30 dark:border-gray-20 focus:border-delft-blue dark:focus:border-moonstone'
                    }}
                    {{ $disabled ? 'bg-gray-5 cursor-not-allowed' : 'bg-white' }}
                "
                aria-describedby="{{ $hint ? $inputId . '-hint' : '' }} {{ $hasError ? $inputId . '-error' : '' }}"
                aria-invalid="{{ $hasError ? 'true' : 'false' }}"
            >

            <label
                for="{{ $inputId }}"
                class="
                    absolute left-3 top-2 text-gray-50 dark:text-gray-50 text-sm transition-all duration-200
                    peer-placeholder-shown:text-base peer-placeholder-shown:top-2
                    peer-focus:top-0 peer-focus:text-xs peer-focus:text-delft-blue dark:peer-focus:text-moonstone
                    pointer-events-none
                    {{ $icon ? 'left-10' : '' }}
                    {{ $hasError ? 'text-destructive' : '' }}
                "
            >
                {{ $label }}
                @if($required)
                    <span class="text-destructive">*</span>
                @endif
            </label>
        @else
            <input
                id="{{ $inputId }}"
                type="{{ $type }}"
                name="{{ $name }}"
                value="{{ old($name, $value) }}"
                placeholder="{{ $placeholder }}"
                {{ $required ? 'required' : '' }}
                {{ $disabled ? 'disabled' : '' }}
                {{ $readonly ? 'readonly' : '' }}
                class="
                    w-full px-3 py-2 border rounded-md shadow-sm
                    focus:outline-none focus:ring-2 focus:ring-delft-blue dark:focus:ring-moonstone focus:border-transparent
                    transition-colors duration-200
                    {{ $icon ? 'pl-10' : '' }}
                    {{ $hasError
                        ? 'border-destructive focus:ring-destructive'
                        : 'border-gray-30 dark:border-gray-20 focus:border-delft-blue dark:focus:border-moonstone'
                    }}
                    {{ $disabled ? 'bg-gray-5 dark:bg-gray-10 cursor-not-allowed' : 'bg-white dark:bg-gray-10' }}
                "
                aria-describedby="{{ $hint ? $inputId . '-hint' : '' }} {{ $hasError ? $inputId . '-error' : '' }}"
                aria-invalid="{{ $hasError ? 'true' : 'false' }}"
            >
        @endif
    </div>

    @if($hint)
        <p id="{{ $inputId }}-hint" class="mt-1 text-sm text-gray-50 dark:text-gray-50">
            {{ $hint }}
        </p>
    @endif

    @if($hasError)
        <p id="{{ $inputId }}-error" class="mt-1 text-sm text-destructive" role="alert">
            {{ $error }}
        </p>
    @endif
</div>
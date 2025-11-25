@props(['disabled' => false])

<textarea
    {{ $disabled ? 'disabled' : '' }}
    {{ $attributes->merge([
        'class' => 'w-full px-5 py-4 bg-gray-5 border-2 border-transparent rounded-xl text-gray-75 placeholder-gray-30 focus:outline-none focus:bg-white focus:border-moonstone transition-all duration-200 resize-none disabled:opacity-50 disabled:cursor-not-allowed'
    ]) }}
>{{ $slot }}</textarea>

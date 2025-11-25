@props(['disabled' => false])

<input
    type="checkbox"
    {{ $disabled ? 'disabled' : '' }}
    {{ $attributes->merge([
        'class' => 'h-5 w-5 rounded border-gray-30 text-delft-blue focus:ring-moonstone transition duration-150 ease-in-out disabled:opacity-50 disabled:cursor-not-allowed'
    ]) }}
>

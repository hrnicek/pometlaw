@props(['type' => 'button'])

<button
    type="{{ $type }}"
    {{ $attributes->merge([
        'class' => 'inline-flex items-center justify-center rounded-xl border border-transparent bg-delft-blue px-6 py-3 text-base font-medium text-white transition-all duration-200 hover:bg-delft-blue/90 shadow-sm hover:shadow-md focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-offset-2 focus-visible:ring-paynes-gray focus-visible:ring-offset-white'
    ]) }}
>
    {{ $slot }}
</button>
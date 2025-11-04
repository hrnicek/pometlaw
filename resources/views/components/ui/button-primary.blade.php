@props(['type' => 'button'])

<button
    type="{{ $type }}"
    {{ $attributes->merge([
        'class' => 'inline-flex items-center justify-center rounded-xl border border-transparent bg-delft-blue px-5 py-3 text-base font-medium text-white transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-offset-2 focus-visible:ring-paynes-gray focus-visible:ring-offset-white'
    ]) }}
>
    {{ $slot }}
</button>
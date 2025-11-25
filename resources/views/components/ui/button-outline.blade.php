@props(['type' => 'button'])

<button
    type="{{ $type }}"
    {{ $attributes->merge([
        'class' => 'inline-flex items-center justify-center rounded-xl border border-paynes-gray bg-transparent px-6 py-3 text-base font-medium text-paynes-gray transition-all duration-200 hover:bg-paynes-gray/10 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-offset-2 focus-visible:ring-paynes-gray focus-visible:ring-offset-white'
    ]) }}
>
    {{ $slot }}
</button>
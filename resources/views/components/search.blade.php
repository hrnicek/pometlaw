@props([
    'placeholder' => 'Hledat...',
    'debounce' => 300,
    'value' => ''
])

<div class="relative" x-data="{
    search: '{{ $value }}',
    debounceTimer: null,
    debouncedSearch() {
        clearTimeout(this.debounceTimer);
        this.debounceTimer = setTimeout(() => {
            this.$dispatch('search-updated', { value: this.search });
        }, {{ $debounce }});
    }
}" @search-updated.window="search = $event.detail.value">
    <div class="relative">
        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
            <svg class="h-5 w-5 text-gray-50 dark:text-gray-50" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
            </svg>
        </div>
        <input
            x-model="search"
            @input="debouncedSearch()"
            type="text"
            class="w-full pl-10 pr-4 py-3 border border-gray-30 dark:border-gray-20 rounded-lg focus:outline-none focus:ring-2 focus:ring-delft-blue dark:focus:ring-moonstone focus:border-transparent bg-white dark:bg-gray-10 text-gray-75 dark:text-gray-75 placeholder-gray-50 dark:placeholder-gray-50 transition-colors duration-200"
            placeholder="{{ $placeholder }}"
            aria-label="Vyhledávací pole"
        >
        <button
            x-show="search.length > 0"
            @click="search = ''; $dispatch('search-updated', { value: '' })"
            class="absolute inset-y-0 right-0 pr-3 flex items-center text-gray-50 dark:text-gray-50 hover:text-gray-75 dark:hover:text-gray-75 transition-colors duration-200"
            aria-label="Vymazat vyhledávání"
            x-cloak
        >
            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>
    </div>
</div>
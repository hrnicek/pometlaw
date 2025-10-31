@props([
    'id' => null,
    'open' => false,
    'size' => 'md',
    'persistent' => false
])

@php
    $sizeClasses = [
        'sm' => 'max-w-md',
        'md' => 'max-w-lg',
        'lg' => 'max-w-2xl',
        'xl' => 'max-w-4xl',
        'full' => 'max-w-full mx-4',
    ];
@endphp

<div
    x-data="{
        open: {{ $open ? 'true' : 'false' }},
        persistent: {{ $persistent ? 'true' : 'false' }},
        focusableElements: [],
        firstFocusableElement: null,
        lastFocusableElement: null,
        init() {
            this.$watch('open', value => {
                if (value) {
                    this.focusableElements = this.$el.querySelectorAll(
                        'button, [href], input, select, textarea, [tabindex]:not([tabindex="-1"])'
                    );
                    this.firstFocusableElement = this.focusableElements[0];
                    this.lastFocusableElement = this.focusableElements[this.focusableElements.length - 1];
                    this.$nextTick(() => this.firstFocusableElement?.focus());
                    document.body.style.overflow = 'hidden';
                } else {
                    document.body.style.overflow = '';
                }
            });
        },
        close() {
            if (!this.persistent) {
                this.open = false;
            }
        },
        handleKeydown(event) {
            if (event.key === 'Escape' && !this.persistent) {
                this.close();
            }
            if (event.key === 'Tab') {
                if (event.shiftKey) {
                    if (document.activeElement === this.firstFocusableElement) {
                        event.preventDefault();
                        this.lastFocusableElement?.focus();
                    }
                } else {
                    if (document.activeElement === this.lastFocusableElement) {
                        event.preventDefault();
                        this.firstFocusableElement?.focus();
                    }
                }
            }
        }
    }"
    x-show="open"
    x-transition:enter="transition ease-out duration-300"
    x-transition:enter-start="opacity-0"
    x-transition:enter-end="opacity-100"
    x-transition:leave="transition ease-in duration-200"
    x-transition:leave-start="opacity-100"
    x-transition:leave-end="opacity-0"
    @keydown.window="handleKeydown"
    @click.away="close()"
    class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-black/50 dark:bg-black/70"
    x-cloak
    role="dialog"
    aria-modal="true"
    :aria-labelledby="$id('modal-title')"
    :aria-describedby="$id('modal-description')"
>
    <div
        class="relative w-full {{ $sizeClasses[$size] ?? $sizeClasses['md'] }} max-h-full overflow-y-auto bg-white dark:bg-gray-10 rounded-xl shadow-2xl"
        @click.stop
    >
        <!-- Close button -->
        @if(!$persistent)
            <button
                @click="close()"
                class="absolute top-4 right-4 z-10 p-2 text-gray-50 hover:text-gray-75 dark:text-gray-50 dark:hover:text-gray-10 rounded-full hover:bg-gray-5 dark:hover:bg-gray-5 transition-colors duration-200"
                aria-label="Zavřít modal"
            >
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        @endif

        <!-- Modal content -->
        <div class="p-6">
            {{ $slot }}
        </div>
    </div>
</div>
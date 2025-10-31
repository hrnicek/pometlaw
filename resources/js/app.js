import './bootstrap';

import Alpine from "alpinejs";
import anchor from "@alpinejs/anchor";
import collapse from "@alpinejs/collapse";

// Custom Alpine.js directives and utilities
Alpine.plugin(anchor);
Alpine.plugin(collapse);

// Global Alpine data for common functionality
Alpine.data('themeToggle', () => ({
    darkMode: Alpine.$persist(false),
    toggle() {
        this.darkMode = !this.darkMode;
        document.documentElement.classList.toggle('dark', this.darkMode);
    },
    init() {
        document.documentElement.classList.toggle('dark', this.darkMode);
    }
}));

// Debounce utility for search inputs
Alpine.magic('debounce', () => (func, wait) => {
    let timeout;
    return function executedFunction(...args) {
        const later = () => {
            clearTimeout(timeout);
            func(...args);
        };
        clearTimeout(timeout);
        timeout = setTimeout(later, wait);
    };
});

// Focus trap utility for modals
Alpine.magic('focusTrap', () => (el) => {
    const focusableElements = el.querySelectorAll(
        'button, [href], input, select, textarea, [tabindex]:not([tabindex="-1"])'
    );
    const firstFocusableElement = focusableElements[0];
    const lastFocusableElement = focusableElements[focusableElements.length - 1];

    const handleKeydown = (e) => {
        if (e.key === 'Tab') {
            if (e.shiftKey) {
                if (document.activeElement === firstFocusableElement) {
                    e.preventDefault();
                    lastFocusableElement.focus();
                }
            } else {
                if (document.activeElement === lastFocusableElement) {
                    e.preventDefault();
                    firstFocusableElement.focus();
                }
            }
        }
    };

    el.addEventListener('keydown', handleKeydown);
    firstFocusableElement?.focus();

    return () => el.removeEventListener('keydown', handleKeydown);
});

Alpine.start();
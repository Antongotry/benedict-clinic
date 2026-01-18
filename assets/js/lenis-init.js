/**
 * Lenis Smooth Scroll Initialization
 */
(function() {
    'use strict';

    document.addEventListener('DOMContentLoaded', function() {
        // Check if Lenis is available
        if (typeof Lenis === 'undefined') {
            console.warn('Lenis smooth scroll library not loaded');
            return;
        }

        // Initialize Lenis
        const lenis = new Lenis({
            duration: 1.2,
            easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t)),
            orientation: 'vertical',
            gestureOrientation: 'vertical',
            smoothWheel: true,
            wheelMultiplier: 1,
            smoothTouch: false,
            touchMultiplier: 2,
            infinite: false,
        });

        // Animation frame
        function raf(time) {
            lenis.raf(time);
            requestAnimationFrame(raf);
        }

        requestAnimationFrame(raf);

        // Smooth scroll for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(function(anchor) {
            anchor.addEventListener('click', function(e) {
                const href = this.getAttribute('href');
                if (href === '#' || href === '#!') return;

                const target = document.querySelector(href);
                if (target) {
                    e.preventDefault();
                    lenis.scrollTo(target, {
                        offset: -100,
                        duration: 1.5,
                    });
                }
            });
        });

        // Expose lenis globally if needed
        window.lenis = lenis;
    });
})();

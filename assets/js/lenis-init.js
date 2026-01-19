/**
 * Lenis Smooth Scroll + GSAP ScrollTrigger Integration
 */
(function() {
    'use strict';

    document.addEventListener('DOMContentLoaded', function() {
        // Check if Lenis is available
        if (typeof Lenis === 'undefined') {
            console.warn('Lenis smooth scroll library not loaded');
            return;
        }

        // Check if GSAP and ScrollTrigger are available
        if (typeof gsap === 'undefined' || typeof ScrollTrigger === 'undefined') {
            console.warn('GSAP or ScrollTrigger not loaded');
            return;
        }

        // Register ScrollTrigger plugin
        gsap.registerPlugin(ScrollTrigger);

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

        // Sync ScrollTrigger with Lenis scroll
        lenis.on('scroll', ScrollTrigger.update);

        // Use GSAP ticker for Lenis animation
        gsap.ticker.add((time) => {
            lenis.raf(time * 1000);
        });

        // Disable lag smoothing for precise animations
        gsap.ticker.lagSmoothing(0);

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

        // Contacts Info Sticky with GSAP ScrollTrigger (optimized for Lenis)
        const contactsInfo = document.querySelector('.contacts-info');
        const contactPageInfo = document.querySelector('.contact-page-info');
        const contactPageFormWrapper = document.querySelector('.contact-page-form-wrapper');
        const contactsFormWrapper = document.querySelector('.contacts-form-wrapper');
        const contactPageGrid = document.querySelector('.contact-page-grid');
        const contactsGrid = document.querySelector('.contacts-grid');
        
        const targetElement = contactsInfo || contactPageInfo;
        const formWrapper = contactPageFormWrapper || contactsFormWrapper;
        const gridContainer = contactPageGrid || contactsGrid;
        
        if (targetElement && formWrapper && gridContainer && window.innerWidth > 1024) {
            // Функція для оновлення висоти pin-spacer
            const updatePinSpacerHeight = () => {
                const pinSpacer = targetElement.parentElement;
                if (pinSpacer && pinSpacer.classList.contains('pin-spacer')) {
                    // Встановлюємо висоту pin-spacer рівну висоті форми
                    const formHeight = formWrapper.offsetHeight;
                    pinSpacer.style.height = formHeight + 'px';
                }
            };
            
            // Refresh ScrollTrigger after Lenis is ready
            setTimeout(() => {
                ScrollTrigger.create({
                    trigger: gridContainer,
                    start: 'top 120px',
                    endTrigger: formWrapper,
                    end: 'bottom top',
                    pin: targetElement,
                    pinSpacing: true,
                    invalidateOnRefresh: true,
                    refreshPriority: -1,
                    markers: false,
                    onRefresh: updatePinSpacerHeight
                });
                
                // Встановлюємо початкову висоту pin-spacer після створення
                setTimeout(() => {
                    updatePinSpacerHeight();
                    ScrollTrigger.refresh();
                }, 200);
                
                // Refresh on resize
                let resizeTimeout;
                window.addEventListener('resize', () => {
                    clearTimeout(resizeTimeout);
                    resizeTimeout = setTimeout(() => {
                        updatePinSpacerHeight();
                        ScrollTrigger.refresh();
                    }, 150);
                });
            }, 100);
        }
    });
})();

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

        // Contacts Info animation with GSAP (without sticky)
        const contactsInfo = document.querySelector('.contacts-info');
        const contactPageInfo = document.querySelector('.contact-page-info');
        
        if ((contactsInfo || contactPageInfo) && window.innerWidth > 1024) {
            const targetElement = contactsInfo || contactPageInfo;
            
            gsap.from(targetElement, {
                opacity: 0,
                y: 30,
                duration: 1,
                ease: 'power2.out',
                scrollTrigger: {
                    trigger: targetElement,
                    start: 'top 80%',
                    end: 'bottom 20%',
                    toggleActions: 'play none none none',
                    once: true
                }
            });
        }
    });
})();

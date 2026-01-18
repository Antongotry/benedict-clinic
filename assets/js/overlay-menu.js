/**
 * Overlay Menu - Simple & Clean
 */
(function() {
    'use strict';

    document.addEventListener('DOMContentLoaded', function() {
        const menuToggle = document.getElementById('menuToggle');
        const overlayMenu = document.getElementById('overlayMenu');
        const body = document.body;

        if (!menuToggle || !overlayMenu) return;

        // Toggle menu
        menuToggle.addEventListener('click', function(e) {
            e.preventDefault();
            if (overlayMenu.classList.contains('active')) {
                closeMenu();
            } else {
                openMenu();
            }
        });

        // Close on background click
        overlayMenu.addEventListener('click', function(e) {
            if (e.target === overlayMenu || e.target.classList.contains('overlay-background')) {
                closeMenu();
            }
        });

        // Close on ESC
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape' && overlayMenu.classList.contains('active')) {
                closeMenu();
            }
        });

        // Simple accordion for dropdowns
        const dropdownToggles = overlayMenu.querySelectorAll('.menu-item-has-children > a');
        
        dropdownToggles.forEach(function(toggle) {
            toggle.addEventListener('click', function(e) {
                e.preventDefault();
                const parent = this.parentElement;
                
                // Close other open dropdowns
                dropdownToggles.forEach(function(otherToggle) {
                    const otherParent = otherToggle.parentElement;
                    if (otherParent !== parent && otherParent.classList.contains('active')) {
                        otherParent.classList.remove('active');
                    }
                });
                
                // Toggle current dropdown
                parent.classList.toggle('active');
            });
        });

        // Close menu on link click (except dropdown toggles)
        const menuLinks = overlayMenu.querySelectorAll('a');
        menuLinks.forEach(function(link) {
            link.addEventListener('click', function(e) {
                // Skip dropdown toggles
                if (this.parentElement.classList.contains('menu-item-has-children') && 
                    this.parentElement.querySelector('.sub-menu')) {
                    return;
                }
                // Close menu for regular links
                if (this.getAttribute('href') && this.getAttribute('href') !== '#') {
                    closeMenu();
                }
            });
        });

        function openMenu() {
            overlayMenu.classList.add('active');
            body.classList.add('overlay-open');
            menuToggle.setAttribute('aria-expanded', 'true');
        }

        function closeMenu() {
            overlayMenu.classList.remove('active');
            body.classList.remove('overlay-open');
            menuToggle.setAttribute('aria-expanded', 'false');
            
            // Close all dropdowns after menu closes
            setTimeout(function() {
                dropdownToggles.forEach(function(toggle) {
                    toggle.parentElement.classList.remove('active');
                });
            }, 300);
        }
    });

    // Hero Video Handler
    (function() {
        const heroVideo = document.querySelector('.hero-video');
        if (!heroVideo) return;

        heroVideo.play().catch(function() {});

        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(function(entry) {
                if (entry.isIntersecting) {
                    heroVideo.play();
                } else {
                    heroVideo.pause();
                }
            });
        }, { threshold: 0.25 });

        observer.observe(heroVideo);
    })();
})();

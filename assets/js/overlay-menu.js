/**
 * Overlay Menu Functionality
 */

(function() {
    'use strict';

    document.addEventListener('DOMContentLoaded', function() {
        const menuToggle = document.getElementById('menuToggle');
        const overlayMenu = document.getElementById('overlayMenu');
        const body = document.body;

        if (!menuToggle || !overlayMenu) {
            console.warn('Overlay menu elements not found');
            return;
        }

        // Toggle menu (open/close)
        menuToggle.addEventListener('click', function(e) {
            e.preventDefault();
            if (overlayMenu.classList.contains('active')) {
                closeMenu();
            } else {
                openMenu();
            }
        });

        // Close menu when clicking outside content
        overlayMenu.addEventListener('click', function(e) {
            if (e.target === overlayMenu || e.target.classList.contains('overlay-background')) {
                closeMenu();
            }
        });

        // Close menu on ESC key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape' && overlayMenu.classList.contains('active')) {
                closeMenu();
            }
        });

        // Handle dropdown menu items with slide transition
        const dropdownItems = overlayMenu.querySelectorAll('.menu-item-has-children');
        const mainNav = overlayMenu.querySelector('.overlay-nav-primary > ul');
        
        dropdownItems.forEach(function(item) {
            const link = item.querySelector('> a');
            const submenu = item.querySelector('.sub-menu');
            
            if (!link || !submenu) return;
            
            // Create back button for submenu
            const backBtn = document.createElement('li');
            backBtn.className = 'submenu-back';
            backBtn.innerHTML = '<a href="#">← Назад</a>';
            submenu.insertBefore(backBtn, submenu.firstChild);
            
            // Add title to submenu
            const submenuTitle = document.createElement('li');
            submenuTitle.className = 'submenu-title';
            submenuTitle.innerHTML = '<span>' + link.textContent + '</span>';
            submenu.insertBefore(submenuTitle, submenu.children[1]);
            
            // Handle dropdown open
            link.addEventListener('click', function(e) {
                e.preventDefault();
                e.stopPropagation();
                
                // Hide main menu, show submenu
                mainNav.classList.add('menu-hidden');
                item.classList.add('submenu-active');
            });
            
            // Handle back button
            backBtn.querySelector('a').addEventListener('click', function(e) {
                e.preventDefault();
                e.stopPropagation();
                
                // Show main menu, hide submenu
                mainNav.classList.remove('menu-hidden');
                item.classList.remove('submenu-active');
            });
        });
        
        // Close menu when clicking on regular menu links and submenu links
        const regularLinks = overlayMenu.querySelectorAll('.overlay-nav-primary > ul > li:not(.menu-item-has-children) > a');
        const submenuLinks = overlayMenu.querySelectorAll('.overlay-nav-primary .sub-menu a:not(.submenu-back a)');
        
        regularLinks.forEach(function(link) {
            link.addEventListener('click', function() {
                closeMenu();
            });
        });
        
        submenuLinks.forEach(function(link) {
            if (!link.closest('.submenu-back') && !link.closest('.submenu-title')) {
                link.addEventListener('click', function() {
                    closeMenu();
                });
            }
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
            
            // Reset all submenus
            setTimeout(function() {
                mainNav.classList.remove('menu-hidden');
                dropdownItems.forEach(function(item) {
                    item.classList.remove('submenu-active');
                });
            }, 400);
        }

        // Smooth scroll for anchor links in overlay
        const anchorLinks = overlayMenu.querySelectorAll('a[href^="#"]');
        anchorLinks.forEach(function(link) {
            link.addEventListener('click', function(e) {
                const href = this.getAttribute('href');
                if (href === '#') return;
                
                const target = document.querySelector(href);
                if (target) {
                    e.preventDefault();
                    closeMenu();
                    
                    setTimeout(function() {
                        const headerOffset = 100;
                        const elementPosition = target.getBoundingClientRect().top;
                        const offsetPosition = elementPosition + window.pageYOffset - headerOffset;
                        
                        window.scrollTo({
                            top: offsetPosition,
                            behavior: 'smooth'
                        });
                    }, 400);
                }
            });
        });
    });

    /**
     * Hero Video Handler
     */
    function initHeroVideo() {
        const heroVideo = document.querySelector('.hero-video');
        if (!heroVideo) return;

        // Ensure video plays on load
        heroVideo.play().catch(function(error) {
            console.log('Video autoplay prevented:', error);
        });

        // Pause video when not in viewport (performance)
        const videoObserver = new IntersectionObserver(function(entries) {
            entries.forEach(function(entry) {
                if (entry.isIntersecting) {
                    heroVideo.play();
                } else {
                    heroVideo.pause();
                }
            });
        }, { threshold: 0.25 });

        videoObserver.observe(heroVideo);
    }

    // Initialize video
    initHeroVideo();

})();

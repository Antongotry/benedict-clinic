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

        // Get main navigation
        const mainNav = overlayMenu.querySelector('.overlay-nav-primary > ul');
        
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

        // Setup dropdown functionality
        setupDropdowns();

        function setupDropdowns() {
            const dropdownItems = overlayMenu.querySelectorAll('.menu-item-has-children');
            
            dropdownItems.forEach(function(item) {
                const link = item.querySelector(':scope > a');
                const submenu = item.querySelector(':scope > .sub-menu');
                
                if (!link || !submenu) return;
                
                // Check if back button already exists
                if (!submenu.querySelector('.submenu-back')) {
                    // Create back button for submenu
                    const backBtn = document.createElement('li');
                    backBtn.className = 'submenu-back';
                    backBtn.innerHTML = '<a href="javascript:void(0)">← Назад</a>';
                    submenu.insertBefore(backBtn, submenu.firstChild);
                    
                    // Add title to submenu
                    const submenuTitle = document.createElement('li');
                    submenuTitle.className = 'submenu-title';
                    submenuTitle.innerHTML = '<span>' + link.textContent.trim() + '</span>';
                    submenu.insertBefore(submenuTitle, submenu.children[1]);
                    
                    // Handle back button click
                    backBtn.addEventListener('click', function(e) {
                        e.preventDefault();
                        e.stopPropagation();
                        hideSubmenu(item);
                    });
                }
                
                // Handle dropdown toggle click
                link.addEventListener('click', function(e) {
                    e.preventDefault();
                    e.stopPropagation();
                    showSubmenu(item);
                });
            });
        }
        
        function showSubmenu(item) {
            if (mainNav) {
                mainNav.classList.add('menu-hidden');
            }
            item.classList.add('submenu-active');
        }
        
        function hideSubmenu(item) {
            if (mainNav) {
                mainNav.classList.remove('menu-hidden');
            }
            item.classList.remove('submenu-active');
        }
        
        function resetSubmenus() {
            const dropdownItems = overlayMenu.querySelectorAll('.menu-item-has-children');
            dropdownItems.forEach(function(item) {
                item.classList.remove('submenu-active');
            });
            if (mainNav) {
                mainNav.classList.remove('menu-hidden');
            }
        }
        
        // Close menu when clicking on regular menu links
        const menuLinks = overlayMenu.querySelectorAll('.overlay-nav-primary a');
        menuLinks.forEach(function(link) {
            link.addEventListener('click', function(e) {
                // Skip if it's the dropdown toggle or back button
                if (link.hasAttribute('data-submenu-toggle') || 
                    link.closest('.submenu-back') || 
                    link.closest('.submenu-title') ||
                    link.getAttribute('href') === '#' ||
                    link.getAttribute('href') === 'javascript:void(0)') {
                    return;
                }
                closeMenu();
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
            
            // Reset submenus after animation
            setTimeout(resetSubmenus, 400);
        }

        // Smooth scroll for anchor links in overlay
        const anchorLinks = overlayMenu.querySelectorAll('a[href^="#"]:not([data-submenu-toggle])');
        anchorLinks.forEach(function(link) {
            link.addEventListener('click', function(e) {
                const href = this.getAttribute('href');
                if (href === '#' || href === 'javascript:void(0)') return;
                
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

        heroVideo.play().catch(function(error) {
            console.log('Video autoplay prevented:', error);
        });

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

    initHeroVideo();

})();

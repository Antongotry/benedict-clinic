/**
 * Dr. Rosenberg Clinic - Main JavaScript
 */

(function() {
    'use strict';

    // Wait for DOM to be ready
    document.addEventListener('DOMContentLoaded', function() {
        
        // Mobile Menu Toggle
        initMobileMenu();
        
        // Smooth Scroll
        initSmoothScroll();
        
        // Gallery Carousel
        initGalleryCarousel();
        
        // Before/After Sliders
        initBeforeAfterSliders();
        
        // Sticky Header
        initStickyHeader();
        
        // Intersection Observer for Animations
        initScrollAnimations();
        
    });

    /**
     * Mobile Menu Toggle
     */
    function initMobileMenu() {
        const menuToggle = document.querySelector('.mobile-menu-toggle');
        const primaryMenu = document.querySelector('.primary-menu');
        
        if (!menuToggle || !primaryMenu) return;
        
        menuToggle.addEventListener('click', function() {
            const isExpanded = this.getAttribute('aria-expanded') === 'true';
            this.setAttribute('aria-expanded', !isExpanded);
            primaryMenu.classList.toggle('active');
            this.classList.toggle('active');
        });
        
        // Close menu when clicking outside
        document.addEventListener('click', function(e) {
            if (!e.target.closest('.main-navigation')) {
                primaryMenu.classList.remove('active');
                menuToggle.classList.remove('active');
                menuToggle.setAttribute('aria-expanded', 'false');
            }
        });
    }

    /**
     * Smooth Scroll for Anchor Links
     */
    function initSmoothScroll() {
        const links = document.querySelectorAll('a[href^="#"]');
        
        links.forEach(link => {
            link.addEventListener('click', function(e) {
                const href = this.getAttribute('href');
                if (href === '#') return;
                
                const target = document.querySelector(href);
                if (target) {
                    e.preventDefault();
                    const headerOffset = 100;
                    const elementPosition = target.getBoundingClientRect().top;
                    const offsetPosition = elementPosition + window.pageYOffset - headerOffset;
                    
                    window.scrollTo({
                        top: offsetPosition,
                        behavior: 'smooth'
                    });
                }
            });
        });
    }

    /**
     * Gallery Carousel Navigation
     */
    function initGalleryCarousel() {
        const carousel = document.querySelector('.gallery-carousel');
        const prevBtn = document.querySelector('.gallery-prev');
        const nextBtn = document.querySelector('.gallery-next');
        
        if (!carousel || !prevBtn || !nextBtn) return;
        
        const slideWidth = 430; // 400px + 30px gap
        
        prevBtn.addEventListener('click', function() {
            carousel.scrollBy({
                left: -slideWidth,
                behavior: 'smooth'
            });
        });
        
        nextBtn.addEventListener('click', function() {
            carousel.scrollBy({
                left: slideWidth,
                behavior: 'smooth'
            });
        });
        
        // Touch swipe support
        let startX = 0;
        let scrollLeft = 0;
        
        carousel.addEventListener('touchstart', function(e) {
            startX = e.touches[0].pageX - carousel.offsetLeft;
            scrollLeft = carousel.scrollLeft;
        });
        
        carousel.addEventListener('touchmove', function(e) {
            const x = e.touches[0].pageX - carousel.offsetLeft;
            const walk = (x - startX) * 2;
            carousel.scrollLeft = scrollLeft - walk;
        });
    }

    /**
     * Before/After Image Sliders
     */
    function initBeforeAfterSliders() {
        const sliders = document.querySelectorAll('.procedure-slider');
        
        sliders.forEach(slider => {
            const afterImg = slider.querySelector('.after-img');
            const handle = slider.querySelector('.slider-handle');
            
            if (!afterImg || !handle) return;
            
            let isSliding = false;
            
            // Create handle if it doesn't exist
            if (!handle) {
                const newHandle = document.createElement('div');
                newHandle.className = 'slider-handle';
                slider.appendChild(newHandle);
            }
            
            slider.addEventListener('mousedown', startSliding);
            slider.addEventListener('touchstart', startSliding);
            
            function startSliding(e) {
                isSliding = true;
                slider.classList.add('sliding');
                updateSlider(e);
            }
            
            document.addEventListener('mousemove', function(e) {
                if (!isSliding) return;
                updateSlider(e);
            });
            
            document.addEventListener('touchmove', function(e) {
                if (!isSliding) return;
                updateSlider(e);
            });
            
            document.addEventListener('mouseup', stopSliding);
            document.addEventListener('touchend', stopSliding);
            
            function stopSliding() {
                isSliding = false;
                slider.classList.remove('sliding');
            }
            
            function updateSlider(e) {
                const rect = slider.getBoundingClientRect();
                const x = (e.type.includes('touch') ? e.touches[0].clientX : e.clientX) - rect.left;
                const percent = Math.max(0, Math.min(100, (x / rect.width) * 100));
                
                if (afterImg) {
                    afterImg.style.clipPath = `inset(0 ${100 - percent}% 0 0)`;
                }
                if (handle) {
                    handle.style.left = `${percent}%`;
                }
            }
        });
    }

    /**
     * Sticky Header on Scroll
     */
    function initStickyHeader() {
        const header = document.querySelector('.site-header');
        if (!header) return;
        
        let lastScroll = 0;
        
        window.addEventListener('scroll', function() {
            const currentScroll = window.pageYOffset;
            
            if (currentScroll > 100) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
            
            lastScroll = currentScroll;
        });
    }

    /**
     * Scroll Animations with Intersection Observer
     */
    function initScrollAnimations() {
        const animatedElements = document.querySelectorAll('.procedure-card, .team-member, .concierge-card, .about-grid, .gallery-item');
        
        if (!animatedElements.length) return;
        
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };
        
        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate-in');
                    observer.unobserve(entry.target);
                }
            });
        }, observerOptions);
        
        animatedElements.forEach(el => {
            el.style.opacity = '0';
            el.style.transform = 'translateY(30px)';
            el.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
            observer.observe(el);
        });
        
        // Add animation class styles
        const style = document.createElement('style');
        style.textContent = `
            .animate-in {
                opacity: 1 !important;
                transform: translateY(0) !important;
            }
        `;
        document.head.appendChild(style);
    }

    /**
     * Video Background Handler
     */
    function initVideoBackground() {
        const video = document.querySelector('.hero-video');
        if (!video) return;
        
        // Ensure video plays on mobile
        video.play().catch(function(error) {
            console.log('Video autoplay failed:', error);
        });
        
        // Pause video when not in viewport (performance)
        const videoObserver = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    video.play();
                } else {
                    video.pause();
                }
            });
        });
        
        videoObserver.observe(video);
    }

    /**
     * Form Validation (if Contact Form 7 is not available)
     */
    function initFormValidation() {
        const forms = document.querySelectorAll('.contact-form');
        
        forms.forEach(form => {
            form.addEventListener('submit', function(e) {
                e.preventDefault();
                
                const inputs = form.querySelectorAll('input[required], textarea[required]');
                let isValid = true;
                
                inputs.forEach(input => {
                    if (!input.value.trim()) {
                        isValid = false;
                        input.classList.add('error');
                    } else {
                        input.classList.remove('error');
                    }
                });
                
                if (isValid) {
                    // Submit form
                    form.submit();
                }
            });
        });
    }

    /**
     * Lazy Loading Images
     */
    function initLazyLoading() {
        const images = document.querySelectorAll('img[data-src]');
        
        if (!images.length) return;
        
        const imageObserver = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const img = entry.target;
                    img.src = img.dataset.src;
                    img.removeAttribute('data-src');
                    imageObserver.unobserve(img);
                }
            });
        });
        
        images.forEach(img => imageObserver.observe(img));
    }

    /**
     * Back to Top Button
     */
    function initBackToTop() {
        const backToTopBtn = document.createElement('button');
        backToTopBtn.innerHTML = '<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 15l-6-6-6 6"/></svg>';
        backToTopBtn.className = 'back-to-top';
        backToTopBtn.setAttribute('aria-label', 'Back to top');
        document.body.appendChild(backToTopBtn);
        
        // Add styles
        const style = document.createElement('style');
        style.textContent = `
            .back-to-top {
                position: fixed;
                bottom: 30px;
                right: 30px;
                width: 50px;
                height: 50px;
                border-radius: 50%;
                background-color: #000000;
                color: #ffffff;
                border: 2px solid #000000;
                cursor: pointer;
                opacity: 0;
                visibility: hidden;
                transition: all 0.3s ease;
                z-index: 999;
                display: flex;
                align-items: center;
                justify-content: center;
                padding: 0;
            }
            .back-to-top svg {
                width: 20px;
                height: 20px;
                stroke: #ffffff;
                transition: stroke 0.3s ease;
            }
            .back-to-top.visible {
                opacity: 1;
                visibility: visible;
            }
            .back-to-top:hover {
                background-color: transparent;
                border: 2px solid #000000;
            }
            .back-to-top:hover svg {
                stroke: #000000;
            }
            .back-to-top.in-footer {
                background-color: #ffffff;
                border: 2px solid #ffffff;
            }
            .back-to-top.in-footer svg {
                stroke: #000000;
            }
            .back-to-top.in-footer:hover {
                background-color: transparent;
                border: 2px solid #ffffff;
            }
            .back-to-top.in-footer:hover svg {
                stroke: #ffffff;
            }
        `;
        document.head.appendChild(style);
        
        // Show/hide on scroll and change style when in footer area
        window.addEventListener('scroll', function() {
            if (window.pageYOffset > 500) {
                backToTopBtn.classList.add('visible');
            } else {
                backToTopBtn.classList.remove('visible');
            }
            
            // Check button color based on section background
            const buttonRect = backToTopBtn.getBoundingClientRect();
            const buttonCenterY = buttonRect.top + (buttonRect.height / 2);
            
            // Check Instagram section (black background) - should be WHITE
            const instagramSection = document.querySelector('.instagram-feed-section');
            if (instagramSection) {
                const instagramRect = instagramSection.getBoundingClientRect();
                if (buttonCenterY >= instagramRect.top && buttonCenterY <= instagramRect.bottom) {
                    backToTopBtn.classList.add('in-footer');
                    return;
                }
            }
            
            // Check secondary footer (white background) - should be BLACK
            const secondaryFooter = document.querySelector('.secondary-footer');
            if (secondaryFooter) {
                const footerRect = secondaryFooter.getBoundingClientRect();
                if (buttonCenterY >= footerRect.top && buttonCenterY <= footerRect.bottom) {
                    backToTopBtn.classList.remove('in-footer');
                    return;
                }
            }
            
            // Check primary footer (black background) - should be WHITE
            const primaryFooter = document.querySelector('.primary-footer');
            if (primaryFooter) {
                const primaryRect = primaryFooter.getBoundingClientRect();
                if (buttonCenterY >= primaryRect.top && buttonCenterY <= primaryRect.bottom) {
                    backToTopBtn.classList.add('in-footer');
                    return;
                }
            }
            
            // Default: black button
            backToTopBtn.classList.remove('in-footer');
        });
        
        // Scroll to top on click
        backToTopBtn.addEventListener('click', function() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    }

    /**
     * Parallax effect for schedule consultation background
     */
    function initScheduleParallax() {
        const section = document.querySelector('.schedule-consultation-section');
        const bg = document.querySelector('.schedule-consultation-bg');
        
        if (!section || !bg) return;
        
        let ticking = false;
        
        window.addEventListener('scroll', function() {
            if (!ticking) {
                window.requestAnimationFrame(function() {
                    const rect = section.getBoundingClientRect();
                    const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
                    const sectionTop = rect.top + scrollTop;
                    const windowHeight = window.innerHeight;
                    
                    // Only apply parallax when section is in viewport
                    if (rect.bottom >= 0 && rect.top <= windowHeight) {
                        const scrolled = scrollTop - sectionTop + windowHeight;
                        const parallaxSpeed = 0.15; // Легкий параллакс
                        const maxMove = 10; // Максимальное смещение в процентах
                        const yPos = Math.max(-maxMove, Math.min(maxMove, -(scrolled * parallaxSpeed * 0.1)));
                        bg.style.transform = `translate3d(0, ${yPos}%, 0)`;
                    }
                    ticking = false;
                });
                ticking = true;
            }
        });
    }

    // Initialize back to top button
    initBackToTop();
    
    // Initialize video background
    initVideoBackground();
    
    // Initialize lazy loading
    initLazyLoading();
    
    // Initialize parallax for schedule consultation section
    initScheduleParallax();

})();







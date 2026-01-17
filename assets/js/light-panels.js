/**
 * Light Panels Landing Page JavaScript
 */

(function() {
    'use strict';

    // Initialize when DOM is ready
    document.addEventListener('DOMContentLoaded', function() {
        initModal();
        initForms();
        initLightToggle();
        initScrollAnimations();
        initFixedCTA();
        initVideoBackground();
    });

    /**
     * Modal functionality
     */
    function initModal() {
        const modal = document.getElementById('consultationModal');
        const openButtons = document.querySelectorAll('[data-target="consultation-form"]');
        const closeButton = document.querySelector('.modal-close');
        const galleryCTAs = document.querySelectorAll('.gallery-cta');

        // Open modal
        openButtons.forEach(btn => {
            btn.addEventListener('click', function(e) {
                e.preventDefault();
                if (modal) {
                    modal.classList.add('active');
                    document.body.style.overflow = 'hidden';
                }
            });
        });

        galleryCTAs.forEach(btn => {
            btn.addEventListener('click', function(e) {
                e.preventDefault();
                if (modal) {
                    modal.classList.add('active');
                    document.body.style.overflow = 'hidden';
                }
            });
        });

        // Close modal
        if (closeButton) {
            closeButton.addEventListener('click', function() {
                if (modal) {
                    modal.classList.remove('active');
                    document.body.style.overflow = '';
                }
            });
        }

        // Close on overlay click
        if (modal) {
            modal.addEventListener('click', function(e) {
                if (e.target === modal) {
                    modal.classList.remove('active');
                    document.body.style.overflow = '';
                }
            });
        }

        // Close on ESC key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape' && modal && modal.classList.contains('active')) {
                modal.classList.remove('active');
                document.body.style.overflow = '';
            }
        });
    }

    /**
     * Form submission
     */
    function initForms() {
        const forms = document.querySelectorAll('.light-panels-form');

        forms.forEach(form => {
            form.addEventListener('submit', function(e) {
                e.preventDefault();

                const formData = new FormData(form);
                const data = {
                    name: formData.get('name'),
                    phone: formData.get('phone'),
                    comment: formData.get('comment') || ''
                };

                // Validate
                if (!data.name || !data.phone) {
                    alert('Будь ласка, заповніть обов\'язкові поля');
                    return;
                }

                // Show loading state
                const submitBtn = form.querySelector('.form-submit-btn');
                const originalText = submitBtn.textContent;
                submitBtn.textContent = 'Відправка...';
                submitBtn.disabled = true;

                // Simulate form submission (replace with actual AJAX call)
                setTimeout(function() {
                    // Success message
                    alert('Дякуємо! Ми зв\'яжемося з вами найближчим часом.');
                    
                    // Reset form
                    form.reset();
                    submitBtn.textContent = originalText;
                    submitBtn.disabled = false;

                    // Close modal if open
                    const modal = document.getElementById('consultationModal');
                    if (modal && modal.classList.contains('active')) {
                        modal.classList.remove('active');
                        document.body.style.overflow = '';
                    }

                    // Here you would send data to server:
                    // fetch('/wp-admin/admin-ajax.php', {
                    //     method: 'POST',
                    //     body: JSON.stringify(data)
                    // })
                }, 1000);
            });
        });
    }

    /**
     * Light toggle functionality
     */
    function initLightToggle() {
        const toggleBtn = document.getElementById('lightToggle');
        if (!toggleBtn) return;

        let isLightOn = true;

        toggleBtn.addEventListener('click', function() {
            isLightOn = !isLightOn;
            
            // Toggle class on body for global light state
            document.body.classList.toggle('light-off', !isLightOn);
            
            // Update gallery images (if you have light/dark versions)
            const galleryImages = document.querySelectorAll('.gallery-image');
            galleryImages.forEach(img => {
                if (isLightOn) {
                    img.src = img.src.replace('-dark', '');
                } else {
                    // Assuming you have dark versions with -dark suffix
                    img.src = img.src.replace('.jpg', '-dark.jpg');
                }
            });

            // Update button text
            const toggleText = toggleBtn.querySelector('.toggle-text');
            if (toggleText) {
                toggleText.textContent = isLightOn ? 'Викл підсвітку' : 'Вкл підсвітку';
            }

            // Update button state
            toggleBtn.classList.toggle('light-off', !isLightOn);
        });
    }

    /**
     * Scroll animations
     */
    function initScrollAnimations() {
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, observerOptions);

        // Observe elements
        const animateElements = document.querySelectorAll('.benefit-card, .gallery-item, .case-item, .testimonial-item');
        animateElements.forEach(el => {
            el.style.opacity = '0';
            el.style.transform = 'translateY(30px)';
            el.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
            observer.observe(el);
        });
    }

    /**
     * Fixed CTA button scroll behavior
     */
    function initFixedCTA() {
        const fixedBtn = document.querySelector('.fixed-cta-btn');
        if (!fixedBtn) return;

        // Show/hide based on scroll position
        let lastScroll = 0;
        window.addEventListener('scroll', function() {
            const currentScroll = window.pageYOffset;
            
            if (currentScroll > 300) {
                fixedBtn.style.opacity = '1';
                fixedBtn.style.visibility = 'visible';
            } else {
                fixedBtn.style.opacity = '0';
                fixedBtn.style.visibility = 'hidden';
            }

            lastScroll = currentScroll;
        });

        // Smooth scroll to form
        fixedBtn.addEventListener('click', function(e) {
            e.preventDefault();
            const formSection = document.getElementById('contact');
            if (formSection) {
                formSection.scrollIntoView({ behavior: 'smooth', block: 'start' });
                // Open modal after scroll
                setTimeout(function() {
                    const modal = document.getElementById('consultationModal');
                    if (modal) {
                        modal.classList.add('active');
                        document.body.style.overflow = 'hidden';
                    }
                }, 500);
            }
        });
    }

    /**
     * Video background handling
     */
    function initVideoBackground() {
        const video = document.querySelector('.hero-video-bg');
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
        }, { threshold: 0.5 });

        videoObserver.observe(video);
    }

    /**
     * Popup form after 30 seconds
     */
    setTimeout(function() {
        const modal = document.getElementById('consultationModal');
        if (modal && !modal.classList.contains('active')) {
            // Only show if user hasn't interacted with forms
            const hasInteracted = sessionStorage.getItem('formInteracted');
            if (!hasInteracted) {
                modal.classList.add('active');
                document.body.style.overflow = 'hidden';
            }
        }
    }, 30000);

    // Track form interactions
    document.addEventListener('click', function(e) {
        if (e.target.closest('.light-panels-form') || e.target.closest('[data-target="consultation-form"]')) {
            sessionStorage.setItem('formInteracted', 'true');
        }
    });

})();


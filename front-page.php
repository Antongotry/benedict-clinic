<?php
/**
 * Template Name: Front Page
 * The homepage template
 */

get_header();
?>

<!-- Hero Section -->
<section class="hero-video-section">
    <div class="hero-video-container">
        <video autoplay muted loop playsinline class="hero-video">
            <source src="https://lightcyan-llama-142433.hostingersite.com/wp-content/uploads/2026/01/6269675_Surgery_Team_1920x1080.mp4" type="video/mp4">
        </video>
        <div class="hero-video-overlay"></div>
    </div>
    <div class="hero-video-content">
        <h1 class="hero-video-title">DR. BENEDICT</h1>
        <p class="hero-video-subtitle">лікар уролог, засновник benedict clinic</p>
        <div class="hero-video-buttons">
            <a href="#contact" class="hero-btn hero-btn-primary">Записатись на консультацію</a>
            <a href="<?php echo home_url('/dr-benedict'); ?>" class="hero-btn hero-btn-secondary">Про лікаря</a>
        </div>
    </div>
</section>

<!-- About Section -->
<section id="about" class="about-section section-padding">
    <div class="about-image-left">
        <img decoding="async" width="540" height="640" src="https://lightcyan-llama-142433.hostingersite.com/wp-content/uploads/2025/12/IMG@2x_result.webp" alt="Dr. Benedict" loading="lazy">
    </div>
    <div class="container">
        <div class="about-content">
            <p class="about-label">ХІРУРГІЯ</p>
            <h2 class="about-name">Виконую складні хірургічні втручання</h2>
            <div class="about-services">
                <div class="about-service-item">
                    <h3 class="about-service-title">Малоінвазивні методи лікування</h3>
                    <p class="about-service-text">Дозволяють досягати високих результатів з мінімальними травмами для пацієнта та коротким періодом відновлення</p>
                </div>
                <div class="about-service-item">
                    <h3 class="about-service-title">Онкодіагностика та онкоурологія</h3>
                    <p class="about-service-text">Спрямовані на раннє виявлення та ефективне лікування ракових захворювань сечостатевої системи</p>
                </div>
                <div class="about-service-item">
                    <h3 class="about-service-title">Пластична реконструктивна хірургія</h3>
                    <p class="about-service-text">Допомагає відновити функції та зовнішній вигляд органів після травм, хвороб чи хірургічних втручань, а також враховує естетичні побажання пацієнта для досягнення гармонійного результату</p>
                </div>
            </div>
            <a href="/procedures" class="about-cta">ПОСЛУГИ <span>|→</span></a>
        </div>
    </div>
    <div class="about-image-right">
        <img decoding="async" width="540" height="640" src="https://lightcyan-llama-142433.hostingersite.com/wp-content/uploads/2026/01/4515_result.webp" alt="Dr. Benedict" loading="lazy">
    </div>
    <div class="about-watermark">UROLOGY</div>
</section>

<!-- Why Choose Me Section -->
<section class="why-choose-section section-padding">
    <div class="container">
        <div class="why-choose-header">
            <h2 class="why-choose-title">Чому варто звернутись до мене?</h2>
        </div>
        <div class="why-choose-grid">
            <div class="why-choose-card">
                <h3 class="why-choose-card-title">Точна діагностика складних випадків</h3>
                <p class="why-choose-card-text">Багаторічний досвід дозволяє швидко визначити проблему та обрати оптимальний план лікування</p>
                <span class="why-choose-card-note">Більше 11 років практики</span>
            </div>
            <div class="why-choose-card">
                <h3 class="why-choose-card-title">Сучасні методи з мінімальним відновленням</h3>
                <p class="why-choose-card-text">Застосовую найсучасніші методи лікування з високою ефективністю та коротким періодом реабілітації</p>
                <span class="why-choose-card-note">Досвід в клініках США та Європи</span>
            </div>
            <div class="why-choose-card">
                <h3 class="why-choose-card-title">Доступ до новітніх протоколів лікування</h3>
                <p class="why-choose-card-text">Використовую актуальні міжнародні стандарти та найновіші дослідження у сфері урології</p>
                <span class="why-choose-card-note">Член Європейської асоціації урологів</span>
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section class="services-section section-padding">
    <div class="container">
        <div class="services-header">
            <p class="services-label">ПОСЛУГИ</p>
            <h2 class="services-title">НАШІ ПОСЛУГИ</h2>
            <p class="services-subtitle">Урологічні проблеми можуть довго залишатися непоміченими — не відкладайте візит, почніть з консультації. Раннє звернення допоможе уникнути ускладнень і забезпечить ефективне лікування</p>
        </div>
        <div class="services-grid">
            <a href="/consultation" class="service-card">
                <div class="service-card-content">
                    <h3 class="service-card-title">Консультація</h3>
                    <p class="service-card-text">Надаю консультації як офлайн, так і онлайн, щоб ви могли отримати кваліфіковану допомогу у зручний для вас спосіб</p>
                    <span class="service-card-arrow">→</span>
                </div>
            </a>
            <a href="/treatment" class="service-card">
                <div class="service-card-content">
                    <h3 class="service-card-title">Лікування</h3>
                    <p class="service-card-text">Лікую захворювання нирок, сечового міхура, простати, органів мошонки та статевого члена, застосовуючи сучасні методи для ефективного усунення проблем і відновлення здоров'я</p>
                    <span class="service-card-arrow">→</span>
                </div>
            </a>
            <a href="/ultrasound" class="service-card">
                <div class="service-card-content">
                    <h3 class="service-card-title">УЗД</h3>
                    <p class="service-card-text">Проводжу УЗД нирок, сечового міхура, доплерографію судин мошонки та статевого члена для виявлення патологій і оцінки стану органів</p>
                    <span class="service-card-arrow">→</span>
                </div>
            </a>
            <a href="/surgery" class="service-card">
                <div class="service-card-content">
                    <h3 class="service-card-title">Оперативні втручання</h3>
                    <p class="service-card-text">Використовую сучасні хірургічні методи для лікування захворювань на різних стадіях, забезпечуючи високу точність, ефективність та мінімальні ризики для пацієнта</p>
                    <span class="service-card-arrow">→</span>
                </div>
            </a>
            <a href="/plastic-urology" class="service-card">
                <div class="service-card-content">
                    <h3 class="service-card-title">Пластична урологія</h3>
                    <p class="service-card-text">Відновлюю функції та естетику органів сечостатевої системи після травм, операцій або вроджених аномалій</p>
                    <span class="service-card-arrow">→</span>
                </div>
            </a>
            <a href="/conservative-treatment" class="service-card">
                <div class="service-card-content">
                    <h3 class="service-card-title">Консервативне лікування</h3>
                    <p class="service-card-text">Включає застосування медикаментів, фізіотерапії та інших методів для ефективного контролю і корекції захворювань без хірургічного втручання</p>
                    <span class="service-card-arrow">→</span>
                </div>
            </a>
        </div>
        <div class="services-cta">
            <a href="/procedures" class="services-cta-button">Детальніше <span>|→</span></a>
        </div>
    </div>
</section>

<!-- Certificates Section -->
<section class="certificates-section section-padding">
    <div class="certificates-background"></div>
    <div class="container">
        <div class="certificates-header">
            <h2 class="certificates-title">Сертифікати</h2>
            <p class="certificates-subtitle">Постійне навчання і вдосконалення — запорука сучасного та безпечного лікування, що дозволяє обирати найефективніші методи для кожного пацієнта</p>
        </div>
        <div class="certificates-slider-wrapper">
            <div class="swiper certificates-swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/certificates/c-1_result-1.webp" alt="Сертифікат 1" loading="lazy" data-lightbox-index="0">
                    </div>
                    <div class="swiper-slide">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/certificates/c-2_result-1.webp" alt="Сертифікат 2" loading="lazy" data-lightbox-index="1">
                    </div>
                    <div class="swiper-slide">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/certificates/c-8_result-1.webp" alt="Сертифікат 7" loading="lazy" data-lightbox-index="2">
                    </div>
                    <div class="swiper-slide">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/certificates/c-5_result-1.webp" alt="Сертифікат 4" loading="lazy" data-lightbox-index="3">
                    </div>
                    <div class="swiper-slide">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/certificates/c-6_result-1.webp" alt="Сертифікат 5" loading="lazy" data-lightbox-index="4">
                    </div>
                    <div class="swiper-slide">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/certificates/c-7_result-1.webp" alt="Сертифікат 6" loading="lazy" data-lightbox-index="5">
                    </div>
                    <div class="swiper-slide">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/certificates/c-3_result-1.webp" alt="Сертифікат 3" loading="lazy" data-lightbox-index="6">
                    </div>
                    <div class="swiper-slide">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/certificates/5.jpg" alt="Сертифікат 8" loading="lazy" data-lightbox-index="7">
                    </div>
                </div>
            </div>
            <div class="certificates-button-wrapper">
                <div class="swiper-button-prev certificates-button-prev"></div>
                <div class="swiper-button-next certificates-button-next"></div>
            </div>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    if (typeof Swiper !== 'undefined') {
        const certificatesSwiper = new Swiper('.certificates-swiper', {
            slidesPerView: 1,
            spaceBetween: 40,
            centeredSlides: true,
            loop: false,
            initialSlide: 0,
            autoHeight: false,
            navigation: {
                nextEl: '.certificates-button-next',
                prevEl: '.certificates-button-prev',
            },
            breakpoints: {
                768: {
                    slidesPerView: 2,
                    spaceBetween: 40,
                    centeredSlides: true,
                },
                1024: {
                    slidesPerView: 3,
                    spaceBetween: 40,
                    centeredSlides: false,
                },
            },
            on: {
                init: function() {
                    // Убеждаемся что первый слайд виден при загрузке
                    this.slideTo(0, 0);
                }
            }
        });
        
    }
    
    // Certificate Lightbox Functionality
    initCertificateLightbox();
});

function initCertificateLightbox() {
    // Собираем изображения в правильном порядке по data-lightbox-index атрибуту
    const allImages = Array.from(document.querySelectorAll('.certificates-swiper .swiper-slide img[data-lightbox-index]'));
    
    if (allImages.length === 0) return;
    
    // Сортируем изображения по data-lightbox-index и собираем уникальные src
    const imageSources = [];
    const seenSrcs = new Set();
    
    allImages
        .sort((a, b) => {
            const indexA = parseInt(a.getAttribute('data-lightbox-index')) || 0;
            const indexB = parseInt(b.getAttribute('data-lightbox-index')) || 0;
            return indexA - indexB;
        })
        .forEach(img => {
            if (img.src && !seenSrcs.has(img.src)) {
                imageSources.push(img.src);
                seenSrcs.add(img.src);
            }
        });
    
    if (imageSources.length === 0) return;
    
    const certificateImages = document.querySelectorAll('.certificates-swiper .swiper-slide img');
    if (!certificateImages.length) return;
    
    // Create lightbox container
    const lightbox = document.createElement('div');
    lightbox.className = 'certificate-lightbox';
    lightbox.innerHTML = `
        <div class="certificate-lightbox-content">
            <button class="certificate-lightbox-close" aria-label="Close"></button>
            <img src="" alt="Certificate">
        </div>
        <button class="certificate-lightbox-nav certificate-lightbox-prev" aria-label="Previous">←</button>
        <button class="certificate-lightbox-nav certificate-lightbox-next" aria-label="Next">→</button>
    `;
    document.body.appendChild(lightbox);
    
    const lightboxImg = lightbox.querySelector('.certificate-lightbox-content img');
    const closeBtn = lightbox.querySelector('.certificate-lightbox-close');
    const prevBtn = lightbox.querySelector('.certificate-lightbox-prev');
    const nextBtn = lightbox.querySelector('.certificate-lightbox-next');
    let currentIndex = 0;
    
    // Function to load and show image in lightbox
    function loadImage(src) {
        // Hide current image
        lightboxImg.classList.remove('loaded');
        lightboxImg.style.opacity = '0';
        
        // Create new image to preload
        const newImg = new Image();
        newImg.onload = function() {
            // Set src only after image is loaded
            lightboxImg.src = src;
            // Show image after a small delay to ensure smooth transition
            setTimeout(function() {
                lightboxImg.classList.add('loaded');
                lightboxImg.style.opacity = '1';
            }, 50);
        };
        newImg.onerror = function() {
            // If image fails to load, still show it (fallback)
            lightboxImg.src = src;
            lightboxImg.classList.add('loaded');
            lightboxImg.style.opacity = '1';
        };
        newImg.src = src;
    }
    
    // Open lightbox on certificate click
    certificateImages.forEach(img => {
        img.addEventListener('click', function(e) {
            e.preventDefault();
            const clickedSrc = this.src;
            currentIndex = imageSources.findIndex(src => src === clickedSrc);
            if (currentIndex === -1) currentIndex = 0;
            lightbox.classList.add('active');
            document.body.style.overflow = 'hidden';
            loadImage(clickedSrc);
        });
    });
    
    // Close lightbox
    function closeLightbox() {
        lightbox.classList.remove('active');
        document.body.style.overflow = '';
        lightboxImg.classList.remove('loaded');
        lightboxImg.style.opacity = '0';
    }
    
    closeBtn.addEventListener('click', closeLightbox);
    
    lightbox.addEventListener('click', function(e) {
        if (e.target === lightbox) {
            closeLightbox();
        }
    });
    
    // Navigate prev/next
    function showPrev() {
        currentIndex = (currentIndex - 1 + imageSources.length) % imageSources.length;
        loadImage(imageSources[currentIndex]);
    }
    
    function showNext() {
        currentIndex = (currentIndex + 1) % imageSources.length;
        loadImage(imageSources[currentIndex]);
    }
    
    prevBtn.addEventListener('click', showPrev);
    nextBtn.addEventListener('click', showNext);
    
    // Keyboard navigation
    document.addEventListener('keydown', function(e) {
        if (!lightbox.classList.contains('active')) return;
        if (e.key === 'Escape') closeLightbox();
        if (e.key === 'ArrowLeft') showPrev();
        if (e.key === 'ArrowRight') showNext();
    });
}
</script>

<!-- Useful Materials Section -->
<section class="materials-section section-padding">
    <div class="container">
        <div class="materials-header">
            <h2 class="materials-title">Корисні матеріали</h2>
            <p class="materials-subtitle">Дізнайтеся більше про операції, захворювання, обстеження та методи лікування в наших статтях</p>
        </div>
        
        <div class="materials-filters">
            <button class="materials-filter active" data-filter="all">Всі статті</button>
            <button class="materials-filter" data-filter="diseases">Захворювання</button>
            <button class="materials-filter" data-filter="treatment">Лікування</button>
            <button class="materials-filter" data-filter="diagnostics">Обстеження</button>
            <button class="materials-filter" data-filter="operations">Операції</button>
        </div>
        
        <div class="materials-grid">
            <article class="material-card" data-category="diagnostics">
                <a href="#" class="material-card-link">
                    <div class="material-card-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/materials-b-7.webp" alt="Стаття 1" loading="lazy">
                    </div>
                    <div class="material-card-content">
                        <span class="material-card-category">Обстеження</span>
                        <h3 class="material-card-title">УЗД органів сечостатевої системи</h3>
                    </div>
                </a>
            </article>
            
            <article class="material-card" data-category="diseases">
                <a href="#" class="material-card-link">
                    <div class="material-card-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/materials-b-6.webp" alt="Стаття 2" loading="lazy">
                    </div>
                    <div class="material-card-content">
                        <span class="material-card-category">Захворювання</span>
                        <h3 class="material-card-title">Захворювання нирок: симптоми та профілактика</h3>
                    </div>
                </a>
            </article>
            
            <article class="material-card" data-category="operations">
                <a href="#" class="material-card-link">
                    <div class="material-card-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/materials-b-8.webp" alt="Стаття 3" loading="lazy">
                    </div>
                    <div class="material-card-content">
                        <span class="material-card-category">Операції</span>
                        <h3 class="material-card-title">Малоінвазивні хірургічні втручання</h3>
                    </div>
                </a>
            </article>
            
            <article class="material-card" data-category="treatment">
                <a href="#" class="material-card-link">
                    <div class="material-card-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/materials-b-5.webp" alt="Стаття 4" loading="lazy">
                    </div>
                    <div class="material-card-content">
                        <span class="material-card-category">Лікування</span>
                        <h3 class="material-card-title">Сучасні методи лікування простатиту</h3>
                    </div>
                </a>
            </article>
            
            <article class="material-card" data-category="diseases">
                <a href="#" class="material-card-link">
                    <div class="material-card-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/materials-b-3.webp" alt="Стаття 5" loading="lazy">
                    </div>
                    <div class="material-card-content">
                        <span class="material-card-category">Захворювання</span>
                        <h3 class="material-card-title">Чоловіче безпліддя: причини та діагностика</h3>
                    </div>
                </a>
            </article>
            
            <article class="material-card" data-category="diagnostics">
                <a href="#" class="material-card-link">
                    <div class="material-card-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/materials-b-2.webp" alt="Стаття 6" loading="lazy">
                    </div>
                    <div class="material-card-content">
                        <span class="material-card-category">Обстеження</span>
                        <h3 class="material-card-title">Доплерографія судин: коли потрібна</h3>
                    </div>
                </a>
            </article>
            
            <article class="material-card" data-category="operations">
                <a href="#" class="material-card-link">
                    <div class="material-card-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/materials-b-1.webp" alt="Стаття 7" loading="lazy">
                    </div>
                    <div class="material-card-content">
                        <span class="material-card-category">Операції</span>
                        <h3 class="material-card-title">Реконструктивна урологія</h3>
                    </div>
                </a>
            </article>
            
            <article class="material-card" data-category="treatment">
                <a href="#" class="material-card-link">
                    <div class="material-card-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/materials-b-8.webp" alt="Стаття 8" loading="lazy">
                    </div>
                    <div class="material-card-content">
                        <span class="material-card-category">Лікування</span>
                        <h3 class="material-card-title">Консервативна терапія в урології</h3>
                    </div>
                </a>
            </article>
        </div>
    </div>
</section>

<script>
// Materials Filter Functionality
document.addEventListener('DOMContentLoaded', function() {
    const filterButtons = document.querySelectorAll('.materials-filter');
    const materialCards = document.querySelectorAll('.material-card');
    
    filterButtons.forEach(button => {
        button.addEventListener('click', function() {
            // Remove active class from all buttons
            filterButtons.forEach(btn => btn.classList.remove('active'));
            // Add active class to clicked button
            this.classList.add('active');
            
            const filter = this.getAttribute('data-filter');
            
            materialCards.forEach((card, index) => {
                const category = card.getAttribute('data-category');
                
                if (filter === 'all' || category === filter) {
                    // Show card with staggered animation
                    card.style.transitionDelay = (index * 0.05) + 's';
                    card.classList.remove('hidden');
                    card.classList.add('visible');
                } else {
                    // Hide card
                    card.style.transitionDelay = '0s';
                    card.classList.add('hidden');
                    card.classList.remove('visible');
                }
            });
        });
    });
    
    // Initialize all cards as visible
    materialCards.forEach(card => {
        card.classList.add('visible');
    });
});

// Statistics Counter Animation
document.addEventListener('DOMContentLoaded', function() {
    const counters = document.querySelectorAll('.statistic-number[data-target]');
    
    function animateCounter(counter) {
        const target = parseInt(counter.getAttribute('data-target'));
        const duration = 2000;
        const increment = target / (duration / 16);
        let current = 0;
        
        const updateCounter = () => {
            current += increment;
            if (current < target) {
                if (target >= 1000) {
                    counter.textContent = Math.floor(current / 1000) + 'к+';
                } else {
                    counter.textContent = Math.floor(current) + '+';
                }
                requestAnimationFrame(updateCounter);
            } else {
                if (target >= 1000) {
                    counter.textContent = Math.floor(target / 1000) + 'к+';
                } else {
                    counter.textContent = target + '+';
                }
            }
        };
        
        updateCounter();
    }
    
    const observerOptions = {
        threshold: 0.5,
        rootMargin: '0px'
    };
    
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting && !entry.target.classList.contains('animated')) {
                entry.target.classList.add('animated');
                animateCounter(entry.target);
            }
        });
    }, observerOptions);
    
    counters.forEach(counter => {
        observer.observe(counter);
    });
});

// FAQ Accordion
document.addEventListener('DOMContentLoaded', function() {
    const faqQuestions = document.querySelectorAll('.faq-question');
    
    faqQuestions.forEach(question => {
        question.addEventListener('click', function() {
            const item = this.parentElement;
            const isExpanded = this.getAttribute('aria-expanded') === 'true';
            
            // Close all other items
            faqQuestions.forEach(q => {
                if (q !== this) {
                    q.setAttribute('aria-expanded', 'false');
                    q.parentElement.classList.remove('active');
                }
            });
            
            // Toggle current item
            if (isExpanded) {
                this.setAttribute('aria-expanded', 'false');
                item.classList.remove('active');
            } else {
                this.setAttribute('aria-expanded', 'true');
                item.classList.add('active');
            }
        });
    });
    
    // FAQ Image Parallax
    const faqImage = document.querySelector('.faq-image img');
    const faqSection = document.querySelector('.faq-section');
    
    if (faqImage && faqSection) {
        let ticking = false;
        
        function updateParallax() {
            const rect = faqSection.getBoundingClientRect();
            const scrollProgress = (rect.top + rect.height / 2 - window.innerHeight / 2) / window.innerHeight;
            const parallaxValue = scrollProgress * 50;
            
            faqImage.style.transform = `translateY(${parallaxValue}px) translateZ(0)`;
            ticking = false;
        }
        
        function requestTick() {
            if (!ticking) {
                requestAnimationFrame(updateParallax);
                ticking = true;
            }
        }
        
        window.addEventListener('scroll', requestTick, { passive: true });
        updateParallax();
    }
});
</script>

<!-- Benefits Section (using Surgery Center structure) -->
<section class="surgery-center-section section-padding">
    <div class="surgery-center-image">
        <span class="surgery-decorative-text surgery-text-1">ОПЕРАТИВНІ</span>
        <img decoding="async" width="800" height="1000" src="https://lightcyan-llama-142433.hostingersite.com/wp-content/uploads/2025/12/photo-90-копія-1_result.webp" alt="Operative Surgery" loading="lazy">
        <span class="surgery-decorative-text surgery-text-2">ВТРУЧАННЯ</span>
    </div>
    <div class="surgery-center-content">
        <p class="surgery-center-label">ХІРУРГІЧНЕ ЛІКУВАННЯ</p>
        <h2 class="surgery-center-title">ОПЕРАТИВНІ<br>ВТРУЧАННЯ</h2>
        <div class="surgery-center-text">
            <p>Відновлення функцій та зовнішнього вигляду органів після травм та хвороб.</p>
            <p>Сучасні хірургічні методи з мінімальними ризиками.</p>
        </div>
        <a href="/gallery" class="surgery-center-cta">ГАЛЕРЕЯ <span>|→</span></a>
    </div>
</section>

<!-- Statistics Counters Section -->
<section class="statistics-section section-padding">
    <div class="statistics-background"></div>
    <div class="container">
        <div class="statistics-grid">
            <div class="statistic-item">
                <div class="statistic-number" data-target="25000">0</div>
                <div class="statistic-label">Проведених<br>успішних операцій</div>
            </div>
            <div class="statistic-item">
                <div class="statistic-number" data-target="10000">0</div>
                <div class="statistic-label">Щасливих та<br>вдячних пацієнтів</div>
            </div>
            <div class="statistic-item">
                <div class="statistic-number">24/7</div>
                <div class="statistic-label">Цілодобова<br>оперативна урологія</div>
            </div>
            <div class="statistic-item">
                <div class="statistic-number" data-target="14">0</div>
                <div class="statistic-label">Років хірургічного<br>досвіду</div>
            </div>
        </div>
    </div>
</section>

<!-- Pricing Section -->
<section class="pricing-section section-padding">
    <div class="container">
        <div class="pricing-header">
            <h2 class="pricing-title">Ціни</h2>
            <p class="pricing-subtitle">Вартість послуг залежить від обсягу обстеження та індивідуального плану лікування. Завітайте на консультацію, щоб дізнатись, що саме потрібно саме вам</p>
        </div>
        <div class="pricing-grid">
            <article class="pricing-card">
                <div class="pricing-card-header">
                    <h3 class="pricing-card-title">Консультація</h3>
                    <p class="pricing-card-subtitle">онлайн</p>
                </div>
                <div class="pricing-card-price-wrapper">
                    <div class="pricing-card-price">від 1190 грн</div>
                </div>
                <p class="pricing-card-desc">зручний формат для отримання кваліфікованої медичної допомоги в будь-який час</p>
                <button class="pricing-card-button" data-pricing-open data-service="Консультація" data-format="онлайн" data-price="від 1190 грн" data-desc="Зручний формат для отримання кваліфікованої медичної допомоги в будь-який час.">Записатись</button>
            </article>
            <article class="pricing-card">
                <div class="pricing-card-header">
                    <h3 class="pricing-card-title">Профілактичний огляд</h3>
                    <p class="pricing-card-subtitle">виключно офлайн</p>
                </div>
                <div class="pricing-card-price-wrapper">
                    <div class="pricing-card-price">від 1400 грн</div>
                </div>
                <p class="pricing-card-desc">рекомендується проходити раз на рік з метою передбачення захворювань на ранніх стадіях</p>
                <button class="pricing-card-button" data-pricing-open data-service="Профілактичний огляд" data-format="виключно офлайн" data-price="від 1400 грн" data-desc="Рекомендується проходити раз на рік з метою передбачення захворювань на ранніх стадіях.">Записатись</button>
            </article>
            <article class="pricing-card">
                <div class="pricing-card-header">
                    <h3 class="pricing-card-title">Оперативне втручання</h3>
                    <p class="pricing-card-subtitle">малоінвазивне та хірургічне</p>
                </div>
                <div class="pricing-card-price-wrapper">
                    <div class="pricing-card-price">від 20000 грн</div>
                </div>
                <p class="pricing-card-desc">комплексний підхід до відновлення здоров'я під час захворювань</p>
                <button class="pricing-card-button" data-pricing-open data-service="Оперативне втручання" data-format="малоінвазивне та хірургічне" data-price="від 20000 грн" data-desc="Комплексний підхід до відновлення здоров'я під час захворювань.">Записатись</button>
            </article>
        </div>
    </div>
</section>

<div class="pricing-modal" id="pricing-modal" aria-hidden="true">
    <div class="pricing-modal-backdrop" data-pricing-close></div>
    <div class="pricing-modal-content" role="dialog" aria-modal="true" aria-labelledby="pricing-modal-title">
        <button class="pricing-modal-close" type="button" aria-label="Закрити" data-pricing-close></button>
        <div class="pricing-modal-header">
            <p class="pricing-modal-eyebrow">Запис на послугу</p>
            <h3 class="pricing-modal-title" id="pricing-modal-title"></h3>
            <p class="pricing-modal-price" id="pricing-modal-price"></p>
            <p class="pricing-modal-desc" id="pricing-modal-desc"></p>
        </div>
        <form class="pricing-modal-form" id="pricing-modal-form">
            <input type="hidden" name="service" id="pricing-modal-service">
            <label class="pricing-modal-field">
                <span>Імʼя</span>
                <input type="text" name="name" required>
            </label>
            <label class="pricing-modal-field">
                <span>Номер телефону</span>
                <input type="tel" name="phone" required>
            </label>
            <label class="pricing-modal-field">
                <span>Email (необовʼязково)</span>
                <input type="email" name="email">
            </label>
            <label class="pricing-modal-checkbox">
                <input type="checkbox" name="privacy" required>
                <span>Погоджуюсь з <a href="/privacy-policy">політикою конфіденційності</a></span>
            </label>
            <button class="pricing-modal-submit btn-primary" type="submit">Надіслати</button>
        </form>
        <div class="pricing-modal-success" id="pricing-modal-success" hidden>
            <h4>Дякуємо за довіру!</h4>
            <p>Ваша заявка вже у нас. Ми звʼяжемось з вами найближчим часом, щоб підтвердити запис та відповісти на всі запитання.</p>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const modal = document.getElementById('pricing-modal');
    const modalTitle = document.getElementById('pricing-modal-title');
    const modalPrice = document.getElementById('pricing-modal-price');
    const modalDesc = document.getElementById('pricing-modal-desc');
    const modalService = document.getElementById('pricing-modal-service');
    const modalForm = document.getElementById('pricing-modal-form');
    const modalSuccess = document.getElementById('pricing-modal-success');

    function openModal(trigger) {
        modalTitle.textContent = trigger.dataset.service;
        modalPrice.textContent = `${trigger.dataset.price} • ${trigger.dataset.format}`;
        modalDesc.textContent = trigger.dataset.desc;
        modalService.value = trigger.dataset.service;
        modalForm.reset();
        modalForm.hidden = false;
        modalSuccess.hidden = true;
        modal.classList.add('active');
        modal.setAttribute('aria-hidden', 'false');
        document.body.style.overflow = 'hidden';
    }

    function closeModal() {
        modal.classList.remove('active');
        modal.setAttribute('aria-hidden', 'true');
        document.body.style.overflow = '';
    }

    document.querySelectorAll('[data-pricing-open]').forEach(button => {
        button.addEventListener('click', () => openModal(button));
    });

    document.querySelectorAll('[data-pricing-close]').forEach(element => {
        element.addEventListener('click', closeModal);
    });

    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && modal.classList.contains('active')) {
            closeModal();
        }
    });

    modalForm.addEventListener('submit', function(e) {
        e.preventDefault();
        modalForm.hidden = true;
        modalSuccess.hidden = false;
    });
});

// Testimonials Swiper
document.addEventListener('DOMContentLoaded', function() {
    if (typeof Swiper !== 'undefined') {
        new Swiper('.testimonials-swiper', {
            slidesPerView: 1,
            spaceBetween: 30,
            loop: true,
            navigation: {
                nextEl: '.testimonials-button-next',
                prevEl: '.testimonials-button-prev',
            },
            breakpoints: {
                768: {
                    slidesPerView: 2,
                    spaceBetween: 30,
                },
                1024: {
                    slidesPerView: 3,
                    spaceBetween: 30,
                }
            }
        });
    }
});

// Contacts Form (frontend-only)
document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('contacts-form');
    const success = document.getElementById('contacts-success');
    if (!form || !success) return;

    form.addEventListener('submit', function(e) {
        e.preventDefault();
        form.hidden = true;
        success.hidden = false;
    });
});

// Consultation Modal
document.addEventListener('DOMContentLoaded', function() {
    const modal = document.getElementById('consultation-modal');
    const modalForm = document.getElementById('consultation-modal-form');
    const modalSuccess = document.getElementById('consultation-modal-success');
    const openBtns = document.querySelectorAll('[data-consultation-open]');
    const closeBtns = document.querySelectorAll('[data-consultation-close]');
    
    function openModal() {
        modal.classList.add('active');
        modal.setAttribute('aria-hidden', 'false');
        document.body.style.overflow = 'hidden';
        modalForm.reset();
        modalForm.hidden = false;
        modalSuccess.hidden = true;
    }
    
    function closeModal() {
        modal.classList.remove('active');
        modal.setAttribute('aria-hidden', 'true');
        document.body.style.overflow = '';
    }
    
    openBtns.forEach(btn => {
        btn.addEventListener('click', openModal);
    });
    
    closeBtns.forEach(btn => {
        btn.addEventListener('click', closeModal);
    });
    
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && modal.classList.contains('active')) {
            closeModal();
        }
    });
    
    modalForm.addEventListener('submit', function(e) {
        e.preventDefault();
        modalForm.hidden = true;
        modalSuccess.hidden = false;
    });
});
</script>

<!-- YouTube Section -->
<section class="youtube-section section-padding">
    <div class="youtube-background"></div>
    <div class="container">
        <div class="youtube-content">
            <p class="youtube-text">Підписуйтесь на Youtube та дізнайтесь більше<br>корисної інформації про урологічне здоровʼя</p>
            <a href="https://www.youtube.com/@dr_benedikt" target="_blank" rel="noopener noreferrer" class="youtube-play-button">
                <svg width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="30" cy="30" r="30" fill="#FF0000"/>
                    <path d="M24 18L42 30L24 42V18Z" fill="white"/>
                </svg>
            </a>
        </div>
    </div>
</section>

<!-- Instagram Section -->
<?php if (get_option('rosenberg_instagram_enabled', '1') === '1'): ?>
<section class="instagram-section section-padding">
    <div class="container">
        <div class="instagram-header">
            <p class="instagram-label">INSTAGRAM</p>
            <h2 class="instagram-title"><?php echo esc_html(get_option('rosenberg_instagram_title', 'Слідкуйте за нами в Instagram')); ?></h2>
            <?php 
            $subtitle = get_option('rosenberg_instagram_subtitle', 'Дізнавайтесь останні новини, корисні поради та зворотний зв\'язок від наших пацієнтів');
            if (!empty($subtitle)):
            ?>
            <p class="instagram-subtitle"><?php echo esc_html($subtitle); ?></p>
            <?php endif; ?>
        </div>
        <?php
        $instagram_posts = rosenberg_get_instagram_posts(get_option('rosenberg_instagram_posts_count', 6));
        if (!empty($instagram_posts)):
            $columns_desktop = get_option('rosenberg_instagram_columns_desktop', '3');
            $columns_tablet = get_option('rosenberg_instagram_columns_tablet', '2');
            $columns_mobile = get_option('rosenberg_instagram_columns_mobile', '2');
        ?>
        <div class="instagram-feed" 
             data-columns-desktop="<?php echo esc_attr($columns_desktop); ?>"
             data-columns-tablet="<?php echo esc_attr($columns_tablet); ?>"
             data-columns-mobile="<?php echo esc_attr($columns_mobile); ?>"
             style="--columns-desktop: <?php echo esc_attr($columns_desktop); ?>; --columns-tablet: <?php echo esc_attr($columns_tablet); ?>; --columns-mobile: <?php echo esc_attr($columns_mobile); ?>;">
            <?php foreach ($instagram_posts as $post): ?>
                <a href="<?php echo esc_url($post['permalink']); ?>" target="_blank" rel="noopener noreferrer" class="instagram-post-card">
                    <div class="instagram-post-image-wrapper">
                        <img src="<?php echo esc_url($post['thumbnail_url']); ?>" alt="<?php echo esc_attr($post['caption']); ?>" loading="lazy" class="instagram-post-image" />
                        <?php if ($post['media_type'] === 'VIDEO'): ?>
                            <div class="instagram-post-video-overlay">
                                <svg width="32" height="32" viewBox="0 0 24 24" fill="white">
                                    <path d="M8 5v14l11-7z"/>
                                </svg>
                            </div>
                        <?php endif; ?>
                        <div class="instagram-post-hover-overlay">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2">
                                <rect x="3" y="3" width="18" height="18" rx="2" ry="2"/>
                                <line x1="8" y1="12" x2="16" y2="12"/>
                                <line x1="12" y1="8" x2="12" y2="16"/>
                            </svg>
                        </div>
                    </div>
                    <?php if (!empty($post['caption'])): ?>
                        <div class="instagram-post-caption">
                            <p><?php echo esc_html(wp_trim_words($post['caption'], 15)); ?></p>
                        </div>
                    <?php endif; ?>
                </a>
            <?php endforeach; ?>
        </div>
        <?php 
        $instagram_username = get_option('rosenberg_instagram_username', '');
        $button_text = get_option('rosenberg_instagram_button_text', 'Підписатись в Instagram');
        if (!empty($instagram_username)):
        ?>
        <div class="instagram-cta">
            <a href="https://www.instagram.com/<?php echo esc_attr($instagram_username); ?>" target="_blank" rel="noopener noreferrer" class="instagram-cta-button">
                <?php echo esc_html($button_text); ?> <span>→</span>
            </a>
        </div>
        <?php endif; ?>
        <?php else: ?>
        <div class="instagram-feed-empty">
            <p><?php _e('Instagram пости будуть відображені після налаштування в адмін-панелі WordPress.', 'rosenberg-clinic'); ?></p>
        </div>
        <?php endif; ?>
    </div>
</section>
<?php endif; ?>

<!-- FAQ Section -->
<section class="faq-section section-padding">
    <div class="faq-image">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/faq-image.webp" alt="FAQ" loading="lazy">
    </div>
    <div class="faq-content">
        <h2 class="faq-title">Відповіді на ваші основні питання<br>щодо здоров'я та лікування</h2>
        <div class="faq-accordion">
            <div class="faq-item">
                <button class="faq-question" aria-expanded="false">
                    <span>Чи займаєтесь Ви лікуванням безпліддя?</span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>Так, ми займаємось діагностикою та лікуванням безпліддя. Використовуємо сучасні методи для виявлення причин та ефективного лікування, допомагаючи досягти бажаного результату.</p>
                </div>
            </div>
            <div class="faq-item">
                <button class="faq-question" aria-expanded="false">
                    <span>Лікуєте інфекції, які передаються статевим шляхом?</span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>Так, ми займаємось діагностикою та лікуванням безпліддя. Використовуємо сучасні методи для виявлення причин та ефективного лікування, допомагаючи досягти бажаного результату.</p>
                </div>
            </div>
            <div class="faq-item">
                <button class="faq-question" aria-expanded="false">
                    <span>Запальні процеси в нирках і сечовому міхурі</span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>Так, ми займаємось діагностикою та лікуванням безпліддя. Використовуємо сучасні методи для виявлення причин та ефективного лікування, допомагаючи досягти бажаного результату.</p>
                </div>
            </div>
            <div class="faq-item">
                <button class="faq-question" aria-expanded="false">
                    <span>Як підготуватись до прийому уролога?</span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>Так, ми займаємось діагностикою та лікуванням безпліддя. Використовуємо сучасні методи для виявлення причин та ефективного лікування, допомагаючи досягти бажаного результату.</p>
                </div>
            </div>
            <div class="faq-item">
                <button class="faq-question" aria-expanded="false">
                    <span>Як підготуватись до урологічної операції?</span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>Так, ми займаємось діагностикою та лікуванням безпліддя. Використовуємо сучасні методи для виявлення причин та ефективного лікування, допомагаючи досягти бажаного результату.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Schedule Consultation Section -->
<section id="contact" class="schedule-consultation-section">
    <div class="schedule-consultation-bg"></div>
    <div class="schedule-consultation-content">
        <h2 class="schedule-consultation-title">Записатись на прийом</h2>
        <p class="schedule-consultation-desc">Не відкладайте турботу про своє здоровʼя, записуйтесь на консультацію просто зараз, отримайте персональний план лікування та висококваліфікаційну медичну допомогу</p>
        <button class="schedule-consultation-cta" data-consultation-open>ЗВ'ЯЗАТИСЯ З НАМИ</button>
    </div>
</section>

<!-- Testimonials Section -->
<section class="testimonials-section section-padding">
    <div class="container">
        <div class="testimonials-header">
            <h2 class="testimonials-title">Відгуки пацієнтів</h2>
            <p class="testimonials-subtitle">Дізнайтесь, що говорять наші клієнти про якість медичних послуг та результати лікування</p>
        </div>
        <div class="testimonials-slider-wrapper">
            <div class="swiper testimonials-swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <article class="testimonial-card">
                            <div class="testimonial-header">
                                <div class="testimonial-avatar">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/testimonials-avatars.webp" alt="Олег">
                                </div>
                                <div class="testimonial-author">
                                    <h4 class="testimonial-name">Олег</h4>
                                    <span class="testimonial-age">35 років</span>
                                </div>
                                <div class="testimonial-social">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M11.944 0A12 12 0 0 0 0 12a12 12 0 0 0 12 12 12 12 0 0 0 12-12A12 12 0 0 0 12 0a12 12 0 0 0-.056 0zm4.962 7.224c.1-.002.321.023.465.14a.506.506 0 0 1 .171.325c.016.093.036.306.02.472-.18 1.898-.962 6.502-1.36 8.627-.168.9-.499 1.201-.82 1.23-.696.065-1.225-.46-1.9-.902-1.056-.693-1.653-1.124-2.678-1.8-1.185-.78-.417-1.21.258-1.91.177-.184 3.247-2.977 3.307-3.23.007-.032.014-.15-.056-.212s-.174-.041-.249-.024c-.106.024-1.793 1.14-5.061 3.345-.48.33-.913.49-1.302.48-.428-.008-1.252-.241-1.865-.44-.752-.245-1.349-.374-1.297-.789.027-.216.325-.437.893-.663 3.498-1.524 5.83-2.529 6.998-3.014 3.332-1.386 4.025-1.627 4.476-1.635z"/></svg>
                                </div>
                            </div>
                            <blockquote class="testimonial-text">
                                "Була сильна біль при сечовипусканні, думав що то цистит але виявилось запалення уретри. Лікар все пояснив простими словами, назначив аналізи і терапію. Пройшов курс антибіотиків, зараз почуваюсь добре. Сподобалось що не треба було стояти в чергах"
                            </blockquote>
                        </article>
                    </div>
                    <div class="swiper-slide">
                        <article class="testimonial-card">
                            <div class="testimonial-header">
                                <div class="testimonial-avatar">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/testimonials-avatars.webp" alt="Олег">
                                </div>
                                <div class="testimonial-author">
                                    <h4 class="testimonial-name">Олег</h4>
                                    <span class="testimonial-age">28 років</span>
                                </div>
                                <div class="testimonial-social">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                                </div>
                            </div>
                            <blockquote class="testimonial-text">
                                "В мене з'явились виділення і свербіж, думав що то грибок. В клініці виявили хламідії. Сказали що добре що прийшов не затягнув. Пролікувався, аналізи чисті. Тепер слідкую за захистом"
                            </blockquote>
                        </article>
                    </div>
                    <div class="swiper-slide">
                        <article class="testimonial-card">
                            <div class="testimonial-header">
                                <div class="testimonial-avatar">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/testimonials-avatars.webp" alt="Ірина">
                                </div>
                                <div class="testimonial-author">
                                    <h4 class="testimonial-name">Ірина</h4>
                                    <span class="testimonial-age">34 років</span>
                                </div>
                                <div class="testimonial-social">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                                </div>
                            </div>
                            <blockquote class="testimonial-text">
                                "Після пологів почались проблеми з нетриманням сечі, незручно було навіть розповідати. Лікар в клініці дуже уважний, сказав що це часто буває і є лікування. Пройшла курс вправ і процедур, стало краще. Дякую за підтримку"
                            </blockquote>
                        </article>
                    </div>
                    <div class="swiper-slide">
                        <article class="testimonial-card">
                            <div class="testimonial-header">
                                <div class="testimonial-avatar">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/testimonials-avatars.webp" alt="Андрій">
                                </div>
                                <div class="testimonial-author">
                                    <h4 class="testimonial-name">Андрій</h4>
                                    <span class="testimonial-age">42 років</span>
                                </div>
                                <div class="testimonial-social">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M11.944 0A12 12 0 0 0 0 12a12 12 0 0 0 12 12 12 12 0 0 0 12-12A12 12 0 0 0 12 0a12 12 0 0 0-.056 0zm4.962 7.224c.1-.002.321.023.465.14a.506.506 0 0 1 .171.325c.016.093.036.306.02.472-.18 1.898-.962 6.502-1.36 8.627-.168.9-.499 1.201-.82 1.23-.696.065-1.225-.46-1.9-.902-1.056-.693-1.653-1.124-2.678-1.8-1.185-.78-.417-1.21.258-1.91.177-.184 3.247-2.977 3.307-3.23.007-.032.014-.15-.056-.212s-.174-.041-.249-.024c-.106.024-1.793 1.14-5.061 3.345-.48.33-.913.49-1.302.48-.428-.008-1.252-.241-1.865-.44-.752-.245-1.349-.374-1.297-.789.027-.216.325-.437.893-.663 3.498-1.524 5.83-2.529 6.998-3.014 3.332-1.386 4.025-1.627 4.476-1.635z"/></svg>
                                </div>
                            </div>
                            <blockquote class="testimonial-text">
                                "Звернувся з проблемою простатиту. Лікар провів детальне обстеження, призначив комплексне лікування. Через місяць симптоми повністю зникли. Дуже вдячний за професійний підхід та індивідуальну увагу"
                            </blockquote>
                        </article>
                    </div>
                    <div class="swiper-slide">
                        <article class="testimonial-card">
                            <div class="testimonial-header">
                                <div class="testimonial-avatar">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/testimonials-avatars.webp" alt="Микола">
                                </div>
                                <div class="testimonial-author">
                                    <h4 class="testimonial-name">Микола</h4>
                                    <span class="testimonial-age">51 рік</span>
                                </div>
                                <div class="testimonial-social">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                                </div>
                            </div>
                            <blockquote class="testimonial-text">
                                "Робив операцію з видалення каменів у нирках. Все пройшло швидко і без ускладнень. Лікарі пояснили кожен етап, підтримували після операції. Відновився за тиждень. Рекомендую цю клініку всім"
                            </blockquote>
                        </article>
                    </div>
                    <div class="swiper-slide">
                        <article class="testimonial-card">
                            <div class="testimonial-header">
                                <div class="testimonial-avatar">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/testimonials-avatars.webp" alt="Сергій">
                                </div>
                                <div class="testimonial-author">
                                    <h4 class="testimonial-name">Сергій</h4>
                                    <span class="testimonial-age">38 років</span>
                                </div>
                                <div class="testimonial-social">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                                </div>
                            </div>
                            <blockquote class="testimonial-text">
                                "Довго соромився йти до уролога, але проблеми з потенцією змусили. Лікар поставився з розумінням, провів обстеження, виявив причину. Після лікування все налагодилось. Шкодую що не прийшов раніше"
                            </blockquote>
                        </article>
                    </div>
                    <div class="swiper-slide">
                        <article class="testimonial-card">
                            <div class="testimonial-header">
                                <div class="testimonial-avatar">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/testimonials-avatars.webp" alt="Василь">
                                </div>
                                <div class="testimonial-author">
                                    <h4 class="testimonial-name">Василь</h4>
                                    <span class="testimonial-age">45 років</span>
                                </div>
                                <div class="testimonial-social">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M11.944 0A12 12 0 0 0 0 12a12 12 0 0 0 12 12 12 12 0 0 0 12-12A12 12 0 0 0 12 0a12 12 0 0 0-.056 0zm4.962 7.224c.1-.002.321.023.465.14a.506.506 0 0 1 .171.325c.016.093.036.306.02.472-.18 1.898-.962 6.502-1.36 8.627-.168.9-.499 1.201-.82 1.23-.696.065-1.225-.46-1.9-.902-1.056-.693-1.653-1.124-2.678-1.8-1.185-.78-.417-1.21.258-1.91.177-.184 3.247-2.977 3.307-3.23.007-.032.014-.15-.056-.212s-.174-.041-.249-.024c-.106.024-1.793 1.14-5.061 3.345-.48.33-.913.49-1.302.48-.428-.008-1.252-.241-1.865-.44-.752-.245-1.349-.374-1.297-.789.027-.216.325-.437.893-.663 3.498-1.524 5.83-2.529 6.998-3.014 3.332-1.386 4.025-1.627 4.476-1.635z"/></svg>
                                </div>
                            </div>
                            <blockquote class="testimonial-text">
                                "Прийшов на профілактичний огляд, виявили початкову стадію аденоми. Вчасно почали лікування, тепер все під контролем. Дякую за уважність та професіоналізм. Тепер ходжу на огляди регулярно"
                            </blockquote>
                        </article>
                    </div>
                </div>
            </div>
            <div class="testimonials-navigation">
                <div class="swiper-button-prev testimonials-button-prev"></div>
                <div class="swiper-button-next testimonials-button-next"></div>
            </div>
        </div>
    </div>
</section>

<!-- Contacts Section -->
<section class="contacts-section section-padding">
    <div class="container">
        <div class="contacts-header">
            <h2 class="contacts-title">Контакти</h2>
            <p class="contacts-subtitle">Залишились запитання або хочете записатися на прийом?<br>Зв'яжіться з нами зручним для вас способом</p>
        </div>
        <div class="contacts-grid">
            <div class="contacts-info">
                <div class="contacts-item">
                    <div class="contacts-item-header">
                        <span class="contacts-icon" aria-hidden="true">
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 21c0 0-8-6.5-8-12a8 8 0 1116 0c0 5.5-8 12-8 12z" stroke="currentColor" stroke-width="1.3"/>
                                <circle cx="12" cy="9" r="2" fill="currentColor"/>
                                <path d="M12 21v-4" stroke="currentColor" stroke-width="1.3" stroke-dasharray="2 2"/>
                            </svg>
                        </span>
                        <p class="contacts-label">Адреса</p>
                    </div>
                    <p class="contacts-value">Київ, вул. Олеся Бердника, 1Д</p>
                </div>
                <div class="contacts-item">
                    <div class="contacts-item-header">
                        <span class="contacts-icon" aria-hidden="true">
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M3 5.5C3 14.06 9.94 21 18.5 21c.386 0 .763-.014 1.135-.042" stroke="currentColor" stroke-width="1.3" stroke-linecap="round"/>
                                <path d="M3 5.5V10h4.5" stroke="currentColor" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"/>
                                <circle cx="17" cy="7" r="4" stroke="currentColor" stroke-width="1.3"/>
                                <circle cx="17" cy="7" r="1.5" fill="currentColor"/>
                            </svg>
                        </span>
                        <p class="contacts-label">Телефон</p>
                    </div>
                    <a class="contacts-value contacts-link" href="tel:+380951344029">+38 095 13 44 029</a>
                </div>
                <div class="contacts-item">
                    <div class="contacts-item-header">
                        <span class="contacts-icon" aria-hidden="true">
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="2" y="5" width="20" height="14" rx="2" stroke="currentColor" stroke-width="1.3"/>
                                <path d="M2 8l10 6 10-6" stroke="currentColor" stroke-width="1.3"/>
                                <circle cx="12" cy="12" r="2" fill="currentColor" opacity="0.3"/>
                                <path d="M17 3l2 2M7 3L5 5" stroke="currentColor" stroke-width="1.3" stroke-linecap="round"/>
                            </svg>
                        </span>
                        <p class="contacts-label">Електронна пошта</p>
                    </div>
                    <a class="contacts-value contacts-link" href="mailto:dokbenedikt@gmail.com">dokbenedikt@gmail.com</a>
                </div>
            </div>
            <div class="contacts-form-wrapper">
                <form class="contacts-form" id="contacts-form">
                    <label class="contacts-field">
                        <span>ПІБ</span>
                        <input type="text" name="name" required placeholder="Введіть ваше повне ім'я">
                    </label>
                    <label class="contacts-field">
                        <span>Телефон</span>
                        <input type="tel" name="phone" required placeholder="+380 XX XXX XX XX">
                    </label>
                    <label class="contacts-field">
                        <span>Email</span>
                        <input type="email" name="email" placeholder="example@email.com">
                    </label>
                    <label class="contacts-field">
                        <span>Додаткова інформація</span>
                        <textarea name="message" rows="4" placeholder="Опишіть, що вас цікавить"></textarea>
                    </label>
                    <label class="contacts-checkbox">
                        <input type="checkbox" name="privacy" required>
                        <span>Я погоджуюсь із <a href="/privacy-policy">політикою конфіденційності</a></span>
                    </label>
                    <button class="contacts-submit btn-primary" type="submit">Надіслати</button>
                </form>
                <div class="contacts-success" id="contacts-success" hidden>
                    <h4>Дякуємо за звернення!</h4>
                    <p>Ваш запит надіслано. Ми звʼяжемось з вами найближчим часом.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Consultation Modal -->
<div class="consultation-modal" id="consultation-modal" aria-hidden="true">
    <div class="consultation-modal-backdrop" data-consultation-close></div>
    <div class="consultation-modal-content" role="dialog" aria-modal="true" aria-labelledby="consultation-modal-title">
        <button class="consultation-modal-close" type="button" aria-label="Закрити" data-consultation-close></button>
        <div class="consultation-modal-header">
            <h3 class="consultation-modal-title" id="consultation-modal-title">Записатись на прийом</h3>
        </div>
        <form class="consultation-modal-form" id="consultation-modal-form">
            <label class="consultation-modal-field">
                <span>ПІБ</span>
                <input type="text" name="name" required placeholder="Введіть ваше повне ім'я">
            </label>
            <label class="consultation-modal-field">
                <span>Телефон</span>
                <input type="tel" name="phone" required placeholder="+380 XX XXX XX XX">
            </label>
            <button class="consultation-modal-submit btn-primary" type="submit">Зателефонувати мені</button>
        </form>
        <div class="consultation-modal-success" id="consultation-modal-success" hidden>
            <h4>Дякуємо!</h4>
            <p>Ваша заявка прийнята. Ми звʼяжемось з вами найближчим часом для підтвердження запису.</p>
        </div>
    </div>
</div>

<!-- Diagnostics Section -->
<section class="meet-surgeons-section section-padding diagnostics-section">
    <div class="meet-surgeons-content">
        <h2 class="meet-surgeons-title">ОБСТЕЖЕННЯ<br>ТА ЛІКУВАННЯ</h2>
        <div class="diagnostics-content">
            <div class="diagnostics-text">
                <p>Чоловіче здоров'я починається з правильного способу життя та регулярних чекапів. Спочатку — діагностика, потім — діалог та прийняття рішень.</p>
                <p>Мінімум непотрібних втручань — максимум доказової медицини. Якщо проблему можна вирішити корекцією звичок — ми починаємо з цього.</p>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();

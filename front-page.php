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
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/certificates/c-3_result-1.webp" alt="Сертифікат 3" loading="lazy" data-lightbox-index="2">
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
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/certificates/c-8_result-1.webp" alt="Сертифікат 7" loading="lazy" data-lightbox-index="6">
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

<!-- Schedule Consultation Section -->
<section id="contact" class="schedule-consultation-section">
    <div class="schedule-consultation-bg"></div>
    <div class="schedule-consultation-content">
        <h2 class="schedule-consultation-title">ЗАПИСАТИСЬ НА КОНСУЛЬТАЦІЮ</h2>
        <a href="/contact" class="schedule-consultation-cta">ЗВ'ЯЗАТИСЯ З НАМИ</a>
    </div>
</section>

<?php
get_footer();

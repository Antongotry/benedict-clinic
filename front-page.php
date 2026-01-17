<?php
/**
 * Template Name: Front Page
 * The homepage template
 */

get_header();
?>

<!-- Hero Section - Video Background -->
<section class="hero-video-section">
    <div class="hero-video-container">
        <video autoplay muted loop playsinline class="hero-video">
            <source src="<?php echo get_template_directory_uri(); ?>/assets/videos/light-panels-hero.mp4" type="video/mp4">
        </video>
        <div class="hero-video-overlay"></div>
    </div>
    <div class="hero-video-content">
        <h1 class="hero-video-title">СВІТЛОВІ ПАНЕЛІ З ПІДСВІТКОЮ</h1>
        <p class="hero-video-subtitle">Стиль, який змінює атмосферу простору</p>
    </div>
</section>

<!-- About Section -->
<section id="about" class="about-section section-padding">
    <div class="about-image-left">
        <img decoding="async" width="540" height="640" src="<?php echo get_template_directory_uri(); ?>/assets/images/light-panels/kitchen.jpg" alt="Світлові панелі в кухні" loading="lazy">
    </div>
    <div class="container">
        <div class="about-content">
            <p class="about-label">СУЧАСНЕ РІШЕННЯ ДЛЯ ВАШОГО ІНТЕР'ЄРУ</p>
            <h2 class="about-name">СВІТЛОВІ ПАНЕЛІ</h2>
            <p class="about-description">Світлові панелі з підсвіткою — це унікальне дизайнерське та функціональне рішення для дому, офісу, салонів та комерційних просторів. Завдяки вбудованій LED-підсвітці панелі створюють м'яке, рівномірне освітлення, яке підкреслює фактуру матеріалу та створює затишну атмосферу.</p>
            <a href="#contact" class="about-cta">ОТРИМАТИ КОНСУЛЬТАЦІЮ <span>|→</span></a>
        </div>
    </div>
    <div class="about-image-right">
        <img decoding="async" width="540" height="640" src="<?php echo get_template_directory_uri(); ?>/assets/images/light-panels/living.jpg" alt="Світлові панелі у вітальні" loading="lazy">
    </div>
    <div class="about-watermark">LIGHT PANELS</div>
</section>

<!-- Benefits Section (using Surgery Center structure) -->
<section class="surgery-center-section section-padding">
    <div class="surgery-center-image">
        <span class="surgery-decorative-text surgery-text-1">ПЕРЕВАГИ</span>
        <img decoding="async" width="800" height="1000" src="<?php echo get_template_directory_uri(); ?>/assets/images/light-panels/benefits.jpg" alt="Переваги світлових панелей" loading="lazy">
        <span class="surgery-decorative-text surgery-text-2">ПРОДУКТУ</span>
    </div>
    <div class="surgery-center-content">
        <p class="surgery-center-label">ЯК ЦЕ ПРАЦЮЄ</p>
        <h2 class="surgery-center-title">ПЕРЕВАГИ<br>СВІТЛОВИХ ПАНЕЛЕЙ</h2>
        <div class="surgery-center-text">
            <p><strong>Власне виробництво</strong> — повний цикл від розробки до монтажу в Україні.</p>
            <p><strong>Шоурум</strong> — можливість побачити продукт перед покупкою.</p>
            <p><strong>Монтаж за 1 день</strong> — швидке впровадження без зайвих клопотів.</p>
            <p><strong>Гарантія 2 роки</strong> — надійність та довговічність продукту.</p>
            <p><strong>Стійкість до ударів</strong> — міцні матеріали та надійна конструкція.</p>
        </div>
        <a href="#gallery" class="surgery-center-cta">ГАЛЕРЕЯ ЗАСТОСУВАННЯ <span>|→</span></a>
    </div>
</section>

<!-- Gallery Section (using Meet The Surgeons structure) -->
<section id="gallery" class="meet-surgeons-section">
    <div class="meet-surgeons-content">
        <h2 class="meet-surgeons-title">ГАЛЕРЕЯ<br>ЗАСТОСУВАННЯ</h2>
        <div class="surgeons-grid">
            <div class="surgeon-item">
                <h3 class="surgeon-name">ПАНЕЛІ ДЛЯ КУХНІ</h3>
                <p class="surgeon-specialty">Створення затишної атмосфери та функціонального освітлення робочої зони</p>
            </div>
            <div class="surgeon-item">
                <h3 class="surgeon-name">ПАНЕЛІ ДЛЯ ВАННОЇ</h3>
                <p class="surgeon-specialty">Елегантність та релаксуюча атмосфера для вашого відпочинку</p>
            </div>
            <div class="surgeon-item">
                <h3 class="surgeon-name">ПАНЕЛІ ДЛЯ ВІТАЛЬНІ</h3>
                <p class="surgeon-specialty">Сучасний дизайн та затишок для вашої родини</p>
            </div>
            <div class="surgeon-item">
                <h3 class="surgeon-name">ПАНЕЛІ ДЛЯ ОФІСУ</h3>
                <p class="surgeon-specialty">Сучасний корпоративний інтер'єр з динамічним освітленням</p>
            </div>
        </div>
    </div>
</section>

<!-- Cases Section (using Concierge Services structure) -->
<section class="concierge-services-section section-padding">
    <div class="container">
        <div class="concierge-header">
            <p class="concierge-label">РЕАЛІЗОВАНІ ПРОЕКТИ</p>
            <h2 class="concierge-title">НАШІ<br>КЕЙСИ</h2>
        </div>
        <div class="concierge-grid">
            <div class="concierge-item-wrapper">
                <div class="concierge-item concierge-item-default">
                    <div class="concierge-item-bg">
                        <img decoding="async" src="<?php echo get_template_directory_uri(); ?>/assets/images/light-panels/case1-before.jpg" alt="Кейс 1 - До" loading="lazy">
                    </div>
                    <div class="concierge-item-content">
                        <h3 class="concierge-item-title">КУХНЯ, КИЇВ</h3>
                        <p class="concierge-item-description">Створення сучасного освітлення з акцентом на зону робочого столу</p>
                    </div>
                </div>
                <div class="concierge-item concierge-item-hover">
                    <div class="concierge-item-content-hover">
                        <h3 class="concierge-item-title">КУХНЯ, КИЇВ</h3>
                        <p class="concierge-item-description">Затишна атмосфера та функціональне освітлення робочої зони</p>
                    </div>
                    <div class="concierge-item-bg-hover">
                        <img decoding="async" src="<?php echo get_template_directory_uri(); ?>/assets/images/light-panels/case1-after.jpg" alt="Кейс 1 - Після" loading="lazy">
                    </div>
                </div>
            </div>
            <div class="concierge-item-wrapper">
                <div class="concierge-item concierge-item-default">
                    <div class="concierge-item-bg">
                        <img decoding="async" src="<?php echo get_template_directory_uri(); ?>/assets/images/light-panels/case2-before.jpg" alt="Кейс 2 - До" loading="lazy">
                    </div>
                    <div class="concierge-item-content">
                        <h3 class="concierge-item-title">ВАННА, ЛЬВІВ</h3>
                        <p class="concierge-item-description">Додавання елегантності та створення релаксуючої атмосфери</p>
                    </div>
                </div>
                <div class="concierge-item concierge-item-hover">
                    <div class="concierge-item-content-hover">
                        <h3 class="concierge-item-title">ВАННА, ЛЬВІВ</h3>
                        <p class="concierge-item-description">Престижний вигляд та комфортне освітлення</p>
                    </div>
                    <div class="concierge-item-bg-hover">
                        <img decoding="async" src="<?php echo get_template_directory_uri(); ?>/assets/images/light-panels/case2-after.jpg" alt="Кейс 2 - Після" loading="lazy">
                    </div>
                </div>
            </div>
            <div class="concierge-item-wrapper">
                <div class="concierge-item concierge-item-default">
                    <div class="concierge-item-bg">
                        <img decoding="async" src="<?php echo get_template_directory_uri(); ?>/assets/images/light-panels/case3-before.jpg" alt="Кейс 3 - До" loading="lazy">
                    </div>
                    <div class="concierge-item-content">
                        <h3 class="concierge-item-title">ОФІС, ОДЕСА</h3>
                        <p class="concierge-item-description">Створення сучасного корпоративного інтер'єру</p>
                    </div>
                </div>
                <div class="concierge-item concierge-item-hover">
                    <div class="concierge-item-content-hover">
                        <h3 class="concierge-item-title">ОФІС, ОДЕСА</h3>
                        <p class="concierge-item-description">Сучасний офіс з динамічним освітленням</p>
                    </div>
                    <div class="concierge-item-bg-hover">
                        <img decoding="async" src="<?php echo get_template_directory_uri(); ?>/assets/images/light-panels/case3-after.jpg" alt="Кейс 3 - Після" loading="lazy">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Schedule Consultation Section -->
<section id="contact" class="schedule-consultation-section">
    <div class="schedule-consultation-bg"></div>
    <div class="schedule-consultation-content">
        <h2 class="schedule-consultation-title">ОТРИМАТИ КОНСУЛЬТАЦІЮ</h2>
        <a href="#contact-form" class="schedule-consultation-cta">ЗВ'ЯЗАТИСЯ З НАМИ</a>
    </div>
</section>

<!-- Contact Form Section (using Instagram Feed structure) -->
<section id="contact-form" class="instagram-feed-section">
    <div class="instagram-feed-content">
        <h2 class="instagram-feed-title">ЗАЛИШТЕ<br>ЗАЯВКУ</h2>
        <div style="max-width: 600px; margin: 0 auto; padding: 40px;">
            <?php echo do_shortcode('[contact-form-7 id="1" title="Contact Form"]'); ?>
        </div>
    </div>
</section>

<?php
get_footer();

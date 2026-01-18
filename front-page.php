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
            <p class="why-choose-subtitle">Більше 11 років досвіду, хірургічний досвід в США та Європі. Член Європейської асоціації урологів та Міжнародного товариства реконструктивної урології</p>
        </div>
        <div class="why-choose-grid">
            <div class="why-choose-card">
                <h3 class="why-choose-card-title">Більше 11 років досвіду</h3>
                <p class="why-choose-card-text">Багаторічна практика дозволяє точно діагностувати та ефективно лікувати навіть найскладніші випадки урологічних захворювань</p>
            </div>
            <div class="why-choose-card">
                <h3 class="why-choose-card-title">Хірургічний досвід в США та Європі</h3>
                <p class="why-choose-card-text">Мій хірургічний досвід в США та Європі дозволяє застосовувати найсучасніші методи лікування та забезпечувати високий рівень ефективності</p>
            </div>
            <div class="why-choose-card">
                <h3 class="why-choose-card-title">Член Європейської асоціації урологів</h3>
                <p class="why-choose-card-text">Членство в провідних міжнародних організаціях забезпечує доступ до новітніх досліджень та протоколів лікування світового рівня</p>
            </div>
        </div>
    </div>
</section>

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

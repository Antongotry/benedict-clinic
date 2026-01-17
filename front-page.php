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
        <div class="hero-video-overlay"></div>
    </div>
    <div class="hero-video-content">
        <h1 class="hero-video-title">BENEDICT CLINIC</h1>
        <p class="hero-video-subtitle">Урологічна клініка нового рівня</p>
    </div>
</section>

<!-- About Section -->
<section id="about" class="about-section section-padding">
    <div class="about-image-left">
        <img decoding="async" width="540" height="640" src="https://lightcyan-llama-142433.hostingersite.com/wp-content/uploads/2025/12/dr-rosenberg-portrait.jpg" alt="Dr. Benedict" loading="lazy">
    </div>
    <div class="container">
        <div class="about-content">
            <p class="about-label">ПРО КЛІНІКУ</p>
            <h2 class="about-name">BENEDICT CLINIC</h2>
            <p class="about-description">Benedict Clinic — це урологічна клініка, яка забезпечує комплексний підхід до чоловічого здоров'я. Наша команда надає високопрофесійну медичну допомогу, використовуючи сучасні методи діагностики та лікування урологічних захворювань.</p>
            <a href="/dr-benedict" class="about-cta">ПРО ЛІКАРЯ <span>|→</span></a>
        </div>
    </div>
    <div class="about-image-right">
        <img decoding="async" width="540" height="640" src="https://lightcyan-llama-142433.hostingersite.com/wp-content/uploads/2025/12/surgery-center.jpg" alt="Surgery Center" loading="lazy">
    </div>
    <div class="about-watermark">UROLOGY</div>
</section>

<!-- Benefits Section (using Surgery Center structure) -->
<section class="surgery-center-section section-padding">
    <div class="surgery-center-image">
        <span class="surgery-decorative-text surgery-text-1">ПЕРЕВАГИ</span>
        <img decoding="async" width="800" height="1000" src="https://lightcyan-llama-142433.hostingersite.com/wp-content/uploads/2025/12/luxury-clinic-interior.jpg" alt="Clinic Interior" loading="lazy">
        <span class="surgery-decorative-text surgery-text-2">КЛІНІКИ</span>
    </div>
    <div class="surgery-center-content">
        <p class="surgery-center-label">НАШІ ПЕРЕВАГИ</p>
        <h2 class="surgery-center-title">ЧОМУ ОБИРАЮТЬ<br>BENEDICT CLINIC</h2>
        <div class="surgery-center-text">
            <p><strong>Досвідчений лікар</strong> — лікар-уролог із досвідом у хірургічній та малоінвазивній урології.</p>
            <p><strong>Сучасне обладнання</strong> — використання передових технологій діагностики та лікування.</p>
            <p><strong>Індивідуальний підхід</strong> — персональний план лікування для кожного пацієнта.</p>
            <p><strong>Доказова медицина</strong> — мінімум непотрібних втручань, максимум ефективності.</p>
            <p><strong>Комфортна атмосфера</strong> — турбота про ваш психологічний комфорт.</p>
        </div>
        <a href="/gallery" class="surgery-center-cta">ГАЛЕРЕЯ <span>|→</span></a>
    </div>
</section>

<!-- Gallery Section (using Meet The Surgeons structure) -->
<section id="gallery" class="meet-surgeons-section">
    <div class="meet-surgeons-content">
        <h2 class="meet-surgeons-title">НАПРЯМКИ<br>ЛІКУВАННЯ</h2>
        <div class="surgeons-grid">
            <div class="surgeon-item">
                <h3 class="surgeon-name">ОБСТЕЖЕННЯ ТА ДІАГНОСТИКА</h3>
                <p class="surgeon-specialty">Комплексне обстеження для виявлення причин захворювань</p>
            </div>
            <div class="surgeon-item">
                <h3 class="surgeon-name">ОПЕРАТИВНІ ВТРУЧАННЯ</h3>
                <p class="surgeon-specialty">Хірургічне лікування з використанням малоінвазивних технологій</p>
            </div>
            <div class="surgeon-item">
                <h3 class="surgeon-name">ПЛАСТИЧНА РЕКОНСТРУКТИВНА ХІРУРГІЯ</h3>
                <p class="surgeon-specialty">Відновлення функцій та естетичного вигляду органів</p>
            </div>
            <div class="surgeon-item">
                <h3 class="surgeon-name">КОНСЕРВАТИВНЕ ЛІКУВАННЯ</h3>
                <p class="surgeon-specialty">Терапевтичні методи без хірургічних втручань</p>
            </div>
        </div>
    </div>
</section>

<!-- Cases Section (using Concierge Services structure) -->
<section class="concierge-services-section section-padding">
    <div class="container">
        <div class="concierge-header">
            <p class="concierge-label">РЕАЛІЗОВАНІ КЕЙСИ</p>
            <h2 class="concierge-title">НАШІ<br>РЕЗУЛЬТАТИ</h2>
        </div>
        <div class="concierge-grid">
            <div class="concierge-item-wrapper">
                <div class="concierge-item concierge-item-default">
                    <div class="concierge-item-bg">
                        <img decoding="async" src="https://lightcyan-llama-142433.hostingersite.com/wp-content/uploads/2025/12/gallery/facelift-1-before.jpg" alt="Кейс 1 - До" loading="lazy">
                    </div>
                    <div class="concierge-item-content">
                        <h3 class="concierge-item-title">РЕКОНСТРУКТИВНА ХІРУРГІЯ</h3>
                        <p class="concierge-item-description">Повне відновлення функцій та зовнішнього вигляду</p>
                    </div>
                </div>
                <div class="concierge-item concierge-item-hover">
                    <div class="concierge-item-content-hover">
                        <h3 class="concierge-item-title">РЕЗУЛЬТАТ</h3>
                        <p class="concierge-item-description">Успішне відновлення з повним поверненням функціональності</p>
                    </div>
                    <div class="concierge-item-bg-hover">
                        <img decoding="async" src="https://lightcyan-llama-142433.hostingersite.com/wp-content/uploads/2025/12/gallery/facelift-1-after.jpg" alt="Кейс 1 - Після" loading="lazy">
                    </div>
                </div>
            </div>
            <div class="concierge-item-wrapper">
                <div class="concierge-item concierge-item-default">
                    <div class="concierge-item-bg">
                        <img decoding="async" src="https://lightcyan-llama-142433.hostingersite.com/wp-content/uploads/2025/12/gallery/rhinoplasty-1-before.jpg" alt="Кейс 2 - До" loading="lazy">
                    </div>
                    <div class="concierge-item-content">
                        <h3 class="concierge-item-title">МАЛОІНВАЗИВНІ ТЕХНОЛОГІЇ</h3>
                        <p class="concierge-item-description">Мінімальне втручання при максимальній ефективності</p>
                    </div>
                </div>
                <div class="concierge-item concierge-item-hover">
                    <div class="concierge-item-content-hover">
                        <h3 class="concierge-item-title">РЕЗУЛЬТАТ</h3>
                        <p class="concierge-item-description">Відмінний результат з мінімальним періодом відновлення</p>
                    </div>
                    <div class="concierge-item-bg-hover">
                        <img decoding="async" src="https://lightcyan-llama-142433.hostingersite.com/wp-content/uploads/2025/12/gallery/rhinoplasty-1-after.jpg" alt="Кейс 2 - Після" loading="lazy">
                    </div>
                </div>
            </div>
            <div class="concierge-item-wrapper">
                <div class="concierge-item concierge-item-default">
                    <div class="concierge-item-bg">
                        <img decoding="async" src="https://lightcyan-llama-142433.hostingersite.com/wp-content/uploads/2025/12/gallery/browlift-1-before.jpg" alt="Кейс 3 - До" loading="lazy">
                    </div>
                    <div class="concierge-item-content">
                        <h3 class="concierge-item-title">КОМПЛЕКСНЕ ЛІКУВАННЯ</h3>
                        <p class="concierge-item-description">Індивідуальний підхід до кожного пацієнта</p>
                    </div>
                </div>
                <div class="concierge-item concierge-item-hover">
                    <div class="concierge-item-content-hover">
                        <h3 class="concierge-item-title">РЕЗУЛЬТАТ</h3>
                        <p class="concierge-item-description">Повне відновлення здоров'я та якості життя</p>
                    </div>
                    <div class="concierge-item-bg-hover">
                        <img decoding="async" src="https://lightcyan-llama-142433.hostingersite.com/wp-content/uploads/2025/12/gallery/browlift-1-after.jpg" alt="Кейс 3 - Після" loading="lazy">
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
        <h2 class="schedule-consultation-title">ЗАПИСАТИСЬ НА КОНСУЛЬТАЦІЮ</h2>
        <a href="/contact" class="schedule-consultation-cta">ЗВ'ЯЗАТИСЯ З НАМИ</a>
    </div>
</section>

<?php
get_footer();

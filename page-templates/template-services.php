<?php
/**
 * Template Name: Services Page
 */

get_header();
?>

<!-- Hero Section -->
<section class="services-page-hero">
    <div class="services-page-hero-bg">
        <!-- Video for desktop -->
        <video class="services-hero-video" autoplay muted loop playsinline>
            <source src="https://lightcyan-llama-142433.hostingersite.com/wp-content/uploads/2026/01/GettyImages-1403279841.mov" type="video/quicktime">
            <source src="https://lightcyan-llama-142433.hostingersite.com/wp-content/uploads/2026/01/GettyImages-1403279841.mov" type="video/mp4">
        </video>
        <!-- Image for mobile -->
        <img class="services-hero-img" src="https://lightcyan-llama-142433.hostingersite.com/wp-content/uploads/2025/12/photo-90-копія-1_result.webp" alt="Послуги">
    </div>
    <div class="services-page-hero-overlay"></div>
    <div class="services-page-hero-content">
        <p class="services-page-hero-label">DR. BENEDICT UROLOGY</p>
        <h1 class="services-page-hero-title">ПОСЛУГИ</h1>
        <p class="services-page-hero-subtitle">Комплексна урологічна допомога з індивідуальним підходом до кожного пацієнта</p>
    </div>
</section>

<!-- Services Intro -->
<section class="services-page-intro">
    <div class="services-page-intro-inner">
        <div class="services-page-intro-content">
            <h2>Чому обирають нас?</h2>
            <p>Урологічні проблеми можуть довго залишатися непоміченими — не відкладайте візит, почніть з консультації. Раннє звернення допоможе уникнути ускладнень і забезпечить ефективне лікування.</p>
            <p>Я використовую сучасні методи діагностики та лікування, що дозволяє досягати найкращих результатів з мінімальними ризиками для пацієнта.</p>
        </div>
        <div class="services-page-intro-stats">
            <div class="services-stat">
                <span class="services-stat-number">14+</span>
                <span class="services-stat-label">років досвіду</span>
            </div>
            <div class="services-stat">
                <span class="services-stat-number">10к+</span>
                <span class="services-stat-label">пацієнтів</span>
            </div>
            <div class="services-stat">
                <span class="services-stat-number">24/7</span>
                <span class="services-stat-label">оперативна допомога</span>
            </div>
        </div>
    </div>
</section>

<!-- Main Services Grid -->
<section class="services-page-main">
    <div class="services-page-main-inner">
        <div class="services-page-grid">
            <!-- Консультація -->
            <div class="services-page-card">
                <div class="services-page-card-icon">
                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                        <path d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"/>
                    </svg>
                </div>
                <div class="services-page-card-content">
                    <h3><a href="<?php echo home_url('/consultation'); ?>">Консультація</a></h3>
                    <p>Надаю консультації як офлайн, так і онлайн, щоб ви могли отримати кваліфіковану допомогу у зручний для вас спосіб. Детальний аналіз вашої ситуації та розробка індивідуального плану лікування.</p>
                    <ul class="services-page-card-features">
                        <li>Первинна консультація</li>
                        <li>Онлайн консультація</li>
                        <li>Повторна консультація</li>
                        <li>Консультація з результатами аналізів</li>
                    </ul>
                    <div class="services-page-card-footer">
                        <span class="services-page-card-price">від 1190 грн</span>
                        <a href="<?php echo home_url('/consultation'); ?>" class="services-page-card-btn-link">Детальніше</a>
                        <a href="#" class="services-page-card-btn" data-consultation-open data-service="Консультація">Записатися</a>
                    </div>
                </div>
            </div>

            <!-- Лікування -->
            <div class="services-page-card">
                <div class="services-page-card-icon">
                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                        <path d="M19.5 12.572l-7.5 7.428-7.5-7.428A5 5 0 1112 6.006a5 5 0 017.5 6.566z"/>
                    </svg>
                </div>
                <div class="services-page-card-content">
                    <h3><a href="<?php echo home_url('/treatment'); ?>">Лікування</a></h3>
                    <p>Лікую захворювання нирок, сечового міхура, простати, органів мошонки та статевого члена, застосовуючи сучасні методи для ефективного усунення проблем і відновлення здоров'я.</p>
                    <ul class="services-page-card-features">
                        <li>Захворювання простати</li>
                        <li>Захворювання нирок</li>
                        <li>Інфекції сечовивідних шляхів</li>
                        <li>Чоловіче безпліддя</li>
                    </ul>
                    <div class="services-page-card-footer">
                        <span class="services-page-card-price">індивідуально</span>
                        <a href="<?php echo home_url('/treatment'); ?>" class="services-page-card-btn-link">Детальніше</a>
                        <a href="#" class="services-page-card-btn" data-consultation-open data-service="Лікування">Записатися</a>
                    </div>
                </div>
            </div>

            <!-- УЗД -->
            <div class="services-page-card">
                <div class="services-page-card-icon">
                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                        <path d="M9 17V7m0 10a2 2 0 01-2 2H5a2 2 0 01-2-2V7a2 2 0 012-2h2a2 2 0 012 2m0 10a2 2 0 002 2h2a2 2 0 002-2m0 0V7a2 2 0 00-2-2h-2a2 2 0 00-2 2m6 10h2a2 2 0 002-2v-4m0 0V7a2 2 0 00-2-2h-2"/>
                    </svg>
                </div>
                <div class="services-page-card-content">
                    <h3><a href="<?php echo home_url('/ultrasound'); ?>">УЗД діагностика</a></h3>
                    <p>Проводжу УЗД нирок, сечового міхура, доплерографію судин мошонки та статевого члена для виявлення патологій і оцінки стану органів.</p>
                    <ul class="services-page-card-features">
                        <li>УЗД нирок</li>
                        <li>УЗД сечового міхура</li>
                        <li>УЗД простати</li>
                        <li>Доплерографія судин</li>
                    </ul>
                    <div class="services-page-card-footer">
                        <span class="services-page-card-price">від 800 грн</span>
                        <a href="<?php echo home_url('/ultrasound'); ?>" class="services-page-card-btn-link">Детальніше</a>
                        <a href="#" class="services-page-card-btn" data-consultation-open data-service="УЗД діагностика">Записатися</a>
                    </div>
                </div>
            </div>

            <!-- Оперативні втручання -->
            <div class="services-page-card">
                <div class="services-page-card-icon">
                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                        <path d="M12 14l9-5-9-5-9 5 9 5z"/>
                        <path d="M12 14l6.16-3.422A12.083 12.083 0 0121 12.75c0 5.385-4.365 9.75-9.75 9.75a9.75 9.75 0 01-9-6"/>
                    </svg>
                </div>
                <div class="services-page-card-content">
                    <h3><a href="<?php echo home_url('/surgery'); ?>">Оперативні втручання</a></h3>
                    <p>Використовую сучасні хірургічні методи для лікування захворювань на різних стадіях, забезпечуючи високу точність, ефективність та мінімальні ризики для пацієнта.</p>
                    <ul class="services-page-card-features">
                        <li>Малоінвазивна хірургія</li>
                        <li>Лапароскопічні операції</li>
                        <li>Ендоскопічні втручання</li>
                        <li>Відкриті операції</li>
                    </ul>
                    <div class="services-page-card-footer">
                        <span class="services-page-card-price">від 20000 грн</span>
                        <a href="<?php echo home_url('/surgery'); ?>" class="services-page-card-btn-link">Детальніше</a>
                        <a href="#" class="services-page-card-btn" data-consultation-open data-service="Оперативні втручання">Записатися</a>
                    </div>
                </div>
            </div>

            <!-- Пластична урологія -->
            <div class="services-page-card">
                <div class="services-page-card-icon">
                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                        <path d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                    </svg>
                </div>
                <div class="services-page-card-content">
                    <h3><a href="<?php echo home_url('/plastic-urology'); ?>">Пластична урологія</a></h3>
                    <p>Відновлюю функції та естетику органів сечостатевої системи після травм, операцій або вроджених аномалій. Враховую естетичні побажання пацієнта.</p>
                    <ul class="services-page-card-features">
                        <li>Реконструктивна хірургія</li>
                        <li>Корекція вроджених аномалій</li>
                        <li>Відновлення після травм</li>
                        <li>Естетична урологія</li>
                    </ul>
                    <div class="services-page-card-footer">
                        <span class="services-page-card-price">індивідуально</span>
                        <a href="<?php echo home_url('/plastic-urology'); ?>" class="services-page-card-btn-link">Детальніше</a>
                        <a href="#" class="services-page-card-btn" data-consultation-open data-service="Пластична урологія">Записатися</a>
                    </div>
                </div>
            </div>

            <!-- Консервативне лікування -->
            <div class="services-page-card">
                <div class="services-page-card-icon">
                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                        <path d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                    </svg>
                </div>
                <div class="services-page-card-content">
                    <h3><a href="<?php echo home_url('/conservative-treatment'); ?>">Консервативне лікування</a></h3>
                    <p>Включає застосування медикаментів, фізіотерапії та інших методів для ефективного контролю і корекції захворювань без хірургічного втручання.</p>
                    <ul class="services-page-card-features">
                        <li>Медикаментозна терапія</li>
                        <li>Фізіотерапія</li>
                        <li>Профілактичні програми</li>
                        <li>Реабілітація</li>
                    </ul>
                    <div class="services-page-card-footer">
                        <span class="services-page-card-price">індивідуально</span>
                        <a href="<?php echo home_url('/conservative-treatment'); ?>" class="services-page-card-btn-link">Детальніше</a>
                        <a href="#" class="services-page-card-btn" data-consultation-open data-service="Консервативне лікування">Записатися</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Process Section -->
<section class="services-page-process">
    <div class="services-page-process-inner">
        <h2 class="services-page-process-title">Як проходить лікування</h2>
        <div class="services-page-process-grid">
            <div class="services-process-step">
                <span class="services-process-number">01</span>
                <div class="services-process-content">
                    <h3>Консультація</h3>
                    <p>Детальний збір анамнезу, огляд та обговорення ваших скарг і побажань</p>
                </div>
            </div>
            <div class="services-process-step">
                <span class="services-process-number">02</span>
                <div class="services-process-content">
                    <h3>Діагностика</h3>
                    <p>Проведення необхідних обстежень: УЗД, аналізи, інструментальні дослідження</p>
                </div>
            </div>
            <div class="services-process-step">
                <span class="services-process-number">03</span>
                <div class="services-process-content">
                    <h3>План лікування</h3>
                    <p>Розробка індивідуальної стратегії з урахуванням особливостей вашого організму</p>
                </div>
            </div>
            <div class="services-process-step">
                <span class="services-process-number">04</span>
                <div class="services-process-content">
                    <h3>Лікування</h3>
                    <p>Проведення терапії або операції з використанням сучасних методів</p>
                </div>
            </div>
            <div class="services-process-step">
                <span class="services-process-number">05</span>
                <div class="services-process-content">
                    <h3>Супровід</h3>
                    <p>Контроль результатів, корекція терапії та підтримка на етапі відновлення</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="services-page-cta">
    <div class="services-page-cta-bg">
        <img src="https://lightcyan-llama-142433.hostingersite.com/wp-content/uploads/2026/01/13_result-scaled.webp" alt="Записатись на консультацію">
    </div>
    <div class="services-page-cta-overlay"></div>
    <div class="services-page-cta-content">
        <h2>Готові записатись?</h2>
        <p>Не відкладайте турботу про своє здоров'я. Запишіться на консультацію вже сьогодні.</p>
        <a href="#" class="services-page-cta-button" data-consultation-open>
            Записатись на прийом
        </a>
    </div>
</section>

<?php
get_footer();

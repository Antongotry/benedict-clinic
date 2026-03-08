<?php
/**
 * Template Name: About Doctor Page
 */

get_header();

$ad_name = bf('ad_name', 'DR. BENEDICT');
$ad_subtitle = bf('ad_subtitle', 'лікар уролог, засновник benedict clinic');
$ad_hero_desktop = bf_image('ad_hero_desktop', 'https://lightcyan-llama-142433.hostingersite.com/wp-content/uploads/2025/12/hero-about_result-scaled.webp');
$ad_hero_mobile = bf_image('ad_hero_mobile', 'https://lightcyan-llama-142433.hostingersite.com/wp-content/uploads/2026/01/234_result.webp');
$ad_badge_image = bf_image('ad_badge_image', 'https://lightcyan-llama-142433.hostingersite.com/wp-content/uploads/2025/12/image-1.png');
$ad_badge_text = bf('ad_badge_text', 'ЧЛЕН ЄВРОПЕЙСЬКОЇ АСОЦІАЦІЇ УРОЛОГІВ');

$ad_path_label = bf('ad_path_label', 'професійний шлях');
$ad_path_name = bf('ad_path_name', 'Гаврилишин бенедикт');
$ad_path_image = bf_image('ad_path_image', 'https://lightcyan-llama-142433.hostingersite.com/wp-content/uploads/2025/12/IMG@2x_result.webp');
$ad_path_text = bf('ad_path_text', '');

$ad_surgery_title = bf('ad_surgery_title', 'оперативні втручання та<br>Пластична реконструктивна хірургія');
$ad_surgery_image = bf_image('ad_surgery_image', 'https://lightcyan-llama-142433.hostingersite.com/wp-content/uploads/2025/12/photo-90-копія-1_result.webp');
$ad_surgery_text = bf('ad_surgery_text', '');

$ad_diagnostics_title = bf('ad_diagnostics_title', 'обстеження та лікування');
$ad_diagnostics_image = bf_image('ad_diagnostics_image', 'https://lightcyan-llama-142433.hostingersite.com/wp-content/uploads/2025/12/photo-36-копія-1_result.webp');
$ad_diagnostics_text = bf('ad_diagnostics_text', '');

$ad_podcast_title = bf('ad_podcast_title', 'PODCAST TALKS');
$ad_podcast_subtitle = bf('ad_podcast_subtitle', 'Запрошую познайомитись ще до візиту — перегляньте подкасти про урологічне здоров\'я');

$ad_cta_title = bf('ad_cta_title', 'Заплануйте свою консультацію');
$ad_cta_btn = bf('ad_cta_btn', "Зв'яжіться зі мною");
$ad_cta_bg = bf_image('ad_cta_bg', 'https://lightcyan-llama-142433.hostingersite.com/wp-content/uploads/2026/01/13_result-scaled.webp');
$ad_insta_bg = bf_image('ad_insta_bg', 'https://lightcyan-llama-142433.hostingersite.com/wp-content/uploads/2026/01/12_result-scaled.webp');

$instagram_url = bf_option('instagram_url', 'https://www.instagram.com/dr_benedikt/');
$instagram_handle = bf_option('instagram_handle', '@dr_benedikt');
$youtube_url = bf_option('youtube_url', 'https://www.youtube.com/@dr_benedikt');
?>

<!-- Hero Section -->
<section class="about-doctor-hero">
    <div class="about-doctor-hero-bg">
        <img src="<?php echo esc_url($ad_hero_desktop); ?>" alt="<?php echo esc_attr($ad_name); ?>" class="hero-bg-desktop">
        <img src="<?php echo esc_url($ad_hero_mobile); ?>" alt="<?php echo esc_attr($ad_name); ?>" class="hero-bg-mobile">
    </div>
    <div class="about-doctor-hero-gradient-mobile"></div>
    <div class="about-doctor-hero-content">
        <div class="about-doctor-main">
            <h1 class="about-doctor-name"><?php echo esc_html($ad_name); ?></h1>
            <p class="about-doctor-subtitle"><?php echo esc_html($ad_subtitle); ?></p>
        </div>
        <div class="about-doctor-bottom">
            <img src="<?php echo esc_url($ad_badge_image); ?>" alt="Badge" class="about-doctor-badge">
            <span class="about-doctor-bottom-text"><?php echo esc_html($ad_badge_text); ?></span>
        </div>
    </div>
</section>

<!-- Professional Path Section -->
<section class="about-doctor-path">
    <div class="about-doctor-path-inner">
        <div class="about-doctor-path-image">
            <img src="<?php echo esc_url($ad_path_image); ?>" alt="<?php echo esc_attr($ad_path_name); ?>">
        </div>
        <div class="about-doctor-path-content">
            <p class="about-doctor-path-label"><?php echo esc_html($ad_path_label); ?></p>
            <h2 class="about-doctor-path-name"><?php echo esc_html($ad_path_name); ?></h2>
            <div class="about-doctor-path-text">
                <?php if (!empty($ad_path_text)) : ?>
                    <?php echo wp_kses_post($ad_path_text); ?>
                <?php else : ?>
                    <p>Я лікар-уролог із досвідом у хірургічній та малоінвазивній урології. Пройшов клінічну ординатуру у ДУ «Інститут урології НАМН України» після інтернатури за спеціальністю «урологія» у Львівському національному медичному університеті. Медичну освіту отримав в Івано-Франківському національному медичному університеті.</p>
                    <p>Мій професійний шлях охоплює роботу в урологічних та хірургічних відділеннях України, Польщі та проходження хірургічної практики у США, де я удосконалював підхід до роботи з пацієнтами та сучасні техніки оперативних втручань.</p>
                    <p>Брав участь у роботі зведеного медичного загону Державної прикордонної служби України на передовій: надавав урологічну та хірургічну допомогу, проводив операції та евакуацію поранених військовослужбовців у зоні бойових дій.</p>
                    <p>Постійно підвищую кваліфікацію, беру участь у міжнародних конференціях та навчальних програмах, у тому числі з роботизованої урології та малоінвазивних технологій.</p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<!-- Divider under Professional Path -->
<section class="about-doctor-divider">
    <div class="about-doctor-divider-inner"></div>
</section>

<!-- Surgery & Plastic Reconstruction Section -->
<section class="about-doctor-surgery">
    <div class="about-doctor-surgery-inner">
        <div class="about-doctor-surgery-content">
            <h2 class="about-doctor-surgery-title"><?php echo wp_kses_post($ad_surgery_title); ?></h2>
            <div class="about-doctor-surgery-text">
                <?php if (!empty($ad_surgery_text)) : ?>
                    <?php echo wp_kses_post($ad_surgery_text); ?>
                <?php else : ?>
                    <p>Допомагаю відновити функції та зовнішній вигляд органів після травм, хвороб чи хірургічних втручань, а також враховую естетичні побажання пацієнта для досягнення гармонійного результату.</p>
                    <p>Використовую сучасні хірургічні<br>методи для лікування захворювань на різних стадіях, забезпечуючи високу точність, ефективність та мінімальні ризики для пацієнта</p>
                <?php endif; ?>
            </div>
        </div>
        <div class="about-doctor-surgery-image">
            <img src="<?php echo esc_url($ad_surgery_image); ?>" alt="Operative and reconstructive surgery">
        </div>
    </div>
</section>

<!-- Diagnostics & Treatment Section -->
<section class="about-doctor-diagnostics">
    <div class="about-doctor-diagnostics-inner">
        <div class="about-doctor-diagnostics-image">
            <img src="<?php echo esc_url($ad_diagnostics_image); ?>" alt="Diagnostics and treatment">
        </div>
        <div class="about-doctor-diagnostics-content">
            <h2 class="about-doctor-diagnostics-title"><?php echo wp_kses_post($ad_diagnostics_title); ?></h2>
            <div class="about-doctor-diagnostics-text">
                <?php if (!empty($ad_diagnostics_text)) : ?>
                    <?php echo wp_kses_post($ad_diagnostics_text); ?>
                <?php else : ?>
                    <p>Чоловіче здоров'я починається з правильного способу життя та регулярних чекапів. На консультації я не призначаю лікування "про всяк випадок". Спочатку — діагностика, аналіз способу життя, пошук причини і вже потім діалог та прийняття рішень.</p>
                    <p>Мій підхід простий: мінімум непотрібних втручань — максимум доказової медицини та турботи про якість життя. Якщо проблему можна вирішити корекцією звичок, консервативним лікуванням чи зміною поведінкових факторів — ми починаємо саме з цього. Моє завдання — повернути здоров'я і впевненість без зайвого стресу і без зайвих процедур.</p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<!-- Experience Tabs Section -->
<section class="about-doctor-experience">
    <div class="about-doctor-experience-inner">
        <div class="experience-tabs-nav">
            <button class="experience-tab-btn active" data-tab="education">
                <span class="experience-tab-title">ОСВІТА ТА НАВЧАННЯ</span>
                <span class="experience-tab-count">6</span>
            </button>
            <button class="experience-tab-btn" data-tab="conferences">
                <span class="experience-tab-title">КОНФЕРЕНЦІЇ</span>
                <span class="experience-tab-count">7</span>
            </button>
            <button class="experience-tab-btn" data-tab="practice">
                <span class="experience-tab-title">ПРАКТИКА</span>
                <span class="experience-tab-count">4</span>
            </button>
            <button class="experience-tab-btn" data-tab="experience">
                <span class="experience-tab-title">ДОСВІД</span>
                <span class="experience-tab-count">7</span>
            </button>
            <button class="experience-tab-btn" data-tab="certification">
                <span class="experience-tab-title">СЕРТИФІКАЦІЯ</span>
                <span class="experience-tab-count">7</span>
            </button>
            <button class="experience-tab-btn" data-tab="membership">
                <span class="experience-tab-title">ЧЛЕНСТВО</span>
                <span class="experience-tab-count">2</span>
            </button>
            <button class="experience-tab-btn" data-tab="ubd">
                <span class="experience-tab-title">УБД</span>
                <span class="experience-tab-count">1</span>
            </button>
        </div>
        <div class="experience-tabs-content">
            <div class="experience-tab-panel active" id="tab-education">
                <div class="experience-item">
                    <p>Клінічна ординатура за спеціальністю «Урологія» — ДУ «Інститут урології НАМН України», м. Київ (01.09.2014 – 31.08.2016)</p>
                </div>
                <div class="experience-item">
                    <p>Інтернатура за спеціальністю «Урологія» — Львівський національний медичний університет імені Данила Галицького (2012–2014)</p>
                </div>
                <div class="experience-item">
                    <p>Клінічне стажування з урології — Klinika Świętej Rodziny, Poznań, Polska (листопад 2013)</p>
                </div>
                <div class="experience-item">
                    <p>Клінічна практика — урологічне відділення Івано-Франківської обласної клінічної лікарні (2012)</p>
                </div>
                <div class="experience-item">
                    <p>Повна вища освіта за спеціальністю «Лікувальна справа», кваліфікація — лікар — Івано-Франківський національний медичний університет (2006–2012)</p>
                </div>
                <div class="experience-item">
                    <p>Міжнародна медична програма Work &amp; Travel / клінічна практика — United States (літо 2010)</p>
                </div>
            </div>
            <div class="experience-tab-panel" id="tab-conferences">
                <div class="experience-item">
                    <p>ERUS23 — 20th Meeting of the EAU Robotic Urology Section, Florence, Italy (13–15 September 2023)</p>
                </div>
                <div class="experience-item">
                    <p>Наукова конференція «Школа по діагностиці і лікуванню раку передміхурової залози», Київ (17–18 листопада 2014)</p>
                </div>
                <div class="experience-item">
                    <p>Науково-практична конференція з онкоурології «Мовембер-2019», Київ (28–29 листопада 2019)</p>
                </div>
                <div class="experience-item">
                    <p>Конференція «Малоінвазивні технології в урології», Яремче (2023)</p>
                </div>
                <div class="experience-item">
                    <p>З’їзд Польського товариства урологів, Jachranka (2013)</p>
                </div>
                <div class="experience-item">
                    <p>Конференція «Малоінвазивні технології в урології», Яремче (2013)</p>
                </div>
                <div class="experience-item">
                    <p>Конференція «Малоінвазивні технології в урології», Яремче (2012)</p>
                </div>
            </div>
            <div class="experience-tab-panel" id="tab-practice">
                <div class="experience-item">
                    <p>Клінічна ординатура — ДУ «Інститут урології НАМН України» (2014–2016)</p>
                </div>
                <div class="experience-item">
                    <p>Клінічне стажування — Klinika Świętej Rodziny, Poznań (2013)</p>
                </div>
                <div class="experience-item">
                    <p>Клінічна практика — Івано-Франківська обласна клінічна лікарня (2012)</p>
                </div>
                <div class="experience-item">
                    <p>Міжнародна клінічна практика — United States (2010)</p>
                </div>
            </div>
            <div class="experience-tab-panel" id="tab-experience">
                <div class="experience-item">
                    <p>Головний лікар, засновник, лікар-уролог — Benedict Clinic (з серпня 2025 — теперішній час)</p>
                </div>
                <div class="experience-item">
                    <p>Лікар-уролог — ТОВ «Медичний центр «Добробут-Поліклініка», м. Київ (2022 — січень 2026)</p>
                </div>
                <div class="experience-item">
                    <p>Лікар-уролог, лікар-хірург — зведений медичний загін Державної прикордонної служби України (2023–2024)</p>
                </div>
                <div class="experience-item">
                    <p>Старший ординатор урологічного відділення — Головний військово-медичний клінічний центр ДПСУ (2016–2024)</p>
                </div>
                <div class="experience-item">
                    <p>Клінічний ординатор — ДУ «Інститут урології НАМН України» (2014–2016)</p>
                </div>
                <div class="experience-item">
                    <p>Лікар-інтерн — урологічне відділення Львівської обласної клінічної лікарні (2012–2014)</p>
                </div>
                <div class="experience-item">
                    <p>Медичний брат — урологічне відділення Івано-Франківської обласної клінічної лікарні (2012)</p>
                </div>
            </div>
            <div class="experience-tab-panel" id="tab-certification">
                <div class="experience-item">
                    <p>Сертифікат лікаря-спеціаліста за спеціальністю «Урологія» — 20.06.2014</p>
                </div>
                <div class="experience-item">
                    <p>Свідоцтво про клінічну ординатуру — ДУ «Інститут урології НАМН України» (2014–2016)</p>
                </div>
                <div class="experience-item">
                    <p>Друга кваліфікаційна категорія лікаря-уролога — присвоєна 15.12.2017</p>
                </div>
                <div class="experience-item">
                    <p>Перша кваліфікаційна категорія лікаря-уролога — чинна до 29.03.2026</p>
                </div>
                <div class="experience-item">
                    <p>Сертифікат учасника EAU Robotic Urology Section (ERUS23), Florence, Italy (2023)</p>
                </div>
                <div class="experience-item">
                    <p>Сертифікат наукової конференції «Школа по діагностиці і лікуванню рака передміхурової залози» (2014)</p>
                </div>
                <div class="experience-item">
                    <p>Сертифікат участі у науково-практичній конференції «Мовембер-2019»</p>
                </div>
            </div>
            <div class="experience-tab-panel" id="tab-membership">
                <div class="experience-item">
                    <p>European Association of Urology (EAU)</p>
                </div>
                <div class="experience-item">
                    <p>Українська асоціація урологів</p>
                </div>
            </div>
            <div class="experience-tab-panel" id="tab-ubd">
                <div class="experience-item">
                    <p>Учасник бойових дій: у складі зведеного медичного загону Державної прикордонної служби України в м. Покровськ, Лозова, Дружківка. Надавав урологічну та хірургічну допомогу військовослужбовцям у період 2023–2024 років.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Podcast Talks Section -->
<section class="podcast-talks-section">
    <div class="podcast-talks-inner">
        <h2 class="podcast-talks-title"><?php echo esc_html($ad_podcast_title); ?></h2>
        <p class="podcast-talks-subtitle"><?php echo esc_html($ad_podcast_subtitle); ?></p>
        
        <div class="podcast-videos-grid">
            <div class="podcast-video-item">
                <div class="podcast-video-thumbnail">
                    <a href="https://www.youtube.com/watch?v=sHnnM56ilIE" target="_blank" class="podcast-video-link">
                        <img src="https://img.youtube.com/vi/sHnnM56ilIE/maxresdefault.jpg" alt="Шоу 'На відвертій хвилі'. Тема випуску: 'Я...'">
                        <div class="podcast-video-play-overlay">
                            <svg width="68" height="48" viewBox="0 0 68 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M66.52,7.74c-0.78-2.93-2.49-5.41-5.42-6.19C55.79,.13,34,0,34,0S12.21,.13,6.9,1.55 C3.97,2.33,2.27,4.81,1.48,7.74C0.06,13.05,0,24,0,24s0.06,10.95,1.48,16.26c0.78,2.93,2.49,5.41,5.42,6.19 C12.21,47.87,34,48,34,48s21.79-0.13,27.1-1.55c2.93-0.78,4.63-3.26,5.42-6.19C67.94,34.95,68,24,68,24S67.94,13.05,66.52,7.74z" fill="#f00"/>
                                <path d="M 45,24 27,14 27,34" fill="white"/>
                            </svg>
                        </div>
                    </a>
                </div>
            </div>
            
            <div class="podcast-video-item">
                <div class="podcast-video-thumbnail">
                    <a href="https://www.youtube.com/watch?v=HcWsFe8CX3s&t=1324s" target="_blank" class="podcast-video-link">
                        <img src="https://img.youtube.com/vi/HcWsFe8CX3s/maxresdefault.jpg" alt="Подкаст про урологічне здоров'я">
                        <div class="podcast-video-play-overlay">
                            <svg width="68" height="48" viewBox="0 0 68 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M66.52,7.74c-0.78-2.93-2.49-5.41-5.42-6.19C55.79,.13,34,0,34,0S12.21,.13,6.9,1.55 C3.97,2.33,2.27,4.81,1.48,7.74C0.06,13.05,0,24,0,24s0.06,10.95,1.48,16.26c0.78,2.93,2.49,5.41,5.42,6.19 C12.21,47.87,34,48,34,48s21.79-0.13,27.1-1.55c2.93-0.78,4.63-3.26,5.42-6.19C67.94,34.95,68,24,68,24S67.94,13.05,66.52,7.74z" fill="#f00"/>
                                <path d="M 45,24 27,14 27,34" fill="white"/>
                            </svg>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        
        <div class="podcast-subscribe-wrapper">
            <a href="<?php echo esc_url($youtube_url); ?>" target="_blank" class="podcast-subscribe-button">
                <span>Підписатись на</span>
                <span class="podcast-youtube-text">YouTube</span>
            </a>
        </div>
    </div>
</section>

<!-- Schedule Consultation Section -->
<section class="schedule-consultation-about-section">
    <div class="schedule-consultation-about-background">
        <img src="<?php echo esc_url($ad_cta_bg); ?>" alt="Schedule Consultation">
    </div>
    <div class="schedule-consultation-about-overlay"></div>
    <div class="schedule-consultation-about-content">
        <h2 class="schedule-consultation-about-title"><?php echo esc_html($ad_cta_title); ?></h2>
        <a href="#" class="schedule-consultation-about-button" data-consultation-open>
            <?php echo esc_html($ad_cta_btn); ?>
        </a>
    </div>
</section>

<!-- Instagram Follow Section -->
<section class="instagram-follow-about-section">
    <div class="instagram-follow-about-background">
        <img src="<?php echo esc_url($ad_insta_bg); ?>" alt="Follow on Instagram">
    </div>
    <div class="instagram-follow-about-overlay"></div>
    <div class="instagram-follow-about-content">
        <h2 class="instagram-follow-about-title">
            <span class="instagram-follow-small">СЛІДКУЙТЕ В</span>
            <span class="instagram-follow-big">INSTAGRAM</span>
        </h2>
        <a href="<?php echo esc_url($instagram_url); ?>" target="_blank" class="instagram-follow-about-handle"><?php echo esc_html($instagram_handle); ?></a>
    </div>
</section>

// Модалка консультації — одна глобальна з footer.php (action: benedict_form_submit)

// Experience Tabs
document.addEventListener('DOMContentLoaded', function() {
    const tabBtns = document.querySelectorAll('.experience-tab-btn');
    const tabPanels = document.querySelectorAll('.experience-tab-panel');
    
    tabBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            const tabId = this.getAttribute('data-tab');
            
            // Remove active from all buttons
            tabBtns.forEach(b => b.classList.remove('active'));
            // Add active to clicked button
            this.classList.add('active');
            
            // Hide all panels
            tabPanels.forEach(panel => panel.classList.remove('active'));
            // Show selected panel
            document.getElementById('tab-' + tabId).classList.add('active');
        });
    });
});
</script>

<?php
get_footer();

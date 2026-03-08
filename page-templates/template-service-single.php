<?php
/**
 * Template Name: Service Single Page
 * Template for individual service pages
 */

// Variables are defined in page-*.php files before including this template.
// ACF fields override them when set.

$service_title = bf('service_title', isset($service_title) ? $service_title : '');
$service_subtitle = bf('service_subtitle', isset($service_subtitle) ? $service_subtitle : 'DR. BENEDICT UROLOGY');
$service_description = bf('service_description', isset($service_description) ? $service_description : '');
$service_hero_image = bf_image('service_hero_image', isset($service_hero_image) ? $service_hero_image : '');
$service_price = bf('service_price', isset($service_price) ? $service_price : '');
$service_intro_text = bf('service_intro_text', isset($service_intro_text) ? $service_intro_text : '');
$service_intro_text_2 = bf('service_intro_text_2', isset($service_intro_text_2) ? $service_intro_text_2 : '');
$service_intro_image = bf_image('service_intro_image', 'https://lightcyan-llama-142433.hostingersite.com/wp-content/uploads/2025/12/IMG@2x_result.webp');
$service_cta_image = bf_image('service_cta_image', 'https://lightcyan-llama-142433.hostingersite.com/wp-content/uploads/2026/01/13_result-scaled.webp');

$acf_features = bf_repeater('service_features');
if (!empty($acf_features)) {
    $service_features = array_map(function($f) {
        return array(
            'icon' => !empty($f['icon']) ? '<img src="' . esc_url($f['icon']) . '" alt="" width="40" height="40">' : '<svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>',
            'title' => $f['title'],
            'text' => $f['text'],
        );
    }, $acf_features);
}

$acf_steps = bf_repeater('service_process_steps');
if (!empty($acf_steps)) {
    $service_process_steps = $acf_steps;
}

$acf_indications = bf_repeater('service_indications');
if (!empty($acf_indications)) {
    $service_indications = array_map(function($i) { return $i['text']; }, $acf_indications);
}

$acf_faq = bf_repeater('service_faq');
if (!empty($acf_faq)) {
    $service_faq = $acf_faq;
}

$acf_related = bf_repeater('service_related');
if (!empty($acf_related)) {
    $related_services = array_map(function($r) {
        return array(
            'title' => $r['title'],
            'url' => $r['url'],
            'icon' => !empty($r['icon']) ? '<img src="' . esc_url($r['icon']) . '" alt="" width="32" height="32">' : '<svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>',
        );
    }, $acf_related);
}

get_header();
?>

<!-- Service Hero Section -->
<section class="service-single-hero">
    <div class="service-single-hero-bg">
        <img src="<?php echo esc_url($service_hero_image); ?>" alt="<?php echo esc_attr($service_title); ?>" loading="eager">
    </div>
    <div class="service-single-hero-overlay"></div>
    <div class="service-single-hero-content">
        <p class="service-single-hero-label"><?php echo esc_html($service_subtitle); ?></p>
        <h1 class="service-single-hero-title"><?php echo esc_html($service_title); ?></h1>
        <p class="service-single-hero-desc"><?php echo esc_html($service_description); ?></p>
        <div class="service-single-hero-actions">
            <button class="service-single-hero-btn primary" data-consultation-open data-service="<?php echo esc_attr($service_title); ?>">
                Записатись на прийом
            </button>
            <?php if (!empty($service_price)) : ?>
            <span class="service-single-hero-price"><?php echo esc_html($service_price); ?></span>
            <?php endif; ?>
        </div>
    </div>
</section>

<!-- Service Introduction -->
<section class="service-single-intro section-padding">
    <div class="container">
        <div class="service-single-intro-grid">
            <div class="service-single-intro-content">
                <h2 class="service-single-intro-title">Про послугу</h2>
                <p class="service-single-intro-text"><?php echo wp_kses_post($service_intro_text); ?></p>
                <?php if (!empty($service_intro_text_2)) : ?>
                <p class="service-single-intro-text"><?php echo wp_kses_post($service_intro_text_2); ?></p>
                <?php endif; ?>
            </div>
            <div class="service-single-intro-image">
                <img src="<?php echo esc_url($service_intro_image); ?>" alt="Dr. Benedict" loading="lazy">
            </div>
        </div>
    </div>
</section>

<!-- Service Features -->
<?php if (!empty($service_features)) : ?>
<section class="service-single-features section-padding">
    <div class="container">
        <h2 class="service-single-section-title">Переваги</h2>
        <div class="service-single-features-grid">
            <?php foreach ($service_features as $feature) : ?>
            <div class="service-single-feature-card">
                <div class="service-single-feature-icon">
                    <?php echo $feature['icon']; ?>
                </div>
                <h3 class="service-single-feature-title"><?php echo esc_html($feature['title']); ?></h3>
                <p class="service-single-feature-text"><?php echo esc_html($feature['text']); ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php endif; ?>

<!-- Service Process -->
<?php if (!empty($service_process_steps)) : ?>
<section class="service-single-process section-padding">
    <div class="container">
        <h2 class="service-single-section-title">Як проходить <?php echo esc_html(mb_strtolower($service_title)); ?></h2>
        <div class="service-single-process-grid">
            <?php foreach ($service_process_steps as $step) : ?>
            <div class="service-single-process-step">
                <span class="service-single-process-number"><?php echo esc_html($step['number']); ?></span>
                <div class="service-single-process-content">
                    <h3><?php echo esc_html($step['title']); ?></h3>
                    <p><?php echo esc_html($step['text']); ?></p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php endif; ?>

<!-- Indications Section -->
<?php if (!empty($service_indications)) : ?>
<section class="service-single-indications section-padding">
    <div class="container">
        <div class="service-single-indications-grid">
            <div class="service-single-indications-content">
                <h2 class="service-single-section-title">Показання</h2>
                <p class="service-single-indications-intro">Зверніться на <?php echo esc_html(mb_strtolower($service_title)); ?>, якщо у вас:</p>
                <ul class="service-single-indications-list">
                    <?php foreach ($service_indications as $indication) : ?>
                    <li>
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <polyline points="20 6 9 17 4 12"></polyline>
                        </svg>
                        <?php echo esc_html($indication); ?>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <div class="service-single-indications-cta">
                <div class="service-single-indications-card">
                    <h3>Не відкладайте візит</h3>
                    <p>Раннє звернення допоможе уникнути ускладнень і забезпечить ефективне лікування</p>
                    <button class="service-single-cta-btn" data-consultation-open data-service="<?php echo esc_attr($service_title); ?>">
                        Записатись
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                            <polyline points="12 5 19 12 12 19"></polyline>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>

<!-- FAQ Section -->
<?php if (!empty($service_faq)) : ?>
<section class="service-single-faq section-padding">
    <div class="container">
        <h2 class="service-single-section-title">Часті запитання</h2>
        <div class="service-single-faq-grid">
            <div class="service-single-faq-accordion">
                <?php foreach ($service_faq as $index => $faq) : ?>
                <div class="service-single-faq-item<?php echo $index === 0 ? ' active' : ''; ?>">
                    <button class="service-single-faq-question" aria-expanded="<?php echo $index === 0 ? 'true' : 'false'; ?>">
                        <span><?php echo esc_html($faq['question']); ?></span>
                        <span class="service-single-faq-icon">+</span>
                    </button>
                    <div class="service-single-faq-answer">
                        <p><?php echo wp_kses_post($faq['answer']); ?></p>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>

<!-- CTA Section -->
<section class="service-single-cta-section">
    <div class="service-single-cta-bg">
        <img src="<?php echo esc_url($service_cta_image); ?>" alt="Записатись на консультацію">
    </div>
    <div class="service-single-cta-overlay"></div>
    <div class="service-single-cta-content">
        <h2>Готові записатись?</h2>
        <p>Не відкладайте турботу про своє здоров'я. Запишіться на <?php echo esc_html(mb_strtolower($service_title)); ?> вже сьогодні.</p>
        <button class="service-single-cta-button" data-consultation-open data-service="<?php echo esc_attr($service_title); ?>">
            Записатись на прийом
        </button>
    </div>
</section>

<!-- Related Services -->
<?php if (!empty($related_services)) : ?>
<section class="service-single-related section-padding">
    <div class="container">
        <h2 class="service-single-section-title">Інші послуги</h2>
        <div class="service-single-related-grid">
            <?php foreach ($related_services as $related) : ?>
            <a href="<?php echo esc_url($related['url']); ?>" class="service-single-related-card">
                <div class="service-single-related-icon">
                    <?php echo $related['icon']; ?>
                </div>
                <h3 class="service-single-related-title"><?php echo esc_html($related['title']); ?></h3>
                <span class="service-single-related-arrow">→</span>
            </a>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php endif; ?>

<script>
// FAQ Accordion for Service Page
document.addEventListener('DOMContentLoaded', function() {
    const faqQuestions = document.querySelectorAll('.service-single-faq-question');
    
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
});
</script>

<?php
get_footer();

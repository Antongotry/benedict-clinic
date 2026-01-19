<?php
/**
 * Category Archive Template
 * Displays posts from a specific category
 */

get_header();

// Get current category info
$current_category = get_queried_object();
$hero_image = get_theme_mod('benedict_blog_hero_image');

// Get all categories for filter
$categories = get_categories(array(
    'hide_empty' => true,
    'orderby' => 'name',
    'order' => 'ASC',
));
?>

<!-- Blog Hero Section -->
<section class="blog-hero" <?php if ($hero_image) : ?>style="background-image: url('<?php echo esc_url($hero_image); ?>');"<?php endif; ?>>
    <div class="blog-hero-overlay"></div>
    <div class="blog-hero-content">
        <!-- Breadcrumbs -->
        <nav class="blog-breadcrumbs" aria-label="Хлібні крихти">
            <a href="<?php echo home_url('/'); ?>">Головна</a>
            <span class="breadcrumb-separator">/</span>
            <a href="<?php echo get_permalink(get_option('page_for_posts')); ?>">Блог</a>
            <span class="breadcrumb-separator">/</span>
            <span class="breadcrumb-current"><?php echo esc_html($current_category->name); ?></span>
        </nav>
        
        <h1 class="blog-hero-title"><?php echo esc_html($current_category->name); ?></h1>
        
        <?php if ($current_category->description) : ?>
            <p class="blog-hero-subtitle"><?php echo esc_html($current_category->description); ?></p>
        <?php endif; ?>
    </div>
</section>

<!-- Category Filter -->
<section class="blog-categories">
    <div class="container">
        <nav class="blog-categories-nav">
            <a href="<?php echo get_permalink(get_option('page_for_posts')); ?>" 
               class="blog-category-link">
                Всі статті
            </a>
            <?php foreach ($categories as $category) : ?>
                <a href="<?php echo get_category_link($category->term_id); ?>" 
                   class="blog-category-link <?php echo $current_category->term_id === $category->term_id ? 'active' : ''; ?>">
                    <?php echo esc_html($category->name); ?>
                </a>
            <?php endforeach; ?>
        </nav>
    </div>
</section>

<!-- Blog Posts Grid -->
<section class="blog-archive">
    <div class="container">
        <?php if (have_posts()) : ?>
            <div class="blog-grid">
                <?php while (have_posts()) : the_post(); ?>
                    <?php get_template_part('template-parts/blog-card'); ?>
                <?php endwhile; ?>
            </div>
            
            <!-- Pagination -->
            <div class="blog-pagination">
                <?php
                $pagination = paginate_links(array(
                    'prev_text' => '<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M15 18l-6-6 6-6"/></svg>',
                    'next_text' => '<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 18l6-6-6-6"/></svg>',
                    'type' => 'array',
                    'mid_size' => 2,
                ));
                
                if ($pagination) :
                ?>
                    <nav class="pagination-nav" aria-label="Навігація по сторінках">
                        <?php foreach ($pagination as $page) : ?>
                            <?php echo $page; ?>
                        <?php endforeach; ?>
                    </nav>
                <?php endif; ?>
            </div>
        <?php else : ?>
            <div class="blog-no-posts">
                <p>Поки що немає статей у категорії "<?php echo esc_html($current_category->name); ?>".</p>
                <a href="<?php echo get_permalink(get_option('page_for_posts')); ?>" class="btn-primary">Переглянути всі статті</a>
            </div>
        <?php endif; ?>
    </div>
</section>

<!-- CTA Section -->
<section class="blog-cta-section">
    <div class="blog-cta-overlay"></div>
    <div class="blog-cta-content">
        <p class="blog-cta-tagline">DR. BENEDICT UROLOGY</p>
        <h2 class="blog-cta-title">Потрібна консультація?</h2>
        <p class="blog-cta-desc">Запишіться на прийом до лікаря-уролога з 14+ роками досвіду</p>
        <div class="blog-cta-buttons">
            <button class="blog-cta-btn primary" data-consultation-open>Записатись на прийом</button>
            <a href="tel:+380951344029" class="blog-cta-btn secondary">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                </svg>
                +38 095 13 44 029
            </a>
        </div>
    </div>
</section>

<?php get_footer(); ?>

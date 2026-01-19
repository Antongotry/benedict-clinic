<?php
/**
 * Blog Archive Template
 * Displays list of blog posts with category filtering
 */

get_header();

// Get customizer settings
$hero_image = get_theme_mod('benedict_blog_hero_image');
$hero_title = get_theme_mod('benedict_blog_hero_title', 'БЛОГ');
$hero_subtitle = get_theme_mod('benedict_blog_hero_subtitle', 'Корисні статті про урологічне здоров\'я');

// Get all categories
$categories = get_categories(array(
    'hide_empty' => true,
    'orderby' => 'name',
    'order' => 'ASC',
));

// Current category filter
$current_category = get_query_var('cat') ? get_query_var('cat') : 0;
?>

<!-- Blog Hero Section -->
<section class="blog-hero" <?php if ($hero_image) : ?>style="background-image: url('<?php echo esc_url($hero_image); ?>');"<?php endif; ?>>
    <div class="blog-hero-overlay"></div>
    <div class="blog-hero-content">
        <h1 class="blog-hero-title"><?php echo esc_html($hero_title); ?></h1>
        <p class="blog-hero-subtitle"><?php echo esc_html($hero_subtitle); ?></p>
    </div>
</section>

<!-- Category Filter -->
<section class="blog-categories">
    <div class="container">
        <nav class="blog-categories-nav">
            <a href="<?php echo get_permalink(get_option('page_for_posts')); ?>" 
               class="blog-category-link <?php echo $current_category === 0 ? 'active' : ''; ?>">
                Всі статті
            </a>
            <?php foreach ($categories as $category) : ?>
                <a href="<?php echo get_category_link($category->term_id); ?>" 
                   class="blog-category-link <?php echo $current_category === $category->term_id ? 'active' : ''; ?>">
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
                <p>Поки що немає статей у цій категорії.</p>
                <a href="<?php echo home_url('/blog'); ?>" class="btn-primary">Переглянути всі статті</a>
            </div>
        <?php endif; ?>
    </div>
</section>

<?php get_footer(); ?>

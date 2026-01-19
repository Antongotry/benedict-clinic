<?php
/**
 * Single Post Template
 * Displays individual blog posts with comments
 */

get_header();

// Force enqueue blog styles
wp_enqueue_style('benedict-blog-styles', get_template_directory_uri() . '/assets/css/blog.css', array(), time());
?><style>
/* Inline override for single post hero padding */
.single-post-hero {
    padding-top: 210px !important;
    min-height: 55vh !important;
}
@media (max-width: 768px) {
    .single-post-hero {
        padding-top: 170px !important;
    }
}
</style><?php

// Get post data
$post_id = get_the_ID();
$categories = get_the_category($post_id);
$reading_time = benedict_reading_time($post_id);
$featured_image = benedict_get_featured_image($post_id, 'blog-featured');

// Get related posts (4 cards as per design spec)
$related_posts = benedict_related_posts($post_id, 4);
?>

<!-- Single Post Hero -->
<article id="post-<?php echo $post_id; ?>" <?php post_class('single-post'); ?>>
    <header class="single-post-hero" style="background-image: url('<?php echo esc_url($featured_image); ?>');">
        <div class="single-post-hero-overlay"></div>
        <div class="single-post-hero-content">
            <!-- Breadcrumbs -->
            <nav class="blog-breadcrumbs" aria-label="Хлібні крихти">
                <a href="<?php echo home_url('/'); ?>">Головна</a>
                <span class="breadcrumb-separator">/</span>
                <a href="<?php echo get_permalink(get_option('page_for_posts')); ?>">Корисні статті</a>
                <?php if (!empty($categories)) : ?>
                    <span class="breadcrumb-separator">/</span>
                    <a href="<?php echo get_category_link($categories[0]->term_id); ?>"><?php echo esc_html($categories[0]->name); ?></a>
                <?php endif; ?>
                <span class="breadcrumb-separator">/</span>
                <span class="breadcrumb-current"><?php the_title(); ?></span>
            </nav>
            
            <?php if (!empty($categories)) : ?>
                <div class="single-post-categories">
                    <?php foreach ($categories as $category) : ?>
                        <a href="<?php echo get_category_link($category->term_id); ?>" class="single-post-category">
                            <?php echo esc_html($category->name); ?>
                        </a>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
            
            <h1 class="single-post-title"><?php the_title(); ?></h1>
            
            <div class="single-post-meta">
                <span class="single-post-date">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                        <line x1="16" y1="2" x2="16" y2="6"></line>
                        <line x1="8" y1="2" x2="8" y2="6"></line>
                        <line x1="3" y1="10" x2="21" y2="10"></line>
                    </svg>
                    <?php echo get_the_date('d.m.Y'); ?>
                </span>
                <span class="single-post-reading-time">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <circle cx="12" cy="12" r="10"></circle>
                        <polyline points="12 6 12 12 16 14"></polyline>
                    </svg>
                    <?php echo $reading_time; ?> хв читання
                </span>
            </div>
        </div>
    </header>
    
    <!-- Post Content -->
    <div class="single-post-body">
        <div class="container">
            <div class="single-post-content">
                <?php the_content(); ?>
            </div>
            
            <!-- Post Tags -->
            <?php 
            $tags = get_the_tags();
            if ($tags) : 
            ?>
                <div class="single-post-tags">
                    <span class="tags-label">Теги:</span>
                    <?php foreach ($tags as $tag) : ?>
                        <a href="<?php echo get_tag_link($tag->term_id); ?>" class="post-tag">
                            #<?php echo esc_html($tag->name); ?>
                        </a>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
            
            <!-- Author Box -->
            <div class="single-post-author">
                <div class="author-avatar">
                    <?php echo get_avatar(get_the_author_meta('ID'), 100); ?>
                </div>
                <div class="author-info">
                    <span class="author-label">Автор статті</span>
                    <h4 class="author-name"><?php the_author(); ?></h4>
                    <?php if (get_the_author_meta('description')) : ?>
                        <p class="author-bio"><?php the_author_meta('description'); ?></p>
                    <?php endif; ?>
                </div>
            </div>
            
            <!-- Post Navigation -->
            <nav class="single-post-navigation">
                <?php
                $prev_post = get_previous_post();
                $next_post = get_next_post();
                ?>
                
                <?php if ($prev_post) : ?>
                    <a href="<?php echo get_permalink($prev_post->ID); ?>" class="post-nav-link post-nav-prev">
                        <span class="post-nav-label">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M15 18l-6-6 6-6"/>
                            </svg>
                            Попередня стаття
                        </span>
                        <span class="post-nav-title"><?php echo esc_html($prev_post->post_title); ?></span>
                    </a>
                <?php else : ?>
                    <div class="post-nav-link post-nav-prev post-nav-empty"></div>
                <?php endif; ?>
                
                <?php if ($next_post) : ?>
                    <a href="<?php echo get_permalink($next_post->ID); ?>" class="post-nav-link post-nav-next">
                        <span class="post-nav-label">
                            Наступна стаття
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M9 18l6-6-6-6"/>
                            </svg>
                        </span>
                        <span class="post-nav-title"><?php echo esc_html($next_post->post_title); ?></span>
                    </a>
                <?php else : ?>
                    <div class="post-nav-link post-nav-next post-nav-empty"></div>
                <?php endif; ?>
            </nav>
        </div>
    </div>
</article>

<!-- Related Posts -->
<?php if ($related_posts->have_posts()) : ?>
<section class="related-posts">
    <div class="container">
        <h2 class="related-posts-title">Схожі статті</h2>
        <div class="blog-grid">
            <?php while ($related_posts->have_posts()) : $related_posts->the_post(); ?>
                <?php get_template_part('template-parts/blog-card'); ?>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
        </div>
    </div>
</section>
<?php endif; ?>

<!-- Comments Section -->
<?php if (comments_open() || get_comments_number()) : ?>
<section class="blog-comments-section">
    <div class="container">
        <?php comments_template(); ?>
    </div>
</section>
<?php endif; ?>

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

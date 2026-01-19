<?php
/**
 * Blog Card Component
 * Reusable post card for blog listings
 */

$post_id = get_the_ID();
$categories = get_the_category($post_id);
$reading_time = benedict_reading_time($post_id);
$featured_image = benedict_get_featured_image($post_id, 'blog-card');
?>

<article id="post-<?php echo $post_id; ?>" <?php post_class('blog-card'); ?>>
    <a href="<?php the_permalink(); ?>" class="blog-card-link">
        <div class="blog-card-image">
            <img src="<?php echo esc_url($featured_image); ?>" 
                 alt="<?php echo esc_attr(get_the_title()); ?>" 
                 loading="lazy">
            <div class="blog-card-image-overlay"></div>
        </div>
        
        <div class="blog-card-content">
            <?php if (!empty($categories)) : ?>
                <span class="blog-card-category">
                    <?php echo esc_html($categories[0]->name); ?>
                </span>
            <?php endif; ?>
            
            <h3 class="blog-card-title"><?php the_title(); ?></h3>
            
            <p class="blog-card-excerpt">
                <?php echo benedict_get_excerpt(15, $post_id); ?>
            </p>
            
            <div class="blog-card-meta">
                <span class="blog-card-date">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                        <line x1="16" y1="2" x2="16" y2="6"></line>
                        <line x1="8" y1="2" x2="8" y2="6"></line>
                        <line x1="3" y1="10" x2="21" y2="10"></line>
                    </svg>
                    <?php echo get_the_date('d.m.Y'); ?>
                </span>
                <span class="blog-card-reading-time">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <circle cx="12" cy="12" r="10"></circle>
                        <polyline points="12 6 12 12 16 14"></polyline>
                    </svg>
                    <?php echo $reading_time; ?> хв читання
                </span>
            </div>
        </div>
        
        <div class="blog-card-arrow">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <line x1="5" y1="12" x2="19" y2="12"></line>
                <polyline points="12 5 19 12 12 19"></polyline>
            </svg>
        </div>
    </a>
</article>

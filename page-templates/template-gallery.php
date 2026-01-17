<?php
/**
 * Template Name: Gallery Page
 * Template for displaying before/after gallery
 */

get_header();
?>

<section class="page-header section-padding bg-light">
    <div class="container">
        <h1 class="page-title">Photo Gallery</h1>
        <p class="page-subtitle">Before & After Results</p>
    </div>
</section>

<section class="gallery-page section-padding">
    <div class="container">
        <div class="gallery-filters text-center">
            <button class="filter-btn active" data-filter="all">All Procedures</button>
            <button class="filter-btn" data-filter="facelift">Facelift</button>
            <button class="filter-btn" data-filter="rhinoplasty">Rhinoplasty</button>
            <button class="filter-btn" data-filter="brow-lift">Brow Lift</button>
            <button class="filter-btn" data-filter="blepharoplasty">Blepharoplasty</button>
        </div>

        <div class="gallery-grid-full">
            <?php
            $gallery_query = new WP_Query(array(
                'post_type' => 'gallery',
                'posts_per_page' => -1,
            ));

            if ($gallery_query->have_posts()) :
                while ($gallery_query->have_posts()) : $gallery_query->the_post();
                    $before_image = get_post_meta(get_the_ID(), '_before_image', true);
                    $after_image = get_post_meta(get_the_ID(), '_after_image', true);
                    ?>
                    <div class="gallery-item-full">
                        <div class="gallery-comparison">
                            <div class="before-after-wrapper">
                                <img src="<?php echo esc_url($before_image); ?>" alt="Before" class="gallery-img before">
                                <img src="<?php echo esc_url($after_image); ?>" alt="After" class="gallery-img after">
                            </div>
                            <div class="gallery-labels">
                                <span class="label-before">Before</span>
                                <span class="label-after">After</span>
                            </div>
                        </div>
                        <h3 class="gallery-item-title"><?php the_title(); ?></h3>
                    </div>
                    <?php
                endwhile;
                wp_reset_postdata();
            else :
                // Placeholder gallery items
                for ($i = 1; $i <= 8; $i++) :
                    ?>
                    <div class="gallery-item-full">
                        <div class="gallery-comparison">
                            <div class="before-after-wrapper">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/placeholder-before-<?php echo $i; ?>.jpg" alt="Before">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/placeholder-after-<?php echo $i; ?>.jpg" alt="After">
                            </div>
                            <div class="gallery-labels">
                                <span class="label-before">Before</span>
                                <span class="label-after">After</span>
                            </div>
                        </div>
                        <h3 class="gallery-item-title">Procedure Result <?php echo $i; ?></h3>
                    </div>
                    <?php
                endfor;
            endif;
            ?>
        </div>
    </div>
</section>

<section class="cta-section section-padding bg-dark">
    <div class="container text-center">
        <h2 class="section-title">Ready to Begin Your Journey?</h2>
        <p>Schedule a consultation with Dr. Rosenberg today</p>
        <a href="/contact" class="btn-primary">Schedule Consultation</a>
    </div>
</section>

<?php
get_footer();







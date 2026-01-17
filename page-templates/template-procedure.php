<?php
/**
 * Template Name: Procedure Page
 * Template for individual procedure pages
 */

get_header();
?>

<section class="page-header section-padding bg-light">
    <div class="container">
        <h1 class="page-title"><?php the_title(); ?></h1>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="page-excerpt">
                <?php the_excerpt(); ?>
            </div>
        <?php endwhile; endif; ?>
    </div>
</section>

<section class="procedure-content section-padding">
    <div class="container">
        <div class="procedure-layout">
            <div class="procedure-main-content">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <?php if (has_post_thumbnail()) : ?>
                        <div class="procedure-featured-image">
                            <?php the_post_thumbnail('large'); ?>
                        </div>
                    <?php endif; ?>
                    
                    <div class="procedure-text">
                        <?php the_content(); ?>
                    </div>
                <?php endwhile; endif; ?>
                
                <!-- Default Content if no post content -->
                <div class="procedure-overview">
                    <h2>Overview</h2>
                    <p>This procedure is designed to enhance your natural beauty and restore a youthful appearance. Dr. Benedict uses advanced techniques to ensure natural-looking results with minimal downtime.</p>
                </div>
                
                <div class="procedure-benefits">
                    <h2>Benefits</h2>
                    <ul>
                        <li>Natural-looking results</li>
                        <li>Long-lasting outcomes</li>
                        <li>Minimal scarring</li>
                        <li>Enhanced self-confidence</li>
                        <li>Customized approach</li>
                    </ul>
                </div>
                
                <div class="procedure-process">
                    <h2>The Process</h2>
                    <div class="process-steps">
                        <div class="process-step">
                            <div class="step-number">1</div>
                            <h3>Consultation</h3>
                            <p>Meet with Dr. Benedict to discuss your goals and expectations</p>
                        </div>
                        <div class="process-step">
                            <div class="step-number">2</div>
                            <h3>Planning</h3>
                            <p>Custom treatment plan tailored to your unique needs</p>
                        </div>
                        <div class="process-step">
                            <div class="step-number">3</div>
                            <h3>Procedure</h3>
                            <p>Surgery performed in our state-of-the-art facility</p>
                        </div>
                        <div class="process-step">
                            <div class="step-number">4</div>
                            <h3>Recovery</h3>
                            <p>Comprehensive aftercare and follow-up support</p>
                        </div>
                    </div>
                </div>
                
                <div class="procedure-faq">
                    <h2>Frequently Asked Questions</h2>
                    <div class="faq-item">
                        <h3>How long does the procedure take?</h3>
                        <p>The duration varies depending on the specific procedure, typically ranging from 2-4 hours.</p>
                    </div>
                    <div class="faq-item">
                        <h3>What is the recovery time?</h3>
                        <p>Most patients can return to normal activities within 1-2 weeks, with full recovery in 4-6 weeks.</p>
                    </div>
                    <div class="faq-item">
                        <h3>Are the results permanent?</h3>
                        <p>Results are long-lasting, though natural aging will continue. Most patients enjoy their results for many years.</p>
                    </div>
                </div>
            </div>
            
            <aside class="procedure-sidebar">
                <div class="sidebar-widget">
                    <h3>Schedule Consultation</h3>
                    <p>Contact us to schedule your personalized consultation</p>
                    <a href="tel:212-832-8595" class="btn-primary">212-832-8595</a>
                    <a href="/contact" class="btn-secondary">Contact Form</a>
                </div>
                
                <div class="sidebar-widget">
                    <h3>Related Procedures</h3>
                    <ul class="related-procedures">
                        <li><a href="/deep-plane-facelift">Deep Plane Facelift</a></li>
                        <li><a href="/rhinoplasty">Rhinoplasty</a></li>
                        <li><a href="/brow-lift">Brow Lift</a></li>
                        <li><a href="/blepharoplasty">Blepharoplasty</a></li>
                    </ul>
                </div>
            </aside>
        </div>
    </div>
</section>

<section class="procedure-gallery section-padding bg-light">
    <div class="container">
        <h2 class="section-title text-center">Before & After Gallery</h2>
        <div class="gallery-grid">
            <?php
            // Display 4 gallery items related to this procedure
            for ($i = 1; $i <= 4; $i++) :
                ?>
                <div class="gallery-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/before-<?php echo $i; ?>.jpg" alt="Before">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/after-<?php echo $i; ?>.jpg" alt="After">
                </div>
                <?php
            endfor;
            ?>
        </div>
        <div class="text-center">
            <a href="/gallery" class="btn-primary">View Full Gallery</a>
        </div>
    </div>
</section>

<?php
get_footer();







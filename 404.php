<?php
/**
 * The template for displaying 404 pages (Not Found)
 */

get_header();
?>

<section class="error-404-section">
    <div class="error-404-background"></div>
    <div class="error-404-content">
        <span class="error-404-label">ПОМИЛКА</span>
        <h1 class="error-404-title">404</h1>
        <p class="error-404-subtitle">Сторінку не знайдено</p>
        <p class="error-404-text">На жаль, сторінка, яку ви шукаєте, не існує або була переміщена.</p>
        <div class="error-404-buttons">
            <a href="<?php echo home_url('/'); ?>" class="error-404-btn error-404-btn-primary">На головну</a>
            <a href="<?php echo home_url('/contact'); ?>" class="error-404-btn error-404-btn-secondary">Зв'язатися з нами</a>
        </div>
    </div>
    <div class="error-404-decoration">
        <span class="error-404-deco-text">PAGE NOT FOUND</span>
    </div>
</section>

<?php get_footer(); ?>

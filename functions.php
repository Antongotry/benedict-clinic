<?php
/**
 * Dr. Rosenberg Clinic Theme Functions
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Theme Setup
 */
function rosenberg_theme_setup() {
    // Add default posts and comments RSS feed links to head
    add_theme_support('automatic-feed-links');
    
    // Let WordPress manage the document title
    add_theme_support('title-tag');
    
    // Enable support for Post Thumbnails
    add_theme_support('post-thumbnails');
    
    // Custom image sizes
    add_image_size('hero-image', 1920, 1080, true);
    add_image_size('procedure-image', 800, 600, true);
    add_image_size('gallery-before-after', 600, 600, true);
    add_image_size('surgeon-portrait', 400, 500, true);
    
    // Register navigation menus
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'rosenberg-clinic'),
        'footer-procedures' => __('Footer Procedures Menu', 'rosenberg-clinic'),
        'footer-practice' => __('Footer Practice Menu', 'rosenberg-clinic'),
        'footer-hair' => __('Footer Hair Restoration Menu', 'rosenberg-clinic'),
    ));
    
    // Add support for HTML5 markup
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));
    
    // Add theme support for custom logo
    add_theme_support('custom-logo', array(
        'height'      => 80,
        'width'       => 300,
        'flex-height' => true,
        'flex-width'  => true,
    ));
}
add_action('after_setup_theme', 'rosenberg_theme_setup');

/**
 * Enqueue scripts and styles
 */
function rosenberg_enqueue_scripts() {
    // Google Fonts
    wp_enqueue_style('rosenberg-fonts', 'https://fonts.googleapis.com/css2?family=Playfair+Display:wght@300;400;700&family=Inter:wght@300;400;700&family=Rubik:wght@300;400;700&display=swap', array(), null);
    
    // Main theme stylesheet
    wp_enqueue_style('rosenberg-theme-style', get_template_directory_uri() . '/assets/css/theme.css', array(), time());
    
    // Menu overlay styles
    wp_enqueue_style('rosenberg-menu-overlay', get_template_directory_uri() . '/assets/css/menu-overlay.css', array('rosenberg-theme-style'), time());
    
    // Hero block styles
    wp_enqueue_style('rosenberg-hero-styles', get_template_directory_uri() . '/assets/css/hero-styles.css', array('rosenberg-theme-style'), time());
    
    // Lenis Smooth Scroll
    wp_enqueue_script('lenis', 'https://cdn.jsdelivr.net/gh/studio-freight/lenis@1.0.27/bundled/lenis.min.js', array(), '1.0.27', false);
    
    // Lenis initialization
    wp_enqueue_script('rosenberg-lenis', get_template_directory_uri() . '/assets/js/lenis-init.js', array('lenis'), time(), true);
    
    // Overlay menu JavaScript
    wp_enqueue_script('rosenberg-overlay-menu', get_template_directory_uri() . '/assets/js/overlay-menu.js', array(), time(), true);
    
    // Main JavaScript
    wp_enqueue_script('rosenberg-main-script', get_template_directory_uri() . '/assets/js/main.js', array(), time(), true);
    
    // Header scroll behavior (transparent -> solid)
    wp_enqueue_script('rosenberg-header-scroll', get_template_directory_uri() . '/assets/js/header-scroll.js', array(), time(), true);
    
    // Light Panels Landing Page JavaScript
    if (is_front_page()) {
        wp_enqueue_script('light-panels-script', get_template_directory_uri() . '/assets/js/light-panels.js', array(), time(), true);
    }
    
    // Localize script for AJAX
    wp_localize_script('rosenberg-main-script', 'rosenbergAjax', array(
        'ajaxurl' => admin_url('admin-ajax.php'),
        'nonce' => wp_create_nonce('rosenberg-nonce')
    ));
}
add_action('wp_enqueue_scripts', 'rosenberg_enqueue_scripts');

/**
 * Register widget areas
 */
function rosenberg_widgets_init() {
    register_sidebar(array(
        'name'          => __('Footer Widget Area 1', 'rosenberg-clinic'),
        'id'            => 'footer-1',
        'description'   => __('Add widgets here to appear in footer.', 'rosenberg-clinic'),
        'before_widget' => '<div id="%1$s" class="footer-widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="footer-widget-title">',
        'after_title'   => '</h3>',
    ));
}
add_action('widgets_init', 'rosenberg_widgets_init');

/**
 * Register Custom Post Types
 */
function rosenberg_register_post_types() {
    // Procedures Post Type
    register_post_type('procedure', array(
        'labels' => array(
            'name' => __('Procedures', 'rosenberg-clinic'),
            'singular_name' => __('Procedure', 'rosenberg-clinic'),
        ),
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-heart',
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
        'rewrite' => array('slug' => 'procedures'),
    ));
    
    // Gallery Post Type
    register_post_type('gallery', array(
        'labels' => array(
            'name' => __('Gallery', 'rosenberg-clinic'),
            'singular_name' => __('Gallery Item', 'rosenberg-clinic'),
        ),
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-format-gallery',
        'supports' => array('title', 'thumbnail'),
        'rewrite' => array('slug' => 'gallery'),
    ));
    
    // Team Members Post Type
    register_post_type('team', array(
        'labels' => array(
            'name' => __('Team Members', 'rosenberg-clinic'),
            'singular_name' => __('Team Member', 'rosenberg-clinic'),
        ),
        'public' => true,
        'menu_icon' => 'dashicons-groups',
        'supports' => array('title', 'editor', 'thumbnail'),
        'rewrite' => array('slug' => 'team'),
    ));
}
add_action('init', 'rosenberg_register_post_types');

/**
 * Add custom meta boxes
 */
function rosenberg_add_meta_boxes() {
    // Gallery Before/After Images
    add_meta_box(
        'gallery_images',
        __('Before & After Images', 'rosenberg-clinic'),
        'rosenberg_gallery_meta_box',
        'gallery',
        'normal',
        'high'
    );
    
    // Team Member Info
    add_meta_box(
        'team_info',
        __('Team Member Information', 'rosenberg-clinic'),
        'rosenberg_team_meta_box',
        'team',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'rosenberg_add_meta_boxes');

function rosenberg_gallery_meta_box($post) {
    wp_nonce_field('rosenberg_gallery_meta', 'rosenberg_gallery_nonce');
    $before_image = get_post_meta($post->ID, '_before_image', true);
    $after_image = get_post_meta($post->ID, '_after_image', true);
    ?>
    <p>
        <label><?php _e('Before Image URL:', 'rosenberg-clinic'); ?></label><br>
        <input type="text" name="before_image" value="<?php echo esc_attr($before_image); ?>" style="width: 100%;">
    </p>
    <p>
        <label><?php _e('After Image URL:', 'rosenberg-clinic'); ?></label><br>
        <input type="text" name="after_image" value="<?php echo esc_attr($after_image); ?>" style="width: 100%;">
    </p>
    <?php
}

function rosenberg_team_meta_box($post) {
    wp_nonce_field('rosenberg_team_meta', 'rosenberg_team_nonce');
    $specialty = get_post_meta($post->ID, '_specialty', true);
    ?>
    <p>
        <label><?php _e('Specialty/Title:', 'rosenberg-clinic'); ?></label><br>
        <input type="text" name="specialty" value="<?php echo esc_attr($specialty); ?>" style="width: 100%;">
    </p>
    <?php
}

/**
 * Save meta box data
 */
function rosenberg_save_meta_boxes($post_id) {
    // Gallery meta
    if (isset($_POST['rosenberg_gallery_nonce']) && wp_verify_nonce($_POST['rosenberg_gallery_nonce'], 'rosenberg_gallery_meta')) {
        if (isset($_POST['before_image'])) {
            update_post_meta($post_id, '_before_image', sanitize_text_field($_POST['before_image']));
        }
        if (isset($_POST['after_image'])) {
            update_post_meta($post_id, '_after_image', sanitize_text_field($_POST['after_image']));
        }
    }
    
    // Team meta
    if (isset($_POST['rosenberg_team_nonce']) && wp_verify_nonce($_POST['rosenberg_team_nonce'], 'rosenberg_team_meta')) {
        if (isset($_POST['specialty'])) {
            update_post_meta($post_id, '_specialty', sanitize_text_field($_POST['specialty']));
        }
    }
}
add_action('save_post', 'rosenberg_save_meta_boxes');

/**
 * Contact Form 7 Support
 */
function rosenberg_cf7_support() {
    if (function_exists('wpcf7_enqueue_scripts')) {
        return true;
    }
    return false;
}

/**
 * Fallback menu for primary navigation
 */
function rosenberg_fallback_menu() {
    echo '<ul class="primary-menu">';
    echo '<li><a href="' . home_url('/') . '">Home</a></li>';
    echo '<li><a href="' . home_url('/dr-benedict') . '">Dr. Benedict</a></li>';
    echo '<li><a href="' . home_url('/about') . '">About</a></li>';
    echo '<li><a href="' . home_url('/gallery') . '">Gallery</a></li>';
    echo '<li><a href="' . home_url('/contact') . '">Contact</a></li>';
    echo '</ul>';
}

/**
 * Disable all caching for development
 */
function benedict_disable_all_cache() {
    // Disable WordPress object cache
    wp_cache_flush();
    
    // Disable browser cache headers
    if (!headers_sent()) {
        header('Cache-Control: no-cache, no-store, must-revalidate, max-age=0');
        header('Pragma: no-cache');
        header('Expires: 0');
        header('Last-Modified: ' . gmdate('D, d M Y H:i:s') . ' GMT');
    }
    
    // Disable WP Super Cache if active
    if (function_exists('wp_cache_clear_cache')) {
        wp_cache_clear_cache();
    }
    
    // Disable W3 Total Cache if active
    if (function_exists('w3tc_flush_all')) {
        w3tc_flush_all();
    }
    
    // Disable WP Rocket if active
    if (function_exists('rocket_clean_domain')) {
        rocket_clean_domain();
    }
}
add_action('init', 'benedict_disable_all_cache', 1);

/**
 * Add version timestamp to CSS/JS files to prevent caching
 */
function benedict_asset_version($src) {
    if (strpos($src, 'ver=') === false) {
        $src = add_query_arg('ver', time(), $src);
    } else {
        $src = preg_replace('/ver=([^&]+)/', 'ver=' . time(), $src);
    }
    return $src;
}
add_filter('style_loader_src', 'benedict_asset_version', 10, 1);
add_filter('script_loader_src', 'benedict_asset_version', 10, 1);

/**
 * Disable WordPress cache
 */
if (!defined('WP_CACHE')) {
    define('WP_CACHE', false);
}

/**
 * Force refresh CSS/JS on every load
 */
function benedict_nocache_meta() {
    echo '<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">' . "\n";
    echo '<meta http-equiv="Pragma" content="no-cache">' . "\n";
    echo '<meta http-equiv="Expires" content="0">' . "\n";
}
add_action('wp_head', 'benedict_nocache_meta', 1);
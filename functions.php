<?php

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

function benedict_theme_setup() {
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
        'primary' => __('Primary Menu', 'benedict-clinic'),
        'footer-procedures' => __('Footer Procedures Menu', 'benedict-clinic'),
        'footer-practice' => __('Footer Practice Menu', 'benedict-clinic'),
        'footer-hair' => __('Footer Hair Restoration Menu', 'benedict-clinic'),
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
add_action('after_setup_theme', 'benedict_theme_setup');

function benedict_enqueue_scripts() {
    // Google Fonts
    wp_enqueue_style('benedict-fonts', 'https://fonts.googleapis.com/css2?family=Playfair+Display:wght@300;400;700&family=Inter:wght@300;400;700&family=Rubik:wght@300;400;700&display=swap', array(), null);
    
    // Main theme stylesheet
    wp_enqueue_style('benedict-theme-style', get_template_directory_uri() . '/assets/css/theme.css', array(), time());
    
    // Overlay menu JavaScript
    wp_enqueue_script('benedict-overlay-menu', get_template_directory_uri() . '/assets/js/overlay-menu.js', array(), time(), true);
    
    // Main JavaScript
    wp_enqueue_script('benedict-main-script', get_template_directory_uri() . '/assets/js/main.js', array(), time(), true);
    
    // Header scroll behavior (transparent -> solid)
    wp_enqueue_script('benedict-header-scroll', get_template_directory_uri() . '/assets/js/header-scroll.js', array(), time(), true);
    
    
    // Localize script for AJAX
    wp_localize_script('benedict-main-script', 'benedictAjax', array(
        'ajaxurl' => admin_url('admin-ajax.php'),
        'nonce' => wp_create_nonce('benedict-nonce')
    ));
}
add_action('wp_enqueue_scripts', 'benedict_enqueue_scripts');

function benedict_widgets_init() {
    register_sidebar(array(
        'name'          => __('Footer Widget Area 1', 'benedict-clinic'),
        'id'            => 'footer-1',
        'description'   => __('Add widgets here to appear in footer.', 'benedict-clinic'),
        'before_widget' => '<div id="%1$s" class="footer-widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="footer-widget-title">',
        'after_title'   => '</h3>',
    ));
}
add_action('widgets_init', 'benedict_widgets_init');

function benedict_register_post_types() {
    // Procedures Post Type
    register_post_type('procedure', array(
        'labels' => array(
            'name' => __('Procedures', 'benedict-clinic'),
            'singular_name' => __('Procedure', 'benedict-clinic'),
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
            'name' => __('Gallery', 'benedict-clinic'),
            'singular_name' => __('Gallery Item', 'benedict-clinic'),
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
            'name' => __('Team Members', 'benedict-clinic'),
            'singular_name' => __('Team Member', 'benedict-clinic'),
        ),
        'public' => true,
        'menu_icon' => 'dashicons-groups',
        'supports' => array('title', 'editor', 'thumbnail'),
        'rewrite' => array('slug' => 'team'),
    ));
}
add_action('init', 'benedict_register_post_types');

function benedict_add_meta_boxes() {
    // Gallery Before/After Images
    add_meta_box(
        'gallery_images',
        __('Before & After Images', 'benedict-clinic'),
        'benedict_gallery_meta_box',
        'gallery',
        'normal',
        'high'
    );
    
    // Team Member Info
    add_meta_box(
        'team_info',
        __('Team Member Information', 'benedict-clinic'),
        'benedict_team_meta_box',
        'team',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'benedict_add_meta_boxes');

function benedict_gallery_meta_box($post) {
    wp_nonce_field('benedict_gallery_meta', 'benedict_gallery_nonce');
    $before_image = get_post_meta($post->ID, '_before_image', true);
    $after_image = get_post_meta($post->ID, '_after_image', true);
    ?>
    <p>
        <label><?php _e('Before Image URL:', 'benedict-clinic'); ?></label><br>
        <input type="text" name="before_image" value="<?php echo esc_attr($before_image); ?>" style="width: 100%;">
    </p>
    <p>
        <label><?php _e('After Image URL:', 'benedict-clinic'); ?></label><br>
        <input type="text" name="after_image" value="<?php echo esc_attr($after_image); ?>" style="width: 100%;">
    </p>
    <?php
}

function benedict_team_meta_box($post) {
    wp_nonce_field('benedict_team_meta', 'benedict_team_nonce');
    $specialty = get_post_meta($post->ID, '_specialty', true);
    ?>
    <p>
        <label><?php _e('Specialty/Title:', 'benedict-clinic'); ?></label><br>
        <input type="text" name="specialty" value="<?php echo esc_attr($specialty); ?>" style="width: 100%;">
    </p>
    <?php
}

function benedict_save_meta_boxes($post_id) {
    // Gallery meta
    if (isset($_POST['benedict_gallery_nonce']) && wp_verify_nonce($_POST['benedict_gallery_nonce'], 'benedict_gallery_meta')) {
        if (isset($_POST['before_image'])) {
            update_post_meta($post_id, '_before_image', sanitize_text_field($_POST['before_image']));
        }
        if (isset($_POST['after_image'])) {
            update_post_meta($post_id, '_after_image', sanitize_text_field($_POST['after_image']));
        }
    }
    
    // Team meta
    if (isset($_POST['benedict_team_nonce']) && wp_verify_nonce($_POST['benedict_team_nonce'], 'benedict_team_meta')) {
        if (isset($_POST['specialty'])) {
            update_post_meta($post_id, '_specialty', sanitize_text_field($_POST['specialty']));
        }
    }
}
add_action('save_post', 'benedict_save_meta_boxes');

function benedict_cf7_support() {
    if (function_exists('wpcf7_enqueue_scripts')) {
        return true;
    }
    return false;
}

function benedict_fallback_menu() {
    echo '<ul class="primary-menu">';
    echo '<li><a href="' . home_url('/') . '">Home</a></li>';
    echo '<li><a href="' . home_url('/dr-benedict') . '">Dr. Benedict</a></li>';
    echo '<li><a href="' . home_url('/about') . '">About</a></li>';
    echo '<li><a href="' . home_url('/gallery') . '">Gallery</a></li>';
    echo '<li><a href="' . home_url('/contact') . '">Contact</a></li>';
    echo '</ul>';
}



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

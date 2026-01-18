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
    
    // Generate unique cache buster
    $cache_buster = time() . '_' . rand(10000, 99999);
    
    // Main theme stylesheet
    wp_enqueue_style('rosenberg-theme-style', get_template_directory_uri() . '/assets/css/theme.css?v=' . $cache_buster, array(), null);
    
    // Menu overlay styles
    wp_enqueue_style('rosenberg-menu-overlay', get_template_directory_uri() . '/assets/css/menu-overlay.css?v=' . $cache_buster, array('rosenberg-theme-style'), null);
    
    // Hero block styles
    wp_enqueue_style('rosenberg-hero-styles', get_template_directory_uri() . '/assets/css/hero-styles.css?v=' . $cache_buster, array('rosenberg-theme-style'), null);
    
    // GSAP + ScrollTrigger
    wp_enqueue_script('gsap', 'https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js', array(), '3.12.5', false);
    wp_enqueue_script('gsap-scrolltrigger', 'https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollTrigger.min.js', array('gsap'), '3.12.5', false);
    
    // Lenis Smooth Scroll
    wp_enqueue_script('lenis', 'https://cdn.jsdelivr.net/gh/studio-freight/lenis@1.0.27/bundled/lenis.min.js', array(), '1.0.27', false);
    
    // Lenis initialization (depends on GSAP + ScrollTrigger)
    wp_enqueue_script('rosenberg-lenis', get_template_directory_uri() . '/assets/js/lenis-init.js', array('lenis', 'gsap', 'gsap-scrolltrigger'), time(), true);
    
    // Generate unique cache buster for JS
    $js_cache_buster = time() . '_' . rand(10000, 99999);
    
    // Overlay menu JavaScript
    wp_enqueue_script('rosenberg-overlay-menu', get_template_directory_uri() . '/assets/js/overlay-menu.js?v=' . $js_cache_buster, array(), null, true);
    
    // Main JavaScript
    wp_enqueue_script('rosenberg-main-script', get_template_directory_uri() . '/assets/js/main.js?v=' . $js_cache_buster, array(), null, true);
    
    // Header scroll behavior (transparent -> solid)
    wp_enqueue_script('rosenberg-header-scroll', get_template_directory_uri() . '/assets/js/header-scroll.js?v=' . $js_cache_buster, array(), null, true);
    
    // Swiper for certificates slider
    if (is_front_page()) {
        wp_enqueue_style('swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css', array(), '11');
        wp_enqueue_script('swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array(), '11', true);
    }
    
    // GSAP + ScrollTrigger
    wp_enqueue_script('gsap', 'https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js?v=' . $js_cache_buster, array(), null, false);
    wp_enqueue_script('gsap-scrolltrigger', 'https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollTrigger.min.js?v=' . $js_cache_buster, array('gsap'), null, false);
    
    // Lenis Smooth Scroll
    wp_enqueue_script('lenis', 'https://cdn.jsdelivr.net/gh/studio-freight/lenis@1.0.27/bundled/lenis.min.js?v=' . $js_cache_buster, array(), null, false);
    
    // Lenis initialization (depends on GSAP + ScrollTrigger)
    wp_enqueue_script('rosenberg-lenis', get_template_directory_uri() . '/assets/js/lenis-init.js?v=' . $js_cache_buster, array('lenis', 'gsap', 'gsap-scrolltrigger'), null, true);
    
    // Light Panels Landing Page JavaScript
    if (is_front_page()) {
        wp_enqueue_script('light-panels-script', get_template_directory_uri() . '/assets/js/light-panels.js?v=' . $js_cache_buster, array(), null, true);
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
 * Disable all caching for development - AGGRESSIVE VERSION
 */
function benedict_disable_all_cache() {
    // Disable WordPress object cache
    if (function_exists('wp_cache_flush')) {
        wp_cache_flush();
    }
    
    // Disable browser cache headers - VERY AGGRESSIVE
    if (!headers_sent()) {
        header('Cache-Control: no-cache, no-store, must-revalidate, max-age=0, private');
        header('Pragma: no-cache');
        header('Expires: Wed, 11 Jan 1984 05:00:00 GMT');
        header('Last-Modified: ' . gmdate('D, d M Y H:i:s') . ' GMT');
        header('ETag: "' . md5(microtime()) . '"');
        header('X-Accel-Expires: 0');
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
    
    // Disable LiteSpeed Cache if active
    if (defined('LSCWP_V')) {
        do_action('litespeed_purge_all');
    }
    
    // Disable Autoptimize cache
    if (class_exists('autoptimizeCache')) {
        autoptimizeCache::clearall();
    }
}

// Run at multiple hooks to ensure it works
add_action('init', 'benedict_disable_all_cache', 1);
add_action('template_redirect', 'benedict_disable_all_cache', 1);
add_action('send_headers', 'benedict_disable_all_cache', 1);

/**
 * Add version timestamp to CSS/JS files to prevent caching - AGGRESSIVE
 */
function benedict_asset_version($src) {
    if (empty($src)) {
        return $src;
    }
    
    // Add microtime for maximum uniqueness
    $version = time() . '_' . rand(1000, 9999);
    
    if (strpos($src, 'ver=') === false) {
        $src = add_query_arg('ver', $version, $src);
    } else {
        $src = preg_replace('/ver=([^&]+)/', 'ver=' . $version, $src);
    }
    
    // Add cache buster
    $src = add_query_arg('nocache', $version, $src);
    
    return $src;
}
add_filter('style_loader_src', 'benedict_asset_version', 999, 1);
add_filter('script_loader_src', 'benedict_asset_version', 999, 1);

/**
 * Disable WordPress cache
 */
if (!defined('WP_CACHE')) {
    define('WP_CACHE', false);
}

/**
 * Force refresh CSS/JS on every load - AGGRESSIVE
 */
function benedict_nocache_meta() {
    $timestamp = time();
    echo '<!-- Cache Buster: ' . $timestamp . ' -->' . "\n";
    echo '<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate, max-age=0, private">' . "\n";
    echo '<meta http-equiv="Pragma" content="no-cache">' . "\n";
    echo '<meta http-equiv="Expires" content="0">' . "\n";
    echo '<meta http-equiv="Last-Modified" content="' . gmdate('D, d M Y H:i:s') . ' GMT">' . "\n";
    echo '<script>if (window.navigator && navigator.serviceWorker) { navigator.serviceWorker.getRegistrations().then(function(registrations) { for(let registration of registrations) { registration.unregister(); } }); }</script>' . "\n";
}
add_action('wp_head', 'benedict_nocache_meta', 1);

/**
 * Disable service worker caching
 */
function benedict_disable_service_worker() {
    echo '<script>
        if ("serviceWorker" in navigator) {
            navigator.serviceWorker.getRegistrations().then(function(registrations) {
                for(let registration of registrations) {
                    registration.unregister();
                }
            });
        }
    </script>' . "\n";
}
add_action('wp_footer', 'benedict_disable_service_worker', 999);

/**
 * Register Form Submissions Post Type
 */
function benedict_register_submissions_post_type() {
    register_post_type('form_submission', array(
        'labels' => array(
            'name' => 'Заявки',
            'singular_name' => 'Заявка',
            'menu_name' => 'Заявки з форм',
            'all_items' => 'Всі заявки',
            'view_item' => 'Переглянути',
            'search_items' => 'Пошук заявок',
            'not_found' => 'Заявок не знайдено',
        ),
        'public' => false,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_icon' => 'dashicons-email-alt',
        'supports' => array('title'),
        'capability_type' => 'post',
    ));
}
add_action('init', 'benedict_register_submissions_post_type');

/**
 * Add custom columns to submissions list
 */
function benedict_submissions_columns($columns) {
    $columns = array(
        'cb' => '<input type="checkbox" />',
        'title' => 'Ім\'я',
        'phone' => 'Телефон',
        'email' => 'Email',
        'form_type' => 'Тип форми',
        'date' => 'Дата',
    );
    return $columns;
}
add_filter('manage_form_submission_posts_columns', 'benedict_submissions_columns');

function benedict_submissions_column_data($column, $post_id) {
    switch ($column) {
        case 'phone':
            echo esc_html(get_post_meta($post_id, '_submission_phone', true));
            break;
        case 'email':
            echo esc_html(get_post_meta($post_id, '_submission_email', true));
            break;
        case 'form_type':
            echo esc_html(get_post_meta($post_id, '_submission_form_type', true));
            break;
    }
}
add_action('manage_form_submission_posts_custom_column', 'benedict_submissions_column_data', 10, 2);

/**
 * Add meta box to show submission details
 */
function benedict_submission_meta_box() {
    add_meta_box(
        'submission_details',
        'Деталі заявки',
        'benedict_submission_meta_box_html',
        'form_submission',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'benedict_submission_meta_box');

function benedict_submission_meta_box_html($post) {
    $phone = get_post_meta($post->ID, '_submission_phone', true);
    $email = get_post_meta($post->ID, '_submission_email', true);
    $message = get_post_meta($post->ID, '_submission_message', true);
    $form_type = get_post_meta($post->ID, '_submission_form_type', true);
    $service = get_post_meta($post->ID, '_submission_service', true);
    ?>
    <table class="form-table">
        <tr>
            <th>Телефон:</th>
            <td><a href="tel:<?php echo esc_attr($phone); ?>"><?php echo esc_html($phone); ?></a></td>
        </tr>
        <?php if ($email) : ?>
        <tr>
            <th>Email:</th>
            <td><a href="mailto:<?php echo esc_attr($email); ?>"><?php echo esc_html($email); ?></a></td>
        </tr>
        <?php endif; ?>
        <?php if ($service) : ?>
        <tr>
            <th>Послуга:</th>
            <td><?php echo esc_html($service); ?></td>
        </tr>
        <?php endif; ?>
        <?php if ($message) : ?>
        <tr>
            <th>Повідомлення:</th>
            <td><?php echo nl2br(esc_html($message)); ?></td>
        </tr>
        <?php endif; ?>
        <tr>
            <th>Тип форми:</th>
            <td><?php echo esc_html($form_type); ?></td>
        </tr>
    </table>
    <?php
}

/**
 * AJAX Handler for Form Submissions
 */
function benedict_handle_form_submission() {
    // Verify nonce
    if (!isset($_POST['nonce']) || !wp_verify_nonce($_POST['nonce'], 'rosenberg-nonce')) {
        wp_send_json_error(array('message' => 'Security check failed'));
    }
    
    // Get form data
    $name = isset($_POST['name']) ? sanitize_text_field($_POST['name']) : '';
    $phone = isset($_POST['phone']) ? sanitize_text_field($_POST['phone']) : '';
    $email = isset($_POST['email']) ? sanitize_email($_POST['email']) : '';
    $message = isset($_POST['message']) ? sanitize_textarea_field($_POST['message']) : '';
    $form_type = isset($_POST['form_type']) ? sanitize_text_field($_POST['form_type']) : 'Загальна форма';
    $service = isset($_POST['service']) ? sanitize_text_field($_POST['service']) : '';
    
    // Validate required fields
    if (empty($name) || empty($phone)) {
        wp_send_json_error(array('message' => 'Будь ласка, заповніть обов\'язкові поля'));
    }
    
    // Create submission post
    $post_id = wp_insert_post(array(
        'post_title' => $name,
        'post_type' => 'form_submission',
        'post_status' => 'publish',
    ));
    
    if ($post_id) {
        // Save meta data
        update_post_meta($post_id, '_submission_phone', $phone);
        update_post_meta($post_id, '_submission_email', $email);
        update_post_meta($post_id, '_submission_message', $message);
        update_post_meta($post_id, '_submission_form_type', $form_type);
        update_post_meta($post_id, '_submission_service', $service);
        
        // Send email to admin
        $admin_email = get_option('admin_email');
        $subject = 'Нова заявка з сайту: ' . $form_type;
        
        $email_body = "Нова заявка з сайту Benedict Clinic\n\n";
        $email_body .= "Тип форми: {$form_type}\n";
        $email_body .= "Ім'я: {$name}\n";
        $email_body .= "Телефон: {$phone}\n";
        if ($email) {
            $email_body .= "Email: {$email}\n";
        }
        if ($service) {
            $email_body .= "Послуга: {$service}\n";
        }
        if ($message) {
            $email_body .= "\nПовідомлення:\n{$message}\n";
        }
        $email_body .= "\n---\nДата: " . date('d.m.Y H:i');
        
        $headers = array('Content-Type: text/plain; charset=UTF-8');
        
        wp_mail($admin_email, $subject, $email_body, $headers);
        
        wp_send_json_success(array('message' => 'Дякуємо! Ваша заявка прийнята.'));
    } else {
        wp_send_json_error(array('message' => 'Помилка збереження'));
    }
}
add_action('wp_ajax_benedict_form_submit', 'benedict_handle_form_submission');
add_action('wp_ajax_nopriv_benedict_form_submit', 'benedict_handle_form_submission');

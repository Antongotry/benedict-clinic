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
    
    // Lenis Smooth Scroll
    wp_enqueue_script('lenis', 'https://cdn.jsdelivr.net/gh/studio-freight/lenis@1.0.27/bundled/lenis.min.js', array(), '1.0.27', false);
    
    // Lenis initialization
    wp_enqueue_script('rosenberg-lenis', get_template_directory_uri() . '/assets/js/lenis-init.js', array('lenis'), time(), true);
    
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
    
    // Lenis Smooth Scroll
    wp_enqueue_script('lenis', 'https://cdn.jsdelivr.net/gh/studio-freight/lenis@1.0.27/bundled/lenis.min.js?v=' . $js_cache_buster, array(), null, false);
    
    // Lenis initialization
    wp_enqueue_script('rosenberg-lenis', get_template_directory_uri() . '/assets/js/lenis-init.js?v=' . $js_cache_buster, array('lenis'), null, true);
    
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
 * Instagram Integration Functions
 */

/**
 * Register Instagram settings in admin
 */
function rosenberg_instagram_settings_init() {
    register_setting('rosenberg_instagram_settings', 'rosenberg_instagram_enabled');
    register_setting('rosenberg_instagram_settings', 'rosenberg_instagram_access_token');
    register_setting('rosenberg_instagram_settings', 'rosenberg_instagram_user_id');
    register_setting('rosenberg_instagram_settings', 'rosenberg_instagram_username');
    register_setting('rosenberg_instagram_settings', 'rosenberg_instagram_posts_count');
    register_setting('rosenberg_instagram_settings', 'rosenberg_instagram_title');
    register_setting('rosenberg_instagram_settings', 'rosenberg_instagram_subtitle');
    register_setting('rosenberg_instagram_settings', 'rosenberg_instagram_button_text');
    register_setting('rosenberg_instagram_settings', 'rosenberg_instagram_columns_desktop');
    register_setting('rosenberg_instagram_settings', 'rosenberg_instagram_columns_tablet');
    register_setting('rosenberg_instagram_settings', 'rosenberg_instagram_columns_mobile');
    register_setting('rosenberg_instagram_settings', 'rosenberg_instagram_section_order');
    
    add_settings_section(
        'rosenberg_instagram_section',
        __('Основні налаштування', 'rosenberg-clinic'),
        'rosenberg_instagram_section_callback',
        'rosenberg_instagram_settings'
    );
    
    add_settings_section(
        'rosenberg_instagram_api_section',
        __('API Налаштування', 'rosenberg-clinic'),
        'rosenberg_instagram_api_section_callback',
        'rosenberg_instagram_settings'
    );
    
    add_settings_section(
        'rosenberg_instagram_display_section',
        __('Налаштування відображення', 'rosenberg-clinic'),
        'rosenberg_instagram_display_section_callback',
        'rosenberg_instagram_settings'
    );
    
    // Основні налаштування
    add_settings_field(
        'rosenberg_instagram_enabled',
        __('Статус', 'rosenberg-clinic'),
        'rosenberg_instagram_enabled_callback',
        'rosenberg_instagram_settings',
        'rosenberg_instagram_section'
    );
    
    // API налаштування
    add_settings_field(
        'rosenberg_instagram_access_token',
        __('Instagram Access Token', 'rosenberg-clinic'),
        'rosenberg_instagram_access_token_callback',
        'rosenberg_instagram_settings',
        'rosenberg_instagram_api_section'
    );
    
    add_settings_field(
        'rosenberg_instagram_user_id',
        __('Instagram User ID', 'rosenberg-clinic'),
        'rosenberg_instagram_user_id_callback',
        'rosenberg_instagram_settings',
        'rosenberg_instagram_section'
    );
    
    add_settings_field(
        'rosenberg_instagram_username',
        __('Instagram Username', 'rosenberg-clinic'),
        'rosenberg_instagram_username_callback',
        'rosenberg_instagram_settings',
        'rosenberg_instagram_api_section'
    );
    
    add_settings_field(
        'rosenberg_instagram_posts_count',
        __('Кількість постів', 'rosenberg-clinic'),
        'rosenberg_instagram_posts_count_callback',
        'rosenberg_instagram_settings',
        'rosenberg_instagram_api_section'
    );
    
    // Налаштування відображення
    add_settings_field(
        'rosenberg_instagram_title',
        __('Заголовок секції', 'rosenberg-clinic'),
        'rosenberg_instagram_title_callback',
        'rosenberg_instagram_settings',
        'rosenberg_instagram_display_section'
    );
    
    add_settings_field(
        'rosenberg_instagram_subtitle',
        __('Підзаголовок', 'rosenberg-clinic'),
        'rosenberg_instagram_subtitle_callback',
        'rosenberg_instagram_settings',
        'rosenberg_instagram_display_section'
    );
    
    add_settings_field(
        'rosenberg_instagram_button_text',
        __('Текст кнопки', 'rosenberg-clinic'),
        'rosenberg_instagram_button_text_callback',
        'rosenberg_instagram_settings',
        'rosenberg_instagram_display_section'
    );
    
    add_settings_field(
        'rosenberg_instagram_columns_desktop',
        __('Колонок на десктопі', 'rosenberg-clinic'),
        'rosenberg_instagram_columns_desktop_callback',
        'rosenberg_instagram_settings',
        'rosenberg_instagram_display_section'
    );
    
    add_settings_field(
        'rosenberg_instagram_columns_tablet',
        __('Колонок на планшеті', 'rosenberg-clinic'),
        'rosenberg_instagram_columns_tablet_callback',
        'rosenberg_instagram_settings',
        'rosenberg_instagram_display_section'
    );
    
    add_settings_field(
        'rosenberg_instagram_columns_mobile',
        __('Колонок на мобільному', 'rosenberg-clinic'),
        'rosenberg_instagram_columns_mobile_callback',
        'rosenberg_instagram_settings',
        'rosenberg_instagram_display_section'
    );
}
add_action('admin_init', 'rosenberg_instagram_settings_init');

function rosenberg_instagram_section_callback() {
    echo '<p>' . __('Налаштуйте інтеграцію Instagram. Секцію можна повністю керувати з адмін-панелі.', 'rosenberg-clinic') . '</p>';
}

function rosenberg_instagram_enabled_callback() {
    $enabled = get_option('rosenberg_instagram_enabled', '1');
    echo '<label>';
    echo '<input type="checkbox" name="rosenberg_instagram_enabled" value="1" ' . checked('1', $enabled, false) . ' />';
    echo ' ' . __('Увімкнути Instagram секцію на головній сторінці', 'rosenberg-clinic');
    echo '</label>';
}

function rosenberg_instagram_api_section_callback() {
    echo '<p>' . __('Налаштування для підключення до Instagram API. Потрібен Access Token та User ID.', 'rosenberg-clinic') . '</p>';
    echo '<p><strong>' . __('Як отримати Access Token:', 'rosenberg-clinic') . '</strong></p>';
    echo '<ol style="margin-left: 20px;">';
    echo '<li>' . __('Перейдіть на', 'rosenberg-clinic') . ' <a href="https://developers.facebook.com/apps/" target="_blank">Facebook Developers</a></li>';
    echo '<li>' . __('Створіть новий додаток або використайте існуючий', 'rosenberg-clinic') . '</li>';
    echo '<li>' . __('Додайте продукт "Instagram Basic Display"', 'rosenberg-clinic') . '</li>';
    echo '<li>' . __('Згенеруйте Access Token та User ID', 'rosenberg-clinic') . '</li>';
    echo '</ol>';
}

function rosenberg_instagram_display_section_callback() {
    echo '<p>' . __('Налаштуйте як буде виглядати Instagram секція на сайті.', 'rosenberg-clinic') . '</p>';
}

function rosenberg_instagram_access_token_callback() {
    $token = get_option('rosenberg_instagram_access_token', '');
    echo '<input type="text" name="rosenberg_instagram_access_token" value="' . esc_attr($token) . '" style="width: 100%; max-width: 600px;" class="regular-text" />';
    echo '<p class="description">' . __('Access Token від Instagram Basic Display API', 'rosenberg-clinic') . '</p>';
}

function rosenberg_instagram_user_id_callback() {
    $user_id = get_option('rosenberg_instagram_user_id', '');
    echo '<input type="text" name="rosenberg_instagram_user_id" value="' . esc_attr($user_id) . '" style="width: 100%; max-width: 600px;" class="regular-text" />';
    echo '<p class="description">' . __('Instagram User ID (числовий ідентифікатор)', 'rosenberg-clinic') . '</p>';
}

function rosenberg_instagram_username_callback() {
    $username = get_option('rosenberg_instagram_username', '');
    echo '<input type="text" name="rosenberg_instagram_username" value="' . esc_attr($username) . '" style="width: 100%; max-width: 600px;" class="regular-text" placeholder="username (без @)" />';
    echo '<p class="description">' . __('Instagram username без символу @ (використовується для посилання "Підписатись")', 'rosenberg-clinic') . '</p>';
}

function rosenberg_instagram_posts_count_callback() {
    $count = get_option('rosenberg_instagram_posts_count', 6);
    echo '<input type="number" name="rosenberg_instagram_posts_count" value="' . esc_attr($count) . '" min="3" max="12" class="small-text" />';
    echo '<p class="description">' . __('Кількість постів для відображення (3-12)', 'rosenberg-clinic') . '</p>';
}

function rosenberg_instagram_title_callback() {
    $title = get_option('rosenberg_instagram_title', 'Слідкуйте за нами в Instagram');
    echo '<input type="text" name="rosenberg_instagram_title" value="' . esc_attr($title) . '" style="width: 100%; max-width: 600px;" class="regular-text" />';
    echo '<p class="description">' . __('Основний заголовок секції', 'rosenberg-clinic') . '</p>';
}

function rosenberg_instagram_subtitle_callback() {
    $subtitle = get_option('rosenberg_instagram_subtitle', 'Дізнавайтесь останні новини, корисні поради та зворотний зв\'язок від наших пацієнтів');
    echo '<textarea name="rosenberg_instagram_subtitle" rows="3" style="width: 100%; max-width: 600px;" class="large-text">' . esc_textarea($subtitle) . '</textarea>';
    echo '<p class="description">' . __('Підзаголовок або опис секції', 'rosenberg-clinic') . '</p>';
}

function rosenberg_instagram_button_text_callback() {
    $button_text = get_option('rosenberg_instagram_button_text', 'Підписатись в Instagram');
    echo '<input type="text" name="rosenberg_instagram_button_text" value="' . esc_attr($button_text) . '" style="width: 100%; max-width: 600px;" class="regular-text" />';
    echo '<p class="description">' . __('Текст на кнопці "Підписатись"', 'rosenberg-clinic') . '</p>';
}

function rosenberg_instagram_columns_desktop_callback() {
    $columns = get_option('rosenberg_instagram_columns_desktop', '3');
    echo '<select name="rosenberg_instagram_columns_desktop">';
    for ($i = 2; $i <= 6; $i++) {
        echo '<option value="' . $i . '" ' . selected($columns, $i, false) . '>' . $i . '</option>';
    }
    echo '</select>';
    echo '<p class="description">' . __('Кількість колонок для екранів більше 1024px', 'rosenberg-clinic') . '</p>';
}

function rosenberg_instagram_columns_tablet_callback() {
    $columns = get_option('rosenberg_instagram_columns_tablet', '2');
    echo '<select name="rosenberg_instagram_columns_tablet">';
    for ($i = 1; $i <= 4; $i++) {
        echo '<option value="' . $i . '" ' . selected($columns, $i, false) . '>' . $i . '</option>';
    }
    echo '</select>';
    echo '<p class="description">' . __('Кількість колонок для планшетів (768-1024px)', 'rosenberg-clinic') . '</p>';
}

function rosenberg_instagram_columns_mobile_callback() {
    $columns = get_option('rosenberg_instagram_columns_mobile', '2');
    echo '<select name="rosenberg_instagram_columns_mobile">';
    for ($i = 1; $i <= 3; $i++) {
        echo '<option value="' . $i . '" ' . selected($columns, $i, false) . '>' . $i . '</option>';
    }
    echo '</select>';
    echo '<p class="description">' . __('Кількість колонок для мобільних пристроїв (до 768px)', 'rosenberg-clinic') . '</p>';
}

/**
 * Add Instagram settings page to admin menu
 */
function rosenberg_instagram_admin_menu() {
    add_options_page(
        __('Instagram Settings', 'rosenberg-clinic'),
        __('Instagram', 'rosenberg-clinic'),
        'manage_options',
        'rosenberg-instagram-settings',
        'rosenberg_instagram_settings_page'
    );
}
add_action('admin_menu', 'rosenberg_instagram_admin_menu');

/**
 * Add admin styles for Instagram settings page
 */
function rosenberg_instagram_admin_styles($hook) {
    if ($hook !== 'settings_page_rosenberg-instagram-settings') {
        return;
    }
    echo '<style>
        .instagram-settings-wrap {
            max-width: 1000px;
        }
        .instagram-settings-form h2 {
            margin-top: 30px;
            padding-bottom: 10px;
            border-bottom: 2px solid #2271b1;
        }
        .instagram-settings-form h2:first-of-type {
            margin-top: 0;
        }
        .instagram-settings-form .form-table th {
            width: 200px;
            padding: 20px 10px 20px 0;
            vertical-align: top;
            font-weight: 600;
        }
        .instagram-settings-form .form-table td {
            padding: 20px 10px;
        }
        .instagram-settings-form .description {
            margin-top: 8px;
            font-style: italic;
            color: #646970;
        }
        .instagram-settings-form .regular-text {
            width: 100%;
            max-width: 600px;
        }
        .instagram-settings-form .large-text {
            width: 100%;
            max-width: 600px;
            resize: vertical;
        }
        .instagram-settings-form select {
            min-width: 100px;
        }
        .instagram-settings-form .small-text {
            width: 80px;
        }
    </style>';
}
add_action('admin_head', 'rosenberg_instagram_admin_styles');

function rosenberg_instagram_settings_page() {
    if (!current_user_can('manage_options')) {
        return;
    }
    ?>
    <div class="wrap instagram-settings-wrap">
        <h1><?php echo esc_html(get_admin_page_title()); ?></h1>
        <?php settings_errors(); ?>
        <form action="options.php" method="post" class="instagram-settings-form">
            <?php
            settings_fields('rosenberg_instagram_settings');
            do_settings_sections('rosenberg_instagram_settings');
            submit_button('Зберегти налаштування');
            ?>
        </form>
        <?php
        // Show preview info
        $enabled = get_option('rosenberg_instagram_enabled', '1');
        if ($enabled === '1') {
            $posts = rosenberg_get_instagram_posts(get_option('rosenberg_instagram_posts_count', 6));
            echo '<div class="notice notice-info" style="margin-top: 20px; max-width: 900px;">';
            echo '<p><strong>' . __('Статус:', 'rosenberg-clinic') . '</strong> ';
            if (!empty($posts)) {
                echo '<span style="color: #46b450;">✓ ' . __('Секція активна, знайдено постів:', 'rosenberg-clinic') . ' ' . count($posts) . '</span>';
            } else {
                $token = get_option('rosenberg_instagram_access_token', '');
                if (empty($token)) {
                    echo '<span style="color: #dc3232;">⚠ ' . __('Необхідно налаштувати Access Token', 'rosenberg-clinic') . '</span>';
                } else {
                    echo '<span style="color: #dc3232;">⚠ ' . __('Не вдалося отримати пости. Перевірте Access Token та User ID', 'rosenberg-clinic') . '</span>';
                }
            }
            echo '</p></div>';
        } else {
            echo '<div class="notice notice-warning" style="margin-top: 20px; max-width: 900px;">';
            echo '<p><strong>' . __('Увага:', 'rosenberg-clinic') . '</strong> ' . __('Instagram секція вимкнена. Увімкніть її для відображення на сайті.', 'rosenberg-clinic') . '</p>';
            echo '</div>';
        }
        ?>
        
        <div class="notice notice-info" style="margin-top: 20px; max-width: 900px;">
            <h3 style="margin-top: 0;"><?php _e('Використання шорткодів', 'rosenberg-clinic'); ?></h3>
            <p><strong><?php _e('Повна секція з заголовком та кнопкою:', 'rosenberg-clinic'); ?></strong></p>
            <code style="display: block; padding: 10px; background: #f5f5f5; margin: 10px 0; border-left: 4px solid #2271b1;">[instagram_section]</code>
            
            <p><strong><?php _e('Тільки сітка постів (без заголовка):', 'rosenberg-clinic'); ?></strong></p>
            <code style="display: block; padding: 10px; background: #f5f5f5; margin: 10px 0; border-left: 4px solid #2271b1;">[instagram_feed]</code>
            
            <p><strong><?php _e('Приклади з параметрами:', 'rosenberg-clinic'); ?></strong></p>
            <ul style="list-style: disc; margin-left: 20px;">
                <li><code>[instagram_section title="Наш Instagram" limit="9" columns_desktop="3"]</code> - з власним заголовком</li>
                <li><code>[instagram_feed limit="6" columns="3"]</code> - тільки сітка з 6 постами</li>
                <li><code>[instagram_section show_header="no" show_button="no"]</code> - без заголовка та кнопки</li>
            </ul>
            
            <p><strong><?php _e('Доступні параметри:', 'rosenberg-clinic'); ?></strong></p>
            <ul style="list-style: disc; margin-left: 20px;">
                <li><code>title</code> - заголовок секції</li>
                <li><code>subtitle</code> - підзаголовок</li>
                <li><code>button_text</code> - текст кнопки</li>
                <li><code>limit</code> - кількість постів (3-12)</li>
                <li><code>columns_desktop</code> - колонки на десктопі (2-6)</li>
                <li><code>columns_tablet</code> - колонки на планшеті (1-4)</li>
                <li><code>columns_mobile</code> - колонки на мобільному (1-3)</li>
                <li><code>show_header</code> - показувати заголовок (yes/no)</li>
                <li><code>show_button</code> - показувати кнопку (yes/no)</li>
            </ul>
            <p><em><?php _e('Якщо параметри не вказані, використовуються значення з налаштувань вище.', 'rosenberg-clinic'); ?></em></p>
        </div>
    </div>
    <?php
}

/**
 * Get Instagram posts from API
 */
function rosenberg_get_instagram_posts($limit = 6) {
    $access_token = get_option('rosenberg_instagram_access_token', '');
    $user_id = get_option('rosenberg_instagram_user_id', '');
    
    if (empty($access_token) || empty($user_id)) {
        return array();
    }
    
    // Check transient cache (cache for 1 hour)
    $cache_key = 'rosenberg_instagram_posts_' . md5($access_token . $user_id . $limit);
    $cached_posts = get_transient($cache_key);
    
    if ($cached_posts !== false) {
        return $cached_posts;
    }
    
    // Try Instagram Basic Display API
    $url = 'https://graph.instagram.com/' . $user_id . '/media?fields=id,caption,media_type,media_url,thumbnail_url,permalink,timestamp&access_token=' . $access_token . '&limit=' . $limit;
    
    $response = wp_remote_get($url, array(
        'timeout' => 15,
        'sslverify' => true
    ));
    
    if (is_wp_error($response)) {
        error_log('Instagram API Error: ' . $response->get_error_message());
        return array();
    }
    
    $body = wp_remote_retrieve_body($response);
    $data = json_decode($body, true);
    
    if (!isset($data['data']) || !is_array($data['data'])) {
        return array();
    }
    
    $posts = array();
    foreach ($data['data'] as $item) {
        $posts[] = array(
            'id' => isset($item['id']) ? $item['id'] : '',
            'caption' => isset($item['caption']) ? wp_trim_words($item['caption'], 20) : '',
            'media_type' => isset($item['media_type']) ? $item['media_type'] : 'IMAGE',
            'media_url' => isset($item['media_url']) ? $item['media_url'] : '',
            'thumbnail_url' => isset($item['thumbnail_url']) ? $item['thumbnail_url'] : (isset($item['media_url']) ? $item['media_url'] : ''),
            'permalink' => isset($item['permalink']) ? $item['permalink'] : '',
            'timestamp' => isset($item['timestamp']) ? $item['timestamp'] : ''
        );
    }
    
    // Cache for 1 hour
    set_transient($cache_key, $posts, HOUR_IN_SECONDS);
    
    return $posts;
}

/**
 * AJAX handler to refresh Instagram posts
 */
function rosenberg_refresh_instagram_posts() {
    check_ajax_referer('rosenberg-nonce', 'nonce');
    
    if (!current_user_can('manage_options')) {
        wp_send_json_error(array('message' => 'Unauthorized'));
        return;
    }
    
    // Clear cache
    global $wpdb;
    $wpdb->query("DELETE FROM {$wpdb->options} WHERE option_name LIKE '_transient_rosenberg_instagram_posts_%'");
    $wpdb->query("DELETE FROM {$wpdb->options} WHERE option_name LIKE '_transient_timeout_rosenberg_instagram_posts_%'");
    
    $limit = get_option('rosenberg_instagram_posts_count', 6);
    $posts = rosenberg_get_instagram_posts($limit);
    
    wp_send_json_success(array('posts' => $posts, 'count' => count($posts)));
}
add_action('wp_ajax_refresh_instagram', 'rosenberg_refresh_instagram_posts');

/**
 * Shortcode to display Instagram feed (just grid)
 */
function rosenberg_instagram_feed_shortcode($atts) {
    $atts = shortcode_atts(array(
        'limit' => '',
        'columns' => ''
    ), $atts);
    
    // Use settings from admin if not specified
    $limit = !empty($atts['limit']) ? intval($atts['limit']) : get_option('rosenberg_instagram_posts_count', 6);
    $columns_desktop = !empty($atts['columns']) ? intval($atts['columns']) : get_option('rosenberg_instagram_columns_desktop', '3');
    $columns_tablet = get_option('rosenberg_instagram_columns_tablet', '2');
    $columns_mobile = get_option('rosenberg_instagram_columns_mobile', '2');
    
    $posts = rosenberg_get_instagram_posts($limit);
    
    if (empty($posts)) {
        return '<div class="instagram-feed-empty">' . __('Instagram пости не знайдено. Перевірте налаштування.', 'rosenberg-clinic') . '</div>';
    }
    
    ob_start();
    ?>
    <div class="instagram-feed-shortcode instagram-feed" 
         data-columns-desktop="<?php echo esc_attr($columns_desktop); ?>"
         data-columns-tablet="<?php echo esc_attr($columns_tablet); ?>"
         data-columns-mobile="<?php echo esc_attr($columns_mobile); ?>"
         style="--columns-desktop: <?php echo esc_attr($columns_desktop); ?>; --columns-tablet: <?php echo esc_attr($columns_tablet); ?>; --columns-mobile: <?php echo esc_attr($columns_mobile); ?>;">
        <?php foreach ($posts as $post): ?>
            <a href="<?php echo esc_url($post['permalink']); ?>" target="_blank" rel="noopener noreferrer" class="instagram-post-card">
                <div class="instagram-post-image-wrapper">
                    <img src="<?php echo esc_url($post['thumbnail_url']); ?>" alt="<?php echo esc_attr($post['caption']); ?>" loading="lazy" class="instagram-post-image" />
                    <?php if ($post['media_type'] === 'VIDEO'): ?>
                        <div class="instagram-post-video-overlay">
                            <svg width="32" height="32" viewBox="0 0 24 24" fill="white">
                                <path d="M8 5v14l11-7z"/>
                            </svg>
                        </div>
                    <?php endif; ?>
                    <div class="instagram-post-hover-overlay">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2">
                            <rect x="3" y="3" width="18" height="18" rx="2" ry="2"/>
                            <line x1="8" y1="12" x2="16" y2="12"/>
                            <line x1="12" y1="8" x2="12" y2="16"/>
                        </svg>
                    </div>
                </div>
                <?php if (!empty($post['caption'])): ?>
                    <div class="instagram-post-caption">
                        <p><?php echo esc_html(wp_trim_words($post['caption'], 15)); ?></p>
                    </div>
                <?php endif; ?>
            </a>
        <?php endforeach; ?>
    </div>
    <?php
    return ob_get_clean();
}
add_shortcode('instagram_feed', 'rosenberg_instagram_feed_shortcode');

/**
 * Full Instagram section shortcode with header and button
 */
function rosenberg_instagram_section_shortcode($atts) {
    $atts = shortcode_atts(array(
        'title' => '',
        'subtitle' => '',
        'button_text' => '',
        'limit' => '',
        'columns_desktop' => '',
        'columns_tablet' => '',
        'columns_mobile' => '',
        'show_header' => 'yes',
        'show_button' => 'yes'
    ), $atts);
    
    // Use settings from admin if not specified in shortcode
    $title = !empty($atts['title']) ? $atts['title'] : get_option('rosenberg_instagram_title', 'Слідкуйте за нами в Instagram');
    $subtitle = !empty($atts['subtitle']) ? $atts['subtitle'] : get_option('rosenberg_instagram_subtitle', 'Дізнавайтесь останні новини, корисні поради та зворотний зв\'язок від наших пацієнтів');
    $button_text = !empty($atts['button_text']) ? $atts['button_text'] : get_option('rosenberg_instagram_button_text', 'Підписатись в Instagram');
    $limit = !empty($atts['limit']) ? intval($atts['limit']) : get_option('rosenberg_instagram_posts_count', 6);
    $columns_desktop = !empty($atts['columns_desktop']) ? intval($atts['columns_desktop']) : get_option('rosenberg_instagram_columns_desktop', '3');
    $columns_tablet = !empty($atts['columns_tablet']) ? intval($atts['columns_tablet']) : get_option('rosenberg_instagram_columns_tablet', '2');
    $columns_mobile = !empty($atts['columns_mobile']) ? intval($atts['columns_mobile']) : get_option('rosenberg_instagram_columns_mobile', '2');
    $show_header = $atts['show_header'] === 'yes' || $atts['show_header'] === 'true' || $atts['show_header'] === '1';
    $show_button = $atts['show_button'] === 'yes' || $atts['show_button'] === 'true' || $atts['show_button'] === '1';
    
    $instagram_username = get_option('rosenberg_instagram_username', '');
    $posts = rosenberg_get_instagram_posts($limit);
    
    ob_start();
    ?>
    <section class="instagram-section section-padding">
        <div class="container">
            <?php if ($show_header): ?>
            <div class="instagram-header">
                <p class="instagram-label">INSTAGRAM</p>
                <h2 class="instagram-title"><?php echo esc_html($title); ?></h2>
                <?php if (!empty($subtitle)): ?>
                <p class="instagram-subtitle"><?php echo esc_html($subtitle); ?></p>
                <?php endif; ?>
            </div>
            <?php endif; ?>
            
            <?php if (!empty($posts)): ?>
            <div class="instagram-feed" 
                 data-columns-desktop="<?php echo esc_attr($columns_desktop); ?>"
                 data-columns-tablet="<?php echo esc_attr($columns_tablet); ?>"
                 data-columns-mobile="<?php echo esc_attr($columns_mobile); ?>"
                 style="--columns-desktop: <?php echo esc_attr($columns_desktop); ?>; --columns-tablet: <?php echo esc_attr($columns_tablet); ?>; --columns-mobile: <?php echo esc_attr($columns_mobile); ?>;">
                <?php foreach ($posts as $post): ?>
                    <a href="<?php echo esc_url($post['permalink']); ?>" target="_blank" rel="noopener noreferrer" class="instagram-post-card">
                        <div class="instagram-post-image-wrapper">
                            <img src="<?php echo esc_url($post['thumbnail_url']); ?>" alt="<?php echo esc_attr($post['caption']); ?>" loading="lazy" class="instagram-post-image" />
                            <?php if ($post['media_type'] === 'VIDEO'): ?>
                                <div class="instagram-post-video-overlay">
                                    <svg width="32" height="32" viewBox="0 0 24 24" fill="white">
                                        <path d="M8 5v14l11-7z"/>
                                    </svg>
                                </div>
                            <?php endif; ?>
                            <div class="instagram-post-hover-overlay">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2">
                                    <rect x="3" y="3" width="18" height="18" rx="2" ry="2"/>
                                    <line x1="8" y1="12" x2="16" y2="12"/>
                                    <line x1="12" y1="8" x2="12" y2="16"/>
                                </svg>
                            </div>
                        </div>
                        <?php if (!empty($post['caption'])): ?>
                            <div class="instagram-post-caption">
                                <p><?php echo esc_html(wp_trim_words($post['caption'], 15)); ?></p>
                            </div>
                        <?php endif; ?>
                    </a>
                <?php endforeach; ?>
            </div>
            <?php if ($show_button && !empty($instagram_username)): ?>
            <div class="instagram-cta">
                <a href="https://www.instagram.com/<?php echo esc_attr($instagram_username); ?>" target="_blank" rel="noopener noreferrer" class="instagram-cta-button">
                    <?php echo esc_html($button_text); ?> <span>→</span>
                </a>
            </div>
            <?php endif; ?>
            <?php else: ?>
            <div class="instagram-feed-empty">
                <p><?php _e('Instagram пости не знайдено. Перевірте налаштування в адмін-панелі.', 'rosenberg-clinic'); ?></p>
            </div>
            <?php endif; ?>
        </div>
    </section>
    <?php
    return ob_get_clean();
}
add_shortcode('instagram_section', 'rosenberg_instagram_section_shortcode');
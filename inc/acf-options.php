<?php
/**
 * ACF Options Pages & Global Settings Fields
 */

if (!function_exists('acf_add_options_page')) {
    return;
}

// Main options page
acf_add_options_page(array(
    'page_title'    => 'Налаштування сайту',
    'menu_title'    => 'Контент сайту',
    'menu_slug'     => 'site-settings',
    'capability'    => 'edit_posts',
    'redirect'      => false,
    'icon_url'      => 'dashicons-admin-customizer',
    'position'      => 2,
));

// Sub pages
acf_add_options_sub_page(array(
    'page_title'    => 'Контактна інформація',
    'menu_title'    => 'Контакти',
    'parent_slug'   => 'site-settings',
));

acf_add_options_sub_page(array(
    'page_title'    => 'Соціальні мережі',
    'menu_title'    => 'Соцмережі',
    'parent_slug'   => 'site-settings',
));

// Register global fields
acf_add_local_field_group(array(
    'key' => 'group_global_settings',
    'title' => 'Налаштування сайту',
    'fields' => array(
        // Brand tab
        array(
            'key' => 'field_tab_brand',
            'label' => 'Бренд',
            'name' => '',
            'type' => 'tab',
        ),
        array(
            'key' => 'field_brand_name',
            'label' => 'Назва бренду',
            'name' => 'brand_name',
            'type' => 'text',
            'default_value' => 'DR BENEDICT',
            'instructions' => 'Основна назва (відображається в хедері та футері)',
        ),
        array(
            'key' => 'field_brand_subtitle',
            'label' => 'Підзаголовок бренду',
            'name' => 'brand_subtitle',
            'type' => 'text',
            'default_value' => 'UROLOGY',
        ),

        // Contacts tab
        array(
            'key' => 'field_tab_contacts',
            'label' => 'Контакти',
            'name' => '',
            'type' => 'tab',
        ),
        array(
            'key' => 'field_phone_primary',
            'label' => 'Основний телефон',
            'name' => 'phone_primary',
            'type' => 'text',
            'default_value' => '+38 095 13 44 029',
            'instructions' => 'Для хедера, футера, CTA блоків',
        ),
        array(
            'key' => 'field_phone_secondary',
            'label' => 'Додатковий телефон',
            'name' => 'phone_secondary',
            'type' => 'text',
            'default_value' => '+380-96-777-10-87',
            'instructions' => 'Для хедера (верхній рядок)',
        ),
        array(
            'key' => 'field_email',
            'label' => 'Email',
            'name' => 'contact_email',
            'type' => 'email',
            'default_value' => 'dokbenedikt@gmail.com',
        ),
        array(
            'key' => 'field_address',
            'label' => 'Адреса',
            'name' => 'contact_address',
            'type' => 'text',
            'default_value' => 'Київ, вул. Олеся Бердника, 1Д',
        ),
        array(
            'key' => 'field_working_hours',
            'label' => 'Робочий час',
            'name' => 'working_hours',
            'type' => 'text',
            'default_value' => 'Пн - Пт: 9:00 - 18:00',
        ),
        array(
            'key' => 'field_working_hours_weekend',
            'label' => 'Вихідні',
            'name' => 'working_hours_weekend',
            'type' => 'text',
            'default_value' => 'Сб, Нд - Вихідний',
        ),
    ),
    'location' => array(
        array(
            array(
                'param' => 'options_page',
                'operator' => '==',
                'value' => 'site-settings',
            ),
        ),
    ),
));

// Social media fields
acf_add_local_field_group(array(
    'key' => 'group_social_settings',
    'title' => 'Соціальні мережі',
    'fields' => array(
        array(
            'key' => 'field_instagram_url',
            'label' => 'Instagram URL',
            'name' => 'instagram_url',
            'type' => 'url',
            'default_value' => 'https://www.instagram.com/dr_benedikt?igsh=MW96azF4YXFtM2ExMw==',
        ),
        array(
            'key' => 'field_instagram_handle',
            'label' => 'Instagram нікнейм',
            'name' => 'instagram_handle',
            'type' => 'text',
            'default_value' => '@dr_benedikt',
        ),
        array(
            'key' => 'field_facebook_url',
            'label' => 'Facebook URL',
            'name' => 'facebook_url',
            'type' => 'url',
            'default_value' => 'https://www.facebook.com',
        ),
        array(
            'key' => 'field_tiktok_url',
            'label' => 'TikTok URL',
            'name' => 'tiktok_url',
            'type' => 'url',
            'default_value' => 'https://www.tiktok.com',
        ),
        array(
            'key' => 'field_youtube_url',
            'label' => 'YouTube URL',
            'name' => 'youtube_url',
            'type' => 'url',
            'default_value' => 'https://www.youtube.com/@dr_benedikt',
        ),
    ),
    'location' => array(
        array(
            array(
                'param' => 'options_page',
                'operator' => '==',
                'value' => 'acf-options-соцмережі',
            ),
        ),
    ),
));

// Contact info sub-page fields
acf_add_local_field_group(array(
    'key' => 'group_contact_settings',
    'title' => 'Контактна інформація (детально)',
    'fields' => array(
        array(
            'key' => 'field_google_maps_embed',
            'label' => 'Google Maps Embed URL',
            'name' => 'google_maps_embed',
            'type' => 'url',
            'instructions' => 'URL для вбудованої карти Google Maps',
        ),
    ),
    'location' => array(
        array(
            array(
                'param' => 'options_page',
                'operator' => '==',
                'value' => 'acf-options-контакти',
            ),
        ),
    ),
));

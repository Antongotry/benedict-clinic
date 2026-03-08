<?php
/**
 * ACF Helper Functions
 */

function bf($field_name, $default = '', $post_id = false) {
    if (!function_exists('get_field')) {
        return $default;
    }
    $value = get_field($field_name, $post_id);
    return !empty($value) ? $value : $default;
}

function bf_option($field_name, $default = '') {
    return bf($field_name, $default, 'option');
}

function bf_image($field_name, $default = '', $post_id = false) {
    $url = bf($field_name, '', $post_id);
    return !empty($url) ? $url : $default;
}

function bf_repeater($field_name, $post_id = false) {
    if (!function_exists('get_field')) {
        return array();
    }
    $rows = get_field($field_name, $post_id);
    return is_array($rows) ? $rows : array();
}

function benedict_page_location_by_slug($slug) {
    $page = get_page_by_path($slug);
    if ($page) {
        return array(
            array(
                array(
                    'param' => 'post',
                    'operator' => '==',
                    'value' => (string) $page->ID,
                ),
            ),
        );
    }
    return array(
        array(
            array(
                'param' => 'page',
                'operator' => '==',
                'value' => '0',
            ),
        ),
    );
}

function benedict_service_page_locations() {
    $slugs = array(
        'consultation',
        'treatment',
        'ultrasound',
        'surgery',
        'plastic-urology',
        'conservative-treatment',
    );
    $locations = array();
    foreach ($slugs as $slug) {
        $page = get_page_by_path($slug);
        if ($page) {
            $locations[] = array(
                array(
                    'param' => 'post',
                    'operator' => '==',
                    'value' => (string) $page->ID,
                ),
            );
        }
    }
    return !empty($locations) ? $locations : array(
        array(
            array(
                'param' => 'page',
                'operator' => '==',
                'value' => '0',
            ),
        ),
    );
}

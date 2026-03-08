<?php
/**
 * ACF Helper Functions
 * Provides fallback to default values when ACF fields are empty
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

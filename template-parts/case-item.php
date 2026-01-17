<?php
/**
 * Template part for displaying case items
 * 
 * @param array $args - Case item data (before_image, after_image, title, description, hover_title, hover_description)
 */

if (!isset($args)) {
    return;
}

$before_image = $args['before_image'] ?? '';
$after_image = $args['after_image'] ?? '';
$title = $args['title'] ?? '';
$description = $args['description'] ?? '';
$hover_title = $args['hover_title'] ?? $title;
$hover_description = $args['hover_description'] ?? $description;
?>

<div class="concierge-item-wrapper">
    <div class="concierge-item concierge-item-default">
        <div class="concierge-item-bg">
            <img decoding="async" src="<?php echo esc_url($before_image); ?>" alt="<?php echo esc_attr($title); ?> - До" loading="lazy">
        </div>
        <div class="concierge-item-content">
            <h3 class="concierge-item-title"><?php echo esc_html($title); ?></h3>
            <p class="concierge-item-description"><?php echo esc_html($description); ?></p>
        </div>
    </div>
    <div class="concierge-item concierge-item-hover">
        <div class="concierge-item-content-hover">
            <h3 class="concierge-item-title"><?php echo esc_html($hover_title); ?></h3>
            <p class="concierge-item-description"><?php echo esc_html($hover_description); ?></p>
        </div>
        <div class="concierge-item-bg-hover">
            <img decoding="async" src="<?php echo esc_url($after_image); ?>" alt="<?php echo esc_attr($title); ?> - Після" loading="lazy">
        </div>
    </div>
</div>

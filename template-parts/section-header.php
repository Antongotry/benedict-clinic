<?php
/**
 * Template part for displaying section headers
 * 
 * @param array $args - Section header data (label, title)
 */

if (!isset($args)) {
    return;
}

$label = $args['label'] ?? '';
$title = $args['title'] ?? '';
?>

<div class="concierge-header">
    <?php if ($label) : ?>
        <p class="concierge-label"><?php echo esc_html($label); ?></p>
    <?php endif; ?>
    <?php if ($title) : ?>
        <h2 class="concierge-title"><?php echo esc_html($title); ?></h2>
    <?php endif; ?>
</div>

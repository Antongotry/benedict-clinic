<?php
/**
 * Comments Template
 * Custom styled comments with threaded replies
 */

// Don't load if accessing directly
if (!defined('ABSPATH')) {
    exit;
}

// Don't show if password is required
if (post_password_required()) {
    return;
}

$comments_count = get_comments_number();
?>

<div id="comments" class="blog-comments">
    
    <?php if (have_comments()) : ?>
        <h3 class="comments-title">
            <?php
            printf(
                _n(
                    '%s коментар',
                    '%s коментарів',
                    $comments_count,
                    'rosenberg-clinic'
                ),
                number_format_i18n($comments_count)
            );
            ?>
        </h3>
        
        <ol class="comment-list">
            <?php
            wp_list_comments(array(
                'callback' => 'benedict_comment_callback',
                'style' => 'ol',
                'short_ping' => true,
                'avatar_size' => 60,
                'max_depth' => 3,
            ));
            ?>
        </ol>
        
        <?php
        // Comment pagination
        the_comments_navigation(array(
            'prev_text' => '<span class="nav-prev-text">' . __('Старіші коментарі', 'rosenberg-clinic') . '</span>',
            'next_text' => '<span class="nav-next-text">' . __('Новіші коментарі', 'rosenberg-clinic') . '</span>',
        ));
        ?>
        
    <?php endif; ?>
    
    <?php if (!comments_open() && get_comments_number() && post_type_supports(get_post_type(), 'comments')) : ?>
        <p class="comments-closed"><?php _e('Коментарі закриті.', 'rosenberg-clinic'); ?></p>
    <?php endif; ?>
    
    <?php
    // Comment form
    $comment_field = '<div class="comment-form-field comment-form-comment">
        <label for="comment">' . __('Коментар', 'rosenberg-clinic') . ' <span class="required">*</span></label>
        <textarea id="comment" name="comment" rows="6" required></textarea>
    </div>';
    
    comment_form(array(
        'comment_field' => $comment_field,
        'title_reply' => __('Залишити коментар', 'rosenberg-clinic'),
        'title_reply_to' => __('Відповісти %s', 'rosenberg-clinic'),
        'cancel_reply_link' => __('Скасувати відповідь', 'rosenberg-clinic'),
        'label_submit' => __('Опублікувати коментар', 'rosenberg-clinic'),
        'comment_notes_before' => '<p class="comment-notes">' . __('Ваша email адреса не буде опублікована.', 'rosenberg-clinic') . '</p>',
        'class_form' => 'blog-comment-form',
        'class_submit' => 'blog-comment-submit btn-primary',
        'submit_button' => '<button name="%1$s" type="submit" id="%2$s" class="%3$s">%4$s</button>',
    ));
    ?>
    
</div>

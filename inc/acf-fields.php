<?php
/**
 * ACF Field Groups Registration
 * Registers all field groups for page templates
 */

if (!function_exists('acf_add_local_field_group')) {
    return;
}

// =============================================
// FIELD GROUP: Головна сторінка (front-page.php)
// =============================================
acf_add_local_field_group(array(
    'key' => 'group_front_page',
    'title' => 'Головна сторінка',
    'fields' => array(

        // --- HERO ---
        array(
            'key' => 'field_fp_tab_hero',
            'label' => 'Hero секція',
            'type' => 'tab',
        ),
        array(
            'key' => 'field_fp_hero_title',
            'label' => 'Заголовок',
            'name' => 'fp_hero_title',
            'type' => 'text',
            'default_value' => 'DR. BENEDICT',
        ),
        array(
            'key' => 'field_fp_hero_subtitle',
            'label' => 'Підзаголовок',
            'name' => 'fp_hero_subtitle',
            'type' => 'text',
            'default_value' => 'лікар уролог, засновник Benedict clinic',
        ),
        array(
            'key' => 'field_fp_hero_video',
            'label' => 'Фонове відео',
            'name' => 'fp_hero_video',
            'type' => 'file',
            'return_format' => 'url',
            'mime_types' => 'mp4,webm,mov',
        ),
        array(
            'key' => 'field_fp_hero_btn1_text',
            'label' => 'Кнопка 1 — текст',
            'name' => 'fp_hero_btn1_text',
            'type' => 'text',
            'default_value' => 'Записатись на консультацію',
        ),
        array(
            'key' => 'field_fp_hero_btn1_link',
            'label' => 'Кнопка 1 — посилання',
            'name' => 'fp_hero_btn1_link',
            'type' => 'text',
            'default_value' => '#contact',
        ),
        array(
            'key' => 'field_fp_hero_btn2_text',
            'label' => 'Кнопка 2 — текст',
            'name' => 'fp_hero_btn2_text',
            'type' => 'text',
            'default_value' => 'Про лікаря',
        ),
        array(
            'key' => 'field_fp_hero_btn2_link',
            'label' => 'Кнопка 2 — посилання',
            'name' => 'fp_hero_btn2_link',
            'type' => 'text',
            'default_value' => '/dr-benedict',
        ),

        // --- ABOUT ---
        array(
            'key' => 'field_fp_tab_about',
            'label' => 'Про лікаря (блок)',
            'type' => 'tab',
        ),
        array(
            'key' => 'field_fp_about_left_image',
            'label' => 'Ліве фото',
            'name' => 'fp_about_left_image',
            'type' => 'image',
            'return_format' => 'url',
        ),
        array(
            'key' => 'field_fp_about_right_image',
            'label' => 'Праве фото',
            'name' => 'fp_about_right_image',
            'type' => 'image',
            'return_format' => 'url',
        ),
        array(
            'key' => 'field_fp_about_watermark',
            'label' => 'Водяний знак',
            'name' => 'fp_about_watermark',
            'type' => 'text',
            'default_value' => 'UROLOGY',
        ),
        array(
            'key' => 'field_fp_about_label',
            'label' => 'Мітка секції',
            'name' => 'fp_about_label',
            'type' => 'text',
            'default_value' => 'ХІРУРГІЯ',
        ),
        array(
            'key' => 'field_fp_about_title',
            'label' => 'Заголовок',
            'name' => 'fp_about_title',
            'type' => 'text',
            'default_value' => 'Передові хірургічні рішення',
        ),
        array(
            'key' => 'field_fp_about_services',
            'label' => 'Послуги (блоки)',
            'name' => 'fp_about_services',
            'type' => 'repeater',
            'min' => 1,
            'max' => 6,
            'layout' => 'block',
            'sub_fields' => array(
                array(
                    'key' => 'field_fp_about_service_title',
                    'label' => 'Назва',
                    'name' => 'title',
                    'type' => 'text',
                ),
                array(
                    'key' => 'field_fp_about_service_text',
                    'label' => 'Опис',
                    'name' => 'text',
                    'type' => 'textarea',
                    'rows' => 3,
                ),
            ),
        ),
        array(
            'key' => 'field_fp_about_cta_text',
            'label' => 'CTA кнопка — текст',
            'name' => 'fp_about_cta_text',
            'type' => 'text',
            'default_value' => 'ПОСЛУГИ',
        ),

        // --- WHY CHOOSE ---
        array(
            'key' => 'field_fp_tab_why',
            'label' => 'Чому обрати',
            'type' => 'tab',
        ),
        array(
            'key' => 'field_fp_why_title',
            'label' => 'Заголовок',
            'name' => 'fp_why_title',
            'type' => 'text',
            'default_value' => 'Чому варто звернутись до мене?',
        ),
        array(
            'key' => 'field_fp_why_cards',
            'label' => 'Картки',
            'name' => 'fp_why_cards',
            'type' => 'repeater',
            'min' => 1,
            'max' => 6,
            'layout' => 'block',
            'sub_fields' => array(
                array(
                    'key' => 'field_fp_why_card_title',
                    'label' => 'Заголовок',
                    'name' => 'title',
                    'type' => 'text',
                ),
                array(
                    'key' => 'field_fp_why_card_text',
                    'label' => 'Опис',
                    'name' => 'text',
                    'type' => 'textarea',
                    'rows' => 2,
                ),
                array(
                    'key' => 'field_fp_why_card_note',
                    'label' => 'Примітка',
                    'name' => 'note',
                    'type' => 'text',
                ),
            ),
        ),

        // --- SERVICES ---
        array(
            'key' => 'field_fp_tab_services',
            'label' => 'Послуги',
            'type' => 'tab',
        ),
        array(
            'key' => 'field_fp_services_title',
            'label' => 'Заголовок',
            'name' => 'fp_services_title',
            'type' => 'text',
            'default_value' => 'ПОСЛУГИ',
        ),
        array(
            'key' => 'field_fp_services_subtitle',
            'label' => 'Підзаголовок',
            'name' => 'fp_services_subtitle',
            'type' => 'textarea',
            'rows' => 2,
        ),
        array(
            'key' => 'field_fp_services_cards',
            'label' => 'Картки послуг',
            'name' => 'fp_services_cards',
            'type' => 'repeater',
            'min' => 1,
            'max' => 8,
            'layout' => 'block',
            'sub_fields' => array(
                array(
                    'key' => 'field_fp_service_card_title',
                    'label' => 'Назва',
                    'name' => 'title',
                    'type' => 'text',
                ),
                array(
                    'key' => 'field_fp_service_card_text',
                    'label' => 'Опис',
                    'name' => 'text',
                    'type' => 'textarea',
                    'rows' => 2,
                ),
                array(
                    'key' => 'field_fp_service_card_link',
                    'label' => 'Посилання',
                    'name' => 'link',
                    'type' => 'text',
                    'instructions' => 'Наприклад: /consultation',
                ),
                array(
                    'key' => 'field_fp_service_card_icon',
                    'label' => 'Іконка',
                    'name' => 'icon',
                    'type' => 'image',
                    'return_format' => 'url',
                    'instructions' => 'SVG або PNG іконка',
                ),
            ),
        ),

        // --- CERTIFICATES ---
        array(
            'key' => 'field_fp_tab_certificates',
            'label' => 'Сертифікати',
            'type' => 'tab',
        ),
        array(
            'key' => 'field_fp_cert_title',
            'label' => 'Заголовок',
            'name' => 'fp_cert_title',
            'type' => 'text',
            'default_value' => 'Освітні та професійні досягнення',
        ),
        array(
            'key' => 'field_fp_cert_subtitle',
            'label' => 'Підзаголовок',
            'name' => 'fp_cert_subtitle',
            'type' => 'textarea',
            'rows' => 2,
        ),
        array(
            'key' => 'field_fp_cert_images',
            'label' => 'Зображення сертифікатів',
            'name' => 'fp_cert_images',
            'type' => 'gallery',
            'return_format' => 'url',
            'instructions' => 'Завантажте зображення сертифікатів',
        ),

        // --- STATISTICS ---
        array(
            'key' => 'field_fp_tab_stats',
            'label' => 'Статистика',
            'type' => 'tab',
        ),
        array(
            'key' => 'field_fp_stats_bg',
            'label' => 'Фонове зображення',
            'name' => 'fp_stats_bg',
            'type' => 'image',
            'return_format' => 'url',
        ),
        array(
            'key' => 'field_fp_stats_items',
            'label' => 'Пункти статистики',
            'name' => 'fp_stats_items',
            'type' => 'repeater',
            'min' => 1,
            'max' => 6,
            'layout' => 'table',
            'sub_fields' => array(
                array(
                    'key' => 'field_fp_stat_number',
                    'label' => 'Число',
                    'name' => 'number',
                    'type' => 'text',
                    'instructions' => 'Число або текст (напр. 25000, 24/7)',
                ),
                array(
                    'key' => 'field_fp_stat_suffix',
                    'label' => 'Суфікс',
                    'name' => 'suffix',
                    'type' => 'text',
                    'instructions' => 'Напр. к+, +',
                ),
                array(
                    'key' => 'field_fp_stat_label',
                    'label' => 'Підпис',
                    'name' => 'label',
                    'type' => 'text',
                ),
            ),
        ),

        // --- PRICING ---
        array(
            'key' => 'field_fp_tab_pricing',
            'label' => 'Ціни',
            'type' => 'tab',
        ),
        array(
            'key' => 'field_fp_pricing_title',
            'label' => 'Заголовок',
            'name' => 'fp_pricing_title',
            'type' => 'text',
            'default_value' => 'Ціни',
        ),
        array(
            'key' => 'field_fp_pricing_subtitle',
            'label' => 'Підзаголовок',
            'name' => 'fp_pricing_subtitle',
            'type' => 'textarea',
            'rows' => 2,
        ),
        array(
            'key' => 'field_fp_pricing_cards',
            'label' => 'Картки цін',
            'name' => 'fp_pricing_cards',
            'type' => 'repeater',
            'min' => 1,
            'max' => 6,
            'layout' => 'block',
            'sub_fields' => array(
                array(
                    'key' => 'field_fp_price_card_title',
                    'label' => 'Назва',
                    'name' => 'title',
                    'type' => 'text',
                ),
                array(
                    'key' => 'field_fp_price_card_subtitle',
                    'label' => 'Підзаголовок',
                    'name' => 'subtitle',
                    'type' => 'text',
                    'instructions' => 'Напр. ОНЛАЙН, ВИКЛЮЧНО ОФЛАЙН',
                ),
                array(
                    'key' => 'field_fp_price_card_price',
                    'label' => 'Ціна',
                    'name' => 'price',
                    'type' => 'text',
                ),
                array(
                    'key' => 'field_fp_price_card_desc',
                    'label' => 'Опис',
                    'name' => 'description',
                    'type' => 'textarea',
                    'rows' => 2,
                ),
                array(
                    'key' => 'field_fp_price_card_btn',
                    'label' => 'Текст кнопки',
                    'name' => 'button_text',
                    'type' => 'text',
                    'default_value' => 'Записатись',
                ),
            ),
        ),

        // --- YOUTUBE ---
        array(
            'key' => 'field_fp_tab_youtube',
            'label' => 'YouTube',
            'type' => 'tab',
        ),
        array(
            'key' => 'field_fp_youtube_title',
            'label' => 'Заголовок',
            'name' => 'fp_youtube_title',
            'type' => 'text',
            'default_value' => 'Підписуйтесь на Youtube та дізнайтесь більше...',
        ),
        array(
            'key' => 'field_fp_youtube_bg',
            'label' => 'Фонове зображення',
            'name' => 'fp_youtube_bg',
            'type' => 'image',
            'return_format' => 'url',
        ),

        // --- FAQ ---
        array(
            'key' => 'field_fp_tab_faq',
            'label' => 'FAQ',
            'type' => 'tab',
        ),
        array(
            'key' => 'field_fp_faq_title',
            'label' => 'Заголовок',
            'name' => 'fp_faq_title',
            'type' => 'text',
            'default_value' => 'Часті запитання',
        ),
        array(
            'key' => 'field_fp_faq_image',
            'label' => 'Зображення',
            'name' => 'fp_faq_image',
            'type' => 'image',
            'return_format' => 'url',
        ),
        array(
            'key' => 'field_fp_faq_items',
            'label' => 'Запитання',
            'name' => 'fp_faq_items',
            'type' => 'repeater',
            'min' => 1,
            'max' => 15,
            'layout' => 'block',
            'sub_fields' => array(
                array(
                    'key' => 'field_fp_faq_question',
                    'label' => 'Запитання',
                    'name' => 'question',
                    'type' => 'text',
                ),
                array(
                    'key' => 'field_fp_faq_answer',
                    'label' => 'Відповідь',
                    'name' => 'answer',
                    'type' => 'wysiwyg',
                    'toolbar' => 'basic',
                    'media_upload' => 0,
                ),
            ),
        ),

        // --- TESTIMONIALS ---
        array(
            'key' => 'field_fp_tab_testimonials',
            'label' => 'Відгуки',
            'type' => 'tab',
        ),
        array(
            'key' => 'field_fp_testimonials_title',
            'label' => 'Заголовок',
            'name' => 'fp_testimonials_title',
            'type' => 'text',
            'default_value' => 'Відгуки пацієнтів',
        ),
        array(
            'key' => 'field_fp_testimonials_subtitle',
            'label' => 'Підзаголовок',
            'name' => 'fp_testimonials_subtitle',
            'type' => 'textarea',
            'rows' => 2,
        ),
        array(
            'key' => 'field_fp_testimonials',
            'label' => 'Відгуки',
            'name' => 'fp_testimonials',
            'type' => 'repeater',
            'min' => 1,
            'max' => 20,
            'layout' => 'block',
            'sub_fields' => array(
                array(
                    'key' => 'field_fp_testimonial_name',
                    'label' => 'Ім\'я',
                    'name' => 'name',
                    'type' => 'text',
                ),
                array(
                    'key' => 'field_fp_testimonial_age',
                    'label' => 'Вік',
                    'name' => 'age',
                    'type' => 'text',
                ),
                array(
                    'key' => 'field_fp_testimonial_text',
                    'label' => 'Текст відгуку',
                    'name' => 'text',
                    'type' => 'textarea',
                    'rows' => 4,
                ),
                array(
                    'key' => 'field_fp_testimonial_avatar',
                    'label' => 'Аватар',
                    'name' => 'avatar',
                    'type' => 'image',
                    'return_format' => 'url',
                ),
            ),
        ),

        // --- SCHEDULE CTA ---
        array(
            'key' => 'field_fp_tab_schedule',
            'label' => 'CTA секція',
            'type' => 'tab',
        ),
        array(
            'key' => 'field_fp_schedule_title',
            'label' => 'Заголовок',
            'name' => 'fp_schedule_title',
            'type' => 'text',
            'default_value' => 'Записатись на прийом',
        ),
        array(
            'key' => 'field_fp_schedule_btn',
            'label' => 'Текст кнопки',
            'name' => 'fp_schedule_btn',
            'type' => 'text',
            'default_value' => "ЗВ'ЯЗАТИСЯ З НАМИ",
        ),
        array(
            'key' => 'field_fp_schedule_video',
            'label' => 'Фонове відео',
            'name' => 'fp_schedule_video',
            'type' => 'file',
            'return_format' => 'url',
            'mime_types' => 'mp4,webm,mov',
        ),

        // --- FINAL CTA ---
        array(
            'key' => 'field_fp_tab_final',
            'label' => 'Фінальний CTA',
            'type' => 'tab',
        ),
        array(
            'key' => 'field_fp_final_tagline',
            'label' => 'Надпис',
            'name' => 'fp_final_tagline',
            'type' => 'text',
            'default_value' => 'DR. BENEDICT UROLOGY',
        ),
        array(
            'key' => 'field_fp_final_title',
            'label' => 'Заголовок',
            'name' => 'fp_final_title',
            'type' => 'text',
            'default_value' => 'Ваше здоров\'я — моя місія',
        ),
        array(
            'key' => 'field_fp_final_desc',
            'label' => 'Опис',
            'name' => 'fp_final_desc',
            'type' => 'textarea',
            'rows' => 2,
        ),
        array(
            'key' => 'field_fp_final_btn',
            'label' => 'Текст кнопки',
            'name' => 'fp_final_btn',
            'type' => 'text',
            'default_value' => 'Записатись на прийом',
        ),
    ),
    'location' => array(
        array(
            array(
                'param' => 'page_type',
                'operator' => '==',
                'value' => 'front_page',
            ),
        ),
    ),
    'menu_order' => 0,
));


// =============================================
// FIELD GROUP: Сторінка послуги (service pages)
// =============================================
acf_add_local_field_group(array(
    'key' => 'group_service_page',
    'title' => 'Сторінка послуги',
    'fields' => array(
        // --- HERO ---
        array(
            'key' => 'field_sp_tab_hero',
            'label' => 'Hero секція',
            'type' => 'tab',
        ),
        array(
            'key' => 'field_sp_title',
            'label' => 'Назва послуги',
            'name' => 'service_title',
            'type' => 'text',
        ),
        array(
            'key' => 'field_sp_subtitle',
            'label' => 'Підзаголовок',
            'name' => 'service_subtitle',
            'type' => 'text',
            'default_value' => 'DR. BENEDICT UROLOGY',
        ),
        array(
            'key' => 'field_sp_description',
            'label' => 'Короткий опис',
            'name' => 'service_description',
            'type' => 'textarea',
            'rows' => 2,
        ),
        array(
            'key' => 'field_sp_hero_image',
            'label' => 'Hero зображення',
            'name' => 'service_hero_image',
            'type' => 'image',
            'return_format' => 'url',
        ),
        array(
            'key' => 'field_sp_price',
            'label' => 'Ціна',
            'name' => 'service_price',
            'type' => 'text',
            'instructions' => 'Напр. від 1190 грн, індивідуально',
        ),

        // --- INTRO ---
        array(
            'key' => 'field_sp_tab_intro',
            'label' => 'Про послугу',
            'type' => 'tab',
        ),
        array(
            'key' => 'field_sp_intro_text',
            'label' => 'Основний текст',
            'name' => 'service_intro_text',
            'type' => 'wysiwyg',
            'toolbar' => 'basic',
            'media_upload' => 0,
        ),
        array(
            'key' => 'field_sp_intro_text_2',
            'label' => 'Додатковий текст',
            'name' => 'service_intro_text_2',
            'type' => 'wysiwyg',
            'toolbar' => 'basic',
            'media_upload' => 0,
        ),
        array(
            'key' => 'field_sp_intro_image',
            'label' => 'Зображення (блок "Про послугу")',
            'name' => 'service_intro_image',
            'type' => 'image',
            'return_format' => 'url',
        ),

        // --- FEATURES ---
        array(
            'key' => 'field_sp_tab_features',
            'label' => 'Переваги',
            'type' => 'tab',
        ),
        array(
            'key' => 'field_sp_features',
            'label' => 'Переваги',
            'name' => 'service_features',
            'type' => 'repeater',
            'min' => 0,
            'max' => 8,
            'layout' => 'block',
            'sub_fields' => array(
                array(
                    'key' => 'field_sp_feature_icon',
                    'label' => 'Іконка',
                    'name' => 'icon',
                    'type' => 'image',
                    'return_format' => 'url',
                    'instructions' => 'SVG або PNG іконка. Якщо порожньо — використається стандартна.',
                ),
                array(
                    'key' => 'field_sp_feature_title',
                    'label' => 'Заголовок',
                    'name' => 'title',
                    'type' => 'text',
                ),
                array(
                    'key' => 'field_sp_feature_text',
                    'label' => 'Опис',
                    'name' => 'text',
                    'type' => 'textarea',
                    'rows' => 2,
                ),
            ),
        ),

        // --- PROCESS ---
        array(
            'key' => 'field_sp_tab_process',
            'label' => 'Етапи',
            'type' => 'tab',
        ),
        array(
            'key' => 'field_sp_process_steps',
            'label' => 'Кроки процесу',
            'name' => 'service_process_steps',
            'type' => 'repeater',
            'min' => 0,
            'max' => 10,
            'layout' => 'table',
            'sub_fields' => array(
                array(
                    'key' => 'field_sp_step_number',
                    'label' => '№',
                    'name' => 'number',
                    'type' => 'text',
                ),
                array(
                    'key' => 'field_sp_step_title',
                    'label' => 'Назва',
                    'name' => 'title',
                    'type' => 'text',
                ),
                array(
                    'key' => 'field_sp_step_text',
                    'label' => 'Опис',
                    'name' => 'text',
                    'type' => 'textarea',
                    'rows' => 2,
                ),
            ),
        ),

        // --- INDICATIONS ---
        array(
            'key' => 'field_sp_tab_indications',
            'label' => 'Показання',
            'type' => 'tab',
        ),
        array(
            'key' => 'field_sp_indications',
            'label' => 'Показання',
            'name' => 'service_indications',
            'type' => 'repeater',
            'min' => 0,
            'max' => 20,
            'layout' => 'table',
            'sub_fields' => array(
                array(
                    'key' => 'field_sp_indication_text',
                    'label' => 'Текст',
                    'name' => 'text',
                    'type' => 'text',
                ),
            ),
        ),

        // --- FAQ ---
        array(
            'key' => 'field_sp_tab_faq',
            'label' => 'FAQ',
            'type' => 'tab',
        ),
        array(
            'key' => 'field_sp_faq',
            'label' => 'Часті запитання',
            'name' => 'service_faq',
            'type' => 'repeater',
            'min' => 0,
            'max' => 15,
            'layout' => 'block',
            'sub_fields' => array(
                array(
                    'key' => 'field_sp_faq_question',
                    'label' => 'Запитання',
                    'name' => 'question',
                    'type' => 'text',
                ),
                array(
                    'key' => 'field_sp_faq_answer',
                    'label' => 'Відповідь',
                    'name' => 'answer',
                    'type' => 'wysiwyg',
                    'toolbar' => 'basic',
                    'media_upload' => 0,
                ),
            ),
        ),

        // --- CTA ---
        array(
            'key' => 'field_sp_tab_cta',
            'label' => 'CTA',
            'type' => 'tab',
        ),
        array(
            'key' => 'field_sp_cta_image',
            'label' => 'Фонове зображення CTA',
            'name' => 'service_cta_image',
            'type' => 'image',
            'return_format' => 'url',
        ),

        // --- RELATED ---
        array(
            'key' => 'field_sp_tab_related',
            'label' => 'Пов\'язані послуги',
            'type' => 'tab',
        ),
        array(
            'key' => 'field_sp_related',
            'label' => 'Пов\'язані послуги',
            'name' => 'service_related',
            'type' => 'repeater',
            'min' => 0,
            'max' => 6,
            'layout' => 'block',
            'sub_fields' => array(
                array(
                    'key' => 'field_sp_related_title',
                    'label' => 'Назва',
                    'name' => 'title',
                    'type' => 'text',
                ),
                array(
                    'key' => 'field_sp_related_url',
                    'label' => 'URL',
                    'name' => 'url',
                    'type' => 'text',
                    'instructions' => 'Напр. /consultation',
                ),
                array(
                    'key' => 'field_sp_related_icon',
                    'label' => 'Іконка',
                    'name' => 'icon',
                    'type' => 'image',
                    'return_format' => 'url',
                ),
            ),
        ),
    ),
    'location' => array(
        array(
            array(
                'param' => 'page_template',
                'operator' => '==',
                'value' => 'page-consultation.php',
            ),
        ),
        array(
            array(
                'param' => 'page_template',
                'operator' => '==',
                'value' => 'page-treatment.php',
            ),
        ),
        array(
            array(
                'param' => 'page_template',
                'operator' => '==',
                'value' => 'page-ultrasound.php',
            ),
        ),
        array(
            array(
                'param' => 'page_template',
                'operator' => '==',
                'value' => 'page-surgery.php',
            ),
        ),
        array(
            array(
                'param' => 'page_template',
                'operator' => '==',
                'value' => 'page-plastic-urology.php',
            ),
        ),
        array(
            array(
                'param' => 'page_template',
                'operator' => '==',
                'value' => 'page-conservative-treatment.php',
            ),
        ),
    ),
    'menu_order' => 0,
));


// =============================================
// FIELD GROUP: Про лікаря (template-about-doctor.php)
// =============================================
acf_add_local_field_group(array(
    'key' => 'group_about_doctor',
    'title' => 'Про лікаря',
    'fields' => array(
        // --- HERO ---
        array(
            'key' => 'field_ad_tab_hero',
            'label' => 'Hero',
            'type' => 'tab',
        ),
        array(
            'key' => 'field_ad_hero_desktop',
            'label' => 'Фото (десктоп)',
            'name' => 'ad_hero_desktop',
            'type' => 'image',
            'return_format' => 'url',
        ),
        array(
            'key' => 'field_ad_hero_mobile',
            'label' => 'Фото (мобільне)',
            'name' => 'ad_hero_mobile',
            'type' => 'image',
            'return_format' => 'url',
        ),
        array(
            'key' => 'field_ad_name',
            'label' => 'Ім\'я лікаря',
            'name' => 'ad_name',
            'type' => 'text',
            'default_value' => 'DR. BENEDICT',
        ),
        array(
            'key' => 'field_ad_subtitle',
            'label' => 'Підзаголовок',
            'name' => 'ad_subtitle',
            'type' => 'text',
            'default_value' => 'лікар уролог, засновник benedict clinic',
        ),
        array(
            'key' => 'field_ad_badge_image',
            'label' => 'Бейдж (зображення)',
            'name' => 'ad_badge_image',
            'type' => 'image',
            'return_format' => 'url',
        ),
        array(
            'key' => 'field_ad_badge_text',
            'label' => 'Бейдж (текст)',
            'name' => 'ad_badge_text',
            'type' => 'text',
            'default_value' => 'ЧЛЕН ЄВРОПЕЙСЬКОЇ АСОЦІАЦІЇ УРОЛОГІВ',
        ),

        // --- PROFESSIONAL PATH ---
        array(
            'key' => 'field_ad_tab_path',
            'label' => 'Професійний шлях',
            'type' => 'tab',
        ),
        array(
            'key' => 'field_ad_path_label',
            'label' => 'Мітка',
            'name' => 'ad_path_label',
            'type' => 'text',
            'default_value' => 'професійний шлях',
        ),
        array(
            'key' => 'field_ad_path_name',
            'label' => 'Ім\'я',
            'name' => 'ad_path_name',
            'type' => 'text',
            'default_value' => 'Гаврилишин бенедикт',
        ),
        array(
            'key' => 'field_ad_path_image',
            'label' => 'Фото',
            'name' => 'ad_path_image',
            'type' => 'image',
            'return_format' => 'url',
        ),
        array(
            'key' => 'field_ad_path_text',
            'label' => 'Текст (параграфи)',
            'name' => 'ad_path_text',
            'type' => 'wysiwyg',
            'toolbar' => 'basic',
            'media_upload' => 0,
        ),

        // --- SURGERY ---
        array(
            'key' => 'field_ad_tab_surgery',
            'label' => 'Хірургія',
            'type' => 'tab',
        ),
        array(
            'key' => 'field_ad_surgery_title',
            'label' => 'Заголовок',
            'name' => 'ad_surgery_title',
            'type' => 'text',
        ),
        array(
            'key' => 'field_ad_surgery_image',
            'label' => 'Фото',
            'name' => 'ad_surgery_image',
            'type' => 'image',
            'return_format' => 'url',
        ),
        array(
            'key' => 'field_ad_surgery_text',
            'label' => 'Текст',
            'name' => 'ad_surgery_text',
            'type' => 'wysiwyg',
            'toolbar' => 'basic',
            'media_upload' => 0,
        ),

        // --- DIAGNOSTICS ---
        array(
            'key' => 'field_ad_tab_diagnostics',
            'label' => 'Діагностика',
            'type' => 'tab',
        ),
        array(
            'key' => 'field_ad_diagnostics_title',
            'label' => 'Заголовок',
            'name' => 'ad_diagnostics_title',
            'type' => 'text',
        ),
        array(
            'key' => 'field_ad_diagnostics_image',
            'label' => 'Фото',
            'name' => 'ad_diagnostics_image',
            'type' => 'image',
            'return_format' => 'url',
        ),
        array(
            'key' => 'field_ad_diagnostics_text',
            'label' => 'Текст',
            'name' => 'ad_diagnostics_text',
            'type' => 'wysiwyg',
            'toolbar' => 'basic',
            'media_upload' => 0,
        ),

        // --- PODCAST ---
        array(
            'key' => 'field_ad_tab_podcast',
            'label' => 'Подкаст',
            'type' => 'tab',
        ),
        array(
            'key' => 'field_ad_podcast_title',
            'label' => 'Заголовок',
            'name' => 'ad_podcast_title',
            'type' => 'text',
            'default_value' => 'PODCAST TALKS',
        ),
        array(
            'key' => 'field_ad_podcast_subtitle',
            'label' => 'Підзаголовок',
            'name' => 'ad_podcast_subtitle',
            'type' => 'textarea',
            'rows' => 2,
        ),
        array(
            'key' => 'field_ad_podcast_videos',
            'label' => 'Відео',
            'name' => 'ad_podcast_videos',
            'type' => 'repeater',
            'min' => 0,
            'max' => 10,
            'layout' => 'block',
            'sub_fields' => array(
                array(
                    'key' => 'field_ad_podcast_video_url',
                    'label' => 'YouTube URL',
                    'name' => 'youtube_url',
                    'type' => 'url',
                ),
                array(
                    'key' => 'field_ad_podcast_video_thumb',
                    'label' => 'Превʼю',
                    'name' => 'thumbnail',
                    'type' => 'image',
                    'return_format' => 'url',
                    'instructions' => 'Якщо порожньо — підтягнеться з YouTube автоматично',
                ),
            ),
        ),

        // --- SCHEDULE CTA ---
        array(
            'key' => 'field_ad_tab_cta',
            'label' => 'CTA',
            'type' => 'tab',
        ),
        array(
            'key' => 'field_ad_cta_title',
            'label' => 'Заголовок',
            'name' => 'ad_cta_title',
            'type' => 'text',
            'default_value' => 'Заплануйте свою консультацію',
        ),
        array(
            'key' => 'field_ad_cta_btn',
            'label' => 'Текст кнопки',
            'name' => 'ad_cta_btn',
            'type' => 'text',
            'default_value' => "Зв'яжіться зі мною",
        ),
        array(
            'key' => 'field_ad_cta_bg',
            'label' => 'Фонове зображення',
            'name' => 'ad_cta_bg',
            'type' => 'image',
            'return_format' => 'url',
        ),

        // --- INSTAGRAM ---
        array(
            'key' => 'field_ad_tab_instagram',
            'label' => 'Instagram',
            'type' => 'tab',
        ),
        array(
            'key' => 'field_ad_insta_bg',
            'label' => 'Фонове зображення',
            'name' => 'ad_insta_bg',
            'type' => 'image',
            'return_format' => 'url',
        ),
    ),
    'location' => array(
        array(
            array(
                'param' => 'page_template',
                'operator' => '==',
                'value' => 'page-templates/template-about-doctor.php',
            ),
        ),
    ),
    'menu_order' => 0,
));


// =============================================
// FIELD GROUP: Сторінка послуг (template-services.php)
// =============================================
acf_add_local_field_group(array(
    'key' => 'group_services_page',
    'title' => 'Сторінка послуг',
    'fields' => array(
        array(
            'key' => 'field_svp_tab_hero',
            'label' => 'Hero',
            'type' => 'tab',
        ),
        array(
            'key' => 'field_svp_hero_video',
            'label' => 'Фонове відео',
            'name' => 'svp_hero_video',
            'type' => 'file',
            'return_format' => 'url',
            'mime_types' => 'mp4,webm,mov',
        ),
        array(
            'key' => 'field_svp_hero_label',
            'label' => 'Мітка',
            'name' => 'svp_hero_label',
            'type' => 'text',
            'default_value' => 'DR. BENEDICT UROLOGY',
        ),
        array(
            'key' => 'field_svp_hero_title',
            'label' => 'Заголовок',
            'name' => 'svp_hero_title',
            'type' => 'text',
            'default_value' => 'ПОСЛУГИ',
        ),
        array(
            'key' => 'field_svp_hero_subtitle',
            'label' => 'Підзаголовок',
            'name' => 'svp_hero_subtitle',
            'type' => 'textarea',
            'rows' => 2,
        ),

        array(
            'key' => 'field_svp_tab_intro',
            'label' => 'Вступ',
            'type' => 'tab',
        ),
        array(
            'key' => 'field_svp_intro_title',
            'label' => 'Заголовок',
            'name' => 'svp_intro_title',
            'type' => 'text',
            'default_value' => 'Чому обирають нас?',
        ),
        array(
            'key' => 'field_svp_intro_text',
            'label' => 'Текст',
            'name' => 'svp_intro_text',
            'type' => 'wysiwyg',
            'toolbar' => 'basic',
            'media_upload' => 0,
        ),
        array(
            'key' => 'field_svp_intro_image',
            'label' => 'Зображення',
            'name' => 'svp_intro_image',
            'type' => 'image',
            'return_format' => 'url',
        ),

        array(
            'key' => 'field_svp_tab_process',
            'label' => 'Процес',
            'type' => 'tab',
        ),
        array(
            'key' => 'field_svp_process_title',
            'label' => 'Заголовок',
            'name' => 'svp_process_title',
            'type' => 'text',
            'default_value' => 'Як проходить лікування',
        ),
        array(
            'key' => 'field_svp_process_steps',
            'label' => 'Кроки',
            'name' => 'svp_process_steps',
            'type' => 'repeater',
            'min' => 0,
            'max' => 10,
            'layout' => 'table',
            'sub_fields' => array(
                array(
                    'key' => 'field_svp_step_number',
                    'label' => '№',
                    'name' => 'number',
                    'type' => 'text',
                ),
                array(
                    'key' => 'field_svp_step_title',
                    'label' => 'Назва',
                    'name' => 'title',
                    'type' => 'text',
                ),
                array(
                    'key' => 'field_svp_step_text',
                    'label' => 'Опис',
                    'name' => 'text',
                    'type' => 'textarea',
                    'rows' => 2,
                ),
            ),
        ),

        array(
            'key' => 'field_svp_tab_cta',
            'label' => 'CTA',
            'type' => 'tab',
        ),
        array(
            'key' => 'field_svp_cta_title',
            'label' => 'Заголовок',
            'name' => 'svp_cta_title',
            'type' => 'text',
            'default_value' => 'Готові записатись?',
        ),
        array(
            'key' => 'field_svp_cta_text',
            'label' => 'Опис',
            'name' => 'svp_cta_text',
            'type' => 'textarea',
            'rows' => 2,
        ),
        array(
            'key' => 'field_svp_cta_btn',
            'label' => 'Текст кнопки',
            'name' => 'svp_cta_btn',
            'type' => 'text',
            'default_value' => 'Записатись на прийом',
        ),
        array(
            'key' => 'field_svp_cta_bg',
            'label' => 'Фонове зображення',
            'name' => 'svp_cta_bg',
            'type' => 'image',
            'return_format' => 'url',
        ),
    ),
    'location' => array(
        array(
            array(
                'param' => 'page_template',
                'operator' => '==',
                'value' => 'page-templates/template-services.php',
            ),
        ),
    ),
    'menu_order' => 0,
));

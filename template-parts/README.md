# Template Parts

Эта папка содержит переиспользуемые части шаблонов (партиалы) для улучшения масштабируемости и поддержки темы.

## Использование партиалов

### case-item.php
Шаблон для отображения кейсов (до/после)

```php
<?php
get_template_part('template-parts/case-item', null, array(
    'before_image' => 'https://example.com/before.jpg',
    'after_image' => 'https://example.com/after.jpg',
    'title' => 'НАЗВА КЕЙСУ',
    'description' => 'Опис кейсу',
    'hover_title' => 'РЕЗУЛЬТАТ',
    'hover_description' => 'Опис результату'
));
?>
```

### section-header.php
Шаблон для заголовков секций

```php
<?php
get_template_part('template-parts/section-header', null, array(
    'label' => 'РЕАЛІЗОВАНІ КЕЙСИ',
    'title' => 'НАШІ<br>РЕЗУЛЬТАТИ'
));
?>
```

## Преимущества использования партиалов

1. **Масштабируемость** - Легко добавлять новые секции без дублирования кода
2. **Поддержка** - Изменения в одном месте применяются везде
3. **Чистота кода** - Меньше повторяющегося HTML/PHP
4. **Гибкость** - Легко создавать новые варианты страниц

## Пример рефакторинга front-page.php

Вместо:
```php
<div class="concierge-item-wrapper">
    <div class="concierge-item concierge-item-default">
        <!-- 20+ строк HTML -->
    </div>
</div>
```

Используйте:
```php
<?php get_template_part('template-parts/case-item', null, $case_data); ?>
```

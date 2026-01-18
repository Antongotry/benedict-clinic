<?php
/**
 * The template for displaying 404 pages (Not Found)
 */

get_header();
?>

<section class="error-404-section">
    <div class="error-404-background"></div>
    <div class="error-404-content">
        <span class="error-404-label">ПОМИЛКА</span>
        <h1 class="error-404-title">404</h1>
        <p class="error-404-subtitle">Сторінку не знайдено</p>
        <p class="error-404-text">На жаль, сторінка, яку ви шукаєте, не існує або була переміщена.</p>
        <div class="error-404-buttons">
            <a href="<?php echo home_url('/'); ?>" class="error-404-btn error-404-btn-primary">На головну</a>
            <button type="button" class="error-404-btn error-404-btn-secondary" id="error-contact-btn">Зв'язатися з нами</button>
        </div>
    </div>
    <div class="error-404-decoration">
        <span class="error-404-deco-text">PAGE NOT FOUND</span>
    </div>
</section>

<!-- Contact Modal for 404 -->
<div class="consultation-modal" id="error-modal" aria-hidden="true">
    <div class="consultation-modal-backdrop" data-error-close></div>
    <div class="consultation-modal-content" role="dialog" aria-modal="true">
        <button class="consultation-modal-close" type="button" aria-label="Закрити" data-error-close></button>
        <div class="consultation-modal-header">
            <h3 class="consultation-modal-title">Зв'язатися з нами</h3>
        </div>
        <form class="consultation-modal-form" id="error-modal-form">
            <label class="consultation-modal-field">
                <span>ПІБ</span>
                <input type="text" name="name" required placeholder="Введіть ваше повне ім'я">
            </label>
            <label class="consultation-modal-field">
                <span>Телефон</span>
                <input type="tel" name="phone" required placeholder="+380 XX XXX XX XX">
            </label>
            <button class="consultation-modal-submit btn-primary" type="submit">Зателефонувати мені</button>
        </form>
        <div class="consultation-modal-success" id="error-modal-success" hidden>
            <h4>Дякуємо!</h4>
            <p>Ваша заявка прийнята. Ми звʼяжемось з вами найближчим часом.</p>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const modal = document.getElementById('error-modal');
    const form = document.getElementById('error-modal-form');
    const success = document.getElementById('error-modal-success');
    const openBtn = document.getElementById('error-contact-btn');
    const closeBtns = document.querySelectorAll('[data-error-close]');
    const submitBtn = form ? form.querySelector('button[type="submit"]') : null;
    
    function openModal() {
        modal.classList.add('active');
        modal.setAttribute('aria-hidden', 'false');
        document.body.style.overflow = 'hidden';
    }
    
    function closeModal() {
        modal.classList.remove('active');
        modal.setAttribute('aria-hidden', 'true');
        document.body.style.overflow = '';
    }
    
    openBtn.addEventListener('click', openModal);
    
    closeBtns.forEach(btn => btn.addEventListener('click', closeModal));
    
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && modal.classList.contains('active')) closeModal();
    });
    
    form.addEventListener('submit', function(e) {
        e.preventDefault();
        
        if (typeof rosenbergAjax !== 'undefined') {
            if (submitBtn) {
                submitBtn.disabled = true;
                submitBtn.textContent = 'Відправка...';
            }
            
            const formData = new FormData(form);
            formData.append('action', 'benedict_form_submit');
            formData.append('nonce', rosenbergAjax.nonce);
            formData.append('form_type', 'Форма зі сторінки 404');
            
            fetch(rosenbergAjax.ajaxurl, {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    form.hidden = true;
                    success.hidden = false;
                    setTimeout(closeModal, 3000);
                } else {
                    alert(data.data.message || 'Помилка');
                    if (submitBtn) {
                        submitBtn.disabled = false;
                        submitBtn.textContent = 'Зателефонувати мені';
                    }
                }
            })
            .catch(() => {
                form.hidden = true;
                success.hidden = false;
                setTimeout(closeModal, 3000);
            });
        } else {
            form.hidden = true;
            success.hidden = false;
            setTimeout(closeModal, 3000);
        }
    });
});
</script>

<?php get_footer(); ?>

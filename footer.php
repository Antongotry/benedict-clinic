</div><!-- #content -->

<?php
$phone_primary = bf_option('phone_primary', '+38 095 13 44 029');
$brand_name = bf_option('brand_name', 'DR. BENEDICT');
$brand_subtitle = bf_option('brand_subtitle', 'UROLOGY');
$contact_address = bf_option('contact_address', 'Київ, вул. Олеся Бердника, 1Д');
?>

<footer class="site-footer">
    <!-- Primary Footer -->
    <div class="primary-footer container--full-width-padding">
        <div class="footer-content">
            <div class="footer-menu-section">
                <div class="footer-menu-column">
                    <h4>НАВІГАЦІЯ</h4>
                    <ul>
                        <li><a href="<?php echo home_url('/'); ?>">Головна</a></li>
                        <li><a href="<?php echo home_url('/dr-benedict'); ?>">Про лікаря</a></li>
                        <li><a href="<?php echo home_url('/blog'); ?>">Корисні статті</a></li>
                        <li><a href="<?php echo home_url('/contact'); ?>">Контакти</a></li>
                    </ul>
                </div>
                <div class="footer-menu-column">
                    <h4>ПОСЛУГИ</h4>
                    <ul>
                        <li><a href="<?php echo home_url('/consultation'); ?>">Консультація</a></li>
                        <li><a href="<?php echo home_url('/treatment'); ?>">Лікування</a></li>
                        <li><a href="<?php echo home_url('/ultrasound'); ?>">УЗД діагностика</a></li>
                        <li><a href="<?php echo home_url('/surgery'); ?>">Оперативні втручання</a></li>
                        <li><a href="<?php echo home_url('/plastic-urology'); ?>">Пластична урологія</a></li>
                        <li><a href="<?php echo home_url('/conservative-treatment'); ?>">Консервативне лікування</a></li>
                    </ul>
                </div>
                <div class="footer-menu-column">
                    <h4>ІНФОРМАЦІЯ</h4>
                    <ul>
                        <li><a href="<?php echo home_url('/services'); ?>">Всі послуги</a></li>
                        <li><a href="<?php echo home_url('/privacy-policy'); ?>">Політика конфіденційності</a></li>
                        <li><a href="<?php echo home_url('/quiz-ipss'); ?>">IPSS — сечовипускання</a></li>
                        <li><a href="<?php echo home_url('/quiz-iief'); ?>">IIEF — еректильна функція</a></li>
                    </ul>
                </div>
                <div class="footer-menu-column footer-contact-section">
                    <h4>КОНТАКТИ</h4>
                    <p class="footer-phone"><a href="tel:<?php echo esc_attr(preg_replace('/[^+0-9]/', '', $phone_primary)); ?>"><?php echo esc_html($phone_primary); ?></a></p>
                    <p class="footer-address"><?php echo esc_html($contact_address); ?></p>
                    <a href="<?php echo home_url('/'); ?>" class="footer-logo">
                        <span class="footer-logo-text"><?php echo esc_html($brand_name); ?></span>
                        <span class="footer-logo-sub"><?php echo esc_html($brand_subtitle); ?></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Secondary Footer -->
    <div class="secondary-footer">
        <div class="secondary-footer-container container--md">
            <p class="footer-copyright">Copyright © 2026. Benedikt.com | Doktor Benedikt</p>
            <p class="footer-credit">Дизайн і розробка <a href="https://t.me/notarikon" target="_blank" rel="noopener noreferrer">AntonGotry</a></p>
        </div>
    </div>
</footer>

<!-- Consultation Modal (Global) -->
<div class="consultation-modal" id="consultation-modal" aria-hidden="true">
    <div class="consultation-modal-backdrop" data-consultation-close></div>
    <div class="consultation-modal-content" role="dialog" aria-modal="true" aria-labelledby="consultation-modal-title">
        <button class="consultation-modal-close" type="button" aria-label="Закрити" data-consultation-close></button>
        <div class="consultation-modal-header">
            <h3 class="consultation-modal-title" id="consultation-modal-title">Записатись на прийом</h3>
            <p class="consultation-modal-service" id="consultation-modal-service" style="display:none;"></p>
        </div>
        <form class="consultation-modal-form" id="consultation-modal-form">
            <input type="hidden" name="service" id="consultation-service-input">
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
        <div class="consultation-modal-success" id="consultation-modal-success" hidden>
            <h4>Дякуємо!</h4>
            <p>Ваша заявка прийнята. Ми зв'яжемось з вами найближчим часом для підтвердження запису.</p>
        </div>
    </div>
</div>

<script>
// Consultation Modal
(function() {
    const modal = document.getElementById('consultation-modal');
    const modalForm = document.getElementById('consultation-modal-form');
    const modalSuccess = document.getElementById('consultation-modal-success');
    const modalTitle = document.getElementById('consultation-modal-title');
    const modalService = document.getElementById('consultation-modal-service');
    const serviceInput = document.getElementById('consultation-service-input');
    const openBtns = document.querySelectorAll('[data-consultation-open]');
    const closeBtns = document.querySelectorAll('[data-consultation-close]');
    
    if (!modal) return;
    
    function openModal(serviceName) {
        // Handle service name from data-service attribute
        if (serviceName) {
            if (modalTitle) modalTitle.textContent = 'Записатись на послугу';
            if (modalService) {
                modalService.textContent = serviceName;
                modalService.style.display = 'block';
            }
            if (serviceInput) serviceInput.value = serviceName;
        } else {
            if (modalTitle) modalTitle.textContent = 'Записатись на прийом';
            if (modalService) {
                modalService.textContent = '';
                modalService.style.display = 'none';
            }
            if (serviceInput) serviceInput.value = '';
        }
        
        modal.classList.add('active');
        modal.setAttribute('aria-hidden', 'false');
        document.body.style.overflow = 'hidden';
        if (modalForm) {
            modalForm.reset();
            modalForm.hidden = false;
            if (serviceName && serviceInput) serviceInput.value = serviceName;
        }
        if (modalSuccess) modalSuccess.hidden = true;
    }
    
    function closeModal() {
        modal.classList.remove('active');
        modal.setAttribute('aria-hidden', 'true');
        document.body.style.overflow = '';
        if (modalForm) modalForm.reset();
        if (modalSuccess) modalSuccess.hidden = true;
        if (modalForm) modalForm.hidden = false;
    }
    
    openBtns.forEach(function(btn) {
        btn.addEventListener('click', function(e) {
            e.preventDefault();
            var serviceName = this.getAttribute('data-service') || '';
            openModal(serviceName);
        });
    });
    
    closeBtns.forEach(function(btn) {
        btn.addEventListener('click', closeModal);
    });
    
    // Close on Escape
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && modal.classList.contains('active')) {
            closeModal();
        }
    });
    
    // Form submit
    if (modalForm) {
        modalForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            var submitBtn = modalForm.querySelector('button[type="submit"]');
            if (submitBtn) {
                submitBtn.disabled = true;
                submitBtn.textContent = 'Відправка...';
            }
            
            var formData = new FormData(modalForm);
            formData.append('action', 'benedict_form_submit');
            formData.append('form_type', 'Консультація з сайту');
            formData.append('nonce', typeof rosenbergAjax !== 'undefined' ? rosenbergAjax.nonce : '');
            
            fetch(typeof rosenbergAjax !== 'undefined' ? rosenbergAjax.ajaxurl : '/wp-admin/admin-ajax.php', {
                method: 'POST',
                body: formData
            })
            .then(function(response) { return response.json(); })
            .then(function(data) {
                modalForm.hidden = true;
                modalSuccess.hidden = false;
                if (submitBtn) {
                    submitBtn.disabled = false;
                    submitBtn.textContent = 'Зателефонувати мені';
                }
                setTimeout(closeModal, 3000);
            })
            .catch(function(error) {
                modalForm.hidden = true;
                modalSuccess.hidden = false;
                if (submitBtn) {
                    submitBtn.disabled = false;
                    submitBtn.textContent = 'Зателефонувати мені';
                }
                setTimeout(closeModal, 3000);
            });
        });
    }
})();
</script>

<?php wp_footer(); ?>
</body>
</html>

</div><!-- #content -->

<?php
// Language switcher - detect current language (for footer)
$current_path_footer = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$is_english = (substr($current_path_footer, 0, 4) === '/en/' || $current_path_footer === '/en');
?>

<footer class="site-footer">
    <!-- Primary Footer -->
    <div class="primary-footer container--full-width-padding">
        <div class="footer-content">
            <div class="footer-menu-section">
                <div class="footer-menu-column">
                    <h4>НАВІГАЦІЯ</h4>
                    <ul>
                        <li><a href="/">Головна</a></li>
                        <li><a href="/dr-benedict">Про лікаря</a></li>
                        <li><a href="/blog">Корисні статті</a></li>
                        <li><a href="/services">Послуги</a></li>
                    </ul>
                </div>
                <div class="footer-menu-column">
                    <h4>ІНФОРМАЦІЯ</h4>
                    <ul>
                        <li><a href="/contact">Контакти</a></li>
                        <li><a href="<?php echo home_url('/privacy-policy'); ?>">Політика конфіденційності</a></li>
                    </ul>
                </div>
                <div class="footer-menu-column">
                    <h4>КВІЗИ</h4>
                    <ul>
                        <li><a href="/quiz-ipss">IPSS — сечовипускання</a></li>
                        <li><a href="/quiz-iief">IIEF — еректильна функція</a></li>
                        <li><a href="/quiz-nih-cpsi">NIH-CPSI — простатит</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-contact-section">
                <p class="footer-phone"><a href="tel:+380951344029">+38 095 13 44 029</a></p>
                <p class="footer-address">Київ, вул. Олеся Бердника, 1Д</p>
                <div class="footer-language-switcher">
                    <a href="#" class="lang-link lang-uk<?php echo !$is_english ? ' active' : ''; ?>" data-lang="uk">UK</a>
                    <span class="lang-divider">|</span>
                    <a href="#" class="lang-link lang-en<?php echo $is_english ? ' active' : ''; ?>" data-lang="en">EN</a>
                </div>
                <a href="<?php echo home_url('/'); ?>" class="footer-logo">
                    <span class="footer-logo-text">DR. BENEDICT</span>
                    <span class="footer-logo-sub">UROLOGY</span>
                </a>
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
        </div>
        <form class="consultation-modal-form" id="consultation-modal-form">
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
    const openBtns = document.querySelectorAll('[data-consultation-open]');
    const closeBtns = document.querySelectorAll('[data-consultation-close]');
    
    if (!modal) return;
    
    function openModal() {
        modal.classList.add('active');
        modal.setAttribute('aria-hidden', 'false');
        document.body.style.overflow = 'hidden';
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
            openModal();
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
            
            const formData = new FormData(modalForm);
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
                setTimeout(closeModal, 3000);
            })
            .catch(function(error) {
                modalForm.hidden = true;
                modalSuccess.hidden = false;
                setTimeout(closeModal, 3000);
            });
        });
    }
})();
</script>

<script>
// Language Switcher
document.addEventListener('DOMContentLoaded', function() {
    const langLinks = document.querySelectorAll('.lang-link[data-lang]');
    
    langLinks.forEach(function(link) {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            
            const targetLang = this.getAttribute('data-lang');
            let currentPath = window.location.pathname;
            let newPath;
            
            // Check if currently on English
            const isOnEnglish = currentPath.startsWith('/en/') || currentPath === '/en';
            
            if (targetLang === 'en') {
                // Switch to English
                if (!isOnEnglish) {
                    if (currentPath === '/') {
                        newPath = '/en/';
                    } else {
                        newPath = '/en' + currentPath;
                    }
                } else {
                    newPath = currentPath; // Already on English
                }
            } else {
                // Switch to Ukrainian
                if (isOnEnglish) {
                    // Remove /en from path
                    newPath = currentPath.replace(/^\/en\/?/, '/');
                    if (newPath === '' || newPath === '/en') {
                        newPath = '/';
                    }
                } else {
                    newPath = currentPath; // Already on Ukrainian
                }
            }
            
            // Navigate to new path
            window.location.href = newPath;
        });
    });
});
</script>

<?php wp_footer(); ?>
</body>
</html>

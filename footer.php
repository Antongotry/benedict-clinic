</div><!-- #content -->

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
                        <li><a href="/blog">Блог</a></li>
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
                    <a href="<?php echo home_url('/'); ?>" class="lang-link lang-uk<?php echo (strpos($_SERVER['REQUEST_URI'], '/en/') === false) ? ' active' : ''; ?>">UK</a>
                    <span class="lang-divider">|</span>
                    <a href="<?php echo home_url('/en/'); ?>" class="lang-link lang-en<?php echo (strpos($_SERVER['REQUEST_URI'], '/en/') !== false) ? ' active' : ''; ?>">EN</a>
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

<?php wp_footer(); ?>
</body>
</html>

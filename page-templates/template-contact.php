<?php
/**
 * Template Name: Contact Page
 * Contact page with form and map
 */

get_header();
?>

<section class="contact-page-hero">
    <div class="contact-page-hero-bg"></div>
    <div class="contact-page-hero-content">
        <span class="contact-page-label">КОНТАКТИ</span>
        <h1 class="contact-page-title">Зв'яжіться з нами</h1>
        <p class="contact-page-subtitle">Ми завжди раді допомогти вам з будь-якими питаннями</p>
    </div>
</section>

<section class="contact-page-main">
    <div class="container">
        <div class="contact-page-grid">
            <!-- Contact Info -->
            <div class="contact-page-info">
                <h2 class="contact-page-info-title">Контактна інформація</h2>
                
                <div class="contact-page-items">
                    <div class="contact-page-item">
                        <div class="contact-page-icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="12" cy="12" r="10"/>
                                <polyline points="12,6 12,12 16,14"/>
                            </svg>
                        </div>
                        <div class="contact-page-item-content">
                            <span class="contact-page-item-label">Робочий час</span>
                            <p class="contact-page-item-value">Пн - Пт: 9:00 - 18:00</p>
                            <p class="contact-page-item-note">Сб, Нд - Вихідний</p>
                        </div>
                    </div>
                    
                    <div class="contact-page-item">
                        <div class="contact-page-icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                <rect x="2" y="4" width="20" height="16" rx="2"/>
                                <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/>
                            </svg>
                        </div>
                        <div class="contact-page-item-content">
                            <span class="contact-page-item-label">Електронна пошта</span>
                            <a href="mailto:dokbenedikt@gmail.com" class="contact-page-item-value contact-page-link">dokbenedikt@gmail.com</a>
                        </div>
                    </div>
                    
                    <div class="contact-page-item">
                        <div class="contact-page-icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/>
                            </svg>
                        </div>
                        <div class="contact-page-item-content">
                            <span class="contact-page-item-label">Телефон</span>
                            <a href="tel:+380967771087" class="contact-page-item-value contact-page-link">+38 096 777 10 87</a>
                        </div>
                    </div>
                    
                    <div class="contact-page-item">
                        <div class="contact-page-icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/>
                                <circle cx="12" cy="10" r="3"/>
                            </svg>
                        </div>
                        <div class="contact-page-item-content">
                            <span class="contact-page-item-label">Адреса</span>
                            <p class="contact-page-item-value">Київ, вул. Олеся Бердника, 1Д</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Contact Form -->
            <div class="contact-page-form-wrapper">
                <h2 class="contact-page-form-title">Напишіть нам</h2>
                <form class="contact-page-form" id="contact-page-form">
                    <div class="contact-page-form-row">
                        <label class="contact-page-field">
                            <span>Ім'я *</span>
                            <input type="text" name="name" required placeholder="Ваше ім'я">
                        </label>
                        <label class="contact-page-field">
                            <span>Телефон *</span>
                            <input type="tel" name="phone" required placeholder="+380 XX XXX XX XX">
                        </label>
                    </div>
                    <label class="contact-page-field">
                        <span>Email</span>
                        <input type="email" name="email" placeholder="example@email.com">
                    </label>
                    <label class="contact-page-field">
                        <span>Повідомлення</span>
                        <textarea name="message" rows="5" placeholder="Опишіть ваше питання..."></textarea>
                    </label>
                    <button class="contact-page-submit" type="submit">Надіслати</button>
                </form>
                <div class="contact-page-success" id="contact-page-success" hidden>
                    <h4>Дякуємо!</h4>
                    <p>Ваше повідомлення надіслано. Ми зв'яжемося з вами найближчим часом.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Map Section -->
<section class="contact-page-map">
    <iframe 
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2541.8761486772!2d30.4557!3d50.4217!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d4c5a5d8e6c18d%3A0x5e6f9d9d9d9d9d9d!2z0LLRg9C7LiDQntC70LXRgdGPINCR0LXRgNC00L3QuNC60LAsIDFELCDQmtC40ZfQsg!5e0!3m2!1suk!2sua!4v1234567890123!5m2!1suk!2sua" 
        width="100%" 
        height="500" 
        style="border:0;" 
        allowfullscreen="" 
        loading="lazy" 
        referrerpolicy="no-referrer-when-downgrade">
    </iframe>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('contact-page-form');
    const success = document.getElementById('contact-page-success');
    
    if (form) {
        form.addEventListener('submit', function(e) {
            e.preventDefault();
            form.hidden = true;
            success.hidden = false;
        });
    }
});
</script>

<?php get_footer(); ?>

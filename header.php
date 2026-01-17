<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header id="header-40cd750b" class="header container--full-width-padding">
    <div class="header-wrapper">
        <!-- Left Section: Phone + Instagram -->
        <div class="header-left">
            <a href="tel:+380967771087" class="header-item header-phone">+380-96-777-10-87</a>
            <a href="https://www.instagram.com/dr_benedikt?igsh=MW96azF4YXFtM2ExMw==" target="_blank" rel="noopener" class="header-item header-instagram" aria-label="Instagram">
                <svg class="icon icon-instagram" width="16" height="16" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                    <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                </svg>
                <span>@dr_benedikt</span>
            </a>
        </div>
        
        <!-- Center Section: Logo -->
        <div class="header-center">
            <a href="<?php echo home_url('/'); ?>" class="header-brand">
                <span class="header-brand-name">DR BENEDICT</span>
                <span class="header-brand-subtitle">UROLOGY</span>
            </a>
        </div>
        
        <!-- Right Section: Links + Menu -->
        <div class="header-right">
            <a href="<?php echo home_url('/dr-benedict'); ?>" class="header-item header-link">DR. BENEDICT</a>
            <a href="<?php echo home_url('/gallery'); ?>" class="header-item header-link">GALLERY</a>
            <a href="<?php echo home_url('/contact'); ?>" class="header-item header-link">CONTACT US</a>
            <button class="header-item header-menu-btn" id="menuToggle" aria-label="Toggle Menu">
                <span class="menu-text">MENU</span>
                <span class="hamburger" aria-hidden="true">
                    <span class="hamburger-line"></span>
                    <span class="hamburger-line"></span>
                    <span class="hamburger-line"></span>
                </span>
            </button>
        </div>
    </div>
</header>

<!-- Full Screen Overlay Menu -->
<div class="overlay-menu" id="overlayMenu">
    <div class="overlay-background"></div>
    <div class="overlay-content">
        <div class="overlay-left">
            <nav class="overlay-nav-primary">
                <ul>
                    <li><a href="<?php echo home_url('/'); ?>">HOME</a></li>
                    <li><a href="<?php echo home_url('/dr-benedict'); ?>">DR. BENEDICT</a></li>
                    <li><a href="/deep-plane-facelift">DEEP PLANE FACELIFT</a></li>
                    <li><a href="/facial-plastic-surgery">FACIAL PLASTIC SURGERY</a></li>
                    <li><a href="/hair-restoration">HAIR RESTORATION</a></li>
                    <li><a href="/gallery">GALLERY</a></li>
                    <li><a href="/our-surgeons">OUR SURGEONS</a></li>
                </ul>
            </nav>
            
            <nav class="overlay-nav-secondary">
                <ul>
                    <li><a href="/clinic">CLINIC</a></li>
                    <li><a href="/art">ART</a></li>
                    <li><a href="/our-philosophy">OUR PHILOSOPHY</a></li>
                    <li><a href="/out-of-town-patients">OUT OF TOWN PATIENTS</a></li>
                    <li><a href="/patient-information">PATIENT INFORMATION</a></li>
                    <li><a href="/contact">CONTACT US</a></li>
                </ul>
            </nav>
        </div>
        
        <div class="overlay-right">
            <div class="overlay-brand">
                <div class="overlay-logo">
                    <span class="overlay-logo-name">DR BENEDICT</span>
                    <span class="overlay-logo-subtitle">UROLOGY</span>
                </div>
            </div>
            
            <div class="overlay-contact">
                <p class="overlay-phone">+380-96-777-10-87</p>
                <p class="overlay-address">
                    225 E 64th St.<br>
                    New York, NY 10065
                </p>
            </div>
            
            <div class="overlay-social">
                <a href="https://www.instagram.com/dr_benedikt?igsh=MW96azF4YXFtM2ExMw==" target="_blank" aria-label="Instagram">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                    </svg>
                </a>
                <a href="https://facebook.com" target="_blank" aria-label="Facebook">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</div>

<div id="content" class="site-content">



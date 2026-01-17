<?php
/**
 * Template Name: Contact Page
 */

get_header();
?>

<section class="page-header section-padding bg-light">
    <div class="container">
        <h1 class="page-title">Contact Us</h1>
        <p class="page-subtitle">Schedule Your Consultation</p>
    </div>
</section>

<section class="contact-info-section section-padding">
    <div class="container">
        <div class="contact-info-grid">
            <div class="contact-info-card">
                <div class="info-icon">
                    <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                    </svg>
                </div>
                <h3>Phone</h3>
                <p><a href="tel:212-832-8595">212-832-8595</a></p>
            </div>
            
            <div class="contact-info-card">
                <div class="info-icon">
                    <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                        <circle cx="12" cy="10" r="3"></circle>
                    </svg>
                </div>
                <h3>Address</h3>
                <p>225 E 64th St.<br>New York, NY 10065</p>
            </div>
            
            <div class="contact-info-card">
                <div class="info-icon">
                    <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <circle cx="12" cy="12" r="10"></circle>
                        <polyline points="12 6 12 12 16 14"></polyline>
                    </svg>
                </div>
                <h3>Hours</h3>
                <p>Mon-Fri: 8am – 5pm<br>Sat-Sun: Closed</p>
            </div>
        </div>
    </div>
</section>

<section class="contact-form-section section-padding bg-light">
    <div class="container">
        <div class="contact-form-container">
            <h2 class="section-title text-center">Request a Consultation</h2>
            <p class="text-center">Fill out the form below and we'll get back to you as soon as possible</p>
            
            <div class="contact-form-wrapper">
                <?php echo do_shortcode('[contact-form-7 id="1" title="Contact Form"]'); ?>
                
                <!-- Fallback HTML form if CF7 not installed -->
                <form class="contact-form" method="post" action="">
                    <div class="form-row">
                        <div class="form-group">
                            <label for="first-name">First Name *</label>
                            <input type="text" id="first-name" name="first-name" required>
                        </div>
                        <div class="form-group">
                            <label for="last-name">Last Name *</label>
                            <input type="text" id="last-name" name="last-name" required>
                        </div>
                    </div>
                    
                    <div class="form-row">
                        <div class="form-group">
                            <label for="email">Email *</label>
                            <input type="email" id="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone *</label>
                            <input type="tel" id="phone" name="phone" required>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="procedure">Procedure of Interest</label>
                        <select id="procedure" name="procedure">
                            <option value="">Select a procedure</option>
                            <option value="deep-plane-facelift">Deep Plane Facelift</option>
                            <option value="rhinoplasty">Rhinoplasty</option>
                            <option value="brow-lift">Brow Lift</option>
                            <option value="blepharoplasty">Blepharoplasty</option>
                            <option value="hair-transplant">Hair Transplant</option>
                            <option value="other">Other</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea id="message" name="message" rows="5"></textarea>
                    </div>
                    
                    <button type="submit" class="btn-primary">Send Message</button>
                </form>
            </div>
        </div>
    </div>
</section>

<section class="map-section">
    <div class="map-container">
        <iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3021.9507897935516!2d-73.96469668459399!3d40.76438967932711!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c258eb5f8d9f47%3A0x7be7a830b5b3e3ea!2s225%20E%2064th%20St%2C%20New%20York%2C%20NY%2010065!5e0!3m2!1sen!2sus!4v1635000000000!5m2!1sen!2sus" 
            width="100%" 
            height="450" 
            style="border:0;" 
            allowfullscreen="" 
            loading="lazy">
        </iframe>
    </div>
</section>

<?php
get_footer();







# Dr. Rosenberg Clinic WordPress Theme

A custom WordPress theme for Dr. David Rosenberg Facial Plastic Surgery practice, featuring a modern, elegant design with full functionality for showcasing procedures, galleries, and patient information.

## Features

- ✅ Responsive design (mobile, tablet, desktop)
- ✅ Hero section with video background
- ✅ Custom post types (Procedures, Gallery, Team Members)
- ✅ Before/After image comparison sliders
- ✅ Contact Form 7 integration
- ✅ Photo gallery with carousel
- ✅ Team member showcase
- ✅ Concierge services section
- ✅ Instagram feed integration
- ✅ Smooth scroll navigation
- ✅ Mobile menu toggle
- ✅ SEO-friendly markup

## Installation & Setup

### 1. Activate the Theme

1. Log in to your WordPress admin panel
2. Go to **Appearance → Themes**
3. Find "Dr. Rosenberg Clinic" theme
4. Click **Activate**

### 2. Activate Contact Form 7

1. Go to **Plugins**
2. Find "Contact Form 7" plugin (already installed in `/wp-content/plugins/`)
3. Click **Activate**

### 3. Create Contact Forms

After activating Contact Form 7:

1. Go to **Contact → Contact Forms**
2. Create a new form or edit the default one
3. Use this form code:

```html
<label>First Name*
[text* first-name]</label>

<label>Last Name*
[text* last-name]</label>

<label>Email*
[email* your-email]</label>

<label>Phone*
[tel* phone]</label>

<label>Procedure of Interest
[select procedure "Deep Plane Facelift" "Rhinoplasty" "Brow Lift" "Blepharoplasty" "Hair Transplant" "Other"]</label>

<label>Message
[textarea your-message]</label>

[submit "Send Message"]
```

4. Save the form and copy the shortcode (e.g., `[contact-form-7 id="1"]`)
5. The shortcode is already included in the homepage and contact page templates

### 4. Create Pages

Create the following pages in **Pages → Add New**:

#### Homepage
- **Title**: Home
- **Template**: Front Page
- Set as Homepage in **Settings → Reading → Your homepage displays: A static page → Homepage: Home**

#### Gallery Page
- **Title**: Photo Gallery
- **Template**: Gallery Page

#### Contact Page
- **Title**: Contact Us
- **Template**: Contact Page

#### About Page
- **Title**: About
- **Template**: About Page

#### Procedure Pages
Create individual pages for each procedure:
- **Deep Plane Facelift** (Template: Procedure Page)
- **Rhinoplasty** (Template: Procedure Page)
- **Brow Lift** (Template: Procedure Page)
- **Blepharoplasty** (Template: Procedure Page)
- **Hair Transplant** (Template: Procedure Page)

### 5. Create Navigation Menus

Go to **Appearance → Menus**:

#### Primary Menu
Create a menu named "Primary Menu" with these items:
- Home
- Dr. Rosenberg (dropdown)
  - David Rosenberg, MD
  - In the Press
  - Reviews
- Deep Plane Facelift
- Facial Plastic Surgery (dropdown)
  - Deep Plane Facelift
  - Rhinoplasty
  - Endoscopic Brow Lift
  - Blepharoplasty
  - Lip Lift
- Hair Restoration (dropdown)
  - Hair Transplant
  - TED
  - PRP For Hair Loss
- Gallery
- Contact Us

Assign to location: **Primary Menu**

#### Footer Menus
Create additional menus for footer sections and assign to appropriate locations.

### 6. Upload Logo

1. Go to **Appearance → Customize → Site Identity**
2. Upload your clinic logo
3. Adjust logo size if needed

### 7. Add Gallery Items (Optional)

If you want to use custom post types:

1. Go to **Gallery → Add New**
2. Add title (e.g., "Facelift Result")
3. Add Before Image URL and After Image URL in the custom fields
4. Set featured image
5. Publish

### 8. Add Team Members (Optional)

1. Go to **Team Members → Add New**
2. Add doctor name as title
3. Add biography in the content area
4. Add specialty in the custom field
5. Set featured image (portrait)
6. Publish

## Customization

### Colors

Edit colors in `/assets/css/theme.css`:

```css
:root {
    --primary-color: #2c3e50;
    --accent-color: #c9a961;
    /* ... other colors ... */
}
```

### Images

Replace stock images in `/assets/images/` with your own:
- Hero video: `/assets/videos/hero-video.mp4`
- Doctor portraits: `/assets/images/team/`
- Gallery images: `/assets/images/gallery/`
- Procedure images: `/assets/images/`

### Content

Edit text content directly in the theme files:
- Homepage: `front-page.php`
- Templates: `page-templates/`

## Support

For support or customization requests, contact the theme developer.

## Credits

- Theme developed for Dr. David Rosenberg Facial Plastic Surgery
- Stock images from Unsplash and Pexels
- Icons: Custom SVG icons

## License

This theme is proprietary and licensed for use by Dr. David Rosenberg Facial Plastic Surgery practice only.

---

**Version:** 1.0.0  
**Last Updated:** October 2025







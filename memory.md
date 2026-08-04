# Rich & Well Website — Project Memory

## Project
- Path: `c:\Users\USER\Videos\All in One\rich and well\website\`
- Stack: Pure HTML/CSS/JS + Tailwind CDN + Font Awesome
- Theme: Light/dark mode via `data-theme` attribute on `<html>`; toggled by JS, saved to localStorage

## Pages
- index.html — Homepage
- about.html — About Us
- compensation.html — Compensation Plan
- contact.html — Contact
- faq.html — FAQ
- foundation.html — Foundation
- opportunity.html — Opportunity
- testimonials.html — Testimonials
- wellness-devices.html — Wellness Devices (full product catalogue)
- login.html — Login
- signup.html — Signup

## Key CSS Variables (styles.css)
- `--bg-primary`, `--bg-secondary`, `--text-primary`, `--text-secondary`
- `--accent-blue`: #1452b1, `--accent-green`: #42841F, `--accent-yellow`: #ffc00a
- `.container-pro`: max-width 1280px, centered, padding 1rem (mobile) → 2rem (desktop)

---

## Global Elements

### Navbar
- Fixed top, `id="navbar"`, scrolled styles in styles.css
- Desktop links: Home | About Us (dropdown: Testimonials, FAQ) | Wellness Devices | Opportunity | Foundation | Compensation Plan | Contact
- Mobile: hamburger menu panel
- Theme toggle button: 34px size (reduced from default)
- compensation.html navbar: links use `color: var(--text-primary)` (not text-gray-300) so visible on light bg

### Footer (all pages except login/signup)
- Dark background `#050e17`
- Newsletter CTA section at top (double `container-pro` — intentional, matches index.html)
- Main grid: Brand | Company | Wellness Devices | Opportunity | Resources | Stay Connected
- Mobile: collapsible accordion columns
- `.footer-mission-section`: background `linear-gradient(rgba(5,14,23,0.65), rgba(5,14,23,0.65)), url(images/footer.jpeg)` — dark overlay on footer.jpeg
- Tagline: RESTORE SMARTER PROSPER FREELY LIVE FULLY
- Footer bottom bar: copyright | logo (h-5) | "Designed for Wellness. Built for Impact." — all centered
- `html, body { margin:0; padding:0; overflow-x:hidden }` — no whitespace after footer

---

## Homepage (index.html)

### Hero
- Full-screen dark hero with background image `images/hero bg.png`
- Left: heading, subheading, CTA buttons; Right: stats

### How It Works / Steps Section
- Stat items: "Join a community built on integrity, innovation & impact" (text-xs, no overflow), 50+ Products (no sub-description), 20+ Passive Income Streams (no sub-description), 100% Support (no sub-description)

### Wellness Devices Section (`id="wellness-devices"`)
- **Flagship Banner**: background `images/product/flagship 101 background.png` (object-cover), product image `images/product/flagship 101.png` desktop (left:35%, full height), mobile (centered, width:80%)
- Left copy: OUR FLAGSHIP DEVICE label, TriVitalis heading, B.E.S.T. subtitle (desktop only), green subheading, description (desktop only), 4 icon badges (all screens), 220px spacer (mobile only for bg image to show), stacked full-width buttons on mobile
- Right: 5 feature cards (desktop lg only)
- Mobile overlay: top-to-bottom gradient (opaque top/bottom, transparent middle)
- Desktop overlay: left-to-right gradient

### Terahertz Series Banner (between "Explore More" heading and 3-product grid)
- Desktop: `images/terahertz series.png` background, full natural height (`h-auto`), dark left overlay, "PRODUCT SERIES" + "Terahertz Series" heading top-left, "Explore Devices →" button linking to wellness-devices.html
- Mobile: "Terahertz Series" text in `#1452b1` blue, then `images/terahertz series m.png` below it

### 3-Product Grid (desktop) / Mobile Slider
- Desktop: 3-col grid, white cards, image left (140×140 contain), name + description + "View Details →"
- Section heading: "Explore More Wellness Devices"
- Card 1: Women Tummy Control Underwear — `images/product/Women Tummy Control Underwear.jpeg`, FEATURED badge
- Card 2: Hydrogen Rich Water Dispenser — `images/product/hydrogen water dispenser.jpeg`
- Card 3: AI Foot Massager — `images/product/AI Foot Massager.jpeg`
- Mobile: single-card slider with left/right arrow buttons, dot indicators, auto-scrolls every 3s, swipe support, loops back to card 1

---

## Wellness Devices Page (wellness-devices.html)

### Hero
- Background: `images/wellnesshero.jpeg`
- `.wd-hero-section`: padding-top 170px desktop, 80px mobile
- `html,body { background:#f0f4ff }` — prevents dark bg on mobile

### Flagship Product Section
- Desktop: left panel = `flagship 101 background.png` (object-cover) + `flagship 101.png` (100%×100% contain) layered on top; right panel = full product details
- Mobile: same background + product image treatment (90% width, max 320px)
- Product: **TriVitalis** — Bio-Energetic Synchronization Technology (B.E.S.T.)
  - 253 Wellness Complexes, 18-Hour Power, 8-Language Interface, Certified & Patented (Ministry of Health RF, Russia/EU/CIS), Complete Kit (PC software + USB programmer), Globally Researched (Russia/USA/China/Japan/India), Portable Luxury
  - Price: $1500 / ₦2,400,000
  - Full details shown on BOTH mobile and desktop

### Product Grid (All Products)
- Filter sidebar (desktop) + product cards grid
- Products include (not exhaustive): TriVitalis, IonSync, AI Foot Massager, Hydrogen Water Dispenser, Lumara Elite, Terahertz Energy Life Device, Countertop Hydrogen Water Dispenser, Polaris Vitalis, **Shield** (formerly EMF Anti Radiation Sticker — $1.5/₦2,400, "Stay Connected. Stay Protected."), Abdominal Heating Pad for Menstrual Pain ($6.5/₦10,000), Women Tummy Control Underwear ($17/₦27,000)

---

## About Page (about.html)

### Who We Are Section
- Before "WHO WE ARE" label: new heading block —
  - "THE NEW PROFESSIONALS." (blue #1452b1)
  - "THE NEW ECONOMY." (green #42841F)
  - "THE NEW WEALTH." (gold #ffc00a)
  - Description: "We are a Direct Sales Company on a mission to restore optimal living through advanced Frequency Healing Technology, and to create intentional wealth through a simple, duplicatable business model designed for the African Family."

### Our Foundation Section Cards
- Text under each card header is in brackets, no significant space between bracket text and header

---

## Compensation Plan Page (compensation.html)

### Navbar
- Links use `color: var(--text-primary)` — visible on light background on page load
- Active "Compensation Plan" link: `color: var(--accent-blue)`, font-weight 600

### Your Leadership Journey Section
- Background: `var(--bg-primary)` (ash/light grey — same as Reverse 2-Up and Power of 4)
- Layout: 2-col grid — left: heading ("YOUR JOURNEY" label + "Your Leadership Journey" h2 + blue bar + intro text); right: styled card with 3 numbered rules + "Why We Do This" blue highlight box
- Image removed, old commented-out code cleaned

### Footer
- Same structure as homepage (double container-pro for newsletter CTA is intentional)
- `<footer>` has `overflow-hidden` class

---

## Foundation Page (foundation.html)

### Our WHY Section
- At end of section (after "Friends of the Poor, Champions of the Needy."): disclaimer box
  - Blue tinted bg + blue border
  - "IMPORTANT DISCLAIMER / REJOINDER" header
  - "The Rich & Well Foundation does not solicit funds from the general public. Ever."
  - "Every humanitarian project we execute across our 15 pillars is self-funded from the profits generated by our core business activities."

---

## Login & Signup Pages

### Mobile Improvements
- `pt-20 sm:pt-32` — reduced top padding on mobile
- Card padding: `p-5 sm:p-8 md:p-12` (tighter on small screens)
- Logo/heading sizes scaled for mobile
- Trust badges: `sm:grid-cols-3`, smaller icons on mobile

---

## styles.css Key Sections
- Line ~62: `html, body { overflow-x:hidden; margin:0; padding:0 }`
- Line ~91: `.container-pro` — max-width 1280px
- Line ~798: `body.light-hero #navbar` — light hero pages navbar dark text
- Line ~1371: Footer CSS begins (`.footer-tagline`, `.footer-mission-section`, etc.)
- Line ~1648: `.footer-mission-section` — footer.jpeg background with dark overlay

---

## Image Reference
- `images/footer.jpeg` — footer mission section background
- `images/wellnessdevices.jpeg` — formerly used as homepage flagship bg (now replaced)
- `images/terahertz series.png` — desktop terahertz banner background
- `images/terahertz series m.png` — mobile terahertz image
- `images/product/flagship 101 background.png` — flagship section background
- `images/product/flagship 101.png` — TriVitalis product image (bg removed)
- `images/product/trivitalis.jpeg` — alternate TriVitalis image
- `images/product/Women Tummy Control Underwear.jpeg`
- `images/product/hydrogen water dispenser.jpeg`
- `images/product/AI Foot Massager.jpeg`
- `images/product/Abdominal Heating Pad for Menstrual Pain.jpeg`
- `images/product/emf radiation sticker.jpeg` — used for Shield product
- `images/abdominal heat pad.jpeg` — in root images folder

---

## Decisions Log
- Double `container-pro` in footer newsletter CTA is intentional (matches index.html)
- `object-fit:cover` used for product images in cards (no padding/whitespace)
- Category tabs in wellness-devices: `flex:1; min-width:80px; justify-content:space-evenly`
- footer.jpeg path: `url(images/footer.jpeg)` — same directory as styles.css
- Mobile slider auto-advances every 3s, resets on manual swipe
- Flagship 101 product image: `width:100%; height:100%; object-fit:contain` (no max-width) on desktop left panel
- Tablet band (768–1023): homepage hero uses mobile layout only (`lg` cutoff) — no overlapping `md` desktop slider/content. Mid layouts use `md:grid-cols-2` for advocacy/how-it-works/flagship. CSS tablet block in styles.css.
- Footer accordion: closed by default through 1023px (`.footer-col-toggle + .footer-col-links { display:none }`). Opens only with `.is-open` on click. Desktop grid links unaffected (no toggle sibling).
- Footer join CTA: on ≤1023px centered stack (no bleed negative margins, no forced `<br>`). Classes: `.footer-join-cta`, `.footer-join-cta-bg`, `.footer-join-cta-inner`, `.footer-join-cta-actions`.

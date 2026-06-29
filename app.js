
      // FAQ Accordion functionality
      document.querySelectorAll(".faq-accordion").forEach((accordion) => {
        accordion.addEventListener("click", function () {
          this.classList.toggle("active");
          const panel = this.nextElementSibling;

          if (panel.style.maxHeight) {
            panel.style.maxHeight = null;
            this.querySelector("i").classList.remove("fa-minus");
            this.querySelector("i").classList.add("fa-plus");
          } else {
            panel.style.maxHeight = panel.scrollHeight + "px";
            this.querySelector("i").classList.remove("fa-plus");
            this.querySelector("i").classList.add("fa-minus");
          }
        });
      });

      // Intersection Observer for Scroll Reveal Animations (Premium Overhaul)
      const observerOptions = {
        root: null,
        rootMargin: '0px 0px 200px 0px', // Trigger even earlier, especially for footer
        threshold: 0.08 // Trigger when 8% of element is visible (lower threshold = easier trigger)
      };

      const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            entry.target.classList.add('is-visible');
            observer.unobserve(entry.target);
          }
        });
      }, observerOptions);

      document.querySelectorAll('.reveal-up').forEach(el => {
        observer.observe(el);
      });

      // Desktop Hero Slider
      let currentSlide = 0;
      const totalSlides = 2;
      const desktopSliderSlides = document.querySelectorAll('.desktop-slider-slide');
      const desktopSlideContents = document.querySelectorAll('.desktop-slide-content');

      function goToSlide(index) {
        desktopSliderSlides.forEach((slide, i) => {
          slide.classList.remove('active');
          if (i === index) {
            slide.classList.add('active');
          }
        });

        desktopSlideContents.forEach((content, i) => {
          content.classList.remove('active');
          content.classList.add('opacity-0');
          if (i === index) {
            content.classList.add('active');
            content.classList.remove('opacity-0');
          }
        });
      }

      function nextSlide() {
        currentSlide = (currentSlide + 1) % totalSlides;
        goToSlide(currentSlide);
      }

      // Auto advance every 5 seconds
      setInterval(nextSlide, 5000);
    


      const themeToggle = document.getElementById("themeToggle");
      const themeToggleMobile = document.getElementById("themeToggleMobile");
      const mobileMenuBtn = document.getElementById("mobileMenuBtn");
      const mobileMenuBackdrop = document.getElementById("mobileMenuBackdrop");
      const mobileMenu = document.getElementById("mobileMenu");
      const mobileNavLinks = document.querySelectorAll("#mobileNav .mobile-nav-link");
      const navbar = document.getElementById("navbar");

      // Function to toggle theme
      function toggleTheme() {
        const isDark = document.documentElement.classList.toggle("dark");
        document.documentElement.classList.toggle("light", !isDark);
        const newTheme = isDark ? "dark" : "light";
        document.documentElement.setAttribute("data-theme", newTheme);
        localStorage.setItem("theme", newTheme);
      }

      if (themeToggle) themeToggle.addEventListener("click", toggleTheme);
      if (themeToggleMobile) themeToggleMobile.addEventListener("click", toggleTheme);

      [themeToggle, themeToggleMobile].forEach((btn) => {
        if (!btn) return;
        btn.addEventListener("keydown", (e) => {
          if (e.key === "Enter" || e.key === " ") {
            e.preventDefault();
            toggleTheme();
          }
        });
      });

      // Mobile Menu Toggle
      function setMobileMenuOpen(isOpen) {
        mobileMenuBtn.setAttribute("aria-expanded", isOpen ? "true" : "false");
        mobileMenuBtn.setAttribute("aria-label", isOpen ? "Close menu" : "Open menu");
        mobileMenuBtn.classList.toggle("is-open", isOpen);
        mobileMenu.classList.toggle("is-open", isOpen);
        mobileMenuBackdrop.classList.toggle("is-open", isOpen);
        mobileMenu.setAttribute("aria-hidden", isOpen ? "false" : "true");
        mobileMenuBackdrop.setAttribute("aria-hidden", isOpen ? "false" : "true");
        navbar.classList.toggle("is-blurred", isOpen); // Blur navbar when mobile menu is open
        document.body.style.overflow = isOpen ? "hidden" : "";
      }

      mobileMenuBtn.addEventListener("click", () => {
        const isOpen = mobileMenu.classList.contains("is-open");
        setMobileMenuOpen(!isOpen);
      });

      mobileMenuBackdrop.addEventListener("click", () => {
        setMobileMenuOpen(false);
      });

      document.addEventListener("keydown", (e) => {
        if (e.key === "Escape" && mobileMenu.classList.contains("is-open")) {
          setMobileMenuOpen(false);
        }
      });

      mobileNavLinks.forEach((link) => {
        link.addEventListener("click", () => {
          setMobileMenuOpen(false);
        });
      });

      // Active mobile nav link on scroll
      const sectionIds = ["home", "about", "wellness-devices", "opportunity", "compensation", "testimonials", "faq", "contact"];
      function updateActiveNavLink() {
        const scrollPos = window.scrollY + 100;
        let current = "home";
        sectionIds.forEach((id) => {
          const el = document.getElementById(id);
          if (el && el.offsetTop <= scrollPos) current = id;
        });
        mobileNavLinks.forEach((link) => {
          const href = link.getAttribute("href");
          link.classList.toggle("active", href === "#" + current);
        });
      }
      window.addEventListener("scroll", updateActiveNavLink);
      updateActiveNavLink();



      // Navbar scroll behavior
      window.addEventListener("scroll", () => {
        if (window.scrollY > 50) {
          navbar.classList.add("scrolled");
        } else {
          navbar.classList.remove("scrolled");
        }
      });

      // Footer mobile accordion
      document.querySelectorAll(".footer-col-toggle").forEach((toggle) => {
        toggle.addEventListener("click", () => {
          if (window.innerWidth >= 1024) return;
          const links = toggle.nextElementSibling;
          const isOpen = links.classList.contains("is-open");
          document.querySelectorAll(".footer-col-links.is-open").forEach((el) => {
            el.classList.remove("is-open");
          });
          document.querySelectorAll(".footer-col-toggle[aria-expanded='true']").forEach((btn) => {
            btn.setAttribute("aria-expanded", "false");
          });
          if (!isOpen) {
            links.classList.add("is-open");
            toggle.setAttribute("aria-expanded", "true");
          }
        });
      });

      // Newsletter form
      function handleNewsletterSubmit(e, messageEl) {
        e.preventDefault();
        if (messageEl) {
          messageEl.textContent = "Thank you for subscribing!";
          messageEl.classList.remove("hidden");
        }
        e.target.reset();
      }

      const newsletterForm = document.getElementById("newsletterForm");
      const newsletterMessage = document.getElementById("newsletterMessage");
      const newsletterFormDesktop = document.getElementById("newsletterFormDesktop");
      const newsletterMessageDesktop = document.getElementById("newsletterMessageDesktop");

      if (newsletterForm) {
        newsletterForm.addEventListener("submit", (e) => handleNewsletterSubmit(e, newsletterMessage));
      }
      if (newsletterFormDesktop) {
        newsletterFormDesktop.addEventListener("submit", (e) => handleNewsletterSubmit(e, newsletterMessageDesktop));
      }

      // Reveal animation fallback
      setTimeout(() => {
        document.querySelectorAll(".reveal-up:not(.is-visible)").forEach((el) => {
          el.classList.add("is-visible");
        });
      }, 2500);
    

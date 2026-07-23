from pathlib import Path
import re

files = [
    'about.html', 'compensation.html', 'contact.html', 'faq.html', 'foundation.html',
    'index.html', 'login.html', 'opportunity.html', 'signup.html', 'testimonials.html', 'wellness-devices.html'
]

footer_html = '''<footer
      class="pt-10 pb-8 md:pt-12 md:pb-12 border-t relative overflow-hidden"
      style="background: linear-gradient(135deg, rgba(4, 16, 30, 0.94) 0%, rgba(4, 118, 178, 0.82) 100%), url('images/footer.jpeg') center/cover no-repeat; border-color: rgba(20, 82, 177, 0.2);"
    >
      <div class="absolute inset-0" style="background: rgba(0,0,0,0.16);"></div>
      <div class="container-pro relative z-10">
        <div class="rounded-[2rem] border border-white/20 overflow-hidden shadow-2xl mb-10" style="background: linear-gradient(135deg, rgba(255,255,255,0.18) 0%, rgba(255,255,255,0.06) 100%); backdrop-filter: blur(8px);">
          <div class="px-6 py-10 md:px-10 lg:px-14 text-center">
            <p class="uppercase tracking-[0.35em] text-xs md:text-sm text-white/70 font-semibold mb-3">Rich &amp; Well</p>
            <h2 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-black uppercase leading-tight text-white" style="text-shadow: 0 4px 20px rgba(0,0,0,0.35);">
              RESTORE SMARTER.<br class="md:hidden" />
              PROSPER FREELY.<br class="md:hidden" />
              LIVE FULLY.
            </h2>
          </div>
        </div>

        <div class="news relative mb-16">
          <div class="container-pro relative z-10">
            <div class="rounded-2xl overflow-hidden border border-[rgba(20,82,177,0.3)]" style="background: rgba(5,14,23,0.95); width: calc(100% + 4rem); margin-left: -2rem; margin-right: -2rem;">
              <div class="p-6 md:p-8 lg:p-10">
                <style>
                  @media (min-width: 1280px) {
                    .cta-heading {
                      margin-left: -14rem !important;
                    }
                    .cta-divider {
                      margin-left: -14rem !important;
                    }
                    .cta-button {
                      width: 70% !important;
                      margin-left: -10rem !important;
                    }
                  }
                </style>
                <div class="grid grid-cols-1 lg:grid-cols-4 gap-5 items-center">
                  <div class="flex justify-center lg:justify-start">
                    <div class="w-11 h-11 rounded-full border border-[rgba(20,82,177,0.5)] flex items-center justify-center" style="background: rgba(20,82,177,0.1)">
                      <i class="fas fa-users text-xl" style="color: #1452b1"></i>
                    </div>
                  </div>
                  <div class="text-center lg:text-left">
                    <h2 class="text-xl md:text-2xl font-bold cta-heading" style="color: white; font-weight: 700; line-height: 1.2;">
                      Ready To Begin Your<br />
                      <span style="color: #1452b1">Rich</span> &amp;
                      <span style="color: #487319">Well</span> Journey?
                    </h2>
                  </div>
                  <div class="flex items-center gap-5 cta-divider">
                    <div class="hidden lg:block w-px h-12 bg-gray-600"></div>
                    <p class="text-gray-300 text-xs leading-relaxed text-center lg:text-left" style="font-weight: 400;">
                      Join a global wellness and empowerment ecosystem<br />
                      designed to help you live healthier, earn smarter,<br />
                      and create lasting impact.
                    </p>
                  </div>
                  <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-end items-center">
                    <button class="btn-blue px-4 py-3 rounded-full text-xs flex items-center gap-2 justify-center w-full sm:w-auto cta-button" style="font-weight: 600;" onclick="window.location.href='signup.html'">
                      BECOME A MEMBER
                      <i class="fas fa-arrow-right"></i>
                    </button>
                    <button class="px-4 py-3 rounded-full text-xs border border-[rgba(255,192,10,0.5)] text-white flex items-center gap-2 justify-center w-full sm:w-auto" style="font-weight: 500; background: rgba(0,0,0,0.2);" onclick="window.location.href='contact.html'">
                      <i class="fas fa-phone" style="color: #ffc00a"></i>
                      SPEAK TO A CONSULTANT
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="footer-main-grid hidden lg:grid">
          <div>
            <img src="images/logo.png" alt="Rich &amp; Well" class="h-12 w-auto" loading="lazy" />
            <p class="footer-brand-desc" style="font-weight: 400;">
              Empowering wellness through innovative frequency technologies and life-changing opportunities.
            </p>
            <div class="footer-social-row">
              <a href="#" class="footer-social-btn rounded-full flex items-center justify-center transition" aria-label="Facebook"><i class="fab fa-facebook" style="color: white"></i></a>
              <a href="#" class="footer-social-btn rounded-full flex items-center justify-center transition" aria-label="Instagram"><i class="fab fa-instagram" style="color: white"></i></a>
              <a href="#" class="footer-social-btn rounded-full flex items-center justify-center transition" aria-label="TikTok"><i class="fab fa-tiktok" style="color: white"></i></a>
              <a href="#" class="footer-social-btn rounded-full flex items-center justify-center transition" aria-label="YouTube"><i class="fab fa-youtube" style="color: white"></i></a>
            </div>
          </div>
          <div>
            <h4 class="footer-col-heading footer-col-heading--blue">COMPANY</h4>
            <ul class="footer-col-links list-none p-0 m-0">
              <li><a href="about.html">About Us</a></li>
              <li><a href="about.html">Our Mission</a></li>
              <li><a href="about.html">Leadership</a></li>
              <li><a href="testimonials.html">Success Stories</a></li>
              <li><a href="about.html">News &amp; Blog</a></li>
              <li><a href="contact.html">Contact Us</a></li>
            </ul>
          </div>
          <div>
            <h4 class="footer-col-heading footer-col-heading--green">WELLNESS DEVICES</h4>
            <ul class="footer-col-links list-none p-0 m-0">
              <li><a href="wellness-devices.html">B.E.S.T. Therapy</a></li>
              <li><a href="wellness-devices.html">Terahertz Wave</a></li>
              <li><a href="wellness-devices.html">Frequency Collection</a></li>
              <li><a href="wellness-devices.html">Accessories</a></li>
              <li><a href="wellness-devices.html">Wellness Solutions</a></li>
            </ul>
          </div>
          <div>
            <h4 class="footer-col-heading footer-col-heading--gold">OPPORTUNITY</h4>
            <ul class="footer-col-links list-none p-0 m-0">
              <li><a href="opportunity.html">Why Rich &amp; Well</a></li>
              <li><a href="compensation.html">Compensation Plan</a></li>
              <li><a href="opportunity.html">Become A Distributor</a></li>
              <li><a href="testimonials.html">Testimonials</a></li>
              <li><a href="faq.html">FAQs</a></li>
            </ul>
          </div>
          <div>
            <h4 class="footer-col-heading footer-col-heading--blue">RESOURCES</h4>
            <ul class="footer-col-links list-none p-0 m-0">
              <li><a href="faq.html">Support Center</a></li>
              <li><a href="faq.html">Shipping Policy</a></li>
              <li><a href="faq.html">Returns &amp; Refunds</a></li>
              <li><a href="faq.html">Terms of Use</a></li>
              <li><a href="faq.html">Privacy Policy</a></li>
              <li><a href="faq.html">Legal Disclaimer</a></li>
            </ul>
          </div>
          <div>
            <h4 class="footer-col-heading footer-col-heading--green">STAY CONNECTED</h4>
            <p class="text-gray-400 text-xs mb-4 leading-relaxed" style="font-weight: 400;">
              Receive wellness insights, product updates, and community news.
            </p>
            <form id="newsletterFormDesktop" class="footer-newsletter-input-wrap">
              <input type="email" placeholder="Enter your email address" class="flex-1 rounded-l-lg px-4 py-3 text-xs text-white border border-gray-600 focus:outline-none focus:ring-2 focus:ring-blue-500" style="background: rgba(255,255,255,0.05); font-weight: 400;" required />
              <button type="submit" class="btn-primary rounded-r-lg px-4 py-3 text-xs" style="font-weight: 600; color: white;">
                <i class="fas fa-arrow-right"></i>
              </button>
            </form>
            <div id="newsletterMessageDesktop" class="hidden text-green-400 text-xs mt-2" style="font-weight: 500;"></div>
            <div class="flex items-center gap-2 mt-4">
              <i class="fas fa-shield-alt text-xs" style="color: #42841F"></i>
              <p class="text-gray-500 text-[10px]" style="font-weight: 400;">
                We respect your privacy.
              </p>
            </div>
          </div>
        </div>

        <div class="lg:hidden">
          <div class="text-center pb-8 mb-8 border-b" style="border-color: rgba(255,255,255,0.08);">
            <img src="images/logo.png" alt="Rich &amp; Well Logo" class="h-16 w-auto mx-auto mb-4" loading="lazy" />
            <p class="text-gray-400 text-sm mb-6 leading-relaxed max-w-md mx-auto" style="font-weight: 400">
              Empowering wellness through innovative frequency technologies and life-changing opportunities.
            </p>
            <div class="flex flex-wrap justify-center gap-3">
              <a href="#" class="footer-social-btn w-11 h-11 rounded-full flex items-center justify-center transition" aria-label="Facebook"><i class="fab fa-facebook text-sm" style="color: white"></i></a>
              <a href="#" class="footer-social-btn w-11 h-11 rounded-full flex items-center justify-center transition" aria-label="Instagram"><i class="fab fa-instagram text-sm" style="color: white"></i></a>
              <a href="#" class="footer-social-btn w-11 h-11 rounded-full flex items-center justify-center transition" aria-label="TikTok"><i class="fab fa-tiktok text-sm" style="color: white"></i></a>
              <a href="#" class="footer-social-btn w-11 h-11 rounded-full flex items-center justify-center transition" aria-label="YouTube"><i class="fab fa-youtube text-sm" style="color: white"></i></a>
            </div>
          </div>
          <div class="grid grid-cols-1 gap-0 mb-8">
            <div class="border-b" style="border-color: rgba(255,255,255,0.08);">
              <button type="button" class="footer-col-toggle w-full flex items-center justify-between py-4" aria-expanded="false">
                <h4 class="text-xs tracking-wider uppercase relative inline-block" style="color: white; font-weight: 600; padding-bottom: 6px">COMPANY<span class="absolute left-0 bottom-0 w-8 h-0.5 rounded-full" style="background: #1452b1"></span></h4>
                <i class="fas fa-chevron-down footer-chevron text-gray-500 text-xs"></i>
              </button>
              <ul class="footer-col-links space-y-3 text-sm text-gray-400 pb-4">
                <li><a href="about.html" class="hover:text-white transition block">About Us</a></li>
                <li><a href="about.html" class="hover:text-white transition block">Our Mission</a></li>
                <li><a href="testimonials.html" class="hover:text-white transition block">Success Stories</a></li>
                <li><a href="contact.html" class="hover:text-white transition block">Contact Us</a></li>
              </ul>
            </div>
            <div class="border-b" style="border-color: rgba(255,255,255,0.08);">
              <button type="button" class="footer-col-toggle w-full flex items-center justify-between py-4" aria-expanded="false">
                <h4 class="text-xs tracking-wider uppercase relative inline-block" style="color: white; font-weight: 600; padding-bottom: 6px">WELLNESS DEVICES<span class="absolute left-0 bottom-0 w-8 h-0.5 rounded-full" style="background: #42841F"></span></h4>
                <i class="fas fa-chevron-down footer-chevron text-gray-500 text-xs"></i>
              </button>
              <ul class="footer-col-links space-y-3 text-sm text-gray-400 pb-4">
                <li><a href="wellness-devices.html" class="hover:text-white transition block">B.E.S.T. Therapy</a></li>
                <li><a href="wellness-devices.html" class="hover:text-white transition block">Terahertz Wave</a></li>
                <li><a href="wellness-devices.html" class="hover:text-white transition block">Frequency Collection</a></li>
              </ul>
            </div>
            <div class="border-b" style="border-color: rgba(255,255,255,0.08);">
              <button type="button" class="footer-col-toggle w-full flex items-center justify-between py-4" aria-expanded="false">
                <h4 class="text-xs tracking-wider uppercase relative inline-block" style="color: white; font-weight: 600; padding-bottom: 6px">OPPORTUNITY<span class="absolute left-0 bottom-0 w-8 h-0.5 rounded-full" style="background: #ffc00a"></span></h4>
                <i class="fas fa-chevron-down footer-chevron text-gray-500 text-xs"></i>
              </button>
              <ul class="footer-col-links space-y-3 text-sm text-gray-400 pb-4">
                <li><a href="opportunity.html" class="hover:text-white transition block">Why Rich &amp; Well</a></li>
                <li><a href="compensation.html" class="hover:text-white transition block">Compensation Plan</a></li>
                <li><a href="opportunity.html" class="hover:text-white transition block">Become A Distributor</a></li>
                <li><a href="testimonials.html" class="hover:text-white transition block">Testimonials</a></li>
                <li><a href="faq.html" class="hover:text-white transition block">FAQs</a></li>
              </ul>
            </div>
            <div class="border-b" style="border-color: rgba(255,255,255,0.08);">
              <button type="button" class="footer-col-toggle w-full flex items-center justify-between py-4" aria-expanded="false">
                <h4 class="text-xs tracking-wider uppercase relative inline-block" style="color: white; font-weight: 600; padding-bottom: 6px">RESOURCES<span class="absolute left-0 bottom-0 w-8 h-0.5 rounded-full" style="background: #1452b1"></span></h4>
                <i class="fas fa-chevron-down footer-chevron text-gray-500 text-xs"></i>
              </button>
              <ul class="footer-col-links space-y-3 text-sm text-gray-400 pb-4">
                <li><a href="faq.html" class="hover:text-white transition block">Support Center</a></li>
                <li><a href="faq.html" class="hover:text-white transition block">Shipping Policy</a></li>
                <li><a href="faq.html" class="hover:text-white transition block">Returns &amp; Refunds</a></li>
                <li><a href="faq.html" class="hover:text-white transition block">Terms of Use</a></li>
                <li><a href="faq.html" class="hover:text-white transition block">Privacy Policy</a></li>
              </ul>
            </div>
          </div>
          <form id="newsletterFormMobile" class="w-full max-w-md mx-auto">
            <label class="block text-center text-xs uppercase tracking-wider mb-3" style="color: #9ca3af; font-weight: 600;">Stay Connected</label>
            <div class="flex rounded-lg overflow-hidden border border-gray-600">
              <input type="email" placeholder="Email address" class="flex-1 px-4 py-3 text-sm text-white" style="background: rgba(255,255,255,0.08); font-weight: 400;" required />
              <button type="submit" class="btn-primary px-4 py-3 text-sm" style="font-weight: 600; color: white;">
                <i class="fas fa-arrow-right"></i>
              </button>
            </div>
            <div id="newsletterMessageMobile" class="hidden text-green-400 text-xs mt-2 text-center" style="font-weight: 500;"></div>
          </form>
        </div>

        <div class="mt-10 pt-6 border-t text-center text-gray-400 text-xs" style="border-color: rgba(255,255,255,0.08);">
          <p style="font-weight: 400;">
            © 2026 Rich &amp; Well. All rights reserved.
          </p>
        </div>
      </div>
    </footer>'''

for name in files:
    path = Path(name)
    text = path.read_text(encoding='utf-8')
    new_text, count = re.subn(r'<footer\b[^>]*>.*?</footer>', footer_html, text, count=1, flags=re.S | re.I)
    if count:
        path.write_text(new_text, encoding='utf-8')
        print(f'updated {name}')
    else:
        print(f'no footer found in {name}')

/* =============================================
   SAKAZUKI Corporate Site - script.js
   ============================================= */

document.addEventListener('DOMContentLoaded', () => {

  // --- Mobile Menu ---
  const menuBtn = document.getElementById('menuBtn');
  const navOverlay = document.getElementById('navOverlay');
  const navLinks = document.querySelectorAll('.nav-link');

  menuBtn.addEventListener('click', () => {
    menuBtn.classList.toggle('active');
    navOverlay.classList.toggle('active');
    document.body.style.overflow = navOverlay.classList.contains('active') ? 'hidden' : '';
  });

  navLinks.forEach(link => {
    link.addEventListener('click', () => {
      menuBtn.classList.remove('active');
      navOverlay.classList.remove('active');
      document.body.style.overflow = '';
    });
  });

  // --- Header scroll effect ---
  const header = document.getElementById('header');
  window.addEventListener('scroll', () => {
    header.classList.toggle('scrolled', window.scrollY > 50);
  });

  // --- Scroll fade-in animations ---
  // Elements that should fade in on scroll (NOT hero elements which are visible on load)
  const fadeEls = document.querySelectorAll('.section-header, .about-catch, .about-text, .business-card, .service-card, .work-grid, .news-item, .company-layout, .contact-form, .footer-inner, .icon-grid, .case-grid, .recruit-intro-content, .wanted-cards, .flow-steps, .conditions-list, .news-list, .work-filter');

  fadeEls.forEach(el => el.classList.add('fade-in'));

  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('visible');
      }
    });
  }, {
    threshold: 0.1,
    rootMargin: '0px 0px -50px 0px'
  });

  fadeEls.forEach(el => observer.observe(el));

  // --- Contact form ---
  const contactForm = document.getElementById('contactForm');
  if (contactForm) {
    contactForm.addEventListener('submit', (e) => {
      e.preventDefault();
      alert('お問い合わせを受け付けました。\n後ほどWordPressのContact Form 7に置き換えます。');
    });
  }

  // --- Entry form (recruit page) ---
  const entryForm = document.getElementById('entryForm');
  if (entryForm) {
    entryForm.addEventListener('submit', (e) => {
      e.preventDefault();
      alert('エントリーを受け付けました。\n後ほどWordPressのContact Form 7に置き換えます。');
    });
  }

  // --- Work filter (work-all page) ---
  const filterBtns = document.querySelectorAll('.work-filter-btn');
  const workGrid = document.getElementById('workGrid');

  if (filterBtns.length > 0 && workGrid) {
    filterBtns.forEach(btn => {
      btn.addEventListener('click', () => {
        // Update active state
        filterBtns.forEach(b => b.classList.remove('active'));
        btn.classList.add('active');

        const filter = btn.dataset.filter;
        const items = workGrid.querySelectorAll('.work-item');

        items.forEach(item => {
          if (filter === 'all' || item.dataset.category === filter) {
            item.style.display = 'block';
          } else {
            item.style.display = 'none';
          }
        });
      });
    });
  }

  // --- Show more button (work-all page) ---
  const showMoreBtn = document.getElementById('showMoreBtn');
  if (showMoreBtn) {
    showMoreBtn.addEventListener('click', () => {
      alert('WordPressに移行後、投稿が自動で読み込まれます。');
    });
  }

  // --- Smooth scroll for anchor links ---
  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', (e) => {
      const target = document.querySelector(anchor.getAttribute('href'));
      if (target) {
        e.preventDefault();
        target.scrollIntoView({ behavior: 'smooth' });
      }
    });
  });

});

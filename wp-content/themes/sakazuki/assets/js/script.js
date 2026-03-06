/* =============================================
   SAKAZUKI Corporate Site - script.js
   ============================================= */

document.addEventListener('DOMContentLoaded', () => {

  // --- Mobile Menu ---
  const menuBtn = document.getElementById('menuBtn');
  const navOverlay = document.getElementById('navOverlay');
  const navLinks = document.querySelectorAll('.nav-link');

  if (menuBtn && navOverlay) {
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
  }

  // --- Header scroll effect ---
  const header = document.getElementById('header');
  if (header) {
    window.addEventListener('scroll', () => {
      header.classList.toggle('scrolled', window.scrollY > 50);
    });
  }

  // --- Scroll fade-in animations ---
  const fadeEls = document.querySelectorAll('.section-header, .about-catch, .about-text, .business-card, .service-card, .news-item, .company-layout, .contact-form, .footer-inner, .icon-grid, .case-grid, .recruit-intro-content, .wanted-cards, .flow-steps, .conditions-list, .news-list');

  fadeEls.forEach(el => el.classList.add('fade-in'));

  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('visible');
      }
    });
  }, {
    threshold: 0.01,
    rootMargin: '0px 0px -50px 0px'
  });

  fadeEls.forEach(el => observer.observe(el));

  // --- Work filter (archive-work page) ---
  const filterBtns = document.querySelectorAll('.work-filter-btn');
  const workGrid = document.getElementById('workGrid');

  if (filterBtns.length > 0 && workGrid) {
    filterBtns.forEach(btn => {
      btn.addEventListener('click', () => {
        filterBtns.forEach(b => b.classList.remove('active'));
        btn.classList.add('active');

        const filter = btn.dataset.filter;
        const items = workGrid.querySelectorAll('.work-item');

        items.forEach(item => {
          const cats = item.dataset.category ? item.dataset.category.split(' ') : [];
          if (filter === 'all' || cats.includes(filter)) {
            item.style.display = 'block';
          } else {
            item.style.display = 'none';
          }
        });
      });
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

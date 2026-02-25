<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/webp" href="<?php echo sakazuki_image('logo-icon.webp'); ?>">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

  <?php if (is_front_page()) : ?>
  <!-- Splash Screen -->
  <div class="splash" id="splash">
    <div class="splash-logo">
      <img src="<?php echo sakazuki_image('logo.webp'); ?>" alt="SAKAZUKI">
    </div>
  </div>
  <script>
    setTimeout(function() {
      var s = document.getElementById('splash');
      if (s) s.classList.add('splash-hide');
    }, 2500);
    setTimeout(function() {
      var s = document.getElementById('splash');
      if (s) s.remove();
    }, 3600);
  </script>
  <?php endif; ?>

  <!-- Header -->
  <header class="header" id="header">
    <a href="<?php echo home_url('/'); ?>" class="header-logo">
      <img src="<?php echo sakazuki_image('logo.webp'); ?>" alt="SAKAZUKI">
    </a>
    <button class="header-menu" id="menuBtn" type="button" aria-label="<?php esc_attr_e('メニュー', 'sakazuki'); ?>">
      <span></span>
      <span></span>
      <span></span>
    </button>
  </header>

  <!-- Mobile Nav -->
  <nav class="nav-overlay" id="navOverlay">
    <div class="nav-inner">
      <a href="<?php echo home_url('/'); ?>#top" class="nav-link">TOP</a>
      <a href="<?php echo home_url('/'); ?>#about" class="nav-link">ABOUT</a>
      <a href="<?php echo home_url('/'); ?>#business" class="nav-link">BUSINESS</a>
      <a href="<?php echo home_url('/'); ?>#service" class="nav-link">SERVICE</a>
      <a href="<?php echo home_url('/'); ?>#work" class="nav-link">WORK</a>
      <a href="<?php echo home_url('/'); ?>#news" class="nav-link">NEWS</a>
      <a href="<?php echo home_url('/'); ?>#company" class="nav-link">COMPANY</a>
      <a href="<?php echo home_url('/'); ?>#contact" class="nav-link">CONTACT</a>
    </div>
  </nav>

  <!-- Fixed Background Video -->
  <video class="bg-video-fixed" autoplay muted loop playsinline>
    <source src="<?php echo sakazuki_asset('bg-video.mp4'); ?>" type="video/mp4">
  </video>

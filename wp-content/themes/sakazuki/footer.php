  <!-- Footer -->
  <footer class="footer">
    <div class="footer-inner">
      <div class="footer-left">
        <img src="<?php echo sakazuki_image('logo.webp'); ?>" alt="SAKAZUKI" class="footer-logo">
        <p class="footer-tagline">Take it easy, Make it better.</p>
        <p class="footer-sub">We are a production company in Fukuoka, Japan.</p>
      </div>
      <nav class="footer-nav">
        <div class="footer-nav-col">
          <a href="<?php echo home_url('/recruit/'); ?>">RECRUIT</a>
          <a href="<?php echo home_url('/'); ?>#business">BUSINESS</a>
          <a href="<?php echo home_url('/'); ?>#service">SERVICES</a>
          <a href="<?php echo home_url('/'); ?>#work">WORK</a>
        </div>
        <div class="footer-nav-col">
          <a href="<?php echo home_url('/'); ?>#news">NEWS</a>
          <a href="<?php echo home_url('/'); ?>#company">COMPANY</a>
          <a href="<?php echo home_url('/'); ?>#contact">CONTACT</a>
        </div>
      </nav>
    </div>
    <p class="footer-copy">&copy; <?php echo date('Y'); ?> SAKAZUKI.Inc All rights reserved.</p>
  </footer>

  <?php wp_footer(); ?>
</body>
</html>

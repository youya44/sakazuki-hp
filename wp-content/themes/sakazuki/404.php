<?php
/**
 * 404 Page Template
 */
get_header(); ?>

  <main>

    <section class="section section-subhero section-subhero-simple">
      <div class="section-inner">
        <div class="section-header">
          <h1 class="section-title-en">404</h1>
          <p class="section-title-ja">ページが見つかりません</p>
        </div>
      </div>
    </section>

    <section class="section">
      <div class="section-inner" style="text-align: center; padding: 60px 0;">
        <p style="color: #666; margin-bottom: 40px;">お探しのページは存在しないか、移動した可能性があります。</p>
        <a href="<?php echo home_url('/'); ?>" class="btn btn-primary">
          トップページへ <span class="material-symbols-outlined">keyboard_arrow_right</span>
        </a>
      </div>
    </section>

  </main>

<?php get_footer(); ?>

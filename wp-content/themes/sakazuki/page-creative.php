<?php
/**
 * Template Name: 制作事業
 */
get_header(); ?>

  <main>

    <!-- Hero -->
    <section class="section section-subhero">
      <div class="section-inner">
        <div class="subhero-layout">
          <div class="subhero-img">
            <img src="<?php echo sakazuki_image('work1.webp'); ?>" alt="制作事業">
          </div>
          <div class="subhero-text">
            <h1 class="subhero-title-en">CREATIVE</h1>
            <p class="subhero-title-ja">制作事業</p>
            <p class="subhero-desc">販促物のデザインやweb制作、映像制作を行います。クライアント様の社風やビジョンに合わせたご提案を行い、スタートアップから行政、老舗まで幅広く対応させて頂いています。クライアント様の想いや施策を制作物として企画からビジュアル化致します。また、立ち上げ時のデザインサポートや月額契約でのクリエイティブサポートも行っております。</p>
          </div>
        </div>
      </div>
    </section>

    <!-- SERVICE -->
    <section class="section section-subservice">
      <div class="section-inner">
        <div class="section-header">
          <h2 class="section-title-en">SERVICE</h2>
          <p class="section-title-ja">SAKAZUKIにできること</p>
        </div>
        <div class="icon-grid">
          <div class="icon-item"><div class="icon-box"><span class="material-symbols-outlined">credit_card</span></div><p>名刺</p></div>
          <div class="icon-item"><div class="icon-box"><span class="material-symbols-outlined">description</span></div><p>チラシ</p></div>
          <div class="icon-item"><div class="icon-box"><span class="material-symbols-outlined">image</span></div><p>ポスター</p></div>
          <div class="icon-item"><div class="icon-box"><span class="material-symbols-outlined">menu_book</span></div><p>パンフレット</p></div>
          <div class="icon-item"><div class="icon-box"><span class="material-symbols-outlined">confirmation_number</span></div><p>チケット</p></div>
          <div class="icon-item"><div class="icon-box"><span class="material-symbols-outlined">restaurant_menu</span></div><p>メニュー</p></div>
          <div class="icon-item"><div class="icon-box"><span class="material-symbols-outlined">print</span></div><p>印刷代行</p></div>
          <div class="icon-item"><div class="icon-box"><span class="material-symbols-outlined">draw</span></div><p>ロゴ</p></div>
          <div class="icon-item"><div class="icon-box"><span class="material-symbols-outlined">ad_units</span></div><p>バナー</p></div>
          <div class="icon-item"><div class="icon-box"><span class="material-symbols-outlined">landscape</span></div><p>キービジュアル</p></div>
          <div class="icon-item"><div class="icon-box"><span class="material-symbols-outlined">slideshow</span></div><p>資料</p></div>
          <div class="icon-item"><div class="icon-box"><span class="material-symbols-outlined">photo_camera</span></div><p>写真撮影</p></div>
          <div class="icon-item"><div class="icon-box"><span class="material-symbols-outlined">content_cut</span></div><p>画像切り抜き</p></div>
          <div class="icon-item"><div class="icon-box"><span class="material-symbols-outlined">auto_fix_high</span></div><p>写真加工</p></div>
          <div class="icon-item"><div class="icon-box"><span class="material-symbols-outlined">videocam</span></div><p>映像撮影</p></div>
          <div class="icon-item"><div class="icon-box"><span class="material-symbols-outlined">movie_edit</span></div><p>映像編集</p></div>
          <div class="icon-item"><div class="icon-box"><span class="material-symbols-outlined">web</span></div><p>webデザイン</p></div>
          <div class="icon-item"><div class="icon-box"><span class="material-symbols-outlined">code</span></div><p>webコーディング</p></div>
          <div class="icon-item"><div class="icon-box"><span class="material-symbols-outlined">dashboard_customize</span></div><p>CMS更新</p></div>
          <div class="icon-item"><div class="icon-box"><span class="material-symbols-outlined">shopping_cart</span></div><p>EC更新</p></div>
        </div>
      </div>
    </section>

    <!-- WORK -->
    <section class="section section-work">
      <div class="section-inner">
        <div class="section-header">
          <h2 class="section-title-en">WORK</h2>
          <p class="section-title-ja">制作実績</p>
        </div>
        <div class="work-grid work-grid-3col">
          <?php
          $work_query = new WP_Query(array(
              'post_type'      => 'work',
              'posts_per_page' => 5,
              'orderby'        => 'date',
              'order'          => 'DESC',
          ));
          if ($work_query->have_posts()) :
              while ($work_query->have_posts()) : $work_query->the_post();
          ?>
          <a href="<?php the_permalink(); ?>" class="work-item">
            <?php if (has_post_thumbnail()) : ?>
              <?php the_post_thumbnail('large', array('alt' => get_the_title())); ?>
            <?php endif; ?>
          </a>
          <?php
              endwhile;
              wp_reset_postdata();
          endif;
          ?>
        </div>
        <div class="section-more">
          <a href="<?php echo get_post_type_archive_link('work'); ?>" class="btn-more">
            VIEW MORE <span class="btn-more-circle"><span class="material-symbols-outlined">trending_flat</span></span>
          </a>
        </div>
      </div>
    </section>

  </main>

<?php get_footer(); ?>

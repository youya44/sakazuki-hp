<?php
/**
 * Template Name: イベント事業
 */
get_header(); ?>

  <main>

    <!-- Hero -->
    <section class="section section-subhero">
      <div class="section-inner">
        <div class="subhero-layout">
          <div class="subhero-img">
            <img src="<?php echo sakazuki_image('work2.webp'); ?>" alt="イベント事業">
          </div>
          <div class="subhero-text">
            <h1 class="subhero-title-en">EVENT</h1>
            <p class="subhero-title-ja">イベント事業</p>
            <p class="subhero-desc">屋外イベントから室内イベント、ポップアップや企業説明会、オンラインカンファレンスなど幅広いイベント制作のお手伝いをワンストップでご対応いたします。これまでのイベント制作のナレッジを活かして、より良いイベントにするためのご提案もお任せください。</p>
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
          <div class="icon-item"><div class="icon-box"><span class="material-symbols-outlined">edit_note</span></div><p>企画・進行</p></div>
          <div class="icon-item"><div class="icon-box"><span class="material-symbols-outlined">flag</span></div><p>運営</p></div>
          <div class="icon-item"><div class="icon-box"><span class="material-symbols-outlined">celebration</span></div><p>会場装飾</p></div>
          <div class="icon-item"><div class="icon-box"><span class="material-symbols-outlined">palette</span></div><p>デザイン</p></div>
          <div class="icon-item"><div class="icon-box"><span class="material-symbols-outlined">podium</span></div><p>ステージ作成</p></div>
          <div class="icon-item"><div class="icon-box"><span class="material-symbols-outlined">cast</span></div><p>オンライン配信</p></div>
          <div class="icon-item"><div class="icon-box"><span class="material-symbols-outlined">graphic_eq</span></div><p>音響</p></div>
          <div class="icon-item"><div class="icon-box"><span class="material-symbols-outlined">mic</span></div><p>ラジオ収録</p></div>
          <div class="icon-item"><div class="icon-box"><span class="material-symbols-outlined">park</span></div><p>屋外イベント</p></div>
          <div class="icon-item"><div class="icon-box"><span class="material-symbols-outlined">chair</span></div><p>什器手配</p></div>
          <div class="icon-item"><div class="icon-box"><span class="material-symbols-outlined">photo_camera</span></div><p>写真撮影</p></div>
          <div class="icon-item"><div class="icon-box"><span class="material-symbols-outlined">videocam</span></div><p>映像撮影</p></div>
        </div>
      </div>
    </section>

    <!-- CASE -->
    <section class="section section-case">
      <div class="section-inner">
        <div class="section-header">
          <h2 class="section-title-en">CASE</h2>
          <p class="section-title-ja">制作ジャンル</p>
        </div>
        <div class="case-grid">
          <div class="case-card">
            <img src="<?php echo sakazuki_image('work2.webp'); ?>" alt="カンファレンス">
            <div class="case-card-overlay">
              <span class="case-card-en">CONFERENCE</span>
              <span class="case-card-ja">カンファレンス</span>
            </div>
          </div>
          <div class="case-card">
            <img src="<?php echo sakazuki_image('work1.webp'); ?>" alt="トークセッション">
            <div class="case-card-overlay">
              <span class="case-card-en">TALK SESSION</span>
              <span class="case-card-ja">トークセッション</span>
            </div>
          </div>
          <div class="case-card">
            <img src="<?php echo sakazuki_image('work3.webp'); ?>" alt="Web カンファレンス">
            <div class="case-card-overlay">
              <span class="case-card-en">WEB CONFERENCE</span>
              <span class="case-card-ja">Web カンファレンス</span>
            </div>
          </div>
          <div class="case-card">
            <img src="<?php echo sakazuki_image('work4.webp'); ?>" alt="ピッチ イベント">
            <div class="case-card-overlay">
              <span class="case-card-en">PITCH EVENT</span>
              <span class="case-card-ja">ピッチ イベント</span>
            </div>
          </div>
          <div class="case-card">
            <img src="<?php echo sakazuki_image('work5.webp'); ?>" alt="屋外イベント">
            <div class="case-card-overlay">
              <span class="case-card-en">OUTDOOR EVENT</span>
              <span class="case-card-ja">屋外イベント</span>
            </div>
          </div>
          <div class="case-card">
            <img src="<?php echo sakazuki_image('work1.webp'); ?>" alt="学会">
            <div class="case-card-overlay">
              <span class="case-card-en">ACADEMIC CONFERENCE</span>
              <span class="case-card-ja">学会</span>
            </div>
          </div>
          <div class="case-card">
            <img src="<?php echo sakazuki_image('work3.webp'); ?>" alt="オンライン配信">
            <div class="case-card-overlay">
              <span class="case-card-en">ONLINE STREAMING</span>
              <span class="case-card-ja">オンライン配信</span>
            </div>
          </div>
          <div class="case-card">
            <img src="<?php echo sakazuki_image('work2.webp'); ?>" alt="ハイブリッドイベント">
            <div class="case-card-overlay">
              <span class="case-card-en">HYBRID EVENT</span>
              <span class="case-card-ja">ハイブリッドイベント</span>
            </div>
          </div>
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
              'posts_per_page' => 3,
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

    <!-- CONTACT -->
    <section class="section section-contact" id="contact">
      <div class="section-inner">
        <div class="section-header">
          <h2 class="section-title-en">CONTACT</h2>
          <p class="section-title-ja">お問い合わせ</p>
        </div>
        <?php if (function_exists('wpcf7_contact_form_tag_func')) : ?>
          <?php echo do_shortcode('[contact-form-7 id="contact-form" title="お問い合わせ"]'); ?>
        <?php else : ?>
        <form class="contact-form" id="contactForm">
          <div class="form-group">
            <label for="company-name" class="form-label">Company</label>
            <input type="text" id="company-name" name="company" class="form-input" placeholder="例）（株）XXXXX">
          </div>
          <div class="form-group">
            <label for="name" class="form-label">Name <span class="required">*</span></label>
            <input type="text" id="name" name="name" class="form-input" placeholder="ご氏名" required>
          </div>
          <div class="form-group">
            <label for="email" class="form-label">Email <span class="required">*</span></label>
            <input type="email" id="email" name="email" class="form-input" placeholder="例）xxx@xxxx.ne.jp" required>
          </div>
          <div class="form-group">
            <label for="message" class="form-label">Message <span class="required">*</span></label>
            <textarea id="message" name="message" class="form-textarea" placeholder="お問い合わせ内容をご入力ください" required></textarea>
          </div>
          <div class="form-check">
            <input type="checkbox" id="privacy" name="privacy" required>
            <label for="privacy">プライバシーポリシーに同意する</label>
          </div>
          <p class="form-note">当サイトのフォームを利用した当社への売り込みの一切をお断りしています。</p>
          <button type="submit" class="btn-send">Send</button>
        </form>
        <?php endif; ?>
      </div>
    </section>

  </main>

<?php get_footer(); ?>

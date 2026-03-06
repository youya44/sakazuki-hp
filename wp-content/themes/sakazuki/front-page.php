<?php get_header(); ?>

  <main>

    <!-- TOP / HERO -->
    <section class="section section-hero" id="top">
      <div class="section-inner">
        <div class="hero-text">
          <h1 class="hero-heading">Take it easy,<br>Make it better.</h1>
        </div>
      </div>
    </section>

    <!-- ABOUT -->
    <section class="section section-about" id="about">
      <div class="section-inner">
        <div class="section-deco-wrap">
          <div class="section-deco deco-about-tr"><img src="<?php echo sakazuki_image('deco-1.webp'); ?>" alt=""></div>
          <div class="section-deco deco-about-bl"><img src="<?php echo sakazuki_image('deco-2.webp'); ?>" alt=""></div>
          <div class="section-deco deco-about-br"><img src="<?php echo sakazuki_image('deco-3.webp'); ?>" alt=""></div>
          <div class="section-card">
            <div class="section-header">
              <h2 class="section-title-en">ABOUT</h2>
              <p class="section-title-ja">私たちについて</p>
            </div>
            <div class="about-content">
              <p class="about-catch">世の中に、余白のある人生を。</p>
              <div class="about-text">
                <p>デジタル化社会の昨今、毎日何かに追われ、<br>また、追わなくていいものまで追ってしまう。<br>無意識の内に、無駄な時間をつくるまいと、<br>何かで余白を埋めては欲求を満たしている。</p>
                <p>本来、人間は余白があることで様々な想像をして<br>成長してきました。</p>
                <p>私たちは、その余白をデザインの力で再発見して欲しいと願っています。</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- BUSINESS -->
    <section class="section section-business" id="business">
      <div class="section-inner">
        <div class="section-header">
          <h2 class="section-title-en">BUSINESS</h2>
          <p class="section-title-ja">事業内容</p>
        </div>
        <div class="section-deco-wrap">
          <div class="section-deco deco-event-br"><img src="<?php echo sakazuki_image('deco-4.webp'); ?>" alt=""></div>
          <div class="business-cards">
            <a href="<?php echo home_url('/creative/'); ?>" class="business-card">
              <div class="business-card-img">
                <img src="<?php echo sakazuki_image('creative.jpg'); ?>" alt="制作事業">
              </div>
              <div class="business-card-overlay">
                <span class="business-card-en">CREATIVE</span>
                <span class="business-card-ja">制作事業</span>
              </div>
            </a>
            <a href="<?php echo home_url('/event/'); ?>" class="business-card">
              <div class="business-card-img">
                <img src="<?php echo sakazuki_image('event.webp'); ?>" alt="イベント事業">
              </div>
              <div class="business-card-overlay">
                <span class="business-card-en">EVENT</span>
                <span class="business-card-ja">イベント事業</span>
              </div>
            </a>
          </div>
        </div>
      </div>
    </section>

    <!-- SERVICE -->
    <section class="section section-service" id="service">
      <div class="section-inner">
        <div class="section-header">
          <h2 class="section-title-en">SERVICE</h2>
          <p class="section-title-ja">提供サービス</p>
        </div>
        <div class="service-card">
          <div class="service-card-left">
            <img src="<?php echo sakazuki_image('pass-screenshot.webp'); ?>" alt="PASS" class="service-screenshot">
          </div>
          <div class="service-card-right">
            <p class="service-label">デザイン定額サービス</p>
            <img src="<?php echo sakazuki_image('pass-logo.webp'); ?>" alt="PASS" class="service-pass-logo">
            <p class="service-desc">「PASS」とはデザイン制作を定額で頼み放題になるサービスです。<br>まるで自社の制作部のような、提案から制作まで一貫して行います。</p>
            <a href="https://pass.sakazuki.co.jp/" class="btn btn-primary" target="_blank">
              公式サイトへ <span class="material-symbols-outlined">keyboard_arrow_right</span>
            </a>
          </div>
        </div>
      </div>
    </section>

    <!-- WORK -->
    <section class="section section-work" id="work">
      <div class="section-inner">
        <div class="section-header">
          <h2 class="section-title-en">WORK</h2>
          <p class="section-title-ja">制作事例</p>
        </div>
        <div class="work-grid">
          <?php
          $work_query = new WP_Query(array(
              'post_type'      => 'work',
              'posts_per_page' => 5,
              'orderby'        => 'date',
              'order'          => 'DESC',
          ));
          $work_count = 0;
          if ($work_query->have_posts()) :
              while ($work_query->have_posts()) : $work_query->the_post();
                  $work_count++;
                  $class = ($work_count === 1) ? 'work-item work-item-large' : 'work-item';
          ?>
          <a href="<?php the_permalink(); ?>" class="<?php echo $class; ?>">
            <?php if (has_post_thumbnail()) : ?>
              <?php the_post_thumbnail('large', array('alt' => get_the_title())); ?>
            <?php endif; ?>
          </a>
          <?php
              endwhile;
              wp_reset_postdata();
          else :
              // Fallback: show static images if no posts yet
          ?>
          <a href="#" class="work-item work-item-large">
            <img src="<?php echo sakazuki_image('work1.webp'); ?>" alt="制作事例">
          </a>
          <a href="#" class="work-item">
            <img src="<?php echo sakazuki_image('work2.webp'); ?>" alt="制作事例">
          </a>
          <a href="#" class="work-item">
            <img src="<?php echo sakazuki_image('work3.webp'); ?>" alt="制作事例">
          </a>
          <a href="#" class="work-item">
            <img src="<?php echo sakazuki_image('work4.webp'); ?>" alt="制作事例">
          </a>
          <a href="#" class="work-item">
            <img src="<?php echo sakazuki_image('work5.webp'); ?>" alt="制作事例">
          </a>
          <?php endif; ?>
        </div>
        <div class="section-more">
          <a href="<?php echo get_post_type_archive_link('work'); ?>" class="btn-more">
            VIEW MORE <span class="btn-more-circle"><span class="material-symbols-outlined">trending_flat</span></span>
          </a>
        </div>
      </div>
    </section>

    <!-- NEWS -->
    <section class="section section-news" id="news">
      <div class="section-inner">
        <div class="section-deco-wrap">
          <div class="section-deco deco-news-l"><img src="<?php echo sakazuki_image('deco-5.webp'); ?>" alt=""></div>
          <div class="section-header">
            <h2 class="section-title-en">NEWS</h2>
            <p class="section-title-ja">お知らせ</p>
          </div>
          <div class="news-list">
            <?php
            $news_query = new WP_Query(array(
                'post_type'      => 'post',
                'posts_per_page' => 5,
                'orderby'        => 'date',
                'order'          => 'DESC',
            ));
            if ($news_query->have_posts()) :
                while ($news_query->have_posts()) : $news_query->the_post();
            ?>
            <a href="<?php the_permalink(); ?>" class="news-item">
              <time class="news-date"><?php echo get_the_date('Y.m.d'); ?></time>
              <p class="news-title"><?php the_title(); ?></p>
            </a>
            <?php
                endwhile;
                wp_reset_postdata();
            else :
            ?>
            <p style="text-align: center; color: #666;">お知らせはまだありません。</p>
            <?php endif; ?>
          </div>
          <div class="section-more">
            <a href="<?php echo get_permalink(get_option('page_for_posts')); ?>" class="btn-more">
              VIEW MORE <span class="btn-more-circle"><span class="material-symbols-outlined">trending_flat</span></span>
            </a>
          </div>
        </div>
      </div>
    </section>

    <!-- COMPANY -->
    <section class="section section-company" id="company">
      <div class="section-inner">
        <div class="company-layout">
          <div class="company-left">
            <div class="section-header">
              <h2 class="section-title-en">COMPANY</h2>
              <p class="section-title-ja">会社概要</p>
            </div>
            <dl class="company-info">
              <div class="company-row">
                <dt>社　名</dt>
                <dd>株式会社SAKAZUKI</dd>
              </div>
              <div class="company-row">
                <dt>設　立</dt>
                <dd>2019年12月12日</dd>
              </div>
              <div class="company-row">
                <dt>資本金</dt>
                <dd>100万円</dd>
              </div>
              <div class="company-row">
                <dt>所在地</dt>
                <dd>福岡県福岡市中央区薬院1-10-14ライラック薬院301</dd>
              </div>
              <div class="company-row">
                <dt>経営陣</dt>
                <dd>代表取締役　吉田優哉<br>取締役　坂雄貴</dd>
              </div>
              <div class="company-row">
                <dt>事業内容</dt>
                <dd>制作事業（デザイン制作・WEB制作・映像制作）<br>イベント事業（企画・運営）</dd>
              </div>
            </dl>
          </div>
          <div class="company-right">
            <div class="company-logo-card">
              <img src="<?php echo sakazuki_image('logo.webp'); ?>" alt="SAKAZUKI">
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- CONTACT -->
    <section class="section section-contact" id="contact">
      <div class="section-inner">
        <div class="section-header">
          <h2 class="section-title-en">CONTACT</h2>
          <p class="section-title-ja">お問合せ</p>
        </div>
        <?php
        // Contact Form 7 shortcode
        if (shortcode_exists('contact-form-7')) {
            echo do_shortcode('[contact-form-7 id="8f58f7a" title="お問い合わせ"]');
        } else {
        ?>
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
        <?php } ?>
      </div>
    </section>

  </main>

<?php get_footer(); ?>

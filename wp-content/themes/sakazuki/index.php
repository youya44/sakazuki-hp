<?php
/**
 * The main template file (fallback)
 */
get_header(); ?>

  <main>

    <section class="section section-subhero section-subhero-simple">
      <div class="section-inner">
        <div class="section-header">
          <?php if (is_home()) : ?>
            <h1 class="section-title-en">NEWS</h1>
            <p class="section-title-ja">お知らせ</p>
          <?php elseif (is_search()) : ?>
            <h1 class="section-title-en">SEARCH</h1>
            <p class="section-title-ja">検索結果: <?php echo esc_html(get_search_query()); ?></p>
          <?php else : ?>
            <h1 class="section-title-en"><?php the_title(); ?></h1>
          <?php endif; ?>
        </div>
      </div>
    </section>

    <section class="section">
      <div class="section-inner">
        <?php if (have_posts()) : ?>
          <div class="news-list">
            <?php while (have_posts()) : the_post(); ?>
            <a href="<?php the_permalink(); ?>" class="news-item">
              <time class="news-date"><?php echo get_the_date('Y.m.d'); ?></time>
              <p class="news-title"><?php the_title(); ?></p>
            </a>
            <?php endwhile; ?>
          </div>
          <?php
          the_posts_pagination(array(
              'mid_size'  => 2,
              'prev_text' => '&larr;',
              'next_text' => '&rarr;',
          ));
          ?>
        <?php else : ?>
          <p style="text-align: center; color: #666; padding: 60px 0;">記事が見つかりませんでした。</p>
        <?php endif; ?>
      </div>
    </section>

  </main>

<?php get_footer(); ?>

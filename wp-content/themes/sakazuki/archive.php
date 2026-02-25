<?php get_header(); ?>

  <main>

    <!-- Hero -->
    <section class="section section-subhero section-subhero-simple">
      <div class="section-inner">
        <div class="section-header">
          <h1 class="section-title-en">NEWS</h1>
          <p class="section-title-ja">お知らせ</p>
        </div>
      </div>
    </section>

    <!-- News List -->
    <section class="section section-news-all">
      <div class="section-inner">
        <div class="news-list">
          <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
            <a href="<?php the_permalink(); ?>" class="news-item">
              <time class="news-date"><?php echo get_the_date('Y.m.d'); ?></time>
              <p class="news-title"><?php the_title(); ?></p>
            </a>
            <?php endwhile; ?>
          <?php else : ?>
            <p style="text-align: center; color: #666;">お知らせはまだありません。</p>
          <?php endif; ?>
        </div>
        <?php
        // Pagination
        the_posts_pagination(array(
            'mid_size'  => 2,
            'prev_text' => '&larr;',
            'next_text' => '&rarr;',
        ));
        ?>
      </div>
    </section>

  </main>

<?php get_footer(); ?>

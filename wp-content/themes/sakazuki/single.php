<?php get_header(); ?>

  <main>
    <section class="section section-single">
      <div class="section-inner">
        <?php while (have_posts()) : the_post(); ?>
        <article class="single-card">
          <div class="single-body">
            <div class="single-meta">
              <span class="single-category single-category--news">ニュースリリース</span>
              <time class="single-date"><?php echo get_the_date('Y.m.d'); ?></time>
            </div>
            <h1 class="single-title"><?php the_title(); ?></h1>
            <div class="single-content">
              <?php the_content(); ?>
            </div>
          </div>
        </article>
        <?php endwhile; ?>
        <div class="single-back">
          <a href="<?php echo get_permalink(get_option('page_for_posts')); ?>" class="btn-back">&larr; お知らせ一覧</a>
        </div>
      </div>
    </section>
  </main>

<?php get_footer(); ?>

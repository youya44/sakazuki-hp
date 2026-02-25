<?php get_header(); ?>

  <main>
    <section class="section section-single">
      <div class="section-inner">
        <?php while (have_posts()) : the_post(); ?>
        <article class="single-card">
          <?php if (has_post_thumbnail()) : ?>
          <div class="single-thumbnail">
            <?php the_post_thumbnail('large', array('alt' => get_the_title())); ?>
          </div>
          <?php endif; ?>
          <div class="single-body">
            <div class="single-meta">
              <?php
              $terms = get_the_terms(get_the_ID(), 'work_category');
              $cat_name = ($terms && !is_wp_error($terms)) ? $terms[0]->name : 'Design';
              ?>
              <span class="single-category single-category--work"><?php echo esc_html($cat_name); ?></span>
              <time class="single-date"><?php echo get_the_date('Y.m.d'); ?></time>
            </div>
            <h1 class="single-title"><?php the_title(); ?></h1>
            <?php
            $tags = get_post_meta(get_the_ID(), '_work_tags', true);
            if ($tags) :
                $tag_array = array_map('trim', explode(',', $tags));
            ?>
            <div class="single-tags">
              <?php foreach ($tag_array as $tag) : ?>
              <span class="single-tag">#<?php echo esc_html($tag); ?></span>
              <?php endforeach; ?>
            </div>
            <?php endif; ?>
            <?php
            $client = get_post_meta(get_the_ID(), '_work_client', true);
            if ($client) :
            ?>
            <p class="single-client"><?php echo esc_html($client); ?></p>
            <?php endif; ?>
            <div class="single-content">
              <?php the_content(); ?>
            </div>
          </div>
        </article>
        <?php endwhile; ?>
        <div class="single-back">
          <a href="<?php echo get_post_type_archive_link('work'); ?>" class="btn-back">&larr; 制作事例一覧</a>
        </div>
      </div>
    </section>
  </main>

<?php get_footer(); ?>

<?php get_header(); ?>

  <main>

    <!-- Hero -->
    <section class="section section-subhero section-subhero-simple">
      <div class="section-inner">
        <div class="section-header">
          <h1 class="section-title-en">WORK</h1>
          <p class="section-title-ja">制作実績</p>
        </div>
      </div>
    </section>

    <!-- Filter + Grid -->
    <section class="section section-work-all">
      <div class="section-inner">
        <div class="work-filter">
          <button class="work-filter-btn active" data-filter="all">All</button>
          <?php
          $work_cats = get_terms(array(
              'taxonomy'   => 'work_category',
              'hide_empty' => false,
          ));
          if ($work_cats && !is_wp_error($work_cats)) :
              foreach ($work_cats as $cat) :
          ?>
          <button class="work-filter-btn" data-filter="<?php echo esc_attr($cat->slug); ?>"><?php echo esc_html($cat->name); ?></button>
          <?php
              endforeach;
          endif;
          ?>
        </div>
        <div class="work-grid work-grid-3col" id="workGrid">
          <?php
          $work_query = new WP_Query(array(
              'post_type'      => 'work',
              'posts_per_page' => -1,
              'orderby'        => 'date',
              'order'          => 'DESC',
          ));
          if ($work_query->have_posts()) :
              while ($work_query->have_posts()) : $work_query->the_post();
                  $terms = get_the_terms(get_the_ID(), 'work_category');
                  $cat_slugs = '';
                  if ($terms && !is_wp_error($terms)) {
                      $cat_slugs = implode(' ', wp_list_pluck($terms, 'slug'));
                  }
          ?>
          <a href="<?php the_permalink(); ?>" class="work-item" data-category="<?php echo esc_attr($cat_slugs); ?>">
            <?php if (has_post_thumbnail()) : ?>
              <?php the_post_thumbnail('large', array('alt' => get_the_title())); ?>
            <?php endif; ?>
          </a>
          <?php
              endwhile;
              wp_reset_postdata();
          else :
          ?>
          <p style="text-align: center; color: #666; grid-column: 1 / -1;">制作事例はまだありません。</p>
          <?php endif; ?>
        </div>
      </div>
    </section>

  </main>

<?php get_footer(); ?>

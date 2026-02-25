<?php
/**
 * Generic page template
 */
get_header(); ?>

  <main>

    <section class="section section-subhero section-subhero-simple">
      <div class="section-inner">
        <div class="section-header">
          <h1 class="section-title-en"><?php the_title(); ?></h1>
        </div>
      </div>
    </section>

    <section class="section">
      <div class="section-inner">
        <?php while (have_posts()) : the_post(); ?>
        <div class="page-content">
          <?php the_content(); ?>
        </div>
        <?php endwhile; ?>
      </div>
    </section>

  </main>

<?php get_footer(); ?>

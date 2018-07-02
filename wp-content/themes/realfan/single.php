<?php get_header(); ?>

  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <?php get_template_part( 'template-parts/featured-post');?>
    <?php endwhile; else: ?>
  <?php endif; ?>

  <section id="single" class="container">

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <?php get_template_part( 'template-parts/single-content');?>
      <?php endwhile; else: ?>
    <?php endif; ?>
  </section>

<?php get_footer(); ?>

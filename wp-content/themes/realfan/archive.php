<?php get_header(); ?>

<section class="main-content archive-page">
  <div class="posts">
    <div class="posts_content container">
      <div class="columns">
          <h1>Conheça as novidades da RealFan</h1>
        <?php
            $args = array(
              'posts_per_page' => 9,
              'orderby' => 'date',
              'cat' => '2'
            );
            query_posts( $args );
        ?>
        <?php if (have_posts()) : ?>
          <?php while (have_posts()) : the_post(); ?>

            <?php get_template_part( 'template-parts/post-card');?>

          <?php endwhile; ?>
        </div>
            <?php post_pagination();?>
            <?php else : ?>
        <?php endif;
            // Reset Query
            wp_reset_query();
        ?>
    </div>
  </div>

</section>

<?php get_footer(); ?>

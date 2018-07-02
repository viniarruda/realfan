<?php get_header(); ?>

<section class="main-content search-page">

  <div class="posts">
    <div class="posts_content container">
      <h1 class="search-page_title">Resultados da Pesquisa</h1>

      <div class="columns">
        <?php if (have_posts()) : ?>
          <?php while (have_posts()) : the_post(); ?>

            <?php get_template_part( 'template-parts/post-card');?>

          <?php endwhile; ?>
        </div>
            <?php post_pagination();?>
            <?php else : ?>
              <p class="blank-text col-12">Nenhum post encontrado para essa pesquisa</p>
        <?php endif; ?>
    </div>
  </div>
</section>

<?php get_footer(); ?>

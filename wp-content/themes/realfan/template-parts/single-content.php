<article class="post">
    <div class="post_head">
      <?php if(is_single()) : ?>
      <span class="featured-post_time"><?php the_date(); ?></span>

      <h1 class="featured-post_title"><?php the_title(); ?></h1>
      <?php endif; ?>
    </div>

    <div class="post_content"><?php the_content(); ?></div>

    <div class="post_actions">
      <div class="liked">
          Gostou do artigo?
      </div>
      <?php get_template_part( 'template-parts/share');?>
    </div>
</article>

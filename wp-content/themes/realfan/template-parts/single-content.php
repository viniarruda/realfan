<article class="post">
    <div class="post_head">
      <?php if(is_single()) : ?>
        <?php get_template_part( 'template-parts/share');?>
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

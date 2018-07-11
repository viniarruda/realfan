<section class="featured-post <?php if(is_single()) : ?> --intern <?php endif; ?>" style="background-image: url(<?= esc_url(the_post_thumbnail_url()); ?>)">
  <div class="featured-post_content container">
    <div class="featured-post_box">

      <?php if(is_single()) : ?>
        <span class="featured-post_time"><?php the_date(); ?></span>

        <h2 class="featured-post_title"><?php the_title(); ?></h2>
      <?php endif; ?>
    </div>
  </div>
</section>

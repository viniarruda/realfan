<div class="col-12">
  <article class="about-card">
    <div class="about-card_thumb">
      <span style="background-image:url(<?php the_post_thumbnail_url(); ?>)"></span>
    </div>
    <div class="about-card_content">
      <h2 class="about-card_title"><?php the_title(); ?></h2>
      <p class="about-card_excerpt"><?php the_excerpt(); ?></p>
      <a href="<?php the_permalink(); ?>" class="btn --secondary">Saiba Mais</a>
    </div>
  </article>
</div>

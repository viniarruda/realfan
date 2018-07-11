<div class="col-4">
  <article class="post-card">
    <div class="post-card_thumb">
      <span style="background-image:url(<?php the_post_thumbnail_url(); ?>)"></span>
    </div>

    <?php
      $allposttags = get_the_category();
      $i=0;
      if ($allposttags) {
          foreach($allposttags as $tags) {
              $i++;
              if (1 == $i) {
                  $firsttag = $tags->name;
                  $tag=$firsttag;
                  $tag_link=get_tag_link($tags->term_id);
              }
          }
      }
      ?>

    <div class="post-card_content">
      <span class="post-card_date"><?php the_date(); ?></span>
      <h2 class="post-card_title"><?php the_title(); ?></h2>
      <p><?php the_excerpt(100); ?></p>
      <a href="<?php the_permalink(); ?>" class="btn --secondary">Leia Mais</a>
    </div>
  </article>
</div>

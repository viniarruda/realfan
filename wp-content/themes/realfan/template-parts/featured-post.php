<section class="featured-post <?php if(is_single()) : ?> --intern <?php endif; ?>" style="background-image: url(<?php the_field('banner_principal'); ?>)">
  <div class="featured-post_content container">
    <div class="featured-post_box">

      <?php if(is_single()) : ?>
        <span class="featured-post_time"><?php the_date(); ?></span>

      <?php elseif(!is_page()) : ?>
        <span class="featured-post_time"><?php the_field('tempo_de_leitura') ?> min de leitura</span>
      <?php endif; ?>

      <h2 class="featured-post_title"><?php the_title(); ?></h2>

      <?php if(is_archive()) : ?>
        <div class="featured-post_text --is-archive">
          <p><?php echo excerpt(100); ?></p>

          <a href="<?php the_permalink(); ?>" class="btn --primary">Ler Mais</a>
        </div>
      <?php endif; ?>

      <?php if(is_home()) : ?>
        <div class="featured-post_text"><p><?php echo excerpt(100); ?></p></div>
        <a href="<?php the_permalink(); ?>" class="btn --primary">Ler Mais</a>

      <?php elseif(!is_page()) : ?>
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
          <span class="featured-post_pill"><?php echo $tag; ?></span>
      <?php endif; ?>
    </div>
  </div>
</section>

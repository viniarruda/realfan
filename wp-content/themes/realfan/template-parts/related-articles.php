<div class="related-articles">
  <div class="related-articles_content container">
    <div class="columns">.
      <h3 class="related-articles_title">Você também pode se interessar por</h3>
  <?php
    $tags = wp_get_post_terms( get_queried_object_id(), 'post_tag', ['fields' => 'ids'] );
    $args = [
        'post__not_in'        => array( get_queried_object_id() ),
        'posts_per_page'      => 3,
        'ignore_sticky_posts' => 1,
        'orderby'             => 'rand',
        'tax_query' => [
            [
                'taxonomy' => 'post_tag',
                'terms'    => $tags
            ]
        ]
    ];
    $my_query = new wp_query( $args );
      if( $my_query->have_posts() ) {
        while( $my_query->have_posts() ) {
            $my_query->the_post(); ?>
            <?php get_template_part( 'template-parts/post-card');?>
        <?php }
        wp_reset_postdata();
        }
        ?>
    </div>
  </div>
</div>

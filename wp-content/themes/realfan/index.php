<?php get_header(); ?>

    <div class="featured-post">
        <h1>Fun Marketing</h1>
        <h2>É sua agência personalizada</h2>
        <p>Seja qual for sua marca, produto ou serviço, chegou a hora de crescer e aparecer.</p>
    </div>
    <section class="about" id="about">
        <h1 class="about_title">Sobre nós</h1>
    </section>
    <section class="services" id="services">
        <h1 class="services_title">O que fazemos</h1>
        <div class="services_list">
            <div class="services_card">
                <div class="services_card-front">
                    <h2>Seu site</h2>
                </div>
                <div class="services_card-back">
                    la la la
                </div>
            </div>
            <div class="services_card">
                <div class="services_card-front">
                    <h2>Redes Sociais</h2>
                </div>
                <div class="services_card-back">
                    la la la
                </div>
            </div>
        </div>
    </section>
    <section class="blog" id="blog">
        <h1 class="blog_title">Blog</h1>
        <?php
            $category = get_category( get_query_var( 'cat' ) );
            $cat_id = $category->cat_ID;
            $parent_id = $category->category_parent;
            $queried = $wp_query->get_queried_object();
            $cat_slug = $category->slug;
            $subcat_slug = $category->slug;
            $main_cat_slug = $cat_slug;
        ?>
      <?php
            echo '<div class="blog-list">';
              $args = array(
                'posts_per_page' => 3,
                'orderby' => 'date',
                'cat' => '2'
              );

              query_posts( $args );

              if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>

                  <?php get_template_part( 'template-parts/post-card');?>

                <?php endwhile; ?>
              <?php endif;
              // Reset Query
              wp_reset_query();
            echo '</div>';
      ?>
        <a href="<?php bloginfo('siteurl'); ?>/blog" class="view-more">Ver tudo</a>
    </section>
    <section class="contact" id="contact">
        <h1 class="contact_title">Contato</h1>
        <?= do_shortcode( '[contact-form-7 id="14" title="Contact form 1"]' ); ?>

    </section>

<?php get_footer(); ?>

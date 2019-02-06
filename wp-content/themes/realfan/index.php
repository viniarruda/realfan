<?php get_header(); ?>

    <div class="featured-post featured-home">
        <div class="container">
            <h1>Real<span>Fan</span></h1>
            <h2>A Sua Consultoria de Marketing, Comunicação e Vendas</h2>
        </div>
    </div>
    <section class="about" id="about">
        <h1 class="about_title">Sobre nós</h1>
        <div class="container">
          <?php
              $args = array(
                'posts_per_page' => 1,
                'orderby' => 'date',
                'cat' => '3'
              );
              query_posts( $args );

              if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>

                  <?php get_template_part( 'template-parts/about-card');?>

                <?php endwhile; ?>
              <?php endif;
              // Reset Query
              wp_reset_query();
            ?>
        </div>
    </section>
    <section class="services" id="services">
        <div class="container">
            <h1 class="services_title">O que fazemos</h1>
            <div class="services_list">
                <div class="services_card">
                    <div class="services_card-front site">
                        <img src="<?php bloginfo('template_url'); ?>/assets/images/note_mobile.png" alt="Seu Site" />
                        <h2>Seu endereço web</h2>
                        <p>Portal, e-commerce e mais...</p>
                        <i class="fas fa-hand-point-down jump"></i>
                    </div>
                    <div class="services_card-back site">
                        Se você ainda não tem seu endereço na Internet, isso é passado. Se você já
                        tem, ótimo! O que vamos fazer é criar e/ou ampliar a sua Porta de Entrada
                        em todos os motores de busca. Você precisa de Fãs e eles estão conectados
                        buscando e pesquisando horas por dia.</div>
                </div>
                <div class="services_card">
                    <div class="services_card-front social">
                        <div class="social">
                            <i class="fab fa-facebook-square"></i>
                            <i class="fab fa-instagram"></i>
                            <i class="fab fa-twitter-square"></i>
                        </div>
                        <h2>Suas Redes Sociais</h2>
                        <p>Interação Qualificada</p>
                        <span>Clique aqui e saiba mais</span>
                    </div>
                    <div class="services_card-back social">
                        Você ainda duvida que a sua marca, produto ou serviço precisam estar nas
                        Redes Sociais? Implementação, Monitoria, Análise e Conteúdos que vão estreitar a relação com seus
                        futuros fãs. O mundo atual totalmente conectado não pode ficar sem o que você tem para dizer. Vamos fazer isso juntos!
                    </div>
                </div>
                <div class="services_card">
                    <div class="services_card-front channels">
                        <i class="fas fa-tv"></i>
                        <h2>Outros Canais</h2>
                        <p>Divulgação Adaptada</p>
                        <span>Clique aqui e saiba mais</span>
                    </div>
                    <div class="services_card-back channels">
                        Há sempre uma forma de aparecer mais. Nosso Planejamento de Mídia vai
                        de encontro ao seu público e ao seu orçamento. Seja na TV ou na
                        contratação de Influenciadores Digitais, você pode estar em qualquer lugar.
                        Simplesmente seja visto e lembrado! Se for a hora de "ser mais", vamos
                        separar os limites e acabar com as fronteiras!</div>
                </div>
                <div class="services_card">
                    <div class="services_card-front sales">
                        <i class="fas fa-people-carry"></i>
                        <h2>Treinamento e Consultoria de Vendas</h2>
                        <span>Clique aqui e saiba mais</span>
                    </div>
                    <div class="services_card-back sales">O que significa "Transformar sua Equipe de Vendas"? Como simples
                        treinamentos e implementação de metodologias podem melhorar seus
                        resultados. Está na hora de investir pouco numa Consultoria de grande
                        resultado prático pela Aplicabilidade.</div>
                </div>
                <div class="services_card">
                    <div class="services_card-front marketing">
                        <i class="far fa-edit"></i>
                        <h2>MARKETING DE CONTEÚDO</h2>
                        <span>Clique aqui e saiba mais</span>
                    </div>
                    <div class="services_card-back marketing">
                        Não há Marketing sem conteúdo. Não há encantamento sem conteúdo. Para formar e
                        manter sua base de clientes será preciso saber contar ótimas histórias.
                        Vamos criar e promover os melhores roteiros. Está na hora de ter ou
                        aumentar a sua legião de fãs!
                    </div>
                </div>
                <div class="services_card">
                    <div class="services_card-front advisory">
                        <i class="fas fa-microphone"></i>
                        <h2>ASSESSORIA DE IMPRENSA</h2>
                        <i class="fas fa-hand-point-down jump"></i>
                    </div>
                    <div class="services_card-back advisory">Entre sua marca, seu produto ou serviço está nossa intermediação junto aos principais meios de comunicação. Isso é Visibilidade Real!</div>
            </div>
        </div>
    </section>
    <section class="cases" id="cases">
        <div class="container">
            <h1 class="cases_title">Alguns cases e relações de sucesso</h1>
            <div class="cases_item">
                <a href="https://whoscall.com" target="_blank" class="cases_image">
                    <img src="<?php bloginfo('template_url'); ?>/assets/images/whos-call.png" alt="Whos Call">
                </a>
                <a href="https://canal3supermercados.com.br" target="_blank" class="cases_image">
                    <img src="<?php bloginfo('template_url'); ?>/assets/images/Canal3Logo.png" alt="Canal 3 supermercados">
                </a>
                <a href="http://www.radiotrianon.com.br" target="_blank" class="cases_image">
                    <img src="<?php bloginfo('template_url'); ?>/assets/images/radar_paulista.png" alt="Radar Paulista">
                </a>
                <a href="http://www.radiotrianon.com.br" target="_blank" class="cases_image">
                    <img src="<?php bloginfo('template_url'); ?>/assets/images/radio_trianon.png" alt="Radio Trianon">
                </a>
            </div>
            <div class="cases_video">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/AHsXeccyfB0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            </div>

        </div>
    </section>
    <section class="blog" id="blog">
        <h1 class="blog_title">Blog</h1>
        <div class="container">
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
        </div>
        <a href="<?php bloginfo('siteurl'); ?>/blog" class="view-more">Ver tudo</a>
    </section>
    <section class="contact" id="contact">
        <h1 class="contact_title">Contato</h1>
        <div class="container container_contact">
          <?= do_shortcode( '[contact-form-7 id="8" title="Formulário de contato"]' ); ?>
        </div>
    </section>

<?php get_footer(); ?>

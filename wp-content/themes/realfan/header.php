<!DOCTYPE html>
<html lang="pt_BR">
  <head>
    <meta charset="utf-8">
    <title><?php wp_title( '|', true, 'right' ); ?> <?php bloginfo('name'); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/styles/all.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">

    <link rel="apple-touch-icon" sizes="57x57" href="<?php bloginfo('template_url'); ?>/assets/images/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php bloginfo('template_url'); ?>/assets/images/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo('template_url'); ?>/assets/images/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php bloginfo('template_url'); ?>/assets/images/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo('template_url'); ?>/assets/images/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php bloginfo('template_url'); ?>/assets/images/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php bloginfo('template_url'); ?>/assets/images/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php bloginfo('template_url'); ?>/assets/images/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('template_url'); ?>/assets/images/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="<?php bloginfo('template_url'); ?>/assets/images/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo('template_url'); ?>/assets/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php bloginfo('template_url'); ?>/assets/images/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo('template_url'); ?>/assets/images/favicon/favicon-16x16.png">
    <link rel="manifest" href="<?php bloginfo('template_url'); ?>/assets/images/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="<?php bloginfo('template_url'); ?>/assets/images/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">


      <!-- Facebook Share -->
    <?php if(is_single() || is_page()) { ?>
    <meta property="og:type" content="article" />
    <meta property="og:title" content="<?php wp_title( '|', true, 'right' ); ?> <?php bloginfo('name'); ?>" />
    <meta property="og:description" content='<?php while(have_posts()):the_post(); $out_excerpt = str_replace(array("\r\n", "\r", "\n"), "", get_the_excerpt()); echo apply_filters("the_excerpt_rss", $out_excerpt); endwhile;?>' />
    <meta property="og:url" content="<?php the_permalink(); ?>"/>
    <meta property="og:image" content="<?php echo wp_get_attachment_thumb_url( get_post_thumbnail_id( $post->ID ) ) ?>" />
    <?php  } else { ?>
    <meta property="og:type" content="website" />
    <meta property="og:title" content="<?php bloginfo('name'); ?>" />
    <meta property="og:url" content="<?php bloginfo('url'); ?>"/>
    <meta property="og:description" content="<?php bloginfo('description'); ?>" />
    <meta property="og:image" content="<?php bloginfo('template_url'); ?>/assets/images/realfan_blue.png" />
    <meta property="og:site_name" content="<?php wp_title( '|', true, 'right' ); ?> <?php bloginfo('name'); ?>">
    <meta property="og:locale" content="pt_BR">
    <?php  }  ?>

    <!-- Feeds -->
    <link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>">
    <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>">
    <link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>">

    <?php wp_head(); ?>
  </head>
  <body>

    <header class="header">
      <?php if(is_single()) : ?>
        <div class="header_progress">
          <span class="header_progress-line"></span>
        </div>
      <?php endif; ?>
      <div class="header_content">
        <div class="header_logo">
          <a href="http://realfancomunicacao.com.br">
            <img src="<?php bloginfo('template_url'); ?>/assets/images/realfan_headerlogo.png" alt="RealFan">
          </a>
        </div>

        <div class="header_toggle"></div>

        <div class="header_menu">
          <nav class="header_links">
            <ul class="header_links-list">
              <li class="header_links-item"><a href="<?php bloginfo('siteurl'); ?>/">Início</a></li>
              <li class="header_links-item"><a href="#about">Sobre</a></li>
              <li class="header_links-item"><a href="#services">O que fazemos</a></li>
              <li class="header_links-item"><a href="#cases">Cases</a></li>
              <li class="header_links-item"><a href="<?php bloginfo('siteurl'); ?>/blog">Blog</a></li>
              <li class="header_links-item"><a href="#contact">Contato</a></li>
            </ul>
          </nav>

          <ul class="social-links">
            <li class="social-links_item">
              <a href="#" target="_blank">
                  <i class="fab fa-facebook-f"></i>
              </a>
            </li>
            <li class="social-links_item">
              <a href="#" target="_blank">
                  <i class="fab fa-instagram"></i>
              </a>
            </li>
          </ul>

<!--          <div class="search">-->
<!--            --><?php //get_search_form(); ?>
<!---->
<!--            <span class="search_toggle">-->
<!--              <img src="--><?php //bloginfo('template_url'); ?><!--/assets/images/icon-search.png" alt="Pesquisa">-->
<!--            </span>-->
<!--          </div>-->

        </div>

      </div>
    </header>

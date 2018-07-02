<!DOCTYPE html>
<html lang="pt_BR">
  <head>
    <meta charset="utf-8">
    <title><?php wp_title( '|', true, 'right' ); ?> <?php bloginfo('name'); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/styles/all.css">

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
    <meta property="og:image" content="<?php bloginfo('template_url'); ?>/assets/images/facebook-share.png" />
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
          <a href="https://realfancomunicacao.com.br">
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
              <li class="header_links-item"><a href="<?php bloginfo('siteurl'); ?>/blog">Blog</a></li>
              <li class="header_links-item"><a href="#contact">Contato</a></li>
            </ul>
          </nav>

          <ul class="social-links">
            <li class="social-links_item">
              <a href="#" target="_blank">
                <img src="<?php bloginfo('template_url'); ?>/assets/images/icon-facebook.png" alt="Facebook">
              </a>
            </li>
            <li class="social-links_item">
              <a href="#" target="_blank">
                <img src="<?php bloginfo('template_url'); ?>/assets/images/icon-instagram.png" alt="Instagram">
              </a>
            </li>
          </ul>

          <div class="search">
            <?php get_search_form(); ?>

            <span class="search_toggle">
              <img src="<?php bloginfo('template_url'); ?>/assets/images/icon-search.png" alt="Pesquisa">
            </span>
          </div>

        </div>

      </div>
    </header>

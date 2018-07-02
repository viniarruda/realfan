<?php

// Funções para Limpar o Header
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'start_post_rel_link', 10, 0 );
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_styles', 'print_emoji_styles');

// Habilitar Menus
add_theme_support('menus');

// Thumbnail
if (function_exists( 'add_theme_support' ) ) :
add_theme_support( 'post-thumbnails' );
endif;

//Limitar Excerpt
function excerpt($limit) {
$excerpt = explode(' ', get_the_excerpt(), $limit);
if (count($excerpt)>=$limit) {
array_pop($excerpt);
$excerpt = implode(" ",$excerpt).'...';
} else {
$excerpt = implode(" ",$excerpt);
}
$excerpt = preg_replace('`\[[^\]]*\]`','',$excerpt);
return $excerpt;
}

//PAGINATION
function post_pagination($pages = '', $range = 4)
{
     $showitems = ($range * 2)+1;

     global $paged;
     if(empty($paged)) $paged = 1;

     if($pages == '')
     {
         global $wp_query;
         $pages = $wp_query->max_num_pages;
         if(!$pages)
         {
             $pages = 1;
         }
     }

     if(1 != $pages)
     {
         echo "<div class='pagination'>";
         if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<a href='".get_pagenum_link($paged - 1)."' class='pagination_current'>&laquo;</a>";
         if($paged > 6 && $showitems < $pages) echo "<a href='".get_pagenum_link(1)."'>1</a> <span class='pagination_current'>...</span>";

         for ($i=1; $i <= $pages; $i++)
         {
             if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
             {
                 echo ($paged == $i)? "<span class='pagination_current'>".$i."</span>":"<a href='".get_pagenum_link($i)."' class='pagination_inactive' >".$i."</a>";
             }
         }

         if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<span class='pagination_current'>...</span> <a href='".get_pagenum_link($pages)."'>$pages</a>";
         if ($paged < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($paged + 1)."' class='pagination_current'>&raquo;</a>";
         echo "</div>";
     }
}

// Marca do blog no lugar da marca do wordpress
function my_custom_login_logo() {
    echo '
    <style type="text/css">
		body.login {
			background: #0098da !important
		}

    .login h1 a {
        background-image: url(./wp-content/themes/cannabis-blog/assets/images/icon-logo.png) !important;
        background-size: cover;
				width: 98px !important;
		    height: 90px !important;
        outline: none;
        margin-top: 10px;
        background-position: bottom;
    }

		.login h1 {
			text-align: center;
			background:#fff;
			border:1px solid #fff;
			border-top-left-radius: 20px;
			border-top-right-radius: 20px;
			height: auto;
			z-index: 10;
			outline:none;
			position: relative;
			padding-top: 20px;
			box-sizing: border-box;
		}

.login form {
    margin-top: -10px;
    margin-left: 0;
    z-index: 6;
    position: relative;
    padding: 26px 24px 46px;
    background: #fff;
    -webkit-box-shadow: 0 1px 3px rgba(0,0,0,.13);
    box-shadow: 0 1px 3px rgba(0,0,0,.13);
}
</style>';}
add_action('login_head', 'my_custom_login_logo');

/// setando principais configuracoes de CSS da página

function new_custom_login_page_style() {
    echo '
    <style type="text/css">
    body.login {
		background:white;
		background-size:cover;
		overflow:hidden;
		font-family: Verdana, sans-serif;background-size:cover
		}
    .login #nav a, .login #backtoblog a {color:#fff!important; text-decoration:none !important; font-size: 0.9em !important;}
    .login #nav a:hover, .login #backtoblog a:hover {color:#fff!important; text-decoration:underline !important;}
    .login #nav {float: left !important;}
    .login form {; border-radius: 10px !important; -webkit-border-radius: 10px !important;}
    </style>';}
add_action('login_head', 'new_custom_login_page_style');

?>

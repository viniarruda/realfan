<div class="categories">
  <p class="categories_label">Eu me interesso por</p>

  <div class="categories_list">
    <?php if(is_home()) : ?>
      <span class="categories_current">Tudo</span>
    <?php endif; ?>

    <?php if(is_archive()) : ?>
      
      <?php
        $category = get_category( get_query_var( 'cat' ) );
        $parent_cats = get_category_parents( $category, false, ',' );
        $parent_cat = explode(",", $parent_cats);
      ?>

      <span class="categories_current"><?php echo $parent_cat[0] ?></span>
    <?php endif; ?>

    <ul class="categories_drop">

      <?php if(is_archive()) : ?>
        <li class="categories_drop-item">
          <a href="<?php bloginfo('url'); ?>">Tudo</a>
        </li>
      <?php endif; ?>

      <?php
          $args = array('orderby' => 'name', 'parent' => 0, 'posts_per_page' => '9');
          $categories = get_categories( $args );

          foreach($categories as $category){
            echo '<li class="categories_drop-item">';
             $cat_link = get_category_link($category->cat_ID);
             echo '<a href="'.$cat_link.'">'.$category->name.'</a>';
            echo '</li>';
          }
      ?>

    </ul>
  </div>
</div>

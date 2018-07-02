<aside class="sidebar">
  <div class="sidebar_widget">
    <h3 class="sidebar_widget-title">Categorias</h3>

    <div class="sidebar_widget-content">
      <?php
        $args = array('orderby' => 'name', 'parent' => 0);
        $categories = get_categories( $args );

          foreach ($categories as $category) {

            echo '<span class="parent-categorie">' . $category->cat_name . '</span>';

      $args2 = array('orderby' => 'name', 'parent' => $category->cat_ID);
      $subcategories = get_categories( $args2 );


      echo '<ul class="children-categories">';

        foreach ($subcategories as $subcategory) {
            $subcat_link = get_category_link($subcategory->cat_ID);
            echo '<li class="children-categories_item"><a href="'.$subcat_link.'">' . $subcategory->cat_name . '</a></li>';
        }

      echo '</ul>';

      }
      ?>
    </div>
  </div>
</aside>

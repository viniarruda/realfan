<div class="subcategories-filter">

  <?php
  $args = array('orderby' => 'name', 'parent' => 0);
  $categories = get_categories( $args );
    echo '<ul class="subcategories-filter_list container">';
      foreach ($categories as $category) {

        $args2 = array('orderby' => 'name', 'parent' => $category->cat_ID);
        $subcategories = get_categories( $args2 );

            foreach ($subcategories as $subcategory) {
                $subcat_link = get_category_link($subcategory->cat_ID);
                echo '<li class="subcategories-filter_item"><a href="'.$subcat_link.'">' . $subcategory->cat_name . '</a></li>';
            }
        }
    echo '</ul>';
?>
</div>

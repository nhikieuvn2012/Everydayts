    <footer class="container full-width bg-light-grey">
    	<div class="container">
        	<div class="row">
            	<div class="col-sm-6">
                	<ul class="list-unstyled list-inline">
<?php
$menu_name='menu-footer';
$menu_list = '';
    if ( ( $locations = get_nav_menu_locations() ) && isset( $locations[ $menu_name ] ) ) {
                    $menu = wp_get_nav_menu_object( $locations[ $menu_name ] );
                    
                    $menu_items = wp_get_nav_menu_items($menu->term_id);
                    //print_r($menu_items);
                    
                    
                    foreach ( (array) $menu_items as $key => $menu_item ) {
                            $menu_list .= '<li><a title="'.$menu_item->title. '" href="'.$menu_item->url.'">'.$menu_item->title.  '</a></li>';
                    }
 }
echo ($menu_list);
?>
                    </ul>
                </div>
                <div class="col-sm-6">
                	<p class="text-right text-muted">Copyright 2014. Everyday Total Solutions. All right reserved.</p>
                </div>
            </div>
        </div>
    </footer>
    <?php
        wp_footer();
    ?>
  </body>
</html>
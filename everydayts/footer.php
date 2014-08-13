</div>
 <div class='row full-width  bg-light-grey' style="margin-top:35px;padding-bottom:25px;">
      <div class="container footer_menu  ">

                    
         
              <div class="col-sm-6 " >
                  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" style="padding-left :0px;">
                        <ul class="nav navbar-nav footer-menu " >
                           <?php
                            
                      $menu_name = 'footer-menu';
                      $location = get_nav_menu_locations();                    
                      
                            if($location&& isset($location[$menu_name]))

                            {
                              $menu_object = wp_get_nav_menu_object($location[$menu_name]);
                              $list_item = wp_get_nav_menu_items($menu_object->term_id);

                              foreach ($list_item as $item) {
                               

                                    $menu .='<li><a title="'.$item->title.'" href="'.$item->url.'">'.$item->title.'</a></li>';
                                
                              }
                              echo $menu;
                            }
                          ?>                         
                        </ul>                     
                      </div>
                  
                </div>
                <div class="col-sm-6 ">
                  <p class="text-right text-muted">Copyright 2014. Everyday Total Solutions. All right reserved.</p>
                </div>
            </div>
     </div>
<?php wp_footer();?>
</body>
</html>
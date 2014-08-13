<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title><?php wp_title(); ?></title>

    <!-- Bootstrap -->
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/style.css" rel="stylesheet"/>
	
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/bootstrap.min.js"></script>
    
    <?php wp_head();?>
  </head>
  <body>
  	<div class="container">
        <header class="row">
            <div class="col-sm-3">
                <h1><a href="<?php echo get_home_url();?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png" class="img-responsive" alt="Everyday Total Solutions"></a></h1>
            </div>
            <div class="col-sm-9 pull-right">
                <nav id="main-nav" class="col-sm-12 navbar navbar-default" role="navigation">
                  <div class="container-fluid"> 
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                      <a class="navbar-brand" href="<?php echo get_home_url(); ?>/"><span class="glyphicon glyphicon-home"></span></a> </div>
                    
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                      <?php
                    $menu_name='menu-header';
                    $menu_list = '';
                        if ( ( $locations = get_nav_menu_locations() ) && isset( $locations[ $menu_name ] ) ) {
                                        $menu = wp_get_nav_menu_object( $locations[ $menu_name ] );
                                        $menu_items = wp_get_nav_menu_items($menu->term_id);
                                        //print_r($menu_items);
                                        foreach ( (array) $menu_items as $key => $menu_item ) {
                                            if(current_page_url()==$menu_item->url){
                                                $menu_list .= '<li class="active"><a title="'.$menu_item->title. '" href="'.$menu_item->url.'">'.$menu_item->title.  '</a></li>';
                                            }else{
                                                $menu_list .= '<li><a title="'.$menu_item->title. '" href="'.$menu_item->url.'">'.$menu_item->title.  '</a></li>';  
                                            }
                                        }
                     }
                    echo ($menu_list);
                      ?>
                    </ul>
                    </div>
                    <!-- /.navbar-collapse --> 
                  </div>
                  <!-- /.container-fluid --> 
                </nav>
			</div>
        </header>
    </div>

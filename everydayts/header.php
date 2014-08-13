<html>
	<head>
		<title><?php wp_title(); ?></title>
		 
       
       <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri();  ?>/css/bootstrap.min.css">
       <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri();  ?>/style.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
          <script src="<?php echo get_stylesheet_directory_uri();?>/js/bootstrap.min.js"></script>
          <?php 
          $base_url = get_stylesheet_directory_uri();

          wp_head();?>

	</head>
	
	<body>
		<div class='container-fluid'>
			<div class="container header">
        
			<div class='row col-md-12 top_logo'>	
				
				<img src='<?php echo $base_url;?>/images/logo.png' alt="image" />

			</div>
			<div class="row " style="text-transform: uppercase;">        
           
            <div class='col-md-12' >
              <nav class="navbar navbar-default" role="navigation" >
                    <div class="container-fluid">
                      <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                          <span class="sr-only">Toggle navigation</span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                        </button> 
                        <a class="navbar-brand " href="<?php echo get_home_url()?>"><span class='glyphicon glyphicon-home'></span></a>
                      
                      </div>
                      <?php
                      $menu_name = 'left-menu';
                      $location = get_nav_menu_locations();                    
                      ?>

                      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav main_navi" >
                           <?php
                          
                            if($location&& isset($location[$menu_name]))

                            {
                              $menu_object = wp_get_nav_menu_object($location[$menu_name]);
                              $list_item = wp_get_nav_menu_items($menu_object->term_id);

                              foreach ($list_item as $item) {
                                if(curPageURL()==$item->url)
                                {
                                    $menu .='<li class="active"><a title="'.$item->title.'" href="'.$item->url.'">'.$item->title.'</a></li>';

                                }
                                else
                                {

                                    $menu .='<li><a title="'.$item->title.'" href="'.$item->url.'">'.$item->title.'</a></li>';
                                }
                              }
                              echo $menu;
                            }
                          ?>                         
                        </ul>                     
                      </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
              </nav>
          </div>
      </div>
  </div>
  <div class='row ' style="background :#F2F3F6;">
  <div class="container top_content">
    <div class='col-md-12 fix_content'>
      <div class='col-md-10 top_content_1'>
        <p class="title">PROFESSIONAL CLEANING SERVICES</p>
        <p class='content'>LOREM IPSUM IS SIMPLY DUMMY TEXT OF THE PRINTING AND TYPESETTING INDUSTRY.</p>
      </div>
      <div class="col-md-2 top_content_2">
        <a href="#" class='link'>Readmore</a>
      </div>
    </div>

  </div>
</div>
    
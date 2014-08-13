<?php
get_header();
?>
    <div class="container full-width bg-light-grey home-quote">
    	<div class="container">
            <div class="row">
                <div class="col-sm-10">
                    <h2 class="text-uppercase">Professional Cleaning Services</h2>
                    <h4 class="text-muted text-uppercase">Service and quality run through everything we do - we're dedicated, responsive and always striving to provide the sort of property and cleaning services that our clients deserve</h4>
                </div>
                <div class="col-sm-2">
                	<h2 class="text-right"><a href="<?php echo get_home_url().'/about/' ?>" class="btn btn-dark-grey btn-lg text-uppercase">Read More</a></h2>
                </div>
            </div>
		</div>
    </div>
    <div class="container slider">
    	<div class="row">
        	<div class="col-sm-12">
            	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                  <!-- Indicators -->
                  <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                  </ol>
                
                  <!-- Wrapper for slides -->
                  <div class="carousel-inner">
<?php
$wp_query = new WP_Query();
$properties = array(
        'post_type' =>  'slidehome',
        'paged' => 1,
        'orderby' => 'post_title',
        'posts_per_page' => 5,
        'order'    => 'desc'
 );
$count=0;
$query = $wp_query->query($properties);
foreach ($query as $perres){
    $feat_image = wp_get_attachment_url( get_post_thumbnail_id($perres->ID) );
?>
                    <div class="item <?php if($count==0) echo 'active'; ?>">
                      <img src="<?php echo $feat_image;?>" class="img-responsive" />
                    </div>
<?php
$count++;
}
?>
                  </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container home-box">
    	<div class="row">
        	<div class="col-sm-4">
            	<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/home-icon-01.png" class="img-responsive center-block">
                <h2>Hotels Cleaning</h2>
                <h4>Dolore Ipsum</h4>
                <p>"First impressions" We are sure you have heard that expression, well your property's appearance makes a difference in how potential visitors perceive you hotel...</p>
                <h2><a href="hotels.html" class="btn btn-dark-grey btn-lg text-uppercase">More</a></h2>
            </div>
            <div class="col-sm-4">
            	<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/home-icon-02.png" class="img-responsive center-block">
                <h2>Office Cleaning</h2>
                <h4>SAFE, STRONG, COST EFFECTIVE OFFICE CLEANER</h4>
                <p>Impress your clients with clean office all the time. Clean kick cleans your desks, tables, computer monitors, telephone handset, flower vase, showpieces like brand new</p>
                <h2><a href="Offices.html" class="btn btn-dark-grey btn-lg text-uppercase">More</a></h2>
            </div>
            <div class="col-sm-4">
            	<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/home-icon-03.png" class="img-responsive center-block">
                <h2>Restaurant</h2>
                <h4>Dolore Ipsum</h4>
                <p>Hospitality Cleaning Services provide the cleanest and safest dining and cooking environment for your customers and staff, and prolong the life of your equipment and other...</p>
                <h2><a href="restaurantcleanings.html" class="btn btn-dark-grey btn-lg text-uppercase">More</a></h2>
            </div>
        </div>
    </div>
    <div class="container full-width bg-light-grey home-quote">
    	<div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h2 class="text-uppercase text-center">Our Services</h2><br/>
                </div>
            </div>
            <div class="row text-uppercase">
                <div class="col-sm-4">
                	<div class="list-group arrow-right">
                        <a href="#" class="list-group-item">Domestic Cleaning</a>
                        <a href="#" class="list-group-item bg-dark-grey">End of Tenancy Cleaning</a>
                        <a href="#" class="list-group-item">One Off Cleaning</a>
                        <a href="#" class="list-group-item bg-dark-grey">After Builders Cleaning</a>
                        <a href="#" class="list-group-item">After Party Cleaning</a>
                        <a href="#" class="list-group-item bg-dark-grey">Rug Cleaning</a>
                    </div>
                </div>
                <div class="col-sm-4">
                	<div class="list-group arrow-right">
                        <a href="#" class="list-group-item">Food Processing Plant Cleaning</a>
                        <a href="#" class="list-group-item bg-dark-grey">Laaboratory Cleaning</a>
                        <a href="#" class="list-group-item">IT Cleaning</a>
                        <a href="#" class="list-group-item bg-dark-grey">Transport Cleaning</a>
                        <a href="#" class="list-group-item">Graffiti Removal</a>
                        <a href="#" class="list-group-item bg-dark-grey">Pulic Sector Cleaning</a>
                    </div>
                </div>
                <div class="col-sm-4">
                	<div class="list-group arrow-right">
                        <a href="#" class="list-group-item">Office Cleaning</a>
                        <a href="#" class="list-group-item bg-dark-grey">Retail Cleaning</a>
                        <a href="#" class="list-group-item">Hotel Cleaning</a>
                        <a href="#" class="list-group-item bg-dark-grey">Kitchen and Canteen Cleaning</a>
                        <a href="#" class="list-group-item">Carpet and Upholstery Cleaning</a>
                        <a href="#" class="list-group-item bg-dark-grey">Hospital Cleaning</a>
                    </div>
                </div>
            </div>
		</div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <h2 class="text-uppercase">Recent News</h2>
                <hr>
                <?php
                $wp_query = new WP_Query();
                $properties = array(
                        'post_type' =>  'news',
                        'paged' => 1,
                        'orderby' => 'post_date',
                        'posts_per_page' => 5,
                        'order'    => 'desc'
                 );
                
                $query = $wp_query->query($properties);
                foreach ($query as $perres){
                ?>
                                <div class="row">
                                    <div class="col-xs-3">
                                        <div class="bg-success news-date">
                                            <span class="date-num"><?php echo mysql2date('j', $perres->post_date);?></span>
                                            <span class="date-month"><?php echo mysql2date('M', $perres->post_date);?></span>
                                        </div>
                					</div>
                					<div class="col-xs-9">
                                        <h4 class="media-heading"><a href="<?php echo $perres->guid;?>"><?php echo get_excerpt(50,$perres->post_title);?></a></h4>
                                        <p class="text-muted"><?php echo get_excerpt(90,$perres->post_content);?></p>
                                    </div>
                                </div>
                <?php
                }
                ?>
            </div>
            <div class="col-sm-8">
                <h2 class="text-uppercase text-success h-lg">Welcome</h2>
                <h4 class="text-uppercase text-muted">To Our Cleaning Company</h4>
                <?php
                $wp_query = new WP_Query();
                $sticky = get_option('sticky_posts');
                $properties = array(
                        'post_type' =>  'post',
                        'paged' => 1,
                        'orderby' => 'post_title',
                        'posts_per_page' => 2,
                        'post__in'  =>  $sticky,
                        'order'    => 'desc'
                 );
                
                $query = $wp_query->query($properties);
                foreach ($query as $perres){
                
                    $feat_image = wp_get_attachment_url( get_post_thumbnail_id($perres->ID) );
                ?>
                                <div class="row">
                                	<div class="col-sm-4">
                                    	<h3><a href="<?php echo $perres->guid;?>"><img src="<?php echo $feat_image;?>" class="img-responsive"/></a></h3>
                                    </div>
                                    <div class="col-sm-8">
                                   	  <h3 class="text-success text-uppercase"><a href="<?php echo $perres->guid;?>"><?php echo $perres->post_title;?></a></h3>
                                      <p><?php echo $perres->post_content;?></p>
                                    </div>
                                </div>
                <?php
                }
                ?>
            </div>
        </div>
	</div>
<?php
get_footer();
?>
<?php
/**
 * Template Name: home
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header();
?>

<div class='row '>
	<div class="container">
		<div class='col-md-12 fix_content slide'>
			<?php echo do_shortcode('[layerslider id="1"]');?>
		</div>
		<div class='col-md-12 fix_content'>
			<div class="col-md-4 item">
				<img src="<?php echo get_stylesheet_directory_uri();?>/images/home-icon-01.png"/>
				<p class='title1'>HOTELS CLEANING</p>
				<p class='title2'>DOLORE IPSUM</p>
				<p class='content'>"First impressions" We are sure you have heard that expression, well your property's appearance makes a difference in how potential visitors perceive you hotel..</p>
				<p ><a href="#" class="link">MORE</a></p>
			</div>
			<div class="col-md-4 item">
				<img src="<?php echo get_stylesheet_directory_uri();?>/images/home-icon-02.png"/>
				<p class='title1'>OFFICE CLEANING</p>
				<p class='title2'>SAFE, STRONG, COST EFFECTIVE OFFICE CLEANER</p>
				<p class='content'>Impress your clients with clean office all the time. Clean kick cleans your desks, tables, computer monitors, telephone handset, flower vase, showpieces like brand new</p>
				<p ><a href="#" class="link">MORE</a></p>
			</div>
			<div class="col-md-4 item">
				<img src="<?php echo get_stylesheet_directory_uri();?>/images/home-icon-03.png"/>
				<p class='title1'>RESTAURANT</p>
				<p class='title2'>DOLORE IPSUM</p>
				<p class='content'>
					Hospitality Cleaning Services provide the cleanest and safest dining and cooking environment for your customers and staff, and prolong the life of your equipment and other...</p>
				<p ><a href="#" class="link">MORE</a></p>
			</div>
		</div>
	</div>
</div>
<div class='row ' style="background :#F2F3F6;padding-bottom: 35px;margin-top: 40px;">
	<div class='container'>
		<div class='col-md-12 text_label'>
			<h2>OUR SERVICES</h2>		
		</div>
	</div>
	<div class='container'>
		<div class='col-md-4 our_service'>
			<ul>
				<li><a href="#" class='link2'>Domestic Cleaning</a>
				<li><a href="#" class='link2 grey_background'>End of Tenancy Cleaning</a>
				<li><a href="#" class='link2 '>One Off Cleaning</a>
				<li><a href="#" class='link2 grey_background'>After Builders Cleaning</a>
				<li><a href="#" class='link2'>After Party Cleaning</a>
				<li><a href="#" class='link2 grey_background'>Rug Cleaning</a>
					
			</ul>
		</div>
		<div class='col-md-4 our_service'>
			<ul>
				<li><a href="#" class='link2'>Food Processing Plant Cleaning</a>
				<li><a href="#" class='link2 grey_background'>Laaboratory Cleaning</a>
				<li><a href="#" class='link2'>IT Cleaning</a>
				<li><a href="#" class='link2 grey_background'>Transport Cleaning</a>
				<li><a href="#" class='link2'>Graffiti Removal</a>
				<li><a href="#" class='link2 grey_background'>Pulic Sector Cleaning</a>
					
			</ul>
		</div>
		<div class='col-md-4 our_service'>
			<ul>
				<li><a href="#" class='link2'>Office Cleaning</a>
				<li><a href="#" class='link2 grey_background'>Retail Cleaning</a>
				<li><a href="#" class='link2'>Hotel Cleaning</a>
				<li><a href="#" class='link2 grey_background'>Kitchen and Canteen Cleaning</a>
				<li><a href="#" class='link2'>Carpet and Upholstery Cleaning</a>
				<li><a href="#" class='link2 grey_background'>Hospital Cleaning</a>

			</ul>
		</div>
	</div>
</div>
<div class='row'>
	<div class='container'>
		<div class='col-md-4 recent_new'>
			<h2 class="text-uppercase">Recent News</h2>
			<hr style="width:100%"/>
			<?php
			$args = array('numberposts' => 5,    
						    'post_type' => 'news',
						   );
			$data_news=wp_get_recent_posts( $args);

			?>
			<ul>
				<?php
					foreach ($data_news as $item) {?>
					
					<li>
						<div class='row recent_item'>
						<div class='col-md-3 '>
							  <div class="bg-success news-date">
                            <span class="date-num"><?php

							echo date("d", strtotime($item['post_date'])); ;
							?></span>
                            <span class="date-month"><?php

							echo date("M", strtotime($item['post_date'])); ;
							?></span>
                        </div>				


						</div>
						<div class='col-md-9'>
							<h4 class="media-heading">
								<?php
								echo $item['post_title'];
								?>
							</h4>
                        	<p class="text-muted">
                        		<?php
								echo $item['post_content'];
							?>
                        	</p>
							
						</div>
					</div>
					</li>

					<?php
				}

				?>
			</ul>
		</div>
		<div class='col-md-8'>
			 <h2 class="text-uppercase text-success h-lg">Welcome</h2>
                <h4 class="text-uppercase text-muted">To Our Cleaning Company</h4>
                
                 				<?php
			$args2 = array('numberposts' => 2,    
						    'post_type' => 'post',
						   );
			$data_post=wp_get_recent_posts( $args2);
		
					foreach ($data_post as $item) {
							
						
						?>

		
				 <div class="row">
                	<div class="col-sm-4">
                    	<h3  ><?php echo  get_the_post_thumbnail($item['ID'],array(220,220));?></h3>
                    </div>
                    <div class="col-sm-8">
                   	  <h3 class="text-success text-uppercase"><?php echo $item['post_title'];?></h3>
                      <p><?php

                      	echo $item['post_content'];
                      ?></p></div>
                </div>
                <?php }?>
		</div>

	</div>
</div>
<?php
get_footer();
?>
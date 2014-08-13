<?php
get_header();
?>
    <div class="container full-width bg-light-grey home-quote">
    	<div class="container">
            <div class="row">
                <div class="col-sm-10">
                    <h2 class="text-uppercase">Professional Cleaning Services</h2>
                    <h4 class="text-muted text-uppercase"> 	Service and quality run through everything we do - we're dedicated, responsive and always striving to provide the sort of property and cleaning services that our clients deserve</h4>
                </div>
                <div class="col-sm-2">
                	<h2 class="text-right"><a href="<?php echo get_home_url().'/about/' ?>" class="btn btn-dark-grey btn-lg text-uppercase">Read More</a></h2>
                </div>
            </div>
		</div>
    </div>


    <div class="container">
        <div class="row">
            <div class="col-sm-12" style="padding: 30px;">
            <?php
            echo apply_filters( 'the_content',$post->post_content);
            ?>
			</div>
        </div>
	</div>
<?php
get_footer();
?>
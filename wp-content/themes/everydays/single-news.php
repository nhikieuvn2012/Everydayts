<?php
get_header();
?>
    <div class="container full-width bg-light-grey home-quote">
    	<div class="container">
            <div class="row">
                <div class="col-sm-10">
                    <h2 class="text-uppercase">Professional Cleaning Services</h2>
                    <h4 class="text-muted text-uppercase">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h4>
                </div>
                <div class="col-sm-2">
                	<h2 class="text-right"><a href="#" class="btn btn-dark-grey btn-lg text-uppercase">Read More</a></h2>
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
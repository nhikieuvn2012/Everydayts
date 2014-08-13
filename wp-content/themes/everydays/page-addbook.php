<?php

/**

 * Template Name:addbook

 * 

 * */
get_header();

?>

<!-- ===========Services Wrap Start========== --> 



<div class="services-section" style="background-color:ghostwhite;-webkit-border-bottom-right-radius: 5px;

-webkit-border-bottom-left-radius: 5px;

-moz-border-radius-bottomright: 5px;

-moz-border-radius-bottomleft: 5px;

border-bottom-right-radius: 5px;

border-bottom-left-radius: 5px;padding-top: 10px;">





<div class="col1" style="border-top: none;;">

<?php dynamic_sidebar( 'sidebar-right' ) ;?>

</div>

<div class="col2">

<h2><?php echo $post->post_title;?></h2>

Call <strong>65-6650-8815</strong>

or <strong>fill out the form</strong> below and we will get back to you as soon as possible

<?php

     if(show_form()){
        echo  do_shortcode('[contact-form-7 id="115" title="Book Appointment"]');
     }else{
        echo '<h2 style="color:red;">Your IP has already been spammed!</h2>';
     }
?>

</div>

<br clear="all" /> 



</div> 





<?php

get_footer();

?>
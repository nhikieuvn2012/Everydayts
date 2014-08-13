<?php



/**

 * Template Name: home

 * 

 * */



get_header();



?>



<!-- ===========Banner Wrap Start========== -->



<div class="banner-wrap">



    <div class="callbacks_container">



      <ul class="rslides" id="slider4">



        <li class="img1"></li>



        <li class="img2"></li>



        <li class="img3"></li>



         <li class="img4"></li>



      </ul>



    </div>











<div class="banner-section">



<div class="banner-div">



<div class="banner-botton">



<a href="#request" title="Request a Quote" class="request" >Request&nbsp;a&nbsp;Quote</a>



<a href="<?php echo get_home_url().'/book-appointment/';?>" title="Book Appointment" class="book" >Book&nbsp;Appointment</a>



</div>







<div class="banner-img">



<div class="banner1">Leave the<br />Cleaning to us!</div>



<div class="banner2"><!--10% discount <br /><span>for seniors!</span><br />--><a href="#" title="Special Offer">Enjoy Flawless Workplace<br /></a></div>



<br clear="all" />



</div>















</div>



<br clear="all" /></div>



</div>



<!-- ===========Banner Wrap End========== -->



<!-- ===========Services Wrap Start========== --> 







<div class="services-section">



<h1>Cleaning Services</h1>



<div class="services-div"><h2><a href="<?php echo get_home_url().'/restaurant-cleanings-2/'; ?>" title="Restaurant Cleaning">Restaurant Cleanings</a></h2>







  <a href="<?php echo get_home_url().'/restaurant-cleanings-2/'; ?>" title="Restaurant Cleaning"><img src="<?php echo get_stylesheet_directory_uri(); ?>/wp-content/themes/sunrise-cleaning-services/images/img1.jpg" width="289" height="128" alt="Restaurant Cleaning" border="0" /></a></div> 



<div class="services-div1"><h2><a href="<?php echo get_home_url().'/services-offices/';?>" title="Services Offices">Services Offices</a></h2>







  <a href="<?php echo get_home_url().'/services-offices/';?>" title="Services Offices"><img src="<?php echo get_stylesheet_directory_uri(); ?>/wp-content/themes/sunrise-cleaning-services/images/img2.jpg" width="289" height="128" border="0" alt="Services Offices" /></a></div> 







  







<div class="services-div2"><h2><a href="<?php echo get_home_url().'/services-hotels/';?>" title="Services Hotels">Services Hotels</a></h2>







  <a href="<?php echo get_home_url().'/services-hotels/';?>" title="Services Hotels"><img src="<?php echo get_stylesheet_directory_uri(); ?>/wp-content/themes/sunrise-cleaning-services/images/img8.jpeg" width="289" height="128" border="0" alt="Services Hotels" /></a></div>







<br clear="all" /> 







</div> 







<!-- ===========Services Wrap End========== -->







<!-- ===========Services Wrap Start========== -->







<div class="form-wrap">







<div class="form-div">







<div class="form-main">















<div class="home-form">

<a name="request"></a>

    <h4>Request A Quote</h4>



    <p>Please fill out the form below. We will get back to you as soon as possible.</p>



     <?php 
     if(show_form()){
        echo  do_shortcode('[contact-form-7 id="114" title="Request A Quote"]');
     }else{
        echo '<h2 style="color:red;">Your IP has already been spammed!</h2>';
     }
     
     ?>



    <input type="hidden" name="captcha_hid" id="captcha_hid" value="" />



    </form>



</div>







<div class="choose-us">







<h4>Why Choose Us?</h4>







<p>We are a locally owned operated cleaning service company for Restaurants, Offices and Hotels. </p>







<p>We offer :</p>







<ul>







<li><span>Flexible</span> arrangements - (weekly, biweekly, monthly, on-call, move in/out cleaning, spring cleaning).</li>



<li>Thorough, <span>Competent</span> cleaning service.</li>



<li><span>Fully personalized</span> cleaning services.</li>



<li><span>Professionally</span> trained, experienced staff.</li>



</ul>







</div><br clear="all" />







</div></div></div>











<?php



get_footer();



?>
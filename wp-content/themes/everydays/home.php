<?php
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

<a href="fees-payments/request-an-estimate/index6831.html?rid=1" title="Request a Quote" class="request" >Request&nbsp;a&nbsp;Quote</a>

<a href="book-appointment.html" title="Book Appointment" class="book" rel="facebox">Book&nbsp;Appointment</a>

</div>



<div class="banner-img">

<div class="banner1"><span>Leave the "dirty" and</span><br />leave the<br />cleaning to us!</div>

<div class="banner2"><!--10% discount <br /><span>for seniors!</span><br />--><a href="#" title="Special Offer">Welcome To Everyday Total Solution<br /></a></div>

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

    <h4>Request A Quote</h4>

    <p>Please fill out the form below. We will get back to you as soon as possible.</p>

    <form name="requestfrm" id="requestfrm" method="post" action="http://www.sunrise-cleaning.com/wp-content/themes/sunrise-cleaning-services/mails/book-consultation-mail.php">

    <div class="form-section">

    <label>Name<span>*</span></label>

    <input name="fname" id="fname" type="text" onKeyPress="if(event.keyCode=='13') return validateForm(document.requestfrm);" onChange="refreshCapcha();" tabindex="101" title="Name"/><br clear="all" />

    <label>Email<span>*</span></label>

    <input name="femail" id="femail" type="text" title="Email"  onkeypress="if(event.keyCode=='13') return validateForm(document.requestfrm);"  tabindex="102" /><br clear="all" />

    <label>Phone<span>*</span></label>

    <input  name="fphone" id="fphone" type="text" title="Phone"  onkeypress="if(event.keyCode=='13') return validateForm(document.requestfrm);"  tabindex="103" /><br clear="all" />

    <label>Comments</label>

    <textarea name="fcomments" id="fcomments" cols="" rows="" title="Comments" tabindex="104"  ></textarea><br clear="all" />

    <br clear="all" />

    <div style="height:35px;">

    <div id="submit_form"><a href="JavaScript:void(0);" onClick="validateForm();" title="Submit" class="submit" tabindex="106">Submit</a></div>

    <div id="wait_con" style="display:none; width:100px; text-align:right; padding:3px 0px 5px 0px;  font-size:13px; float:right;"><img src="<?php echo get_stylesheet_directory_uri(); ?>/wp-content/themes/sunrise-cleaning-services/images/ajax-loader.gif" align="left" border="0" style="float:left; margin:0px; padding:0px;"/>Please&nbsp;wait...</div>

    </div>

    <br clear="all" />

    </div>

    <input type="hidden" name="captcha_hid" id="captcha_hid" value="" />

    </form>

</div>



<div class="choose-us">



<h4>Why Choose Us?</h4>



<p>We are a locally owned cleaning service company servicing. </p>



<p>We offer :</p>



<ul>



<li><span>Flexible</span> arrangements - (weekly, biweekly, monthly, on-call, move in/out cleaning, spring cleaning).</li>

<li>Thorough, <span>PROFESSIONAL</span> cleaning services.</li>

<li><span>Fully personalized</span> cleaning services.</li>

<li><span>Well trained</span>, experienced staff.</li>

</ul>



</div><br clear="all" />



</div></div></div>





<?php

get_footer();

?>
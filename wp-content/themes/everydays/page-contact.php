<?php

/**

 * Template Name: Contact

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

<p>  

<div class="col1">
<h2>Contact us</h2>
Please feel free to contact us for any form of enquiries. You may call us at 6650 8815 or simply fill up this form.

Alternatively, you can email us at info@everydayts.com.sg

</div>
<div class="col2">
<h2>Contact form online</h2>
<?php

     if(show_form()){
        echo  do_shortcode('[contact-form-7 id="50" title="Contact form 1"]');
     }else{
        echo '<h2 style="color:red;">Your IP has already been spammed!</h2>';
     }
?>

</div>          </p>

<br clear="all" /> 



</div> 





<?php

get_footer();

?>
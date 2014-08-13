<!-- ===========Service Area Wrap Start========== -->



<div class="service-area">



<h4>Our Location and Operating Hours</h4>

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.8291159424507!2d103.846022!3d1.2758895000000154!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31da191340ce793b%3A0xf6d47589b988c48d!2s10+Anson+Rd%2C+Singapore+079903!5e0!3m2!1sen!2ssg!4v1407392501948" width="453" height="318" frameborder="0" style="border:0"></iframe>

<div class="contact-area">



<h3>Everyday Cleaning Services</h3>



<p>10 Anson Road #26-04 International Plaza Singapore 079903<br />



<span><a href="tel:+65 6650 8815">office: +65 6650 8815</a></span></p>

<h5>Office Hours:</h5>

<p>Monday - Froday: 8:00am - 6:00pm<br />

Sat: 8:00am - 1:00pm</p>



<h5>Services Hours:</h5>

<p>Monday - Friday: 7:00am - 7:00pm<br />

Saturday: 7:00am - 2:00pm </p>

</div><br clear="all" /></div>

<!-- ===========Service Area Wrap End========== -->

<!-- ===========Footer Area Wrap Start========== -->

<p id="back-top"><a href="#top">Top</a></p>







<div class="footer-main-section">



<div class="footer-menu">



                   <?php

                    $menu_name = 'menu-footer';

                    if(($locations=get_nav_menu_locations())&&isset( $locations[ $menu_name ] ) ) {

                        $menu = wp_get_nav_menu_object( $locations[ $menu_name ] );

                                        

                        $menu_items = wp_get_nav_menu_items($menu->term_id);

                        

                                     

                        $menu_list = '<ul>';

                        foreach ( (array) $menu_items as $key => $menu_item ) {

                            if($menu_item->menu_item_parent==0){

                               

                                $count=0;

                                foreach ( (array) $menu_items as $key => $menu_item_p ) {

                                    if($menu_item_p->menu_item_parent==$menu_item->ID){

                                      $count=1;

                                    }

                                }

                                

                                $menu_list .= '<li><a title="'.$menu_item->title.'" href="'.$menu_item->url.'">'.$menu_item->title.'</a>';

                                    if($count==1){

                                        $menu_list.='<ul>';

                                                foreach ( (array) $menu_items as $key => $menu_item_p ) {

                                                    if($menu_item_p->menu_item_parent==$menu_item->ID){

                                                        

                                                        $count2=0;

                                                        foreach ( (array) $menu_items as $key => $menu_item_p2){

                                                        if($menu_item_p2->menu_item_parent==$menu_item_p->ID){

                                                            $count2=1;

                                                        }

                                                        }

                                                        

                                                       $menu_list.= '<li><a href="' .$menu_item_p->url. '">'.$menu_item_p->title.'</a>';

                                                       

                                                        if($count2==1){

                                                            $menu_list.='<ul>';

                                                            foreach ( (array) $menu_items as $key => $menu_item_p2){

                                                                if($menu_item_p2->menu_item_parent==$menu_item_p->ID){

                                                                    $menu_list .= '<li ><a href="'.$menu_item_p2->url.'">'.$menu_item_p2->title.'</a></li>';  

                                                                }

                                                            }

                                                            $menu_list.='</ul>';

                                                        }

                                                       $menu_list.='</li>';

                                                    }

                                                }

                                        $menu_list.='</ul>';

                                    }

                                $menu_list.='</li>';

                            }

                        }

                                        

                        $menu_list .= '</ul>';

                    

                     }

                     echo $menu_list;

                    ?>





</div>

<div class="copy-right">

© 2014. Everyday Total Solutions. All right reserved.

<br />

</div> 

</div>



<!-- ===========Footer Start Wrap End========== --> 



<!-- AdLuge Visitor Tracker Starts Here. Updated on April 2013 -->



<script type="text/javascript">



var AdLBaseURL = (("https:" == document.location.protocol) ? "https://www.adluge.com/trackerjs/" : 







"http://www.adluge.com/trackerjs/");



document.write(unescape("%3Cscript src='" + AdLBaseURL + "visitors-tracker.js' type='text/javascript'%3E%3C/script%3E"));



</script>



<!-- AdLuge Visitor Tracker Ends Here -->  



<!-- start number replacer -->




<script type="text/javascript" src="../leads.adluge.com/euinc/number-changer.js">



</script>



            


</body>





<!-- Mirrored from www.sunrise-cleaning.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 30 Jul 2014 03:28:17 GMT -->

</html>




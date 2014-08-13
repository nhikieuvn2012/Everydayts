<?php
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
<?php
    echo apply_filters( 'the_content',$post->post_content);
?>
</div>
<br clear="all" /> 

</div> 


<?php
get_footer();
?>
<?php
function theme_name_wp_title( $title, $sep ) {
	if ( is_feed() ) {
		return $title;
	}
	
	global $page, $paged;

	// Add the blog name
	$title .= get_bloginfo( 'name', 'display' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) ) {
		$title .= " $sep $site_description";
	}

	// Add a page number if necessary:
	if ( ( $paged >= 2 || $page >= 2 ) && ! is_404() ) {
		$title .= " $sep " . sprintf( __( 'Page %s', '_s' ), max( $paged, $page ) );
	}

	return $title;
}
add_filter( 'wp_title', 'theme_name_wp_title', 10, 2 );

function register_menu() {
    register_nav_menus( array(
    	'menu-header' => 'Menu Header',
    	'menu-footer' => 'Menu Footer'
    ) );
}
add_action('init', 'register_menu');


function get_excerpt($count,$txt){
  $excerpt =$txt;
   if($count>strlen($excerpt)){
     return $excerpt;
 }else{          
    $excerpt = strip_tags($excerpt);
     $excerpt = substr($excerpt, 0, $count);
     $excerpt = substr($excerpt, 0, strripos($excerpt, " "));
     $excerpt = $excerpt.'...';
     return $excerpt;
 }
}


function current_page_url() {
	$pageURL = 'http';
	if( isset($_SERVER["HTTPS"]) ) {
		if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
	}
	$pageURL .= "://";
	if ($_SERVER["SERVER_PORT"] != "80") {
		$pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
	} else {
		$pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
	}
	return $pageURL;
}




add_action( 'init', 'reg_post_news' );

function reg_post_news(){
	$labels = array(
		'name'               => _x( 'news', 'post type general name', 'your-plugin-textdomain' ),
		'singular_name'      => _x( 'news', 'post type singular name', 'your-plugin-textdomain' ),
		'menu_name'          => _x( 'news', 'admin menu', 'your-plugin-textdomain' ),
		'name_admin_bar'     => _x( 'news', 'add new on admin bar', 'your-plugin-textdomain' ),
		'add_new'            => _x( 'Add New', 'news', 'your-plugin-textdomain' ),
		'add_new_item'       => __( 'Add New news', 'your-plugin-textdomain' ),
		'new_item'           => __( 'New news', 'your-plugin-textdomain' ),
		'edit_item'          => __( 'Edit news', 'your-plugin-textdomain' ),
		'view_item'          => __( 'View news', 'your-plugin-textdomain' ),
		'all_items'          => __( 'All news', 'your-plugin-textdomain' ),
		'search_items'       => __( 'Search news', 'your-plugin-textdomain' ),
		'parent_item_colon'  => __( 'Parent news:', 'your-plugin-textdomain' ),
		'not_found'          => __( 'No news found.', 'your-plugin-textdomain' ),
		'not_found_in_trash' => __( 'No news found in Trash.', 'your-plugin-textdomain' )
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'news' ),
		'capability_type'    => array('post','news'),
		'has_archive'        => true,
		'hierarchical'       => true,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
	);

	register_post_type( 'news', $args );
}


add_action( 'init', 'reg_post_slidehome' );

function reg_post_slidehome(){
	$labels = array(
		'name'               => _x( 'Slide home', 'post type general name', 'your-plugin-textdomain' ),
		'singular_name'      => _x( 'Slide home', 'post type singular name', 'your-plugin-textdomain' ),
		'menu_name'          => _x( 'Slide home', 'admin menu', 'your-plugin-textdomain' ),
		'name_admin_bar'     => _x( 'Slide home', 'add new on admin bar', 'your-plugin-textdomain' ),
		'add_new'            => _x( 'Add New', 'Slide home', 'your-plugin-textdomain' ),
		'add_new_item'       => __( 'Add New Slide home', 'your-plugin-textdomain' ),
		'new_item'           => __( 'New Slide home', 'your-plugin-textdomain' ),
		'edit_item'          => __( 'Edit Slide home', 'your-plugin-textdomain' ),
		'view_item'          => __( 'View Slide home', 'your-plugin-textdomain' ),
		'all_items'          => __( 'All Slide home', 'your-plugin-textdomain' ),
		'search_items'       => __( 'Search Slide home', 'your-plugin-textdomain' ),
		'parent_item_colon'  => __( 'Parent Slide home:', 'your-plugin-textdomain' ),
		'not_found'          => __( 'No Slide home found.', 'your-plugin-textdomain' ),
		'not_found_in_trash' => __( 'No Slide home found in Trash.', 'your-plugin-textdomain' )
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'slidehome' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
	);

	register_post_type( 'slidehome', $args );
}


add_theme_support( 'post-thumbnails' );
add_theme_support( 'post-thumbnails', array( 'post' ) );          // Posts only
add_theme_support( 'post-thumbnails', array( 'page' ) );          // Pages only
add_theme_support( 'post-thumbnails', array( 'post', 'slidehome','new' ) ); // Posts and Movies
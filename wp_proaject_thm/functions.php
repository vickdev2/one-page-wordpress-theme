<?php
/**
 * Custom template tags for this theme.
 */
 
	require get_template_directory() . '/inc/template-tags.php';
	require get_template_directory() . '/inc/wp_proaject_thm_options.php';
	require get_template_directory() . '/inc/wp_proaject_thm_widgets.php';
	require get_template_directory() . '/inc/wp_proaject_thm_custom_post.php';


/* Theme Support*/
add_action( 'after_setup_theme', 'wp_proaject_thm_support' ); 
function wp_proaject_thm_support(){
	add_theme_support( 'post-thumbnails' ); 
	register_nav_menus( array(
		'wp_proaject_thm_primary_menu' => 'Primary Menu'
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );
	/*
	 * Enable support for Post Formats.
	 *
	 * See: https://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'product1'
	) );
	 

}
add_action( 'admin_enqueue_scripts', 'wp_proaject_thm_admin_scripts' );
function wp_proaject_thm_admin_scripts(){
	wp_enqueue_style( 'main-css', get_template_directory_uri().'/css/font-awesome.min.css' );
	wp_enqueue_media();
	//wp_enqueue_script( 'jquery',get_stylesheet_directory_uri() .'/js/jquery.js',false,false, true );
	//wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'widget_images', get_template_directory_uri().'/js/wppt_widgets_images.js' ,array('jquery'),false,true );

}

add_action( 'wp_enqueue_scripts', 'wp_proaject_thm_style' );
function wp_proaject_thm_style(){
	wp_enqueue_style( 'wp_proaject_thm-style', get_stylesheet_uri() );
	wp_enqueue_style( 'animate-min-css', get_template_directory_uri().'/css/bootstrap.min.css' );
	wp_enqueue_style( 'font-awesome-min-css', get_template_directory_uri().'/css/animate.min.css' );
	wp_enqueue_style( 'main-css', get_template_directory_uri().'/css/font-awesome.min.css' );
	wp_enqueue_style( 'lightbox-css', get_template_directory_uri().'/css/lightbox.css' );
	wp_enqueue_style( 'bootstrap-min-css', get_template_directory_uri().'/css/main.css' );
	wp_enqueue_style( 'preset-css', get_template_directory_uri().'/css/presets/preset1.css' );
	wp_enqueue_style( 'responsive-css', get_template_directory_uri().'/css/responsive.css' );
	wp_enqueue_style( 'main-css', get_template_directory_uri().'/css/main.css' );
	wp_enqueue_style( 'font-awesom-min-css', get_template_directory_uri().'/css/animate.min.css' );


}

add_action( 'wp_enqueue_scripts', 'wp_proaject_thm_scripts' );
function wp_proaject_thm_scripts(){
	wp_deregister_script( 'jquery' ); 
	wp_register_script( 'jquery',get_stylesheet_directory_uri() .'/js/jquery.js',false,false, true );
	wp_enqueue_script('jquery');
	wp_enqueue_script( 'bootstrap-min-js', get_stylesheet_directory_uri() .'/js/bootstrap.min.js', array('jquery'),false,true );
	wp_enqueue_script( 'google-map-js', 'http://maps.google.com/maps/api/js?sensor=true' );
	wp_enqueue_script( 'jq-inv-min-js', get_stylesheet_directory_uri() .'/js/jquery.inview.min.js', array('jquery'),false,true );
	wp_enqueue_script( 'wow-min-js', get_stylesheet_directory_uri() .'/js/wow.min.js' , array('jquery'),false,true );
	wp_enqueue_script( 'mouse-scroll-js', get_stylesheet_directory_uri() .'/js/mousescroll.js', array('jquery'),false,true );
	//wp_enqueue_script( 'smooth-scroll-js', get_stylesheet_directory_uri() .'/js/smoothscroll.js ', array('jquery'),false,true );
	wp_enqueue_script( 'jq-count-to-js', get_stylesheet_directory_uri() .'/js/jquery.countTo.js', array('jquery'),false,true );
	wp_enqueue_script( 'lightbox-min-js', get_stylesheet_directory_uri() .'/js/lightbox.min.js' , array('jquery'),false,true );
	wp_enqueue_script('main-js', get_template_directory_uri().'/js/main.js', array('jquery'),false,true );
	
	
	wp_enqueue_script('scrol1-js', get_template_directory_uri().'/js/jquery.singlePageNav.js', array('jquery'),false,true );
	wp_enqueue_script('scrol2-js', get_template_directory_uri().'/js/jquery.singlePageNav.min.js', array('jquery'),false,true );
}

add_action( 'widgets_init', 'wp_proaject_thm_widgets_init' );
function wp_proaject_thm_widgets_init(){
	
	register_sidebar( array(
		'name'          => 'Wppt Banner Section',
		'id'            => 'wppt_banner_sec',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => 'Wppt Services Section',
		'id'            => 'wppt_services_sec',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );			
	register_sidebar( array(
		'name'          => 'Wppt Team Member',
		'id'            => 'wppt_team_member',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => 'Wppt Pricing Table',
		'id'            => 'wppt_ptbl_sec',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => 'Wppt Testimonial Section',
		'id'            => 'wppt_testi_sec',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );
}
function custom_excerpt_length( $length ) {
	return 15;
}
add_action('widgets_init', 'unregister_default_widgets', 11);
function unregister_default_widgets() {
     unregister_widget('WP_Widget_Pages'); 
	 unregister_widget('WP_Widget_Calendar');
     unregister_widget('WP_Widget_Archives'); 
	 unregister_widget('WP_Widget_Links');
     unregister_widget('WP_Widget_Meta'); 
	 
     unregister_widget('WP_Widget_Text'); 
	 unregister_widget('WP_Widget_Categories');
     unregister_widget('WP_Widget_Recent_Posts');
     unregister_widget('WP_Widget_Recent_Comments'); 
	 unregister_widget('WP_Widget_RSS');
     unregister_widget('WP_Widget_Tag_Cloud');
     unregister_widget('WP_Nav_Menu_Widget'); 
	 
	} 
<?php
/**
 * The template for displaying the header
*/

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<title><?php wp_title(); ?></title>
	
	
	
	<!--[if lt IE 9]>
    <script src="<?php echo get_template_directory_uri();?>/js/html5shiv.js"></script>
    <script src="<?php echo get_template_directory_uri();?>/js/respond.min.js"></script>
	<![endif]-->
  
	<!--<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>-->
	<link rel="shortcut icon" href="images/favicon.ico">
	
	
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

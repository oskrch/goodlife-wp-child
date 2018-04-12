<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_site_icon(); ?>
	<?php 
		$header_style = ot_get_option('header_style', 'style1');
		$general_boxed = (ot_get_option('general_boxed') == 'on' ? 'boxed' : '');
	?>
	<?php 
		/* Always have wp_head() just before the closing </head>
		 * tag of your theme, or you will break many plugins, which
		 * generally use this hook to add elements to <head> such
		 * as styles, scripts, and meta tags.
		 */
		wp_head(); 
	?>

	<script async='async' src='https://www.googletagservices.com/tag/js/gpt.js'></script>

</head>

<body <?php body_class(); ?>>

<?php do_action( 'inicializa_banner' ); ?>

<div class="main">	
<script>Banners.initialize();</script>

	<div id="wrapper" class="open">

	
		<!-- Start Mobile Menu -->
		<?php do_action( 'thb_mobile_menu' ); ?>
		<!-- End Mobile Menu -->
		
		<!-- Start Content Container -->
		<div id="content-container">
			<!-- Start Content Click Capture -->
			
			<?php dynamic_sidebar('header_banner'); ?>
			
	
			<div class="click-capture"></div>
			<!-- End Content Click Capture -->
			<?php
				get_template_part( 'inc/header/fixed' );
				get_template_part( 'inc/header/subheader' );
				get_template_part( 'inc/header/'.$header_style );
				get_template_part( 'inc/header/pageskin' );
			?>
			
			<div role="main" class="<?php echo esc_attr($general_boxed); ?>">

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<title><?php the_title(); ?></title>
	<!-- appel du CSS de font-awesome pour les icones -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<!-- Police de google font -->
	<link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
	<!-- on appelle toujours son CSS en dernier -->
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
	<title><?php the_title(); ?></title>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<!--HEADER-->
	<header >
		<?php wp_nav_menu(['container'=>'nav']);?>
		<a href="#"><img src="<?php bloginfo('template_url');?>/img/logo.png" alt="logo de Green office" /></a>
		
	</header>
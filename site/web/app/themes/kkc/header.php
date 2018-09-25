<?php
/**
 * Filename: header.php
 * Author: jgalyon
 * Created: 2018/09/21
 * Description:
 **/
?>

<!doctype html>
<html class="no-js" lang="<?php echo get_bloginfo( 'language' ); ?>">
	<head>
		<meta charset="<?php echo get_bloginfo( 'charset' ); ?>">

		<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="apple-touch-icon" href="<?php echo trailingslashit( get_template_directory_uri() ); ?>img/apple-touch-icon.png">

		<link rel="shortcut icon" href="<?php echo trailingslashit( get_template_directory_uri() ); ?>favicon.png" type="image/x-icon">

		<script src="<?php echo trailingslashit( get_template_directory_uri() ); ?>modernizr.js"></script>

		<script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll@14.2.1/dist/smooth-scroll.polyfills.min.js"></script>

		<!-- fontawesome -->
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

		<?php wp_head(); ?>

		<!-- Google Tag Manager -->
		<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
					new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
				j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
				'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
			})(window,document,'script','dataLayer','GTM-52SBCGD');
		</script>
		<!-- End Google Tag Manager -->
	</head>
	<body data-scroll-id="page-top" id="page-top">
		<a href="#" data-scroll class="scroll-top">
			<i class="fa fa-chevron-up"></i>
			<span class="sr-only">scroll to top of page</span>
		</a>
		<div class="wrapper">
			<header role="banner">
				<?php get_template_part( 'views/header', 'navbar'); ?>
			</header>
			<div class="content-wrapper">
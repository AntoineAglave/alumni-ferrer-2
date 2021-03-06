<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
		<link href="https://fonts.googleapis.com/css?family=Fira+Sans|Montserrat" rel="stylesheet">	
		<link href="//www.google-analytics.com" rel="dns-prefetch">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/scss/bootstrap.min.css">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

	</head>
	<body <?php body_class(); ?>>

		<!-- wrapper -->
		<div class="wrapper">

			<!-- header -->
			<header class="header clear" role="banner">

					<!-- nav -->
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top nav">
                    <nav class="navbar navbar-light">
                    <a href="<?php echo home_url(); ?>" class="navbar-brand" href="#">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" width="100"  alt="">
                      </a>
                    </nav>
							
							 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					  </button>
					  <div class="collapse navbar-collapse" id="navbarNav">
							 
							 <?php html5blank_nav(); ?>
						  	<?php echo do_shortcode('[theme_switcha_select text="Choisir un thème"]'); ?>
						</div> 
					</nav>
					<!-- /nav -->

			</header>
			<!-- /header -->

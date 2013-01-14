<!doctype html>  

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->
	  
	<head>
		<meta charset="utf-8"> 
		
		<title><?php wp_title(''); ?></title>
		
		<!-- Google Chrome Frame for IE -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		
		<!-- mobile meta (hooray!) -->
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		
		<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
				
  		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
		<script src="http://use.edgefonts.net/source-sans-pro:n3,i3,n4,i4,n6,i6,n7,i7.js"></script> 
		<!-- wordpress head functions -->
		<?php wp_head(); ?>
		<!-- end of wordpress head -->
			

		
	</head>
	
	<body <?php body_class(); ?>>
	
		<div id="container">
			
			<header class="header" role="banner">
			
				<div id="inner-header" class=" wrap clearfix ">
					<div class="in-wrap clearfix">
					<!-- to use a image just replace the bloginfo('name') with your img src and remove the surrounding <p> -->
					<p id="logo" class="h3"><a href="<?php echo home_url(); ?>" rel="nofollow"><?php bloginfo('name'); ?></a></p>
					
					<!-- if you'd like to use the site description you can un-comment it below -->
					<?php // bloginfo('description'); ?>
					
					
						
						<?php bones_main_nav(); ?> 
						<div class="mob-nav "><a href="#mobile-nav" class="green"><i class="icon-menu-1"></i> Menu </a></div>
					</div>										
				</div> <!-- end #inner-header -->
			
			</header> <!-- end header -->

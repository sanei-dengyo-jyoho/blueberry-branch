<?php?><!DOCTYPE html>

<html <?php language_attributes(); ?>

	<head>
		
		<meta http-equiv="Content-type" content="text/html;charset=<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" >
																		
		<title><?php wp_title('|', true, 'right'); ?></title>
				
		<link rel="shortcut icon" href="<?php echo esc_url( home_url() ); ?>/favicon.ico" />
				
		<?php if ( is_singular() ) wp_enqueue_script( "comment-reply" ); ?>
		 
		<?php wp_head(); ?>

		<?php if ( is_404() ) { ?>
			<link href="http://fonts.googleapis.com/css?family=Open+Sans:700" rel="stylesheet" type="text/css">
			<link type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/css/404.min.css" rel="stylesheet" media="all" />
			<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.flatshadow.min.js"></script>
			<script>
			jQuery.noConflict();
			jQuery(document).ready(function() {
				jQuery(".flat-icon").flatshadow({
					fade: true,
					boxShadow: "#d7cfb9"
				});
			});
			</script>
		<?php } ?>
	
	</head>
	
	<body <?php body_class(); ?>>
	
		<div class="navigation">
				
			<div class="navigation-inner section-inner">
		
				<ul class="blog-menu">
				
					<?php if ( has_nav_menu( 'primary' ) ) {
																		
						wp_nav_menu( array( 
						
							'container' => '', 
							'items_wrap' => '%3$s',
							'theme_location' => 'primary', 
							'walker' => new lingonberry_nav_walker
														
						) ); } else {
					
						wp_list_pages( array(
						
							'container' => '',
							'title_li' => ''
						
						));
						
					} ?>
					
				 </ul>
				 
				 <?php get_search_form(); ?>
				 
				 <div class="clear"></div>
			 
			</div> <!-- /navigation-inner -->
		 
		</div> <!-- /navigation -->
	
		<div class="header section">
				
			<div class="header-inner section-inner">
			
				<?php if (get_header_image() != '') : ?>
							
					<a href="<?php echo esc_url( home_url() ); ?>" title="<?php echo esc_attr( get_bloginfo( 'title' ) ); ?>  &mdash; <?php echo esc_attr( get_bloginfo( 'description' ) ); ?>" rel="home" class="logo">
						<img src="<?php header_image(); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>">
					</a>
					
				<?php else : ?>
				
					<a href="<?php echo esc_url( home_url() ); ?>" title="<?php echo esc_attr( get_bloginfo( 'title' ) ); ?> &mdash; <?php echo esc_attr( get_bloginfo( 'description' ) ); ?>" rel="home" class="logo noimg"></a>
				
				<?php endif; ?>
			        				
				<h1 class="blog-title">
					<a href="<?php echo esc_url( home_url() ); ?>" title="<?php echo esc_attr( get_bloginfo( 'title' ) ); ?> &mdash; <?php echo esc_attr( get_bloginfo( 'description' ) ); ?>" rel="home"><?php echo esc_attr( get_bloginfo( 'title' ) ); ?></a>
				</h1>
				
				<div class="nav-toggle">
				
					<div class="bar"></div>
					<div class="bar"></div>
					<div class="bar"></div>
					
					<div class="clear"></div>
				
				</div>
				 				
				 <div class="clear"></div>
																							
			</div> <!-- /header section -->
			
		</div> <!-- /header-inner section-inner -->
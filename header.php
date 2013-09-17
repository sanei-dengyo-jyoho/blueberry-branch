<?php?><!DOCTYPE html>

<html <?php language_attributes(); ?>

	<head>
		
		<meta http-equiv="Content-type" content="text/html;charset=<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" >
																		
		<title><?php wp_title('|', true, 'right'); ?></title>
				
		<?php if ( is_singular() ) wp_enqueue_script( "comment-reply" ); ?>
		 
		<?php wp_head(); ?>
	
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
			        				
				<h1 class="blog-title flat-shadows flat-icons-header" style="display:inline-block;margin:16px 0 0 17%;">
					<a href="<?php echo esc_url( home_url() ); ?>" title="<?php echo esc_attr( get_bloginfo( 'title' ) ); ?> &mdash; <?php echo esc_attr( get_bloginfo( 'description' ) ); ?>" rel="home"><?php echo do_shortcode('[flatshadow_text class="circle transition" style="font-size:24px;margin-right:6px;width:2.84em;" tagname="span"]'.esc_attr( get_bloginfo( 'title' ) ).'[/flatshadow_text]'); ?></a>
				</h1>
				<script type="text/javascript">
				jQuery.noConflict();
				jQuery(document).ready(function() {
					jQuery(".flat-shadows.flat-icons-header .flat-icon").flatshadow({
						angle: "SE", fade: true
					});
				});
				</script>
				
				<div class="nav-toggle">
				
					<div class="bar"></div>
					<div class="bar"></div>
					<div class="bar"></div>
					
					<div class="clear"></div>
				
				</div>
				 				
				 <div class="clear"></div>
																							
			</div> <!-- /header section -->
			
		</div> <!-- /header-inner section-inner -->
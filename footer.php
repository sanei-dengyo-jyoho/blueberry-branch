<div class="footer section">
	
	<div class="footer-inner section-inner">
	
		<?php if ( is_active_sidebar( 'footer-a' ) ) : ?>
		
			<div class="footer-a widgets">
		
				<?php dynamic_sidebar( 'footer-a' ); ?>
				
				<div class="clear"></div>
				
			</div>
			
		<?php endif; ?>
			
		<?php if ( is_active_sidebar( 'footer-b' ) ) : ?>
		
			<div class="footer-b widgets">
		
				<?php dynamic_sidebar( 'footer-b' ); ?>
				
				<div class="clear"></div>
				
			</div>
			
		<?php endif; ?>
							
		<?php if ( is_active_sidebar( 'footer-c' ) ) : ?>
		
			<div class="footer-c widgets">
		
				<?php dynamic_sidebar( 'footer-c' ); ?>
				
				<div class="clear"></div>
				
			</div>
			
		<?php endif; ?>
		
		<div class="clear"></div>
	
	</div> <!-- /footer-inner -->

</div> <!-- /footer -->

<div class="credits section">

	<div class="credits-inner section-inner">

		<p class="credits-left">
		
			<span><?php _e('Copyright', 'lingonberry'); ?></span> &copy; <?php echo date("Y") ?> <a href="<?php echo home_url(); ?>" title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a>
		
		</p>
		
		<div class="clear"></div>
	
	</div> <!-- /credits-inner -->
	
</div> <!-- /credits -->

<?php wp_footer(); ?>

</body>
</html>
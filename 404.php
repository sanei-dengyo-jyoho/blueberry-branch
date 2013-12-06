<?php get_header(); ?>

<div class="content section-inner">

	<div class="posts">

		<div class="post">
		
			<div class="content-inner">
	                
				<div class="post-header">
				        
		        	<h2 class="post-title"><?php _e('お探しのページは見つかりません', 'lingonberry'); ?></h2>
		        	
		        </div>
			                                                	            
		        <div class="post-content">

					<?php echo do_shortcode('[longshadows number="404" angle="SE" fade="true" boxshadow="color-shadow" style="margin-bottom: 3em;"]'.do_shortcode('[longshadow class="circle transition" delim=""]'.esc_attr("404").'[/longshadow]').'[/longshadows]'); ?>

					<p></p>
		        	            
		            <p><?php _e("他の検索をお試しください。", 'lingonberry') ?></p>
		            
		            <?php get_search_form(); ?>
		            
		        </div> <!-- /post-content -->
	        
	        </div> <!-- /content-inner -->
	            	                        	
		</div> <!-- /post -->
	
	</div> <!-- /posts -->

</div> <!-- /content -->

<?php get_footer(); ?>

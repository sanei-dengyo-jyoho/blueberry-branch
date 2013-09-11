<?php get_header(); ?>

<div class="content section-inner">

	<div class="posts">

		<div class="post">
		
			<div class="content-inner">
	                
				<div class="post-header">
				        
		        	<h2 class="post-title"><?php _e('お探しのページは見つかりません', 'lingonberry'); ?></h2>
		        	
		        </div>
			                                                	            
		        <div class="post-content">

					<div class="raised3d">
						<p>
							<span class="go3d">4</span>
							<span class="go3d">0</span>
							<span class="go3d">4</span>
						</p>
					</div>
					<p></p>
		        	            
		            <p><?php _e("他の検索をお試しください。", 'lingonberry') ?></p>
		            
		            <?php get_search_form(); ?>
		            
		        </div> <!-- /post-content -->
	        
	        </div> <!-- /content-inner -->
	            	                        	
		</div> <!-- /post -->
	
	</div> <!-- /posts -->

</div> <!-- /content -->

<?php get_footer(); ?>

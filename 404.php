<?php get_header(); ?>

<div class="content section-inner">

	<div class="posts">

		<div class="post">
		
			<div class="content-inner">
	                
				<div class="post-header">
				        
		        	<h2 class="post-title"><?php _e('お探しのページは見つかりません', 'lingonberry'); ?></h2>
		        	
		        </div>
			                                                	            
		        <div class="post-content">

					<div class="flatshadow">
						<div data-angle="SE" class="flat-icon"> 4 </div>
						<div data-angle="SE" class="flat-icon"> 0 </div>
						<div data-angle="SE" class="flat-icon"> 4 </div>
						<div data-angle="SE" class="flat-icon"> ! </div>
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

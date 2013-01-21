<?php get_header(); ?>
			
			<div id="content">

				<div id="inner-content" class="wrap clearfix">
			
					<div id="main" class=" first clearfix in-wrap" role="main">

						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
							
							<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
						
								<header class="article-header single-header ">
							
									<h1 class="entry-title single-title" itemprop="headline"><?php the_title(); ?></h1>
							
									<p class="byline vcard"><?php _e("", "bonestheme"); ?> <time class="updated" datetime="<?php echo the_time('Y-m-j'); ?>" pubdate><?php the_time('l jS F, Y'); ?></time> </p>
						
						<!-- <?php _e("by", "bonestheme"); ?> <span class="author"><?php the_author_posts_link(); ?>  <?php _e("filed under", "bonestheme"); ?> <?php the_category(', '); ?> -->
								</header> <!-- end article header -->
					
								<section class="entry-content clearfix base-space" itemprop="articleBody">
									<!-- FIRST we want the feature image from the home -->
									<!-- on mobile this will be the feat pic, desktop a full on slider. -->
									<div class='post-text'>
									 <?php if (! in_category(5)){   ?>
									 
									 <!-- next the written content -->
									<?php
									function remove_images( $content ) {
									   $postOutput = preg_replace('/<img[^>]+./','', $content);
									   return $postOutput;
									}
									add_filter( 'the_content', 'remove_images', 100 );
									?>
									<?php $content = the_content(); $content = preg_replace("/<img(.*?)>/si", "", $content);  
									echo $content; ?>
									</div>
									<?php remove_filter( 'the_content', 'remove_images' ); ?>
									<?php //the_content(); ?>
									
									<!-- then run out the list of attachemnts for the post - all of them as per last site -->							 
									 	<ul class="pic-gallery big-gal">
										<?php
										$args = array(
										   'post_type' => 'attachment',
										   'numberposts' => -1,
										   'post_status' => null,
										   'order'=> 'ASC', 'orderby' => 'title',
										   'post_parent' => $post->ID,
										   'exclude'     => get_post_thumbnail_id()
										  );
										
										  $attachments = get_posts( $args );
										     if ( $attachments ) {
										        foreach ( $attachments as $attachment ) {
										           echo '<li><div class="image">';
										           echo wp_get_attachment_image( $attachment->ID, 'large' );
										           echo '</div></li>';
										          };
										  };?>
										</ul>
										
									
									<!-- end the post content -->

									 
									 <?php }else{ ?>
									 	
									 	<?php the_content(); ?>
									 	
									 	</div>
									 <?php }; ?>
									
									
									
									
									
								</section> <!-- end article section -->
								<?php if (in_category(5)){   ?>
							
									<?php comments_template(); ?>
								
								<?php }; ?> 
								
								</article> <!-- end article -->
					
						<?php endwhile; ?>			
						<?php else : ?>
					
							<article id="post-not-found" class="hentry clearfix">
					    		<header class="article-header">
					    			<h1><?php _e("Oops, Post Not Found!", "bonestheme"); ?></h1>
					    		</header>
					    		<section class="entry-content">
					    			<p><?php _e("Uh Oh. Something is missing. Try double checking things.", "bonestheme"); ?></p>
					    		</section>
					    		<footer class="article-footer">
					    		    <p><?php _e("This is the error message in the single.php template.", "bonestheme"); ?></p>
					    		</footer>
							</article>
					
						<?php endif; ?>
			
					</div> <!-- end #main -->
    
					<?php //get_sidebar(); ?>

				</div> <!-- end #inner-content -->
    
			</div> <!-- end #content -->

<?php get_footer(); ?>
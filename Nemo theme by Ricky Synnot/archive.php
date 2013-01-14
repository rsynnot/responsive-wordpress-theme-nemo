<?php get_header(); ?>
			
			<div id="content">
			
				<div id="inner-content" class="wrap clearfix">
				
				    <div id="main" class=" first clearfix in-wrap" role="main">
					    <!-- Sort out the title at the top of the page -->
					    <?php if (is_category()) { ?>
						    <h1 class="archive-title h1  <?php if (is_category(5)) { echo "blog-special"; } ?>">
							    <span><?php _e("", "bonestheme"); ?></span> <?php single_cat_title(); ?> 
							    <!-- Posts Categorized: -->
					    	</h1>
					    
					    <?php } elseif (is_tag()) { ?> 
						    <h1 class="archive-title h2">
							    <span><?php _e("Posts Tagged:", "bonestheme"); ?></span> <?php single_tag_title(); ?>
						    </h1>
					    
					    <?php } elseif (is_author()) { 
					    	global $post;
					    	$author_id = $post->post_author;
					    ?>
						    <h1 class="archive-title h2">

						    	<span><?php _e("Posts By:", "bonestheme"); ?></span> <?php echo get_the_author_meta('display_name', $author_id); ?>

						    </h1>
					    <?php } elseif (is_day()) { ?>
						    <h1 class="archive-title h2">
	    						<span><?php _e("Daily Archives:", "bonestheme"); ?></span> <?php the_time('l, F j, Y'); ?>
						    </h1>
		
		    			<?php } elseif (is_month()) { ?>
			    		    <h1 class="archive-title h2">
				    	    	<span><?php _e("Monthly Archives:", "bonestheme"); ?></span> <?php the_time('F Y'); ?>
					        </h1>
					
					    <?php } elseif (is_year()) { ?>
					        <h1 class="archive-title h2">
					    	    <span><?php _e("Yearly Archives:", "bonestheme"); ?></span> <?php the_time('Y'); ?>
					        </h1>
					    <?php } ?>


					    <!-- Now run the loop -->
					    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					    <!-- if news do this -->
					    <?php if (is_category(5)){   ?>
							
					    	<article id="post-<?php the_ID(); ?>" class="clearfix  cat-article"  role="article">										
					    	<div class="blog-article ">
							<header class="article-header">
								<h3 class="h2 category-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
								<p class="byline vcard"><?php _e("", "bonestheme"); ?> <time class="updated" datetime="<?php echo the_time('Y-m-j'); ?>" pubdate><?php the_time('l jS F, Y'); ?></time> </p>
							</header> <!-- end article header -->
							<section class="entry-content clearfix">
							<a class="thumbnail" href="<?php the_permalink(); ?>">
							<?php //if ( has_post_thumbnail() ) { the_post_thumbnail( 'blog-thumb' ); } ?></a>
							<?php the_excerpt(); ?>
							</section> <!-- end article section -->
							<footer class="article-footer">
							</footer> <!-- end article footer -->
					    	</div>
							</article> <!-- end article -->
					
					
						<?php } else {   ?>
					    

					     <div class="mywork " >    
							<a class="thumbnail" href="<?php the_permalink(); ?>">
							<?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'cat-thumb' ); } ?></a>
							
							<header class="work-header">
							<h3 class="work-title"><a class="ajax" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
							</header> <!-- end article header -->
							
							<section class="work-content clearfix">
							<div class="excerpt"><?php the_excerpt(); ?>
							
							<p class="project-meta">Posted on <?php the_date('D jS M, Y'); ?></p>
							</div>
							</section> <!-- end article section -->
						</div>	

					    
						<?php }; ?>

					

					
					    <?php endwhile; ?>	
					
					        <?php if (function_exists('bones_page_navi')) { ?>
						        <?php bones_page_navi(); ?>
					        <?php } else { ?>
						        <nav class="wp-prev-next">
							        <ul class="clearfix">
								        <li class="prev-link"><?php next_posts_link(__('&laquo; Older Entries', "bonestheme")) ?></li>
								        <li class="next-link"><?php previous_posts_link(__('Newer Entries &raquo;', "bonestheme")) ?></li>
							        </ul>
					    	    </nav>
					        <?php } ?>
					
					    <?php else : ?>
					
    					    <article id="post-not-found" class="hentry clearfix">
    						    <header class="article-header">
    							    <h1><?php _e("Oops, Post Not Found!", "bonestheme"); ?></h1>
    					    	</header>
    						    <section class="entry-content">
    							    <p><?php _e("Uh Oh. Something is missing. Try double checking things.", "bonestheme"); ?></p>
        						</section>
    	    					<footer class="article-footer">
    		    				    <p><?php _e("This is the error message in the archive.php template.", "bonestheme"); ?></p>
    			    			</footer>
    				    	</article>
					
					    <?php endif; ?>
					    
					  
	    				    			
    				</div> <!-- end #main -->
	    			<?php //get_sidebar(); ?>

	    			
                
                </div> <!-- end #inner-content -->
                
			</div> <!-- end #content -->

<?php get_footer(); ?>
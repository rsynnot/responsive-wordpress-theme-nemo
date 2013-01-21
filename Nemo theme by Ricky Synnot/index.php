<?php get_header(); ?>
			
			<div id="content">
			
				<div id="inner-content" class="wrap clearfix "> <!-- still pushging 100% -->
			
					<div class="introbg wrap ">
				    <div id="intro" class=" first  clearfix in-wrap" >
						<div class="mybio clearfix " > 
						    <header class="work-header">
						    
						    <?php  query_posts( 'p=122' );
						   	// set $more to 0 in order to only get the 
						   	//first part of the post ' . the_permalink() . '
						   	//global $more;
						   	//$more = 0;
						   	// the Loop
						   	while (have_posts()) : the_post();
						   	    
						   	    echo the_excerpt();
						   	    
						   	endwhile;
						   	wp_reset_query();  ?>
						   	</header>
						</div> <!-- end my bio --> 
				    </div>   <!-- end intro div --> 
					</div>
					 
					
					<div id="main" class=" clearfix in-wrap" role="main">  
						<h3 class="sub-header" >Recent Work</h3>  
					    
					    
					    
					    <!-- set homepage cat choices -->
					    <div id="iso-container"> 
					    
					    <?php query_posts($query_string . '&cat=-5,-1,-6&posts_per_page=8'); ?>
					    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
					    
						
						    
						    <div class="mywork mymasonry clearfix" >    
								<a class="thumbnail" href="<?php the_permalink(); ?>">
								<?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'blog-thumb' ); } ?></a>
								
								<header class="work-header">
								<h3 class="work-title"><a class="ajax" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
								</header> <!-- end article header -->
								
								<section class="work-content clearfix">
								<div class="excerpt"><?php the_excerpt(); ?>
								
								<p class="project-meta">Posted on <?php the_date('D jS M, Y'); ?></p>
								</div>
								</section> <!-- end article section -->
								
							</div>
						
						    
						    
						    
						    
						    
						    
					
					    <?php endwhile; ?>
					    
					     </div><!-- end iso-container -->
					    	
					    	<div class="traverse-nav ">
					    		<p><?php posts_nav_link('','Previous page','More work &rarr;'); ?> </p>
					    	</div>
					    	
					        <?php if (function_exists('bones_page_navi')) { ?>
					            <?php //bones_page_navi(); ?>
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
					        	    <p><?php _e("This is the error message in the index.php template.", "bonestheme"); ?></p>
					        	</footer>
					        </article>
					
					    <?php endif; ?>
					   
				    </div> <!-- end #main -->
    
				    <?php //get_sidebar(); ?>
				    
				</div> <!-- end #inner-content -->
    
			</div> <!-- end #content -->

<!-- run the jquery masonry script here -->



<?php get_footer(); ?>

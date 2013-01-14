			<footer class="footer" role="contentinfo">
			
				<div id="inner-footer" class="wrap clearfix in-wrap">
					
					<nav role="navigation">
						<a name="mobile-nav"> 
    					
    					
    					
    					<?php bones_footer_links(); ?>
    					
	                </nav>
	                <p class="foothead">CONTACT RICKY</p>
	                <p><a href="mailto:ricky@itsricky.com" target="_blank" title="email Ricky">ricky@itsricky.com</a></p>
	                <p><?php  query_posts( 'p=122' );
						   	// set $more to 0 in order to only get the 
						   	//first part of the post ' . the_permalink() . '
						   	//global $more;
						   	//$more = 0;
						   	// the Loop
						   	while (have_posts()) : the_post();
						   		echo the_excerpt();   
						   	endwhile;
						   	wp_reset_query();  ?>
	                </p>
	                		
					<p class="source-org copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>.</p>
				
				</div> <!-- end #inner-footer -->
				
			</footer> <!-- end footer -->
		
		</div> <!-- end #container -->
	
		
		<!-- all js scripts are loaded in library/bones.php -->
		<?php wp_footer(); ?>
		
		
			<!-- drop Google Analytics Here -->
		<script type="text/javascript">
		
		  var _gaq = _gaq || [];
		  _gaq.push(['_setAccount', 'UA-34691089-1']);
		  _gaq.push(['_trackPageview']);
		
		  (function() {
		    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		  })();
		
		</script>
		<!-- end analytics -->
	</body>

</html> <!-- end page. what a ride! -->
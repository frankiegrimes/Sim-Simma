<?php get_header(); ?>    


    

    
	    	<div class="grid-container">
	    		<div class="grid-x grid-padding-x">
	    			<?php 
	    			if ( have_posts() ) : while ( have_posts() ) : the_post();
	    			
	    				get_template_part( 'content', get_post_format() );
	    			
	    			endwhile; endif; 
	    			?>


	    		</div>
	    	</div>
	   

	    



   <?php get_footer(); ?>
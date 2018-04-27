<?php get_header(); ?>     

    


        
        <div class="grid-x">
            <div class="small-12 cell">
       <?php 
            if ( have_posts() ) : while ( have_posts() ) : the_post();
            
              get_template_part( 'content', get_post_format() );
            
            endwhile; endif; 
            ?>
            </div>

        </div>      

    



<?php get_footer(); ?>
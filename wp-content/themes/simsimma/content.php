          
            </div>
        </div>


        <div class="grid-container">

            <div class="grid-x grid-padding-x">

                <div class="small-12 medium-3 cell info-sidebar">
                    <h2>NEWS</h2>
                    <h6><?php the_date(); ?> </h6>
                    <h6><?php the_author(); ?></h6>
                </div>
                
                <div class="small-12 medium-6 cell blog-content">
                    <h2> <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
                    
                    <?php the_content(); ?>
                </div>

                    <div class="small-12 medium-3 cell sidebar-content">
                    <?php get_sidebar(); ?>
                    </div>
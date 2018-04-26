          
            </div>
        </div>


        <div class="grid-container">

            <div class="grid-x grid-padding-x flex">
                <div class="small-12 medium-6 cell">
                  
                    <h2> <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
         
                </div>
            </div>
     
            <div class="grid-x grid-padding-x">

                <div class="small-12 medium-3 cell">
                    <h2>NEWS</h2>
                    <h6><?php the_date(); ?> </h6>
                    <h6><?php the_author(); ?></h6>
                </div>
                <div class="block">
            </div>
                <div class="small-12 medium-6 cell">
                    <?php the_content(); ?>
                                        <div class="block">
            </div>
                </div>

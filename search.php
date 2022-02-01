<?php get_header(); ?>

<div class="container">
<?php
    $s=get_search_query();
    $args = array(
                    's' =>$s
                );
        // The Query
    $the_query = new WP_Query( $args );
    if ( $the_query->have_posts() ) {
            _e("<h2 class='display-4 '>Search Results for: ".get_query_var('s')."</h2>");
            _e("<div class=' shadow p-5' style='border-radius: 5px;'>");

            while ( $the_query->have_posts() ) {
            $the_query->the_post();
                    ?>
                            <a href="<?php the_permalink(); ?>" class="text-info" style="text-decoration: none; color: #000;"><?php the_title(); ?> 
                            <p class="text-dark"><?php the_excerpt(); ?></p>
                            </a>
                            <a href="<?= the_permalink();?>" class="btn btn-outline-primary">Read more</a>
                            <hr>

                    
                    <?php

            }
            _e("</div>");

        }else{
    ?>
            <h2 class="display-3 text-center">Nothing Found</h2>
            <div class="alert alert-info">
            <p>Sorry, but nothing matched your search criteria. Please try again with some different keywords.</p>
            </div>
    <?php } ?>

</div>


<?php get_footer(); ?>
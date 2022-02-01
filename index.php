<?php
get_header();

$post_type = get_queried_object()->post_type;

if (have_posts()):while (have_posts()):the_post(); ?>

    <section class="section-padding">
        <div class="container">
            <div class="text-box col-lg-8 col-md-10 col-12 m-auto">
                <h2 class="display-2"><?php the_title(); ?></h2>
                <?php the_content(); ?>
            </div>
        </div>
    </section>
  
<?php

endwhile;endif;

get_footer(); ?>
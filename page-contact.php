<?php
/**
 * Template Name: Page Contact 
 * Description: Page template full width.
 *
 */

get_header();
?>

<section class="contact-form container shadow" style="border-radius: 5px;">
    <h2 class="display-2 text-center">Contact Us</h2>
    <div class="top-contact-form text-center">

            <p>
            info@tinshed.co.uk<i class="fas fa-envelope ms-2 text-warning"></i>
            </p>
            <p>
                07877278374<i class="fas fa-phone ms-2 text-warning"></i>
            </p>

    </div>
    <div class="row m-auto">
        <div class="col-lg-10 m-auto pb-5">
        <?php echo do_shortcode('[contact]'); ?>

        </div>
    </div>
</section>

<?php get_footer(); ?>
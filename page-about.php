<?php
/**
 * Template Name: About Page
 */
$pageid = get_the_id();
?>
<?php get_header() ?>

<section class="media-text-alternate">
    <?php 
        $media_img_1 = get_field('media_text_image'); 
        $media_text_heading = get_field('media_text_heading');
        $media_text_textarea = get_field('media_text_textarea');
        // TODO:: 
        // Changes these to links 
        $media_text_btn_1 = get_field('media_text_button_1');
        $media_text_btn_2 = get_field('media_text_button_2');
        // var_dump($media_img_1);
    ?>
    <div class="container col-xxl-8 px-4 py-5">
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
        <div class="col-10 col-sm-8 col-lg-6 col-img">
            <!-- <img src="http://tin-shed-forge.local/wp-content/uploads/2021/09/tin-shed-forge.jpeg" class="d-block mx-lg-auto img-fluid shadow" alt="Bootstrap Themes" width="700" height="500" loading="lazy"> -->
            <img src="<?= $media_img_1['url']; ?>" class="d-block mx-lg-auto img-fluid shadow" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
        </div>
        <div class="col-lg-6 col-text">
            <h1 class="display-5 fw-bold lh-1 mb-3"><?= $media_text_heading; ?></h1>
            <p class="lead"><?= $media_text_textarea; ?></p>
            <div class="d-grid gap-2 d-md-flex justify-content-md-start">
            <button type="button" class="btn btn-primary btn-lg px-4 me-md-2"><?= $media_text_btn_1; ?></button>
            <button type="button" class="btn btn-outline-secondary btn-lg px-4"><?= $media_text_btn_2; ?></button>
            </div>
        </div>
        </div>
    </div>
</section>



<section class="container">
    <div class="row featurette">
        <div class="col-md-7">
            <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It’ll blow your mind.</span></h2>
            <p class="lead">Some great placeholder content for the first featurette here. Imagine some exciting prose here.</p>
        </div>
        <div class="col-md-5">
            <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"></rect><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>

        </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
        <div class="col-md-7 order-md-2">
            <h2 class="featurette-heading">Oh yeah, it’s that good. <span class="text-muted">See for yourself.</span></h2>
            <p class="lead">Another featurette? Of course. More placeholder content here to give you an idea of how this layout would work with some actual real-world content in place.</p>
        </div>
        <div class="col-md-5 order-md-1">
            <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"></rect><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>

        </div>
        </div>

</section>




<?php get_footer(); ?>  
<?php
/**
 * Template Name: Page Front 
 * Description: Page template full width.
 *
 */

get_header();
?>
<?php 

$slide_1_heading = get_field('carousel_slide_1_heading');
$slide_1_subheading = get_field('carousel_slide_1_subheading');
$slide_1_image = get_field('carousel_slide_1_image');

$slide_2_heading = get_field('carousel_slide_2_heading');
$slide_2_subheading = get_field('carousel_slide_2_subheading');
$slide_image_2 = get_field('carousel_slide_2_image');

$slide_3_heading = get_field('carousel_slide_3_heading');
$slide_3_subheading = get_field('carousel_slide_3_subheading');
$slide_image_3 = get_field('carousel_slide_3_image');


?>



<section class="carousel-header">

<div id="carouselExampleCaptions" class="carousel slide shadow" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner shadow-md">
    <div class="carousel-item active">
    <img src="<?= $slide_1_image['url']; ?>" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h4 class="display-2"><?= $slide_1_heading; ?></h4>
        <p><?= $slide_1_subheading; ?></p>
      </div>
    </div>
    <div class="carousel-item">
    <img src="<?= $slide_image_2['url']; ?>" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5 class="display-2"><?= $slide_2_heading; ?></h5>
        <p><?= $slide_2_subheading; ?></p>
      </div>
    </div>
    <div class="carousel-item">
    <img src="<?= $slide_image_3['url']; ?>" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5 class="display-2"><?= $slide_3_heading; ?></h5>
        <p><?= $slide_3_subheading; ?></p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</section>


<main class="container">

<section class="media-text-alternate mt-5">
  <?php
    $media_text_heading_home = get_field('media_text_alternate_heading');
    $media_text_subheading_home = get_field('media_text_alternate_subheading');
    $media_text_textarea_home = get_field('media_text_alternate_textarea_home');
    $media_text_image_home = get_field('media_text_image_home');
    $media_text_link_1 = get_field('media_text_alternate_1_link');



    $media_text_image_home_2 = get_field('media_text_alternate_image_2_home');
  ?>
  <div class="row featurette">
        <div class="col-md-7 order-md-2">
          <h2 class="featurette-heading" style="margin-top: 4rem; margin-bottom: 2rem;"><?= $media_text_heading_home; ?> </h2>
          <div class="textarea">
            <p class="lead"><?= $media_text_subheading_home; ?></p>
            <p><?= $media_text_textarea_home; ?></p>
            <a href="<?= $media_text_link_1['url']; ?>" class="btn btn-outline-primary btn-sm-block mt-3 mb-4"><?= $media_text_link_1['title']; ?><i class="fas fa-chevron-right ms-2"></i></a>
          </div>
         
        </div>
        <div class="col-md-5 order-md-1">
          <img src="<?= $media_text_image_home['url']; ?>" class="shadow" alt="" height="400px" width="100%" style="object-fit: cover; border-radius: 5px;">

        </div>
      </div>


      <div class="row featurette mt-5">
      <div class="col-md-7">
        <h2 class="featurette-heading" style="margin-top: 4rem; margin-bottom: 2rem;">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
        <p class="lead">And yes, this is the last block of representative placeholder content. Again, not really intended to be actually read, simply here to give you a better view of what this would look like with some actual content. Your content.</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum itaque mollitia aspernatur. Qui fugiat architecto voluptatibus nisi, recusandae enim soluta non consequatur adipisci nesciunt eos voluptates quia, animi odio corporis.</p>
      </div>
      <div class="col-md-5">
        <img src="<?= $media_text_image_home_2['url']; ?>" alt="" class="shadow" alt="" height="400px" width="100%" style="object-fit: cover; border-radius: 5px;">
      </div>
    </div>
</section>

<section class="text-editor  mt-5">
  <div class="row">
    <div class="col-12 text-center">
      <h3 class="display-4 text-center">What We Do</h3>
      <p class="lead">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Distinctio consectetur earum aut, natus nulla delectus necessitatibus nesciunt deleniti repellat minima esse temporibus facilis quibusdam praesentium, pariatur ab. Doloremque, suscipit quas.</p>
      <a href="" class="btn btn-success">Find out more</a>
    </div>
  
  </div>
</section>
</main>



<?php get_footer(); ?>
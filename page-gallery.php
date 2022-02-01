<?php
/**
 * Template Name: Page Gallery 
 * Description: Page template full width.
 *
 */

get_header();
?>

<section class="text-editor container">
    <div class="heading">
        <h1 class="display-3 text-center">Welcome to our gallery</h1>
    </div>

</section>

<?php
$image_1 = get_field('image_1');
$image_2 = get_field('image_2');
$image_3 = get_field('image_3');
$image_4 = get_field('image_4');
$image_5 = get_field('image_5');
$image_6 = get_field('image_6');
$image_7 = get_field('image_7');
$image_8 = get_field('image_8');
?>

<section class="container mt-5">
    <!-- Gallery -->
<div class="row">
  <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
    <img
      src="<?= $image_1['url']; ?>"
      class="w-100 shadow-1-strong rounded mb-4"
      alt=""
    />

    <img
      src="<?= $image_2['url']; ?>"
      class="w-100 shadow-1-strong rounded mb-4"
      alt=""
    />
  </div>

  <div class="col-lg-4 mb-4 mb-lg-0">
    <img
      src="<?= $image_3['url']; ?>"
      class="w-100 shadow-1-strong rounded mb-4"
      alt=""
    />

    <img
      src="<?= $image_4['url']; ?>"
      class="w-100 shadow-1-strong rounded mb-4"
      alt=""
    />
  </div>

  <div class="col-lg-4 mb-4 mb-lg-0">
    <img
      src="<?= $image_5['url']; ?>"
      class="w-100 shadow-1-strong rounded mb-4"
      alt=""
    />

    <img
      src="<?= $image_6['url']; ?>"
      class="w-100 shadow-1-strong rounded mb-4"
      alt=""
    />
  </div>
</div>
<!-- Gallery -->



</section>


<?php get_footer(); ?>
    </div>
    <!-- Option 1: Bootstrap Bundle with Popper -->
<!-- Footer -->

<footer class="text-center text-lg-start mt-5 text-muted">
  <!-- Section: Social media -->
  <section
    class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom container">
    <!-- Left -->
    <div class="me-5 d-none d-lg-block">
      <span class="text-white">Find us on social media:</span>
    </div>
    <!-- Left -->

    <!-- Right -->
    <div>
      <a href="" class="me-4 text-primary">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="" class="me-4 text-info">
        <i class="fab fa-twitter"></i>
      </a>
      <a href="" class="me-4 text-danger">
        <i class="fab fa-google"></i>
      </a>
      <a href="" class="me-4 text-dark">
        <i class="fab fa-instagram"></i>
      </a>
      <a href="" class="me-4 text-primary">
        <i class="fab fa-linkedin"></i>
      </a>
    </div>
    <!-- Right -->
  </section>
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold mb-4 text-white">
          <i class="fas fa-horse me-3"></i>Tin Shed Forge
          </h6>
          <p class="text-white">
           Thank you for visiting my site! Please feel free to get in touch to discuss any oppurtunities.
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4 text-white">
            See More
          </h6>
          <p>
            <a href="<?= get_home_url(); ?>/contact-me" class="text-white">Contact Me</a>
          </p>
          <p>
            <a href="<?= get_home_url(); ?>/home" class="text-white">Home</a>
          </p>
          <p>
            <a href="<?= get_home_url(); ?>/about-me" class="text-white">About me</a>
          </p>
        </div>
        <!-- Grid column -->


        <!-- Grid column -->
        <?php 
$args = array(
'post_type'=> 'post',
'orderby'    => 'ID',
'post_status' => 'publish',
'order'    => 'DESC',
'posts_per_page' => 3 // this will retrive all the post that is published 
);
$result = new WP_Query( $args );
?>
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
        <h6 class="text-uppercase fw-bold mb-4 text-white">
            my work
          </h6>
            <?php if ( $result-> have_posts() ) : ?>
                <?php while ( $result->have_posts() ) : $result->the_post(); ?>
                        <p><a href="<?= the_permalink(); ?>" class="text-white "><?= the_title(); ?></a></p>
                    <?php endwhile; ?>
                <?php endif; wp_reset_postdata(); ?>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4 text-white">
            Contact
          </h6>
          <p class="text-info">
            <i class="fas fa-envelope me-3"></i>
            info@tinshedforge.co.uk
          </p>
          <p class="text-info"><i class="fas fa-phone me-3"></i> + 01 234 567 88</p>
          <p class="text-info"><i class="fas fa-print me-3"></i> + 01 234 567 89</p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
    © <?= date("Y"); ?>  Copyright:
    <a class="text-reset fw-bold" href="https://mdbootstrap.com/">callummacalastdev</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

<?php wp_footer(); ?>

  </body>
</html>
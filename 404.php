<?php get_header(); ?>

<div class="container">
    <h1 class="display-1 text-center">404</h1>
    <h3 class="display-3 text-center">Sorry but you have hit a dead end..</h3>
    <p class="lead text-center py-3">Let's get you back on track ->
        <a href="<?= get_home_url(); ?>" class="btn text-dark btn-success">Get me back to safety</a>
    </p>
</div>

<?php get_footer(); ?>
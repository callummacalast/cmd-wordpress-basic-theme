<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://kit.fontawesome.com/c5a3b5b538.js" crossorigin="anonymous"></script>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <?php wp_head(); ?>

    <title><?php wp_title(); ?></title>
  </head>
  <body <?php body_class('loading'); ?>>
        
    <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand text-info" href="<?= get_home_url(); ?>"><?php echo get_bloginfo( 'name' ); ?></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="border: none;">
        <!-- <span class="navbar-toggler-icon text-white"></span> -->
        <i class="fas fa-bars text-white" style="font-size: 30px;"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <?php
        wp_nav_menu(array(
                'menu' => 'primary-menu',
                'depth' => 5,
                'container' => false,
                'menu_class' => 'nav navbar-nav',
                'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
        ));
        ?>
        <form class="search-form my-2 my-lg-0" role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
            <div class="input-group">
                <input type="text" name="s" class="form-control" placeholder="<?php esc_attr_e( 'Search', 'callum-macalast-builds' ); ?>" title="<?php esc_attr_e( 'Search', 'callum-macalast-builds' ); ?>" />
                <button type="submit" name="submit" class="btn "><i class="fas fa-search text-white"></i></button>
            </div>
        </form>
        </div>
    </div>
    </nav>

    <div id="site_content" class="mt-5">


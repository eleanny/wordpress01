<!DOCTYPE html>
<html>
  <head>
    <title><?php bloginfo('title'); ?></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <?php wp_head(); ?>
  </head>
  <body>
    <!-- Nav -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <?php
           wp_nav_menu( array(
              'theme_location' => 'menu-1',
               'menu_id'        => 'primary-menu',
               'container'      => false,
               'depth'          => 2,
               'menu_class'     => 'navbar-nav mr-auto',
               'walker'         => new Bootstrap_NavWalker(),
               'fallback_cb'    => 'Bootstrap_NavWalker::fallback',
          ) );
        ?>
        <form action="/" method="GET" class="form-inline my-2 my-lg-0">
          <input name="s" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </nav>
    <!-- /Nav -->
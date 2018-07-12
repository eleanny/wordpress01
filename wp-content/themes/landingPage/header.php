<!DOCTYPE html>
<html>
<head>
	<title><?php bloginfo(); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php wp_head(); ?>
</head>
<body>
	
		<nav class="navbar navbar-expand-lg navbar-dark bg-trans fixed-top">
          <a class="navbar-brand" href="#"><img width="20%" src="<?php echo get_stylesheet_directory_uri(); ?>/images/latam_logo.png"></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarText">
          <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
          <a class="nav-link" href="#">Equipo<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
          <a class="nav-link" href="#">Blog</a>
          </li>
          <li class="nav-item">
          <a class="nav-link" href="#">Contacto</a>
          </li>
          </ul>
          </div>
          </nav>
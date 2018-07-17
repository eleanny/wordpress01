<!-- Jumbotron -->
    <div class="jumbotron jumbotron-fluid">
      <div class="container">
      	<?php query_posts('posts_per_page=1&category_name=destacados'); ?>
      	<?php if(have_posts()): while (have_posts()): the_post(); ?>
        <h1 class="display-4"><?php the_title(); ?></h1>
        <p class="lead"><?php the_excerpt(); ?></p>
        <?php endwhile; endif;?>
      </div>
    </div>
    <!-- /Jumbotron -->
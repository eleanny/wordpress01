<?php get_header(); ?>
    
    <!-- Noticias -->
    <div class="container mb-3">
      <div class="row">
        <!--col-->
        <?php if(have_posts()): while (have_posts()): the_post(); ?>
        <div class="col-md-12 mb-3 mt-3">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
              <p class="card-text"><?php the_excerpt(); ?></p>
            </div>
          </div>
        </div>
        <!--col-->
      <?php endwhile; endif;?>
    </div>
  </div>
    <!-- /Noticias -->
 <?php get_footer(); ?>   
    <?php get_header(); ?>
     
	 <?php if(have_posts()): ?>
	 	<?php while (have_posts()): ?>
	 		<?php the_post(); ?>
	 		<div class="post container">
	 			<h1 class="post_title"><?php the_title(); ?></h1>
	 			<div class="post__content"><?php the_content(); ?></div>
	 		</div>
	 	<?php endwhile; ?>	
	 <?php endif; ?>	
    <?php get_footer(); ?>

    
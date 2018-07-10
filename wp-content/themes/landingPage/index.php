<?php get_header(); ?>
<h2>mi primer tema</h2>
<?php if ( have_posts() ) : ?>
	<?php while ( have_posts() ) : the_post();?>    
	<!-- do stuff ... -->
	<?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>
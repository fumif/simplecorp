<?php get_header(); ?>

		<section class="jumbotron">
			<div class="container-fluid">

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		<div class="jumbotron-title">
			<h1><?php the_title(); ?></h1>
		</div>

	<?php endwhile; else : ?>
		<p><?php _e( 'Sorry, no posts matched your criteria.','simple-corp'); ?></p>
	<?php endif; ?>

			</div>
		</section>

<?php get_footer(); ?>
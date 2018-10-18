<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<section>
		<?php if (has_post_thumbnail()): ?>
		<div class="jumbotron" style="background: url('<?php echo wp_get_attachment_url( get_post_thumbnail_id() ); ?>') center no-repeat;background-size: cover;">

			<div class="container-fluid">
				<div class="jumbotron-title">
					<h1><?php the_title(); ?></h1>
				</div> 
			</div>
		</div>
			<?php else: ?>
				<div class="container-fluid">
					<div class="padding">
						<div class="plain-title">
						<h1><?php wp_title(' '); ?></h1>
					</div>
					</div>
		</div>
			<?php endif; ?>
	</section>
	<section class="padding-bottom">
		<div class="container">
			<div class="row">
				<div class="col-sm-10 col-center">
					<p class="homepage-section1 text-center"><?php the_content(); ?></p>
				</div>
			</div>
		</div>
	</section>
<?php endwhile; else : ?>
<p><?php _e( 'Sorry, no pages found.' ,'simple-corp'); ?></p>
<?php endif; ?>

<?php get_footer(); ?>
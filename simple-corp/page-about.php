<?php 
	/*
	Template Name: About page
	*/
	?>
	<?php get_header(); ?>

	<section class="jumbotron" style="background-image: url(<?php echo  get_theme_mod('about-background', get_theme_default('about-bg'))?>)">
		<div class="container-fluid">
			<span id="page-bg"></span>
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

				<div class="jumbotron-title">
					<h1><?php the_title(); ?></h1>
				</div>

			<?php endwhile; endif; ?>

		</div>
	</section>
	<section class="padding">
		<div class="container">
			<div class="row">
				<div class="col-md-10 col-center">
					<div class="col-md-6">
						<?php if (!dynamic_sidebar('about-left')): ?>
							<h2 class="section-title">Title</h2>
							<p>Please add a Visual Editor widget to have them display here.</p>
						<?php endif; ?>					</div>
					<div class="col-md-6">
						<?php if (!dynamic_sidebar('about-right')): ?>
							<h2 class="section-title">Title</h2>
							<p>Please add a Visual Editor widget to have them display here.</p>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="white padding">
			<?php 	/**
				 * The WordPress Query class.
				 * @link http://codex.wordpress.org/Function_Reference/WP_Query
				 *
				 */

			$args = array(

				'post_type'   => 'our_service',
				'order'       => 'ASC'

			);
			
			$query = new WP_Query( $args );
			$count = $query->post_count;

			?>
			<div class="container">
				<h2 class="section-title about_section_title"><?php echo get_theme_mod( 'our_service', get_theme_default('our_service') ); ?></h2>
				<div class="col-md-10 col-center">
					<div class="row">
						<?php if ($query->have_posts()): while ($query->have_posts()): $query->the_post(); ?>
							<div class="custom_text 
							<?php if ( $count < 2 ): ?>col-md-12
							<?php else : ?>col-md-6<?php endif; ?>">
							<p class="text-center"><i class="fa fa-2x <?php the_field('icon') ?>"></i></p>
							<p class="text-center"><?php the_field('description') ?></p>
						</div>
					<?php endwhile; ?> 
					<?php else: ?>
						<p class="text-center">To display contents here, please add custom post type.
						</p>
					<?php endif; wp_reset_postdata(); ?>
				</div>
			</div>
		</div>
	</section>
	<?php 
	$args = array(
		'post_type' => 'ourteam',
		'order' => 'ASC'
	);
	$query = new WP_Query($args);
	?>
	<section class="padding">
		<div class="container">
			<h2 class="section-title about_section_title"><?php echo get_theme_mod( 'our_team', get_theme_default('our_team') ); ?></h2>
			<div class="row">
				<?php if ($query->have_posts()): while ($query->have_posts()): $query->the_post(); ?>
					<div class="col-sm-4">
						<div class="col-xs-12 card">
							<div class="card-img-top">
							<?php the_post_thumbnail('full', array( 'class' => 'img-responsive')); ?>
							</div>
							<div class="card-body text-center">
								<h3 class="card-title"><?php the_title(); ?></h3>
								<p><?php  the_field('position'); ?></p>
							</div>	
						</div>
					</div>
				<?php endwhile; ?>
				<?php else: ?>
					<p class="text-center">To display contents here, plese add custom post type.</p>
				<?php endif; wp_reset_postdata(); ?>
			</div>
		</div>
	</section>
	<?php get_footer(); ?>



<?php get_header(); ?>

<section class="jumbotron"
 style="background-image: url(<?php echo  get_theme_mod('index-background', get_theme_default('home-bg'))?>)">
	<div class="container-fluid">
		<span id="index-bg"></span>
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
			<div class="col-sm-10 col-center">
				<h2 class="section-title homepage-section1"><?php echo  get_theme_mod('section1-title', get_theme_default('section1_title') ); ?></h2>
				<p class="homepage-section1"><?php echo get_theme_mod( 'section1-text', get_theme_default('lorem') ); ?></p>
			</div>
		</div>
	</div>
</section>
<section class="white padding">
	<div class="container">
		<h2 class="homepage-text-image section-title text-center"><?php echo get_theme_mod('section2-title',  get_theme_default('section2-title')) ?></h2>
		<div class="row mb100">
			<div class="col-sm-6">
				<h3 class="homepage-text-image"><?php echo get_theme_mod('title-image-left', get_theme_default('title-image')); ?></h3>
				<p class="m60 homepage-text-image"><?php echo get_theme_mod('text-image-left', get_theme_default('lorem')); ?></p>
			</div>
			<div class="col-sm-6 homepage-text-image">
				<img src="<?php echo get_theme_mod( 'image-left' , get_theme_default('image')); ?>" 
				alt="<?php echo get_theme_mod('title-image-left', get_theme_default('title-image')); ?>" class="img-responsive">
			</div>
		</div>
		<div class="row mt100">
			<div class="col-sm-6 col-sm-push-6 homepage-text-image">
				<h3 class="homepage-text-image"><?php echo get_theme_mod('title-image-right', get_theme_default('title-image')); ?></h3>
				<p class="m60 homepage-text-image"><?php echo get_theme_mod('text-image-right', get_theme_default('lorem')); ?></p>
			</div>
			<div class="col-sm-6 col-sm-pull-6 homepage-text-image">
				<?php
				?>
				<img src="<?php echo get_theme_mod( 'image-right' , get_theme_default('image')); ?>" 
				alt="<?php echo get_theme_mod('title-image-right', get_theme_default('title-image')); ?>" class="img-responsive">
			</div>
		</div>
	</div>
</section>
<section class="padding">
	<div class="container">
		<h2 class="section-title">Latest Blog</h2>
		<div class="row">
			<?php query_posts( array(
				'post_type'      => 'post',
				'posts_per_page' => 3,
				'ignore_sticky_posts' => 1
	));
 ?>
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<div class="col-sm-4 col-xs-12">
						<?php 
						$link = get_permalink($post->ID ); 
						$title = get_the_title( $post->ID );
						$time = get_the_time( 'M d, Y', $post->ID );
						?>
						<a href="<?php echo $link; ?>">
							<article class="card col-xs-12">
								<div class="card-img-top">
								<?php if (get_the_post_thumbnail()): ?>
									<?php the_post_thumbnail('', array(
										'class'=> ' img-responsive'
									)
								); ?>
								</div>
								<?php endif;?>
								<div class="card-body">
									<h2 class="card-title"><?php echo $title ?></h2>
									<ul class="post-meta p16">
										<li><?php echo $time; ?></li>
									</ul>
								</div>
							</article>
						</a>
					</div>
				<?php endwhile; else : ?>
				<p><?php _e( 'Sorry, no posts found.','simple-corp' ); ?></p>
			<?php endif; ?>
		</div>
	</div>
</section>
	<?php get_footer(); ?>
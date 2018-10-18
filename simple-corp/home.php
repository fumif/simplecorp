		<?php get_header(); ?>
		<section class="jumbotron" style="background-image: url(<?php echo  get_theme_mod('blog-background', get_theme_default('blog-bg'))?>)">
			<div class="container-fluid">
				<span id="blog-bg"></span>
				<div class="jumbotron-title">
					<h1><?php wp_title('	'); ?></h1>
				</div>
			</div>
		</section>
		<section class="padding post-list">
			<div class="container-fluid">
				<div class="col-sm-8">
					<div class="masonry column2">
						<?php  if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<?php 
							$link = get_permalink($post->ID ); 
							$title = get_the_title( $post->ID );
							$excerpt = get_the_excerpt($post->ID );
							$time = get_the_time( 'M d, Y', $post->ID );
							$author = get_the_author();
						?>
						<a href="<?php echo $link; ?>">
							<article class="card exception">
								<?php if (get_the_post_thumbnail()): ?>
									<div class="card-img-top">
									<?php the_post_thumbnail('', array(
										 'class'=> ' img-responsive'
										 ) ); ?>
									</div>
								<?php endif;?>
								
									<div class="card-body">
										<h2 class="card-title"><?php echo $title ?></h2>
										<ul class="post-meta p16">
											<li><?php echo $time; ?></li>
											<li>By <span class="text-bold"><?php echo $author;?></span></li>
										</ul>
										<p><?php echo $excerpt; ?></p>
									</div>
							</article>
						</a>
					<?php endwhile; else : ?>
					<p><?php _e( 'Sorry, no posts found.','simple-corp' ); ?></p>
				<?php endif; ?>
					</div>
					<div class="row">
						<div class="col-xs-12 pagination">
							<?php previous_posts_link(); ?>
							<?php next_posts_link(); ?>
						</div>
					</div>
				</div>
			<?php get_sidebar(); ?>	
		</div>
	</section>

<?php get_footer(); ?>

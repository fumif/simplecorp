		<?php get_header(); 
			global $wp_query;
			$args = array_merge($wp_query->query_vars, array(
				'post_type' => 'post'
			));
			query_posts($args);


		  ?>
		<section class="padding">
			<div class="container">
				<div class="col-xs-12">
					<h2 class="mb100"><?php wp_title(''); ?></h2>
				</div>
				<div class="col-sm-8 search-result">
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
						<?php 
								$link = get_permalink($post->ID ); 
								$title = get_the_title( $post->ID );
								$excerpt = get_the_excerpt($post->ID );
								$time = get_the_time( 'M d, Y', $post->ID );
								$author = get_the_author();
							?>
						<a href="<?php echo $link; ?>">
							<div class="masonry column1">
								<article class="card">
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
							</div>
						</a>
					<?php endwhile; else : ?>
					<p><?php _e( 'Sorry, no posts found.', 'simple-corp' ); ?></p>
				<?php endif; ?>
			</div>
			<?php get_sidebar(); ?>	
		</div>
	</section>

<?php get_footer(); ?>

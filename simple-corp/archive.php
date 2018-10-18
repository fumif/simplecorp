		<?php get_header(); ?>
		<section class="padding">
			<div class="container">
				<div class="col-xs-12">
					<h2 class="mb100"><?php wp_title(''); ?></h2>
				</div>
				<div class="col-sm-8 masonry">
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
						<article class="card">
							<?php if (get_the_post_thumbnail()): ?>
								<div class="card-img-top">
								<?php the_post_thumbnail('', array(
									 'class'=> ' img-responsive'
									 ) ); ?>
							</div>
							<?php endif;?>
							<?php 
								$link = get_permalink($post->ID ); 
								$title = get_the_title( $post->ID );
								$excerpt = get_the_excerpt($post->ID );
								$time = get_the_time( 'M d, Y', $post->ID );
								$author = get_the_author();
							?>
							<a href="<?php echo $link; ?>">
								<div class="card-body">
									<h2 class="card-title"><?php echo $title ?></h2>
									<ul class="post-meta p16">
										<li><?php echo $time; ?></li>
										<li>By <span class="text-bold"><?php echo $author;?></span></li>
									</ul>
									<p><?php echo $excerpt; ?></p>
								</div>
							</a>
						</article>
					<?php endwhile;  endif; ?>
			</div>
			<?php get_sidebar(); ?>	
		</div>
	</section>

<?php get_footer(); ?>

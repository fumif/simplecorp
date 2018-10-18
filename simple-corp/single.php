<?php get_header(); ?>
<?php 
$bg_img = wp_get_attachment_url( get_post_thumbnail_id( $post->ID ));?>
<section <?php if ($bg_img): ?> style="background:url(<?php echo $bg_img; ?>) no-repeat; background-size: cover;" class="jumbotron"<?php else: ?> class=" blog-title"<?php endif; ?>>
	<div class="container-fluid" <?php post_class(); ?>>

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<div class="<?php if ($bg_img): ?>jumbotron-title<?php else: ?>plain-title
			<?php endif; ?>">
			<p class="cat">
				<?php the_category(', '); ?> <?php if (get_the_tags()) the_tags(); ?>
			</p>

			<h1><?php the_title(); ?></h1>
		</div>
	<?php endwhile; else : ?>
	<p>
		<?php _e( 'Sorry, no pages found.','simple-corp'); ?>
	</p>

<?php endif; ?>
</div>
</section>
<section class="padding">
	<div class="container">
		<div class="col-sm-8 col-xs-12" id="comments-wrap">
			<article>
				<div class="row">
					<ul class="post-meta text-light">
						<li>By <span class="text-bold"><?php the_author_posts_link(); ?> - </span></li>
						<li>
							<?php the_time('M d, Y ' ); ?> </li>
						</ul>
					</div>
					<hr/>
					
					<div class="row">
						<?php the_content(); ?>
					</div>
					<div class="row text-center">
						<?php wp_link_pages( ); ?>
				</div>
			</article>
			<?php comments_template(); ?>
			

		</div>
		<?php get_sidebar(); ?>
	</div>
</section>

<?php get_footer(); ?>




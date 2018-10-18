

<?php get_header(); ?>
		<section class="padding">
			<div class="container">
				<header class="page-header">
					<h1 class="page-title"><?php _e( 'Oops! That page can&rsquo;t be found.', 'simple-corp' ); ?></h1>
				</header><!-- .page-header -->
				<div class="page-content col-sm-8">
					<p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'simple-corp' ); ?></p>
					<?php get_search_form(); ?>
				</div><!-- .page-content -->
			</div>
		</section>

<?php get_footer(); ?>
		</main>
		<footer>
				<div class="container">
					<div class="row">
						<div class="col-sm-4 col-xs-12">
							<h1 class="logo"><?php bloginfo('name' ); ?></h1>
							<div class="row footer-info">
									<p><i class="fa fa-fw fa-map-marker"></i>
									<span class="footer_info"><?php echo get_theme_mod( 'footer_address', get_theme_default('footer_address')); ?></span></p>
									<p><i class="fa fa-fw fa-phone"></i><span class="footer_info"><?php echo get_theme_mod( 'footer_phone', get_theme_default('footer_phone')); ?></span></p>
									<p><a href="#"><i class="fa fa-fw fa-envelope"></i><span class="footer_info"><?php echo get_theme_mod( 'footer_email', get_theme_default('footer_email')); ?></span></a></p>
							</div>
						</div>
						<div class="col-sm-8 col-xs-12 text-center">
							<div class="row">
								<?php    /**
								* Displays a navigation menu
								* @param array $args Arguments
								*/

								if (has_nav_menu( 'social-footer' )) {
									$social_link = array(

									'theme_location'  => 'social-footer',
									'container'       => false,
									'menu_class'      => 'social list-unstyled col-sm-4 col-xs-6 col-center',
									'before'          => '<span class="fa fa-stack fa-1x">',
									'after'           => '</span>',
								);
							
								wp_nav_menu( $social_link ); 
								}
								
								?>
									
							</div>
							<hr class="col-md-6 col-center" />
							<div class="row">
							<p class="copyright">
								<?php create_copyright(); ?>
							</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /offcanvas -->
			</div>
			<!-- /offcanvas-wrapper -->
			</footer>
				<?php wp_footer(); ?>
		</body>
</html>
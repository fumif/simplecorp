<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<!-- Bootstrap core CSS -->
		<?php wp_head(); ?>
	</head>
		<body <?php body_class(); ?>>
			<header>
				<nav class="navbar navbar-default navbar-fixed-top">
					<div class="container-fluid">
						<div class="navbar-header">
							<h1 class="logo"><a class="navbar-brand" href="<?php echo esc_url( home_url());?>"><?php bloginfo('name' ); ?></a></h1>
							<div id="menu-bar" class="open-nav pull-right visible-xs"><i class="fa fa-lg fa-bars"></i></div>
						</div>

						<div id="main-nav" class="hidden-xs">
							<div>
									<?php    /**
										* Displays a navigation menu
										* @param array $args Arguments
										*/
										if (has_nav_menu( 'header-menu')) {
											$defaults = array(
											'theme_location' => 'header-menu',
											'container' => false,
											'menu_class' => 'nav navbar-nav',
										);
										wp_nav_menu( $defaults );
										}
										 ?>
									</div>
									<div class="social text-center">
								<?php    /**
									* Displays a navigation menu
									* @param array $args Arguments
									*/
									if (has_nav_menu( 'social-link' )) {
										$social_link = array(
										'theme_location' => 'social-link',
										'container' => false,
										'menu_class' => 'nav navbar-nav navbar-right',
									);

									wp_nav_menu( $social_link ); 
									}
									?>
								</div>
							</div>
						</div>
					</nav>
				</header>
				<div id="offcanvas-wrapper">
					<div id="offcanvas">
						<div id="offcanvas-nav" class="nav navbar-default text-center">
							<div class="container">
								<div class="row">
									<div class="col-xs-12">
										<?php    
										if (has_nav_menu( 'header-menu' )) {
											$defaults = array(
											'theme_location'  => 'header-menu',
											'container' => false,
											'menu_class' => 'nav navbar-nav',
											);

											wp_nav_menu( $defaults );
										}
										?>
									</div>
								</div>
								<div class="row">
									<div class="social col-xs-10 col-center">
										<?php    /**
										* Displays a navigation menu
										* @param array $args Arguments
										*/
										if (has_nav_menu( 'social-link' )) {
											$social_link = array(
												'theme_location' => 'social-link',
												'container' => false,
												'menu_class' => 'nav navbar-nav',
											);

										wp_nav_menu( $social_link ); 
										}
										?>
									</div>
								</div>
							</div>
							<!-- /container -->
						</div>
						<!-- /offcanvas-nav -->
					<main>
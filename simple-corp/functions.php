<?php  

add_theme_support( 'title-tag' );
add_theme_support( 'menus' );
add_theme_support( 'post-thumbnails' ); 
add_theme_support( 'custom-header' );
add_theme_support( 'custom-background' );
add_theme_support( 'customize-selective-refresh-widgets' );
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'custom-logo' );
add_editor_style();
$args = array(
	'default-color' => 'FCF5EA',
);
add_theme_support( 'custom-background', $args );

if ( ! isset( $content_width ) ) $content_width = 900;

if ( is_singular() ) wp_enqueue_script( 'comment-reply' );

/*=======================================================================
*----------------------* CSS Version *----------------------*
=======================================================================*/
function updating_styles($styles) {
	$mtime = filemtime(get_stylesheet_directory().'/style.css');
	$styles -> default_version =$mtime;
}

add_action( 'wp_default_styles', 'updating_styles' );
/*=======================================================================
*----------------------* Title Tag *----------------------*
=======================================================================*/

function theme_slug_setup() {
	add_theme_support( 'title-tag' );
}
add_action( 'after_setup_theme', 'theme_slug_setup' );


/*=======================================================================
*----------------------* ADDING STYLE SHEET *----------------------*
=======================================================================*/

function add_theme_styles() {
	wp_enqueue_style( 'bootstrap_css',  get_template_directory_uri().'/assets/bootstrap.min.css', false );
	wp_enqueue_style('google_font_css', 'https://fonts.googleapis.com/css?family=Abril+Fatface|Poppins:300,400,500,600,700' );
	wp_enqueue_style( 'fontawesome_css', get_template_directory_uri().'/assets/font-awesome.min.css', false );
	wp_enqueue_style( 'main_css', get_template_directory_uri().'/style.css', false );
}

add_action( 'wp_enqueue_scripts', 'add_theme_styles');

/*=======================================================================
*----------------------* ADDING JAVASCRIPT *----------------------*
=======================================================================*/

function add_theme_js() {

	global $wp_scripts;

	wp_register_script('html5_shiv', 'https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js', '', '', false );
	wp_register_script('respond_js', 'https://oss.maxcdn.com/respond/1.4.2/respond.min.js', '', '', false );
	wp_register_script('ie_emulate_js', get_template_directory_uri().'/js/ie-emulation-modes-warning.js', '', '', false );
	wp_register_script('ie_viewport_js', get_template_directory_uri().'/js/ie-viewport.js', '', '', true );


	$wp_scripts -> add_data('html5_shiv', 'conditional', 'lt IE 9');
	$wp_scripts -> add_data('respond_js', 'conditional', 'lt IE 9');
	$wp_scripts -> add_data('ie_emulate_js', 'conditional', 'lt IE 9');
	$wp_scripts -> add_data('ie_viewport_js', 'conditional', 'lt IE 10');

	wp_enqueue_script('bootstrap_js', get_template_directory_uri().'/assets/bootstrap.min.js', array('jquery'), '', true );
	wp_enqueue_script( 'main_js', get_template_directory_uri().'/js/script.js', array( 'jquery' ), '', true );

}

add_action( 'wp_enqueue_scripts', 'add_theme_js' );


/*=======================================================================
*----------------------* REGISTER THEME MENU *----------------------*
=======================================================================*/

function register_theme_menus(){
	register_nav_menus(
		array(
			'header-menu' => __('Header Menu','simple-corp'),
			'side-nav' => __('Side Nav','simple-corp'),
			'social-link' => __('Social Link','simple-corp'),
			'social-footer' => __('Social Link Footer','simple-corp'),
		)
	);
}

add_action('init','register_theme_menus' );

/*=======================================================================
*----------------------* CREATE WIDGETS *----------------------*
=======================================================================*/
add_action('widgets_init', 'create_widget');

function create_widget() {

	   /**
		* Creates a sidebar
		* @param string|array  Builds Sidebar based off of 'name' and 'id' values.
		*/

		register_sidebar(array(
			'name' => __( 'About Page Left','simple-corp'),
			'id' => 'about-left',
			'description' => __( 'Display on the left page of the about page.','simple-corp'),
			'before_widget' => '<div class="widget">',
			'after_widget' => '</div>',
			'before_title' => '<h2 class="section-title">',
			'after_title' => '</h2>'
		));

		register_sidebar(array(
			'name' => __( 'About Page Right','simple-corp'),
			'id' => 'about-right',
			'description' => __( 'Display on the right page of the about page.','simple-corp'),
			'before_widget' => '<div class="widget">',
			'after_widget' => '</div>',
			'before_title' => '<h2 class="section-title">',
			'after_title' => '</h2>'
		));

		register_sidebar(array(
			'name'          => __( 'Blog Sidebar','simple-corp'),
			'id' => 'blog',
			'before_widget' => '<div class="widget">',
			'after_widget' => '</div>',
			'before_title' => '<h3>',
			'after_title' => '</h3>'
		));

	}


/*=======================================================================
*----------------------* ADDING ATTRIBUTE TO NAVBAR *--------------------*
=======================================================================*/

function add_link_atts($atts) {
	$atts['class'] = 'nav-link';
	return $atts;
}

add_filter( 'nav_menu_link_attributes', 'add_link_atts');

/*=======================================================================
*----------------------* THEME CUSTOMIZER *----------------------*
=======================================================================*/

require_once("inc/customizer.php");


/*=======================================================================
*----------------------* LIMIT EXCERPT LENGTH *----------------------*
=======================================================================*/

function simple_corp_limit_excerpt_length($length) {
	return 12;
}

add_filter( 'excerpt_length', 'simple_corp_limit_excerpt_length', 999 );


/*=======================================================================
*----------------------* LIMIT TITLE LENGTH *----------------------*
=======================================================================*/

function simple_corp_limit_title_length($title) {
	global $post;
	$title = $post->post_title;

	if (str_word_count($title) > 10) {
		wp_die('Error. The title length must be less than 10 words.' );
	}

}
add_action( 'publish_post', 'simple_corp_limit_title_length' );


/*=======================================================================
*----------------------* CUSTOM COMMENT LIST LAYOUT *----------------------*
=======================================================================*/


function reply_comment($comment, $args, $depth) {
	if ( 'div' === $args['style'] ) {
		$tag       = 'li ';
		$add_below = 'comment';
	} else {
		$tag       = 'div ';
		$add_below = 'div-comment';
	}?>
	<<?php echo $tag; comment_class( empty( $args[ 'has_children'] ) ? '' : 'parent' );?> id="comment-
	<?php comment_ID() ?>" >
	<?php 
	if ( 'div' != $args['style'] ) { ?>
	<div id="div-comment-<?php comment_ID() ?>" class="comment-body">
		<?php
	}

	?>
	<div class="col-xs-2">
		<div class="comment-avatar thumbnail">
			<?php 
			echo get_avatar( $comment, $args['avatar_size'], '', '', array(
				'class' => 'img-responsive'
			)); 
			?>
		</div>
	</div>
	<?php 
	if ( $comment->comment_approved == '0' ) { ?>
	<em class="comment-awaiting-moderation"><?php _e( 'Your comment is awaiting moderation.', 'simple-corp' ); ?></em>
	<br/>
	<?php 
} ?>
<div class="col-xs-10 ">
	<div class="panel panel-default arrow left">
		<div class="panel-body">
			<div class="comment-meta commentmetadata">
				<div class="text-left">
					<div class="comment-user"><i class="fa fa-user"></i>
						<?php echo get_comment_author_link(); ?>
					</div>
					<time class="comment-date">
						<i class="fa fa-clock-o"></i>
						<a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ); ?>">
							<?php
							echo get_comment_date('M d, Y ');
							echo get_comment_time(); ?>
						</a>
						-
					</time>
					<?php edit_comment_link('  <i class="fa fa-edit"></i>' ); ?>
				</div>
			</div>
			<div class="comment-post">
				<?php comment_text(); ?>
			</div>
			<div class="text-right reply">
				<?php 
				comment_reply_link( 
					array_merge( 
						$args, 
						array( 
							'add_below' => $add_below, 
							'depth'     => $depth, 
							'max_depth' => $args['max_depth'],
						)
					)
				); 
				?>
			</div>
		</div>
	</div>
	<?php if ( 'div' != $args['style'] ) : ?>
	</div>
<?php endif;
}

/*=======================================================================
*-----* Hide upgrade notifications for only activated themes *------*
=======================================================================*/

function simple_corp_cws_hidden_theme( $r, $url ) {
	if ( 0 !== strpos( $url, 'http://api.wordpress.org/themes/update-check' ) )
		return $r; // Not a theme update request. Bail immediately.
		$themes = unserialize( $r['body']['themes'] );
		unset( $themes[ get_option( 'template' ) ] );
		unset( $themes[ get_option( 'stylesheet' ) ] );
		$r['body']['themes'] = serialize( $themes );
		return $r;
	}
	add_filter( 'http_request_args', 'simple_corp_cws_hidden_theme', 5, 2 );


/*=======================================================================
*-------------------------* COPY RIGHT NOTCE *-------------------------*
=======================================================================*/


function create_copyright() {
	$all_posts = get_posts( 'post_status=publish&order=ASC' );
	$first_post = $all_posts[0];
	$first_date = $first_post->post_date_gmt;
	_e( 'Copyright &copy; ','simple-corp');
	if ( substr( $first_date, 0, 4 ) == date( 'Y' ) ) {
		echo date( 'Y' );
	} else {
		echo substr( $first_date, 0, 4 ) . "-" . date( 'Y' );
	}
	echo ' <strong>' . get_bloginfo( 'name' ) . '</strong> ';
	_e( 'All rights reserved.','simple-corp' );
}
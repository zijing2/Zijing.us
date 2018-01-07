<?php
/**
 * Sample implementation of the Custom Header feature
 * http://codex.wordpress.org/Custom_Headers
 *
 * You can add an optional custom header image to header.php like so ...

	<?php if ( get_header_image() ) : ?>
	<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
		<img src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="">
	</a>
	<?php endif; // End header image check. ?>

 *
 * @package Quill
 */

/**
 * Setup the WordPress core custom header feature.
 *
 * @uses quill_header_style()
 * @uses quill_admin_header_style()
 * @uses quill_admin_header_image()
 */
function quill_custom_header_setup() {
	add_theme_support( 'custom-header', apply_filters( 'quill_custom_header_args', array(
		'default-image'          => get_template_directory_uri() . '/images/header.jpg',
		'width'                  => 1920,
		'height'                 => 550,
		'flex-height'            => true,
		'wp-head-callback'       => 'quill_header_style',
		'admin-head-callback'    => 'quill_admin_header_style',
		'admin-preview-callback' => 'quill_admin_header_image',
	) ) );
}
add_action( 'after_setup_theme', 'quill_custom_header_setup' );

if ( ! function_exists( 'quill_header_style' ) ) :
/**
 * Styles the header image
 *
 * @see quill_custom_header_setup().
 */
	function quill_header_style() {

		if ( get_header_image() ) {	

			?>
			<style type="text/css">
				.has-banner:after {
				    content : "";
				    display: block;
				    position: absolute;
				    top: 0;
				    left: 0;
				    background: url(<?php echo get_header_image(); ?>) no-repeat;
				    background-position: center top;
				    background-attachment: fixed;
				    width: 100%;
				    height: 100%;
				    opacity : 0.4;
				    z-index: -1;
				}		
			</style>
	<?php }
}
endif; // quill_header_style

if ( ! function_exists( 'quill_admin_header_style' ) ) :
/**
 * Styles the header image displayed on the Appearance > Header admin panel.
 *
 * @see quill_custom_header_setup().
 */
function quill_admin_header_style() {
?>
	<style type="text/css">
		.appearance_page_custom-header #headimg {
			border: none;
		}
		#headimg h1,
		#desc {
		}
		#headimg h1 {
		}
		#headimg h1 a {
		}
		#desc {
		}
		#headimg img {
		}
	</style>
<?php
}
endif; // quill_admin_header_style

if ( ! function_exists( 'quill_admin_header_image' ) ) :
/**
 * Custom header image markup displayed on the Appearance > Header admin panel.
 *
 * @see quill_custom_header_setup().
 */
function quill_admin_header_image() {
	$style = sprintf( ' style="color:#%s;"', get_header_textcolor() );
?>
	<div id="headimg">
		<h1 class="displaying-header-text"><a id="name"<?php echo $style; ?> onclick="return false;" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
		<div class="displaying-header-text" id="desc"<?php echo $style; ?>><?php bloginfo( 'description' ); ?></div>
		<?php if ( get_header_image() ) : ?>
		<img src="<?php header_image(); ?>" alt="">
		<?php endif; ?>
	</div>
<?php
}
endif; // quill_admin_header_image

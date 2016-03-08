<?php
//* Start the engine
include_once( get_template_directory() . '/lib/init.php' );

//* Child theme (do not remove)
define( 'CHILD_THEME_NAME', 'Genesis Sample Theme' );
define( 'CHILD_THEME_URL', 'http://www.studiopress.com/' );
define( 'CHILD_THEME_VERSION', '2.2.2' );

/**
 * Initialize theme features
 */
add_action( 'after_setup_theme', function() {

	//* Add HTML5 markup structure
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list' ) );

	//* Add Accessibility support
	add_theme_support( 'genesis-accessibility', array( 'headings', 'search-form', 'skip-links', 'rems' ) );

	//* Add viewport meta tag for mobile browsers
	add_theme_support( 'genesis-responsive-viewport' );

	//* Add support for custom background
	add_theme_support( 'custom-background' );

	//* Add support for 3-column footer widgets
	add_theme_support( 'genesis-footer-widgets', 3 );

	//* Remove original genesis nav's and replace them with our own
	remove_action( 'genesis_after_header', 'genesis_do_nav' 	);
	remove_action( 'genesis_after_header', 'genesis_do_subnav' 	);

	//* Move secondary sidebar inside content-sidebar wrap for simpler layouts
	remove_action( 'genesis_after_content_sidebar_wrap', 'genesis_get_sidebar_alt' );
	add_action( 'genesis_after_content', 'genesis_get_sidebar_alt' );

} );

/**
 * Replace original primary menu
 */
add_action( 'genesis_after_header', function() {

	//* Do nothing if menu not supported
	if ( ! genesis_nav_menu_supported( 'primary' ) || ! has_nav_menu( 'primary' ) )
		return;

	$class = 'vertical medium-horizontal menu genesis-nav-menu menu-primary';

	if ( genesis_a11y( 'headings' ) ) {
		printf( '<h2 class="screen-reader-text">%s</h2>', __( 'Main navigation', 'genesis' ) );
	}

	genesis_nav_menu( array(
		'theme_location' => 'primary',
		'menu_class'     => $class,
		'items_wrap' 	 => '<ul id="%1$s" class="%2$s" data-responsive-menu="drilldown medium-dropdown">%3$s</ul>',
		'walker'		 => new Foundation_Dropdown_Nav_Menu
	) );

} );

/**
 * Replace original secondary menu
 *
 */
add_action( 'genesis_after_header', function() {

	//* Do nothing if menu not supported
	if ( ! genesis_nav_menu_supported( 'secondary' ) || ! has_nav_menu( 'secondary' ) )
		return;

	$class = 'vertical medium-horizontal menu genesis-nav-menu menu-secondary';

	genesis_nav_menu( array(
		'theme_location' => 'secondary',
		'menu_class'     => $class,
		'items_wrap' 	 => '<ul id="%1$s" class="%2$s" data-responsive-menu="drilldown medium-dropdown">%3$s</ul>',
		'walker'		 => new Foundation_Dropdown_Nav_Menu
	) );

} );

/**
 * Use the stylesheet inside /assets/styles/css/
 */
add_filter( 'stylesheet_uri', function( $stylesheet_uri, $stylesheet_directory_uri ) {
	return $stylesheet_directory_uri . '/assets/styles/css/app.css';
}, 10, 2);

/**
 * Enqueue scripts and styles
 */
add_action( 'wp_enqueue_scripts', function() {

	/**
	 * Enqueue Google Fonts
	 */
	wp_enqueue_script( 'genesisfoundation-app', get_stylesheet_directory_uri() . '/assets/js/built/app.built.js', array( 'jquery' ), null );
} );

/**
 * Include classes
 */
 require_once( 'includes/class.foundation_nav_walker.php' );
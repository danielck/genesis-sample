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
	wp_enqueue_style( 'google-fonts', '//fonts.googleapis.com/css?family=Lato:300,400,700', array(), CHILD_THEME_VERSION );
} );

/**
 * Override genesis menu classes
 */
// add_filter( 'genesis_do_nav', function( $nav_output, $nav, $args ) {

//     //$args['menu_id'] = 'the_id_you_want';
//     $args['menu_class'] = 'dropdown menu'; // replace what was there

//     // check which function should be used to build the nav
//     // rebuild the nav using the updated arguments
//     if ( genesis_get_option( 'nav' ) ) {
//         if ( has_nav_menu( 'primary' ) ) {
//             $nav = wp_nav_menu( $args );
//         } elseif ( 'nav-menu' != genesis_get_option( 'nav_type', 'genesis-vestige' ) ) {
//             $nav = genesis_nav( $args );
//         }
//     }

//     // return the modified result
//     return sprintf( '%2$s%1$s%3$s', $nav, genesis_structural_wrap( 'nav', 'open', 0 ), genesis_structural_wrap( 'nav', 'close', 0 ) );

// }, 10, 3 );
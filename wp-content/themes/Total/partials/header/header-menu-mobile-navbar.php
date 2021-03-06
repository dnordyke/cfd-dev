<?php
/**
 * Navbar Style Mobile Menu Toggle
 *
 * @package Total WordPress Theme
 * @subpackage Partials
 * @version 4.5.5.1
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Menu Location
$menu_location = apply_filters( 'wpex_main_menu_location', 'main_menu' );

// Multisite global menu
$ms_global_menu = apply_filters( 'wpex_ms_global_menu', false );

// Display if menu is defined
if ( has_nav_menu( $menu_location ) || $ms_global_menu ) :

	// Get menu text
	$text = wpex_get_translated_theme_mod( 'mobile_menu_toggle_text' );
	$text = $text ? $text : esc_html__( 'Menu', 'total' );
	$text = apply_filters( 'wpex_mobile_menu_navbar_open_text', $text ); ?>

	<div id="wpex-mobile-menu-navbar" class="clr wpex-mobile-menu-toggle wpex-hidden">
		<div class="container clr">
			<a href="#mobile-menu" class="mobile-menu-toggle">
				<?php echo apply_filters( 'wpex_mobile_menu_navbar_open_icon', '<span class="fa fa-navicon" aria-hidden="true"></span>' ); ?><span class="wpex-text"><?php echo wp_kses_post( $text ); ?></span>
			</a>
		</div>
	</div>

<?php endif; ?>
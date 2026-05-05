<?php
/**
 * Icon helpers used by the home page.
 *
 * @package MountSol
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Echo a small inline SVG by logical name.
 *
 * @param string               $name  Icon key.
 * @param array<string, mixed> $args  Optional: class (string), size (int), aria_hidden (bool).
 */
function mountsol_home_icon( string $name, array $args = array() ): void {
	// Preserve filled star as a local inline variant (Lucide default star is outline).
	if ( 'star-filled' === $name ) {
		$class = isset( $args['class'] ) ? (string) $args['class'] : 'mountsol-home-icon';
		$size  = isset( $args['size'] ) ? max( 12, min( 48, (int) $args['size'] ) ) : 24;
		$ah    = array_key_exists( 'aria_hidden', $args ) ? (bool) $args['aria_hidden'] : true;
		$attrs = 'class="' . esc_attr( $class ) . '" width="' . esc_attr( (string) $size ) . '" height="' . esc_attr( (string) $size ) . '" viewBox="0 0 24 24" fill="currentColor"';
		if ( $ah ) {
			$attrs .= ' aria-hidden="true"';
		}
		echo '<svg ' . $attrs . '><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>'; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
		return;
	}

	// Map logical keys to actual Lucide asset filenames.
	$map = array(
		'arrow-right'  => 'arrow-right',
		'star-outline' => 'star',
	);
	$icon = $map[ $name ] ?? $name;

	if ( function_exists( 'mountsol_svg_icon' ) ) {
		mountsol_svg_icon( $icon, $args );
		return;
	}
}

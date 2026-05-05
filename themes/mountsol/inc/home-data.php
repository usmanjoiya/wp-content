<?php
/**
 * Home page structured content (Next: app/page.tsx).
 *
 * @package MountSol
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * @return array<string, mixed>
 */
function mountsol_get_home_page_data(): array {
	static $cache = null;
	if ( null === $cache ) {
		$path  = get_template_directory() . '/inc/data/home-page.php';
		$cache = is_readable( $path ) ? require $path : array();
	}
	return $cache;
}

/**
 * Initials from a display name (e.g. "Sarah Johnson" → "SJ").
 */
function mountsol_person_initials( string $name ): string {
	$name  = trim( $name );
	$parts = preg_split( '/\s+/', $name );
	$out   = '';
	foreach ( $parts as $part ) {
		if ( $part !== '' ) {
			$out .= strtoupper( function_exists( 'mb_substr' ) ? mb_substr( $part, 0, 1 ) : substr( $part, 0, 1 ) );
		}
	}
	return substr( $out, 0, 2 );
}

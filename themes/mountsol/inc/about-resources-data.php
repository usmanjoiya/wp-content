<?php
/**
 * About and Resources page data loaders.
 *
 * @package MountSol
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * @return array<string, mixed>
 */
function mountsol_get_about_page_data(): array {
	static $cache = null;
	if ( null === $cache ) {
		$path  = get_template_directory() . '/inc/data/about-page.php';
		$cache = is_readable( $path ) ? require $path : array();
	}
	return $cache;
}

/**
 * @return array<string, mixed>
 */
function mountsol_get_resources_page_data(): array {
	static $cache = null;
	if ( null === $cache ) {
		$path  = get_template_directory() . '/inc/data/resources-page.php';
		$cache = is_readable( $path ) ? require $path : array( 'sections' => array(), 'mid_cta' => array() );
	}
	return $cache;
}

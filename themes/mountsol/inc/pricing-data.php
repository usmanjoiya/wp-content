<?php
/**
 * Pricing page data loader.
 *
 * @package MountSol
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * @return array{plans: array<int, array<string, mixed>>, comparison: array<int, array<string, mixed>>, faqs: array<int, array{q: string, a: string}>}
 */
function mountsol_get_pricing_page_data(): array {
	static $cache = null;
	if ( null === $cache ) {
		$path = get_template_directory() . '/inc/data/pricing-page.php';
		$cache = is_readable( $path ) ? require $path : array(
			'plans'      => array(),
			'comparison' => array(),
			'faqs'       => array(),
		);
	}
	return $cache;
}

/**
 * Output a small inline SVG for pricing tier icons.
 */
function mountsol_pricing_icon( string $icon ): void {
	switch ( $icon ) {
		case 'sparkles':
			echo '<svg class="mountsol-p-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/></svg>';
			break;
		case 'crown':
			echo '<svg class="mountsol-p-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 4l3.5 7L12 6l3.5 5L19 4M5 19h14"/></svg>';
			break;
		case 'zap':
		default:
			echo '<svg class="mountsol-p-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>';
			break;
	}
}

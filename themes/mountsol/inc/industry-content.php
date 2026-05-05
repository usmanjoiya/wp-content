<?php
/**
 * Industry page content (Next: app/industries/*/page.tsx).
 *
 * @package MountSol
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * @return list<string>
 */
function mountsol_industry_child_slugs(): array {
	return array( 'hvac', 'plumbing', 'electrical', 'roofing', 'landscaping', 'pest-control', 'solar', 'painting' );
}

/**
 * @return array<string, mixed>|null
 */
function mountsol_get_industry_page_content( string $slug ): ?array {
	if ( ! preg_match( '/^[a-z0-9-]+$/', $slug ) ) {
		return null;
	}
	$file = get_template_directory() . '/inc/data/industries/' . $slug . '.php';
	if ( ! is_readable( $file ) ) {
		return null;
	}
	/** @var array<string, mixed> $data */
	$data = require $file;
	return $data;
}

/**
 * Industry subpage when current page is child of Industries.
 *
 * @return array<string, mixed>|null
 */
function mountsol_get_industry_content_for_queried_page(): ?array {
	if ( ! is_singular( 'page' ) ) {
		return null;
	}
	global $post;
	if ( ! $post instanceof WP_Post ) {
		return null;
	}
	$parent_id = (int) $post->post_parent;
	if ( ! $parent_id ) {
		return null;
	}
	$parent = get_post( $parent_id );
	if ( ! $parent instanceof WP_Post || 'publish' !== $parent->post_status ) {
		return null;
	}
	if ( 'industries' !== $parent->post_name ) {
		return null;
	}
	return mountsol_get_industry_page_content( $post->post_name );
}

/**
 * @return list<array{title: string, description: string, slug: string}>
 */
function mountsol_get_industries_landing_cards(): array {
	return array(
		array(
			'title'       => __( 'HVAC', 'mountsol' ),
			'description' => __( 'Heating, cooling, and air quality management services.', 'mountsol' ),
			'slug'        => 'hvac',
		),
		array(
			'title'       => __( 'Plumbing', 'mountsol' ),
			'description' => __( 'Water systems and pipe repair and installation services.', 'mountsol' ),
			'slug'        => 'plumbing',
		),
		array(
			'title'       => __( 'Electrical', 'mountsol' ),
			'description' => __( 'Electrical installation, repair, and maintenance services.', 'mountsol' ),
			'slug'        => 'electrical',
		),
		array(
			'title'       => __( 'Roofing', 'mountsol' ),
			'description' => __( 'Roof installation, repair, and maintenance services.', 'mountsol' ),
			'slug'        => 'roofing',
		),
		array(
			'title'       => __( 'Landscaping', 'mountsol' ),
			'description' => __( 'Lawn care, landscaping, and outdoor maintenance services.', 'mountsol' ),
			'slug'        => 'landscaping',
		),
		array(
			'title'       => __( 'Pest Control', 'mountsol' ),
			'description' => __( 'Pest management and extermination services.', 'mountsol' ),
			'slug'        => 'pest-control',
		),
		array(
			'title'       => __( 'Solar', 'mountsol' ),
			'description' => __( 'Solar panel installation and maintenance services.', 'mountsol' ),
			'slug'        => 'solar',
		),
		array(
			'title'       => __( 'Painting', 'mountsol' ),
			'description' => __( 'Interior and exterior painting services.', 'mountsol' ),
			'slug'        => 'painting',
		),
	);
}

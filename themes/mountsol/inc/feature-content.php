<?php
/**
 * Feature detail content loader (Next: app/features/*/page.tsx).
 *
 * @package MountSol
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Slugs with exported data files under inc/data/features/{slug}.php.
 *
 * @return list<string>
 */
function mountsol_feature_child_slugs(): array {
	return array(
		'online-booking',
		'dispatch-board',
		'customer-portal',
		'mobile-app',
		'payment-processing',
		'reporting',
		'field-tracking',
		'team-management',
	);
}

/**
 * @return array<string, mixed>|null
 */
function mountsol_get_feature_page_content( string $slug ): ?array {
	if ( ! preg_match( '/^[a-z0-9-]+$/', $slug ) ) {
		return null;
	}
	$file = get_template_directory() . '/inc/data/features/' . $slug . '.php';
	if ( ! is_readable( $file ) ) {
		return null;
	}
	/** @var array<string, mixed> $data */
	$data = require $file;
	return $data;
}

/**
 * Feature subpage when global post is child of Features.
 *
 * @return array<string, mixed>|null
 */
function mountsol_get_feature_content_for_queried_page(): ?array {
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
	if ( 'features' !== $parent->post_name ) {
		return null;
	}
	return mountsol_get_feature_page_content( $post->post_name );
}

/**
 * Cards for /features landing (Next app/features/page.tsx).
 *
 * @return list<array{title: string, description: string, path: string}>
 */
function mountsol_get_features_landing_cards(): array {
	return array(
		array(
			'title'       => __( 'Online Booking', 'mountsol' ),
			'description' => __( 'Let customers book services 24/7 with your custom scheduling system.', 'mountsol' ),
			'path'        => '/features/online-booking',
		),
		array(
			'title'       => __( 'Smart Dispatch', 'mountsol' ),
			'description' => __( 'Automatically assign jobs with intelligent routing and optimization.', 'mountsol' ),
			'path'        => '/features/dispatch-board',
		),
		array(
			'title'       => __( 'Mobile App', 'mountsol' ),
			'description' => __( 'Keep your field team connected with real-time job updates.', 'mountsol' ),
			'path'        => '/features/mobile-app',
		),
		array(
			'title'       => __( 'Payment Processing', 'mountsol' ),
			'description' => __( 'Secure online and on-site payment options integrated seamlessly.', 'mountsol' ),
			'path'        => '/features/payment-processing',
		),
		array(
			'title'       => __( 'Customer Communication', 'mountsol' ),
			'description' => __( 'Automated notifications and customer portal for transparency.', 'mountsol' ),
			'path'        => '/features/customer-portal',
		),
		array(
			'title'       => __( 'Advanced Reporting', 'mountsol' ),
			'description' => __( 'Real-time analytics on revenue, costs, and team performance.', 'mountsol' ),
			'path'        => '/features/reporting',
		),
		array(
			'title'       => __( 'Field Tracking', 'mountsol' ),
			'description' => __( 'GPS tracking and timeline visibility for every job.', 'mountsol' ),
			'path'        => '/features/field-tracking',
		),
		array(
			'title'       => __( 'Team Management', 'mountsol' ),
			'description' => __( 'Manage staff, schedules, skills, and performance metrics.', 'mountsol' ),
			'path'        => '/features/team-management',
		),
	);
}

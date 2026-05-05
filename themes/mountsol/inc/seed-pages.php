<?php
/**
 * Idempotent page tree mirroring Mountsol.org IA (public routes only).
 *
 * @package MountSol
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Find a page by slug and parent (post_parent = 0 for top-level).
 */
function mountsol_find_page( string $slug, int $parent_id = 0 ): ?WP_Post {
	$posts = get_posts(
		array(
			'post_type'              => 'page',
			'name'                   => $slug,
			'post_parent'            => $parent_id,
			'post_status'            => array( 'publish', 'draft', 'private', 'pending', 'future' ),
			'numberposts'            => 1,
			'update_post_term_cache' => false,
		)
	);
	return ( $posts[0] instanceof WP_Post ) ? $posts[0] : null;
}

/**
 * Create a published page if missing; never overwrites existing slugs.
 *
 * @return int Post ID or 0 on failure.
 */
function mountsol_ensure_page( string $title, string $slug, int $parent_id = 0, string $content = '' ): int {
	$existing = mountsol_find_page( $slug, $parent_id );
	if ( $existing ) {
		return (int) $existing->ID;
	}
	$result = wp_insert_post(
		array(
			'post_title'   => $title,
			'post_name'    => $slug,
			'post_content' => $content,
			'post_status'  => 'publish',
			'post_type'    => 'page',
			'post_parent'  => $parent_id,
		),
		true
	);
	if ( is_wp_error( $result ) ) {
		return 0;
	}
	return (int) $result;
}

/**
 * Seed / repair hierarchy on theme activation.
 */
function mountsol_seed_pages(): void {
	$home_id = mountsol_ensure_page( __( 'Home', 'mountsol' ), 'home', 0, '' );

	mountsol_ensure_page( __( 'About', 'mountsol' ), 'about', 0, '' );
	mountsol_ensure_page( __( 'Contact', 'mountsol' ), 'contact', 0, '' );
	mountsol_ensure_page( __( 'Book Demo', 'mountsol' ), 'demo', 0, '' );
	mountsol_ensure_page( __( 'Resources', 'mountsol' ), 'resources', 0, '' );
	mountsol_ensure_page( __( 'Pricing', 'mountsol' ), 'pricing', 0, '' );
	mountsol_ensure_page( __( 'Login', 'mountsol' ), 'login', 0, '' );

	$features_id = mountsol_ensure_page( __( 'Features', 'mountsol' ), 'features', 0, '' );

	$feature_titles = array(
		'online-booking'       => __( 'Online Booking', 'mountsol' ),
		'dispatch-board'       => __( 'Smart Dispatch Board', 'mountsol' ),
		'customer-portal'      => __( 'Customer Portal', 'mountsol' ),
		'mobile-app'           => __( 'Mobile App', 'mountsol' ),
		'payment-processing'   => __( 'Payment Processing', 'mountsol' ),
		'reporting'            => __( 'Reporting', 'mountsol' ),
		'field-tracking'       => __( 'Field Tracking', 'mountsol' ),
		'team-management'      => __( 'Team Management', 'mountsol' ),
	);

	foreach ( mountsol_feature_child_slugs() as $slug ) {
		$title = $feature_titles[ $slug ] ?? ucwords( str_replace( '-', ' ', $slug ) );
		mountsol_ensure_page( $title, $slug, $features_id, '' );
	}

	$industries_id = mountsol_ensure_page( __( 'Industries', 'mountsol' ), 'industries', 0, '' );

	$industry_titles = array(
		'hvac'          => __( 'HVAC', 'mountsol' ),
		'plumbing'      => __( 'Plumbing', 'mountsol' ),
		'electrical'    => __( 'Electrical', 'mountsol' ),
		'roofing'       => __( 'Roofing', 'mountsol' ),
		'landscaping'   => __( 'Landscaping', 'mountsol' ),
		'pest-control'  => __( 'Pest Control', 'mountsol' ),
		'solar'         => __( 'Solar', 'mountsol' ),
		'painting'      => __( 'Painting', 'mountsol' ),
	);

	foreach ( mountsol_industry_child_slugs() as $slug ) {
		$title = $industry_titles[ $slug ] ?? ucwords( str_replace( '-', ' ', $slug ) );
		mountsol_ensure_page( $title, $slug, $industries_id, '' );
	}

	if ( apply_filters( 'mountsol_seed_assign_front_page', false ) && $home_id ) {
		update_option( 'show_on_front', 'page' );
		update_option( 'page_on_front', $home_id );
	}
}
add_action( 'after_switch_theme', 'mountsol_seed_pages' );

<?php
/**
 * Resources page structured content (Next: app/resources/page.tsx).
 *
 * @package MountSol
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

return array(
	'sections' => array(
		array(
			'category' => __( 'Guides', 'mountsol' ),
			'items'    => array(
				array(
					'title' => __( 'Getting Started with MountSol', 'mountsol' ),
					'desc'  => __( 'A comprehensive guide to setting up your account and configuring MountSol.', 'mountsol' ),
				),
				array(
					'title' => __( 'Mobile App User Guide', 'mountsol' ),
					'desc'  => __( 'Learn how to use the mobile app to manage jobs on the go.', 'mountsol' ),
				),
				array(
					'title' => __( 'Team Management Best Practices', 'mountsol' ),
					'desc'  => __( 'Tips and tricks for managing your team effectively with MountSol.', 'mountsol' ),
				),
			),
		),
		array(
			'category' => __( 'Articles', 'mountsol' ),
			'items'    => array(
				array(
					'title' => __( 'How to Increase Revenue with Better Scheduling', 'mountsol' ),
					'desc'  => __( 'Discover strategies to optimize your schedule and maximize billable hours.', 'mountsol' ),
				),
				array(
					'title' => __( 'Customer Communication Best Practices', 'mountsol' ),
					'desc'  => __( 'Learn how to keep customers informed and happy throughout their service experience.', 'mountsol' ),
				),
				array(
					'title' => __( 'Dispatching Tips from Industry Experts', 'mountsol' ),
					'desc'  => __( 'Expert advice on efficient job assignment and routing.', 'mountsol' ),
				),
			),
		),
		array(
			'category' => __( 'Case Studies', 'mountsol' ),
			'items'    => array(
				array(
					'title' => __( 'How Johnson HVAC Increased Revenue 40%', 'mountsol' ),
					'desc'  => __( 'See how one company transformed their business using MountSol.', 'mountsol' ),
				),
				array(
					'title' => __( 'Chen Plumbing: From Chaos to Control', 'mountsol' ),
					'desc'  => __( 'Learn how better scheduling improved customer satisfaction.', 'mountsol' ),
				),
				array(
					'title' => __( 'Thompson Electrical Goes Mobile', 'mountsol' ),
					'desc'  => __( 'Discover how a mobile-first approach improved team efficiency.', 'mountsol' ),
				),
			),
		),
	),
	'mid_cta'  => array(
		'title' => __( 'Ready to Get Started?', 'mountsol' ),
		'lede'  => __( 'Explore our full resource library or book a demo to see MountSol in action.', 'mountsol' ),
		'link'  => __( 'Book a Demo', 'mountsol' ),
		'href'  => '/demo',
	),
);

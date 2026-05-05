<?php
/**
 * Feature page data — dispatch-board (Next: app/features/dispatch-board/page.tsx).
 *
 * @package MountSol
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

return array(
	'title'     => __( 'Smart Dispatch Board', 'mountsol' ),
	'subtitle'  => __( 'Dispatch', 'mountsol' ),
	'description' => __( 'Automatically assign jobs to your team with intelligent routing. Reduce travel time and costs while improving job completion rates.', 'mountsol' ),
	'benefits'  => array(
		array(
			'title'       => __( 'Automatic Assignment', 'mountsol' ),
			'description' => __( 'Let MountSol intelligently assign jobs based on skills, location, and availability.', 'mountsol' ),
		),
		array(
			'title'       => __( 'Optimized Routes', 'mountsol' ),
			'description' => __( 'Reduce travel time and fuel costs with intelligent route optimization.', 'mountsol' ),
		),
		array(
			'title'       => __( 'Real-time Updates', 'mountsol' ),
			'description' => __( 'Your team gets instant notifications about new jobs and schedule changes.', 'mountsol' ),
		),
		array(
			'title'       => __( 'Reduce Admin Time', 'mountsol' ),
			'description' => __( 'Stop spending hours manually assigning jobs. Let the system handle it.', 'mountsol' ),
		),
		array(
			'title'       => __( 'Better Planning', 'mountsol' ),
			'description' => __( 'Visual dispatch board shows your entire team and their schedules at a glance.', 'mountsol' ),
		),
		array(
			'title'       => __( 'Improved Efficiency', 'mountsol' ),
			'description' => __( 'Get more jobs completed per day with smarter scheduling and routing.', 'mountsol' ),
		),
	),
	'use_cases' => array(
		array(
			'title'       => __( 'High-Volume Days', 'mountsol' ),
			'description' => __( 'When emergency calls come in, the dispatch system instantly finds the best available technician considering location, skills, and schedule.', 'mountsol' ),
		),
		array(
			'title'       => __( 'Multi-City Operations', 'mountsol' ),
			'description' => __( 'Manage teams across multiple service areas with intelligent routing that minimizes travel time between jobs.', 'mountsol' ),
		),
		array(
			'title'       => __( 'Skill-Based Dispatch', 'mountsol' ),
			'description' => __( 'Assign complex jobs to qualified technicians and simpler tasks to junior staff, maximizing profitability.', 'mountsol' ),
		),
	),
);

<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
return array(
	'title'             => __( 'Pest Control Services Management', 'mountsol' ),
	'subtitle'          => __( 'Pest Control', 'mountsol' ),
	'description'       => __( 'MountSol helps pest control companies manage recurring treatments, compliance documentation, and customer communication efficiently.', 'mountsol' ),
	'challenges'        => array(
		array( 'title' => __( 'Recurring Treatment Cycles', 'mountsol' ), 'description' => __( 'Most customers have monthly or quarterly treatment plans. Scheduling complexity grows quickly.', 'mountsol' ) ),
		array( 'title' => __( 'Compliance Documentation', 'mountsol' ), 'description' => __( 'Chemical applications must be documented. Need records of products used, dates, and areas treated.', 'mountsol' ) ),
		array( 'title' => __( 'Customer Communication', 'mountsol' ), 'description' => __( 'Customers need to know what was done, when to expect results, and precautions to take.', 'mountsol' ) ),
		array( 'title' => __( 'Territory Management', 'mountsol' ), 'description' => __( 'Need to balance workload across technicians and service territories efficiently.', 'mountsol' ) ),
		array( 'title' => __( 'Inventory Management', 'mountsol' ), 'description' => __( 'Track chemicals and supplies used on each job for reordering and cost management.', 'mountsol' ) ),
		array( 'title' => __( 'Performance Metrics', 'mountsol' ), 'description' => __( 'Hard to track which technicians are most efficient or which treatments are most effective.', 'mountsol' ) ),
	),
	'solutions'         => array(
		array( 'title' => __( 'Automated Treatment Scheduling', 'mountsol' ), 'description' => __( 'Set up recurring monthly or quarterly treatments. Automatic scheduling and customer notifications reduce no-shows.', 'mountsol' ) ),
		array( 'title' => __( 'Digital Compliance Records', 'mountsol' ), 'description' => __( 'Technicians document treatments on the mobile app with product info, dates, and photos. Automatic record-keeping.', 'mountsol' ) ),
		array( 'title' => __( 'Customer Portal', 'mountsol' ), 'description' => __( 'Customers see what was done and get safety information. Reduces support calls and builds confidence.', 'mountsol' ) ),
		array( 'title' => __( 'Territory Optimization', 'mountsol' ), 'description' => __( 'Assign territories and routes to technicians. Track efficiency and adjust as needed.', 'mountsol' ) ),
	),
	'relevant_features' => array(
		array( 'title' => __( 'Online Booking', 'mountsol' ), 'path' => '/features/online-booking' ),
		array( 'title' => __( 'Smart Dispatch', 'mountsol' ), 'path' => '/features/dispatch-board' ),
		array( 'title' => __( 'Mobile App', 'mountsol' ), 'path' => '/features/mobile-app' ),
		array( 'title' => __( 'Customer Portal', 'mountsol' ), 'path' => '/features/customer-portal' ),
		array( 'title' => __( 'Reporting', 'mountsol' ), 'path' => '/features/reporting' ),
		array( 'title' => __( 'Field Tracking', 'mountsol' ), 'path' => '/features/field-tracking' ),
		array( 'title' => __( 'Team Management', 'mountsol' ), 'path' => '/features/team-management' ),
		array( 'title' => __( 'Payment Processing', 'mountsol' ), 'path' => '/features/payment-processing' ),
	),
);

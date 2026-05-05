<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
return array(
	'title'             => __( 'Plumbing Services Management', 'mountsol' ),
	'subtitle'          => __( 'Plumbing', 'mountsol' ),
	'description'       => __( 'MountSol helps plumbing companies handle emergency calls, routine maintenance, and new installations with efficiency and precision.', 'mountsol' ),
	'challenges'        => array(
		array( 'title' => __( 'Emergency Call Pressure', 'mountsol' ), 'description' => __( 'Water emergencies demand immediate response. Customers expect instant ETA and quick resolution.', 'mountsol' ) ),
		array( 'title' => __( 'Unpredictable Service Times', 'mountsol' ), 'description' => __( 'Service calls vary greatly in complexity. Difficult to estimate duration and assign backup resources.', 'mountsol' ) ),
		array( 'title' => __( 'Customer Communication', 'mountsol' ), 'description' => __( 'Customers anxious during emergencies. Need constant updates on arrival time and status.', 'mountsol' ) ),
		array( 'title' => __( 'Complex Pricing', 'mountsol' ), 'description' => __( 'Service calls might reveal additional work. Need to handle change orders and price negotiations on-site.', 'mountsol' ) ),
		array( 'title' => __( 'Code Compliance', 'mountsol' ), 'description' => __( 'Work must meet local codes. Need documentation and compliance tracking for each job.', 'mountsol' ) ),
		array( 'title' => __( 'Material & Parts Tracking', 'mountsol' ), 'description' => __( 'Track materials used on each job for billing and inventory management.', 'mountsol' ) ),
	),
	'solutions'         => array(
		array( 'title' => __( 'Instant Dispatch', 'mountsol' ), 'description' => __( 'Automatically send nearby plumbers to emergency calls. Customers get real-time ETA updates. Faster response means happier customers.', 'mountsol' ) ),
		array( 'title' => __( 'On-Site Payment Collection', 'mountsol' ), 'description' => __( 'Accept payments right on the job. Include emergency fees, change orders, and material costs seamlessly.', 'mountsol' ) ),
		array( 'title' => __( 'Customer Communication Portal', 'mountsol' ), 'description' => __( 'Send real-time updates about technician arrival. Reduce anxiety and complaint calls.', 'mountsol' ) ),
		array( 'title' => __( 'Service History & Documentation', 'mountsol' ), 'description' => __( 'Keep complete records of what was done, by whom, and when. Essential for warranty and code compliance.', 'mountsol' ) ),
	),
	'relevant_features' => array(
		array( 'title' => __( 'Smart Dispatch', 'mountsol' ), 'path' => '/features/dispatch-board' ),
		array( 'title' => __( 'Mobile App', 'mountsol' ), 'path' => '/features/mobile-app' ),
		array( 'title' => __( 'Payment Processing', 'mountsol' ), 'path' => '/features/payment-processing' ),
		array( 'title' => __( 'Customer Portal', 'mountsol' ), 'path' => '/features/customer-portal' ),
		array( 'title' => __( 'Online Booking', 'mountsol' ), 'path' => '/features/online-booking' ),
		array( 'title' => __( 'Field Tracking', 'mountsol' ), 'path' => '/features/field-tracking' ),
		array( 'title' => __( 'Reporting', 'mountsol' ), 'path' => '/features/reporting' ),
		array( 'title' => __( 'Team Management', 'mountsol' ), 'path' => '/features/team-management' ),
	),
);

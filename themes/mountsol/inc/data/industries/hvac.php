<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
return array(
	'title'             => __( 'HVAC Services Management', 'mountsol' ),
	'subtitle'          => __( 'HVAC', 'mountsol' ),
	'description'       => __( 'MountSol helps HVAC companies manage emergency repairs, preventive maintenance, and seasonal services more efficiently.', 'mountsol' ),
	'challenges'        => array(
		array(
			'title'       => __( 'Seasonal Demand Swings', 'mountsol' ),
			'description' => __( 'Peak seasons require quick hiring and scheduling. Off-seasons need cost management.', 'mountsol' ),
		),
		array(
			'title'       => __( 'Emergency Service Calls', 'mountsol' ),
			'description' => __( 'Emergency calls come in 24/7. Need to dispatch quickly and provide immediate ETA to customers.', 'mountsol' ),
		),
		array(
			'title'       => __( 'Maintenance Scheduling', 'mountsol' ),
			'description' => __( 'Tracking routine maintenance for residential and commercial customers is labor-intensive.', 'mountsol' ),
		),
		array(
			'title'       => __( 'Multi-Service Tracking', 'mountsol' ),
			'description' => __( 'Maintenance, repairs, and installations all have different requirements and pricing.', 'mountsol' ),
		),
		array(
			'title'       => __( 'Equipment Documentation', 'mountsol' ),
			'description' => __( 'Keeping track of customer equipment, warranties, and service history is critical.', 'mountsol' ),
		),
		array(
			'title'       => __( 'Compliance & Certifications', 'mountsol' ),
			'description' => __( 'Technicians need proper certifications. Service records must be maintained for warranty.', 'mountsol' ),
		),
	),
	'solutions'         => array(
		array(
			'title'       => __( 'Smart Dispatch for Emergencies', 'mountsol' ),
			'description' => __( 'Automatically dispatch the nearest available certified technician. Customers get instant ETA. Reduce response time and improve revenue.', 'mountsol' ),
		),
		array(
			'title'       => __( 'Preventive Maintenance Scheduling', 'mountsol' ),
			'description' => __( 'Create recurring maintenance schedules. Automatic reminders and booking confirmations reduce no-shows and create predictable revenue.', 'mountsol' ),
		),
		array(
			'title'       => __( 'Equipment & Warranty Management', 'mountsol' ),
			'description' => __( 'Track customer equipment, service history, and warranty information. Technicians have all info at their fingertips.', 'mountsol' ),
		),
		array(
			'title'       => __( 'Seasonal Staffing', 'mountsol' ),
			'description' => __( 'Build flexible schedules for seasonal staff. Track availability and skills to maximize efficiency during peak seasons.', 'mountsol' ),
		),
	),
	'relevant_features' => array(
		array( 'title' => __( 'Smart Dispatch', 'mountsol' ), 'path' => '/features/dispatch-board' ),
		array( 'title' => __( 'Online Booking', 'mountsol' ), 'path' => '/features/online-booking' ),
		array( 'title' => __( 'Mobile App', 'mountsol' ), 'path' => '/features/mobile-app' ),
		array( 'title' => __( 'Reporting', 'mountsol' ), 'path' => '/features/reporting' ),
		array( 'title' => __( 'Payment Processing', 'mountsol' ), 'path' => '/features/payment-processing' ),
		array( 'title' => __( 'Field Tracking', 'mountsol' ), 'path' => '/features/field-tracking' ),
		array( 'title' => __( 'Team Management', 'mountsol' ), 'path' => '/features/team-management' ),
		array( 'title' => __( 'Customer Portal', 'mountsol' ), 'path' => '/features/customer-portal' ),
	),
);

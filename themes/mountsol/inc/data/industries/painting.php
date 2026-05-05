<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
return array(
	'title'             => __( 'Painting Services Management', 'mountsol' ),
	'subtitle'          => __( 'Painting', 'mountsol' ),
	'description'       => __( 'MountSol helps painting contractors manage residential and commercial projects, pricing, and quality documentation efficiently.', 'mountsol' ),
	'challenges'        => array(
		array( 'title' => __( 'Estimate Accuracy', 'mountsol' ), 'description' => __( 'Painting estimates require careful measurement and consideration of surface condition, type, and paint quality.', 'mountsol' ) ),
		array( 'title' => __( 'Multi-Day Project Tracking', 'mountsol' ), 'description' => __( 'Many projects span multiple days. Need to track progress, verify daily work, and manage customer access.', 'mountsol' ) ),
		array( 'title' => __( 'Quality Control', 'mountsol' ), 'description' => __( 'Quality is visible and customer-facing. Need photo documentation and customer approval.', 'mountsol' ) ),
		array( 'title' => __( 'Crew Coordination', 'mountsol' ), 'description' => __( 'Many projects require multiple painters. Need to coordinate schedules and track labor.', 'mountsol' ) ),
		array( 'title' => __( 'Material Costs', 'mountsol' ), 'description' => __( 'Paint and material costs vary. Need accurate tracking to maintain margins.', 'mountsol' ) ),
		array( 'title' => __( 'Weather Dependencies', 'mountsol' ), 'description' => __( 'Paint requires specific temperature and humidity conditions. Weather changes can halt work.', 'mountsol' ) ),
	),
	'solutions'         => array(
		array( 'title' => __( 'Digital Estimating', 'mountsol' ), 'description' => __( 'Create detailed estimates with surface area, paint type, and labor. Send to customers for approval before work starts.', 'mountsol' ) ),
		array( 'title' => __( 'Photo Documentation', 'mountsol' ), 'description' => __( 'Technicians capture before, during, and after photos. Documents quality and builds customer confidence.', 'mountsol' ) ),
		array( 'title' => __( 'Multi-Day Project Management', 'mountsol' ), 'description' => __( 'Track daily progress on projects. Update customers on completion status. Ensure work quality at each phase.', 'mountsol' ) ),
		array( 'title' => __( 'Cost Tracking', 'mountsol' ), 'description' => __( 'Track materials and labor per project. Identify most profitable work and adjust pricing.', 'mountsol' ) ),
	),
	'relevant_features' => array(
		array( 'title' => __( 'Mobile App', 'mountsol' ), 'path' => '/features/mobile-app' ),
		array( 'title' => __( 'Team Management', 'mountsol' ), 'path' => '/features/team-management' ),
		array( 'title' => __( 'Payment Processing', 'mountsol' ), 'path' => '/features/payment-processing' ),
		array( 'title' => __( 'Reporting', 'mountsol' ), 'path' => '/features/reporting' ),
		array( 'title' => __( 'Customer Portal', 'mountsol' ), 'path' => '/features/customer-portal' ),
		array( 'title' => __( 'Field Tracking', 'mountsol' ), 'path' => '/features/field-tracking' ),
		array( 'title' => __( 'Online Booking', 'mountsol' ), 'path' => '/features/online-booking' ),
		array( 'title' => __( 'Smart Dispatch', 'mountsol' ), 'path' => '/features/dispatch-board' ),
	),
);

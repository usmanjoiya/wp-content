<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
return array(
	'title'             => __( 'Electrical Services Management', 'mountsol' ),
	'subtitle'          => __( 'Electrical', 'mountsol' ),
	'description'       => __( 'MountSol helps electrical contractors manage service calls, installations, and preventive maintenance with accuracy and compliance.', 'mountsol' ),
	'challenges'        => array(
		array( 'title' => __( 'Safety & Compliance', 'mountsol' ), 'description' => __( 'Electrical work requires proper licensing and adherence to codes. Documentation is critical.', 'mountsol' ) ),
		array( 'title' => __( 'Mixed Service Types', 'mountsol' ), 'description' => __( 'Residential vs. commercial work differs. Pricing, requirements, and timelines all vary.', 'mountsol' ) ),
		array( 'title' => __( 'Material Costs', 'mountsol' ), 'description' => __( 'Materials can make up significant portion of job cost. Need accurate tracking and estimation.', 'mountsol' ) ),
		array( 'title' => __( 'Complex Estimating', 'mountsol' ), 'description' => __( 'Electrical jobs often require on-site assessment before accurate estimate. Field technicians need estimating tools.', 'mountsol' ) ),
		array( 'title' => __( 'Scheduling Constraints', 'mountsol' ), 'description' => __( 'Many jobs require specific time windows (customer availability, permit schedules, inspections).', 'mountsol' ) ),
		array( 'title' => __( 'Crew Management', 'mountsol' ), 'description' => __( 'Complex jobs need multiple technicians with different skill levels working together.', 'mountsol' ) ),
	),
	'solutions'         => array(
		array( 'title' => __( 'Accurate Job Estimating', 'mountsol' ), 'description' => __( 'Create detailed estimates with materials and labor on the mobile app. Send to customers for approval before starting work.', 'mountsol' ) ),
		array( 'title' => __( 'Compliance Documentation', 'mountsol' ), 'description' => __( 'Capture photos, notes, and signatures for every job. Maintain complete records for code compliance and warranties.', 'mountsol' ) ),
		array( 'title' => __( 'Crew Coordination', 'mountsol' ), 'description' => __( 'Assign multiple technicians to complex jobs. Track each person\'s time and work. Improve coordination and efficiency.', 'mountsol' ) ),
		array( 'title' => __( 'Multi-Phase Scheduling', 'mountsol' ), 'description' => __( 'Schedule multi-day jobs with specific phases. Track progress and keep customers informed.', 'mountsol' ) ),
	),
	'relevant_features' => array(
		array( 'title' => __( 'Mobile App', 'mountsol' ), 'path' => '/features/mobile-app' ),
		array( 'title' => __( 'Team Management', 'mountsol' ), 'path' => '/features/team-management' ),
		array( 'title' => __( 'Payment Processing', 'mountsol' ), 'path' => '/features/payment-processing' ),
		array( 'title' => __( 'Online Booking', 'mountsol' ), 'path' => '/features/online-booking' ),
		array( 'title' => __( 'Smart Dispatch', 'mountsol' ), 'path' => '/features/dispatch-board' ),
		array( 'title' => __( 'Reporting', 'mountsol' ), 'path' => '/features/reporting' ),
		array( 'title' => __( 'Customer Portal', 'mountsol' ), 'path' => '/features/customer-portal' ),
		array( 'title' => __( 'Field Tracking', 'mountsol' ), 'path' => '/features/field-tracking' ),
	),
);

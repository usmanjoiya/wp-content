<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
return array(
	'title'             => __( 'Roofing Services Management', 'mountsol' ),
	'subtitle'          => __( 'Roofing', 'mountsol' ),
	'description'       => __( 'MountSol helps roofing contractors manage projects, teams, and inspections with precision and safety compliance.', 'mountsol' ),
	'challenges'        => array(
		array( 'title' => __( 'Weather-Dependent Scheduling', 'mountsol' ), 'description' => __( 'Weather changes require rapid rescheduling. Need flexible system that adapts quickly.', 'mountsol' ) ),
		array( 'title' => __( 'Large Project Management', 'mountsol' ), 'description' => __( 'Roofing projects can span days or weeks. Need multi-phase tracking and progress visibility.', 'mountsol' ) ),
		array( 'title' => __( 'Crew Coordination', 'mountsol' ), 'description' => __( 'Most jobs require multiple team members. Need to coordinate schedules and track progress.', 'mountsol' ) ),
		array( 'title' => __( 'Safety Compliance', 'mountsol' ), 'description' => __( 'Roofing has specific safety requirements. Need to document compliance and training.', 'mountsol' ) ),
		array( 'title' => __( 'Material Waste', 'mountsol' ), 'description' => __( 'Material costs vary by project. Need accurate tracking to control waste and costs.', 'mountsol' ) ),
		array( 'title' => __( 'Insurance & Permits', 'mountsol' ), 'description' => __( 'Insurance requirements and permits affect scheduling and pricing.', 'mountsol' ) ),
	),
	'solutions'         => array(
		array( 'title' => __( 'Project-Based Scheduling', 'mountsol' ), 'description' => __( 'Track multi-day and multi-phase projects. Assign crews by task. Update customers on progress automatically.', 'mountsol' ) ),
		array( 'title' => __( 'Safety & Compliance Tracking', 'mountsol' ), 'description' => __( 'Document safety inspections and certifications. Ensure all team members are current on safety training.', 'mountsol' ) ),
		array( 'title' => __( 'Crew Allocation', 'mountsol' ), 'description' => __( 'Assign teams to projects. Track labor costs by project. Identify your most profitable crews.', 'mountsol' ) ),
		array( 'title' => __( 'Weather-Responsive Scheduling', 'mountsol' ), 'description' => __( 'Quickly reschedule jobs when weather changes. Notify customers and adjust crew assignments on the fly.', 'mountsol' ) ),
	),
	'relevant_features' => array(
		array( 'title' => __( 'Team Management', 'mountsol' ), 'path' => '/features/team-management' ),
		array( 'title' => __( 'Mobile App', 'mountsol' ), 'path' => '/features/mobile-app' ),
		array( 'title' => __( 'Reporting', 'mountsol' ), 'path' => '/features/reporting' ),
		array( 'title' => __( 'Field Tracking', 'mountsol' ), 'path' => '/features/field-tracking' ),
		array( 'title' => __( 'Customer Portal', 'mountsol' ), 'path' => '/features/customer-portal' ),
		array( 'title' => __( 'Payment Processing', 'mountsol' ), 'path' => '/features/payment-processing' ),
		array( 'title' => __( 'Online Booking', 'mountsol' ), 'path' => '/features/online-booking' ),
		array( 'title' => __( 'Smart Dispatch', 'mountsol' ), 'path' => '/features/dispatch-board' ),
	),
);

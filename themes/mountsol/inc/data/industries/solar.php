<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
return array(
	'title'             => __( 'Solar Services Management', 'mountsol' ),
	'subtitle'          => __( 'Solar', 'mountsol' ),
	'description'       => __( 'MountSol helps solar companies manage complex installations, warranty work, and maintenance contracts with precision and compliance.', 'mountsol' ),
	'challenges'        => array(
		array( 'title' => __( 'Complex Multi-Day Installations', 'mountsol' ), 'description' => __( 'Solar installations span multiple days with specific phases. Need detailed tracking and progress updates.', 'mountsol' ) ),
		array( 'title' => __( 'Permit & Inspection Coordination', 'mountsol' ), 'description' => __( 'Inspections must happen at specific times. Need to coordinate with city, utility companies, and customers.', 'mountsol' ) ),
		array( 'title' => __( 'Documentation & Compliance', 'mountsol' ), 'description' => __( 'Comprehensive documentation required for permits, rebates, and warranties.', 'mountsol' ) ),
		array( 'title' => __( 'Equipment & Material Costs', 'mountsol' ), 'description' => __( 'Equipment is expensive. Need precise tracking and protection against damage or theft.', 'mountsol' ) ),
		array( 'title' => __( 'Warranty & Service Contracts', 'mountsol' ), 'description' => __( 'Complex warranty terms require tracking which equipment is under what warranty.', 'mountsol' ) ),
		array( 'title' => __( 'Skilled Labor', 'mountsol' ), 'description' => __( 'Solar installation requires specific certifications. Difficult to find and retain skilled installers.', 'mountsol' ) ),
	),
	'solutions'         => array(
		array( 'title' => __( 'Project-Phase Management', 'mountsol' ), 'description' => __( 'Track each phase of installation. Update customers on progress. Coordinate with inspectors and utilities.', 'mountsol' ) ),
		array( 'title' => __( 'Digital Documentation', 'mountsol' ), 'description' => __( 'Capture photos, signatures, and certificates on the job. Generate compliance reports automatically.', 'mountsol' ) ),
		array( 'title' => __( 'Warranty Management', 'mountsol' ), 'description' => __( 'Track equipment, warranties, and service contracts. Alert customers and technicians about warranty coverage.', 'mountsol' ) ),
		array( 'title' => __( 'Skilled Team Tracking', 'mountsol' ), 'description' => __( 'Maintain profiles of technician certifications and qualifications. Assign only certified personnel to jobs.', 'mountsol' ) ),
	),
	'relevant_features' => array(
		array( 'title' => __( 'Team Management', 'mountsol' ), 'path' => '/features/team-management' ),
		array( 'title' => __( 'Mobile App', 'mountsol' ), 'path' => '/features/mobile-app' ),
		array( 'title' => __( 'Customer Portal', 'mountsol' ), 'path' => '/features/customer-portal' ),
		array( 'title' => __( 'Reporting', 'mountsol' ), 'path' => '/features/reporting' ),
		array( 'title' => __( 'Payment Processing', 'mountsol' ), 'path' => '/features/payment-processing' ),
		array( 'title' => __( 'Field Tracking', 'mountsol' ), 'path' => '/features/field-tracking' ),
		array( 'title' => __( 'Smart Dispatch', 'mountsol' ), 'path' => '/features/dispatch-board' ),
		array( 'title' => __( 'Online Booking', 'mountsol' ), 'path' => '/features/online-booking' ),
	),
);

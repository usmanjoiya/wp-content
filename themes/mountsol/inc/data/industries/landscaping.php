<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
return array(
	'title'             => __( 'Landscaping Services Management', 'mountsol' ),
	'subtitle'          => __( 'Landscaping', 'mountsol' ),
	'description'       => __( 'MountSol helps landscaping companies manage recurring services, seasonal growth, and complex routing with ease.', 'mountsol' ),
	'challenges'        => array(
		array( 'title' => __( 'Recurring Service Management', 'mountsol' ), 'description' => __( 'Most revenue comes from recurring weekly or biweekly services. Manual scheduling is time-consuming.', 'mountsol' ) ),
		array( 'title' => __( 'Route Optimization', 'mountsol' ), 'description' => __( 'Multiple stops per day require efficient routing to minimize travel time and fuel costs.', 'mountsol' ) ),
		array( 'title' => __( 'Seasonal Staffing', 'mountsol' ), 'description' => __( 'Spring growth requires quick hiring. Winter slowdown requires cost management.', 'mountsol' ) ),
		array( 'title' => __( 'Equipment Tracking', 'mountsol' ), 'description' => __( 'Managing equipment, tools, and supplies across multiple job sites is challenging.', 'mountsol' ) ),
		array( 'title' => __( 'Photo Documentation', 'mountsol' ), 'description' => __( 'Before and after photos for each job help with customer relationships and accountability.', 'mountsol' ) ),
		array( 'title' => __( 'Weather Impacts', 'mountsol' ), 'description' => __( 'Rain and other weather can prevent work. Need fast rescheduling capabilities.', 'mountsol' ) ),
	),
	'solutions'         => array(
		array( 'title' => __( 'Recurring Service Automation', 'mountsol' ), 'description' => __( 'Set up recurring weekly or biweekly services. Automatic scheduling, customer reminders, and billing reduce admin work.', 'mountsol' ) ),
		array( 'title' => __( 'Smart Route Optimization', 'mountsol' ), 'description' => __( 'MountSol automatically optimizes routes to cluster nearby jobs. Reduce travel time and fuel costs.', 'mountsol' ) ),
		array( 'title' => __( 'Quick Rescheduling', 'mountsol' ), 'description' => __( 'When weather forces changes, reschedule jobs instantly. Keep teams and customers informed.', 'mountsol' ) ),
		array( 'title' => __( 'Photo Documentation', 'mountsol' ), 'description' => __( 'Technicians capture before and after photos on the mobile app. Builds customer confidence and creates proof of work.', 'mountsol' ) ),
	),
	'relevant_features' => array(
		array( 'title' => __( 'Online Booking', 'mountsol' ), 'path' => '/features/online-booking' ),
		array( 'title' => __( 'Smart Dispatch', 'mountsol' ), 'path' => '/features/dispatch-board' ),
		array( 'title' => __( 'Mobile App', 'mountsol' ), 'path' => '/features/mobile-app' ),
		array( 'title' => __( 'Field Tracking', 'mountsol' ), 'path' => '/features/field-tracking' ),
		array( 'title' => __( 'Reporting', 'mountsol' ), 'path' => '/features/reporting' ),
		array( 'title' => __( 'Team Management', 'mountsol' ), 'path' => '/features/team-management' ),
		array( 'title' => __( 'Payment Processing', 'mountsol' ), 'path' => '/features/payment-processing' ),
		array( 'title' => __( 'Customer Portal', 'mountsol' ), 'path' => '/features/customer-portal' ),
	),
);

<?php
/**
 * Navigation structure mirrored from Mountsol.org Next reference (navbar.tsx).
 *
 * @package MountSol
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Mega menu / mobile nav configuration.
 *
 * @return array<string, mixed>
 */
function mountsol_get_nav_data(): array {
	return array(
		'commercial' => array(
			'label'    => __( 'Commercial', 'mountsol' ),
			'columns'  => array(
				array(
					'title' => __( 'Solutions', 'mountsol' ),
					'links' => array(
						array( 'label' => __( 'Commercial Services', 'mountsol' ), 'path' => '/industries' ),
						array( 'label' => __( 'Service & Replacement', 'mountsol' ), 'path' => '/features/dispatch-board' ),
						array( 'label' => __( 'Construction', 'mountsol' ), 'path' => '/industries/roofing' ),
						array( 'label' => __( 'Enterprise', 'mountsol' ), 'path' => '/pricing' ),
						array( 'label' => __( 'Multi-Location', 'mountsol' ), 'path' => '/features/team-management' ),
						array( 'label' => __( 'Franchise', 'mountsol' ), 'path' => '/features/reporting' ),
					),
				),
				array(
					'title' => __( 'Key Features', 'mountsol' ),
					'links' => array(
						array( 'label' => __( 'Project Management', 'mountsol' ), 'path' => '/features/dispatch-board' ),
						array( 'label' => __( 'Dispatch Board', 'mountsol' ), 'path' => '/features/dispatch-board' ),
						array( 'label' => __( 'CRM & Sales', 'mountsol' ), 'path' => '/features/customer-portal' ),
						array( 'label' => __( 'Customer Portal', 'mountsol' ), 'path' => '/features/customer-portal' ),
						array( 'label' => __( 'Field Mobile App', 'mountsol' ), 'path' => '/features/mobile-app' ),
						array( 'label' => __( 'Reporting', 'mountsol' ), 'path' => '/features/reporting' ),
						array( 'label' => __( 'Inventory', 'mountsol' ), 'path' => '/features' ),
						array( 'label' => __( 'Accounting', 'mountsol' ), 'path' => '/features/payment-processing' ),
					),
				),
				array(
					'title' => __( 'Trades', 'mountsol' ),
					'links' => array(
						array( 'label' => 'HVAC', 'path' => '/industries/hvac' ),
						array( 'label' => __( 'Plumbing', 'mountsol' ), 'path' => '/industries/plumbing' ),
						array( 'label' => __( 'Electrical', 'mountsol' ), 'path' => '/industries/electrical' ),
						array( 'label' => __( 'Roofing', 'mountsol' ), 'path' => '/industries/roofing' ),
						array( 'label' => __( 'Cleaning', 'mountsol' ), 'path' => '/industries/landscaping' ),
						array( 'label' => __( 'Appliance Repair', 'mountsol' ), 'path' => '/industries/electrical' ),
						array( 'label' => __( 'Maintenance', 'mountsol' ), 'path' => '/features' ),
						array( 'label' => __( 'Commercial Services', 'mountsol' ), 'path' => '/industries' ),
					),
				),
			),
			'cta'      => array(
				'title'  => __( 'See how MountSol helps commercial teams grow', 'mountsol' ),
				'text'   => __( 'Streamline operations for enterprise-scale service businesses.', 'mountsol' ),
				'button' => __( 'Explore Commercial', 'mountsol' ),
				'path'   => '/industries',
			),
		),
		'residential' => array(
			'label'   => __( 'Residential', 'mountsol' ),
			'columns' => array(
				array(
					'title' => __( 'Solutions', 'mountsol' ),
					'links' => array(
						array( 'label' => __( 'Residential Service', 'mountsol' ), 'path' => '/industries' ),
						array( 'label' => __( 'Home Services', 'mountsol' ), 'path' => '/features' ),
						array( 'label' => __( 'Emergency Repairs', 'mountsol' ), 'path' => '/features/dispatch-board' ),
						array( 'label' => __( 'Recurring Maintenance', 'mountsol' ), 'path' => '/features/online-booking' ),
						array( 'label' => __( 'Small Teams', 'mountsol' ), 'path' => '/features/team-management' ),
						array( 'label' => __( 'Growing Contractors', 'mountsol' ), 'path' => '/pricing' ),
					),
				),
				array(
					'title' => __( 'Key Features', 'mountsol' ),
					'links' => array(
						array( 'label' => __( 'Online Booking', 'mountsol' ), 'path' => '/features/online-booking' ),
						array( 'label' => __( 'Call Booking', 'mountsol' ), 'path' => '/features/online-booking' ),
						array( 'label' => __( 'Scheduling', 'mountsol' ), 'path' => '/features/dispatch-board' ),
						array( 'label' => __( 'Technician App', 'mountsol' ), 'path' => '/features/mobile-app' ),
						array( 'label' => __( 'Quotes & Estimates', 'mountsol' ), 'path' => '/features/payment-processing' ),
						array( 'label' => __( 'Payments', 'mountsol' ), 'path' => '/features/payment-processing' ),
						array( 'label' => __( 'Customer Communication', 'mountsol' ), 'path' => '/features/customer-portal' ),
						array( 'label' => __( 'Reviews', 'mountsol' ), 'path' => '/features/customer-portal' ),
					),
				),
				array(
					'title' => __( 'Trades', 'mountsol' ),
					'links' => array(
						array( 'label' => 'HVAC', 'path' => '/industries/hvac' ),
						array( 'label' => __( 'Plumbing', 'mountsol' ), 'path' => '/industries/plumbing' ),
						array( 'label' => __( 'Electrical', 'mountsol' ), 'path' => '/industries/electrical' ),
						array( 'label' => __( 'Roofing', 'mountsol' ), 'path' => '/industries/roofing' ),
						array( 'label' => __( 'Pest Control', 'mountsol' ), 'path' => '/industries/pest-control' ),
						array( 'label' => __( 'Landscaping', 'mountsol' ), 'path' => '/industries/landscaping' ),
						array( 'label' => __( 'Cleaning', 'mountsol' ), 'path' => '/industries/landscaping' ),
						array( 'label' => __( 'Painting', 'mountsol' ), 'path' => '/industries/painting' ),
					),
				),
			),
			'cta'     => array(
				'title'  => __( 'Built for residential service teams', 'mountsol' ),
				'text'   => __( 'From solo contractors to growing service companies.', 'mountsol' ),
				'button' => __( 'Explore Residential', 'mountsol' ),
				'path'   => '/industries',
			),
		),
		'products'    => array(
			'label'      => __( 'Products', 'mountsol' ),
			'layout'     => 'three-col-actions',
			'columns'    => array(
				array(
					'title' => __( 'Core Platform', 'mountsol' ),
					'links' => array(
						array( 'label' => __( 'Scheduling', 'mountsol' ), 'path' => '/features/dispatch-board' ),
						array( 'label' => __( 'Dispatching', 'mountsol' ), 'path' => '/features/dispatch-board' ),
						array( 'label' => 'CRM', 'path' => '/features/customer-portal' ),
						array( 'label' => __( 'Estimates', 'mountsol' ), 'path' => '/features/payment-processing' ),
						array( 'label' => __( 'Invoicing', 'mountsol' ), 'path' => '/features/payment-processing' ),
						array( 'label' => __( 'Payments', 'mountsol' ), 'path' => '/features/payment-processing' ),
						array( 'label' => __( 'Customer Portal', 'mountsol' ), 'path' => '/features/customer-portal' ),
					),
				),
				array(
					'title' => __( 'Advanced Tools', 'mountsol' ),
					'links' => array(
						array( 'label' => __( 'AI Chatbot', 'mountsol' ), 'path' => '/features' ),
						array( 'label' => __( 'Automation', 'mountsol' ), 'path' => '/features' ),
						array( 'label' => __( 'GPS Tracking', 'mountsol' ), 'path' => '/features/field-tracking' ),
						array( 'label' => __( 'Reporting Dashboard', 'mountsol' ), 'path' => '/features/reporting' ),
						array( 'label' => __( 'Inventory Tracking', 'mountsol' ), 'path' => '/features' ),
						array( 'label' => __( 'Fleet Management', 'mountsol' ), 'path' => '/features/field-tracking' ),
						array( 'label' => __( 'Weather Alerts', 'mountsol' ), 'path' => '/features' ),
					),
				),
			),
		),
		'resources'   => array(
			'label'   => __( 'Resources', 'mountsol' ),
			'columns' => array(
				array(
					'title' => __( 'Learn', 'mountsol' ),
					'links' => array(
						array( 'label' => __( 'Blog', 'mountsol' ), 'path' => '/resources' ),
						array( 'label' => __( 'Field Service Guide', 'mountsol' ), 'path' => '/resources' ),
						array( 'label' => __( 'Scheduling Guide', 'mountsol' ), 'path' => '/resources' ),
						array( 'label' => __( 'Dispatching Guide', 'mountsol' ), 'path' => '/resources' ),
						array( 'label' => __( 'Growth Guide', 'mountsol' ), 'path' => '/resources' ),
					),
				),
				array(
					'title' => __( 'Tools', 'mountsol' ),
					'links' => array(
						array( 'label' => __( 'ROI Calculator', 'mountsol' ), 'path' => '/resources' ),
						array( 'label' => __( 'Templates', 'mountsol' ), 'path' => '/resources' ),
						array( 'label' => __( 'Checklists', 'mountsol' ), 'path' => '/resources' ),
						array( 'label' => __( 'Comparison Guides', 'mountsol' ), 'path' => '/resources' ),
					),
				),
				array(
					'title' => __( 'Company', 'mountsol' ),
					'links' => array(
						array( 'label' => __( 'About', 'mountsol' ), 'path' => '/about' ),
						array( 'label' => __( 'Contact', 'mountsol' ), 'path' => '/contact' ),
						array( 'label' => __( 'Pricing', 'mountsol' ), 'path' => '/pricing' ),
						array( 'label' => __( 'Login', 'mountsol' ), 'path' => '/login' ),
					),
				),
			),
			'sidebar' => 'newsletter',
		),
	);
}

<?php
/**
 * Home page copy and structure (Next: app/page.tsx).
 *
 * @package MountSol
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

return array(
	'hero'              => array(
		'trust_strip' => __( 'Trusted by service businesses everywhere', 'mountsol' ),
		'trust'       => array(
			array(
				'icon'     => 'star-outline',
				'label'    => __( '4.8 Rating', 'mountsol' ),
				'sublabel' => __( '2,000+ reviews', 'mountsol' ),
			),
			array(
				'icon'     => 'shield',
				'label'    => __( 'Trusted', 'mountsol' ),
				'sublabel' => __( 'by 10,000+ businesses', 'mountsol' ),
			),
			array(
				'icon'     => 'clock',
				'label'    => __( 'Fast Setup', 'mountsol' ),
				'sublabel' => __( 'Get started in minutes', 'mountsol' ),
			),
			array(
				'icon'     => 'smartphone',
				'label'    => __( 'Mobile Ready', 'mountsol' ),
				'sublabel' => __( 'iOS & Android apps', 'mountsol' ),
			),
		),
		'logos'       => array(
			array( 'name' => __( 'ProServ HVAC', 'mountsol' ), 'initials' => 'PH' ),
			array( 'name' => __( 'Elite Plumbing', 'mountsol' ), 'initials' => 'EP' ),
			array( 'name' => __( 'Sunshine Solar', 'mountsol' ), 'initials' => 'SS' ),
			array( 'name' => __( 'Metro Electric', 'mountsol' ), 'initials' => 'ME' ),
			array( 'name' => __( 'Green Landscaping', 'mountsol' ), 'initials' => 'GL' ),
			array( 'name' => __( 'Apex Roofing', 'mountsol' ), 'initials' => 'AR' ),
		),
		'secondary'   => array(
			'cta'  => __( 'Request Demo', 'mountsol' ),
			'href' => '/demo',
			'hint' => __( 'No credit card required', 'mountsol' ),
		),
	),
	'built_for_trades'  => array(
		'title'     => __( 'Built for the Trades. Built for Your Business.', 'mountsol' ),
		'subtitle'  => __( 'Purpose-built solutions for every service industry.', 'mountsol' ),
		'industries' => array(
			array( 'slug' => 'hvac', 'icon' => 'wind', 'title' => __( 'HVAC', 'mountsol' ), 'description' => __( 'Heating, cooling, and air quality services.', 'mountsol' ) ),
			array( 'slug' => 'plumbing', 'icon' => 'wrench', 'title' => __( 'Plumbing', 'mountsol' ), 'description' => __( 'Water systems and pipe services.', 'mountsol' ) ),
			array( 'slug' => 'electrical', 'icon' => 'lightbulb', 'title' => __( 'Electrical', 'mountsol' ), 'description' => __( 'Electrical installation and repair.', 'mountsol' ) ),
			array( 'slug' => 'roofing', 'icon' => 'hammer', 'title' => __( 'Roofing', 'mountsol' ), 'description' => __( 'Roof installation and maintenance.', 'mountsol' ) ),
			array( 'slug' => 'landscaping', 'icon' => 'leaf', 'title' => __( 'Landscaping', 'mountsol' ), 'description' => __( 'Lawn care and outdoor services.', 'mountsol' ) ),
			array( 'slug' => 'pest-control', 'icon' => 'bug', 'title' => __( 'Pest Control', 'mountsol' ), 'description' => __( 'Pest management services.', 'mountsol' ) ),
			array( 'slug' => 'solar', 'icon' => 'sun', 'title' => __( 'Solar', 'mountsol' ), 'description' => __( 'Solar panel installation.', 'mountsol' ) ),
			array( 'slug' => 'painting', 'icon' => 'palette', 'title' => __( 'Painting', 'mountsol' ), 'description' => __( 'Interior and exterior painting.', 'mountsol' ) ),
		),
	),
	'platform_overview' => array(
		'eyebrow'    => __( 'Platform Overview', 'mountsol' ),
		'title'      => __( 'One Platform to Run Your Entire Operation', 'mountsol' ),
		'body'       => __( 'From the first call to the final invoice, MountSol gives you complete control over every aspect of your service business.', 'mountsol' ),
		'bullets'    => array(
			__( 'Dispatch Board with drag-and-drop scheduling', 'mountsol' ),
			__( 'Real-time field technician tracking', 'mountsol' ),
			__( 'Customer portal for self-service booking', 'mountsol' ),
			__( 'Integrated invoicing and payments', 'mountsol' ),
			__( 'Powerful reporting dashboard', 'mountsol' ),
		),
		'cta_text'   => __( 'Explore Platform', 'mountsol' ),
		'cta_href'   => '/features',
		'image'      => get_template_directory_uri() . '/assets/images/dashboard-analytics.jpg',
		'image_alt'  => __( 'MountSol Dashboard', 'mountsol' ),
		'float_top'  => array(
			'icon'  => 'trending-up',
			'label' => __( 'Revenue Today', 'mountsol' ),
			'value' => '$12,450',
		),
		'float_bottom' => array(
			'icon'  => 'calendar',
			'label' => __( 'Jobs Scheduled', 'mountsol' ),
			'value' => __( '24 Today', 'mountsol' ),
		),
	),
	'key_features'      => array(
		'eyebrow'    => __( 'Key Features', 'mountsol' ),
		'title'      => __( 'Everything You Need to Succeed', 'mountsol' ),
		'subtitle'   => __( 'Powerful tools designed specifically for service businesses.', 'mountsol' ),
		'more_text'  => __( 'View All Features', 'mountsol' ),
		'more_href'  => '/features',
		'features'   => array(
			array( 'icon' => 'calendar', 'title' => __( 'Scheduling', 'mountsol' ), 'description' => __( 'Drag-and-drop calendar with smart conflict detection.', 'mountsol' ), 'href' => '/features/dispatch-board' ),
			array( 'icon' => 'truck', 'title' => __( 'Dispatching', 'mountsol' ), 'description' => __( 'Real-time job assignment with GPS routing.', 'mountsol' ), 'href' => '/features/dispatch-board' ),
			array( 'icon' => 'users', 'title' => __( 'CRM', 'mountsol' ), 'description' => __( 'Complete customer history and communication.', 'mountsol' ), 'href' => '/features/customer-portal' ),
			array( 'icon' => 'file-text', 'title' => __( 'Quotes', 'mountsol' ), 'description' => __( 'Professional estimates sent in seconds.', 'mountsol' ), 'href' => '/features/payment-processing' ),
			array( 'icon' => 'credit-card', 'title' => __( 'Payments', 'mountsol' ), 'description' => __( 'Accept cards, ACH, and financing on-site.', 'mountsol' ), 'href' => '/features/payment-processing' ),
			array( 'icon' => 'message-square', 'title' => __( 'Customer Portal', 'mountsol' ), 'description' => __( 'Self-service booking and job tracking.', 'mountsol' ), 'href' => '/features/customer-portal' ),
			array( 'icon' => 'bar-chart-3', 'title' => __( 'Reporting', 'mountsol' ), 'description' => __( 'Real-time dashboards and custom reports.', 'mountsol' ), 'href' => '/features/reporting' ),
			array( 'icon' => 'zap', 'title' => __( 'Automation', 'mountsol' ), 'description' => __( 'Workflows that run while you sleep.', 'mountsol' ), 'href' => '/features' ),
		),
	),
	'workflow'          => array(
		'eyebrow'  => __( 'Your Workflow', 'mountsol' ),
		'title'    => __( 'From Lead to Revenue in One Flow', 'mountsol' ),
		'subtitle' => __( 'Streamline every step of your service workflow.', 'mountsol' ),
		'steps'    => array(
			array( 'icon' => 'users', 'label' => __( 'Lead', 'mountsol' ), 'color' => 'blue' ),
			array( 'icon' => 'calendar', 'label' => __( 'Booking', 'mountsol' ), 'color' => 'indigo' ),
			array( 'icon' => 'truck', 'label' => __( 'Dispatch', 'mountsol' ), 'color' => 'purple' ),
			array( 'icon' => 'wrench', 'label' => __( 'Job', 'mountsol' ), 'color' => 'pink' ),
			array( 'icon' => 'receipt', 'label' => __( 'Invoice', 'mountsol' ), 'color' => 'orange' ),
			array( 'icon' => 'credit-card', 'label' => __( 'Payment', 'mountsol' ), 'color' => 'green' ),
			array( 'icon' => 'pie-chart', 'label' => __( 'Report', 'mountsol' ), 'color' => 'teal' ),
		),
	),
	'stats'             => array(
		'eyebrow'  => __( 'Results That Matter', 'mountsol' ),
		'title'    => __( 'Real Results for Real Businesses', 'mountsol' ),
		'subtitle' => __( 'See the impact MountSol has on service businesses like yours.', 'mountsol' ),
		'items'    => array(
			array( 'value' => '40%', 'label' => __( 'More booked jobs', 'mountsol' ), 'description' => __( 'Average increase in bookings', 'mountsol' ) ),
			array( 'value' => '2x', 'label' => __( 'Faster dispatch', 'mountsol' ), 'description' => __( 'Reduce dispatch time by half', 'mountsol' ) ),
			array( 'value' => '35%', 'label' => __( 'Better cash flow', 'mountsol' ), 'description' => __( 'Faster invoice-to-payment', 'mountsol' ) ),
			array( 'value' => '4.8', 'label' => __( 'Customer rating', 'mountsol' ), 'description' => __( 'Average satisfaction score', 'mountsol' ) ),
		),
	),
	'testimonials'      => array(
		'eyebrow' => __( 'Testimonials', 'mountsol' ),
		'title'   => __( 'Trusted by Service Pros', 'mountsol' ),
		'items'   => array(
			array(
				'quote'   => __( 'MountSol helped us increase our monthly revenue by 40%. The mobile app alone transformed how our team works in the field.', 'mountsol' ),
				'author'  => 'Sarah Johnson',
				'company' => 'Johnson HVAC',
				'role'    => __( 'Owner', 'mountsol' ),
				'rating'  => 5,
			),
			array(
				'quote'   => __( 'We finally have visibility into what\'s happening in the field. Customer satisfaction is up 35% since we switched.', 'mountsol' ),
				'author'  => 'Mike Chen',
				'company' => 'Chen Plumbing Solutions',
				'role'    => __( 'Operations Manager', 'mountsol' ),
				'rating'  => 5,
			),
			array(
				'quote'   => __( 'The dispatch system saves us hours every day. Best investment we\'ve made for our business.', 'mountsol' ),
				'author'  => 'Lisa Thompson',
				'company' => 'Thompson Electrical',
				'role'    => __( 'CEO', 'mountsol' ),
				'rating'  => 5,
			),
		),
	),
	'pricing_preview'   => array(
		'eyebrow'    => __( 'Pricing', 'mountsol' ),
		'title'      => __( 'Plans That Grow With You', 'mountsol' ),
		'subtitle'   => __( 'Start with what you need. Scale as you grow.', 'mountsol' ),
		'compare'    => __( 'Compare All Plans', 'mountsol' ),
		'compare_href' => '/pricing',
		'plans'      => array(
			array(
				'name'        => __( 'Basic', 'mountsol' ),
				'description' => __( 'For small teams getting started', 'mountsol' ),
				'price'       => '$99',
				'featured'    => false,
				'features'    => array(
					__( 'Up to 3 users', 'mountsol' ),
					__( 'Scheduling & Dispatch', 'mountsol' ),
					__( 'Customer Management', 'mountsol' ),
					__( 'Basic Reporting', 'mountsol' ),
				),
			),
			array(
				'name'        => __( 'Standard', 'mountsol' ),
				'description' => __( 'Most popular for growing teams', 'mountsol' ),
				'price'       => '$149',
				'featured'    => true,
				'features'    => array(
					__( 'Up to 10 users', 'mountsol' ),
					__( 'Everything in Basic', 'mountsol' ),
					__( 'Online Booking', 'mountsol' ),
					__( 'Payment Processing', 'mountsol' ),
					__( 'Advanced Reporting', 'mountsol' ),
				),
			),
			array(
				'name'        => __( 'Pro', 'mountsol' ),
				'description' => __( 'For established service businesses', 'mountsol' ),
				'price'       => '$199',
				'featured'    => false,
				'features'    => array(
					__( 'Unlimited users', 'mountsol' ),
					__( 'Everything in Standard', 'mountsol' ),
					__( 'Custom Workflows', 'mountsol' ),
					__( 'API Access', 'mountsol' ),
					__( 'Priority Support', 'mountsol' ),
				),
			),
		),
		'plan_cta'   => __( 'Get Started', 'mountsol' ),
		'plan_href'  => '/pricing',
	),
);

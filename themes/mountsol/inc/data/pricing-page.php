<?php
/**
 * Pricing page structured content (Next: app/pricing/page.tsx).
 *
 * @package MountSol
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

return array(
	'plans'      => array(
		array(
			'name'        => 'BASIC',
			'price'       => '$99',
			'period'      => '/month',
			'description' => __( 'Best for small service businesses getting started', 'mountsol' ),
			'badge'       => '',
			'cta'         => __( 'Start Free Trial', 'mountsol' ),
			'cta_link'    => '/demo',
			'featured'    => false,
			'icon'        => 'zap',
			'categories'  => array(
				__( 'Website & Lead Capture', 'mountsol' )   => array(
					__( 'Professional website builder (9 templates)', 'mountsol' ),
					__( 'Custom domain connection', 'mountsol' ),
					__( 'Mobile-responsive design', 'mountsol' ),
					__( 'Contact & quote request forms', 'mountsol' ),
					__( 'Basic SEO tools', 'mountsol' ),
				),
				__( 'CRM & Lead Management', 'mountsol' )    => array(
					__( 'Lead capture & tracking', 'mountsol' ),
					__( 'Contact database with property details', 'mountsol' ),
					__( 'Lead status pipeline', 'mountsol' ),
					__( 'Built-in email integration', 'mountsol' ),
				),
				__( 'Sales & Payments', 'mountsol' )         => array(
					__( 'Professional quotation templates', 'mountsol' ),
					__( 'Online payment processing', 'mountsol' ),
					__( 'Basic invoicing', 'mountsol' ),
					__( 'Payment status tracking', 'mountsol' ),
				),
			),
		),
		array(
			'name'        => 'STANDARD',
			'price'       => '$149',
			'period'      => '/month',
			'description' => __( 'Everything you need to grow your business', 'mountsol' ),
			'badge'       => __( 'MOST POPULAR', 'mountsol' ),
			'cta'         => __( 'Get Demo', 'mountsol' ),
			'cta_link'    => '/demo',
			'featured'    => true,
			'icon'        => 'sparkles',
			'categories'  => array(
				__( 'Website & Marketing', 'mountsol' )      => array(
					__( 'Everything in BASIC', 'mountsol' ),
					__( 'Additional website pages', 'mountsol' ),
					__( 'Customer review integration (Google, Trustpilot)', 'mountsol' ),
				),
				__( 'Sales Automation', 'mountsol' )         => array(
					__( 'Quote-to-job conversion (one click)', 'mountsol' ),
					__( 'Automated lead follow-ups (email/SMS)', 'mountsol' ),
					__( 'Sales pipeline analytics', 'mountsol' ),
				),
				__( 'Operations', 'mountsol' )               => array(
					__( 'Centralized job / project dashboard', 'mountsol' ),
					__( 'Drag-and-drop crew scheduling', 'mountsol' ),
					__( 'Mobile crew app (view jobs, update status)', 'mountsol' ),
					__( 'Timesheet logging per project', 'mountsol' ),
				),
				__( 'Financials', 'mountsol' )                => array(
					__( 'Milestone-based invoicing', 'mountsol' ),
					__( 'Automated payment reminders', 'mountsol' ),
					__( 'Project expense tracking', 'mountsol' ),
				),
				__( 'Customer Experience', 'mountsol' )      => array(
					__( 'Customer portal (basic access)', 'mountsol' ),
					__( 'Digital document storage (contracts, warranties)', 'mountsol' ),
				),
			),
		),
		array(
			'name'        => 'PRO',
			'price'       => '$199',
			'period'      => '/month',
			'description' => __( 'Advanced tools for scaling your business', 'mountsol' ),
			'badge'       => __( 'BEST VALUE', 'mountsol' ),
			'cta'         => __( 'Contact Sales', 'mountsol' ),
			'cta_link'    => '/contact',
			'featured'    => false,
			'icon'        => 'crown',
			'categories'  => array(
				__( 'AI & Automation', 'mountsol' )          => array(
					__( '24/7 AI chatbot (lead qualification, callback booking)', 'mountsol' ),
					__( 'AI lead prioritization (scoring + weather alerts)', 'mountsol' ),
					__( 'Automated communication sequences (email/SMS)', 'mountsol' ),
				),
				__( 'Advanced Operations', 'mountsol' )       => array(
					__( 'GPS-enabled dispatch & route optimization', 'mountsol' ),
					__( 'Real-time job dashboards', 'mountsol' ),
					__( 'Digital QA checklists & approvals', 'mountsol' ),
					__( 'Automated change orders', 'mountsol' ),
				),
				__( 'Mobile & Field Tools', 'mountsol' )      => array(
					__( 'Full mobile app (photos, updates, signatures)', 'mountsol' ),
				),
				__( 'Inventory & Materials', 'mountsol' )     => array(
					__( 'Real-time stock tracking with auto-reorder', 'mountsol' ),
					__( 'Lot / serial tracking for warranties', 'mountsol' ),
					__( 'Supplier integrations (ABC Supply, SRS)', 'mountsol' ),
					__( 'Automated purchase orders', 'mountsol' ),
				),
				__( 'Integrations & Tools', 'mountsol' )      => array(
					__( 'EagleView integration (roof measurements)', 'mountsol' ),
					__( 'Real-time material pricing catalogs', 'mountsol' ),
					__( 'Weather integration (storm-triggered outreach)', 'mountsol' ),
				),
				__( 'Customer Experience', 'mountsol' )      => array(
					__( 'Advanced customer portal (real-time progress)', 'mountsol' ),
					__( 'Warranty & document management', 'mountsol' ),
				),
				__( 'Analytics & Control', 'mountsol' )       => array(
					__( 'Role-based dashboards', 'mountsol' ),
					__( 'Advanced BI analytics (ROI, efficiency, cost tracking)', 'mountsol' ),
					__( 'Workflow automation & approval rules', 'mountsol' ),
				),
				__( 'Business Management', 'mountsol' )       => array(
					__( 'Equipment & fleet management', 'mountsol' ),
					__( 'Multi-location support (branch-level P&L)', 'mountsol' ),
					__( 'Employee time tracking & payroll integration', 'mountsol' ),
					__( 'Subcontractor management portal (1099 payments)', 'mountsol' ),
				),
			),
		),
	),
	'comparison' => array(
		array( 'category' => __( 'Website & Lead Capture', 'mountsol' ), 'basic' => true, 'standard' => true, 'pro' => true ),
		array( 'category' => __( 'CRM & Lead Management', 'mountsol' ), 'basic' => true, 'standard' => true, 'pro' => true ),
		array( 'category' => __( 'Basic Sales & Payments', 'mountsol' ), 'basic' => true, 'standard' => true, 'pro' => true ),
		array( 'category' => __( 'Sales Automation', 'mountsol' ), 'basic' => false, 'standard' => true, 'pro' => true ),
		array( 'category' => __( 'Job Scheduling & Dispatch', 'mountsol' ), 'basic' => false, 'standard' => true, 'pro' => true ),
		array( 'category' => __( 'Mobile Crew App', 'mountsol' ), 'basic' => false, 'standard' => true, 'pro' => true ),
		array( 'category' => __( 'Advanced Reporting', 'mountsol' ), 'basic' => false, 'standard' => true, 'pro' => true ),
		array( 'category' => __( 'AI & Automation', 'mountsol' ), 'basic' => false, 'standard' => false, 'pro' => true ),
		array( 'category' => __( 'GPS Dispatch & Route Optimization', 'mountsol' ), 'basic' => false, 'standard' => false, 'pro' => true ),
		array( 'category' => __( 'Inventory & Materials Management', 'mountsol' ), 'basic' => false, 'standard' => false, 'pro' => true ),
		array( 'category' => __( 'Advanced Integrations', 'mountsol' ), 'basic' => false, 'standard' => false, 'pro' => true ),
		array( 'category' => __( 'Multi-Location Support', 'mountsol' ), 'basic' => false, 'standard' => false, 'pro' => true ),
		array( 'category' => __( 'Payroll Integration', 'mountsol' ), 'basic' => false, 'standard' => false, 'pro' => true ),
	),
	'faqs'       => array(
		array(
			'q' => __( 'Can I upgrade later?', 'mountsol' ),
			'a' => __( 'Absolutely. You can upgrade your plan anytime, and changes take effect immediately with prorated billing.', 'mountsol' ),
		),
		array(
			'q' => __( 'Is there a free trial?', 'mountsol' ),
			'a' => __( 'Yes! All plans come with a 14-day free trial. No credit card required to get started.', 'mountsol' ),
		),
		array(
			'q' => __( 'Do I need technical knowledge?', 'mountsol' ),
			'a' => __( 'No. MountSol is designed to be user-friendly. Our team provides setup and training to get you up and running quickly.', 'mountsol' ),
		),
		array(
			'q' => __( 'How fast can I get started?', 'mountsol' ),
			'a' => __( 'You can sign up and start your free trial in minutes. We also offer hands-on onboarding to help you get the most value.', 'mountsol' ),
		),
		array(
			'q' => __( 'Do you offer onboarding?', 'mountsol' ),
			'a' => __( 'Yes! All plans include professional setup, training, and dedicated support to ensure your success.', 'mountsol' ),
		),
	),
);

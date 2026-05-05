<?php
/**
 * Front page.
 *
 * @package MountSol
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();
get_template_part( 'template-parts/home-hero' );
get_template_part( 'template-parts/home-industries-grid' );
get_template_part( 'template-parts/home-platform-section' );
get_template_part( 'template-parts/home-features-grid' );
get_template_part( 'template-parts/home-workflow-section' );
get_template_part( 'template-parts/home-stats-section' );
get_template_part( 'template-parts/home-testimonials-section' );
get_template_part( 'template-parts/home-pricing-preview' );
get_template_part(
	'template-parts/cta-section',
	null,
	array(
		'title'          => __( 'Ready to Run Your Service Business With Confidence?', 'mountsol' ),
		'description'    => __( 'Join thousands of service businesses using MountSol to win more jobs and grow faster.', 'mountsol' ),
		'primary_text'   => __( 'Get Demo', 'mountsol' ),
		'primary_href'   => '/demo',
		'secondary_text' => __( 'Start Free Trial', 'mountsol' ),
		'secondary_href' => '/demo',
	)
);
get_footer();

<?php
/**
 * Industries landing (/industries).
 *
 * @package MountSol
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();

get_template_part(
	'template-parts/simple-hero',
	null,
	array(
		'title'       => __( 'Solutions for Every Industry', 'mountsol' ),
		'subtitle'    => __( 'Industries', 'mountsol' ),
		'description' => __( 'MountSol is built to serve the unique needs of your industry. Explore tailored solutions.', 'mountsol' ),
	)
);

get_template_part( 'template-parts/industries-grid-section' );

get_template_part(
	'template-parts/cta-section',
	null,
	array(
		'title'       => __( 'Ready for an Industry-Specific Demo?', 'mountsol' ),
		'description' => __( 'See how MountSol works for your business type.', 'mountsol' ),
		'primary_text' => __( 'Book Demo', 'mountsol' ),
		'primary_href' => '/demo',
	)
);

get_footer();

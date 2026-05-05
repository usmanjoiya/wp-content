<?php
/**
 * Features landing (/features).
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
		'title'       => __( 'Powerful Features, Simple to Use', 'mountsol' ),
		'subtitle'    => __( 'Features', 'mountsol' ),
		'description' => __( 'Everything you need to run your service business efficiently. Explore our complete feature set.', 'mountsol' ),
	)
);

get_template_part( 'template-parts/features-grid-section' );

get_template_part(
	'template-parts/cta-section',
	null,
	array(
		'title'       => __( 'See MountSol in Action', 'mountsol' ),
		'description' => __( 'Watch how your business can transform with MountSol.', 'mountsol' ),
		'primary_text' => __( 'Book Demo', 'mountsol' ),
		'primary_href' => '/demo',
	)
);

get_footer();

<?php
/**
 * About page structured content (Next: app/about/page.tsx).
 *
 * @package MountSol
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

return array(
	'mission' => array(
		'title' => __( 'Our Mission', 'mountsol' ),
		'body'  => __( 'To empower field service businesses with intelligent technology that makes running their business simpler, faster, and more profitable.', 'mountsol' ),
	),
	'story'   => array(
		'title' => __( 'Our Story', 'mountsol' ),
		'paras' => array(
			__( 'MountSol was founded by industry veterans who spent years working in field service businesses. They understood the pain points: scattered systems, inefficient scheduling, poor customer communication, and difficulty tracking profitability.', 'mountsol' ),
			__( 'Rather than settling for clunky legacy software or trying to stitch together disparate tools, they built MountSol — a modern, intuitive platform designed specifically for service businesses.', 'mountsol' ),
			__( 'Today, hundreds of companies use MountSol to manage their operations more efficiently, win more jobs, and grow their revenue.', 'mountsol' ),
		),
	),
	'values'  => array(
		'title' => __( 'Our Values', 'mountsol' ),
		'items' => array(
			array(
				'title' => __( 'Customer First', 'mountsol' ),
				'desc'  => __( 'Everything we build is designed with our customers in mind.', 'mountsol' ),
			),
			array(
				'title' => __( 'Simplicity', 'mountsol' ),
				'desc'  => __( 'We believe great software should be intuitive and easy to use.', 'mountsol' ),
			),
			array(
				'title' => __( 'Innovation', 'mountsol' ),
				'desc'  => __( 'We continuously improve and add features based on customer feedback.', 'mountsol' ),
			),
		),
	),
	'team'    => array(
		'title' => __( 'The Team', 'mountsol' ),
		'body'  => __( 'We\'re a diverse team of engineers, designers, and industry experts dedicated to building the best field service platform. Join us in transforming how service businesses work.', 'mountsol' ),
	),
);

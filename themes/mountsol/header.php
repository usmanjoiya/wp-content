<?php
/**
 * Theme header.
 *
 * @package MountSol
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="mountsol-html" data-scroll-behavior="smooth">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>
<body <?php body_class( 'mountsol-body' ); ?>>
<?php wp_body_open(); ?>
<?php get_template_part( 'template-parts/announcement-bar' ); ?>
<?php
get_template_part(
	'template-parts/site-header',
	null,
	array( 'nav' => mountsol_get_nav_data() )
);
?>
<main id="primary" class="site-main">

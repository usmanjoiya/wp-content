<?php
/**
 * Simple gradient hero for inner pages.
 *
 * @package MountSol
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$title       = isset( $title ) ? (string) $title : '';
$subtitle    = isset( $subtitle ) ? (string) $subtitle : '';
$description = isset( $description ) ? (string) $description : '';
?>
<section class="mountsol-simple-hero">
	<div class="mountsol-simple-hero__inner">
		<?php if ( $subtitle !== '' ) : ?>
			<p class="mountsol-simple-hero__eyebrow"><?php echo esc_html( $subtitle ); ?></p>
		<?php endif; ?>
		<?php if ( $title !== '' ) : ?>
			<h1 class="mountsol-simple-hero__title"><?php echo esc_html( $title ); ?></h1>
		<?php endif; ?>
		<?php if ( $description !== '' ) : ?>
			<p class="mountsol-simple-hero__desc"><?php echo esc_html( $description ); ?></p>
		<?php endif; ?>
	</div>
</section>

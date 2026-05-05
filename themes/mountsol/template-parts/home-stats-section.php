<?php
/**
 * Home: stats/results section.
 *
 * @package MountSol
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$d  = mountsol_get_home_page_data();
$st = isset( $d['stats'] ) && is_array( $d['stats'] ) ? $d['stats'] : array();
?>
<section class="mountsol-home-section mountsol-home-section--gradient">
	<div class="container">
		<div class="mountsol-home-section__intro mountsol-home-section__intro--light">
			<?php if ( ! empty( $st['eyebrow'] ) ) : ?>
				<span class="mountsol-home-pill mountsol-home-pill--on-dark"><?php echo esc_html( (string) $st['eyebrow'] ); ?></span>
			<?php endif; ?>
			<?php if ( ! empty( $st['title'] ) ) : ?>
				<h2 class="mountsol-home-section__title mountsol-home-section__title--white"><?php echo esc_html( (string) $st['title'] ); ?></h2>
			<?php endif; ?>
			<?php if ( ! empty( $st['subtitle'] ) ) : ?>
				<p class="mountsol-home-section__lede mountsol-home-section__lede--muted-white"><?php echo esc_html( (string) $st['subtitle'] ); ?></p>
			<?php endif; ?>
		</div>
		<div class="mountsol-home-stats">
			<?php foreach ( (array) ( $st['items'] ?? array() ) as $stat ) : ?>
				<div class="mountsol-home-stat">
					<p class="mountsol-home-stat__value"><?php echo esc_html( (string) ( $stat['value'] ?? '' ) ); ?></p>
					<p class="mountsol-home-stat__label"><?php echo esc_html( (string) ( $stat['label'] ?? '' ) ); ?></p>
					<p class="mountsol-home-stat__desc"><?php echo esc_html( (string) ( $stat['description'] ?? '' ) ); ?></p>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>


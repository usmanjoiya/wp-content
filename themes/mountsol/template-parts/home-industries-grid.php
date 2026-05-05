<?php
/**
 * Home: industries grid (Next: Home "Built for the Trades" section).
 *
 * @package MountSol
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$d   = mountsol_get_home_page_data();
$bft = isset( $d['built_for_trades'] ) && is_array( $d['built_for_trades'] ) ? $d['built_for_trades'] : array();
?>
<section class="mountsol-home-section mountsol-home-section--white">
	<div class="container">
		<div class="mountsol-home-section__intro">
			<?php if ( ! empty( $bft['title'] ) ) : ?>
				<h2 class="mountsol-home-section__title"><?php echo esc_html( (string) $bft['title'] ); ?></h2>
			<?php endif; ?>
			<?php if ( ! empty( $bft['subtitle'] ) ) : ?>
				<p class="mountsol-home-section__lede"><?php echo esc_html( (string) $bft['subtitle'] ); ?></p>
			<?php endif; ?>
		</div>
		<div class="mountsol-home-grid mountsol-home-grid--4">
			<?php
			foreach ( (array) ( $bft['industries'] ?? array() ) as $row ) :
				$slug = isset( $row['slug'] ) ? (string) $row['slug'] : '';
				$icon = isset( $row['icon'] ) ? (string) $row['icon'] : 'wind';
				if ( $slug === '' ) {
					continue;
				}
				?>
				<a class="mountsol-home-icard" href="<?php echo esc_url( mountsol_url( '/industries/' . $slug ) ); ?>">
					<div class="mountsol-home-icard__icon" aria-hidden="true">
						<?php mountsol_home_icon( $icon, array( 'size' => 28, 'class' => 'mountsol-home-icon mountsol-home-icon--on-dark' ) ); ?>
					</div>
					<h3 class="mountsol-home-icard__title"><?php echo esc_html( (string) ( $row['title'] ?? '' ) ); ?></h3>
					<p class="mountsol-home-icard__desc"><?php echo esc_html( (string) ( $row['description'] ?? '' ) ); ?></p>
					<div class="mountsol-home-icard__link">
						<span><?php esc_html_e( 'Explore', 'mountsol' ); ?></span>
						<?php mountsol_home_icon( 'arrow-right', array( 'size' => 16, 'class' => 'mountsol-home-icard__arrow' ) ); ?>
					</div>
				</a>
			<?php endforeach; ?>
		</div>
	</div>
</section>


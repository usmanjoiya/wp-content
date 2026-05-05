<?php
/**
 * Home: key features grid.
 *
 * @package MountSol
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$d  = mountsol_get_home_page_data();
$kf = isset( $d['key_features'] ) && is_array( $d['key_features'] ) ? $d['key_features'] : array();
?>
<section class="mountsol-home-section mountsol-home-section--white">
	<div class="container">
		<div class="mountsol-home-section__intro">
			<?php if ( ! empty( $kf['eyebrow'] ) ) : ?>
				<span class="mountsol-home-pill mountsol-home-pill--dark"><?php echo esc_html( (string) $kf['eyebrow'] ); ?></span>
			<?php endif; ?>
			<?php if ( ! empty( $kf['title'] ) ) : ?>
				<h2 class="mountsol-home-section__title"><?php echo esc_html( (string) $kf['title'] ); ?></h2>
			<?php endif; ?>
			<?php if ( ! empty( $kf['subtitle'] ) ) : ?>
				<p class="mountsol-home-section__lede"><?php echo esc_html( (string) $kf['subtitle'] ); ?></p>
			<?php endif; ?>
		</div>
		<div class="mountsol-home-grid mountsol-home-grid--4">
			<?php foreach ( (array) ( $kf['features'] ?? array() ) as $f ) : ?>
				<?php
				$href = isset( $f['href'] ) ? (string) $f['href'] : '';
				$icon = isset( $f['icon'] ) ? (string) $f['icon'] : 'zap';
				?>
				<a class="mountsol-home-fcard" href="<?php echo esc_url( mountsol_url( $href ) ); ?>">
					<div class="mountsol-home-fcard__icon" aria-hidden="true">
						<?php mountsol_home_icon( $icon, array( 'size' => 22, 'class' => 'mountsol-home-icon mountsol-home-icon--on-dark' ) ); ?>
					</div>
					<h3 class="mountsol-home-fcard__title"><?php echo esc_html( (string) ( $f['title'] ?? '' ) ); ?></h3>
					<p class="mountsol-home-fcard__desc"><?php echo esc_html( (string) ( $f['description'] ?? '' ) ); ?></p>
					<div class="mountsol-home-fcard__more">
						<span><?php esc_html_e( 'Learn more', 'mountsol' ); ?></span>
						<?php mountsol_home_icon( 'arrow-right', array( 'size' => 16, 'class' => 'mountsol-home-fcard__arrow' ) ); ?>
					</div>
				</a>
			<?php endforeach; ?>
		</div>
		<?php if ( ! empty( $kf['more_text'] ) && ! empty( $kf['more_href'] ) ) : ?>
			<div class="mountsol-home-section__actions">
				<a class="btn btn--outline btn--lg mountsol-home-btn-outline-dark" href="<?php echo esc_url( mountsol_url( (string) $kf['more_href'] ) ); ?>">
					<?php echo esc_html( (string) $kf['more_text'] ); ?>
					<?php mountsol_svg_icon( 'ArrowRight', array( 'size' => 16, 'class' => 'mountsol-home-icon' ) ); ?>
				</a>
			</div>
		<?php endif; ?>
	</div>
</section>


<?php
/**
 * Home: pricing preview section.
 *
 * @package MountSol
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$d  = mountsol_get_home_page_data();
$pp = isset( $d['pricing_preview'] ) && is_array( $d['pricing_preview'] ) ? $d['pricing_preview'] : array();
?>
<section class="mountsol-home-section mountsol-home-section--white">
	<div class="container">
		<div class="mountsol-home-section__intro">
			<?php if ( ! empty( $pp['eyebrow'] ) ) : ?>
				<span class="mountsol-home-pill mountsol-home-pill--dark"><?php echo esc_html( (string) $pp['eyebrow'] ); ?></span>
			<?php endif; ?>
			<?php if ( ! empty( $pp['title'] ) ) : ?>
				<h2 class="mountsol-home-section__title"><?php echo esc_html( (string) $pp['title'] ); ?></h2>
			<?php endif; ?>
			<?php if ( ! empty( $pp['subtitle'] ) ) : ?>
				<p class="mountsol-home-section__lede"><?php echo esc_html( (string) $pp['subtitle'] ); ?></p>
			<?php endif; ?>
		</div>

		<div class="mountsol-home-grid mountsol-home-grid--3">
			<?php foreach ( (array) ( $pp['plans'] ?? array() ) as $plan ) : ?>
				<?php
				$is_featured = ! empty( $plan['featured'] );
				?>
				<div class="mountsol-home-price<?php echo $is_featured ? ' mountsol-home-price--featured' : ''; ?>">
					<div class="mountsol-home-price__top">
						<h3 class="mountsol-home-price__name"><?php echo esc_html( (string) ( $plan['name'] ?? '' ) ); ?></h3>
						<p class="mountsol-home-price__desc"><?php echo esc_html( (string) ( $plan['description'] ?? '' ) ); ?></p>
						<p class="mountsol-home-price__price">
							<span class="mountsol-home-price__value"><?php echo esc_html( (string) ( $plan['price'] ?? '' ) ); ?></span>
							<span class="mountsol-home-price__per"><?php esc_html_e( '/month', 'mountsol' ); ?></span>
						</p>
					</div>
					<ul class="mountsol-home-price__list" role="list">
						<?php foreach ( (array) ( $plan['features'] ?? array() ) as $line ) : ?>
							<li>
								<span class="mountsol-home-price__check" aria-hidden="true">
									<?php mountsol_svg_icon( 'Check', array( 'size' => 18, 'class' => 'mountsol-home-icon mountsol-home-icon--accent' ) ); ?>
								</span>
								<span><?php echo esc_html( (string) $line ); ?></span>
							</li>
						<?php endforeach; ?>
					</ul>
					<div class="mountsol-home-price__actions">
						<a class="btn btn--<?php echo $is_featured ? 'accent' : 'outline'; ?> btn--lg" href="<?php echo esc_url( mountsol_url( (string) ( $pp['plan_href'] ?? '/pricing' ) ) ); ?>">
							<?php echo esc_html( (string) ( $pp['plan_cta'] ?? __( 'Get Started', 'mountsol' ) ) ); ?>
							<?php mountsol_svg_icon( 'ArrowRight', array( 'size' => 16, 'class' => 'mountsol-home-icon' ) ); ?>
						</a>
					</div>
				</div>
			<?php endforeach; ?>
		</div>

		<?php if ( ! empty( $pp['compare'] ) && ! empty( $pp['compare_href'] ) ) : ?>
			<div class="mountsol-home-section__actions">
				<a class="btn btn--outline btn--lg mountsol-home-btn-outline-dark" href="<?php echo esc_url( mountsol_url( (string) $pp['compare_href'] ) ); ?>">
					<?php echo esc_html( (string) $pp['compare'] ); ?>
					<?php mountsol_svg_icon( 'ArrowRight', array( 'size' => 16, 'class' => 'mountsol-home-icon' ) ); ?>
				</a>
			</div>
		<?php endif; ?>
	</div>
</section>


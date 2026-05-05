<?php
/**
 * Bottom CTA band.
 *
 * @package MountSol
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$title          = isset( $title ) ? (string) $title : '';
$description    = isset( $description ) ? (string) $description : '';
$primary_text   = isset( $primary_text ) ? (string) $primary_text : __( 'Book Demo', 'mountsol' );
$primary_href   = isset( $primary_href ) ? (string) $primary_href : '/demo';
$secondary_text = isset( $secondary_text ) ? (string) $secondary_text : '';
$secondary_href = isset( $secondary_href ) ? (string) $secondary_href : '';
$show_fineprint = ! isset( $show_fineprint ) || $show_fineprint;
?>
<section class="mountsol-cta-band">
	<div class="mountsol-cta-band__bg" aria-hidden="true"></div>
	<div class="mountsol-cta-band__glow1" aria-hidden="true"></div>
	<div class="mountsol-cta-band__glow2" aria-hidden="true"></div>
	<div class="mountsol-cta-band__grid" aria-hidden="true"></div>
	<div class="mountsol-cta-band__inner">
		<?php if ( $title !== '' ) : ?>
			<h2 class="mountsol-cta-band__title"><?php echo esc_html( $title ); ?></h2>
		<?php endif; ?>
		<?php if ( $description !== '' ) : ?>
			<p class="mountsol-cta-band__desc"><?php echo esc_html( $description ); ?></p>
		<?php endif; ?>
		<div class="mountsol-cta-band__actions">
			<a class="mountsol-cta-band__btn mountsol-cta-band__btn--primary" href="<?php echo esc_url( mountsol_url( $primary_href ) ); ?>">
				<?php echo esc_html( $primary_text ); ?>
				<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
			</a>
			<?php if ( $secondary_text && $secondary_href ) : ?>
				<a class="mountsol-cta-band__btn mountsol-cta-band__btn--ghost" href="<?php echo esc_url( mountsol_url( $secondary_href ) ); ?>"><?php echo esc_html( $secondary_text ); ?></a>
			<?php endif; ?>
		</div>
		<?php if ( $show_fineprint ) : ?>
			<p class="mountsol-cta-band__fineprint"><?php esc_html_e( 'No credit card required. 14-day free trial.', 'mountsol' ); ?></p>
		<?php endif; ?>
	</div>
</section>

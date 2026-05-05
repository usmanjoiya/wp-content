<?php
/**
 * Top announcement bar (matches Next announcement strip).
 *
 * @package MountSol
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<div class="announcement-bar" id="mountsol-announcement">
	<div class="container announcement-bar__inner">
		<div class="announcement-bar__left">
			<span class="announcement-bar__eyebrow"><?php esc_html_e( 'Stay Ahead:', 'mountsol' ); ?></span>
			<a class="announcement-bar__link" href="<?php echo esc_url( mountsol_url( '/resources' ) ); ?>">
				<?php esc_html_e( 'Get your free service business growth guide', 'mountsol' ); ?>
			</a>
			<svg class="announcement-bar__chev" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
		</div>
		<div class="announcement-bar__right">
			<a class="announcement-bar__meta" href="tel:+16282657724">
				<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
				<?php esc_html_e( '+1 628 265 7724', 'mountsol' ); ?>
			</a>
			<a class="announcement-bar__meta" href="<?php echo esc_url( mountsol_url( '/resources' ) ); ?>"><?php esc_html_e( 'Resource Hub', 'mountsol' ); ?></a>
			<a class="announcement-bar__meta" href="<?php echo esc_url( mountsol_url( '/login' ) ); ?>"><?php esc_html_e( 'Sign In', 'mountsol' ); ?></a>
		</div>
	</div>
</div>

<?php
/**
 * Site footer (matches Next footer component).
 *
 * @package MountSol
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$footer_links = array(
	'product'  => array(
		array( 'label' => __( 'Features', 'mountsol' ), 'path' => '/features' ),
		array( 'label' => __( 'Pricing', 'mountsol' ), 'path' => '/pricing' ),
		array( 'label' => __( 'Book Demo', 'mountsol' ), 'path' => '/demo' ),
		array( 'label' => __( 'Industries', 'mountsol' ), 'path' => '/industries' ),
	),
	'features' => array(
		array( 'label' => __( 'Scheduling', 'mountsol' ), 'path' => '/features/dispatch-board' ),
		array( 'label' => __( 'Dispatching', 'mountsol' ), 'path' => '/features/dispatch-board' ),
		array( 'label' => __( 'Customer Portal', 'mountsol' ), 'path' => '/features/customer-portal' ),
		array( 'label' => __( 'Payments', 'mountsol' ), 'path' => '/features/payment-processing' ),
		array( 'label' => __( 'Reporting', 'mountsol' ), 'path' => '/features/reporting' ),
	),
	'company'  => array(
		array( 'label' => __( 'About', 'mountsol' ), 'path' => '/about' ),
		array( 'label' => __( 'Resources', 'mountsol' ), 'path' => '/resources' ),
		array( 'label' => __( 'Contact', 'mountsol' ), 'path' => '/contact' ),
		array( 'label' => __( 'Login', 'mountsol' ), 'path' => '/login' ),
	),
	'legal'    => array(
		array( 'label' => __( 'Privacy Policy', 'mountsol' ), 'path' => '#' ),
		array( 'label' => __( 'Terms of Service', 'mountsol' ), 'path' => '#' ),
		array( 'label' => __( 'Security', 'mountsol' ), 'path' => '#' ),
	),
);
?>
<footer class="site-footer">
	<div class="site-footer__glow site-footer__glow--tl" aria-hidden="true"></div>
	<div class="site-footer__glow site-footer__glow--br" aria-hidden="true"></div>
	<div class="site-footer__inner">
		<div class="site-footer__newsletter">
			<div class="container site-footer__newsletter-row">
				<div>
					<h3 class="site-footer__newsletter-title"><?php esc_html_e( 'Stay ahead of the competition', 'mountsol' ); ?></h3>
					<p class="site-footer__newsletter-lede"><?php esc_html_e( 'Get product updates and industry insights delivered weekly.', 'mountsol' ); ?></p>
				</div>
				<form class="site-footer__newsletter-form" action="#" method="post">
					<label class="screen-reader-text" for="footer-newsletter-email"><?php esc_html_e( 'Email', 'mountsol' ); ?></label>
					<input id="footer-newsletter-email" type="email" name="email" placeholder="<?php esc_attr_e( 'Enter your email', 'mountsol' ); ?>" autocomplete="email">
					<button type="submit" class="btn btn--accent"><?php esc_html_e( 'Subscribe', 'mountsol' ); ?></button>
				</form>
			</div>
		</div>

		<div class="container site-footer__grid">
			<div class="site-footer__brand">
				<a class="site-footer__brand-link" href="<?php echo esc_url( home_url( '/' ) ); ?>">
					<span class="site-footer__mark" aria-hidden="true">M</span>
					<span class="site-footer__name">MountSol</span>
				</a>
				<p class="site-footer__tagline">
					<?php esc_html_e( 'The all-in-one field service platform. Win more jobs, deliver better service, and get paid faster.', 'mountsol' ); ?>
				</p>
				<div class="site-footer__contact">
					<a class="site-footer__contact-link" href="mailto:info@mountsol.org">
						<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
						info@mountsol.org
					</a>
					<a class="site-footer__contact-link" href="tel:+16282657724">
						<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
						<?php esc_html_e( '+1 628 265 7724', 'mountsol' ); ?>
					</a>
				</div>
			</div>

			<div>
				<h4 class="site-footer__heading"><?php esc_html_e( 'Product', 'mountsol' ); ?></h4>
				<ul class="site-footer__links" role="list">
					<?php foreach ( $footer_links['product'] as $link ) : ?>
						<li><a href="<?php echo esc_url( mountsol_url( $link['path'] ) ); ?>"><?php echo esc_html( $link['label'] ); ?></a></li>
					<?php endforeach; ?>
				</ul>
			</div>

			<div>
				<h4 class="site-footer__heading"><?php esc_html_e( 'Features', 'mountsol' ); ?></h4>
				<ul class="site-footer__links" role="list">
					<?php foreach ( $footer_links['features'] as $link ) : ?>
						<li><a href="<?php echo esc_url( mountsol_url( $link['path'] ) ); ?>"><?php echo esc_html( $link['label'] ); ?></a></li>
					<?php endforeach; ?>
				</ul>
			</div>

			<div>
				<h4 class="site-footer__heading"><?php esc_html_e( 'Company', 'mountsol' ); ?></h4>
				<ul class="site-footer__links" role="list">
					<?php foreach ( $footer_links['company'] as $link ) : ?>
						<li><a href="<?php echo esc_url( mountsol_url( $link['path'] ) ); ?>"><?php echo esc_html( $link['label'] ); ?></a></li>
					<?php endforeach; ?>
				</ul>
			</div>

			<div>
				<h4 class="site-footer__heading"><?php esc_html_e( 'Legal', 'mountsol' ); ?></h4>
				<ul class="site-footer__links" role="list">
					<?php foreach ( $footer_links['legal'] as $link ) : ?>
						<li><a href="#"><?php echo esc_html( $link['label'] ); ?></a></li>
					<?php endforeach; ?>
				</ul>
			</div>
		</div>

		<div class="site-footer__bar">
			<div class="container site-footer__bar-inner">
				<p class="site-footer__copy">
					&copy; <?php echo esc_html( (string) gmdate( 'Y' ) ); ?> MountSol. <?php esc_html_e( 'All rights reserved.', 'mountsol' ); ?>
				</p>
				<a class="site-footer__cta-link" href="<?php echo esc_url( mountsol_url( '/demo' ) ); ?>">
					<?php esc_html_e( 'Get Started Today', 'mountsol' ); ?>
					<svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
				</a>
			</div>
		</div>
	</div>
</footer>

<?php
/**
 * Primary site header: announcement offset + main nav / mega menus.
 *
 * @package MountSol
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! isset( $nav ) ) {
	$nav = mountsol_get_nav_data();
}

$c        = $nav['commercial'];
$r        = $nav['residential'];
$p        = $nav['products'];
$res      = $nav['resources'];
$is_home  = is_front_page();
$nav_mode = $is_home ? 'transparent' : 'solid';
?>
<header class="site-header" id="site-header" data-nav-mode="<?php echo esc_attr( $nav_mode ); ?>">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'mountsol' ); ?></a>
	<nav class="site-nav" id="site-nav" aria-label="<?php esc_attr_e( 'Primary', 'mountsol' ); ?>">
		<div class="container site-nav__inner">
			<a class="site-nav__brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
				<span class="site-nav__mark" aria-hidden="true">M</span>
				<span class="site-nav__name">MountSol</span>
			</a>

			<div class="site-nav__megas" id="desktop-megas">
				<!-- Commercial -->
				<div class="mega" data-mega-id="commercial">
					<button type="button" class="mega__trigger nav-text" aria-expanded="false" aria-controls="panel-commercial" id="btn-commercial">
						<?php echo esc_html( $c['label'] ); ?>
						<?php mountsol_icon_chevron(); ?>
					</button>
					<div class="mega__panel mega__panel--wide" id="panel-commercial" role="region" aria-label="<?php echo esc_attr( $c['label'] ); ?>">
						<div class="mega__grid mega__grid--4">
							<?php
							foreach ( $c['columns'] as $col ) {
								mountsol_nav_mega_column( $col['title'], $col['links'] );
							}
							?>
							<div class="mega__cta">
								<h4 class="mega__cta-title"><?php echo esc_html( $c['cta']['title'] ); ?></h4>
								<p class="mega__cta-text"><?php echo esc_html( $c['cta']['text'] ); ?></p>
								<a class="btn btn--accent btn--block" href="<?php echo esc_url( mountsol_url( $c['cta']['path'] ) ); ?>"><?php echo esc_html( $c['cta']['button'] ); ?></a>
							</div>
						</div>
					</div>
				</div>

				<!-- Residential -->
				<div class="mega" data-mega-id="residential">
					<button type="button" class="mega__trigger nav-text" aria-expanded="false" aria-controls="panel-residential" id="btn-residential">
						<?php echo esc_html( $r['label'] ); ?>
						<?php mountsol_icon_chevron(); ?>
					</button>
					<div class="mega__panel mega__panel--wide" id="panel-residential" role="region" aria-label="<?php echo esc_attr( $r['label'] ); ?>">
						<div class="mega__grid mega__grid--4">
							<?php
							foreach ( $r['columns'] as $col ) {
								mountsol_nav_mega_column( $col['title'], $col['links'] );
							}
							?>
							<div class="mega__cta">
								<h4 class="mega__cta-title"><?php echo esc_html( $r['cta']['title'] ); ?></h4>
								<p class="mega__cta-text"><?php echo esc_html( $r['cta']['text'] ); ?></p>
								<a class="btn btn--accent btn--block" href="<?php echo esc_url( mountsol_url( $r['cta']['path'] ) ); ?>"><?php echo esc_html( $r['cta']['button'] ); ?></a>
							</div>
						</div>
					</div>
				</div>

				<!-- Products -->
				<div class="mega mega--center" data-mega-id="products">
					<button type="button" class="mega__trigger nav-text" aria-expanded="false" aria-controls="panel-products" id="btn-products">
						<?php echo esc_html( $p['label'] ); ?>
						<?php mountsol_icon_chevron(); ?>
					</button>
					<div class="mega__panel mega__panel--mid" id="panel-products" role="region" aria-label="<?php echo esc_attr( $p['label'] ); ?>">
						<div class="mega__grid mega__grid--3">
							<?php
							foreach ( $p['columns'] as $col ) {
								mountsol_nav_mega_column( $col['title'], $col['links'] );
							}
							?>
							<div class="mega__actions">
								<a class="btn btn--outline btn--block mega__action" href="<?php echo esc_url( mountsol_url( '/features' ) ); ?>"><?php esc_html_e( 'View All Features', 'mountsol' ); ?></a>
								<a class="btn btn--accent btn--block mega__action" href="<?php echo esc_url( mountsol_url( '/demo' ) ); ?>"><?php esc_html_e( 'Get Demo', 'mountsol' ); ?></a>
							</div>
						</div>
					</div>
				</div>

				<!-- Resources -->
				<div class="mega mega--right" data-mega-id="resources">
					<button type="button" class="mega__trigger nav-text" aria-expanded="false" aria-controls="panel-resources" id="btn-resources">
						<?php echo esc_html( $res['label'] ); ?>
						<?php mountsol_icon_chevron(); ?>
					</button>
					<div class="mega__panel mega__panel--resources" id="panel-resources" role="region" aria-label="<?php echo esc_attr( $res['label'] ); ?>">
						<div class="mega__grid mega__grid--4">
							<?php
							foreach ( $res['columns'] as $col ) {
								mountsol_nav_mega_column( $col['title'], $col['links'] );
							}
							?>
							<div class="mega__newsletter">
								<h4 class="mega__heading"><?php esc_html_e( 'Newsletter', 'mountsol' ); ?></h4>
								<p class="mega__newsletter-text"><?php esc_html_e( 'Get tips and insights delivered weekly.', 'mountsol' ); ?></p>
								<form class="mega__newsletter-form" action="#" method="post">
									<label class="screen-reader-text" for="nav-newsletter-email"><?php esc_html_e( 'Email', 'mountsol' ); ?></label>
									<input id="nav-newsletter-email" type="email" name="email" placeholder="<?php esc_attr_e( 'Enter email', 'mountsol' ); ?>" autocomplete="email">
									<button type="submit" class="btn btn--accent btn--block"><?php esc_html_e( 'Subscribe', 'mountsol' ); ?></button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="site-nav__cta">
				<a class="btn btn--accent btn--nav-cta" href="<?php echo esc_url( mountsol_url( '/demo' ) ); ?>"><?php esc_html_e( 'Get Demo', 'mountsol' ); ?></a>
			</div>

			<button type="button" class="site-nav__burger" aria-expanded="false" aria-controls="mobile-drawer" id="mobile-menu-toggle">
				<span class="screen-reader-text"><?php esc_html_e( 'Menu', 'mountsol' ); ?></span>
				<svg class="icon-menu" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" aria-hidden="true"><path stroke-linecap="round" stroke-width="2" d="M4 7h16M4 12h16M4 17h16"/></svg>
				<svg class="icon-close" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" aria-hidden="true" hidden><path stroke-linecap="round" stroke-width="2" d="M6 6l12 12M18 6L6 18"/></svg>
			</button>
		</div>

		<div class="mobile-drawer" id="mobile-drawer" hidden>
			<div class="container mobile-drawer__inner">
				<?php mountsol_mobile_nav_section( __( 'Commercial', 'mountsol' ), array_slice( $c['columns'][0]['links'], 0, 4 ) ); ?>
				<?php mountsol_mobile_nav_section( __( 'Residential', 'mountsol' ), array_slice( $r['columns'][0]['links'], 0, 4 ) ); ?>
				<div class="mobile-drawer__section">
					<h4 class="mega__heading"><?php esc_html_e( 'Products', 'mountsol' ); ?></h4>
					<a class="mobile-drawer__link" href="<?php echo esc_url( mountsol_url( '/features' ) ); ?>"><?php esc_html_e( 'All Features', 'mountsol' ); ?></a>
					<a class="mobile-drawer__link" href="<?php echo esc_url( mountsol_url( '/pricing' ) ); ?>"><?php esc_html_e( 'Pricing', 'mountsol' ); ?></a>
				</div>
				<div class="mobile-drawer__section">
					<h4 class="mega__heading"><?php esc_html_e( 'Resources', 'mountsol' ); ?></h4>
					<a class="mobile-drawer__link" href="<?php echo esc_url( mountsol_url( '/resources' ) ); ?>"><?php esc_html_e( 'Blog & Guides', 'mountsol' ); ?></a>
					<a class="mobile-drawer__link" href="<?php echo esc_url( mountsol_url( '/about' ) ); ?>"><?php esc_html_e( 'About', 'mountsol' ); ?></a>
					<a class="mobile-drawer__link" href="<?php echo esc_url( mountsol_url( '/contact' ) ); ?>"><?php esc_html_e( 'Contact', 'mountsol' ); ?></a>
				</div>
				<div class="mobile-drawer__actions">
					<a class="btn btn--accent btn--block" href="<?php echo esc_url( mountsol_url( '/demo' ) ); ?>"><?php esc_html_e( 'Get Demo', 'mountsol' ); ?></a>
					<a class="btn btn--outline btn--block" href="<?php echo esc_url( mountsol_url( '/login' ) ); ?>"><?php esc_html_e( 'Sign In', 'mountsol' ); ?></a>
				</div>
			</div>
		</div>
	</nav>
</header>

<div class="mobile-sticky-cta" aria-hidden="false">
	<a class="btn btn--accent btn--block mobile-sticky-cta__btn" href="<?php echo esc_url( mountsol_url( '/demo' ) ); ?>">
		<?php esc_html_e( 'Get Demo', 'mountsol' ); ?>
		<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
	</a>
</div>

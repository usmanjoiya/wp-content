<?php
/**
 * Home hero (reference: Mountsol.org/components/hero.tsx).
 *
 * @package MountSol
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$hero_image = get_template_directory_uri() . '/assets/images/hero-background.jpg';
$home       = mountsol_get_home_page_data();
$hero       = isset( $home['hero'] ) && is_array( $home['hero'] ) ? $home['hero'] : array();
$sec        = isset( $hero['secondary'] ) && is_array( $hero['secondary'] ) ? $hero['secondary'] : array();
?>
<section class="home-hero">
	<div class="home-hero__bg" style="background-image: url('<?php echo esc_url( $hero_image ); ?>');" role="img" aria-label="<?php esc_attr_e( 'Field service technicians working', 'mountsol' ); ?>"></div>
	<div class="home-hero__overlay" aria-hidden="true"></div>
	<div class="home-hero__content">
		<div class="container">
			<div class="home-hero__inner">
				<h1 class="home-hero__title"><?php esc_html_e( 'The Field Service Platform Built to Grow Your Business', 'mountsol' ); ?></h1>
				<p class="home-hero__lede">
					<?php esc_html_e( 'Book more jobs, dispatch faster, manage crews, send quotes, collect payments, and track performance from one powerful platform.', 'mountsol' ); ?>
				</p>
				<div class="home-hero__form">
					<label class="screen-reader-text" for="hero-email"><?php esc_html_e( 'Work email', 'mountsol' ); ?></label>
					<input class="home-hero__input" id="hero-email" type="email" name="email" placeholder="<?php esc_attr_e( 'Enter your work email', 'mountsol' ); ?>" autocomplete="email">
					<a class="btn btn--accent btn--lg" href="<?php echo esc_url( mountsol_url( '/demo' ) ); ?>">
						<?php esc_html_e( 'Get Started', 'mountsol' ); ?>
						<?php mountsol_home_icon( 'arrow-right', array( 'size' => 22, 'class' => 'mountsol-home-icon' ) ); ?>
					</a>
				</div>
				<div class="home-hero__secondary">
					<?php if ( ! empty( $sec['cta'] ) && ! empty( $sec['href'] ) ) : ?>
						<a class="btn btn--lg btn--hero-ghost" href="<?php echo esc_url( mountsol_url( (string) $sec['href'] ) ); ?>"><?php echo esc_html( (string) $sec['cta'] ); ?></a>
					<?php endif; ?>
					<?php if ( ! empty( $sec['hint'] ) ) : ?>
						<p class="home-hero__hint"><?php echo esc_html( (string) $sec['hint'] ); ?></p>
					<?php endif; ?>
				</div>
				<ul class="home-hero__badges" role="list">
					<?php foreach ( (array) ( $hero['trust'] ?? array() ) as $badge ) : ?>
						<li class="home-hero__badge">
							<div class="home-hero__badge-icon" aria-hidden="true">
								<?php
								$ic = isset( $badge['icon'] ) ? (string) $badge['icon'] : 'shield';
								mountsol_home_icon( $ic, array( 'size' => 20, 'class' => 'mountsol-home-icon' ) );
								?>
							</div>
							<div>
								<span class="home-hero__badge-label"><?php echo esc_html( (string) ( $badge['label'] ?? '' ) ); ?></span>
								<span class="home-hero__badge-sub"><?php echo esc_html( (string) ( $badge['sublabel'] ?? '' ) ); ?></span>
							</div>
						</li>
					<?php endforeach; ?>
				</ul>
			</div>
			<div class="home-hero__strip">
				<?php if ( ! empty( $hero['trust_strip'] ) ) : ?>
					<p class="home-hero__strip-label"><?php echo esc_html( (string) $hero['trust_strip'] ); ?></p>
				<?php endif; ?>
				<div class="home-hero__logos">
					<?php foreach ( (array) ( $hero['logos'] ?? array() ) as $logo ) : ?>
						<span class="home-hero__logo">
							<span class="home-hero__logo-mark" aria-hidden="true"><?php echo esc_html( (string) ( $logo['initials'] ?? '' ) ); ?></span>
							<?php if ( ! empty( $logo['name'] ) ) : ?>
								<span class="home-hero__logo-name"><?php echo esc_html( (string) $logo['name'] ); ?></span>
							<?php endif; ?>
						</span>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
	</div>
</section>

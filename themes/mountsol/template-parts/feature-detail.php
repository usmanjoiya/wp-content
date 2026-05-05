<?php
/**
 * Feature detail (Next components/feature-page.tsx).
 *
 * @package MountSol
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! isset( $content ) || ! is_array( $content ) ) {
	return;
}
if ( ! isset( $content['benefits'], $content['use_cases'] ) || ! is_array( $content['benefits'] ) || ! is_array( $content['use_cases'] ) ) {
	return;
}

$fc = $content;
?>
<section class="mountsol-feature-hero">
	<div class="mountsol-feature-hero__inner">
		<div class="mountsol-feature-hero__layout">
			<div>
				<p class="mountsol-feature-hero__eyebrow"><?php echo esc_html( (string) ( $fc['subtitle'] ?? '' ) ); ?></p>
				<h1 class="mountsol-feature-hero__title"><?php echo esc_html( (string) ( $fc['title'] ?? '' ) ); ?></h1>
				<p class="mountsol-feature-hero__desc"><?php echo esc_html( (string) ( $fc['description'] ?? '' ) ); ?></p>
				<a class="mountsol-feature-hero__link" href="<?php echo esc_url( mountsol_url( '/demo' ) ); ?>"><?php esc_html_e( 'See it in action →', 'mountsol' ); ?></a>
			</div>
		</div>
	</div>
</section>

<section class="mountsol-inner">
	<div class="container">
		<h2 class="mountsol-inner__title"><?php esc_html_e( 'Key Benefits', 'mountsol' ); ?></h2>
		<p class="mountsol-inner__lede"><?php esc_html_e( 'See what makes this feature powerful for your business.', 'mountsol' ); ?></p>
		<div class="mountsol-grid-cards mountsol-grid-cards--3">
			<?php foreach ( $fc['benefits'] as $row ) : ?>
				<div class="mountsol-prose-card">
					<h3 class="mountsol-prose-card__title"><?php echo esc_html( (string) ( $row['title'] ?? '' ) ); ?></h3>
					<p class="mountsol-prose-card__text"><?php echo esc_html( (string) ( $row['description'] ?? '' ) ); ?></p>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<section class="mountsol-inner mountsol-inner--alt">
	<div class="container">
		<h2 class="mountsol-inner__title"><?php esc_html_e( 'Use Cases', 'mountsol' ); ?></h2>
		<p class="mountsol-inner__lede"><?php esc_html_e( 'How this feature delivers value in different scenarios.', 'mountsol' ); ?></p>
		<div class="mountsol-grid-cards mountsol-grid-cards--2">
			<?php foreach ( $fc['use_cases'] as $row ) : ?>
				<div class="mountsol-prose-card mountsol-prose-card--wide">
					<h3 class="mountsol-prose-card__title"><?php echo esc_html( (string) ( $row['title'] ?? '' ) ); ?></h3>
					<p class="mountsol-prose-card__text"><?php echo esc_html( (string) ( $row['description'] ?? '' ) ); ?></p>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>
<?php
get_template_part(
	'template-parts/cta-section',
	null,
	array(
		'title'        => __( 'Transform Your Business Today', 'mountsol' ),
		'description'  => __( 'Experience the power of this feature with a personalized demo.', 'mountsol' ),
		'primary_text' => __( 'Book Demo', 'mountsol' ),
		'primary_href' => '/demo',
	)
);

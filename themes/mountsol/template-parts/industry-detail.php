<?php
/**
 * Industry detail (Next components/industry-page.tsx).
 *
 * @package MountSol
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! isset( $content ) || ! is_array( $content ) ) {
	return;
}
if ( ! isset( $content['challenges'], $content['solutions'], $content['relevant_features'] ) ) {
	return;
}

$ic       = $content;
$subtitle = (string) ( $ic['subtitle'] ?? '' );
$mark     = $subtitle !== '' ? ( function_exists( 'mb_substr' ) ? mb_substr( $subtitle, 0, 1 ) : substr( $subtitle, 0, 1 ) ) : 'M';
?>
<section class="mountsol-industry-hero">
	<div class="mountsol-industry-hero__inner">
		<div class="mountsol-industry-hero__mark" aria-hidden="true"><?php echo esc_html( $mark ); ?></div>
		<p class="mountsol-industry-hero__eyebrow"><?php echo esc_html( $subtitle ); ?></p>
		<h1 class="mountsol-industry-hero__title"><?php echo esc_html( (string) ( $ic['title'] ?? '' ) ); ?></h1>
		<p class="mountsol-industry-hero__desc"><?php echo esc_html( (string) ( $ic['description'] ?? '' ) ); ?></p>
		<a class="mountsol-feature-hero__link" href="<?php echo esc_url( mountsol_url( '/demo' ) ); ?>"><?php esc_html_e( 'See MountSol for your industry →', 'mountsol' ); ?></a>
	</div>
</section>

<section class="mountsol-inner">
	<div class="container">
		<h2 class="mountsol-inner__title"><?php esc_html_e( 'Common Challenges', 'mountsol' ); ?></h2>
		<div class="mountsol-grid-cards mountsol-grid-cards--3">
			<?php foreach ( $ic['challenges'] as $row ) : ?>
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
		<h2 class="mountsol-inner__title"><?php esc_html_e( 'How MountSol Helps', 'mountsol' ); ?></h2>
		<div class="mountsol-grid-cards mountsol-grid-cards--2">
			<?php foreach ( $ic['solutions'] as $row ) : ?>
				<div class="mountsol-prose-card mountsol-prose-card--wide">
					<h3 class="mountsol-prose-card__title"><?php echo esc_html( (string) ( $row['title'] ?? '' ) ); ?></h3>
					<p class="mountsol-prose-card__text"><?php echo esc_html( (string) ( $row['description'] ?? '' ) ); ?></p>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<section class="mountsol-inner">
	<div class="container">
		<h2 class="mountsol-inner__title">
			<?php
			printf(
				/* translators: %s: industry page title */
				esc_html__( 'Key Features for %s', 'mountsol' ),
				esc_html( (string) ( $ic['title'] ?? '' ) )
			);
			?>
		</h2>
		<div class="mountsol-feature-link-grid">
			<?php foreach ( $ic['relevant_features'] as $feat ) : ?>
				<a href="<?php echo esc_url( mountsol_url( (string) ( $feat['path'] ?? '/' ) ) ); ?>">
					<div class="mountsol-prose-card">
						<h3 class="mountsol-prose-card__title" style="text-align:center;margin:0;"><?php echo esc_html( (string) ( $feat['title'] ?? '' ) ); ?></h3>
					</div>
				</a>
			<?php endforeach; ?>
		</div>
	</div>
</section>
<?php
get_template_part(
	'template-parts/cta-section',
	null,
	array(
		'title'        => $subtitle !== '' ? sprintf(
			/* translators: %s: industry short label */
			__( 'Ready to transform your %s business?', 'mountsol' ),
			$subtitle
		) : __( 'Ready to get started?', 'mountsol' ),
		'description'  => $subtitle !== '' ? sprintf(
			/* translators: %s: short industry label (e.g. HVAC) */
			__( 'See how MountSol can help %s companies win more jobs and grow faster.', 'mountsol' ),
			$subtitle
		) : __( 'See how MountSol can help your company win more jobs and grow faster.', 'mountsol' ),
		'primary_text' => __( 'Book Demo', 'mountsol' ),
		'primary_href' => '/demo',
	)
);

<?php
/**
 * Pricing page (Next: app/pricing/page.tsx).
 *
 * @package MountSol
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();

get_template_part(
	'template-parts/simple-hero',
	null,
	array(
		'title'       => __( 'Simple, Transparent Pricing', 'mountsol' ),
		'subtitle'    => __( 'Pricing', 'mountsol' ),
		'description' => __( 'Choose the plan that fits your business. All plans include setup, training, and dedicated support.', 'mountsol' ),
	)
);

$data  = mountsol_get_pricing_page_data();
$plans = $data['plans'] ?? array();
?>
<section class="mountsol-inner mountsol-pricing-cards-wrap">
	<div class="container">
		<div class="mountsol-pricing-grid">
			<?php foreach ( $plans as $plan ) : ?>
				<?php
				$featured = ! empty( $plan['featured'] );
				$badge    = isset( $plan['badge'] ) ? (string) $plan['badge'] : '';
				?>
				<div class="mountsol-pricing-card<?php echo $featured ? ' mountsol-pricing-card--featured' : ''; ?>">
					<?php if ( $badge !== '' ) : ?>
						<div class="mountsol-pricing-badge<?php echo $featured ? ' mountsol-pricing-badge--accent' : ''; ?>">
							<?php mountsol_pricing_icon( 'sparkles' ); ?>
							<span><?php echo esc_html( $badge ); ?></span>
						</div>
					<?php endif; ?>
					<div class="mountsol-pricing-card__head">
						<div class="mountsol-pricing-card__name-row">
							<span class="mountsol-pricing-card__icon<?php echo $featured ? ' mountsol-pricing-card__icon--inv' : ''; ?>">
								<?php mountsol_pricing_icon( isset( $plan['icon'] ) ? (string) $plan['icon'] : 'zap' ); ?>
							</span>
							<h3 class="mountsol-pricing-card__name"><?php echo esc_html( (string) ( $plan['name'] ?? '' ) ); ?></h3>
						</div>
						<p class="mountsol-pricing-card__desc"><?php echo esc_html( (string) ( $plan['description'] ?? '' ) ); ?></p>
						<div class="mountsol-pricing-card__price">
							<span class="mountsol-pricing-card__amount"><?php echo esc_html( (string) ( $plan['price'] ?? '' ) ); ?></span>
							<span class="mountsol-pricing-card__period"><?php echo esc_html( (string) ( $plan['period'] ?? '' ) ); ?></span>
						</div>
						<a class="mountsol-pricing-card__cta<?php echo $featured ? ' mountsol-pricing-card__cta--on-dark' : ' btn btn--accent'; ?>" href="<?php echo esc_url( mountsol_url( (string) ( $plan['cta_link'] ?? '/demo' ) ) ); ?>">
							<?php echo esc_html( (string) ( $plan['cta'] ?? '' ) ); ?>
						</a>
					</div>
					<div class="mountsol-pricing-card__body">
						<?php
						$cats = isset( $plan['categories'] ) && is_array( $plan['categories'] ) ? $plan['categories'] : array();
						foreach ( $cats as $cat_title => $items ) :
							?>
							<div class="mountsol-pricing-cat">
								<h4 class="mountsol-pricing-cat__title"><?php echo esc_html( (string) $cat_title ); ?></h4>
								<ul class="mountsol-pricing-cat__list" role="list">
									<?php foreach ( (array) $items as $line ) : ?>
										<li>
											<span class="mountsol-pricing-check<?php echo $featured ? ' mountsol-pricing-check--inv' : ''; ?>" aria-hidden="true">
												<svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg>
											</span>
											<span><?php echo esc_html( (string) $line ); ?></span>
										</li>
									<?php endforeach; ?>
								</ul>
							</div>
						<?php endforeach; ?>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<section class="mountsol-inner mountsol-compare-section">
	<div class="container mountsol-compare-inner">
		<div class="mountsol-compare-intro">
			<h2 class="mountsol-inner__title"><?php esc_html_e( 'Feature Comparison', 'mountsol' ); ?></h2>
			<p class="mountsol-inner__lede" style="margin-bottom:0;"><?php esc_html_e( 'See what is included in each plan', 'mountsol' ); ?></p>
		</div>
		<div class="mountsol-compare-scroll">
			<table class="mountsol-compare-table">
				<thead>
					<tr>
						<th scope="col"><?php esc_html_e( 'Feature', 'mountsol' ); ?></th>
						<th scope="col">BASIC</th>
						<th scope="col" class="mountsol-compare-table__highlight"><?php esc_html_e( 'STANDARD', 'mountsol' ); ?></th>
						<th scope="col">PRO</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ( (array) ( $data['comparison'] ?? array() ) as $row ) : ?>
						<tr>
							<td><?php echo esc_html( (string) ( $row['category'] ?? '' ) ); ?></td>
							<td class="mountsol-compare-table__cell-center">
								<?php echo ! empty( $row['basic'] ) ? '<span class="mountsol-compare-yes" aria-label="' . esc_attr__( 'Yes', 'mountsol' ) . '">✓</span>' : '<span class="mountsol-compare-no">—</span>'; ?>
							</td>
							<td class="mountsol-compare-table__cell-center mountsol-compare-table__highlight">
								<?php echo ! empty( $row['standard'] ) ? '<span class="mountsol-compare-yes" aria-label="' . esc_attr__( 'Yes', 'mountsol' ) . '">✓</span>' : '<span class="mountsol-compare-no">—</span>'; ?>
							</td>
							<td class="mountsol-compare-table__cell-center">
								<?php echo ! empty( $row['pro'] ) ? '<span class="mountsol-compare-yes" aria-label="' . esc_attr__( 'Yes', 'mountsol' ) . '">✓</span>' : '<span class="mountsol-compare-no">—</span>'; ?>
							</td>
						</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>
</section>

<section class="mountsol-inner">
	<div class="container" style="max-width:48rem;">
		<h2 class="mountsol-inner__title"><?php esc_html_e( 'Frequently Asked Questions', 'mountsol' ); ?></h2>
		<p class="mountsol-inner__lede"><?php esc_html_e( 'Everything you need to know about our pricing', 'mountsol' ); ?></p>
		<div style="display:flex;flex-direction:column;gap:1rem;">
			<?php foreach ( (array) ( $data['faqs'] ?? array() ) as $faq ) : ?>
				<details class="mountsol-details mountsol-details--pricing">
					<summary><?php echo esc_html( (string) ( $faq['q'] ?? '' ) ); ?><span aria-hidden="true">▼</span></summary>
					<p><?php echo esc_html( (string) ( $faq['a'] ?? '' ) ); ?></p>
				</details>
			<?php endforeach; ?>
		</div>
	</div>
</section>
<?php
get_template_part(
	'template-parts/cta-section',
	null,
	array(
		'title'          => __( 'Not sure which plan fits your business?', 'mountsol' ),
		'description'    => __( 'Our team can help you find the right solution. Get a personalized demo today.', 'mountsol' ),
		'primary_text'   => __( 'Get Free Demo', 'mountsol' ),
		'primary_href'   => '/demo',
		'secondary_text' => __( 'Contact Sales', 'mountsol' ),
		'secondary_href' => '/contact',
	)
);

get_footer();

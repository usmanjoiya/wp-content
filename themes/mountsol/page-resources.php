<?php
/**
 * Resources page (Next: app/resources/page.tsx).
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
		'title'       => __( 'Resources & Learning', 'mountsol' ),
		'subtitle'    => __( 'Resources', 'mountsol' ),
		'description' => __( 'Access guides, articles, case studies, and more to help you maximize the value of MountSol.', 'mountsol' ),
	)
);

$data     = mountsol_get_resources_page_data();
$sections = isset( $data['sections'] ) && is_array( $data['sections'] ) ? $data['sections'] : array();
?>
<section class="mountsol-inner">
	<div class="container">
		<div class="mountsol-resources-stack">
			<?php foreach ( $sections as $block ) : ?>
				<?php
				$cat = isset( $block['category'] ) ? (string) $block['category'] : '';
				if ( $cat === '' ) {
					continue;
				}
				$items = isset( $block['items'] ) && is_array( $block['items'] ) ? $block['items'] : array();
				?>
				<div class="mountsol-resources-block">
					<h2 class="mountsol-resources-block__title"><?php echo esc_html( $cat ); ?></h2>
					<div class="mountsol-grid-cards mountsol-grid-cards--3">
						<?php foreach ( $items as $item ) : ?>
							<div class="mountsol-resource-card">
								<h3 class="mountsol-resource-card__title"><?php echo esc_html( (string) ( $item['title'] ?? '' ) ); ?></h3>
								<p class="mountsol-resource-card__desc"><?php echo esc_html( (string) ( $item['desc'] ?? '' ) ); ?></p>
								<div class="mountsol-resource-card__faux-link" aria-hidden="true">
									<span><?php esc_html_e( 'Read more', 'mountsol' ); ?></span>
									<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
								</div>
							</div>
						<?php endforeach; ?>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<?php
$mid = isset( $data['mid_cta'] ) && is_array( $data['mid_cta'] ) ? $data['mid_cta'] : array();
?>
<section class="mountsol-inner mountsol-inner--alt">
	<div class="container mountsol-narrow mountsol-resources-mid">
		<?php if ( ! empty( $mid['title'] ) ) : ?>
			<h2 class="mountsol-resources-mid__title"><?php echo esc_html( (string) $mid['title'] ); ?></h2>
		<?php endif; ?>
		<?php if ( ! empty( $mid['lede'] ) ) : ?>
			<p class="mountsol-resources-mid__lede"><?php echo esc_html( (string) $mid['lede'] ); ?></p>
		<?php endif; ?>
		<?php if ( ! empty( $mid['link'] ) && ! empty( $mid['href'] ) ) : ?>
			<a class="mountsol-inline-link-arrow" href="<?php echo esc_url( mountsol_url( (string) $mid['href'] ) ); ?>">
				<?php echo esc_html( (string) $mid['link'] ); ?>
				<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
			</a>
		<?php endif; ?>
	</div>
</section>
<?php
get_template_part(
	'template-parts/cta-section',
	null,
	array(
		'title'        => __( 'Questions About MountSol?', 'mountsol' ),
		'description'  => __( 'Our team is here to help. Get in touch.', 'mountsol' ),
		'primary_text' => __( 'Contact Us', 'mountsol' ),
		'primary_href' => '/contact',
	)
);

get_footer();

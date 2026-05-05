<?php
/**
 * About page (Next: app/about/page.tsx).
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
		'title'       => __( 'About MountSol', 'mountsol' ),
		'subtitle'    => __( 'Our Story', 'mountsol' ),
		'description' => __( 'We\'re on a mission to transform how field service businesses operate by providing powerful, easy-to-use tools.', 'mountsol' ),
	)
);

$data = mountsol_get_about_page_data();
?>
<section class="mountsol-inner">
	<div class="container mountsol-narrow">
		<div class="mountsol-about-stack">
			<?php
			$mission = isset( $data['mission'] ) && is_array( $data['mission'] ) ? $data['mission'] : array();
			if ( ! empty( $mission['title'] ) ) :
				?>
				<div class="mountsol-prose-card mountsol-prose-card--wide">
					<h2 class="mountsol-prose-card__title mountsol-prose-card__title--lg"><?php echo esc_html( (string) $mission['title'] ); ?></h2>
					<?php if ( ! empty( $mission['body'] ) ) : ?>
						<p class="mountsol-prose-card__text mountsol-prose-card__text--lg"><?php echo esc_html( (string) $mission['body'] ); ?></p>
					<?php endif; ?>
				</div>
			<?php endif; ?>

			<?php
			$story = isset( $data['story'] ) && is_array( $data['story'] ) ? $data['story'] : array();
			if ( ! empty( $story['title'] ) ) :
				?>
				<div class="mountsol-prose-card mountsol-prose-card--wide">
					<h2 class="mountsol-prose-card__title mountsol-prose-card__title--lg"><?php echo esc_html( (string) $story['title'] ); ?></h2>
					<?php
					$paras = isset( $story['paras'] ) && is_array( $story['paras'] ) ? $story['paras'] : array();
					foreach ( $paras as $p ) :
						?>
						<p class="mountsol-prose-card__text"><?php echo esc_html( (string) $p ); ?></p>
					<?php endforeach; ?>
				</div>
			<?php endif; ?>

			<?php
			$values = isset( $data['values'] ) && is_array( $data['values'] ) ? $data['values'] : array();
			if ( ! empty( $values['title'] ) ) :
				?>
				<div class="mountsol-prose-card mountsol-prose-card--wide">
					<h2 class="mountsol-prose-card__title mountsol-prose-card__title--lg"><?php echo esc_html( (string) $values['title'] ); ?></h2>
					<div class="mountsol-grid-cards mountsol-grid-cards--3 mountsol-values-grid">
						<?php
						$items = isset( $values['items'] ) && is_array( $values['items'] ) ? $values['items'] : array();
						foreach ( $items as $item ) :
							?>
							<div>
								<h3 class="mountsol-value-title"><?php echo esc_html( (string) ( $item['title'] ?? '' ) ); ?></h3>
								<p class="mountsol-value-desc"><?php echo esc_html( (string) ( $item['desc'] ?? '' ) ); ?></p>
							</div>
						<?php endforeach; ?>
					</div>
				</div>
			<?php endif; ?>
		</div>
	</div>
</section>

<section class="mountsol-inner mountsol-inner--alt">
	<div class="container mountsol-narrow mountsol-about-team">
		<?php
		$team = isset( $data['team'] ) && is_array( $data['team'] ) ? $data['team'] : array();
		if ( ! empty( $team['title'] ) ) :
			?>
			<h2 class="mountsol-inner__title"><?php echo esc_html( (string) $team['title'] ); ?></h2>
		<?php endif; ?>
		<?php if ( ! empty( $team['body'] ) ) : ?>
			<p class="mountsol-about-team__body"><?php echo esc_html( (string) $team['body'] ); ?></p>
		<?php endif; ?>
	</div>
</section>
<?php
get_template_part(
	'template-parts/cta-section',
	null,
	array(
		'title'        => __( 'Ready to Join Hundreds of Successful Businesses?', 'mountsol' ),
		'description'  => __( 'Experience the MountSol difference.', 'mountsol' ),
		'primary_text' => __( 'Book Demo', 'mountsol' ),
		'primary_href' => '/demo',
	)
);

get_footer();

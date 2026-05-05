<?php
/**
 * Home: workflow section (present in Next homepage).
 *
 * @package MountSol
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$d     = mountsol_get_home_page_data();
$wf    = isset( $d['workflow'] ) && is_array( $d['workflow'] ) ? $d['workflow'] : array();
$steps = (array) ( $wf['steps'] ?? array() );
?>
<section class="mountsol-home-section mountsol-home-section--muted">
	<div class="container">
		<div class="mountsol-home-section__intro">
			<?php if ( ! empty( $wf['eyebrow'] ) ) : ?>
				<span class="mountsol-home-pill mountsol-home-pill--accent"><?php echo esc_html( (string) $wf['eyebrow'] ); ?></span>
			<?php endif; ?>
			<?php if ( ! empty( $wf['title'] ) ) : ?>
				<h2 class="mountsol-home-section__title"><?php echo esc_html( (string) $wf['title'] ); ?></h2>
			<?php endif; ?>
			<?php if ( ! empty( $wf['subtitle'] ) ) : ?>
				<p class="mountsol-home-section__lede"><?php echo esc_html( (string) $wf['subtitle'] ); ?></p>
			<?php endif; ?>
		</div>
		<div class="mountsol-home-workflow">
			<div class="mountsol-home-workflow__line" aria-hidden="true"></div>
			<div class="mountsol-home-workflow__grid">
				<?php
				$n = count( $steps );
				foreach ( $steps as $idx => $step ) :
					$color = isset( $step['color'] ) ? (string) $step['color'] : 'blue';
					$ic    = isset( $step['icon'] ) ? (string) $step['icon'] : 'users';
					?>
					<div class="mountsol-home-workflow__step">
						<div class="mountsol-home-workflow__dot mountsol-home-workflow__dot--<?php echo esc_attr( $color ); ?>" aria-hidden="true">
							<?php mountsol_home_icon( $ic, array( 'size' => 20, 'class' => 'mountsol-home-icon' ) ); ?>
						</div>
						<span class="mountsol-home-workflow__label"><?php echo esc_html( (string) ( $step['label'] ?? '' ) ); ?></span>
						<?php if ( $idx < $n - 1 ) : ?>
							<span class="mountsol-home-workflow__arrow" aria-hidden="true">
								<?php mountsol_svg_icon( 'ArrowRight', array( 'size' => 16, 'class' => 'mountsol-home-icon mountsol-home-icon--muted' ) ); ?>
							</span>
						<?php endif; ?>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</div>
</section>


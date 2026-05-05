<?php
/**
 * Home: platform overview (dark/light split with dashboard mock).
 *
 * @package MountSol
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$d    = mountsol_get_home_page_data();
$plat = isset( $d['platform_overview'] ) && is_array( $d['platform_overview'] ) ? $d['platform_overview'] : array();
$img  = isset( $plat['image'] ) ? esc_url( (string) $plat['image'] ) : '';
?>
<section class="mountsol-home-split">
	<div class="mountsol-home-split__dark">
		<div class="mountsol-home-split__dark-inner">
			<?php if ( ! empty( $plat['eyebrow'] ) ) : ?>
				<span class="mountsol-home-pill mountsol-home-pill--on-dark"><?php echo esc_html( (string) $plat['eyebrow'] ); ?></span>
			<?php endif; ?>
			<?php if ( ! empty( $plat['title'] ) ) : ?>
				<h2 class="mountsol-home-split__title"><?php echo esc_html( (string) $plat['title'] ); ?></h2>
			<?php endif; ?>
			<?php if ( ! empty( $plat['body'] ) ) : ?>
				<p class="mountsol-home-split__body"><?php echo esc_html( (string) $plat['body'] ); ?></p>
			<?php endif; ?>
			<ul class="mountsol-home-split__list" role="list">
				<?php foreach ( (array) ( $plat['bullets'] ?? array() ) as $line ) : ?>
					<li>
						<span class="mountsol-home-split__check" aria-hidden="true">
							<?php mountsol_svg_icon( 'CheckCircle', array( 'size' => 20, 'class' => 'mountsol-home-icon mountsol-home-icon--accent' ) ); ?>
						</span>
						<span><?php echo esc_html( (string) $line ); ?></span>
					</li>
				<?php endforeach; ?>
			</ul>
			<?php if ( ! empty( $plat['cta_text'] ) && ! empty( $plat['cta_href'] ) ) : ?>
				<a class="btn btn--accent btn--lg mountsol-home-split__cta" href="<?php echo esc_url( mountsol_url( (string) $plat['cta_href'] ) ); ?>">
					<?php echo esc_html( (string) $plat['cta_text'] ); ?>
					<?php mountsol_svg_icon( 'ArrowRight', array( 'size' => 18, 'class' => 'mountsol-home-icon' ) ); ?>
				</a>
			<?php endif; ?>
		</div>
	</div>
	<div class="mountsol-home-split__light">
		<div class="mountsol-home-split__mock">
			<?php if ( $img !== '' ) : ?>
				<div class="mountsol-home-split__img-wrap">
					<img src="<?php echo $img; ?>" alt="<?php echo esc_attr( (string) ( $plat['image_alt'] ?? '' ) ); ?>" width="800" height="500" loading="lazy" decoding="async">
				</div>
			<?php endif; ?>
			<?php
			$ft = isset( $plat['float_top'] ) && is_array( $plat['float_top'] ) ? $plat['float_top'] : array();
			$fb = isset( $plat['float_bottom'] ) && is_array( $plat['float_bottom'] ) ? $plat['float_bottom'] : array();
			?>
			<div class="mountsol-home-float mountsol-home-float--tl mountsol-home-animate-in">
				<div class="mountsol-home-float__icon mountsol-home-float__icon--green" aria-hidden="true">
					<?php mountsol_svg_icon( 'TrendingUp', array( 'size' => 20, 'class' => 'mountsol-home-icon' ) ); ?>
				</div>
				<div>
					<p class="mountsol-home-float__label"><?php echo esc_html( (string) ( $ft['label'] ?? '' ) ); ?></p>
					<p class="mountsol-home-float__value mountsol-home-float__value--green"><?php echo esc_html( (string) ( $ft['value'] ?? '' ) ); ?></p>
				</div>
			</div>
			<div class="mountsol-home-float mountsol-home-float--br mountsol-home-animate-in mountsol-home-animate-in--delay">
				<div class="mountsol-home-float__icon mountsol-home-float__icon--blue" aria-hidden="true">
					<?php mountsol_svg_icon( 'Calendar', array( 'size' => 20, 'class' => 'mountsol-home-icon' ) ); ?>
				</div>
				<div>
					<p class="mountsol-home-float__label"><?php echo esc_html( (string) ( $fb['label'] ?? '' ) ); ?></p>
					<p class="mountsol-home-float__value mountsol-home-float__value--blue"><?php echo esc_html( (string) ( $fb['value'] ?? '' ) ); ?></p>
				</div>
			</div>
		</div>
	</div>
</section>


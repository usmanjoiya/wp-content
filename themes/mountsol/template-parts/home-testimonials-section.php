<?php
/**
 * Home: testimonials section.
 *
 * @package MountSol
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$d  = mountsol_get_home_page_data();
$tm = isset( $d['testimonials'] ) && is_array( $d['testimonials'] ) ? $d['testimonials'] : array();
?>
<section class="mountsol-home-section mountsol-home-section--deep">
	<div class="container">
		<div class="mountsol-home-section__intro mountsol-home-section__intro--light">
			<?php if ( ! empty( $tm['eyebrow'] ) ) : ?>
				<span class="mountsol-home-pill mountsol-home-pill--on-dark"><?php echo esc_html( (string) $tm['eyebrow'] ); ?></span>
			<?php endif; ?>
			<?php if ( ! empty( $tm['title'] ) ) : ?>
				<h2 class="mountsol-home-section__title mountsol-home-section__title--white"><?php echo esc_html( (string) $tm['title'] ); ?></h2>
			<?php endif; ?>
		</div>
		<div class="mountsol-home-grid mountsol-home-grid--3">
			<?php foreach ( (array) ( $tm['items'] ?? array() ) as $t ) : ?>
				<?php
				$rating = isset( $t['rating'] ) ? min( 5, max( 0, (int) $t['rating'] ) ) : 5;
				$author = (string) ( $t['author'] ?? '' );
				?>
				<div class="mountsol-home-quote">
					<div class="mountsol-home-quote__stars" aria-label="<?php echo esc_attr( sprintf( __( '%d out of 5 stars', 'mountsol' ), $rating ) ); ?>">
						<?php for ( $i = 0; $i < 5; $i++ ) : ?>
							<span class="mountsol-home-quote__star" aria-hidden="true">
								<?php
								// Use a filled star to match the Next testimonial visual.
								mountsol_home_icon( 'star-filled', array( 'size' => 16, 'class' => 'mountsol-home-icon mountsol-home-icon--accent' ) );
								?>
							</span>
						<?php endfor; ?>
					</div>
					<p class="mountsol-home-quote__text"><?php echo esc_html( (string) ( $t['quote'] ?? '' ) ); ?></p>
					<div class="mountsol-home-quote__meta">
						<span class="mountsol-home-quote__avatar" aria-hidden="true"><?php echo esc_html( mountsol_person_initials( $author ) ); ?></span>
						<div>
							<p class="mountsol-home-quote__author"><?php echo esc_html( $author ); ?></p>
							<p class="mountsol-home-quote__company">
								<?php echo esc_html( (string) ( $t['company'] ?? '' ) ); ?>
								<?php if ( ! empty( $t['role'] ) ) : ?>
									<span class="mountsol-home-quote__role">• <?php echo esc_html( (string) $t['role'] ); ?></span>
								<?php endif; ?>
							</p>
						</div>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>


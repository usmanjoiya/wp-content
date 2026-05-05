<?php
/**
 * Home page sections below the hero (Next: app/page.tsx).
 *
 * @package MountSol
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$d = mountsol_get_home_page_data();

/* —— Built for the Trades —— */
$bft = isset( $d['built_for_trades'] ) && is_array( $d['built_for_trades'] ) ? $d['built_for_trades'] : array();
?>
<section class="mountsol-home-section mountsol-home-section--white">
	<div class="container">
		<div class="mountsol-home-section__intro">
			<?php if ( ! empty( $bft['title'] ) ) : ?>
				<h2 class="mountsol-home-section__title"><?php echo esc_html( (string) $bft['title'] ); ?></h2>
			<?php endif; ?>
			<?php if ( ! empty( $bft['subtitle'] ) ) : ?>
				<p class="mountsol-home-section__lede"><?php echo esc_html( (string) $bft['subtitle'] ); ?></p>
			<?php endif; ?>
		</div>
		<div class="mountsol-home-grid mountsol-home-grid--4">
			<?php
			foreach ( (array) ( $bft['industries'] ?? array() ) as $row ) :
				$slug = isset( $row['slug'] ) ? (string) $row['slug'] : '';
				$icon = isset( $row['icon'] ) ? (string) $row['icon'] : 'wind';
				if ( $slug === '' ) {
					continue;
				}
				?>
				<a class="mountsol-home-icard" href="<?php echo esc_url( mountsol_url( '/industries/' . $slug ) ); ?>">
					<div class="mountsol-home-icard__icon" aria-hidden="true">
						<?php mountsol_home_icon( $icon, array( 'size' => 28, 'class' => 'mountsol-home-icon mountsol-home-icon--on-dark' ) ); ?>
					</div>
					<h3 class="mountsol-home-icard__title"><?php echo esc_html( (string) ( $row['title'] ?? '' ) ); ?></h3>
					<p class="mountsol-home-icard__desc"><?php echo esc_html( (string) ( $row['description'] ?? '' ) ); ?></p>
					<div class="mountsol-home-icard__link">
						<span><?php esc_html_e( 'Explore', 'mountsol' ); ?></span>
						<?php mountsol_home_icon( 'arrow-right', array( 'size' => 16, 'class' => 'mountsol-home-icard__arrow' ) ); ?>
					</div>
				</a>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<?php
/* —— Platform overview split —— */
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
							<?php mountsol_home_icon( 'check-circle', array( 'size' => 20, 'class' => 'mountsol-home-icon mountsol-home-icon--accent' ) ); ?>
						</span>
						<span><?php echo esc_html( (string) $line ); ?></span>
					</li>
				<?php endforeach; ?>
			</ul>
			<?php if ( ! empty( $plat['cta_text'] ) && ! empty( $plat['cta_href'] ) ) : ?>
				<a class="btn btn--accent btn--lg mountsol-home-split__cta" href="<?php echo esc_url( mountsol_url( (string) $plat['cta_href'] ) ); ?>">
					<?php echo esc_html( (string) $plat['cta_text'] ); ?>
					<?php mountsol_home_icon( 'arrow-right', array( 'size' => 18, 'class' => 'mountsol-home-icon' ) ); ?>
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
					<?php mountsol_home_icon( isset( $ft['icon'] ) ? (string) $ft['icon'] : 'trending-up', array( 'size' => 20, 'class' => 'mountsol-home-icon' ) ); ?>
				</div>
				<div>
					<p class="mountsol-home-float__label"><?php echo esc_html( (string) ( $ft['label'] ?? '' ) ); ?></p>
					<p class="mountsol-home-float__value mountsol-home-float__value--green"><?php echo esc_html( (string) ( $ft['value'] ?? '' ) ); ?></p>
				</div>
			</div>
			<div class="mountsol-home-float mountsol-home-float--br mountsol-home-animate-in mountsol-home-animate-in--delay">
				<div class="mountsol-home-float__icon mountsol-home-float__icon--blue" aria-hidden="true">
					<?php mountsol_home_icon( isset( $fb['icon'] ) ? (string) $fb['icon'] : 'calendar', array( 'size' => 20, 'class' => 'mountsol-home-icon' ) ); ?>
				</div>
				<div>
					<p class="mountsol-home-float__label"><?php echo esc_html( (string) ( $fb['label'] ?? '' ) ); ?></p>
					<p class="mountsol-home-float__value mountsol-home-float__value--blue"><?php echo esc_html( (string) ( $fb['value'] ?? '' ) ); ?></p>
				</div>
			</div>
		</div>
	</div>
</section>

<?php
/* —— Key features —— */
$kf = isset( $d['key_features'] ) && is_array( $d['key_features'] ) ? $d['key_features'] : array();
?>
<section class="mountsol-home-section mountsol-home-section--white">
	<div class="container">
		<div class="mountsol-home-section__intro">
			<?php if ( ! empty( $kf['eyebrow'] ) ) : ?>
				<span class="mountsol-home-pill mountsol-home-pill--dark"><?php echo esc_html( (string) $kf['eyebrow'] ); ?></span>
			<?php endif; ?>
			<?php if ( ! empty( $kf['title'] ) ) : ?>
				<h2 class="mountsol-home-section__title"><?php echo esc_html( (string) $kf['title'] ); ?></h2>
			<?php endif; ?>
			<?php if ( ! empty( $kf['subtitle'] ) ) : ?>
				<p class="mountsol-home-section__lede"><?php echo esc_html( (string) $kf['subtitle'] ); ?></p>
			<?php endif; ?>
		</div>
		<div class="mountsol-home-grid mountsol-home-grid--4">
			<?php foreach ( (array) ( $kf['features'] ?? array() ) as $f ) : ?>
				<?php
				$href = isset( $f['href'] ) ? (string) $f['href'] : '';
				$icon = isset( $f['icon'] ) ? (string) $f['icon'] : 'zap';
				?>
				<a class="mountsol-home-fcard" href="<?php echo esc_url( mountsol_url( $href ) ); ?>">
					<div class="mountsol-home-fcard__icon" aria-hidden="true">
						<?php mountsol_home_icon( $icon, array( 'size' => 22, 'class' => 'mountsol-home-icon mountsol-home-icon--on-dark' ) ); ?>
					</div>
					<h3 class="mountsol-home-fcard__title"><?php echo esc_html( (string) ( $f['title'] ?? '' ) ); ?></h3>
					<p class="mountsol-home-fcard__desc"><?php echo esc_html( (string) ( $f['description'] ?? '' ) ); ?></p>
					<div class="mountsol-home-fcard__more">
						<span><?php esc_html_e( 'Learn more', 'mountsol' ); ?></span>
						<?php mountsol_home_icon( 'arrow-right', array( 'size' => 16, 'class' => 'mountsol-home-fcard__arrow' ) ); ?>
					</div>
				</a>
			<?php endforeach; ?>
		</div>
		<?php if ( ! empty( $kf['more_text'] ) && ! empty( $kf['more_href'] ) ) : ?>
			<div class="mountsol-home-section__actions">
				<a class="btn btn--outline btn--lg mountsol-home-btn-outline-dark" href="<?php echo esc_url( mountsol_url( (string) $kf['more_href'] ) ); ?>">
					<?php echo esc_html( (string) $kf['more_text'] ); ?>
					<?php mountsol_home_icon( 'arrow-right', array( 'size' => 16, 'class' => 'mountsol-home-icon' ) ); ?>
				</a>
			</div>
		<?php endif; ?>
	</div>
</section>

<?php
/* —— Workflow —— */
$wf = isset( $d['workflow'] ) && is_array( $d['workflow'] ) ? $d['workflow'] : array();
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
								<?php mountsol_home_icon( 'arrow-right', array( 'size' => 16, 'class' => 'mountsol-home-icon mountsol-home-icon--muted' ) ); ?>
							</span>
						<?php endif; ?>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</div>
</section>

<?php
/* —— Stats —— */
$st = isset( $d['stats'] ) && is_array( $d['stats'] ) ? $d['stats'] : array();
?>
<section class="mountsol-home-section mountsol-home-section--gradient">
	<div class="container">
		<div class="mountsol-home-section__intro mountsol-home-section__intro--light">
			<?php if ( ! empty( $st['eyebrow'] ) ) : ?>
				<span class="mountsol-home-pill mountsol-home-pill--on-dark"><?php echo esc_html( (string) $st['eyebrow'] ); ?></span>
			<?php endif; ?>
			<?php if ( ! empty( $st['title'] ) ) : ?>
				<h2 class="mountsol-home-section__title mountsol-home-section__title--white"><?php echo esc_html( (string) $st['title'] ); ?></h2>
			<?php endif; ?>
			<?php if ( ! empty( $st['subtitle'] ) ) : ?>
				<p class="mountsol-home-section__lede mountsol-home-section__lede--muted-white"><?php echo esc_html( (string) $st['subtitle'] ); ?></p>
			<?php endif; ?>
		</div>
		<div class="mountsol-home-stats">
			<?php foreach ( (array) ( $st['items'] ?? array() ) as $stat ) : ?>
				<div class="mountsol-home-stat">
					<p class="mountsol-home-stat__value"><?php echo esc_html( (string) ( $stat['value'] ?? '' ) ); ?></p>
					<p class="mountsol-home-stat__label"><?php echo esc_html( (string) ( $stat['label'] ?? '' ) ); ?></p>
					<p class="mountsol-home-stat__desc"><?php echo esc_html( (string) ( $stat['description'] ?? '' ) ); ?></p>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<?php
/* —— Testimonials —— */
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
					<div class="mountsol-home-quote__stars" aria-label="<?php echo esc_attr( sprintf( /* translators: %d: star rating 1-5. */ __( '%d out of 5 stars', 'mountsol' ), $rating ) ); ?>">
						<?php
						for ( $i = 0; $i < $rating; $i++ ) {
							mountsol_home_icon( 'star-filled', array( 'size' => 20, 'class' => 'mountsol-home-icon mountsol-home-icon--star' ) );
						}
						?>
					</div>
					<p class="mountsol-home-quote__text">&ldquo;<?php echo esc_html( (string) ( $t['quote'] ?? '' ) ); ?>&rdquo;</p>
					<div class="mountsol-home-quote__author">
						<div class="mountsol-home-quote__avatar" aria-hidden="true"><?php echo esc_html( mountsol_person_initials( $author ) ); ?></div>
						<div>
							<p class="mountsol-home-quote__name"><?php echo esc_html( $author ); ?></p>
							<p class="mountsol-home-quote__meta">
								<?php
								echo esc_html( (string) ( $t['role'] ?? '' ) );
								echo esc_html( ', ' );
								echo esc_html( (string) ( $t['company'] ?? '' ) );
								?>
							</p>
						</div>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<?php
/* —— Pricing preview —— */
$pp = isset( $d['pricing_preview'] ) && is_array( $d['pricing_preview'] ) ? $d['pricing_preview'] : array();
?>
<section class="mountsol-home-section mountsol-home-section--white">
	<div class="container">
		<div class="mountsol-home-section__intro">
			<?php if ( ! empty( $pp['eyebrow'] ) ) : ?>
				<span class="mountsol-home-pill mountsol-home-pill--accent"><?php echo esc_html( (string) $pp['eyebrow'] ); ?></span>
			<?php endif; ?>
			<?php if ( ! empty( $pp['title'] ) ) : ?>
				<h2 class="mountsol-home-section__title"><?php echo esc_html( (string) $pp['title'] ); ?></h2>
			<?php endif; ?>
			<?php if ( ! empty( $pp['subtitle'] ) ) : ?>
				<p class="mountsol-home-section__lede"><?php echo esc_html( (string) $pp['subtitle'] ); ?></p>
			<?php endif; ?>
		</div>
		<div class="mountsol-home-plans">
			<?php foreach ( (array) ( $pp['plans'] ?? array() ) as $plan ) : ?>
				<?php
				$feat = ! empty( $plan['featured'] );
				?>
				<div class="mountsol-home-plan<?php echo $feat ? ' mountsol-home-plan--featured' : ''; ?>">
					<?php if ( $feat ) : ?>
						<div class="mountsol-home-plan__badge"><?php esc_html_e( 'Most Popular', 'mountsol' ); ?></div>
					<?php endif; ?>
					<h3 class="mountsol-home-plan__name"><?php echo esc_html( (string) ( $plan['name'] ?? '' ) ); ?></h3>
					<p class="mountsol-home-plan__desc"><?php echo esc_html( (string) ( $plan['description'] ?? '' ) ); ?></p>
					<p class="mountsol-home-plan__price">
						<?php echo esc_html( (string) ( $plan['price'] ?? '' ) ); ?>
						<span class="mountsol-home-plan__period">/<?php esc_html_e( 'month', 'mountsol' ); ?></span>
					</p>
					<ul class="mountsol-home-plan__list" role="list">
						<?php foreach ( (array) ( $plan['features'] ?? array() ) as $line ) : ?>
							<li>
								<?php mountsol_home_icon( 'check-circle', array( 'size' => 16, 'class' => 'mountsol-home-icon mountsol-home-icon--accent-tiny' ) ); ?>
								<span><?php echo esc_html( (string) $line ); ?></span>
							</li>
						<?php endforeach; ?>
					</ul>
					<?php if ( ! empty( $pp['plan_href'] ) ) : ?>
						<a class="btn btn--lg mountsol-home-plan__cta<?php echo $feat ? ' btn--accent' : ' mountsol-home-plan__cta--solid'; ?>" href="<?php echo esc_url( mountsol_url( (string) $pp['plan_href'] ) ); ?>">
							<?php echo esc_html( (string) ( $pp['plan_cta'] ?? __( 'Get Started', 'mountsol' ) ) ); ?>
						</a>
					<?php endif; ?>
				</div>
			<?php endforeach; ?>
		</div>
		<?php if ( ! empty( $pp['compare'] ) && ! empty( $pp['compare_href'] ) ) : ?>
			<div class="mountsol-home-section__actions">
				<a class="btn btn--outline btn--lg" href="<?php echo esc_url( mountsol_url( (string) $pp['compare_href'] ) ); ?>">
					<?php echo esc_html( (string) $pp['compare'] ); ?>
					<?php mountsol_home_icon( 'arrow-right', array( 'size' => 16, 'class' => 'mountsol-home-icon' ) ); ?>
				</a>
			</div>
		<?php endif; ?>
	</div>
</section>

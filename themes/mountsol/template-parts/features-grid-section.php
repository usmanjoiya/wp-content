<?php
/**
 * Feature cards grid for /features.
 *
 * @package MountSol
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$cards = mountsol_get_features_landing_cards();
?>
<section class="mountsol-inner">
	<div class="container">
		<div class="mountsol-grid-cards mountsol-grid-cards--feat">
			<?php foreach ( $cards as $card ) : ?>
				<a class="mountsol-tile" href="<?php echo esc_url( mountsol_url( $card['path'] ) ); ?>">
					<h2 class="mountsol-tile__title"><?php echo esc_html( $card['title'] ); ?></h2>
					<p class="mountsol-tile__desc"><?php echo esc_html( $card['description'] ); ?></p>
				</a>
			<?php endforeach; ?>
		</div>
	</div>
</section>

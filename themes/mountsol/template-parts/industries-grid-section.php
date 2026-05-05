<?php
/**
 * Industry cards grid for /industries.
 *
 * @package MountSol
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$cards = mountsol_get_industries_landing_cards();
?>
<section class="mountsol-inner">
	<div class="container">
		<div class="mountsol-grid-cards mountsol-grid-cards--feat">
			<?php foreach ( $cards as $card ) : ?>
				<a class="mountsol-tile" href="<?php echo esc_url( mountsol_url( '/industries/' . $card['slug'] ) ); ?>">
					<h2 class="mountsol-tile__title"><?php echo esc_html( $card['title'] ); ?></h2>
					<p class="mountsol-tile__desc"><?php echo esc_html( $card['description'] ); ?></p>
				</a>
			<?php endforeach; ?>
		</div>
	</div>
</section>

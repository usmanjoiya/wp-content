<?php
/**
 * 404 template.
 *
 * @package MountSol
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();
?>
<div class="container mountsol-section mountsol-section--center">
	<h1 class="mountsol-display"><?php esc_html_e( 'Page not found', 'mountsol' ); ?></h1>
	<p class="mountsol-muted"><?php esc_html_e( 'The page you requested could not be found.', 'mountsol' ); ?></p>
	<p>
		<a class="btn btn--accent" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Back to home', 'mountsol' ); ?></a>
	</p>
</div>
<?php
get_footer();

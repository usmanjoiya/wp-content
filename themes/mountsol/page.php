<?php
/**
 * Default page (uses structured templates for feature/industry children).
 *
 * @package MountSol
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();

$feature_payload = mountsol_get_feature_content_for_queried_page();
if ( is_array( $feature_payload ) ) {
	get_template_part( 'template-parts/feature-detail', null, array( 'content' => $feature_payload ) );
	get_footer();
	return;
}

$industry_payload = mountsol_get_industry_content_for_queried_page();
if ( is_array( $industry_payload ) ) {
	get_template_part( 'template-parts/industry-detail', null, array( 'content' => $industry_payload ) );
	get_footer();
	return;
}
?>
<div class="container mountsol-section">
	<?php
	while ( have_posts() ) :
		the_post();
		?>
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<header class="page-header">
				<h1 class="page-title"><?php the_title(); ?></h1>
			</header>
			<div class="entry-content">
				<?php the_content(); ?>
			</div>
		</article>
	<?php endwhile; ?>
</div>
<?php
get_footer();

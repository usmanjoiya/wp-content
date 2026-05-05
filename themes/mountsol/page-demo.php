<?php
/**
 * Book demo page.
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
		'title'       => __( 'Schedule Your Demo', 'mountsol' ),
		'subtitle'    => __( 'Book a Demo', 'mountsol' ),
		'description' => __( 'See how MountSol can transform your field service business. Our team will walk you through a personalized demo tailored to your needs.', 'mountsol' ),
	)
);
?>
<section class="mountsol-inner">
	<div class="container">
		<div class="mountsol-form-wrap" style="max-width:42rem;margin-inline:auto;">
			<?php mountsol_render_wpforms_or_placeholder( mountsol_wpforms_demo_form_id() ); ?>
		</div>
	</div>
</section>

<section class="mountsol-inner mountsol-inner--alt">
	<div class="container" style="max-width:48rem;">
		<h2 class="mountsol-inner__title"><?php esc_html_e( 'What to Expect', 'mountsol' ); ?></h2>
		<div class="mountsol-grid-cards mountsol-grid-cards--3 mountsol-demo-steps">
			<div class="text-center" style="text-align:center;">
				<div class="mountsol-step-num">1</div>
				<h3><?php esc_html_e( 'Initial Consultation', 'mountsol' ); ?></h3>
				<p><?php esc_html_e( 'We will learn about your business, challenges, and goals.', 'mountsol' ); ?></p>
			</div>
			<div style="text-align:center;">
				<div class="mountsol-step-num">2</div>
				<h3><?php esc_html_e( 'Live Demo', 'mountsol' ); ?></h3>
				<p><?php esc_html_e( 'See MountSol in action with features relevant to your industry.', 'mountsol' ); ?></p>
			</div>
			<div style="text-align:center;">
				<div class="mountsol-step-num">3</div>
				<h3><?php esc_html_e( 'Q&A & Next Steps', 'mountsol' ); ?></h3>
				<p><?php esc_html_e( 'Ask questions and discuss pricing and implementation.', 'mountsol' ); ?></p>
			</div>
		</div>
	</div>
</section>

<section class="mountsol-inner">
	<div class="container" style="max-width:48rem;">
		<h2 class="mountsol-inner__title"><?php esc_html_e( 'Common Questions', 'mountsol' ); ?></h2>
		<div style="display:flex;flex-direction:column;gap:1rem;">
			<?php
			$faqs = array(
				array(
					'q' => __( 'How long is the demo?', 'mountsol' ),
					'a' => __( 'Our demos typically take 30-45 minutes, depending on your questions and needs.', 'mountsol' ),
				),
				array(
					'q' => __( 'Can I see specific features?', 'mountsol' ),
					'a' => __( 'Absolutely! Let us know which features are most important to you, and we will focus on those.', 'mountsol' ),
				),
				array(
					'q' => __( 'What if I cannot make the scheduled time?', 'mountsol' ),
					'a' => __( 'No problem. We can reschedule to a time that works better for you.', 'mountsol' ),
				),
				array(
					'q' => __( 'Do I need to prepare anything?', 'mountsol' ),
					'a' => __( 'Just be ready to share a bit about your business. Having some team members join is also helpful.', 'mountsol' ),
				),
			);
			foreach ( $faqs as $faq ) :
				?>
				<details class="mountsol-details">
					<summary><?php echo esc_html( $faq['q'] ); ?><span aria-hidden="true">▼</span></summary>
					<p><?php echo esc_html( $faq['a'] ); ?></p>
				</details>
			<?php endforeach; ?>
		</div>
	</div>
</section>
<?php
get_footer();

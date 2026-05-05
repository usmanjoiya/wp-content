<?php
/**
 * Contact page template.
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
		'title'       => __( 'Get in Touch', 'mountsol' ),
		'subtitle'    => __( 'Contact', 'mountsol' ),
		'description' => __( 'Have questions? Our team is ready to help. Reach out to us using any of the methods below.', 'mountsol' ),
	)
);
?>
<section class="mountsol-inner">
	<div class="container">
		<div class="mountsol-contact-grid">
			<div class="mountsol-contact-card">
				<div class="mountsol-contact-card__icon" aria-hidden="true">✉</div>
				<h3><?php esc_html_e( 'Email', 'mountsol' ); ?></h3>
				<p><?php esc_html_e( 'Reach our team directly via email.', 'mountsol' ); ?></p>
				<a href="mailto:info@mountsol.org">info@mountsol.org</a><br>
				<a href="mailto:contact@mountsol.org">contact@mountsol.org</a>
			</div>
			<div class="mountsol-contact-card">
				<div class="mountsol-contact-card__icon" aria-hidden="true">☎</div>
				<h3><?php esc_html_e( 'Phone', 'mountsol' ); ?></h3>
				<p><?php esc_html_e( 'Call us to speak with a team member.', 'mountsol' ); ?></p>
				<a href="tel:+16282657724"><?php esc_html_e( '+1 628 265 7724', 'mountsol' ); ?></a>
				<p style="font-size:0.75rem;color:var(--muted-foreground);margin-top:0.5rem;"><?php esc_html_e( 'Monday-Friday, 9am-6pm PT', 'mountsol' ); ?></p>
			</div>
			<div class="mountsol-contact-card">
				<div class="mountsol-contact-card__icon" aria-hidden="true">⌖</div>
				<h3><?php esc_html_e( 'Office', 'mountsol' ); ?></h3>
				<p><?php esc_html_e( 'Headquartered in San Francisco, with team members worldwide.', 'mountsol' ); ?></p>
				<a class="btn btn--outline" style="margin-top:0.5rem;display:inline-block;" href="<?php echo esc_url( mountsol_url( '/demo' ) ); ?>"><?php esc_html_e( 'Schedule a Demo', 'mountsol' ); ?></a>
			</div>
		</div>
	</div>
</section>

<section class="mountsol-inner mountsol-inner--alt">
	<div class="container" style="max-width:48rem;">
		<h2 class="mountsol-inner__title"><?php esc_html_e( 'Send a message', 'mountsol' ); ?></h2>
		<p class="mountsol-inner__lede"><?php esc_html_e( 'Use the form below after you connect WPForms in the Customizer or with a shortcode in the editor.', 'mountsol' ); ?></p>
		<div class="mountsol-form-wrap">
			<?php mountsol_render_wpforms_or_placeholder( mountsol_wpforms_contact_form_id() ); ?>
		</div>
	</div>
</section>

<section class="mountsol-inner">
	<div class="container" style="max-width:48rem;">
		<h2 class="mountsol-inner__title"><?php esc_html_e( 'How We Can Help', 'mountsol' ); ?></h2>
		<div class="two-col-help">
			<div>
				<h3 style="margin-top:0;"><?php esc_html_e( 'Sales Inquiries', 'mountsol' ); ?></h3>
				<p class="mountsol-muted"><?php esc_html_e( 'Interested in MountSol? Our sales team would love to show you what is possible for your business.', 'mountsol' ); ?></p>
				<a class="btn btn--outline" href="<?php echo esc_url( mountsol_url( '/demo' ) ); ?>"><?php esc_html_e( 'Book a Demo', 'mountsol' ); ?></a>
			</div>
			<div>
				<h3 style="margin-top:0;"><?php esc_html_e( 'Support & Technical Help', 'mountsol' ); ?></h3>
				<p class="mountsol-muted"><?php esc_html_e( 'Having trouble with your account? Our support team is here to help with any questions.', 'mountsol' ); ?></p>
				<a class="btn btn--outline" href="mailto:support@mountsol.org"><?php esc_html_e( 'Contact Support', 'mountsol' ); ?></a>
			</div>
		</div>
	</div>
</section>

<section class="mountsol-inner mountsol-inner--alt">
	<div class="container" style="max-width:48rem;">
		<h2 class="mountsol-inner__title"><?php esc_html_e( 'Frequently Asked Questions', 'mountsol' ); ?></h2>
		<div style="display:flex;flex-direction:column;gap:1rem;">
			<?php
			$faqs = array(
				array(
					/* translators: FAQ question */
					'q' => __( 'What are your business hours?', 'mountsol' ),
					/* translators: FAQ answer */
					'a' => __( 'We are available Monday through Friday, 9am to 6pm PT. For urgent matters, contact support@mountsol.org', 'mountsol' ),
				),
				array(
					'q' => __( 'How quickly will I hear back?', 'mountsol' ),
					'a' => __( 'We aim to respond to all inquiries within 24 business hours. Sales demo requests are typically scheduled within 48 hours.', 'mountsol' ),
				),
				array(
					'q' => __( 'Do you have a privacy policy?', 'mountsol' ),
					'a' => __( 'Yes, we take privacy seriously. Please see our privacy policy for details on how we handle your data.', 'mountsol' ),
				),
				array(
					'q' => __( 'Can I request a custom implementation?', 'mountsol' ),
					'a' => __( 'Absolutely! Contact our sales team to discuss custom solutions tailored to your business needs.', 'mountsol' ),
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

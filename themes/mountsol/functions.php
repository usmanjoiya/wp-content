<?php
/**
 * MountSol theme bootstrap.
 *
 * @package MountSol
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'MOUNTSOL_THEME_VERSION', '0.2.0' );

require get_template_directory() . '/inc/nav-data.php';
require get_template_directory() . '/inc/home-icons.php';
require get_template_directory() . '/inc/home-data.php';
require get_template_directory() . '/inc/feature-content.php';
require get_template_directory() . '/inc/industry-content.php';
require get_template_directory() . '/inc/pricing-data.php';
require get_template_directory() . '/inc/about-resources-data.php';
require get_template_directory() . '/inc/seed-pages.php';

/**
 * Render a local SVG icon from the theme's Lucide bundle.
 *
 * Supports either:
 * - React-style Lucide names (e.g. `ArrowRight`, `CheckCircle`) via `assets/icons/lucide-mapping.json`
 * - Direct kebab names (e.g. `arrow-right`) if a matching `assets/icons/lucide/<name>.svg` exists
 *
 * @param string               $name React icon name or kebab filename (without .svg).
 * @param array<string, mixed> $args Optional: class (string), size (int), aria_hidden (bool), title (string).
 */
function mountsol_svg_icon( string $name, array $args = array() ): void {
	$name = trim( $name );
	if ( $name === '' ) {
		return;
	}

	$class = isset( $args['class'] ) ? (string) $args['class'] : '';
	$size  = isset( $args['size'] ) ? max( 12, min( 64, (int) $args['size'] ) ) : 24;
	$ah    = array_key_exists( 'aria_hidden', $args ) ? (bool) $args['aria_hidden'] : true;
	$title = isset( $args['title'] ) ? (string) $args['title'] : '';

	static $mapping = null;
	if ( null === $mapping ) {
		$mapping_path = get_template_directory() . '/assets/icons/lucide-mapping.json';
		$mapping      = array();
		if ( is_readable( $mapping_path ) ) {
			$json = file_get_contents( $mapping_path ); // phpcs:ignore WordPress.WP.AlternativeFunctions.file_get_contents_file_get_contents
			if ( is_string( $json ) && $json !== '' ) {
				$decoded = json_decode( $json, true );
				if ( is_array( $decoded ) ) {
					$mapping = $decoded;
				}
			}
		}
	}

	$kebab = '';
	if ( isset( $mapping[ $name ]['file'] ) && is_string( $mapping[ $name ]['file'] ) ) {
		$kebab = (string) $mapping[ $name ]['file'];
		$kebab = preg_replace( '/\.svg$/', '', $kebab );
	}

	if ( $kebab === '' ) {
		$kebab = strtolower( preg_replace( '/([a-z0-9])([A-Z])/', '$1-$2', $name ) );
	}

	$kebab = preg_replace( '/[^a-z0-9\-]/', '', (string) $kebab );
	if ( $kebab === '' ) {
		return;
	}

	$svg_path = get_template_directory() . '/assets/icons/lucide/' . $kebab . '.svg';
	if ( ! is_readable( $svg_path ) ) {
		return;
	}

	$svg = file_get_contents( $svg_path ); // phpcs:ignore WordPress.WP.AlternativeFunctions.file_get_contents_file_get_contents
	if ( ! is_string( $svg ) || $svg === '' ) {
		return;
	}

	// Strip XML/doctype headers if present.
	$svg = preg_replace( '/<\?xml[^>]*\?>/i', '', $svg );
	$svg = preg_replace( '/<!doctype[^>]*>/i', '', $svg );

	$attrs = '';
	if ( $class !== '' ) {
		$attrs .= ' class="' . esc_attr( $class ) . '"';
	}
	$attrs .= ' width="' . esc_attr( (string) $size ) . '" height="' . esc_attr( (string) $size ) . '"';

	if ( $ah ) {
		$attrs .= ' aria-hidden="true" focusable="false"';
	} else {
		$attrs .= ' role="img"';
		if ( $title !== '' ) {
			$attrs .= ' aria-label="' . esc_attr( $title ) . '"';
		}
	}

	// Inject/override attributes on the first <svg ...> tag.
	$svg = preg_replace( '/<svg\b([^>]*)>/i', '<svg$1' . $attrs . '>', $svg, 1 );

	// Optionally inject a <title> for accessibility when not aria-hidden.
	if ( ! $ah && $title !== '' && stripos( $svg, '<title>' ) === false ) {
		$svg = preg_replace( '/<svg\b([^>]*)>/i', '<svg$1><title>' . esc_html( $title ) . '</title>', $svg, 1 );
	}

	echo $svg; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- theme-owned SVG asset.
}

/**
 * Convert a root-relative path to the home URL.
 *
 * @param string $path Path beginning with / or slug only.
 */
function mountsol_url( string $path = '/' ): string {
	$path = trim( $path );
	if ( '#' === $path ) {
		return '#';
	}
	$path = '/' . ltrim( $path, '/' );
	return esc_url( home_url( $path ) );
}

/**
 * @param array<string, mixed> $atts Anchor attributes.
 */
function mountsol_link( string $path, string $label, array $atts = array() ): void {
	$href  = mountsol_url( $path );
	$class = isset( $atts['class'] ) ? (string) $atts['class'] : '';
	unset( $atts['class'] );
	$extra = '';
	foreach ( $atts as $k => $v ) {
		$extra .= sprintf( ' %s="%s"', esc_attr( (string) $k ), esc_attr( (string) $v ) );
	}
	printf(
		'<a href="%s" class="%s"%s>%s</a>',
		esc_url( $href ),
		esc_attr( $class ),
		$extra,
		esc_html( $label )
	);
}

/**
 * @param array<int, array{label: string, path: string}> $links
 */
function mountsol_nav_link_list( array $links ): void {
	echo '<ul class="mega__list" role="list">';
	foreach ( $links as $item ) {
		printf(
			'<li><a class="mega__link" href="%s">%s</a></li>',
			esc_url( mountsol_url( $item['path'] ) ),
			esc_html( $item['label'] )
		);
	}
	echo '</ul>';
}

/**
 * @param array<int, array{label: string, path: string}> $links
 */
function mountsol_nav_mega_column( string $title, array $links ): void {
	echo '<div class="mega__col">';
	echo '<h4 class="mega__heading">' . esc_html( $title ) . '</h4>';
	mountsol_nav_link_list( $links );
	echo '</div>';
}

/**
 * Chevron icon for mega menu triggers.
 */
function mountsol_icon_chevron(): void {
	echo '<svg class="mega__chev" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>';
}

/**
 * Mobile drawer link group.
 *
 * @param array<int, array{label: string, path: string}> $links
 */
function mountsol_mobile_nav_section( string $title, array $links ): void {
	echo '<div class="mobile-drawer__section"><h4 class="mega__heading">' . esc_html( $title ) . '</h4>';
	foreach ( $links as $item ) {
		printf(
			'<a class="mobile-drawer__link" href="%s">%s</a>',
			esc_url( mountsol_url( $item['path'] ) ),
			esc_html( $item['label'] )
		);
	}
	echo '</div>';
}

function mountsol_setup(): void {
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support(
		'html5',
		array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' )
	);
}
add_action( 'after_setup_theme', 'mountsol_setup' );

/**
 * Bust browser cache when built CSS changes.
 */
function mountsol_asset_version(): string {
	$path = get_template_directory() . '/assets/css/app.css';
	if ( is_readable( $path ) ) {
		return MOUNTSOL_THEME_VERSION . '.' . (string) filemtime( $path );
	}
	return MOUNTSOL_THEME_VERSION;
}

function mountsol_wpforms_demo_form_id(): int {
	$id = absint( get_theme_mod( 'mountsol_wpforms_demo_id', 0 ) );
	if ( ! $id ) {
		$id = absint( apply_filters( 'mountsol_wpforms_demo_form_id', 0 ) );
	}
	return $id;
}

function mountsol_wpforms_contact_form_id(): int {
	$id = absint( get_theme_mod( 'mountsol_wpforms_contact_id', 0 ) );
	if ( ! $id ) {
		$id = absint( apply_filters( 'mountsol_wpforms_contact_form_id', 0 ) );
	}
	return $id;
}

/**
 * Render a WPForms shortcode or a neutral placeholder (no custom submission API).
 */
function mountsol_render_wpforms_or_placeholder( int $form_id ): void {
	if ( $form_id > 0 && function_exists( 'do_shortcode' ) ) {
		if ( shortcode_exists( 'wpforms' ) ) {
			echo do_shortcode( '[wpforms id="' . absint( $form_id ) . '"]' );
			return;
		}
	}
	echo '<div class="mountsol-form-placeholder">';
	esc_html_e( 'Install WPForms, create a form, then set the form ID under Appearance → Customize → MountSol forms (or add the shortcode to this page). See docs/forms in the theme.', 'mountsol' );
	echo '</div>';
}

function mountsol_customize_register( WP_Customize_Manager $wp_customize ): void {
	$wp_customize->add_section(
		'mountsol_setup',
		array(
			'title'    => __( 'MountSol setup', 'mountsol' ),
			'priority' => 85,
		)
	);
	$wp_customize->add_setting(
		'mountsol_use_seeded_home_as_front',
		array(
			'default'           => false,
			'sanitize_callback' => static function ( $v ): bool {
				return (bool) $v;
			},
		)
	);
	$wp_customize->add_control(
		'mountsol_use_seeded_home_as_front',
		array(
			'section' => 'mountsol_setup',
			'type'    => 'checkbox',
			'label'   => __( 'Use the seeded Home page (slug “home”) as the static front page', 'mountsol' ),
			'description' => __( 'Saves Reading settings to show the Home page on load. Requires that the theme has created that page (reactivate the theme if needed).', 'mountsol' ),
		)
	);

	$wp_customize->add_section(
		'mountsol_forms',
		array(
			'title'    => __( 'MountSol forms', 'mountsol' ),
			'priority' => 90,
		)
	);
	$wp_customize->add_setting(
		'mountsol_wpforms_demo_id',
		array(
			'default'           => 0,
			'sanitize_callback' => 'absint',
		)
	);
	$wp_customize->add_control(
		'mountsol_wpforms_demo_id',
		array(
			'section' => 'mountsol_forms',
			'label'   => __( 'WPForms: demo request form ID', 'mountsol' ),
			'type'    => 'number',
		)
	);
	$wp_customize->add_setting(
		'mountsol_wpforms_contact_id',
		array(
			'default'           => 0,
			'sanitize_callback' => 'absint',
		)
	);
	$wp_customize->add_control(
		'mountsol_wpforms_contact_id',
		array(
			'section' => 'mountsol_forms',
			'label'   => __( 'WPForms: contact form ID', 'mountsol' ),
			'type'    => 'number',
		)
	);
}
add_action( 'customize_register', 'mountsol_customize_register' );

/**
 * After Customizer save: optionally assign the seeded Home page as the static front page.
 */
function mountsol_customize_assign_home_front(): void {
	if ( ! get_theme_mod( 'mountsol_use_seeded_home_as_front', false ) ) {
		return;
	}
	$home = mountsol_find_page( 'home', 0 );
	if ( $home instanceof WP_Post ) {
		update_option( 'show_on_front', 'page' );
		update_option( 'page_on_front', (int) $home->ID );
	}
}
add_action( 'customize_save_after', 'mountsol_customize_assign_home_front' );

function mountsol_enqueue_assets(): void {
	wp_enqueue_style(
		'mountsol-fonts',
		'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap',
		array(),
		null
	);

	wp_enqueue_style(
		'mountsol-app',
		get_template_directory_uri() . '/assets/css/app.css',
		array( 'mountsol-fonts' ),
		mountsol_asset_version()
	);

	wp_enqueue_script(
		'mountsol-main',
		get_template_directory_uri() . '/assets/js/main.js',
		array(),
		mountsol_asset_version(),
		array(
			'strategy'  => 'defer',
			'in_footer' => true,
		)
	);
}
add_action( 'wp_enqueue_scripts', 'mountsol_enqueue_assets' );

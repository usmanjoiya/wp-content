<?php
/**
 * Login page shell (marketing preview — production app SSO replaces this).
 *
 * @package MountSol
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();
?>
<div class="mountsol-login-wrap">
	<div class="mountsol-login-card">
		<h1><?php esc_html_e( 'Welcome Back', 'mountsol' ); ?></h1>
		<p class="mountsol-muted"><?php esc_html_e( 'Log in to your MountSol account', 'mountsol' ); ?></p>
		<form class="mountsol-login-form" action="#" method="post">
			<label for="mountsol-login-email"><?php esc_html_e( 'Email Address', 'mountsol' ); ?></label>
			<input id="mountsol-login-email" type="email" name="email" placeholder="<?php esc_attr_e( 'you@example.com', 'mountsol' ); ?>" autocomplete="username">
			<label for="mountsol-login-pass"><?php esc_html_e( 'Password', 'mountsol' ); ?></label>
			<input id="mountsol-login-pass" type="password" name="password" placeholder="••••••••" autocomplete="current-password">
			<div style="display:flex;justify-content:space-between;align-items:center;font-size:0.875rem;margin-bottom:0.5rem;">
				<label style="display:flex;align-items:center;gap:0.35rem;font-weight:400;">
					<input type="checkbox" name="remember">
					<?php esc_html_e( 'Remember me', 'mountsol' ); ?>
				</label>
				<a href="#" style="color:var(--foreground);"><?php esc_html_e( 'Forgot password?', 'mountsol' ); ?></a>
			</div>
			<button type="submit" class="btn btn--accent"><?php esc_html_e( 'Sign In', 'mountsol' ); ?></button>
		</form>
		<p style="text-align:center;font-size:0.875rem;color:var(--muted-foreground);margin:1.5rem 0 0;"><?php esc_html_e( 'Do not have an account?', 'mountsol' ); ?></p>
		<a class="btn btn--outline" style="margin-top:0.75rem;" href="<?php echo esc_url( mountsol_url( '/demo' ) ); ?>"><?php esc_html_e( 'Start 14-Day Free Trial', 'mountsol' ); ?></a>
		<p style="font-size:0.75rem;color:var(--muted-foreground);text-align:center;margin-top:1.5rem;">
			<?php esc_html_e( 'By signing in, you agree to our Terms of Service and Privacy Policy.', 'mountsol' ); ?>
		</p>
	</div>
</div>
<?php
get_footer();

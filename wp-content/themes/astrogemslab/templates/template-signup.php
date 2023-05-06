<?php 
if ( is_user_logged_in() ) {
	wp_redirect('my-account');
}
/* Template Name: Sign Up Page */
get_header();
defined( 'ABSPATH' ) || exit;
?>

<?php if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

do_action( 'woocommerce_before_customer_login_form' ); 
if ( ! is_user_logged_in() ) : ?>
<main class="main-content">
	<div class="container-lg">
		<div class="content-container">
			<div class="row">
				<div class="col-lg-5 col-md-7 col-sm-8 mx-auto floating-label-form py-5">
					<div class="card form-card shadow-sm">
						<div class="card-body px-5 pt-4 pb-5">
							<h3 class="page-heading text-center">SIGNUP</h3>
										
							<form method="post" class="form-signin register" <?php do_action( 'woocommerce_register_form_tag' ); ?> >

								<?php do_action( 'woocommerce_register_form_start' ); ?>

<?php if ( 'no' === get_option( 'woocommerce_registration_generate_username' ) ) : ?>

<div class="form-group mb-3">
	<input type="text" class="form-control form-control-lg fs14 p-3" name="username" id="reg_username" autocomplete="username" value="<?php echo ( ! empty( $_POST['username'] ) ) ? esc_attr( wp_unslash( $_POST['username'] ) ) : ''; ?>" placeholder="Enter User Name*" /><?php // @codingStandardsIgnoreLine ?>
</div>
<div class="form-group mb-3">
<input type="email" class="form-control form-control-lg fs14 p-3" name="email" id="reg_email" autocomplete="email" value="" placeholder="Enter User Email*" required="">						</div>

<div class="form-group mb-3">
<input type="password" class="form-control form-control-lg fs14 p-3" name="password" id="reg_password" autocomplete="new-password" placeholder="Enter Password*" required="">
</div>
								<?php endif; ?>

								<?php if ( 'no' === get_option( 'woocommerce_registration_generate_password' ) ) : ?>

								<div class="form-group mb-3">
									<input type="password" class="form-control form-control-lg fs14 p-3" name="password" id="reg_password" autocomplete="new-password" placeholder="Enter Password*" required />
								</div>

								<?php else : ?>

									

								<?php endif; ?>

								<?php do_action( 'woocommerce_register_form' ); ?>

								<div class="woocommerce-form-row form-row">
									<?php wp_nonce_field( 'woocommerce-register', 'woocommerce-register-nonce' ); ?>
									<button type="submit" class="btn btn-sm btn-prime btn-lg w-100 p-3 text-center" name="register" value="<?php esc_attr_e( 'Register', 'woocommerce' ); ?>"><?php esc_html_e( 'Register', 'woocommerce' ); ?></button>
								</div>

								<?php do_action( 'woocommerce_register_form_end' ); ?>

							</form>
							<hr class="my-4 d-block">
							<p class="text-center mb-2">Already a User?</p>
							<a class="btn btn-sm btn-outline-prime d-block p-2" href="<?=home_url('my-account')?>">LOGIN NOW</a>			
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</main>

<?php endif; ?>
<?php do_action( 'woocommerce_after_customer_login_form' ); ?>
<?php get_footer(); ?>
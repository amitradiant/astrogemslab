<?php
/**
 * Login Form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/form-login.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 4.1.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

do_action( 'woocommerce_before_customer_login_form' ); ?>

<?php //if ( 'yes' === get_option( 'woocommerce_enable_myaccount_registration' ) ) : ?>
                  
<div class="col-lg-5 col-md-7 col-sm-8 mx-auto floating-label-form py-5">
	<div class="card form-card shadow-sm">
		<div class="card-body px-5 pt-4 pb-5">
			<h3 class="page-heading text-center">LOGIN</h3>	
               
			<form class="form-signin" method="post">

				<?php do_action( 'woocommerce_login_form_start' ); ?>

				<!--p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
					<label for="username"><?php esc_html_e( 'Username or email address', 'woocommerce' ); ?>&nbsp;<span class="required">*</span></label>
					<input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="username" id="username" autocomplete="username" value="<?php //echo ( ! empty( $_POST['username'] ) ) ? esc_attr( wp_unslash( $_POST['username'] ) ) : ''; ?>" /><?php // @codingStandardsIgnoreLine ?>
				</p-->
				<div class="form-group mb-3">
					<input type="text" class="form-control form-control-lg fs14 p-3" name="username" id="username" autocomplete="username" value="<?php echo ( ! empty( $_POST['username'] ) ) ? esc_attr( wp_unslash( $_POST['username'] ) ) : ''; ?>" placeholder="Enter Username*" />
				</div>
				<div class="form-group mb-3">
					<input class="form-control form-control-lg fs14 p-3" type="password" name="password" id="password" autocomplete="current-password"  placeholder="Enter Password*" />
				</div>
				<!--p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
					<label for="password"><?php //esc_html_e( 'Password', 'woocommerce' ); ?>&nbsp;<span class="required">*</span></label>
					<input class="woocommerce-Input woocommerce-Input--text input-text" type="password" name="password" id="password" autocomplete="current-password" />
				</p-->

				<?php do_action( 'woocommerce_login_form' ); ?>
				<div class="checkbox mb-2">
					<label>
						<input class="woocommerce-form__input woocommerce-form__input-checkbox form-check-input" name="rememberme" type="checkbox" id="rememberme" value="forever" />  <?php esc_html_e( 'Remember me', 'woocommerce' ); ?>
					</label>
				</div>
				<div class="formbtn-group h5">
					<?php wp_nonce_field( 'woocommerce-login', 'woocommerce-login-nonce' ); ?>
					<button type="submit" class="btn btn-sm btn-prime btn-lg w-100 p-3 text-center" name="login" value="<?php esc_attr_e( 'LOGIN', 'woocommerce' ); ?>"><?php esc_html_e( 'LOGIN', 'woocommerce' ); ?></button>
					<p class="mt-3 mb-3"><a class="btn btn-sm btn-outline-prime d-block p-2" href="<?php echo esc_url( wp_lostpassword_url() ); ?>"><?php esc_html_e( 'Lost your password?', 'woocommerce' ); ?></a></p>
				</div>
  
				<hr class="my-4 d-block">
				<p class="text-center mb-2 text-muted">New User?</p>
				<a class="btn btn-sm btn-outline-prime d-block p-2" href="<?=home_url('signup')?>">CREATE ACCOUNT</a>
				<!--p class="form-row">
					<label class="woocommerce-form__label woocommerce-form__label-for-checkbox woocommerce-form-login__rememberme">
						<input class="woocommerce-form__input woocommerce-form__input-checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever" /> <span><?php esc_html_e( 'Remember me', 'woocommerce' ); ?></span>
					</label>
					<?php //wp_nonce_field( 'woocommerce-login', 'woocommerce-login-nonce' ); ?>
					<button type="submit" class="woocommerce-button button woocommerce-form-login__submit" name="login" value="<?php esc_attr_e( 'Log in', 'woocommerce' ); ?>"><?php esc_html_e( 'Log in', 'woocommerce' ); ?></button>
				</p>
				<p class="woocommerce-LostPassword lost_password">
					<a href="<?php echo esc_url( wp_lostpassword_url() ); ?>"><?php esc_html_e( 'Lost your password?', 'woocommerce' ); ?></a>
				</p-->

				<?php do_action( 'woocommerce_login_form_end' ); ?>

			</form>
		</div>
	</div>
</div>
<?php //endif; ?>

<?php do_action( 'woocommerce_after_customer_login_form' ); ?>

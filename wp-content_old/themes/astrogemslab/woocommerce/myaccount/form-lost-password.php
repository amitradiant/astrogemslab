<?php
/**
 * Lost password form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/form-lost-password.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.5.2
 */

defined( 'ABSPATH' ) || exit;

do_action( 'woocommerce_before_lost_password_form' );
?>
<div class="col-lg-5 col-md-7 col-sm-8 mx-auto floating-label-form">
	<div class="card form-card">
		<div class="card-body">
			<h5 class="page-heading text-center"><?=the_title()?></h5>
               
			<form method="post" class="form-signin">

				<p><?php echo apply_filters( 'woocommerce_lost_password_message', esc_html__( 'Lost your password? Please enter your username or email address. You will receive a link to create a new password via email.', 'woocommerce' ) ); ?></p><?php // @codingStandardsIgnoreLine ?>

				<div class="form-group">
					<input class="woocommerce-Input woocommerce-Input--text input-text form-control" type="text" name="user_login" id="user_login" autocomplete="username" placeholder="Enter Username or email*"/>
				</div>
				
				<div class="clear"></div>

				<?php do_action( 'woocommerce_lostpassword_form' ); ?>

				<p class="form-row">
					<input type="hidden" name="wc_reset_password" value="true" />
					<button type="submit" class="btn btn-sm btn-dark btn-block woocommerce-Button button" value="<?php esc_attr_e( 'Reset password', 'woocommerce' ); ?>"><?php esc_html_e( 'Reset password', 'woocommerce' ); ?></button>
				</p>

				<?php wp_nonce_field( 'lost_password', 'woocommerce-lost-password-nonce' ); ?>

			</form>
		</div>
	</div>
</div>
<?php
do_action( 'woocommerce_after_lost_password_form' );

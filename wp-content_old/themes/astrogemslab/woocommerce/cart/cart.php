<?php
/**
 * Cart Page
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/cart/cart.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 7.0.1
 */

defined( 'ABSPATH' ) || exit;

do_action( 'woocommerce_before_cart' ); ?>



<section class="details-section pt-xl-4 pt-lg-4 pt-md-3 pt-sm-3 pt-3 pb50">
            <div class="container-xl">

<form class="woocommerce-cart-form" action="<?php echo esc_url( wc_get_cart_url() ); ?>" method="post">

	<?php do_action( 'woocommerce_before_cart_table' ); ?>

  <div class="cart-wrap">
    <div class="cart-content">
         
       	<div class="cart-header d-none d-sm-block">
			<div class="row">
				<div class="col-lg-2 col-3">
					<div class="product-remove"><span class="screen-reader-text"><?php esc_html_e( 'Remove item', 'woocommerce' ); ?></span></div>
					<div class="product-thumbnail"><span class="screen-reader-text"><?php esc_html_e( 'Thumbnail image', 'woocommerce' ); ?></span></div>
				</div>
				<div class="col-lg-6 col-5">
					<div class="row">
						<div class="col-md-7"><div class="product-name"><?php esc_html_e( 'Product', 'woocommerce' ); ?></div></div>
						<div class="col-md-5"><div class="product-price"><?php esc_html_e( 'Price', 'woocommerce' ); ?></div></div>
					</div>
				</div>
				<div class="col-lg-4 col-4">
					<div class="row">
						<div class="col-md-6">
							<div class="product-quantity"><?php esc_html_e( 'Quantity', 'woocommerce' ); ?></div>
						</div>
						<div class="col-md-6">
							<div class="product-subtotal"><?php esc_html_e( 'Subtotal', 'woocommerce' ); ?></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- CART HEADER -->
		<!-- #################################################################### -->
		<!-- <div class="col-lg-2 col-3">
			<figure class="cart-product-image"><span class="screen-reader-text"><?php esc_html_e( 'Thumbnail image', 'woocommerce' ); ?></span></figure>
        </div> -->
        
       <!--  <div class="col-2"><?php esc_html_e( 'Image', 'woocommerce' ); ?></div>

		<div class="col-2"><?php esc_html_e( 'Product', 'woocommerce' ); ?></div>
		<div class="col-2"><?php esc_html_e( 'Price', 'woocommerce' ); ?></div>
		<div class="col-2"><?php esc_html_e( 'Quantity', 'woocommerce' ); ?></div>
		<div class="col-2"><?php esc_html_e( 'Subtotal', 'woocommerce' ); ?></div>
			
		</div> -->


		<div class="cart-block pb-1 mb-0">
			<?php do_action( 'woocommerce_before_cart_contents' ); ?>

			<?php
			foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
				$_product   = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );
				$product_id = apply_filters( 'woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key );

				if ( $_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters( 'woocommerce_cart_item_visible', true, $cart_item, $cart_item_key ) ) {
					$product_permalink = apply_filters( 'woocommerce_cart_item_permalink', $_product->is_visible() ? $_product->get_permalink( $cart_item ) : '', $cart_item, $cart_item_key );
					?>


				<div class="product-list-row <?php echo esc_attr( apply_filters( 'woocommerce_cart_item_class', 'cart_item', $cart_item, $cart_item_key ) ); ?>">

							
								<div class="row">
								<div class="col-lg-2 col-3">
							<figure class="cart-product-image">		
									<?php
									$thumbnail = apply_filters( 'woocommerce_cart_item_thumbnail', $_product->get_image(), $cart_item, $cart_item_key );

									if ( ! $product_permalink ) {
										echo $thumbnail; // PHPCS: XSS ok.
									} else {
										printf( '<a href="%s">%s</a>', esc_url( $product_permalink ), $thumbnail ); // PHPCS: XSS ok.
									}
									?>
									</figure>
                                </div>
						

						<div class="col-lg-6 col-5">
                            <div class="row">
                              <div class="col-md-7  pt-2 product-title pe-lg-5">
						
                           <p class="mb-2">
						<?php
						if ( ! $product_permalink ) {
							echo wp_kses_post( apply_filters( 'woocommerce_cart_item_name', $_product->get_name(), $cart_item, $cart_item_key ) . '&nbsp;' );
						} else {
							echo wp_kses_post( apply_filters( 'woocommerce_cart_item_name', sprintf( '<a href="%s">%s</a>', esc_url( $product_permalink ), $_product->get_name() ), $cart_item, $cart_item_key ) );
						}

						do_action( 'woocommerce_after_cart_item_name', $cart_item, $cart_item_key );

						// Meta data.
						echo wc_get_formatted_cart_item_data( $cart_item ); // PHPCS: XSS ok.

						// Backorder notification.
						if ( $_product->backorders_require_notification() && $_product->is_on_backorder( $cart_item['quantity'] ) ) {
							echo wp_kses_post( apply_filters( 'woocommerce_cart_item_backorder_notification', '<p class="backorder_notification">' . esc_html__( 'Available on backorder', 'woocommerce' ) . '</p>', $product_id ) );
						}
						?></p>
						</div>
					
					<div class="col-md-5 pt-2 product-price-single">
							<?php
								echo apply_filters( 'woocommerce_cart_item_price', WC()->cart->get_product_price( $_product ), $cart_item, $cart_item_key ); // PHPCS: XSS ok.
							?>
						</div>
                    </div>
				</div>


						<div class="col-lg-4 col-4 pt-2 product-quantity">
                                    <div class="row">
                                        <div class="col-md-6">
						<?php
						if ( $_product->is_sold_individually() ) {
							$min_quantity = 1;
							$max_quantity = 1;
						} else {
							$min_quantity = 0;
							$max_quantity = $_product->get_max_purchase_quantity();
						}

						$product_quantity = woocommerce_quantity_input(
							array(
								'input_name'   => "cart[{$cart_item_key}][qty]",
								'input_value'  => $cart_item['quantity'],
								'max_value'    => $max_quantity,
								'min_value'    => $min_quantity,
								'product_name' => $_product->get_name(),
							),
							$_product,
							false
						);

						echo apply_filters( 'woocommerce_cart_item_quantity', $product_quantity, $cart_item_key, $cart_item ); // PHPCS: XSS ok.
						?>
						</div>
					

						<div class="col-md-6 pt-2 product-price-total text-end text-sm-start">
							<?php
								echo apply_filters( 'woocommerce_cart_item_subtotal', WC()->cart->get_product_subtotal( $_product, $cart_item['quantity'] ), $cart_item, $cart_item_key ); // PHPCS: XSS ok.
							?>
						</div>
                    </div>
				</div>

					</div>
				
			</div>
					<?php
				}
			}
			?>

			<?php do_action( 'woocommerce_cart_contents' ); ?>

 <div class="cart-footer mt-1 pt-2">
<div class="row justify-content-between cart-total">
<div class="col-xl-12 col-lg-12 col-md-12 py-sm-3 pt-3 pb-2">
 

					<div class="d-flex justify-content-between align-items-center">
						<?php if ( wc_coupons_enabled() ) { ?>
						<div class="coupon d-flex flex-row align-items-center">
							<label class="me-2" for="coupon_code"><?php esc_html_e( 'Coupon:', 'woocommerce' ); ?></label> 
							<input type="text" name="coupon_code" class="form-control me-2 input-text" id="coupon_code" value="" placeholder="<?php esc_attr_e( 'Coupon code', 'woocommerce' ); ?>" /> 
							<button style="min-width: 130px;" type="submit" class="btn btn-prime text-uppercase<?php echo esc_attr( wc_wp_theme_get_element_class_name( 'button' ) ? ' ' . wc_wp_theme_get_element_class_name( 'button' ) : '' ); ?>" name="apply_coupon" value="<?php esc_attr_e( 'Apply coupon', 'woocommerce' ); ?>"><?php esc_attr_e( 'Apply coupon', 'woocommerce' ); ?></button>
							<?php do_action( 'woocommerce_cart_coupon' ); ?>
						</div>
					<?php } ?>

					<button type="submit" class="<?php echo esc_attr( wc_wp_theme_get_element_class_name( 'button' ) ? ' ' . wc_wp_theme_get_element_class_name( 'button' ) : '' ); ?> btn btn-outline-prime text-uppercase" name="update_cart" id="update_cart" value="Update cart" disabled="" aria-disabled="true"><?php esc_html_e( 'Update cart', 'woocommerce' ); ?></button>

					<?php do_action( 'woocommerce_cart_actions' ); ?>

					<?php wp_nonce_field( 'woocommerce-cart', 'woocommerce-cart-nonce' ); ?>
				 

			<?php do_action( 'woocommerce_after_cart_contents' ); ?>
					</div>
		</div>
	</div>
  

 	<hr class="w-100 my-2">
    <div class="col-xl-12 col-lg-12 col-md-12 pt-sm-3 pt-2 pb-3">
        <div class="row justify-content-end">
			<div class="col-sm-4 cart-total-table">
				<?php
					/**
					 * Cart collaterals hook.
					 *
					 * @hooked woocommerce_cross_sell_display
					 * @hooked woocommerce_cart_totals - 10
					 */
					do_action( 'woocommerce_cart_collaterals' );
				?>
			</div>
		</div>
	</div>
</div>
</div>
 
</div>


	<?php do_action( 'woocommerce_after_cart_table' ); ?>
</form>

</div>
</section>
</main>

<?php do_action( 'woocommerce_before_cart_collaterals' ); ?>



<?php do_action( 'woocommerce_after_cart' ); ?>

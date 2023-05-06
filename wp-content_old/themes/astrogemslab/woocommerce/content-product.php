<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

// Ensure visibility.
if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}
?>
<!-- <li <?php wc_product_class( '', $product ); ?>> -->
	 <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-4">
        <a class="product-block position-relative bg-white shadow-sm rounded-1 h-100 card py-2 px-3 border-light-subtle d-block" href="<?php echo get_post_permalink($product->id); ?>">
		<?php
		$featured_img = wp_get_attachment_url(get_post_thumbnail_id($product->id));
		 ?>
                                 
        <span class="certifyby-logo d-inline-block position-absolute text-center">
        <img class="img-fluid mx-auto d-block" src="<?php echo get_template_directory_uri(); ?>/images/igi.png" alt=""></span>
        <figure>
        <img class="img-fluid mx-auto d-block" src="<?php echo $featured_img; ?>" alt=""></figure>
        <div class="product-content text-center">
            <h6 class="fw400 mb-3 fs16 px-md-4"><?php echo get_the_title($product->id); ?></h6>
            <div class="row fs12 py-2 border-top border-bottom border-light-subtle align-items-center lh100">
                <div class="col-6 text-center text-muted fs12"><strong class="d-block fw500 text-uppercase text-dark mb-1">SKU </strong><?php echo $product->get_sku(); ?></div>
                <div class="col-6 text-center text-muted fs12"><strong class="d-block fw500 text-uppercase text-dark mb-1">Origin </strong>Kashmir</div>
            </div>
            <div class="fs16 fw600 text-dark text-center px-3 pt-2">
                <?php echo $product->get_price_html(); ?>
            </div>
        </div>
    </a>
	<?php
	/**
	 * Hook: woocommerce_before_shop_loop_item.
	 *
	 * @hooked woocommerce_template_loop_product_link_open - 10
	 */
	//do_action( 'woocommerce_before_shop_loop_item' );

	/**
	 * Hook: woocommerce_before_shop_loop_item_title.
	 *
	 * @hooked woocommerce_show_product_loop_sale_flash - 10
	 * @hooked woocommerce_template_loop_product_thumbnail - 10
	 */
	//do_action( 'woocommerce_before_shop_loop_item_title' );

	/**
	 * Hook: woocommerce_shop_loop_item_title.
	 *
	 * @hooked woocommerce_template_loop_product_title - 10
	 */
	//do_action( 'woocommerce_shop_loop_item_title' );

	/**
	 * Hook: woocommerce_after_shop_loop_item_title.
	 *
	 * @hooked woocommerce_template_loop_rating - 5
	 * @hooked woocommerce_template_loop_price - 10
	 */
	//do_action( 'woocommerce_after_shop_loop_item_title' );

	/**
	 * Hook: woocommerce_after_shop_loop_item.
	 *
	 * @hooked woocommerce_template_loop_product_link_close - 5
	 * @hooked woocommerce_template_loop_add_to_cart - 10
	 */
	//do_action( 'woocommerce_after_shop_loop_item' );
	?>
</div>

<?php 
	 add_action( 'wp_enqueue_scripts', 'astrogemslab_child_enqueue_styles' );
	 function astrogemslab_child_enqueue_styles() {
 		  wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' ); 
wp_enqueue_script( 'ht-custom-js',get_stylesheet_directory_uri().'/js/custom_ajax.js',array('jquery'), '4.0.2');
wp_localize_script('ht-custom-js','ajax_object',
            array( 'ajax_url' => admin_url( 'admin-ajax.php' )) );
    

 		  } 
add_theme_support( 'woocommerce' ); 

/*Ajax Filter Load Product Shop page based on taxonomy*/
add_action( 'wp_ajax_taxonomy_products','taxonomy_products' );
add_action( 'wp_ajax_nopriv_taxonomy_products','taxonomy_products');

function taxonomy_products(){
	$catids = explode(',',trim($_POST['catids'],','));
	ob_start();
	if($catids[0]==''){
		$args =array(
		'post_type'      => 'product',
		'posts_per_page' => -1,
		'order'          => 'ASC',
		'post_status'    => 'publish',
	);

}else{

		$args =array(
		'post_type'      => 'product',
		'posts_per_page' => -1,
		'order'          => 'ASC',
		'post_status'    => 'publish',
		'tax_query'      => array(
			array(
				'taxonomy'   => 'product-types',
				'field'      => 'term_id',
				'terms'      => $catids
			)
		)
	);

}   

// echo "<pre>";
// print_r($args);
// wp_die();
	?>
		<?php  

		$query = new WP_Query( $args);
		if( $query->have_posts() ): 
			while( $query->have_posts()): $query->the_post();
				$product_id = get_the_ID();
				$_product = wc_get_product( $product_id );
				$price_html = $_product->get_price_html();
 $image = wp_get_attachment_image_src( get_post_thumbnail_id( $product_id ), 'single-post-thumbnail' );
				?>

				<div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 mb-4">
        <a class="product-block" href="<?php echo get_permalink(); ?>">
		                                 <figure>
                                        <img class="w-100 shopimg" src="<?php  echo $image[0]; ?>" alt="<?php echo get_the_title(); ?>">
                                        <figcaption class="transition">View Product <i class="fa fa-chevron-right"></i></figcaption>
                                    </figure>
                                    <div class="product-detail">
                                        <div class="product-name fs15"><?php echo get_the_title(); ?></div>

                                        <p class="product-price"><?php echo $price_html; ?></p>
                                    </div>
                            </a>
	</div>

	<?php endwhile;
	else: ?>
		<p class="eventnotfound">Not Found</p>
	<?php endif; ?>

<?php
$result['message'] = ob_get_clean();
echo json_encode($result);
wp_die();
} 

// Ajax Filter End

// Add Plus Minus on card quantity
add_action( 'wp_footer', 'set_quantity_plus_minus' );
 
function set_quantity_plus_minus() { if ( ! is_product() && ! is_cart() ) return; ?>

	<script type="text/javascript">
	function plusVal(cart_id){
		
		var qty = $('#'+cart_id );
		var val = parseFloat(qty.val());
		var max = parseFloat(qty.attr( 'max' ));
		var min = parseFloat(qty.attr( 'min' ));
		var step = parseFloat(qty.attr( 'step' ));
		if ( max && ( max <= val ) ) {
		   qty.val( max );
		} else {
		   qty.val( val + step );
		}
		$('#update_cart').attr('disabled',false);
	}
	function minusVal(cart_id){
		var qty = $('#'+cart_id );
		var val = parseFloat(qty.val());
		var max = parseFloat(qty.attr( 'max' ));
		var min = parseFloat(qty.attr( 'min' ));
		var step = parseFloat(qty.attr( 'step' ));
		if ( min && ( min >= val ) ) {
		   qty.val( min );
		} else if ( val > 1 ) {
		   qty.val( val - step );
		}
		$('#update_cart').attr('disabled',false);
	}
 	</script>
   <?php
}


add_filter('woocommerce_product_single_add_to_cart_text','custom_add_to_cart_button_woocommerce');
function custom_add_to_cart_button_woocommerce() {
return __('ADD TO CART', 'woocommerce');
}

add_filter( 'woocommerce_show_page_title', '__return_null' );


add_action( 'wp_footer', 'set_quantity_plus_minus' );


add_theme_support( "wc-product-gallery-zoom" );
add_theme_support( "wc-product-gallery-lightbox" );
add_theme_support( "wc-product-gallery-slider" ); 		  



// Ajax get_cart_contents_count end

/***Ajax add to cart JS for AJAX Add to Cart handling*/
function ace_product_page_ajax_add_to_cart_js() {
    ?><script type="text/javascript" charset="UTF-8">
		jQuery(function($) {

			$('form.cart').on('submit', function(e) {
				e.preventDefault();

				var form = $(this);
				form.block({ message: null, overlayCSS: { background: '#fff', opacity: 0.6 } });

				var formData = new FormData(form[0]);
				formData.append('add-to-cart', form.find('[name=add-to-cart]').val() );

				// Ajax action.
				$.ajax({
					url: wc_add_to_cart_params.wc_ajax_url.toString().replace( '%%endpoint%%', 'ace_add_to_cart' ),
					data: formData,
					type: 'POST',
					processData: false,
					contentType: false,
					complete: function( response ) {
						response = response.responseJSON;

						if ( ! response ) {
							return;
						}

						if ( response.error && response.product_url ) {
							window.location = response.product_url;
							return;
						}

						// Redirect to cart option
						if ( wc_add_to_cart_params.cart_redirect_after_add === 'yes' ) {
							window.location = wc_add_to_cart_params.cart_url;
							return;
						}

						var $thisbutton = form.find('.single_add_to_cart_button'); //
//						var $thisbutton = null; // uncomment this if you don't want the 'View cart' button

						// Trigger event so themes can refresh other areas.
						$( document.body ).trigger( 'added_to_cart', [ response.fragments, response.cart_hash, $thisbutton ] );

						// Remove existing notices
						$( '.woocommerce-error, .woocommerce-message, .woocommerce-info' ).remove();

						// Add new notices
						form.closest('.product').before(response.fragments.notices_html)

						form.unblock();
					}
				});
			});
		});
	</script><?php
}
add_action( 'wp_footer', 'ace_product_page_ajax_add_to_cart_js' );

/*** Add to cart handler.*/
function ace_ajax_add_to_cart_handler() {
	WC_Form_Handler::add_to_cart_action();
	WC_AJAX::get_refreshed_fragments();
}
add_action( 'wc_ajax_ace_add_to_cart', 'ace_ajax_add_to_cart_handler' );
add_action( 'wc_ajax_nopriv_ace_add_to_cart', 'ace_ajax_add_to_cart_handler' );

// Remove WC Core add to cart handler to prevent double-add
remove_action( 'wp_loaded', array( 'WC_Form_Handler', 'add_to_cart_action' ), 20 );

/*** Add fragments for notices.*/
function ace_ajax_add_to_cart_add_fragments( $fragments ) {
	$all_notices  = WC()->session->get( 'wc_notices', array() );
	$notice_types = apply_filters( 'woocommerce_notice_types', array( 'error', 'success', 'notice' ) );

	ob_start();
	foreach ( $notice_types as $notice_type ) {
		if ( wc_notice_count( $notice_type ) > 0 ) {
			wc_get_template( "notices/{$notice_type}.php", array(
				'notices' => array_filter( $all_notices[ $notice_type ] ),
			) );
		}
	}
	$fragments['notices_html'] = ob_get_clean();

	wc_clear_notices();

	return $fragments;
}
add_filter( 'woocommerce_add_to_cart_fragments', 'ace_ajax_add_to_cart_add_fragments' );

/***Ajax add to cart JS for AJAX Add to Cart handling End*/
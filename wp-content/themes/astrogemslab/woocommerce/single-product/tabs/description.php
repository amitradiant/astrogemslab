<?php
/**
 * Description tab
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/tabs/description.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 2.0.0
 */

defined( 'ABSPATH' ) || exit;

global $post;

$heading = apply_filters( 'woocommerce_product_description_heading', __( 'Description', 'woocommerce' ) );

?>

<?php if ( $heading ) : ?>
	<h2><?php //echo esc_html( $heading ); ?></h2>
<?php endif; ?>

 <section class="specifications-section py-xl-5 py-lg-5 py-md-4 py-sm-4 py-4">
            <div class="container container-custom">
                <div class="specifications-table">
                    <h4>Product Specifications</h4>
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                        
        <?php if( have_rows('add_product') ): while( have_rows('add_product') ): the_row(); ?>
                        <tr>
                            <td><b>SKU</b></td>
                            <td>BL1544</td>
                        </tr>
                        <tr>
                            <td><b>Treatment</b></td>
                            <td><?php echo get_sub_field('treatment'); ?></td>
                        </tr>
                        <tr>
                            <td><b>Transparency</b></td>
                            <td><?php echo get_sub_field('transparency'); ?></td>
                        </tr>
                        <tr>
                            <td> <b> Shape</b></td>
                            <td><?php echo get_sub_field('shape'); ?></td>
                        </tr>
                        <tr>
                            <td><b>Origin(Source)</b></td>
                            <td><?php echo get_sub_field('originsource'); ?></td>
                        </tr>
                        <tr>
                            <td><b>Color</b></td>
                            <td><?php echo get_sub_field('color'); ?></td>
                        </tr>
                        <tr>
                            <td><b>Certification</b></td>
                            <td><?php echo get_sub_field('certification'); ?></td>
                        </tr>
                        <tr>
                            <td><b>Exact Dimensions</b></td>
                            <td><?php echo get_sub_field('exact_dimensions'); ?> </td>
                        </tr>
                        <tr>
                            <td><b>Refractive Index</b></td>
                            <td><?php echo get_sub_field('refractive_index'); ?></td>
                        </tr>
                        <tr>
                            <td><b>Specific Gravity</b></td>
                            <td><?php echo get_sub_field('specific_gravity'); ?></td>
                        </tr>
                        <tr>
                            <td><b>Weight (Carat)</b></td>
                            <td><?php echo get_sub_field('weight_carat'); ?></td>
                        </tr>
                        <tr>
                            <td><b>Weight (Ratti)</b></td>
                            <td><?php echo get_sub_field('weight_ratti'); ?></td>
                        </tr>
        <?php endwhile; endif; ?> 

                    </table>
                    </div>
                    <!-- /.table-responsive -->
                </div>
                <!-- /.specifications-table -->
            </div>
        </section>
        
<?php the_content(); ?>

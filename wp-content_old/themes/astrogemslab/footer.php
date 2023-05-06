<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package astrogemslab
 */

?>

	<footer class="footer-main">
        <div class="newsletter-section bg-dark">
            <div class="container container-custom py-2 py-sm-3 py-md-4">
                <div class="row align-items-center">
                    <div class="col-lg-7">
                        <div class="row align-items-center">
                            <div class="col-md-auto my-3">
                                <h5 class="text-white mb-0">Newsletter<br>Subscription</h5>
                            </div>
                            <div class="col-md my-3">
                                <div class="newsletter-block">
                                <?php dynamic_sidebar('news'); ?>    
                                    <!-- <form action="" class="d-block">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Your Email Address" aria-label="Your Email Address" aria-describedby="newsletter-btn">
                                            <button class="btn btn-light px-4" type="button" id="newsletter-btn">SUBSCRIBE</button>
                                        </div>
                                    </form> -->
                                </div>
                            </div>
                        </div>
                        <!-- /.row -->
                    </div>
                    <div class="col-lg-5 text-lg-end">
                        <div class="social-handles-footer d-flex flex-row justify-content-end align-items-center">
                            <h6 class="footer-block-heading text-white me-4 mb-0">Follow us on</h6>
                            <a href="<?php echo get_field('facebook','option'); ?>" target="_blank"><i class="fab fa-facebook"></i></a>
                            <a href="<?php echo get_field('instagram','option'); ?>" target="_blank"><i class="fab fa-instagram"></i></a>
                            <a href="<?php echo get_field('youtube','option'); ?>" target="_blank"><i class="fab fa-youtube"></i></a>
                            <a href="<?php echo get_field('twitter','option'); ?>" target="_blank"><i class="fab fa-twitter"></i></a>
                            <a href="<?php echo get_field('linkedin','option'); ?>" target="_blank"><i class="fab fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div>
        </div>
        <!-- /.footer-newsletter -->
        <div class="footer-info pt-5">
            <div class="container container-custom pt-2 pt-sm-3 pt-md-4">
                <div class="row mb-4">
                    <div class="col-sm-6 col-md-3 footer-links">
                        <h6 class="mb-4 body-font">Info</h6>
                        
                            <?php 
                       $defaults = array(
                       'menu'            => 'footer1',
                       'container'       => false,
                       'menu_class'      => '',  
                       'echo'            => true,
                       'items_wrap'      => '<ul class="list-unstyled">%3$s</ul>',
                    
                       'walker' => '',
                       );
                      wp_nav_menu( $defaults );
                    ?>
                        
                    </div>
                    <div class="col-sm-6 col-md-3 footer-links">
                        <h6 class="mb-4 body-font">Gem Stones</h6>
                        <ul class="list-unstyled">
                            <li><a href="#">Ruby</a></li>
                            <li><a href="#">Blue Sapphire</a></li>
                            <li><a href="#">Yellow Sapphire</a></li>
                            <li><a href="#">Emerald</a></li>
                            <li><a href="#">Opal</a></li>
                            <li><a href="#">Pearl</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-md-3 footer-links">
                        <h6 class="mb-4 body-font">Shop By</h6>
                        <ul class="list-unstyled">
                            <li><a href="#">Birthstone</a></li>
                            <li><a href="#">Exclusive Collections</a></li>
                            <li><a href="#">Natural Sapphires</a></li>
                            <li><a href="#">Special Collections</a></li>
                            <li><a href="#">Semi Precious Stones</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-md-3 footer-links ftr-contact-info">
                        <div class="info-block mb-4">
                            <div class="d-flex">
                                <div class="flex-shrink-0 me-4">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/map.png" alt="">
                                </div>
                                <div class="flex-grow-1">
                                    <h6>Location</h6>
                                    <address><?php echo get_field('location','option'); ?></address>
                                </div>
                            </div>
                        </div>
                        <div class="info-block mb-4">
                            <div class="d-flex">
                                <div class="flex-shrink-0 me-4">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/phone.png" alt="">
                                </div>
                                <div class="flex-grow-1">
                                    <h6>Phone</h6>
                                    <p class="mb-1"><?php echo get_field('phone_1','option'); ?></p>
                                    <p class="mb-1"><?php echo get_field('phone_2','option'); ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="info-block mb-4">
                            <div class="d-flex">
                                <div class="flex-shrink-0 me-4">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/mail.png" alt="">
                                </div>
                                <div class="flex-grow-1">
                                    <h6>Email</h6>
                                    <p><?php echo get_field('email','option'); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="additional-links row align-items-center justify-content-between">
                    <div class="col-md-auto">
                        <a href="#">Privacy Policy</a><span class="px-4 text-light small">|</span>
                        <a href="#">Shipping Policy</a><span class="px-4 text-light small">|</span>
                        <a href="#">Refund Policy</a><span class="px-4 text-light small">|</span><a href="#">Terms & Conditions</a>
                    </div>
                    <div class="col-md-auto">
                        <img class="img-fluid" src="<?php echo get_field('payment_image','option'); ?>" alt="">
                    </div>
                </div>
                <hr class="mt-5">
                <div class="footer-btm row justify-content-sm-between align-items-center pt-3 pb-4">
                    <div class="col-sm-auto copyrights">
                        <p class="mb-0"><?php echo get_field('copy_right','option'); ?></p>
                    </div>
                    <div class="col-sm-auto gototop">
                        <a id="gotop" href="javascript:void(0);" class="d-flex flex-row align-items-center" onclick="window.scrollTo({top: 0, left: 0, behavior: 'smooth'});">Goto Top <i class="fa-solid fa-arrow-up ms-2"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.footer-info -->
    </footer>
    <!-- JAVASCRIPT FILES -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/custom.js"></script>

<script>
    $(document).ready(function() {
        $(".price-slider").ionRangeSlider({
            skin: "round",
        });
    });
    </script>

<?php wp_footer(); ?>     
</body>

</html>
<?php
/*Template Name: Home Page*/
get_header(); 
?>
    <!-- ############################################################## -->
    <main class="main-content home-content">
        <section class="banner-section swiper">
            <div class="swiper-wrapper">
      <?php if( have_rows('banner_details') ):?>
      <?php while ( have_rows('banner_details') ) : the_row(); 
            $banner_image = get_sub_field('image');
            $link_url = $banner_link['url'];
        ?>          
            <div class="swiper-slide">
                <div class="banner-container">
                <img class="img-fluid mx-auto d-block" src="<?php echo $banner_image['url']; ?>" alt="<?php echo $banner_image['alt']; ?>"></div>
            </div>
        <?php endwhile; endif; ?>
            </div>
        </section>
        <!-- ############################################################## -->
        <section class="products-section py-3 py-sm-5">
            <div class="container container-custom py-2 py-sm-2 py-md-3">
                <div class="section-heading text-center pb-3">
                    <h3>Our Best Sellers</h3>
                </div>
                <div class="products-slider swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="product-block bg-white shadow-sm rounded-1 card p-4 border-light-subtle mb-3">
                                <figure><a class="d-block" href="#"><img class="img-fluid mx-auto d-block" src="<?php echo get_template_directory_uri(); ?>/images/product-1.jpg" alt=""></a></figure>
                                <div class="product-content text-center">
                                    <h6 class="fw400 mb-3">Yellow Sapphire & Diamond Ring</h6>
                                    <a class="btn btn-outline-dark w-75 mx-auto d-block text-uppercase fs11 fw400 rounded-1" href="#">Buy Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="product-block bg-white shadow-sm rounded-1 card p-4 border-light-subtle mb-3">
                                <figure><a class="d-block" href="#"><img class="img-fluid mx-auto d-block" src="<?php echo get_template_directory_uri(); ?>/images/product-2.jpg" alt=""></a></figure>
                                <div class="product-content text-center">
                                    <h6 class="fw400 mb-3">Blue Sapphire Sterling Silver Pendant</h6>
                                    <a class="btn btn-outline-dark w-75 mx-auto d-block text-uppercase fs11 fw400 rounded-1" href="#">Buy Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="product-block bg-white shadow-sm rounded-1 card p-4 border-light-subtle mb-3">
                                <figure><a class="d-block" href="#"><img class="img-fluid mx-auto d-block" src="<?php echo get_template_directory_uri(); ?>/images/product-3.jpg" alt=""></a></figure>
                                <div class="product-content text-center">
                                    <h6 class="fw400 mb-3">Burmese Ruby Sterling Silver Bracelet</h6>
                                    <a class="btn btn-outline-dark w-75 mx-auto d-block text-uppercase fs11 fw400 rounded-1" href="#">Buy Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="product-block bg-white shadow-sm rounded-1 card p-4 border-light-subtle mb-3">
                                <figure><a class="d-block" href="#"><img class="img-fluid mx-auto d-block" src="<?php echo get_template_directory_uri(); ?>/images/product-4.jpg" alt=""></a></figure>
                                <div class="product-content text-center">
                                    <h6 class="fw400 mb-3">Yellow Sapphire & Diamond Ring</h6>
                                    <a class="btn btn-outline-dark w-75 mx-auto d-block text-uppercase fs11 fw400 rounded-1" href="#">Buy Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="product-block bg-white shadow-sm rounded-1 card p-4 border-light-subtle mb-3">
                                <figure><a class="d-block" href="#"><img class="img-fluid mx-auto d-block" src="<?php echo get_template_directory_uri(); ?>/images/product-1.jpg" alt=""></a></figure>
                                <div class="product-content text-center">
                                    <h6 class="fw400 mb-3">Yellow Sapphire & Diamond Ring</h6>
                                    <a class="btn btn-outline-dark w-75 mx-auto d-block text-uppercase fs11 fw400 rounded-1" href="#">Buy Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="product-block bg-white shadow-sm rounded-1 card p-4 border-light-subtle mb-3">
                                <figure><a class="d-block" href="#"><img class="img-fluid mx-auto d-block" src="<?php echo get_template_directory_uri(); ?>/images/product-2.jpg" alt=""></a></figure>
                                <div class="product-content text-center">
                                    <h6 class="fw400 mb-3">Burmese Ruby Sterling Silver Bracelet</h6>
                                    <a class="btn btn-outline-dark w-75 mx-auto d-block text-uppercase fs11 fw400 rounded-1" href="#">Buy Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="product-block bg-white shadow-sm rounded-1 card p-4 border-light-subtle mb-3">
                                <figure><a class="d-block" href="#"><img class="img-fluid mx-auto d-block" src="<?php echo get_template_directory_uri(); ?>/images/product-3.jpg" alt=""></a></figure>
                                <div class="product-content text-center">
                                    <h6 class="fw400 mb-3">Yellow Sapphire & Diamond Ring</h6>
                                    <a class="btn btn-outline-dark w-75 mx-auto d-block text-uppercase fs11 fw400 rounded-1" href="#">Buy Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="product-block bg-white shadow-sm rounded-1 card p-4 border-light-subtle mb-3">
                                <figure><a class="d-block" href="#"><img class="img-fluid mx-auto d-block" src="<?php echo get_template_directory_uri(); ?>/images/product-4.jpg" alt=""></a></figure>
                                <div class="product-content text-center">
                                    <h6 class="fw400 mb-3">Yellow Sapphire & Diamond Ring</h6>
                                    <a class="btn btn-outline-dark w-75 mx-auto d-block text-uppercase fs11 fw400 rounded-1" href="#">Buy Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination pagination-light"></div>
                </div>
                <div class="section-button text-center pt-3"><a class="btn btn-outline-dark shadow-sm" href="#">VIEW MORE</a></div>
                <!-- /.products-slider -->
            </div>
        </section>
        <!-- /.products-section -->
        <section class="category-section bg-light py-3 py-sm-5">
            <div class="container container-custom py-2 py-sm-2 py-md-3">
                <div class="section-heading text-center">
                    <h3>Shop by Category</h3>
                </div>
                <div class="row pt-3">
                   
   <?php
            
            $args = array(
                'taxonomy' => 'product_cat',
                'term_taxonomy_id' => $exclude,
                'orderby'    => 'id',
                'order'      => 'ASC',
                'hide_empty' => 0,
                'show_count' => 0,
                //'exclude' => $exclude,
            );
            $all_categories = get_categories( $args );
            if(!empty($all_categories)){
                foreach ($all_categories as $cat){
                    if($cat->category_parent == 0){ 
                    $thumbnail_id = get_woocommerce_term_meta( $cat->term_id, 'thumbnail_id', true );
                    $getimage       = wp_get_attachment_url( $thumbnail_id );
                    if($getimage){
                        $image       = $getimage;
                    } else{
                        $image       = home_url().'/wp-content/uploads/woocommerce-placeholder.png';
                    } 
            ?> 
                    <div class="col-lg-3 col-md-4 col-sm-4 col-6 mb-4">
                        <a class="category-block d-block text-center bg-white shadow-sm rounded-1 card p-4 h-100" href="<?=get_term_link($cat->slug, 'product_cat')?>">
                            <figure><img class="mx-auto d-block img-fluid" src="<?=$image?>" alt=""></figure>
                            <span class="category-content">
                                <h6 class="fs19 fw400 mb-1"><?=$cat->name?></h6>
                                <!-- <p class="mb-0 fs12 fw500 text-uppercase ls1 manik">Manik</p> -->
                            </span>
                        </a>
                    </div>
       <?php }}}?>

                </div>
            </div>
        </section>
        <!-- /.category-section -->
        <section class="usps-section bg-dark2 py-3 py-sm-5">
            <div class="container container-custom py-2 py-sm-2 py-md-3">
                <div class="section-heading text-white text-center">
                    <h3><?php echo get_field('gemstitle'); ?></h3>
                </div>
                <div class="row gx-5 pt-4">
        
        <?php if( have_rows('advantages') ):
        while ( have_rows('advantages') ) : the_row(); 
            $advan_title = get_sub_field('title');
            $advan_content = get_sub_field('content');
        ?>            
                    <div class="col-md-4 mb-4">
                        <div class="usp-block card p-4 bg-transparent border-dark-subtle text-center h-100">
                            <h5 class="text-white fs18"><?php echo $advan_title; ?></h5>
                            <p class="text-white-70 fs14 mb-0"><?php echo $advan_content; ?></p>
                        </div>
                        <!-- /.usp-block -->
                    </div>
        <?php endwhile; endif; ?>              

                </div>
            </div>
        </section>
        <!-- /.usps-section -->
        <section class="about-section pt-5">
            <div class="container container-custom py-2 py-sm-2 py-md-3">
                <div class="row">
                    <div class="section-heading text-center mb-2">
                        <h3><?php echo get_field('title_astro'); ?></h3>
                    </div>
                    <div class="col-md-10 mx-auto text-center">
                        <p><?php echo get_field('content_astro'); ?></p>
                    </div>
                    <div class="section-button text-center pt-3 col-12"><a class="btn btn-outline-dark shadow-sm" href="#">READ MORE</a></div>
                    <div class="col-md-9 mx-auto pt-5 mb-5">
                        <div class="row">
                            
        <?php if( have_rows('award') ):
            while ( have_rows('award') ) : the_row(); 
            $award_title = get_sub_field('title');
            $award_image = get_sub_field('image');
        ?> 
                            <div class="col-6 col-sm-6 col-md-3">
                                <div class="feature-block text-center px-3 mb-4">
                                    <figure><img src="<?php echo $award_image['url']; ?>" alt="<?php echo $award_image['alt']; ?>"></figure>
                                    <h6 class="fs12 fw500 text-uppercase lh150 body-font pt-2"><?php echo $advan_title; ?></h6>
                                </div>
                            </div>
            <?php endwhile; endif; ?>     

                        </div>
                    </div>
                    <div class="col-md-9 mx-auto">
                        <div class="affliate-block card border-light-subtle shadow-sm text-center">
                            <h6 class="text-uppercase ls3 text-center fs18 fw600" style="margin-top: -10px;"><span class="px-3 bg-white fw600"><?php echo get_field('title_certi'); ?></span></h6>
            <?php       
                $image = get_field('certification_image');
            ?>                         
                <img class="rounded img-fluid mx-auto d-block my-4" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /.about-section -->
        <section class="contact-option-section py-5">
            <div class="container container-custom py-2 py-sm-2 py-md-3">
                <div class="row pt-4">
                    <div class="col-sm-6 mx-auto pb-2">
                        <h6 class="fs32 fw300 text-center text-white mb-3">Looking for Help to Choose best Gems for you</h6>
                    </div>
                    <div class="col-md-8 mx-auto">
                        <div class="row">
                            <div class="col-md-4 mt-3">
                                <a class="btn btn-lg shadow btn-whatsapp" href="#">
                                    <span class="me-2 rounded d-block shadow bg-success">
                                        <img class="img-fluid mx-auto" src="<?php echo get_template_directory_uri(); ?>/images/whatsapp.png" alt="">
                                    </span>
                                    CHAT ON WHATSAPP
                                </a>
                            </div>
                            <div class="col-md-4 mt-3">
                                <a class="btn btn-lg shadow btn-consultation" href="#">
                                    <span class="me-2 rounded d-block shadow bg-danger">
                                        <img class="img-fluid mx-auto" src="<?php echo get_template_directory_uri(); ?>/images/consultation.png" alt="">
                                    </span>
                                    FREE CONSULTATION
                                </a>
                            </div>
                            <div class="col-md-4 mt-3">
                                <a class="btn btn-lg shadow btn-expert" href="#">
                                    <span class="me-2 rounded d-block shadow bg-info">
                                        <img class="img-fluid mx-auto" src="<?php echo get_template_directory_uri(); ?>/images/expert.png" alt="">
                                    </span>
                                    TALK TO EXPERT
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /.contact-option-section -->
        <section class="videos-section py-5">
            <div class="container container-custom py-2 py-sm-3 py-md-4">
                <div class="section-heading text-center mb-4">
                    <h3>Recommended Videos</h3>
                </div>
                <div class="row pt-2">
                    
    <?php if( have_rows('videos') ): while( have_rows('videos') ): the_row(); ?>

                    <div class="col-md-6 mb-4">
                        <a class="video-block overflow-hidden text-center d-block" href="#">
                            <iframe class="w-100" width="560" height="315" src="<?php echo get_sub_field('add_video'); ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            <h5 class="mt-2 px-5 mx-auto fs18"><?php echo get_sub_field();?></h5>
                        </a>
                    </div>
    <?php endwhile; endif; ?>
                </div>
            </div>
        </section>
        <!-- /.videos-section -->
        <section class="testimonial-section bg-light py-5">
            <div class="container container-custom py-2 py-sm-3 py-md-4">
                <div class="section-heading text-center mb-2">
                    <h3>Customers Testimonials</h3>
                </div>
                <div class="row">
                    <div class="col-lg-11 mx-auto">
                        <div class="testimonial-slider swiper pb-4">
                            <div class="swiper-wrapper">
                                
        <?php if( have_rows('add_testimonials') ):
            while ( have_rows('add_testimonials') ) : the_row(); 
            $testi_name = get_sub_field('name');
            $testi_place = get_sub_field('place');
            $testi_image = get_sub_field('image');
            $testi_content = get_sub_field('content');
        ?> 
                <div class="swiper-slide py-4">
                    <div class="testimonial-block card p-4 p-sm-4 p-md-5 shadow-sm border-secondary-subtle h-100">
                        <div class="d-flex mb-3 align-items-center">
                            <div class="flex-shrink-0 me-4">
                                <span class="testimonial-image rounded-circle"><img class="img-fluid rounded-circle shadow-sm" src="<?php echo $testi_image['url']; ?>" alt="<?php echo $testi_image['alt']; ?>"></span>
                            </div>
                            <div class="flex-grow-1">
                                <h6 class="mb-1"><?php echo $testi_name; ?></h6>
                                <p class="mb-0 text-black-60 ls1 text-heading text-uppercase fs12 fw500"><?php echo $testi_place; ?></p>
                            </div>
                        </div>
                        <p class="fs13"><?php echo $testi_content; ?></p>
                    </div>
                </div>                        
        <?php endwhile; endif; ?>

                            </div>
                            <!-- /.swiper-wrapper -->
                            <div class="swiper-pagination pagination-light"></div>
                        </div>
                        <!-- /.testimonial-slider swiper -->
                    </div>
                    <!-- /.col-lg-11 mx-auto -->
                </div>
                <!-- /.row -->
            </div>
        </section>
        <!-- /.testimonial-section -->
    </main>
    <!-- ############################################################## -->

<?php get_footer(); ?>
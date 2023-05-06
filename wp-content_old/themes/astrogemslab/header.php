<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package astrogemslab
 */

?>
    <!doctype html>
<html lang="en">

<head>
    <html <?php language_attributes(); ?>>
    <meta name="theme-color" content="#1c1c1c">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <title><?php the_title(); ?></title>
    <meta name="author" content="">
    <meta name="generator" content="">
    <link rel="canonical" href="">
    <link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/images/site.webmanifest">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header class="site-header">
        <div class="header-topbar py-1">
            <div class="container container-custom">
                <div class="row justify-content-between align-items-center">
                    <div class="col-auto">
                        <p class="mb-0"><?php echo get_field('header_notice', 'option'); ?></p>
                    </div>
                    <div class="col-auto">
                        <div class="header-contact-links">
                            <a class="btn btn-success rounded-0 btn-sm" href="<?php echo get_field('chat_url', 'option'); ?>"><i class="fab fa-whatsapp me-1"></i> Chat</a>
                            <a class="btn btn-danger rounded-0 btn-sm" href="#"><i class="fa-solid fa-headset me-1"></i> Free Consultation</a>
                            <a class="btn btn-info rounded-0 btn-sm" href="#"><i class="fa-solid fa-user-check me-1"></i> Talk to Expert</a>
                        </div>
                        <!-- /.header-contact-links -->
                    </div>
                </div>
            </div>
        </div>
        <!-- /.header-top -->
        <div class="header-brand">
            <div class="container container-custom">
                <div class="row align-items-center justify-content-between">
                    <div class="col-md-3">
                        <a class="navbar-brand" href="<?php echo get_home_url(); ?>">
            <?php $logo_image = get_field('logo','option'); ?>	
                  <img class="img-fluid" src="<?php echo esc_url($logo_image['url']); ?>" alt="<?php echo esc_attr($logo_image['alt']); ?>">
            </a>
                    </div>
                    <div class="col-md-4">
                        <div class="search-textbox position-relative">
                            <?php echo do_shortcode('[fibosearch]'); ?>
                           <!--  <input type="text" class="form-control" placeholder="Type to search...">
                            <i class="fa fa-search"></i> -->
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="shop-account-option">
                            <a class="shop-account-option-item wishlist-option" href="<?php echo esc_url( get_page_link( 16 ) ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/heart-icon.png" alt=""><span><?php echo esc_html( yith_wcwl_count_all_products() ); ?></span></a>

                            <a class="shop-account-option-item account-option" href="<?php echo esc_url( get_page_link( 12 ) ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/user-icon.png" alt=""></a>

                            <a class="shop-account-option-item cart-option" href="<?php echo esc_url( get_page_link( 65 ) ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/shopping-cart.png" alt=""><span class="count"><?php echo esc_html( yith_wcwl_count_all_products() ); ?></span></a>


                            <?php echo do_shortcode('[woo_multi_currency]'); ?>
                        </div>
                        <!-- /.shop-account-option -->
                    </div>
                </div>
            </div>
        </div>
        <!-- /.header-brand -->
        <nav class="navbar navbar-expand-lg">
            <div class="container container-custom">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main-navbar" aria-controls="main-navbar" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="main-navbar">
                    <ul class="navbar-nav">
                        <?php
                             $args = array(
                                'container'     => false,
                                'echo'            => false,
                                'items_wrap'      => '%3$s',
                                'menu'            => 'header_menu',
                                'add_li_class'  => 'nav-item',
                                'link_class'    => 'nav-link',
                            ); 
                            echo wp_nav_menu( $args ); 
                        ?>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
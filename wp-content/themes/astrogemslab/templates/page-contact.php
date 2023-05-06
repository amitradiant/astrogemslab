<?php
/*Template Name: Contact Page*/
get_header(); 
?>

 <?php get_template_part('breadcrumbs'); ?>
 
        <!-- ################################################################################ -->
        <section class="contact-section py-xl-5 py-lg-5 py-md-4 py-sm-4 py-4">
            <div class="container-xl">
                <h3 class="mb-3">Contact Us</h3>
                <div class="row py-3">
                    <div class="contact-form col-lg-8 pr-lg-4 mb-3 h-100">
                        <!-- CONTACT FORM -->
                        <div class="card h-100 shadow-sm">
                            <h5 class="p-3 border-bottom mb-0"><i class="fa fa-envelope text-prime me-2" aria-hidden="true"></i> Write to us</h5>
                            <div class="card-body">
                                <?php echo do_shortcode('[contact-form-7 id="64" title="Contact Page"]'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 h-100 mb-3">
                        <div class="contact-info shadow-sm">
                            <div class="contact-info-block border-0 shadow-sm card m-2 mb-3">
                                <div class="card-body px-4 py-3">
                                    <div class="d-flex flex-row">
                                        <i class="fa-solid fa-location-dot me-3"></i>
                                        <div class="media-body">
                                            <h6 class="m-0 body-font text-uppercase">Location</h6>
                                            <p class="text-prime fw500 small mb-0">VISIT TO EXPLORE THE WORLD</p>
                                        </div>
                                    </div>
                                    <hr class="my-2">
                                    <div class="row">
                                        <div class="col-12 pt-2 fs13">
                                            <p class="mb-1"><?php echo get_field('address'); ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="contact-info-block border-0 shadow-sm card m-2 mb-3">
                                <div class="card-body px-4 py-3">
                                    <div class="d-flex flex-row">
                                        <i class="fa fa-phone me-3"></i>
                                        <div class="media-body">
                                            <h6 class="m-0 body-font text-uppercase">Make a Call</h6>
                                            <p class="text-prime fw500 small mb-0">LET’S TALK WITH OUR EXPERTS</p>
                                        </div>
                                    </div>
                                    <hr class="my-2">
                                    <div class="row">
                                        <div class="col-12 pt-2 fs13">
                                            <p class="mb-1"><a href="tel:<?php echo get_field('phone_1'); ?>"><?php echo get_field('phone_1'); ?></a>, <a href="tel:<?php echo get_field('phone_2'); ?>"><?php echo get_field('phone_2'); ?></a></p>
                                            <p class="mb-1 fw500"><?php echo get_field('time'); ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="contact-info-block border-0 shadow-sm card m-2">
                                <div class="card-body px-4 py-3">
                                    <div class="d-flex flex-row">
                                        <i class="fa fa-envelope-open me-3"></i>
                                        <div class="media-body">
                                            <h6 class="m-0 body-font text-uppercase">Send an Email</h6>
                                            <p class="text-prime fw500 small mb-0">DONT’S HESITATE TO MAIL</p>
                                        </div>
                                    </div>
                                    <hr class="my-2">
                                    <div class="row">
                                        <div class="col-12 pt-2 fs13">
                                            <p class="mb-1"><a href="mailto:<?php echo get_field('email_1'); ?>"><?php echo get_field('email_1'); ?></a></p>
                                            <p class="mb-1"><a href="mailto:<?php echo get_field('email_2'); ?>"><?php echo get_field('email_2'); ?></a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>
        </section>
        <!-- ################################################################################ -->
        <section class="map-section  py-xl-5 py-lg-5 py-md-4 py-sm-4 py-4 bg-light-3">
            <div class="container-xl">
                <div class="map my-3">
                    <iframe class="w-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d112173.0227856205!2d77.13894525583157!3d28.527485061389754!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cfd5b347eb62d%3A0x52c2b7494e204dce!2sNew%20Delhi%2C%20Delhi!5e0!3m2!1sen!2sin!4v1594378441707!5m2!1sen!2sin" width="600" height="480" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

                    

                </div>
            </div>
        </section>
    </main>
    

<?php get_footer(); ?>
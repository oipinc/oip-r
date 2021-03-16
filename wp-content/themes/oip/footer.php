<footer class="bg-gray">
    <div class="footer-navigation custom-padding">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-xxl-6">
                    <div data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
                        <h2>Get in <br>touch</h2>
                        <span class="footer-email d-block">office@oip.bz</span>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/right-arrow.svg" alt="Arrow">
                    </div>
                </div>
                <div class="col d-none d-lg-block">
                    <div data-aos="fade-left" data-aos-offset="300" data-aos-easing="ease-in-sine">
                        <h6>Useful links</h6>
                        <?php
                        wp_nav_menu([
                            'menu' => 'footer',
                            'container' => '',
                            'theme_location' => 'footer',
                            'items_wrap' => '<ul class="list-unstyled my-0">%3$s</ul>'
                        ])
                        ?>
                    </div>
                </div>
                <div class="col d-none d-lg-block">
                    <div data-aos="fade-left" data-aos-offset="300" data-aos-easing="ease-in-sine">
                        <h6>Legal</h6>
                        <?php
                        wp_nav_menu([
                            'menu' => 'legal',
                            'container' => '',
                            'theme_location' => 'legal',
                            'items_wrap' => '<ul class="list-unstyled my-0">%3$s</ul>'
                        ])
                        ?>
                    </div>
                </div>
                <div class="col d-none d-lg-block">
                    <div class="address-info" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
                        <p>Terazije 5, 11000 Belgrade <br> + 381 11 324 81 80</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Desktop -->
    <div class="footer-copyright d-none d-lg-block">
        <div class="container-fluid">
            <div class="row">
                <div class="col-auto">
                    <?php get_template_part('template-parts/share'); ?>
                </div>
                <div class="col">
                    <div class="row align-items-end">
                        <div class="col-lg-7">
                            <div class="copyright-text" data-aos="fade-up" data-aos-duration="1000">
                                <p class="my-0">We are working hard Monday to Friday, starting bright <br> and early with a cup of lightly creamed coffee. Feel
                                    <br>free to get in touch with us.</p>
                            </div>
                        </div>
                        <div class="col copyright text-end" data-aos="fade-up" data-aos-duration="1000">
                            © <?php echo date('Y'); ?> Copyright: OIP Robotics
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end -->

    <!-- Mobile -->
    <div class="footer-copyright d-lg-none">
        <div class="container-fluid text-center" data-aos="fade-up" data-aos-duration="1000">
            <div class="copyright-text" data-aos="fade-up" data-aos-duration="1000">
                <p class="my-0">We are working hard Monday to Friday, starting bright and early with a cup of lightly creamed coffee. Feel free to get in touch with us.</p>
            </div>
            <div class="address-info">
                <p>Terazije 5, 11000 Belgrade <br> + 381 11 324 81 80</p>
            </div>
            <?php get_template_part('template-parts/mobile-share'); ?>
            <div class="copyright">
                © <?php echo date('Y'); ?> Copyright: OIP Robotics
            </div>
        </div>
    </div>
    <!-- end -->
</footer>

<?php wp_footer(); ?>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<!--<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.1.13/jquery.mousewheel.min.js"></script>-->

<script>


    // let test = 0;
    // jQuery(".product").bind('mousewheel DOMMouseScroll', function(event, delta) {
    //     test = test + 1;
    //
    //     if (event.originalEvent.wheelDelta > 0 || event.originalEvent.detail < 0) {
    //         const left = test * (100) + "px";
    //         const top = test * (-100) + "px";
    //         const translate3d = "translate3d("+left+", "+top+", 0px)";
    //         jQuery(".product").css({"transform": translate3d});
    //     } else {
    //         const left = test * (-100) + "px";
    //         const top = test * (100) + "px";
    //         const translate3d = "translate3d("+left+", "+top+", 0px)";
    //         jQuery(".product").css({"transform": translate3d});
    //
    //     }
    //
    // });
</script>
</body>
</html>

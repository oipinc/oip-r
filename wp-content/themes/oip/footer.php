<?php
    $address     = get_field('address', 'option');
    $usaAddress  = get_field('usa_address', 'option');
    $phone       = get_field('phone', 'option');
    $usaPhone    = get_field('usa_phone', 'option');
    $email       = get_field('email', 'option');
    $copyright   = get_field('copyright', 'option');
    $map         = get_field('map_link', 'option');
    $usaMap      = get_field('usa_map_link', 'option');
?>

<footer class="bg-gray">
    <div class="footer-navigation custom-padding overflow-hidden">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-xxl-6">
                    <div data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
                        <h2>Get in <br>touch</h2>
                        <span class="footer-email d-block"><?php echo $email; ?></span>
                        <a href="mailto:<?php echo $email; ?>">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/right-arrow.svg" alt="Arrow">
                        </a>
                    </div>
                </div>
                <div class="col d-none d-lg-block">
                    <div data-aos="fade-left" data-aos-offset="300" data-aos-easing="ease-in-sine">
                        <?php
                        wp_nav_menu([
                            'menu' => 'footer',
                            'container' => '',
                            'theme_location' => 'footer',
                            'items_wrap' => '<ul class="list-unstyled my-0 footer-list">%3$s</ul>'
                        ])
                        ?>
                    </div>
                </div>
                <div class="col d-none d-lg-block">
                    <div data-aos="fade-left" data-aos-offset="300" data-aos-easing="ease-in-sine">
                        <?php
                        wp_nav_menu([
                            'menu' => 'legal',
                            'container' => '',
                            'theme_location' => 'legal',
                            'items_wrap' => '<ul class="list-unstyled my-0 footer-list">%3$s</ul>'
                        ])
                        ?>
                    </div>
                </div>
                <div class="col d-none d-lg-block">
                    <div class="address-info" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
                        <a target="_blank" href="<?php echo $map; ?>"><?php echo $address; ?></a>
                        <br>
                        <a href="tel:<?php echo $phone; ?>"><?php echo $phone; ?></a>
                    </div>
                    <div data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
                        <a target="_blank" href="<?php echo $usaMap; ?>"><?php echo $usaAddress; ?></a>
                        <br>
                        <a href="tel:<?php echo $usaPhone; ?>"><?php echo $usaPhone; ?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Desktop -->
    <div class="footer-copyright d-none d-lg-block overflow-hidden">
        <div class="container-fluid">
            <div class="row">
                <div class="col-auto">
                    <?php get_template_part('template-parts/share'); ?>
                </div>
                <div class="col">
                    <div class="row align-items-end">
                        <div class="col-lg-5 col-xl-4">
                            <div class="copyright-text" data-aos="fade-up" data-aos-duration="1000">
                                <p class="my-0"><?php echo $copyright; ?></p>
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
    <div class="footer-copyright d-lg-none overflow-hidden">
        <div class="container-fluid text-center" data-aos="fade-up" data-aos-duration="1000">
            <div class="copyright-text" data-aos="fade-up" data-aos-duration="1000">
                <p class="my-0"><?php echo $copyright; ?></p>
            </div>
            <div class="address-info">
                <a target="_blank" href="<?php echo $map; ?>"><?php echo $address; ?></a>
                <br>
                <a href="tel:<?php echo $phone; ?>"><?php echo $phone; ?></a>
            </div>
            <?php get_template_part('template-parts/mobile-share'); ?>
            <div class="copyright">
                © <?php echo date('Y'); ?> Copyright: OIP Robotics
            </div>
        </div>
    </div>
    <!-- end -->
</footer>

<a class="back-to-top bg-white" href="#">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/back-to-top.svg" alt="Back to top">
</a>

<div class="profile-holder">
    <div class="close-profile-holder">
        <div class="leftright"></div>
        <div class="rightleft"></div>
        <label class="close">close</label>
    </div>

    <div class="container h-100">
        <div class="row align-items-center justify-content-center h-100">
            <div class="col-lg-3">
                <div class="profile-img-holder">
                    <img class="img-fluid profile-img" src="http://placehold.it/500x700" alt="Image">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="ps-5">
                    <div class="ps-5">
                        <div class="profile-content"></div>
                        <h2 class="profile-title my-0"></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php wp_footer(); ?>
<script type="text/javascript" id="hs-script-loader" async defer src="//js.hs-scripts.com/6839195.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script>
    jQuery(document).ready(function () {
        let _hsp = window._hsp = window._hsp || [];
        _hsp.push(['showBanner']);
    });
</script>
<!--<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.1.13/jquery.mousewheel.min.js"></script>-->
</body>
</html>

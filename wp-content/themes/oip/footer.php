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
                <div class="col">
                    <div data-aos="fade-left" data-aos-offset="300" data-aos-easing="ease-in-sine">
                        <h6>Useful links</h6>
                        <ul class="list-unstyled my-0">
                            <li><a href="#">About</a></li>
                            <li><a href="#">Services</a></li>
                            <li><a href="#">Use Cases</a></li>
                            <li><a href="#">Career</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col">
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
                <div class="col">
                    <div class="address-info" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
                        <p>Terazije 5, 11000 Belgrade <br> + 381 11 324 81 80</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
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
</footer>

<?php wp_footer(); ?>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.1.13/jquery.mousewheel.min.js"></script>

<script>
    const aosSelector = jQuery('.swiper-wrapper h3, .swiper-wrapper p, .swiper-wrapper img');
    var swiper = new Swiper('.swiper-container', {
        slidesPerView: 1,
        mousewheel: true,
        on: {
            slideChangeTransitionStart: function () {
                aosSelector.css("visibility", "hidden");
                aosSelector.removeClass('aos-init').removeClass('aos-animate');
            },
            slideChangeTransitionEnd: function () {
                aosSelector.css("visibility", "visible");
                AOS.init();
            },
        }
    });

    swiper.on("reachBeginning", function () {
        setTimeout(function () {
            localStorage.setItem("start", "left-end")
        }, 1000);
    });
    swiper.on("reachEnd", function () {
        setTimeout(function () {
            localStorage.setItem("end", "right-end")
        }, 1000);
    });
    swiper.on("fromEdge", function () {
        localStorage.removeItem("start")
        localStorage.removeItem("end")
    });

    jQuery(".product").bind('mousewheel DOMMouseScroll', function(event){
        if (event.originalEvent.wheelDelta > 0 || event.originalEvent.detail < 0) {
            const value = localStorage.getItem("start");
            if (value === "left-end") {
                jQuery('html, body').animate({
                    scrollTop: jQuery(".what-we-do").offset().top
                }, 1500);
            }
        } else {
            const value = localStorage.getItem("end");
            if (value === "right-end") {
                jQuery('html, body').animate({
                    scrollTop: jQuery(".case").offset().top
                }, 1500);
            }
        }
    });

    AOS.init();

    // jQuery(document).ready(function() {
    //     jQuery(".product").mousewheel(function(e, delta) {
    //         this.scrollLeft -= (delta);
    //         jQuery.preventDefault();
    //     });
    // });
</script>
</body>
</html>

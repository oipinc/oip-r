
<footer class="bg-gray">
    <div class="footer-navigation custom-padding">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <h2>Get in <br>touch</h2>
                    <span class="footer-email d-block">office@oip.bz</span>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/right-arrow.svg" alt="Arrow">
                </div>
                <div class="col-md-2">
                    <h6>Useful links</h6>
                    <ul class="list-unstyled my-0">
                        <li><a href="#">About</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Use Cases</a></li>
                        <li><a href="#">Career</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
                <div class="col-md-2">
                    <h6>Legal</h6>
                    <ul class="list-unstyled my-0">
                        <li><a href="#">Terms and Conditions</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Copyright</a></li>
                    </ul>
                </div>
                <div class="col-md-2">
                    <div class="address-info">
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
                            <div class="copyright-text">
                                <p class="my-0">We are working hard Monday to Friday, starting bright <br> and early with a cup of lightly creamed coffee. Feel
                                    <br>free to get in touch with us.</p>
                            </div>
                        </div>
                        <div class="col copyright text-end">
                            © <?php echo date('Y'); ?> Copyright: OIP Robotics
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>

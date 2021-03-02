<?php get_header(); ?>

<div data-barba="wrapper">
    <main data-barba="container" data-barba-namespace="home">
        <section class="hero">
            <div class="hero-content">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-auto">
                            <?php get_template_part('template-parts/share'); ?>
                        </div>
                        <div class="col">
                            <div class="hero-title">
                                <h1>We are reinventing the way the $55.5 billion E&S Industry works every day</h1>
                            </div>
                        </div>
                        <div class="col">
                            <a class="text-white get-in-touch" href="#">
                                Get in touch
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row justify-content-end">
                    <div class="col custom-container">
                        <div class="row">
                            <div class="col-md-6 bg-dark-blue hero-info-box">
                                <a class="d-flex align-items-center text-white" href="#">
                                    Explore our service
                                    <img class="ms-4" src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow-right.svg" alt="Arrow">
                                </a>
                            </div>
                            <div class="col-md-6 bg-gray hero-info-box">
                                <a class="d-flex align-items-center text-white" href="#">
                                    Explore our product
                                    <img class="ms-4" src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow-right.svg" alt="Arrow">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="what-we-do custom-padding">
            <div class="container-fluid">
                <p>What we do the best</p>
                <h4>Whatever the challenge, <br> we always deliver a solution.</h4>
                <p>Whatever the challenge, we always deliver a solution.</p>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="what-we-do-box">
                            <span class="number">01</span>
                            <h4>Insurance Automation - ARIES</h4>
                            <p>Our unique RPA solutions are specifically designed for complex insurance processes.</p>
                            <a href="#">Read more</a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="what-we-do-box">
                            <span class="number">02</span>
                            <h4>Software (Co) Development</h4>
                            <p>There isn’t one system satisfying the needs of all insurance players.</p>
                            <a href="#">Read more</a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="what-we-do-box what-we-do-box-custom-width">
                            <span class="number">03</span>
                            <h4>Managed Staff Augmentation</h4>
                            <p>When the availability of skilled technology professionals in-house becomes a challenge, innovative product and service provider companies seek assistance.</p>
                            <a href="#">Read more</a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="what-we-do-box what-we-do-box-custom-width">
                            <span class="number">04</span>
                            <h4>IT Support</h4>
                            <p>Empower your business with turnkey IT support services.</p>
                            <a href="#">Read more</a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="what-we-do-box what-we-do-box-custom-width">
                            <span class="number">05</span>
                            <h4>Big Data & ML</h4>
                            <p>When Big Data meets Machine Learning the models flourish.</p>
                            <a href="#">Read more</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="custom-container"></div>
        </section>
        <section class="product custom-padding">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <div class="product-holder">
                            <h4>ARIES in <br>Submissions</h4>
                            <p>When the availability of skilled technology professionals in-house becomes a
                                challenge, innovative product and service provider companies seek assistance.</p>
                            <img class="product-img" src="http://placehold.it/680x680" alt="Product 1">
                            <div class="row align-items-center">
                                <div class="col">
                                    <a href="#">Read more</a>
                                </div>
                                <div class="col text-end">
                                    <a href="#">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/right-arrow.svg" alt="Arrow">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="product-holder">
                            <h4>Multiquoting without <br>a human touch</h4>
                            <p>When the availability of skilled technology professionals in-house becomes a
                                challenge, innovative product and service provider companies seek assistance.</p>
                            <img class="product-img" src="http://placehold.it/680x680" alt="Product 1">
                            <div class="row align-items-center">
                                <div class="col">
                                    <a href="#">Read more</a>
                                </div>
                                <div class="col text-end">
                                    <a href="#">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/right-arrow.svg" alt="Arrow">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</div>

<?php get_footer(); ?>

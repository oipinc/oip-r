<div data-barba="wrapper">
    <main data-barba="container" data-barba-namespace="product-view">
        <?php
            $intro          = get_field( "intro");
            $features       = get_field( "features");
            $requestForm    = get_field( "product_demo_request");
            $relatedProduct = get_field( "related_product");
        ?>

        <?php while ( have_posts() ) : the_post(); ?>
            <section class="product-hero custom-padding">
                <div class="container-fluid">
                    <video
                            id="background_animation"
                            style="width: 100%; height: 100vh;"
                            src="<?php echo get_template_directory_uri(); ?>/assets/video/background-animation.mp4"
                            autoplay="true"
                            loop="true"
                            muted="muted">
                    </video>
                    <div class="product-hero-content" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
                        <p>Product</p>
                        <h1><?php the_title(); ?></h1>
                        <?php the_content(); ?>
                    </div>
                </div>
            </section>
        <?php endwhile; wp_reset_query(); ?>

        <!-- Product Intro -->
        <?php if ($intro['product_intro_block']): ?>
            <section class="product-intro custom-wrapper block">
                <div class="container-fluid" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
                    <?php echo $intro['product_intro']; ?>
                </div>
            </section>
        <?php endif; ?>
        <!-- end -->

        <!-- Product Features -->
        <?php if ($features['product_features_block']): ?>
            <section class="product-features custom-padding block">
                <div class="container-fluid">
                    <div class="product-features-title" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
                        <div class="case-study-text-nav">
                            <h2>Features</h2>
                        </div>
                        <h3 class="fw-normal">Single source of truth for your agency relationships</h3>
                    </div>
                    <div class="row">
                        <?php foreach ($features['product_features'] as $key => $feature): ?>
                            <div class="col-lg-4 product-features-box" data-aos="<?php echo $key % 2 ? 'fade-right' : 'fade-left'?>" data-aos-offset="300" data-aos-easing="ease-in-sine">
                                <span class="number">0<?php echo $key + 1; ?></span>
                                <?php echo $feature['content']; ?>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </section>
        <?php endif; ?>
        <!-- end -->

        <!-- Request Form -->
        <?php if ($requestForm['product_form_block']): ?>
            <section class="product-request-form block">
                <div class="container-fluid">
                    <div class="bg-navy product-request-form-holder">
                        <div class="row">
                            <div class="col-12" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
                                <h2>Sign up for free trial <br> or request a demo!</h2>
                            </div>
                            <div class="col-lg-6" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
                                <p>See how an all-in-one growth software tool gets your <br> entire team on the same page.</p>
                            </div>
                            <div class="col-lg-6" data-aos="fade-left" data-aos-offset="300" data-aos-easing="ease-in-sine">
                                <div class="form-holder mt-0">
                                    <?php echo do_shortcode($requestForm['product_form']); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <?php endif; ?>
        <!-- end -->

        <!-- Related Product -->
        <?php if ($relatedProduct['related_product_block']): ?>
            <section class="related-product board-redirection-link bg-navy">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
                            <div class="board-redirection-box">
                                <a class="custom-link" href="/contact-us">Contact Us <img class="ms-5" width="30" src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow-right.svg" alt="Arrow"></a>
                            </div>
                        </div>
                        <div class="col-md-6" data-aos="fade-left" data-aos-offset="300" data-aos-easing="ease-in-sine">
                            <div class="board-redirection-box">
                                <div class="w-100">
                                    <h3><?php echo $relatedProduct['related_product']->post_title; ?></h3>
                                    <a class="related-link custom-link" href="<?php echo $relatedProduct['related_product']->ID; ?>">
                                        View our product<img width="30" class="ms-5" src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow-right.svg" alt="Arrow">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <?php endif; ?>
        <!-- end -->
    </main>
</div>

<div data-barba="wrapper">
    <main data-barba="container" data-barba-namespace="product-view">
        <?php
            $heroBg          = get_field( "hero_background");
            $intro           = get_field( "intro");
            $features        = get_field( "product_features");
            $requestForm     = get_field( "product_form");
            $relatedProduct  = get_field( "related_product");
            $spotlight       = get_field( "product_spotlight");
            $productValues   = get_field( "product_values");
            $productStories  = get_field( "product_stories");
            $template        = get_field( "template");
            $slider          = get_field( "slider");
            $productExample1 = get_field( "product_image_example_1");
            $productExample2 = get_field( "product_image_example_2");
        ?>

        <div class="get-in-touch d-none d-xl-inline-block">
            <a class="text-white" href="/contact-us">
                Get in touch
            </a>
        </div>

        <?php while ( have_posts() ) : the_post(); ?>
            <section class="product-hero custom-padding" style="background-image: url(<?php echo $heroBg; ?>)">
                <div class="container-fluid">
                    <div class="product-hero-content" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
                        <p>Product</p>
                        <h1><?php the_title(); ?></h1>
                        <?php the_content(); ?>
                    </div>
                </div>
            </section>
        <?php endwhile; wp_reset_query(); ?>

        <!-- Product Intro -->
        <?php if ($intro): ?>
            <section class="product-intro custom-wrapper block">
                <div class="container-fluid" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
                    <div class="row">
                        <div class="col-xl-10">
                            <?php echo $intro; ?>
                        </div>
                    </div>
                </div>
            </section>
        <?php endif; ?>
        <!-- end -->

        <?php if ($template === "leo"): ?>

            <!-- Image 1 -->
            <?php if ($productExample1['image_1x']): ?>
                <section class="block text-center" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
                    <img class="img-fluid" src="<?php echo $productExample1['image_1x'] ?>" srcset="<?php echo $productExample1['image_2x'] ?> 2x, <?php echo $productExample1['image_4x'] ?> 4x" alt="App Example 1">
                </section>
            <?php endif; ?>
            <!-- end -->

            <!-- Product Features -->
            <?php if ($features): ?>
                <section class="product-features custom-padding block">
                    <div class="container-fluid">
                        <div class="product-features-title" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
                            <div class="case-study-text-nav position-relative">
                                <h2>Features</h2>
                                <span class="text-nav-subtitle">Features</span>
                            </div>
                            <h3 class="fw-normal">Single source of truth for your agency relationships</h3>
                        </div>
                        <div class="row">
                            <?php foreach ($features as $key => $feature): ?>
                                <div class="col-sm-6 col-xl-4" data-aos="<?php echo $key % 2 ? 'fade-left' : 'fade-right'?>" data-aos-offset="300" data-aos-easing="ease-in-sine">
                                    <div class="product-features-box">
                                        <span class="number">0<?php echo $key + 1; ?></span>
                                        <?php echo $feature['content']; ?>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </section>
            <?php endif; ?>
            <!-- end -->

            <!-- Slider -->
            <?php if ($slider): ?>
                <section class="block">
                    <div class="product-slider">
                        <?php foreach ($slider as $key => $item): ?>
                            <div class="product-item bg-transparent-blue" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
                                <img class="img-fluid" src="<?php echo $item['image']; ?>" alt="Slide <?php echo $key; ?>">
                                <div class="item-caption mt-3">
                                    <?php echo $item['caption']; ?>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </section>
            <?php endif; ?>
            <!-- end -->

            <!-- Image 2 -->
            <?php if ($productExample2['image_1x']): ?>
                <section class="product-app-example block text-center" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
                    <img class="img-fluid" src="<?php echo $productExample2['image_1x'] ?>" srcset="<?php echo $productExample2['image_2x'] ?> 2x, <?php echo $productExample2['image_4x'] ?> 4x" alt="App Example 1">
                </section>
            <?php endif; ?>
            <!-- end -->

            <!-- Request Form -->
            <?php if (!empty($requestForm)): ?>
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
                                        <?php echo do_shortcode($requestForm); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            <?php endif; ?>
            <!-- end -->

        <?php elseif ($template === "libra"): ?>

            <!-- Image 1 -->
            <?php if ($productExample1['image_2x']): ?>
                <section class="block text-center bg-transparent-blue py-5 px-4" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
                    <img class="img-fluid" src="<?php echo $productExample1['image_1x'] ?>" srcset="<?php echo $productExample1['image_2x'] ?> 2x, <?php echo $productExample1['image_4x'] ?> 4x" alt="App Example 1">
                </section>
            <?php endif; ?>

            <!-- Spotlight -->
            <?php if ($spotlight): ?>
                <section class="product-spotlight custom-padding block">
                    <div class="container-fluid">
                        <div class="product-spotlight-title" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
                            <div class="case-study-text-nav position-relative">
                                <h2>In the spotlight</h2>
                                <span class="text-nav-subtitle">In the spotlight</span>
                            </div>
                        </div>
                        <div class="row">
                            <?php foreach ($spotlight as $key => $productSpotlight): ?>
                                <div class="col-sm-6 col-md-4 col-lg-3" data-aos="<?php echo $key % 2 ? 'fade-left' : 'fade-right'?>" data-aos-offset="300" data-aos-easing="ease-in-sine">
                                    <div class="product-spotlight-box">
                                        <span class="number">0<?php echo $key + 1; ?></span>
                                        <?php echo $productSpotlight['content']; ?>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                        <a href="#" class="btn btn-demo" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">Request a demo</a>
                    </div>
                </section>
            <?php endif; ?>
            <!-- end -->

            <!-- Slider -->
            <?php if ($slider): ?>
                <section class="block">
                    <div class="product-slider" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
                        <?php foreach ($slider as $key => $item): ?>
                            <div class="product-item bg-transparent-blue">
                                <img class="img-fluid" src="<?php echo $item['image']; ?>" alt="Slide <?php echo $key; ?>">
                                <div class="item-caption mt-3">
                                    <?php echo $item['caption']; ?>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </section>
            <?php endif; ?>
            <!-- end -->

            <!-- Values -->
            <?php if ($productValues): ?>
                <section class="product-values custom-padding block">
                    <div class="container-fluid">
                        <h2 data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">What value does it create for your business?</h2>
                        <div class="row">
                            <?php foreach ($productValues as $key => $value): ?>
                                <div class="col-sm-6 col-md-4 col-lg-3" data-aos="<?php echo $key % 2 ? 'fade-left' : 'fade-right'?>" data-aos-offset="300" data-aos-easing="ease-in-sine">
                                    <div class="product-values-box">
                                        <span class="number">0<?php echo $key + 1; ?></span>
                                        <?php echo $value['content']; ?>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </section>
            <?php endif; ?>
            <!-- end -->

            <!-- Stories -->
            <?php if ($productStories): ?>
                <section class="product-stories block">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="custom-wrapper product-stories-title" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
                                    <?php echo $productStories['product_stories_intro']; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-stories-slider">
                        <?php foreach ($productStories['product_stories'] as $key => $story): ?>
                            <div class="product-story-item" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
                                <?php echo $story['content']; ?>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </section>
            <?php endif; ?>
            <!-- end -->

        <?php endif; ?>

        <!-- Related Product -->
        <?php if ($relatedProduct): ?>
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
                                    <h3><?php echo $relatedProduct->post_title; ?></h3>
                                    <a class="related-link custom-link" href="<?php echo get_permalink($relatedProduct->ID); ?>">
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

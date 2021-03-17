<?php get_header(); ?>

<div data-barba="wrapper">
    <main data-barba="container" data-barba-namespace="home">
        <?php
            $services  = [
                'numberposts'      => 1000,
                'category'         => 4,
                'orderby'          => 'date',
                'order'            => 'ASC',
                'post_type'        => 'post',
            ];
            $products  = [
                'numberposts'      => 1000,
                'category'         => 7,
                'orderby'          => 'date',
                'order'            => 'ASC',
                'post_type'        => 'post',
            ];

            $caseStudy = get_field('case_study');
        ?>

        <!-- Hero -->
        <?php while ( have_posts() ) : the_post(); ?>
            <section class="hero hero-gif">
                <div class="hero-content">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <div class="col-auto">
                                <div data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
                                    <?php get_template_part('template-parts/share'); ?>
                                </div>
                            </div>
                            <div class="col">
                                <div class="hero-title" data-aos="fade-up" data-aos-offset="300" data-aos-easing="ease-in-sine">
                                    <?php the_content(); ?>
                                </div>
                            </div>
                            <div class="col-auto get-in-touch">
                                <a class="text-white" href="/contact-us">
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
                                <div class="col-md-6 bg-transparent-dark-blue hero-info-box">
                                    <a class="d-flex align-items-center text-white" href="#">
                                        Explore our service
                                        <img class="ms-4" src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow-right.svg" alt="Arrow">
                                    </a>
                                </div>
                                <div class="col-md-6 bg-transparent-gray hero-info-box">
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
        <?php endwhile; wp_reset_query(); ?>
        <!-- end -->

        <!-- Service -->
        <?php if (!empty(get_posts($services))): ?>
            <section class="home-service custom-padding">
                <div class="container-fluid">
                    <div class="home-service-title" data-aos="fade-up" data-aos-offset="300" data-aos-easing="ease-in-sine">
                        <p>Services</p>
                        <p class="lead">Being at a crossroads of Insurance and Technology allows us to offer prime digital services that will make digital transformation a reality for your business.</p>
                    </div>

                    <div class="row">
                        <?php foreach (get_posts($services) as $key => $service): ?>
                            <div class="<?php echo $key > 1 ? 'col-sm-4' : 'col-sm-6'?>">
                                <div class="home-service-box" data-aos="<?php echo $key % 2 ? 'fade-right' : 'fade-left'; ?>" data-aos-offset="300" data-aos-easing="ease-in-sine">
                                    <span class="number">0<?php echo $key + 1; ?></span>
                                    <h4><?php echo $service->post_title; ?></h4>
                                    <?php echo get_field('short_description', $service->ID)['content']; ?>
                                    <a href="<?php echo get_permalink($service->ID); ?>">Read more</a>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="custom-container"></div>
            </section>
        <?php endif; ?>
        <!-- end -->

        <!-- Products -->
        <?php if (!empty(get_posts($products))): ?>
            <section class="product">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <?php foreach (get_posts($products) as $key => $product): ?>
                            <div class="swiper-slide" style="background-color: <?php echo $key % 2 ? '#505147' : '#686a5a' ?>">
                                <div class="custom-padding">
                                    <div class="container-fluid">
                                        <div class="row align-items-center">
                                            <div class="col-9">
                                                <div class="slide-content mb-5" data-aos="fade-up" data-aos-anchor-placement="bottom-bottom">
                                                    <?php echo get_field('short_description', $product->ID)['content']; ?>
                                                </div>
                                                <a href="<?php echo get_permalink($product->ID); ?>"><img class="me-5" src="<?php echo get_template_directory_uri(); ?>/assets/images/right-arrow.svg" alt="Arrow"> Read more</a>
                                            </div>
                                            <div class="col-3">
                                                <img class="img-fluid" data-aos="fade-left" data-aos-offset="500" data-aos-duration="500" src="<?php echo get_field('short_description', $product->ID)['feature_image']['image']; ?>" srcset="<?php echo get_field('short_description', $product->ID)['feature_image']['retina_image']; ?> 2x" alt="Image">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </section>
        <?php endif; ?>
        <!-- end -->

        <!-- Case Study -->
        <?php if ($caseStudy): ?>
            <section class="case custom-padding">
                <div class="container-fluid">
                    <div class="row">
                        <?php foreach ($caseStudy as $key => $value): ?>
                            <?php
                                $shortDescription = get_field('short_description', $value->ID);
                            ?>
                            <div class="col-md-6 <?php echo $key === 0 ? 'mb-5 mb-md-0' : '' ?>">
                                <div class="case-holder">
                                    <div data-aos="fade-right" data-aos-easing="linear" data-aos-duration="300" class="d-flex flex-column">
                                        <?php echo $shortDescription['content']; ?>
                                    </div>
                                    <div data-aos="fade-right" data-aos-easing="linear" data-aos-duration="600">
                                        <img class="case-img" src="<?php echo $shortDescription['feature_image']['image']; ?>" srcset="<?php echo $shortDescription['feature_image']['retina_image']; ?> 2x" alt="Product 1">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <a href="<?php echo get_permalink($value->ID); ?>">Read more</a>
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
                        <?php endforeach; ?>
                    </div>
                </div>
            </section>
        <?php endif; ?>
        <!-- end -->
    </main>
</div>

<?php get_footer(); ?>

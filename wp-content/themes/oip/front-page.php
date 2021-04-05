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

            $caseStudy      = get_field('case_study');
            $meetUs         = get_field('meet_us');
            $serviceGroup   = get_field('services');
            $profiles       = get_field('profile', 'options');

            $productArray = get_posts($products);
            function order($a, $b){
                return strnatcmp(get_field('order', $a->ID), get_field('order', $b->ID));
            }
            usort($productArray, 'order');
        ?>

        <?php
            $gifAnimation = get_field('gif_animation');
            $customY = $gifAnimation['background_position']['background_y_position'] . "px";
            $customX = $gifAnimation['background_position']['background_x_position'] . "%";
            $defaultY = $gifAnimation['background_position']['background_y_position'];
            $defaultX = $gifAnimation['background_position']['background_x_position'];

            $y = $gifAnimation['background_position']['position'] === "default" ? $defaultY : $customY;
            $x = $gifAnimation['background_position']['position'] === "default" ? $defaultX : $customX;
        ?>

        <?php if ($gifAnimation): ?>
            <style>
                .hero-gif:after {
                    background-image: url(<?php echo $gifAnimation['file']['url']; ?>);
                    background-size: <?php echo $gifAnimation['background_size']; ?>;
                    background-position-y: <?php echo $y; ?>;
                    background-position-x: <?php echo $x; ?>;
                }
            </style>
        <?php endif; ?>

        <!-- Hero -->
        <?php while ( have_posts() ) : the_post(); ?>
            <section class="hero hero-gif overflow-hidden">
                <div class="hero-content">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <div class="col-auto d-none d-xl-block">
                                <div data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
                                    <?php get_template_part('template-parts/share'); ?>
                                </div>
                            </div>
                            <div class="col">
                                <div class="hero-title" data-aos="fade-up" data-aos-offset="300" data-aos-easing="ease-in-sine">
                                    <?php the_content(); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="row justify-content-end">
                        <div class="col custom-container">
                            <div class="row">
                                <div class="col-md-6 bg-transparent-dark-blue hero-info-box">
                                    <a class="d-flex align-items-center text-white" href="#home_service">
                                        Explore our services
                                        <img class="ms-4" src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow-right.svg" alt="Arrow">
                                    </a>
                                </div>
                                <div class="col-md-6 bg-transparent-gray hero-info-box">
                                    <a class="d-flex align-items-center text-white" href="#home_product">
                                        Explore our solutions
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
            <section id="home_service" class="home-service custom-padding overflow-hidden">
                <div class="container-fluid">
                    <div class="home-service-title" data-aos="fade-up" data-aos-offset="300" data-aos-easing="ease-in-sine">
                        <p>Services</p>
                        <div class="lead">
                            <?php echo $serviceGroup['intro']; ?>
                        </div>
                    </div>

                    <div class="row">
                        <?php foreach (get_posts($services) as $key => $service): ?>
                            <div class="<?php echo $key > 1 ? 'col-sm-6 col-lg-4' : 'col-sm-6'?>">
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
            <section id="home_product" class="product overflow-hidden">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <?php foreach ($productArray as $key => $product): ?>
                            <div class="swiper-slide" style="background-color: <?php echo $key % 2 ? '#505147' : '#686a5a' ?>; background-image: url(<?php echo get_field('short_description', $product->ID)['feature_image']['image']; ?>)">
                                <div class="custom-padding">
                                    <div class="container-fluid">
                                        <div class="row align-items-center">
                                            <div class="col-lg-9">
                                                <div class="slide-content mb-5" data-aos="fade-up" data-aos-anchor-placement="bottom-bottom">
                                                    <?php echo get_field('short_description', $product->ID)['content']; ?>
                                                </div>
                                                <a href="<?php echo get_permalink($product->ID); ?>">
                                                    Read more <img class="ms-5" src="<?php echo get_template_directory_uri(); ?>/assets/images/right-arrow.svg" alt="Arrow">
                                                </a>
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
            <section class="case custom-padding d-none d-lg-block overflow-hidden">
                <div class="container-fluid">
                    <div class="row">
                        <?php foreach ($caseStudy as $key => $value): ?>
                            <?php
                                $shortDescription = get_field('short_description', $value->ID);
                            ?>
                            <div class="col-md-6 <?php echo $key === 0 ? 'mb-5 mb-md-0' : '' ?>">
                                <div class="case-holder" style="background-image: url(<?php echo $shortDescription['feature_image']['image']; ?>)">
                                    <div data-aos="fade-right" data-aos-easing="linear" data-aos-duration="300" class="d-flex flex-column flex-grow-1">
                                        <?php echo $shortDescription['content']; ?>
                                    </div>
                                    <div class="position-relative" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="600">
                                        <a class="case-link" href="<?php echo get_permalink($value->ID); ?>">Find out more</a>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </section>
            <section class="case-mob d-lg-none">
                <div class="container-fluid">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <?php foreach ($caseStudy as $key => $value): ?>
                                <?php
                                $shortDescription = get_field('short_description', $value->ID);
                            ?>
                                <div class="swiper-slide">
                                    <div class="case-holder">
                                        <?php echo $shortDescription['content']; ?>
                                        <div>
                                            <img class="case-img" src="<?php echo $shortDescription['feature_image']['image']; ?>" alt="Product 1">
                                            <div class="row align-items-center">
                                                <div class="col">
                                                    <a href="<?php echo get_permalink($value->ID); ?>">Find out more</a>
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
                </div>
            </section>
        <?php endif; ?>
        <!-- end -->

        <!-- Meet us -->
        <?php if ($meetUs): ?>
            <section class="meet-us block overflow-hidden">
                <div class="custom-wrapper">
                    <div class="container-fluid">
                        <?php echo $meetUs['intro']; ?>
                    </div>
                </div>
                <div class="meet-us-img text-center">
                    <div class="position-relative d-inline-block">
                        <img class="img-fluid d-none original-img" src=" <?php echo $meetUs['image']; ?>" alt="OIP Team">
                        <img class="img-fluid" usemap="#meet_us" src=" <?php echo $meetUs['image']; ?>" alt="OIP Team">

                        <map name="meet_us">
                            <?php foreach ($profiles as $key => $profile): ?>
                            <area
                                    shape="rect"
                                    class="rect rect-<?php echo $key + 1; ?>"
                                    href="#" alt="Person"
                                    data-work="<?php echo !empty($profile['work_as']) ? $profile['work_as'] : 'N/A'; ?>"
                                    data-title="<?php echo $profile['title']; ?>"
                                    data-text="<?php echo $profile['content']; ?>"
                                    data-image="<?php echo $profile['hovered_image']; ?>"
                                    data-profile="<?php echo $profile['profile_image']; ?>"
                            >
                            <?php endforeach; ?>
                        </map>
                    </div>
                </div>
                <div class="custom-wrapper">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-6">
                                <?php echo $meetUs['content']; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <?php endif; ?>
        <!-- end -->
    </main>
</div>

<?php get_footer(); ?>

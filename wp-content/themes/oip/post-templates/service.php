<div data-barba="wrapper">
    <main data-barba="container" data-barba-namespace="service-view">
        <?php
            $caseStudyRecommendationBlock = get_field('case_study_recommendation_block');
            $serviceIntroBlock            = get_field('service_intro_block');
            $serviceImpactBlock           = get_field('service_impact_block');
            $serviceBenefitsBlock         = get_field('service_benefits_block');

            $relations                    = get_field('case_study_recommendation');
            $serviceIntro                 = get_field('service_intro');
            $serviceImpact                = get_field('service_impact_group');
            $serviceBenefitsBlockView1    = $serviceBenefitsBlock['checkbox_service_benefits_view_1'];
            $serviceBenefitsBlockView2    = $serviceBenefitsBlock['checkbox_service_benefits_view_2'];
            $serviceBenefitsView1         = $serviceBenefitsBlock['service_benefits_view_1'];
            $serviceBenefitsView2         = $serviceBenefitsBlock['service_benefits_view_2'];
            $serviceBenefitsTitle         = $serviceBenefitsBlock['service_benefit_title'];
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

        <section class="service-hero custom-padding hero-gif overflow-hidden">
            <div class="container-fluid">
                <div class="service-hero-content">
                    <h6 data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">Services</h6>
                    <h1 data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine"><?php echo the_title(); ?></h1>
                    <?php while ( have_posts() ) : the_post(); ?>
                        <?php the_content(); ?>
                    <?php endwhile; wp_reset_query(); ?>
                </div>
            </div>
        </section>

        <!-- Block Intro -->
        <?php if ($serviceIntroBlock && $serviceIntro): ?>
            <section class="service-intro custom-wrapper block overflow-hidden" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-10">
                            <?php echo $serviceIntro; ?>
                        </div>
                    </div>
                </div>
            </section>
        <?php endif; ?>
        <!-- end -->

        <!-- Block Benefits -->
        <?php if ($serviceBenefitsBlockView1): ?>
            <section class="service-benefits custom-wrapper block view-1">
                <div class="container-fluid">
                    <?php if ($serviceBenefitsTitle): ?>
                        <div class="row service-benefits-title">
                            <div class="col-lg-6 mb-3 mb-lg-0">
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-0 me-4">
                                        <h6 class="my-0 fw-bold"><?php echo $serviceBenefitsTitle['title']; ?></h6>
                                    </div>
                                    <div class="flex-grow-1 d-none d-lg-block">
                                        <div class="line"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <?php echo $serviceBenefitsTitle['content']; ?>
                            </div>
                        </div>
                    <?php endif; ?>
                    <div class="row">
                        <?php foreach ($serviceBenefitsView1 as $key => $view): ?>
                            <div class="col-lg-4 <?php echo $view['position']; ?>" data-aos="<?php echo $key % 2 ? 'fade-right' : 'fade-left'?>" data-aos-offset="300" data-aos-easing="ease-in-sine">
                                <?php echo $view['content']; ?>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </section>
        <?php endif; ?>

        <?php if ($serviceBenefitsBlockView2): ?>
            <section class="service-benefits custom-padding block view-2 overflow-hidden">
                <div class="container-fluid">
                    <?php echo $serviceBenefitsView2; ?>
                    <div class="clearfix"></div>
                </div>
            </section>
        <?php endif; ?>
        <!-- end -->

        <!-- Block Impact -->
        <?php if ($serviceImpactBlock): ?>
            <section class="service-impact custom-padding block overflow-hidden">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-10">
                            <?php echo $serviceImpact['service_impact']; ?>
                        </div>
                        <?php if ($serviceImpact['technologies']): ?>
                        <div class="col-12">
                            <div class="technologies">
                                <?php echo $serviceImpact['technologies']; ?>
                            </div>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
            </section>
        <?php endif; ?>
        <!-- end -->

        <!-- Block Related -->
        <?php if ($caseStudyRecommendationBlock && $relations): ?>
            <section class="service-recommendation overflow-hidden">
                <?php foreach($relations as $key => $relationPost):
                    $permalink = get_permalink($relationPost->ID);
                    $title = get_the_title($relationPost->ID);
                    $description = get_field( 'short_description', $relationPost->ID);
                    ?>
                    <div class="recommended-case-study <?php echo $key % 2 ? 'bg-gray-secondary' : 'bg-dark-blue'; ?>" style="background-image: url(<?php echo $description['feature_image']['image']; ?>)">
                        <div class="container-fluid h-100">
                            <div class="row justify-content-xxl-center align-items-center h-100">
                                <div class="col-lg-9">
                                    <div data-aos="fade-up" data-aos-offset="300" data-aos-easing="ease-in-sine">
                                        <span class="relation-number">0<?php echo $key + 1; ?></span>
                                        <h2><?php echo $title; ?></h2>
                                        <a href="<?php echo $permalink; ?>">
                                            <img class="me-5" src="<?php echo get_template_directory_uri(); ?>/assets/images/right-arrow.svg" alt="Arrow">
                                            Read Case Study
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </section>
        <?php endif; ?>
        <!-- end -->
    </main>
</div>

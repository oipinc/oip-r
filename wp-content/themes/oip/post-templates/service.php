<div data-barba="wrapper">
    <main data-barba="container" data-barba-namespace="service-view">
        <?php
            $caseStudyRecommendationBlock = get_field('case_study_recommendation_block');
            $serviceIntroBlock            = get_field('service_intro_block');
            $howWeDoBlock                 = get_field('how_we_do_block');
            $serviceBenefitsBlock         = get_field('service_benefits_block');
            $relations                    = get_field('case_study_recommendation');
            $serviceIntro                 = get_field('service_intro');
            $howWeDo                      = get_field('how_we_do');
            $serviceBenefitsBlockView1    = $serviceBenefitsBlock['checkbox_service_benefits_view_1'];
            $serviceBenefitsBlockView2    = $serviceBenefitsBlock['checkbox_service_benefits_view_2'];
            $serviceBenefitsView1         = $serviceBenefitsBlock['service_benefits_view_1'];
            $serviceBenefitsView2         = $serviceBenefitsBlock['service_benefits_view_2'];
        ?>

        <section class="service-hero custom-wrapper">
            <video
                    id="background_animation"
                    style="width: 100%; height: 100vh;"
                    src="<?php echo get_template_directory_uri(); ?>/assets/video/background-animation.mp4"
                    autoplay="true"
                    loop="true"
                    muted="muted">
            </video>
            <div class="service-hero-content">
                <h6 data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">Services</h6>
                <h1 data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine"><?php echo the_title(); ?></h1>
            </div>
        </section>

        <!-- Block Intro -->
        <?php if ($serviceIntroBlock && $serviceIntro): ?>
            <section class="service-intro custom-wrapper block" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
                <?php echo $serviceIntro; ?>
            </section>
        <?php endif; ?>
        <!-- end -->

        <!-- Block Benefits -->
        <?php if ($serviceBenefitsBlockView1): ?>
            <section class="service-benefits custom-wrapper block view-1">
                <div class="container-fluid">
                    <div class="row">
                        <?php foreach ($serviceBenefitsView1 as $key => $view): ?>
                            <div class="col-4 <?php echo $view['position']; ?>" data-aos="<?php echo $key % 2 ? 'fade-right' : 'fade-left'?>" data-aos-offset="300" data-aos-easing="ease-in-sine">
                                <?php echo $view['content']; ?>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </section>
        <?php endif; ?>

        <?php if ($serviceBenefitsBlockView2): ?>
            <section class="service-benefits custom-padding block view-2">
                <div class="container-fluid">
                    <?php echo $serviceBenefitsView2; ?>
                    <div class="clearfix"></div>
                </div>
            </section>
        <?php endif; ?>
        <!-- end -->

        <!-- Block group 3 -->
        <?php if ($howWeDoBlock && $howWeDo): ?>
            <section class="service-how-we-do custom-padding block">
                <?php echo $howWeDo; ?>
            </section>
        <?php endif; ?>
        <!-- end -->

        <!-- Block Related -->
        <?php if ($caseStudyRecommendationBlock && $relations): ?>
            <section class="service-recommendation">
                <?php foreach($relations as $key => $relationPost ):
                    $permalink = get_permalink($relationPost->ID);
                    $title = get_the_title($relationPost->ID);
                    $featureImage = get_field( 'feature_image', $relationPost->ID);
                    ?>
                    <div class="recommended-case-study <?php echo $key % 2 ? 'bg-gray-secondary' : 'bg-dark-blue'; ?>">
                        <div class="container-fluid h-100">
                            <div class="row justify-content-center align-items-center h-100">
                                <div class="col-9">
                                    <div data-aos="fade-up" data-aos-offset="300" data-aos-easing="ease-in-sine">
                                        <span class="relation-number">0<?php echo $key + 1; ?></span>
                                        <h2><?php echo $title; ?></h2>
                                        <a href="<?php echo $permalink; ?>">
                                            <img class="me-5" src="<?php echo get_template_directory_uri(); ?>/assets/images/right-arrow.svg" alt="Arrow">
                                            Read use case
                                        </a>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <img class="img-fluid" src="<?php echo $featureImage['image']; ?>" srcset="<?php echo $featureImage['retina_image']; ?> 2x" alt="Image"  data-aos="fade-down" data-aos-offset="300" data-aos-easing="ease-in-sine">
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

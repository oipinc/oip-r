<div data-barba="wrapper">
    <main data-barba="container" data-barba-namespace="case-study-view">
        <?php
            $result            = get_field('results');
            $recommendedPost   = get_field('recommended_case_study');
            $ourSolution       = get_field('our_solution');
            $problemStatement  = get_field('problem_statement');
            $appVideo          = get_field('app_video');
            $workflow          = get_field('workflow');
        ?>

        <!-- Hero -->
        <section class="case-study-hero case-study-wrapper custom-wrapper hero-gif overflow-hidden">
            <div class="container-fluid">
                <h6 data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">Case Study</h6>
                <h1 data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine"><?php echo the_title(); ?></h1>
            </div>
        </section>
        <!-- end -->

        <!-- Hero -->
        <?php while ( have_posts() ) : the_post(); ?>
            <section class="case-study-intro custom-wrapper overflow-hidden">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-10">
                            <h6 data-aos="fade-left" data-aos-offset="300" data-aos-easing="ease-in-sine">Overview</h6>
                            <div data-aos="fade-left" data-aos-offset="300" data-aos-easing="ease-in-sine">
                                <?php the_content(); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <?php endwhile; wp_reset_query(); ?>
        <!-- end -->

        <!-- Problem -->
        <?php if ($problemStatement): ?>
            <section class="case-study-wrapper case-study-problem custom-wrapper overflow-hidden">
                <div class="container-fluid">
                    <div class="row" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
                        <div class="col-lg-8 case-study-text-nav">
                            <h2><?php echo $problemStatement['label']; ?></h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 case-study-text-nav">
                            <div class="d-flex align-items-center justify-content-between" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
                                <span class="fw-bold"><?php echo $problemStatement['label']; ?></span>
                                <span class="line"></span>
                            </div>
                            <?php if ($problemStatement['image']): ?>
                                <div class="problem-statement-img text-center">
                                    <img class="img-fluid" src="<?php echo $problemStatement['image']; ?>" alt="Aries">
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="col-lg-6">
                            <div data-aos="fade-left" data-aos-offset="300" data-aos-easing="ease-in-sine">
                                <?php echo $problemStatement['content']; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <?php endif; ?>
        <!-- end -->

        <!-- Our Solution -->
        <?php if($ourSolution): ?>
            <section class="case-study-wrapper case-study-solution custom-wrapper overflow-hidden">
                <div class="container-fluid">
                    <div class="row" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
                        <div class="col-lg-8 case-study-text-nav">
                            <h2><?php echo $ourSolution['label']; ?></h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 case-study-text-nav">
                            <div class="d-flex align-items-center justify-content-between" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
                                <span class="fw-bold"><?php echo $ourSolution['label']; ?></span>
                                <span class="line"></span>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div data-aos="fade-left" data-aos-offset="300" data-aos-easing="ease-in-sine">
                                <?php echo $ourSolution['content']; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <?php endif; ?>
        <!-- end -->

        <!-- App Video -->
        <?php if(!empty($appVideo)): ?>
            <section class="app-img-wrapper text-center overflow-hidden">
                <video id="app_video" autoplay loop>
                    <?php foreach ($appVideo as $video): ?>
                        <source src="<?php echo $video['video']['url']; ?>" type="<?php echo $video['video']['mime_type']; ?>">
                    <?php endforeach; ?>
                </video>
            </section>
        <?php endif; ?>
        <!-- end -->

        <!-- Workflow -->
        <?php if(!empty($workflow['intro']) && $workflow['image']): ?>
            <section class="case-study-workflow overflow-hidden">
                <div class="container-fluid">
                    <div data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
                        <?php echo $workflow['intro']; ?>
                    </div>

                    <?php if($workflow['image']): ?>
                        <div class="workflow-img text-center" data-aos="fade-left" data-aos-offset="300" data-aos-easing="ease-in-sine">
                            <img class="img-fluid" src="<?php echo $workflow['image']; ?>" alt="Workflow">
                        </div>
                    <?php endif; ?>
                </div>
            </section>
        <?php endif; ?>
        <!-- end -->

        <!-- Result -->
        <?php if($result): ?>
            <section class="case-study-wrapper case-study-result custom-wrapper overflow-hidden">
                <div class="container-fluid">
                    <div class="row" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
                        <div class="col-lg-8 case-study-text-nav">
                            <h2><?php echo $result['label']; ?></h2>
                        </div>
                    </div>
                    <div class="row case-study-problem-divider">
                        <div class="col-lg-6 case-study-text-nav">
                            <div class="d-flex align-items-center justify-content-between" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
                                <span class="fw-bold"><?php echo $result['label']; ?></span>
                                <span class="line"></span>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div data-aos="fade-left" data-aos-offset="300" data-aos-easing="ease-in-sine">
                                <?php echo $result['content']; ?>
                            </div>
                        </div>
                    </div>
                    <div>
                        <a class="custom-link" href="/contact-us">Want to discuss a project? <img class="ms-5" src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow-right.svg" alt="Arrow"></a>
                    </div>
                </div>
            </section>
        <?php endif; ?>
        <!-- end -->

        <?php if($recommendedPost): ?>
            <section class="recommended-case-study bg-gray-secondary case-study-wrapper custom-wrapper overflow-hidden">
                <div class="container-fluid h-100">
                    <div class="row justify-content-center align-items-center h-100">
                        <div class="col">
                            <div data-aos="fade-up" data-aos-offset="300" data-aos-easing="ease-in-sine">
                                <h2><?php echo esc_html($recommendedPost->post_title); ?></h2>
                                <a href="<?php echo esc_url(get_permalink($recommendedPost->ID)); ?>">Read Case Study <img class="ms-5" src="<?php echo get_template_directory_uri(); ?>/assets/images/right-arrow.svg" alt="Arrow"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <?php endif; ?>
    </main>
</div>

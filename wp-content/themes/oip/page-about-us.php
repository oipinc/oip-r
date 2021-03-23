<?php
/**
 * Template Name: About us
 */
?>

<?php get_header(); ?>

<div data-barba="wrapper">
    <main data-barba="container" data-barba-namespace="about">
        <?php
            $jobs         = get_field('jobs');
            $intro        = get_field('intro');
            $teamImage    = get_field('team_image');
            $aboutCompany = get_field('about_company');
        ?>

        <!-- Hero -->
        <?php while ( have_posts() ) : the_post(); ?>
            <section class="about-hero custom-padding position-relative">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-10" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
                            <?php the_content(); ?>
                        </div>
                    </div>
                </div>
            </section>
        <?php endwhile; wp_reset_query(); ?>
        <!-- end -->

        <!-- Hero -->
        <?php if ($intro): ?>
            <section class="about-people custom-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-6" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
                            <?php echo $intro; ?>
                        </div>
                    </div>
                </div>
            </section>
        <?php endif; ?>
        <!-- end -->

        <!-- Image -->
        <?php if ($teamImage): ?>
            <section class="about-team text-center">
                <img class="img-fluid" src="<?php echo $teamImage; ?>" alt="OIP Team" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
            </section>
        <?php endif; ?>
        <!-- end -->

        <!-- About Company -->
        <?php if ($aboutCompany): ?>
            <section class="about-company custom-wrapper">
                <div class="container-fluid" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
                    <?php echo $aboutCompany; ?>

                    <div class="about-company-more">
                        <div class="row">
                            <div class="col-md-auto mb-4 mb-md-0">
                                <a class="custom-link d-flex justify-content-between" href="/contact-us">
                                    <span>Contact us</span>
                                    <img style="width: 30px" width="30" src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow-right.svg" alt="Arrow">
                                </a>
                            </div>
<!--                            <div class="col-md-auto">-->
<!--                                <a class="custom-link d-flex justify-content-between" href="#">-->
<!--                                    Find out more-->
<!--                                    <img style="width: 30px" width="30" src="--><?php //echo get_template_directory_uri(); ?><!--/assets/images/arrow-right.svg" alt="Arrow">-->
<!--                                </a>-->
<!--                            </div>-->
                        </div>
                    </div>
                </div>
            </section>
        <?php endif; ?>
        <!-- end -->

        <!-- Jobs -->
        <?php if ($jobs): ?>
            <section class="about-career custom-wrapper">
                <div class="container-fluid h-100">
                    <div class="row align-items-center h-100">
                        <?php
                            $class = "";

                            if (count($jobs) === 1) {
                                $class = "col-12";
                            } elseif (count($jobs) === 2) {
                                $class = "col-lg-6 mb-4 mb-lg-0";
                            } elseif (count($jobs) === 3) {
                                $class = "col-lg-4 mb-4 mb-lg-0";
                            }
                        ?>

                        <?php foreach ($jobs as $key => $job): ?>
                            <div class="<?php echo $class; ?>" data-aos="<?php echo $key % 2 ? 'fade-right' : 'fade-left'?>" data-aos-offset="300" data-aos-easing="ease-in-sine">
                                <h3 class="mb-4"><?php echo $job->post_title; ?></h3>
                                <div class="d-flex align-items-center mb-lg-3">
                                    <div class="flex-grow-0 text-white-05 small-headline me-3"><?php echo get_field('condition', $job->ID)['type_of_employment']; ?></div>
                                    <div class="flex-grow-0 text-white-05 small-headline"><?php echo get_field('condition', $job->ID)['place_of_employment']; ?></div>
                                </div>
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-0 text-white-05 small-headline me-3">Application due date</div>
                                    <div class="flex-grow-0 small-headline"><?php echo get_field('condition', $job->ID)['application_due_date']; ?></div>
                                    <div class="flex-grow-1 text-end me-lg-5">
                                        <a href="<?php echo get_permalink($job->ID); ?>">
                                            <img width="30" src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow-right.svg" alt="Arrow">
                                        </a>
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

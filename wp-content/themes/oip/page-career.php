<?php
/**
 * Template Name: Career
 */
?>

<?php get_header(); ?>

<div data-barba="wrapper">
    <main data-barba="container" data-barba-namespace="career">
        <?php if( have_rows('our_values') ): ?>
            <section class="career-values custom-padding">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <p class="section-title">Our Values</p>
                        </div>
                        <?php $count = 0; ?>
                        <?php while( have_rows('our_values') ): the_row(); $count++;
                            $content = get_sub_field('content');
                            ?>
                            <div class="col-lg-4">
                                <span class="career-number">0<?php echo $count; ?></span>
                                <?php echo $content; ?>
                            </div>
                        <?php endwhile; ?>
                    </div>
                </div>
            </section>
        <?php endif; ?>

        <?php if( have_rows('board') ): ?>
            <section class="career-board custom-padding">
                <div class="container-fluid">
                    <h2 class="board-title">Getting on board</h2>
                    <?php $count = -1; ?>
                    <?php while( have_rows('board') ): the_row(); $count++;
                        $content = get_sub_field('content');
                        ?>
                        <div class="board-row">
                            <div class="d-flex align-items-center">
                                <div class="flex-grow-0 me-5 board-day">
                                    <p>Day <?php echo $count; ?></p>
                                </div>
                                <div class="flex-grow-1">
                                    <?php echo $content; ?>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
            </section>
        <?php endif; ?>

        <section class="career-open-position custom-padding">
            <div class="container-fluid">
                <div class="career-open-position-section-title" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
                    <div class="case-study-text-nav">
                        <h2>Open positions</h2>
                        <div class="d-flex align-items-center">
                            <span class="fw-bold">Open positions</span>
                            <span class="line"></span>
                        </div>
                    </div>
                </div>
                <div class="career-job-box">
                    <div class="row align-items-center">
                        <div class="col">
                            <div class="row">
                                <div class="col-12">
                                    <h3>DevOps</h3>
                                </div>
                                <div class="col-md-4">
                                    <p class="career-job-box-small-title">Place of employment:</p>
                                    <p class="text-uppercase">Remote</p>
                                </div>
                                <div class="col-md-4">
                                    <p class="career-job-box-small-title">Application due date:</p>
                                    <p class="text-uppercase">Open until filled</p>
                                </div>
                                <div class="col-md-4">
                                    <p class="career-job-box-small-title">Type of employment:</p>
                                    <p class="text-uppercase">Full time job</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <a class="custom-link" href="#"><img width="30" class="ms-5" src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow-right.svg" alt="Arrow"></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="board-redirection-link">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <div class="board-redirection-box">
                            <a class="custom-link" href="/contact-us">Contact Us <img class="ms-5" width="30" src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow-right.svg" alt="Arrow"></a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="board-redirection-box">
                            <div>
                                <h3>Meet the team</h3>
                                <p>One of our clients, a leading wholesaler on the E&S market, had difficulties keeping up with hundreds of daily rece.</p>
                                <div class="d-block text-end">
                                    <a class="custom-link" href="#"><img width="30" class="ms-5" src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow-right.svg" alt="Arrow"></a>
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

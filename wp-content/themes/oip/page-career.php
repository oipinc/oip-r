<?php
/**
 * Template Name: Career
 */
?>

<?php get_header(); ?>

<div data-barba="wrapper">
    <main data-barba="container" data-barba-namespace="career">
         <?php
            $hero         = get_field('hero');
            $benefits     = get_field('benefits');
            $openPosition = get_field('open_positions');
         ?>

        <?php if ($hero): ?>
            <section class="career-hero custom-padding d-flex align-items-center" style="background-image: url(<?php echo $hero['background'] ?>)">
                <div class="container-fluid" data-aos="fade-up" data-aos-offset="300" data-aos-easing="ease-in-sine">
                    <?php echo $hero['content']; ?>
                </div>
            </section>
        <?php endif; ?>

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
                            <div class="col-md-6 col-lg-4" data-aos="<?php echo $count % 2 ? 'fade-right' : 'fade-left'?>" data-aos-offset="300" data-aos-easing="ease-in-sine">
                                <span class="career-number">0<?php echo $count; ?></span>
                                <?php echo $content; ?>
                            </div>
                        <?php endwhile; ?>
                    </div>
                </div>
            </section>
        <?php endif; ?>

        <?php if ($benefits): ?>
            <section class="career-benefit custom-padding">
                <div class="container-fluid">
                    <h2 class="board-title" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">Our Benefits</h2>
                    <div class="career-benefit-holder" data-aos="fade-up" data-aos-offset="300" data-aos-easing="ease-in-sine">
                        <?php echo $benefits; ?>
                    </div>
                </div>
            </section>
        <?php endif; ?>

        <?php if( have_rows('board') ): ?>
            <section class="career-board custom-padding">
                <div class="container-fluid">
                    <h2 class="board-title" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">Getting on board</h2>
                    <?php $count = -1; ?>
                    <?php while( have_rows('board') ): the_row(); $count++;
                        $content = get_sub_field('content');
                        ?>
                        <div class="board-row" data-aos="<?php echo $count % 2 ? 'fade-right' : 'fade-left'?>" data-aos-offset="300" data-aos-easing="ease-in-sine">
                            <div class="d-lg-flex align-items-center">
                                <div class="flex-grow-0 me-5 board-day mb-3 mb-lg-0">
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

        <?php if ($openPosition): ?>
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

                    <?php foreach($openPosition as $key => $post):
                        $permalink = get_permalink($post->ID);
                        $title = get_the_title($post->ID);
                        $condition = get_field( 'condition', $post->ID );
                        ?>
                        <div class="career-job-box mb-3" data-aos="<?php echo $key % 2 ? 'fade-right' : 'fade-left'?>" data-aos-offset="300" data-aos-easing="ease-in-sine">
                            <div class="row align-items-center">
                                <div class="col">
                                    <div class="row">
                                        <div class="col-12">
                                            <h3><?php echo $title; ?></h3>
                                        </div>
                                        <div class="col-md-4">
                                            <p class="career-job-box-small-title">Place of employment:</p>
                                            <p class="text-uppercase"><?php echo $condition['place_of_employment']; ?></p>
                                        </div>
                                        <div class="col-md-4">
                                            <p class="career-job-box-small-title">Application due date:</p>
                                            <p class="text-uppercase"><?php echo $condition['application_due_date']; ?></p>
                                        </div>
                                        <div class="col-md-4">
                                            <p class="career-job-box-small-title">Type of employment:</p>
                                            <p class="text-uppercase"><?php echo $condition['type_of_employment']; ?></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <a class="custom-link" href="<?php echo esc_url( $permalink ); ?>">
                                        <img width="30" class="ms-5" src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow-right.svg" alt="Arrow">
                                    </a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </section>
        <?php endif; ?>

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
                                <div class="d-block text-md-end pb-4 pb-md-0">
                                    <a class="custom-link" href="/about"><img width="30" src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow-right.svg" alt="Arrow"></a>
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

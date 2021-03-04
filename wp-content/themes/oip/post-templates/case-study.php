<div data-barba="wrapper">
    <main data-barba="container" data-barba-namespace="case-study-view">
        <section class="case-study-wrapper">
            <div class="case-study-intro">
                <h6 data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">Case Study</h6>
                <h1 data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine"><?php echo the_title(); ?></h1>
                <h6 data-aos="fade-left" data-aos-offset="300" data-aos-easing="ease-in-sine">Overview</h6>
                <div data-aos="fade-left" data-aos-offset="300" data-aos-easing="ease-in-sine">
                    <?php while ( have_posts() ) : the_post(); ?>
                        <?php the_content(); ?>
                    <?php
                    endwhile;
                    wp_reset_query();
                    ?>
                </div>
            </div>
        </section>
        <section class="case-study-wrapper case-study-problem">
            <div class="container-fluid">
                <div class="row" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
                    <div class="col-lg-8 case-study-text-nav">
                        <h2>Problem statement</h2>
                    </div>
                </div>

                <?php $count = 0; ?>
                <?php if( have_rows('problem_solution') ): ?>
                    <?php while( have_rows('problem_solution') ): the_row(); $count++;
                        $image = get_sub_field('image');
                        $retinaImage = get_sub_field('retina_image');
                        $content = get_sub_field('content');
                        ?>
                        <div class="row <?php echo $count === 1 ? "case-study-problem-divider" : "" ?>">
                            <?php if ($count === 1) { ?>
                                <div class="col-lg-6 case-study-text-nav">
                                    <div class="d-flex align-items-center" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
                                        <span class="fw-bold">Problem statement</span>
                                        <span class="line"></span>
                                    </div>
                                </div>
                            <?php } else { ?>
                                <div class="col-lg-6 text-center">
                                    <?php if ($image && $retinaImage) { ?>
                                        <img class="img-fluid" src="<?php echo $image; ?>" srcset="<?php echo $retinaImage; ?> 2x" alt="Image" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
                                    <?php }?>
                                </div>
                            <?php } ?>
                            <div class="col-lg-6">
                                <div data-aos="fade-left" data-aos-offset="300" data-aos-easing="ease-in-sine">
                                    <?php echo $content; ?>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </section>
        <section class="case-study-wrapper case-study-solution">
            <div class="container-fluid">
                <div class="row" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
                    <div class="col-lg-8 case-study-text-nav">
                        <h2>Our Solution</h2>
                    </div>
                </div>
                <?php
                $ourSolutionTop = get_field('our_solution_top');
                if($ourSolutionTop): ?>
                    <div class="row">
                        <div class="col-lg-6 case-study-text-nav">
                            <div class="d-flex align-items-center" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
                                <span class="fw-bold"><?php echo $ourSolutionTop['label']; ?></span>
                                <span class="line"></span>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div data-aos="fade-left" data-aos-offset="300" data-aos-easing="ease-in-sine">
                                <?php echo $ourSolutionTop['content']; ?>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </section>
        <section class="app-img-wrapper">
            <img class="img-fluid" src="http://localhost:8000/wp-content/uploads/2021/03/app.png" srcset="http://localhost:8000/wp-content/uploads/2021/03/app@2x.png 2x" alt="App image" data-aos="fade-up" data-aos-offset="300" data-aos-easing="ease-in-sine">
        </section>
        <section class="case-study-wrapper case-study-solution">
            <div class="container-fluid">
                <?php
                $ourSolutionBottom = get_field('our_solution_bottom');
                if($ourSolutionBottom): ?>
                    <div class="row">
                        <div class="col-lg-6 case-study-text-nav">
                            <div class="d-flex align-items-center" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
                                <span class="fw-bold"><?php echo $ourSolutionBottom['label']; ?></span>
                                <span class="line"></span>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div data-aos="fade-left" data-aos-offset="300" data-aos-easing="ease-in-sine">
                                <?php echo $ourSolutionBottom['content']; ?>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </section>
        <section>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 bg-light-gray use-case-img-holder text-center">
                        <img class="img-fluid" src="http://localhost:8000/wp-content/uploads/2021/03/iphone-e1614687678703.png" srcset="http://localhost:8000/wp-content/uploads/2021/03/iphone@2x-e1614687650872.png 2x" alt="App image" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
                    </div>
                    <div class="col-md-6 bg-white use-case-img-holder text-center">
                        <img class="img-fluid" src="http://localhost:8000/wp-content/uploads/2021/03/iphone-e1614687678703.png" srcset="http://localhost:8000/wp-content/uploads/2021/03/iphone@2x-e1614687650872.png 2x" alt="App image" data-aos="fade-left" data-aos-offset="300" data-aos-easing="ease-in-sine">
                    </div>
                </div>
            </div>
        </section>
        <section class="recommended-case-study bg-gray-secondary case-study-wrapper">
            <div class="container-fluid h-100">
                <div class="row justify-content-center align-items-center h-100">
                    <div class="col">
                        <div data-aos="fade-up" data-aos-offset="300" data-aos-easing="ease-in-sine">
                            <h2>Multiquoting without
                                a human touch</h2>
                            <a href="#">Read Use Case <img class="ms-5" src="<?php echo get_template_directory_uri(); ?>/assets/images/right-arrow.svg" alt="Arrow"></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</div>

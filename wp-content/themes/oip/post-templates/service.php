<div data-barba="wrapper">
    <main data-barba="container" data-barba-namespace="service-view">
        <section class="service-wrapper">
            <div class="service-intro">
                <h6 data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">Services</h6>
                <h1 data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine"><?php echo the_title(); ?></h1>
                <div class="container-fluid">
                    <div class="row justify-content-end">
                        <div class="col-lg-7">
                            <div data-aos="fade-left" data-aos-offset="300" data-aos-easing="ease-in-sine">
                                <?php while ( have_posts() ) : the_post(); ?>
                                    <?php the_content(); ?>
                                <?php
                                endwhile;
                                wp_reset_query();
                                ?>
                                <a class="contact-us-link" href="/contact-us">Contact us <img class="ms-5" src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow-right.svg" alt="Arrow"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php
        $serviceContent = get_field('service_content');
        if($serviceContent['left_content'] || $serviceContent['right_content'] || $serviceContent['image']): ?>
            <section class="service-wrapper">
                <div class="service-content">
                    <h6 data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">Our value delivery train looks as follows: </h6>
                    <div class="container-fluid service-content-holder">
                        <div class="row">
                            <div class="col-lg-4 align-self-center" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
                                <span class="content-number">01</span>
                                <?php echo $serviceContent['left_content']; ?>
                            </div>
                            <div class="col-lg-4" data-aos="fade-up" data-aos-offset="300" data-aos-easing="ease-in-sine">
                                <img class="img-fluid" src="<?php echo $serviceContent['image']; ?>" srcset="<?php echo $serviceContent['retina_image']; ?> 2x" alt="Image">
                            </div>
                            <div class="col-lg-4 align-self-end" data-aos="fade-left" data-aos-offset="300" data-aos-easing="ease-in-sine">
                                <span class="content-number">02</span>
                                <?php echo $serviceContent['right_content']; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <?php endif; ?>

        <?php
        $relations = get_field('case_study_recommendation');
        if($relations): ?>
            <section class="service-recommendation">
                <?php foreach($relations as $key => $relationPost ):
                    $permalink = get_permalink($relationPost->ID);
                    $title = get_the_title($relationPost->ID);
                    $featureImage = get_field( 'feature_image', $relationPost->ID);
                    ?>
                    <div class="recommended-case-study <?php echo $key % 2 ? '' : 'bg-gray-secondary'; ?>">
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
    </main>
</div>

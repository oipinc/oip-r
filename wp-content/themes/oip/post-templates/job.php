<div data-barba="wrapper">
    <main data-barba="container" data-barba-namespace="job-view">

        <?php while ( have_posts() ) : the_post(); ?>
        <?php $condition = get_field( "condition", get_the_ID()); ?>
            <section class="job-hero custom-padding hero-gif overflow-hidden">
                <div class="container-fluid h-100">
                    <div class="h-100 d-flex align-items-center">
                        <div class="job-intro w-100">
                            <h1> <?php the_title(); ?></h1>
                            <div class="row">
                                <div class="col-md-10">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <p class="career-job-box-small-title">Place of employment:</p>
                                            <p class="text-uppercase career-job-box-small-title text-white"><?php echo $condition['place_of_employment']; ?></p>
                                        </div>
                                        <div class="col-md-4">
                                            <p class="career-job-box-small-title">Application due date:</p>
                                            <p class="text-uppercase career-job-box-small-title text-white"><?php echo $condition['application_due_date']; ?></p>
                                        </div>
                                        <div class="col-md-4">
                                            <p class="career-job-box-small-title">Type of employment:</p>
                                            <p class="text-uppercase career-job-box-small-title text-white"><?php echo $condition['type_of_employment']; ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="job-wrapper custom-padding overflow-hidden">
                <div class="container-fluid">
                    <?php the_content(); ?>
                </div>
            </section>

            <?php
            $form = get_field('apply_form');
            if ($form): ?>
                <section class="job-form overflow-hidden">
                    <div class="container-fluid">
                        <?php echo $form['content']; ?>
                        <div class="form-holder">
                            <?php echo do_shortcode($form['form_shortcode'])?>
                        </div>
                    </div>
                </section>
            <?php endif; ?>
        <?php
        endwhile;
        wp_reset_query();
        ?>
    </main>
</div>

<?php
/**
 * Template Name: Legal
 */
?>

<?php get_header(); ?>

<div data-barba="wrapper">
    <main data-barba="container" data-barba-namespace="terms-and-condition">
        <?php while ( have_posts() ) : the_post(); ?>
            <section class="legal-hero custom-wrapper hero-gif">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-9">
                            <h1> <?php the_title(); ?></h1>
                        </div>
                    </div>
                </div>
            </section>
            <section class="legal-wrapper custom-wrapper block">
                <div class="container-fluid">
                    <?php the_content(); ?>
                </div>
            </section>
        <?php endwhile; wp_reset_query(); ?>
    </main>
</div>

<?php get_footer(); ?>

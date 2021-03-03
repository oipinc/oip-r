<?php
/**
 * Template Name: Legal
 */
?>

<?php get_header(); ?>

<div data-barba="wrapper">
    <main data-barba="container" data-barba-namespace="terms-and-condition">
        <section class="hero">
            <div class="hero-content">
                <div class="container-fluid">
                    <h1>Hero</h1>
                </div>
            </div>
        </section>
        <section class="legal-wrapper">
            <div class="container">
                <?php while ( have_posts() ) : the_post(); ?>
                    <?php the_content(); ?>
                <?php
                endwhile;
                wp_reset_query();
                ?>
            </div>
        </section>
    </main>
</div>

<?php get_footer(); ?>

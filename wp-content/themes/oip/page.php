<?php get_header(); ?>

<div data-barba="wrapper">
    <main data-barba="container" data-barba-namespace="about">
        <div class="heading-container">
            <h1 class="main-heading is-animated">This is<br><span class="green-heading-bg">the about</span><br>screen.<br></h1>
            <?php while ( have_posts() ) : the_post(); ?>
                <?php the_content(); ?>
            <?php
            endwhile;
            wp_reset_query();
            ?>
        </div>
    </main>
</div>

<?php get_footer(); ?>

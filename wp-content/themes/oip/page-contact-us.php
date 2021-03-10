<?php
/**
 * Template Name: Contact us
 */
?>

<?php get_header(); ?>

<div data-barba="wrapper">
    <main data-barba="container" data-barba-namespace="contact-us">
        <?php
        $hero = get_field('hero');
        if ($hero): ?>
            <section class="contact-us-hero position-relative">
                <img class="img-fluid" src="<?php echo $hero['image'] ?>" srcset=" <?php echo $hero['retina_image'] ?> 2x" alt="OIP group">
                <div class="custom-padding">
                    <div class="container-fluid">
                        <div class="contact-us-hero-content">
                            <div>
                                <?php echo $hero['content'] ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <?php endif; ?>

        <?php
        $intro = get_field('intro');
        if ($intro): ?>
            <section class="contact-us-intro custom-padding bg-white">
                <div class="contact-us-intro-bg">
                    <h2 class="my-0">Drop us a line.</h2>
                </div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <p>Work with us</p>
                        </div>
                        <div class="col-lg-6">
                            <div data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
                                <?php echo $intro['left_content']; ?>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div data-aos="fade-left" data-aos-offset="300" data-aos-easing="ease-in-sine">
                                <?php echo $intro['right_content']; ?>
                                <span class="contact-email">office@oip.bz</span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <?php endif; ?>

        <?php if( have_rows('office') ): ?>
            <section class="contact-us-office custom-padding bg-white">
                <div class="office-bg position-relative">
                    <div class="container-fluid">
                        <div class="row">
                            <?php $count = 0; ?>
                            <?php while( have_rows('office') ): the_row(); $count++;
                                $title = get_sub_field('title');
                                $content = get_sub_field('content');
                                $email = get_sub_field('email');
                                $background = get_sub_field('background');
                                ?>
                                <div class="col-auto mb-4">
                                    <div class="office-box" style="background-image: url('<?php echo $background; ?>')" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="<?php echo $count*150; ?>">
                                        <div>
                                            <h5><?php echo $title; ?></h5>
                                        </div>
                                        <div class="d-flex justify-content-center flex-grow-1 flex-column">
                                            <?php echo $content; ?>
                                        </div>
                                        <div class="d-flex align-items-end flex-grow-1">
                                            <p><?php echo $email; ?></p>
                                        </div>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        </div>
                    </div>
                </div>
            </section>
        <?php endif; ?>
    </main>
</div>

<?php get_footer(); ?>

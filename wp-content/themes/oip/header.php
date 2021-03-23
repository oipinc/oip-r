<!DOCTYPE html>
<html class="init">
<head>
    <?php wp_head(); ?>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>

    <!-- Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-40217451-4"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-40217451-4');
    </script>
</head>

<?php
    $bgProduct   = in_category('7') ? 'bg-dark-blue' : '';
    $address     = get_field('address', 'option');
    $phone       = get_field('phone', 'option');
    $email       = get_field('email', 'option');
    $copyright   = get_field('copyright', 'option');
?>

<body class="init <?php echo $bgProduct; ?>">

    <div class="loading-container">
        <div class="loading-screen"></div>
    </div>
    <div class="init-container d-flex position-fixed align-items-center justify-content-center">
        <a class="init-logo" href="/">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg" alt="Logo">
        </a>
        <h1 class="my-0">OIP ROBOTICS</h1>
    </div>
    <div class="get-in-touch d-none d-xxl-inline-block">
        <a class="text-white" href="/contact-us">
            Get in touch
        </a>
    </div>

    <div class="menu">
        <div class="menu-navigation">
            <div class="container-fluid">
                <?php
                    wp_nav_menu([
                        'menu' => 'header',
                        'container' => '',
                        'theme_location' => 'header',
                        'items_wrap' => '<ul class="list-unstyled menu-list">%3$s</ul>'
                    ])
                ?>
                <div class="mob-info d-md-none">
                    <hr class="my-4">
                    <div class="mb-4 d-block">
                        <a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a>
                    </div>
                    <div class="mb-4">
                        <a target="_blank" href="https://goo.gl/maps/FFfwad9MFqbrPwPH9"><?php echo $address; ?></a>
                        <br>
                        <a href="tel:<?php echo $phone; ?>"><?php echo $phone; ?></a>
                    </div>
                    <a href="/contact-us" class="btn-contact-us">Get in touch</a>
                </div>
            </div>
        </div>
        <div class="menu-share d-none d-md-block">
            <div class="container-fluid">
                <div class="row align-items-end">
                    <div class="col-auto">
                        <?php get_template_part('template-parts/share'); ?>
                    </div>
                    <div class="col text-end">
                        <a class="mailto-link" href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <header>
        <nav class="navbar navbar-expand-lg main-navigation">
            <div class="container-fluid">
                <a href="/">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg" alt="Logo">
                </a>
                <div class="menu-icon btn-menu">
                    <span class="menu-icon__line menu-icon__line-left"></span>
                    <span class="menu-icon__line"></span>
                    <span class="menu-icon__line menu-icon__line-right"></span>
                </div>
            </div>
        </nav>
    </header>

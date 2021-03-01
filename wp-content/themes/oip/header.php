<!DOCTYPE html>
<html>
<head>
    <?php wp_head(); ?>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;700;800&display=swap" rel="stylesheet">
</head>
<body>
    <div class="loading-container">
        <div class="loading-screen"></div>
    </div>
    <div class="menu">
        <div class="menu-navigation">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-9">
                        <ul class="list-unstyled menu-list">
                            <li class="active"><a href="#">About us</a></li>
                            <li><a href="#">Career</a></li>
                            <li><a href="#">Meet the team</a></li>
                            <li><a href="#">Case studies</a></li>
                            <li><a href="#">Services</a></li>
                        </ul>
                    </div>
                    <div class="col text-center">
                        <a class="text-white get-in-touch" href="#">
                            Get in touch
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="menu-share">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-auto">
                        <?php get_template_part('template-parts/share'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <header>
        <nav class="navbar navbar-expand-lg main-navigation">
            <div class="container-fluid">
                <a href="#">
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

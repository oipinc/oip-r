<!DOCTYPE html>
<html class="init">
<head>
    <?php wp_head(); ?>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <script type="text/javascript" src="https://oiprobotics.atlassian.net/s/d41d8cd98f00b204e9800998ecf8427e-T/sb53l8/b/24/a44af77267a987a660377e5c46e0fb64/_/download/batch/com.atlassian.jira.collector.plugin.jira-issue-collector-plugin:issuecollector/com.atlassian.jira.collector.plugin.jira-issue-collector-plugin:issuecollector.js?locale=en-US&collectorId=bd4e240a"></script>


</head>

<?php
    $bgProduct = in_category('7') ? 'bg-dark-blue' : '';
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
    <div class="menu">
        <div class="menu-navigation">
            <div class="container-fluid">
                <div class="get-in-touch">
                    <a class="text-white" href="#">
                        Get in touch
                    </a>
                </div>
                <div class="row align-items-center">
                    <div class="col-9">
                        <?php
                            wp_nav_menu([
                                'menu' => 'header',
                                'container' => '',
                                'theme_location' => 'header',
                                'items_wrap' => '<ul class="list-unstyled menu-list">%3$s</ul>'
                            ])
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="menu-share">
            <div class="container-fluid">
                <div class="row align-items-end">
                    <div class="col-auto">
                        <?php get_template_part('template-parts/share'); ?>
                    </div>
                    <div class="col text-end">
                        <span>office@oip.bz</span>
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

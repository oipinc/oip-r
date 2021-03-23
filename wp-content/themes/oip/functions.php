<?php

function hide_admin_bar() {
    return false;
}

function title_setup()
{
    add_theme_support('title-tag');
}

function gretathemes_meta_description() {
    global $post;

    $title = $post->post_title;

    echo '<meta name="robots" content="index, follow">';
    echo '<meta name="description" content="OIP Robotics is a Specialty Lines InsurTech, working on digital transformation in the US and UK market." />';
    echo '<meta name="apple-mobile-web-app-capable" content="yes">';
    echo '<meta name="format-detection" content="telephone=no">';
    echo '<meta name="copyright" content="OIP Robotics">';
    echo '<meta name="rating" content="general">';
    echo '<link rel="icon" href="' . get_template_directory_uri() .'/assets/images/favicon.ico" type="image/x-icon" />';
    echo '<link rel="shortcut icon" href="' . get_template_directory_uri() .'/assets/images/favicon.ico" type="image/x-icon" />';
    echo '<link rel="apple-touch-icon" href="' . get_template_directory_uri() .'/assets/images/apple-touch-icon.png">';
    echo '<meta name="keywords" content="knowledge process outsourcing, outsourcing insurance, insurtech companies, back office support, properties and casualty insurance, insurance BPO, outsourcing insurance services, outsourcing insurance professionals, insurtech services, back office outsource" />';
    echo '<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">';
}

/**
 * This method will generate a style and place it in the header
 *
 * @var integer $version Theme version (see at the top of style.css)
 */
function register_styles()
{
    $version = wp_get_theme()->get('Version');

    wp_enqueue_style('bootstrap', get_template_directory_uri() . "/assets/css/bootstrap.min.css", [], $version, "all");
    wp_enqueue_style('aos', get_template_directory_uri() . "/assets/css/aos.css", [], $version, "all");
    wp_enqueue_style('swiper', get_template_directory_uri() . "/assets/css/swiper-bundle.min.css", [], $version, "all");
    wp_enqueue_style('styles', get_template_directory_uri() . "/style.css", [], $version, "all");
}

/**
 * This method will generate a javascript and place it in the footer
 *
 * @var integer $version Theme version (see at the top of style.css)
 */
function register_scripts()
{
    $version = wp_get_theme()->get('Version');

    wp_enqueue_script('jquery', get_template_directory_uri() . "/assets/js/jquery.min.js", [], $version, "all");
    wp_enqueue_script('popper', get_template_directory_uri() . "/assets/js/popper.js", [], $version, "all");
    wp_enqueue_script('bootstrap', get_template_directory_uri() . "/assets/js/bootstrap.min.js", [], $version, "all");
    wp_enqueue_script('aos', get_template_directory_uri() . "/assets/js/aos.js", [], $version, "all");
    wp_enqueue_script('barba', get_template_directory_uri() . "/assets/js/barba.min.js", [], $version, "all");
    wp_enqueue_script('gsap', get_template_directory_uri() . "/assets/js/gsap.min.js", [], $version, "all");
    wp_enqueue_script('swiper', get_template_directory_uri() . "/assets/js/swiper-bundle.min.js", [], $version, "all");
    wp_enqueue_script('matchHeight', get_template_directory_uri() . "/assets/js/jquery.matchHeight.js", [], $version, "all");
    wp_enqueue_script('custom', get_template_directory_uri() . "/assets/js/custom.js", [], $version, "all");
}

/**
 * This method will create menu options in the admin panel
 *
 * @var array $menu Options in the admin panel
 */
function register_menu()
{
    $menu = [
        'header' => 'Header menu',
        'footer' => 'Footer menu',
        'legal' => 'Legal menu',
    ];

    register_nav_menus($menu);
}

add_action('wp_enqueue_scripts', 'register_styles');
add_action('wp_enqueue_scripts', 'register_scripts');
add_action('after_setup_theme', 'title_setup');
add_action('init', 'register_menu');
add_filter('show_admin_bar', 'hide_admin_bar');
add_action( 'wp_head', 'gretathemes_meta_description');

if( function_exists('acf_add_options_page') ) {

    acf_add_options_page(array(
        'page_title' 	=> 'Theme General Settings',
        'menu_title'	=> 'Theme Settings',
        'menu_slug' 	=> 'theme-general-settings'
    ));

    acf_add_options_sub_page(array(
        'page_title' 	=> 'Theme Header Settings',
        'menu_title'	=> 'Header',
        'parent_slug'	=> 'theme-general-settings',
    ));

    acf_add_options_sub_page(array(
        'page_title' 	=> 'Theme Footer Settings',
        'menu_title'	=> 'Footer',
        'parent_slug'	=> 'theme-general-settings',
    ));
}

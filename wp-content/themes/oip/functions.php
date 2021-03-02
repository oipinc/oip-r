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

//    $desPost = strip_tags($post->post_content);
//    $desPost = strip_shortcodes($desPost);
//    $desPost = str_replace(["\n", "\r", "\t"], ' ', $desPost);
//    $desPost = mb_substr($desPost, 0, 300, 'utf8');
//
//    $description = $desPost !== "" ? $desPost : 'Desc';

    $title = $post->post_title;

    echo '<meta name="robots" content="index, follow">';
    echo '<meta name="description" content="OIP is the leading Knowledge Process Outsourcing company within the E&S market, supported by 30 years of underwriting experience and 8 years of front line service." />';
    echo '<link rel="icon" href="' . get_template_directory_uri() .'/assets/images/favicon.ico" type="image/x-icon" />';
    echo '<link rel="shortcut icon" href="' . get_template_directory_uri() .'/assets/images/favicon.ico" type="image/x-icon" />';
    echo '<meta name="keywords" content="knowledge process outsourcing, outsourcing insurance, insurtech companies, back office support, properties and casualty insurance, insurance BPO, outsourcing insurance services, outsourcing insurance professionals, insurtech services, back office outsource" />';
    echo '<meta name="viewport" content="width=device-width, initial-scale=1">';

    echo '<meta property="og:site_name" content="OIP">';
    echo '<meta content="website" property="og:type">';
    echo '<meta property="og:title" content="'. $title .'">';
    echo '<meta property="og:type" content="">';
    echo '<meta property="fb:app_id" content="">';
    echo '<meta property="og:url" content="https://oip.biz">';
    echo '<meta property="og:description" content="OIP is the leading Knowledge Process Outsourcing company within the E&S market, supported by 30 years of underwriting experience and 8 years of front line service.">';
    echo '<meta property="og:image" content="' . get_template_directory_uri() . '/assets/images/oip-share.jpg">';
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
    ];

    register_nav_menus($menu);
}

add_action('wp_enqueue_scripts', 'register_styles');
add_action('wp_enqueue_scripts', 'register_scripts');
add_action('after_setup_theme', 'title_setup');
add_action('init', 'register_menu');
add_filter('show_admin_bar', 'hide_admin_bar');
add_action( 'wp_head', 'gretathemes_meta_description');

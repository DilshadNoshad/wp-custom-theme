<?php

require get_template_directory() . "/inc/customizer.php";

function iteducation_load_scripts()
{
    wp_enqueue_style("iteducation-style", get_stylesheet_uri(), array(), filemtime(get_template_directory() . "/style.css"), "all");
    wp_enqueue_style("google-font", "https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap", array(), null);
    wp_enqueue_script("dropdown", get_template_directory_uri() . "/js/dropdown.js", array(), "1.0", true);

}

add_action("wp_enqueue_scripts", "iteducation_load_scripts");

function iteducation_config()
{

    $textdomain = "iteducation";

    // - this function is used to ensure that future translation files are uploaded in a correct way. it loads the MO file when its exists based on the sitels language. which define dynamic in header.php
    // - takes two params  one is text domain in this case use as a unique identifier know wordpress it parts of the translation package for our theme.Second one is directory path where translation files stay

    load_theme_textdomain($textdomain, get_template_directory() . "/languages/");

    // now talking about the function which is use to translation
    // show example in twenty twenty theme 404.php
    // - _e() its echo print result on screen
    // - __() only return not echo
    // sever more functions like that use in wordpress

    register_nav_menus(array(
        "iteducation_main_menu" => __("Main Menu", "iteducation"),
        "iteducation_footer_menu" => __("Footer Menu", "iteducation"),
    ));

    $args = array(
        'width' => 1920,
        'height' => 225,
    );

    add_theme_support('custom-header', $args);
    add_theme_support("post-thumbnails");
    add_theme_support("custom-logo", array(
        "width" => 200,
        "height" => 110,
        "flex-width" => true,
        "flex-height" => true,
    ));

    add_theme_support('automatic-feed-links');
    add_theme_support('html5', array('comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script')); //enable to write semantic tag in comment-list etc
    add_theme_support('title-tag');
}

add_action("after_setup_theme", "iteducation_config", 0);

add_action("widgets_init", "iteducation_sidebars");

function iteducation_sidebars()
{
    register_sidebar(
        array(
            "name" => __("Blog Sidebar", "iteducation"),
            "id" => "sidebar-blog",
            "description" => __("This is the blog widget. You can add your widgets here.", "iteducation"),
            "before_widget" => '<div class="widget-wrapper">',
            "after_widget" => "</div>",
            "before_title" => '<h4 class="widget-title" >',
            "after_title" => "</h4>",
        )
    );
    register_sidebar(
        array(
            "name" => __("Page Sidebar", "iteducation"),
            "id" => "sidebar-page",
            "description" => __("This is the page widget. You can add your widgets here.", "iteducation"),
            "before_widget" => '<div class="widget-wrapper">',
            "after_widget" => "</div>",
            "before_title" => '<h4 class="widget-title" >',
            "after_title" => "</h4>",
        )
    );
    register_sidebar(
        array(
            "name" => __("Service One", "iteducation"),
            "id" => "service-1",
            "description" => __("This is the service 1 widget. You can add your widgets here.", "iteducation"),
            "before_widget" => '<div class="widget-wrapper">',
            "after_widget" => "</div>",
            "before_title" => '<h4 class="widget-title" >',
            "after_title" => "</h4>",
        )
    );
    register_sidebar(
        array(
            "name" => __("Service Two", "iteducation"),
            "id" => "service-2",
            "description" => __("This is the service 2 widget. You can add your widgets here.", "iteducation"),
            "before_widget" => '<div class="widget-wrapper">',
            "after_widget" => "</div>",
            "before_title" => '<h4 class="widget-title" >',
            "after_title" => "</h4>",
        )
    );
    register_sidebar(
        array(
            "name" => __("Service Three", "iteducation"),
            "id" => "service-3",
            "description" => __("This is the service 3 widget. You can add your widgets here.", "iteducation"),
            "before_widget" => '<div class="widget-wrapper">',
            "after_widget" => "</div>",
            "before_title" => '<h4 class="widget-title" >',
            "after_title" => "</h4>",
        )
    );
}

// add compatibility for before 5.2 version of wordpress
if (!function_exists('wp_body_open')) {
    function wp_body_open()
    {
        do_action("wp_body_open");
    }
}

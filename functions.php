<?php

function iteducation_load_scripts()
{
    wp_enqueue_style("iteducation-style", get_stylesheet_uri(), array(), filemtime(get_template_directory() . "/style.css"), "all");
    wp_enqueue_style("google-font", "https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap", array(), null);
    wp_enqueue_script("dropdown", get_template_directory_uri() . "/js/dropdown.js", array(), "1.0", true);

}

add_action("wp_enqueue_scripts", "iteducation_load_scripts");

function iteducation_config()
{
    register_nav_menus(array(
        "iteducation_main_menu" => "Main Menu",
        "iteducation_footer_menu" => "Footer Menu",
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
    add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script' ) ); //enable to write semantic tag in comment-list etc
    add_theme_support('title-tag');
}

add_action("after_setup_theme", "iteducation_config", 0);

add_action("widgets_init", "iteducation_sidebars");

function iteducation_sidebars()
{
    register_sidebar(
        array(
            "name" => "Blog Sidebar",
            "id" => "sidebar-blog",
            "description" => "This is the blog widget. You can add your widgets here.",
            "before_widget" => '<div class="widget-wrapper">',
            "after_widget" => "</div>",
            "before_title" => '<h4 class="widget-title" >',
            "after_title" => "</h4>",
        )
    );
    register_sidebar(
        array(
            "name" => "Page Sidebar",
            "id" => "sidebar-page",
            "description" => "This is the page widget. You can add your widgets here.",
            "before_widget" => '<div class="widget-wrapper">',
            "after_widget" => "</div>",
            "before_title" => '<h4 class="widget-title" >',
            "after_title" => "</h4>",
        )
    );
    register_sidebar(
        array(
            "name" => "Service One",
            "id" => "service-1",
            "description" => "This is the service 1 widget. You can add your widgets here.",
            "before_widget" => '<div class="widget-wrapper">',
            "after_widget" => "</div>",
            "before_title" => '<h4 class="widget-title" >',
            "after_title" => "</h4>",
        )
    );
    register_sidebar(
        array(
            "name" => "Service Two",
            "id" => "service-2",
            "description" => "This is the service 2 widget. You can add your widgets here.",
            "before_widget" => '<div class="widget-wrapper">',
            "after_widget" => "</div>",
            "before_title" => '<h4 class="widget-title" >',
            "after_title" => "</h4>",
        )
    );
    register_sidebar(
        array(
            "name" => "Service Three",
            "id" => "service-3",
            "description" => "This is the service 3 widget. You can add your widgets here.",
            "before_widget" => '<div class="widget-wrapper">',
            "after_widget" => "</div>",
            "before_title" => '<h4 class="widget-title" >',
            "after_title" => "</h4>",
        )
    );
}

// add compatibility for before 5.2 version of wordpress
if (! function_exists('wp_body_open')) {
    function wp_body_open()
    {
        do_action("wp_body_open");
    }
}

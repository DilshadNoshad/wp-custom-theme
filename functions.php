<?php

function iteducation_load_scripts()
{
    wp_enqueue_style("iteducation-style", get_stylesheet_uri(), array(), filemtime(get_template_directory() . "/style.css"), "all");
    wp_enqueue_style("google-font", "https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap", array(), null);
    wp_enqueue_script("dropdown", get_template_directory_uri() . "/js/dropdown.js", array(), "1.0", true);

}

add_action("wp_enqueue_scripts", "iteducation_load_scripts");

register_nav_menus(array(
    "iteducation_main_menu" => "Main Menu",
    "iteducation_footer_menu" => "Footer Menu",
));

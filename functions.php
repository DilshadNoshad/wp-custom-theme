<?php

function wp_iteducation_child_scripts()
{

    wp_enqueue_style("iteducation-style", get_template_directory_uri() . "/style.css");
    wp_enqueue_style("iteducation-child-style", get_stylesheet_uri(), array(), wp_get_theme()->get("Version"));

}

add_action("wp_enqueue_scripts", "wp_iteducation_child_scripts");

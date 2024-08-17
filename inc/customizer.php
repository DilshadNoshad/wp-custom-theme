<?php

function iteducation_customizer($wp_customize)
{ // parameter varible is a object come from WP_Customize_Manager

    // for copyright
    $wp_customize->add_section( // in section if u do not add controls then u can not see the section at least one control found inside it
        "sec-copyright", //between the section add the controls we have settings they are responsible for save data in database when data enter in fields means persists it for curiosity check database having table wp_options and inside it a field that starts with the name theme_mods
        array(
            "title" => "Copyright Settings",
            "description" => "Copyright Settings",
        )
    );

    //setting is also same like section
    $wp_customize->add_setting( //inside it two params one is name and second is array of items
        "set_copyright",
        array(
            "type" => "theme_mod", //type of field that will be stored into the database. we have tw types of fields, option (option) and theme modification (theme_mod)
            // option is rarely use regardless of the active theme and theme_mode is for particular theme
            "default" => "Copyright &copy; - All Rights Reserved", // default value that appears in the customizer form more case is empty or other more intresting methods
            "sanitize_callback" => "sanitize_text_field",
        )

    );

    // now control
    $wp_customize->add_control( //inside it two params one is name and second is array of items
        "set_copyright", //link to setting related to this control
        array(
            "label" => "Copyright Information",
            "description" => "Please, type your copyright here",
            "section" => "sec-copyright",
            "type" => "text",
        )

    );

}

add_action("customize_register", "iteducation_customizer");

<?php

function iteducation_customizer($wp_customize)
{ // parameter varible is a object come from WP_Customize_Manager

    // for copyright
    $wp_customize->add_section( // in section if u do not add controls then u can not see the section at least one control found inside it
        "sec-copyright", //between the section add the controls we have settings they are responsible for save data in database when data enter in fields means persists it for curiosity check database having table wp_options and inside it a field that starts with the name theme_mods
        array(
            "title" => __("Copyright Settings", "iteducation"),
            "description" => __("Copyright Settings", "iteducation"),
        )
    );

    //setting is also same like section
    $wp_customize->add_setting( //inside it two params one is name and second is array of items
        "set_copyright",
        array(
            "type" => "theme_mod", //type of field that will be stored into the database. we have tw types of fields, option (option) and theme modification (theme_mod)
            // option is rarely use regardless of the active theme and theme_mode is for particular theme
            "default" => __("Copyright &copy; - All Rights Reserved", "iteducation"), // default value that appears in the customizer form more case is empty or other more intresting methods
            "sanitize_callback" => "sanitize_text_field",
        )

    );

    // now control
    $wp_customize->add_control( //inside it two params one is name and second is array of items
        "set_copyright", //link to setting related to this control
        array(
            "label" => __("Copyright Information", "iteducation"),
            "description" => __("Please, type your copyright here", "iteducation"),
            "section" => "sec-copyright",
            "type" => "text",
        )

    );

    //for hero section

    $wp_customize->add_section("sec-hero", array(
        "title" => __("Hero Section", "iteducation"),
    )
    );

    // hero title setting
    $wp_customize->add_setting(
        "set_hero_title",
        array(
            "type" => "theme_mod",
            "default" => __("please add some title ", "iteducation"),
            "sanitize_callback" => "sanitize_text_field",
        )

    );

    // hero title control
    $wp_customize->add_control(
        "set_hero_title",
        array(
            "label" => __("Hero Title", "iteducation"),
            "description" => __("Please, type your title here", "iteducation"),
            "section" => "sec-hero",
            "type" => "text",
        )

    );

    // hero title setting
    $wp_customize->add_setting(
        "set_hero_subtitle",
        array(
            "type" => "theme_mod",
            "default" => __("please add some subtitle ", "iteducation"),
            "sanitize_callback" => "sanitize_textarea_field",
        )

    );

    // hero title control
    $wp_customize->add_control(
        "set_hero_subtitle",
        array(
            "label" => __("Hero Subtitle", "iteducation"),
            "description" => __("Please, type your subtitle here", "iteducation"),
            "section" => "sec-hero",
            "type" => "textarea",
        )

    );

    // button text setting
    $wp_customize->add_setting(
        "set_hero_button_text",
        array(
            "type" => "theme_mod",
            "default" => __("Learn More", "iteducation"),
            "sanitize_callback" => "sanitize_text_field",
        )

    );

    // button text control
    $wp_customize->add_control(
        "set_hero_button_text",
        array(
            "label" => __("Hero Button Text", "iteducation"),
            "description" => __("Please, type your hero button text here", "iteducation"),
            "section" => "sec-hero",
            "type" => "text",
        )

    );

    // button text link
    $wp_customize->add_setting(
        "set_hero_button_text_link",
        array(
            "type" => "theme_mod",
            "default" => "#",
            "sanitize_callback" => "esc_url_raw",
        )

    );

    // button text link
    $wp_customize->add_control(
        "set_hero_button_text_link",
        array(
            "label" => __("Hero Button Link", "iteducation"),
            "description" => __("Please, type your hero button link here", "iteducation"),
            "section" => "sec-hero",
            "type" => "url",
        )

    );

    // hero height
    $wp_customize->add_setting(
        "set_hero_height",
        array(
            "type" => "theme_mod",
            "default" => 800,
            "sanitize_callback" => "absint",
        )

    );

    // button text link
    $wp_customize->add_control(
        "set_hero_height",
        array(
            "label" => __("Hero Height", "iteducation"),
            "description" => __("Please, type your hero height here", "iteducation"),
            "section" => "sec-hero",
            "type" => "number",
        )

    );

    // hero background
    $wp_customize->add_setting(
        "set_hero_background",
        array(
            "type" => "theme_mod",
            "sanitize_callback" => "absint", // bcz media control return media id not url
        )

    );

    // button text link
    $wp_customize->add_control(new Wp_Customize_Media_Control(
        $wp_customize, //manager
        "set_hero_background",
        array(
            "label" => __("Hero Image", "iteducation"),
            "section" => "sec-hero",
            "mime_type" => "image", //allow only image etc audio
        )
    )
    );

    // 3. Blog
    $wp_customize->add_section(
        'sec_blog',
        array(
            'title' => __('Blog Section', "iteducation"),
        ));

    // Posts per page
    $wp_customize->add_setting(
        'set_per_page',
        array(
            'type' => 'theme_mod',
            'sanitize_callback' => 'absint',
        ));

    $wp_customize->add_control(
        'set_per_page',
        array(
            'label' => __('Posts per page', "iteducation"),
            'description' => __('How many items to display in the post list?', "iteducation"),
            'section' => 'sec_blog',
            'type' => 'number',
        ));

    // Post categories to include
    $wp_customize->add_setting(
        'set_category_include',
        array(
            'type' => 'theme_mod',
            'sanitize_callback' => 'sanitize_text_field',
        ));

    $wp_customize->add_control(
        'set_category_include',
        array(
            'label' => __('Post categories to include', "iteducation"),
            'description' => __('Comma separated values or single category ID', "iteducation"),
            'section' => 'sec_blog',
            'type' => 'text',
        ));

    // Post categories to exclude
    $wp_customize->add_setting(
        'set_category_exclude',
        array(
            'type' => 'theme_mod',
            'sanitize_callback' => 'sanitize_text_field',
        ));

    $wp_customize->add_control(
        'set_category_exclude',
        array(
            'label' => __('Post categories to exclude', "iteducation"),
            'description' => __('Comma separated values or single category ID', "iteducation"),
            'section' => 'sec_blog',
            'type' => 'text',
        ));

}

add_action("customize_register", "iteducation_customizer");

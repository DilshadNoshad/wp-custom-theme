<?php get_header()?>
        <!-- content -->
        <div id="content" class="site_content">
        <div id="primary" class="content-area">
            <main id="main" class="site-main">
                <?php
$hero_title = get_theme_mod("set_hero_title", __("please set some title", "iteducation"));
$hero_subtitle = get_theme_mod("set_hero_subtitle", __("please set some subtitle", "iteducation"));
$hero_button_text = get_theme_mod("set_hero_button_text", __("Learn More", "iteducation"));
$hero_button_link = get_theme_mod("set_hero_button_text_link", "#");
$hero_height = get_theme_mod("set_hero_height", 800);
$hero_background = wp_get_attachment_url(get_theme_mod("set_hero_background"));
?>
                <section class="hero" style="background-image:url('<?php echo esc_url($hero_background); ?>');">
<div class="overlay" style="min-height: <?php echo esc_attr($hero_height); ?>px;" >
    <div class="container">
        <div class="hero-items">
            <h1><?php echo esc_html($hero_title); ?></h1>

            <p><?php echo nl2br(esc_html($hero_subtitle)); ?></p>

            <!-- it is text area new line problem solve nt nl2br() method -->
            <a href="<?php echo esc_url($hero_button_link); ?>"><?php echo esc_html($hero_button_text) ?></a>
        </div>
    </div>
</div>
                </section>
                <section class="services">
                    <h2><?php esc_html_e("Services", "iteducation")?></h2>
                    <div class="container">
                        <div class="services-item"><?php
if (is_active_sidebar("service-1")) {
    dynamic_sidebar("service-1");
}?></div>
                        <div class="services-item"><?php if (is_active_sidebar("service-2")) {
    dynamic_sidebar("service-2");
}?></div>
                        <div class="services-item"><?php if (is_active_sidebar("service-3")) {
    dynamic_sidebar("service-3");
}?></div>
                    </div>
                </section>
                <section class="home-blog">
                    <h2><?php esc_html_e("Latest News", "iteducation")?></h2>
                    <div class="container">

                            <?php

$per_page = get_theme_mod("set_per_page", 3);
$category_include = get_theme_mod("set_category_include");
$category_exclude = get_theme_mod("set_category_exclude");

$args = array(
    "post_type" => "post", //bydefault it is post we do only learning
    "post_per_page" => esc_html($per_page),
    "category__in" => explode(",", esc_html($category_include)),
    "category__not_in" => explode(",", esc_html($category_exclude)),
);

$postList = new Wp_Query($args);

if ($postList->have_posts()):
    while ($postList->have_posts()): $postList->the_post();

        get_template_part("parts/content", "latest-news");
    endwhile;
    wp_reset_postdata();
else: ?>
                            <p><?php esc_html_e("Snap! Nothing to show here!", "iteducation")?></p>
                            <?php
endif;
?>

                    </div>
                </section>
            </main>
        </div>
        </div>
        <!-- content -->
<?php get_footer()?>
<?php get_header()?>
        <!-- content -->
        <div id="content" class="site_content">
        <div id="primary" class="content-area">
            <main id="main" class="site-main">
                <?php
$hero_title = get_theme_mod("set_hero_title", "please set some title");
$hero_subtitle = get_theme_mod("set_hero_subtitle", "please set some subtitle");
$hero_button_text = get_theme_mod("set_hero_button_text", "Learn More");
$hero_button_link = get_theme_mod("set_hero_button_text_link", "#");
$hero_height = get_theme_mod("set_hero_height", 800);
$hero_background = wp_get_attachment_url(get_theme_mod("set_hero_background"));
?>
                <section class="hero" style="background-image:url('<?php echo $hero_background; ?>');">
<div class="overlay" style="min-height: <?php echo $hero_height; ?>px;" >
    <div class="container">
        <div class="hero-items">
            <h1><?php echo $hero_title; ?></h1>

            <p><?php echo nl2br($hero_subtitle); ?></p>

            <!-- it is text area new line problem solve nt nl2br() method -->
            <a href="<?php echo $hero_button_link; ?>"><?php echo $hero_button_text ?></a>
        </div>
    </div>
</div>
                </section>
                <section class="services">
                    <h2>Services</h2>
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
                    <h2>Latest News</h2>
                    <div class="container">

                            <?php

$per_page = get_theme_mod("set_per_page", 3);
$category_include = get_theme_mod("set_category_include");
$category_exclude = get_theme_mod("set_category_exclude");

$args = array(
    "post_type" => "post", //bydefault it is post we do only learning
    "post_per_page" => $per_page,
    "category__in" => explode(",", $category_include),
    "category__not_in" => explode(",", $category_exclude),
);

$postList = new Wp_Query($args);

if ($postList->have_posts()):
    while ($postList->have_posts()): $postList->the_post();

        get_template_part("parts/content", "latest-news");
    endwhile;
    wp_reset_postdata();
else: ?>
                            <p>Snap! Nothing to show here!</p>
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
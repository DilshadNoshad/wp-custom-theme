<?php get_header()?>
        <!-- content -->
        <div id="content" class="site_content">
        <div id="primary" class="content-area">
            <main id="main" class="site-main">
                <section class="hero">Hero</section>
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
$args = array(
    "post_type" => "post", //bydefault it is post we do only learning
    "post_per_page" => 3,
    "category__in" => array(11, 7, 19, 15),
    "category__not_in" => array(1),
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
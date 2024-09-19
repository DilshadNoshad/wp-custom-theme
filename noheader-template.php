<?php
/*
Template Name: No Header Template
 */
?>

<?php get_header()?>
<img src="<?php header_image();?>" height="<?php echo esc_attr(get_custom_header()->height); ?>" width="<?php echo esc_attr(get_custom_header()->width); ?>" alt="" />
<!-- content -->
<div id="content" class="site_content">
<div id="primary" class="content-area">
<main id="main" class="site-main">

<div class="container">


<div class="page-item">
<?php

while (have_posts()): the_post();

    get_template_part("parts/content", "page");

    if (comments_open() || get_comments_number()) {
        comments_template();
    }
endwhile;

?>
</div>
<!-- <?php get_sidebar("page");?> -->
</div>
</main>
</div>
</div>
<!-- content -->
<?php get_footer()?>
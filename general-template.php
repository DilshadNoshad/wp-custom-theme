<?php
/*
Template Name: General Template
 */
?>

<?php get_header()?>
<img src="<?php header_image();?>" height="<?php echo esc_attr(get_custom_header()->height); ?>" width="<?php echo esc_attr(get_custom_header()->width); ?>" alt="" />
<!-- content -->
<div id="content" class="site_content">
<div id="primary" class="content-area">
<main id="main" class="site-main">

<div class="container">
<div class="general-template">
<?php
if (have_posts()):
    while (have_posts()): the_post();

        ?>
								<article>
								<h1><?php the_title()?></h1>

								<?php the_content();?>
								</article>
								<?php endwhile;
else: ?>
<p><?php esc_html_e("Snap! Nothing to show here!", "iteducation")?></p>
<?php
endif;
?>
</div>
</div>
</main>
</div>
</div>
<!-- content -->
<?php get_footer()?>
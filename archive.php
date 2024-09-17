        <?php get_header()?>
        <img src="<?php header_image();?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />
        <!-- content -->
        <div id="content" class="site_content">
        <div id="primary" class="content-area">
        <main id="main" class="site-main">
        <?php the_archive_title("<h1 class='archive-title'>", "</h1>")?>
        <?php the_archive_description("<div class='archive-description'>", "</div>")?>
        <div class="container">
        <div class="archive-items">
        <?php
if (have_posts()):
    while (have_posts()): the_post();

        get_template_part("parts/content", "archive"); // i deleted the archive file i will use the content
        // i helps u it some cases of dynamic things  if u call like this must be written file name with the "-"

    endwhile;?>

	        <!-- after loop end for limited number of post  -->
	        <div class="wpdevs-pagination">
	        <div class="pages new"><?php previous_posts_link(__("<< Newer Posts", "iteducation"))?></div>
	        <div class="pages old"><?php next_posts_link(__("Older Posts >>", "iteducation"))?></div>
	        </div>
	        <?php
else: ?>
        <p><?php _e("Snap! Nothing to show here!", "iteducation")?></p>
        <?php
endif;
?>
        </div>
        <?php get_sidebar()?>
        </div>
        </main>
        </div>
        </div>
        <!-- content -->
        <?php get_footer()?>
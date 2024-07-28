<?php get_header()?>
<img src="<?php header_image();?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />
        <!-- content -->
        <div id="content" class="site_content">
        <div id="primary" class="content-area">
            <main id="main" class="site-main">
                <h1>Blog</h1>
                    <div class="container">
                        <div class="blog-items">
                            <?php
if (have_posts()):
    while (have_posts()): the_post();

    get_template_part("parts/content"); 
    // without file extension it is requires parameter
    // get_template_partit takes 2 params

        endwhile;?>

			                                                                                                            <!-- after loop end for limited number of post  -->
			                                                                                                        <div class="wpdevs-pagination">
			                                                                                                            <div class="pages new"><?php previous_posts_link("<< Newer Posts")?></div>
			                                                                                                            <div class="pages old"><?php next_posts_link("Older Posts >>")?></div>
			                                                                                                        </div>
					                                                                                            <?php
else: ?>
                            <p>Snap! Nothing to show here!</p>
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
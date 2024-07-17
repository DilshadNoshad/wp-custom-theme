<?php get_header()?>
<img src="<?php header_image();?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />
        <!-- content -->
        <div id="content" class="site_content">
        <div id="primary" class="content-area">
            <main id="main" class="site-main">

                    <div class="container">
                    <?php get_sidebar("page");?>
                        <div class="page-item">
                            <?php

while (have_posts()): the_post();

    ?>
																<article>
																<header><h1><?php the_title()?></h1></header>

										            <?php the_content();?>
																</article>
																		                            <?php
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
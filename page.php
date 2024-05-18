<?php get_header()?>
        <!-- content -->
        <div id="content" class="site_content">
        <div id="primary" class="content-area">
            <main id="main" class="site-main">

                    <div class="container">
                        <div class="page-item">
                            <?php

while (have_posts()): the_post();

    ?>
												<article>
												<header><h1><?php the_title()?></h1></header>

						            <?php the_content();?>
												</article>
														                            <?php endwhile;

?>
                        </div>
                    </div>
            </main>
        </div>
        </div>
        <!-- content -->
<?php get_footer()?>
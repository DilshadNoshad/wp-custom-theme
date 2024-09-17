<?php get_header()?>
<div id="primary">
    <div id="main">
        <div class="container">

		<h1><?php _e("Search Results for", "iteducation") ?>: <?php echo get_search_query() ?> </h1>
            <?php

get_search_form();
// already in the post no need to write if have post
while (have_posts()):
    the_post();
    
	get_template_part("parts/content", "search");

endwhile;
the_posts_pagination();
?>
        </div>
    </div>
</div>
<?php get_footer()?>

<?php get_header()?>
<div id="primary">
    <div id="main">
        <div class="container">

		<h1>Search Results for: <?php echo get_search_query() ?> </h1>
            <?php

get_search_form();
// already in the post no need to write if have post
while (have_posts()):
    the_post();
    ?>
							<article id="post-<?php the_ID();?>" <?php post_class();?> >
						    <header>
						        <h2><a href="<?php the_permalink()?>"><?php the_title()?></a></h2>
						       <?php if ("post" == get_post_type()): ?>
							   <div class="meta-info">
						            <p>Posted in <?php echo get_the_date() ?> by <?php the_author_posts_link();?></p>
					                <p>Categories: <?php the_category(" ")?></p>
					                <p>Tags <?php the_tags("", ", ")?></p>
						        </div>
								<?php endif;?>
			    </header>
			    <div class="content">
			        <?php the_excerpt()?>
			    </div>
			    </article>
				            <?php

endwhile;
the_posts_pagination();
?>
        </div>
    </div>
</div>
<?php get_footer()?>

<article>
<h2><a href="<?php the_permalink();?>"><?php the_title()?></a></h2>
<?php
if (has_post_thumbnail()): ?>

<a href="<?php the_permalink();?>"><?php the_post_thumbnail(array(275, 275))?></a>
<?php else: ?>
    <a href="<?php the_permalink();?>"><img width="275" height="275" src="<?php echo get_template_directory_uri() . "/images/default.jpg" ?>" alt="no featured image found"></a>
<?php endif;?>
<div class="meta-info">
<p>Posted in <?php echo get_the_date(); ?> by <?php the_author_posts_link();?></p>
<?php if (has_category()): ?>
<p>Category: <?php the_category(" ");?></p>
<?php endif;?>
<?php if (has_tag()): ?>
<p>Tags: <?php the_tags(" ", ", ");?></p>
<?php endif;?>

</div>
<?php the_excerpt();?>
</article>
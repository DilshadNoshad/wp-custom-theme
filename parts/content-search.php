<article id="post-<?php the_ID();?>" <?php post_class();?> >
<header>
<h2><a href="<?php the_permalink()?>"><?php the_title()?></a></h2>
<?php if ("post" == get_post_type()): ?>
<div class="meta-info">
<p><?php esc_html_e("Posted in", "iteducation")?> <?php echo esc_html(get_the_date()) ?> <?php esc_html_e("by", "iteducation")?> <?php the_author_posts_link();?></p>
<?php if (has_category()): ?>
<p><?php esc_html_e("Categories", "iteducation")?>: <?php the_category(" ");?></p>
<?php endif;?>
<?php if (has_tag()): ?>
<p><?php esc_html_e("Tags", "iteducation")?>: <?php the_tags("", ", ");?></p>
<?php endif;?>
</div>
<?php endif;?>
</header>
<div class="content">
<?php the_excerpt()?>
</div>
</article>
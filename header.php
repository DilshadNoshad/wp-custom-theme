<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
    <meta charset="<?php bloginfo("charset")?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <title>iteducation</title> -->
    <?php wp_head();?>
</head>
<body <?php body_class()?> >
    <?php wp_body_open()?>
   <div id="page" class="site">
        <header>
            <section class="top-bar">
                <div class="container">
                <div class="logo">
<?php
if (has_custom_logo()) {
    the_custom_logo();
} else {
    ?>
    <a href="<?php echo esc_url(home_url("/")) ?>"><span><?php bloginfo("name")?></span></a>
     <?php
}?>
                </div>
                <div class="searchbox">
<?php get_search_form()?>
                </div>
                </div>
            </section>
            <?php
if (!is_page_template("noheader-template.php")): //here u can also write page name ,id, slug or all
    ?>
	            <section class="menu-area">
	                <div class="container">
	                <nav class="main-menu">
	                    <button class="check-button">
	                        <div class="menu-icon">
	                            <div class="bar1"></div>
	                            <div class="bar2"></div>
	                            <div class="bar3"></div>
	                        </div>
	                    </button>
	<?php
    wp_nav_menu(array("theme_location" => "iteducation_main_menu", "depth" => 3))
    ?>
	                </nav>
	                </div>
	            </section>
	            <?php endif;?>
        </header>
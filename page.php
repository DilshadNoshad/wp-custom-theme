<?php get_header()?>

<!-- content -->
<div id="content" class="site_content">
<div id="primary" class="content-area">
<main id="main" class="site-main">
<div class="page-item">
<?php

while (have_posts()): the_post();

//  it is responsible for bringing all the content we have within the page builder's editor

    the_content();
endwhile;

?>
</div>
</main>
</div>
</div>
<!-- content -->
<?php get_footer()?>
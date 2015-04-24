<?php get_header(); ?>
<div id="main_container">
    <h1><?php _e('Page Not Found (404 Error)'); ?></h1>
    <div class="post-content">
        <p><?php _e('Oops. Fail. The page cannot be found.'); ?></p>
        <p><?php _e('Please check your URL or use the search form below.'); ?></p>
        <?php get_search_form(); /* outputs the default Wordpress search form */ ?>
    </div><!--.post-content-->
</div><!--#main_container-->
<?php get_footer(); ?>
<?php
/*
Template Name: Archives
*/
get_header();
?>
<div class="row">
    <div class="large-9 columns" role="content">
        <h2>Archives</h2>
        <ul>
            <?php wp_get_archives( 'type=monthly' ); ?>
        </ul>
    </div>
    <?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
<?php get_header(); ?>
<div id="main_container">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <article>
        <header>
            <h1><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
            <span class="date"><?php the_weekday()?>, <?php the_time('F j, Y'); ?></span>
        </header>
        <p><?php the_content(__('Read more'));?></p>
        <p><em>By <?php the_author_posts_link(); ?></em></p>
        <p><?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?>
        <p class="post_bottom"><?php if (the_tags('Tags: ', ', ', ' ')); ?></p>
    </article>
        <?php endwhile; else: ?>
            <div class="no-results">
                <p><strong><?php _e('There has been an error.'); ?></strong></p>
                <p><?php _e('We apologize for any inconvenience, please hit back on your browser or use the search form below.'); ?></p>
                <?php get_search_form(); /* outputs the default Wordpress search form */ ?>
            </div><!--noResults-->
        <?php endif; ?>

    <div class="oldernewer">
        <p class="older"><?php next_posts_link('&laquo; Older Entries') ?></p>
        <p class="newer"><?php previous_posts_link('Newer Entries &raquo;') ?></p>
    </div><!--.oldernewer-->

</div> <!-- #main_container -->
<?php get_footer(); ?>

<?php get_header(); ?>
<div class="row">
    <div class="large-9 columns" role="content">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <article>
            <h2><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
            <h6><?php the_weekday()?>, <?php the_time('F j, Y'); ?></h6>
            <p><?php the_content(__('Read more'));?></p>
            <p><em>By <?php the_author_posts_link(); ?></em></p>
            <p><?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?>
            <p class="post_bottom"><?php if (the_tags('Tags: ', ', ', ' ')); ?></p>
        </article>
        <hr />
        <?php endwhile; else: ?>
        <div>
            <p><strong><?php _e('There has been an error.'); ?></strong></p>
            <p><?php _e('We apologize for any inconvenience, please hit back on your browser or use the search form below.'); ?></p>
            <?php get_search_form(); /* outputs the default Wordpress search form */ ?>
        </div>
        <?php endif; ?>
    </div>
    <?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
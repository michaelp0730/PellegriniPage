<?php get_header(); ?>
<div class="row">
    <div class="large-9 columns" role="content">
        <h6>You searched for: '<?php the_search_query(); ?>'</h6>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <article>
            <h2><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
            <h6><?php the_weekday()?>, <?php the_time('F j, Y'); ?></h6>
            <p><?php the_excerpt(); /* the excerpt is loaded to help avoid duplicate content issues */ ?></p>
        </article>
        <?php endwhile; else: ?>
        <div class="no-results">
            <h2><?php _e('No Results'); ?></h2>
            <p><?php _e('Please feel free to try again!'); ?></p>
            <?php get_search_form(); /* outputs the default Wordpress search form */ ?>
        </div>
        <?php endif; ?>

        <div class="oldernewer">
            <p class="older"><?php next_posts_link('&laquo; Older Entries') ?></p>
            <p class="newer"><?php previous_posts_link('Newer Entries &raquo;') ?></p>
        </div>
    </div>
    <?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
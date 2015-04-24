<?php get_header(); ?>
<div class="row">
    <div class="large-9 columns" role="content">
        <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
        <article>
            <h2><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
            <h6><?php the_weekday()?>, <?php the_time('F j, Y'); ?></h6>
            <p><?php the_content(__('Read more'));?></p>
            <p><em>By <?php the_author_posts_link(); ?></em></p>
            <p><?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?>
            <p class="post_bottom"><?php if (the_tags('Tags: ', ', ', ' ')); ?></p>
        </article>
        <?php endwhile; ?>
        <?php comments_template( '', true ); ?>
    </div>
    <?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>
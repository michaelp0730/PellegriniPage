<?php get_header(); ?>

<div id="main_container">
	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
    <article>
        <header>
            <h1><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
            <span><?php the_weekday()?>, <?php the_time('F j, Y'); ?></span>
        </header>
        <p><?php the_content(__('Read more'));?></p>
        <p><em>By <?php the_author_posts_link(); ?></em></p>
        <p><?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?>
        <p class="post_bottom"><?php if (the_tags('Tags: ', ', ', ' ')); ?></p>
    </article>

		<?php comments_template( '', true ); ?>

	<?php endwhile; ?>
</div><!--#main_container-->
<?php get_footer(); ?>

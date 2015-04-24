<?php get_header(); ?>
<div id="main_container">
	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
		<div id="post-<?php the_ID(); ?>" <?php post_class('post'); ?>>

            <article>
                <header>
                    <h1><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></h1>
                    <span class="date"><?php the_weekday()?>, <?php the_time('F j, Y'); ?></span>
                </header>
                <p><?php the_content(__('Read more'));?></p>
                <p><em>By <?php the_author_posts_link(); ?></em></p>
                <p><?php if (the_tags('Tags: ', ', ', ' ')); ?></p>
            </article>

			<?php /* If a user fills out their bio info, it's included here */ ?>


		</div><!-- #post-## -->

		<div class="newer-older">
			<p class="older"><?php previous_post_link('%link', '&laquo; Previous post') ?>
			<p class="newer"><?php next_post_link('%link', 'Next Post &raquo;') ?></p>
		</div><!--.newer-older-->

		<?php comments_template( '', true ); ?>

	<?php endwhile; /* end loop */ ?>
</div><!--#main_container-->
<?php get_footer(); ?>
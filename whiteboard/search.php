<?php get_header(); ?>
<div id="main_container">

	<h1 id="search_header"><?php the_search_query(); ?></h1>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<article>
			<h1><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
			<span><?php the_weekday()?>, <?php the_time('F j, Y'); ?></span>
	
			<div>
				<?php the_excerpt(); /* the excerpt is loaded to help avoid duplicate content issues */ ?>
			</div><!--.post-excerpt-->
		</article>
	<?php endwhile; else: ?>
		<div class="no-results">
			<h2><?php _e('No Results'); ?></h2>
			<p><?php _e('Please feel free try again!'); ?></p>
			<?php get_search_form(); /* outputs the default Wordpress search form */ ?>
		</div><!--no-results-->
	<?php endif; ?>

	<div class="oldernewer">
		<p class="older"><?php next_posts_link('&laquo; Older Entries') ?></p>
		<p class="newer"><?php previous_posts_link('Newer Entries &raquo;') ?></p>
	</div><!--.oldernewer-->
	
</div><!-- #main_container -->
<?php get_footer(); ?>

<?php get_header(); ?>
<div id="main_container">
	<?php
		if(isset($_GET['author_name'])) :
			$curauth = get_userdatabylogin($author_name);
	    else :
			$curauth = get_userdata(intval($author));
		endif;
	?>
	
	<div id="recent-author-posts">
		<h1 id="author_header"><?php _e('Recent Posts by '); echo $curauth->display_name; ?></h1>
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<?php static $count = 0;
			if ($count == "10") // Number of posts to display
            	{ break; }
			else { ?>
				<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>

				<p class="post-excerpt">
					<?php the_excerpt(); /* the excerpt is loaded to avoid duplicate content */ ?>
				</p>
				<p><?php _e('Written on '); the_time('F j, Y'); ?></p>
				<p><?php the_tags('<br />Tags: ', ', ', ' '); ?></p>

			<?php $count++; } ?>
		<?php endwhile; else: ?>
			<p><?php _e('No posts by '); echo $curauth->display_name; ?> yet.</p>
		<?php endif; ?>
	</div>

	<div id="recent-author-comments">
		<h3><?php _e('Recent Comments by '); echo $curauth->display_name; ?></h3>
		<?php
			$number=5; // number of recent comments to display
			$comments = $wpdb->get_results("SELECT * FROM $wpdb->comments WHERE comment_approved = '1' and comment_author_email='$curauth->user_email' ORDER BY comment_date_gmt DESC LIMIT $number");
		?>
		<ul>
			<?php
				if ( $comments ) : foreach ( (array) $comments as $comment) :
				echo  '<li class="recentcomments">' . sprintf(__('%1$s on %2$s'), get_comment_date(), '<a href="'. get_comment_link($comment->comment_ID) . '">' . get_the_title($comment->comment_post_ID) . '</a>') . '</li>';
			endforeach; else: ?>
             	<p><?php _e('No comments by '); echo $curauth->display_name; ?></p>
			<?php endif; ?>
		</ul>
	</div><!--#recentAuthorComments-->

</div><!--#main_container-->
<?php get_footer(); ?>
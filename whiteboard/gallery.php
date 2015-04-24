<?php
/*
 * Template name: Gallery
 */
get_header();
?>
<div id="main_container">
	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
	<div class="template_container">
        <header>
            <h1><?php the_title(); ?></h1>
        </header>
        <?php the_content();?>
        <div><?php if (the_tags('Tags: ', ', ', ' ')); ?></div>
    </div>
	<?php endwhile; ?>
</div> <!-- #main_container -->

<script>
	$(document).ready(function(){
		$(".group1").colorbox({rel:'group1'});
	});
</script>
<?php get_footer(); ?>
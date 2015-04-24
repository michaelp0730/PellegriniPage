<footer>
	Copyright &copy; <span id="copyright_year"></span> PellegriniPage.com &nbsp;|&nbsp; All Rights Reserved | <a href="#">Back to Top</a>
</footer>
<?php wp_footer(); /* this is used by many Wordpress features and plugins to work proporly */ ?>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="/wp-content/uploads/js/vendor/jquery-1.8.2.min.js"><\/script>')</script>
<script src="<?php bloginfo('template_url'); ?>/js/plugins.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/main.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/vendor/tms-0.4.1.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/vendor/jquery.scrollTo.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/vendor/jquery.colorbox-min.js"></script>
<script>
$(document).ready(function(){
	$('.slider')._TMS({
		show:0,
		pauseOnHover:false,
		prevBu:'.prev',
		nextBu:'.next',
		duration:10000,
		preset:'zoomer',
		pagination:false,//'.pagination',true,'<ul></ul>'
		slideshow:7000,
		progressBar:false
	});
	/*
	$('a[href=#]').click(function(){
	    $.scrollTo(0,'slow');
	    return false;
	});
	*/
});
</script>
<script>
	$(document).ready(function(){
		//Examples of how to assign the ColorBox event to elements
		$(".group1").colorbox({rel:'group1'});
	});
</script>
</body>
</html>
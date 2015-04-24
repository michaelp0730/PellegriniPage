<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<title><?php if ( is_category() ) {
		echo 'Category Archive for &quot;'; single_cat_title(); echo '&quot; | '; bloginfo( 'name' );
	} elseif ( is_tag() ) {
		echo 'Tag Archive for &quot;'; single_tag_title(); echo '&quot; | '; bloginfo( 'name' );
	} elseif ( is_archive() ) {
		wp_title(''); echo ' Archive | '; bloginfo( 'name' );
	} elseif ( is_search() ) {
		echo 'Search for &quot;'.wp_specialchars($s).'&quot; | '; bloginfo( 'name' );
	} elseif ( is_home() ) {
		bloginfo( 'name' ); echo ' | '; bloginfo( 'description' );
	}  elseif ( is_404() ) {
		echo 'Error 404 Not Found | '; bloginfo( 'name' );
	} elseif ( is_single() ) {
		wp_title('');
	} else {
		echo wp_title(''); echo ' | '; bloginfo( 'name' );
	} ?></title>
	<meta name="description" content="<?php wp_title(''); echo ' | '; bloginfo( 'description' ); ?>" />
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<meta name="viewport" content="width=device-width; initial-scale=1"/><?php /* Add "maximum-scale=1" to fix the Mobile Safari auto-zoom bug on orientation changes, but keep in mind that it will disable user-zooming completely. Bad for accessibility. */ ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo( 'name' ); ?>" href="<?php bloginfo( 'rss2_url' ); ?>" />
	<link rel="alternate" type="application/atom+xml" title="<?php bloginfo( 'name' ); ?>" href="<?php bloginfo( 'atom_url' ); ?>" />
	<?php wp_enqueue_script("jquery"); /* Loads jQuery if it hasn't been loaded already */ ?>
	<?php /* The HTML5 Shim is required for older browsers, mainly older versions IE */ ?>
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?> 
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'template_url' ); ?>/css/normalize.css">
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'template_url' ); ?>/css/lessframework.css">
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'template_url' ); ?>/css/colorbox.css">
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'template_url' ); ?>/css/fonts.css">
	<script src="js/vendor/modernizr-2.6.2.min.js"></script>
</head>

<body <?php body_class(); ?>>

<!--[if lt IE 7]>
	<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
<![endif]-->

<!-- archives modal content -->
<div id="archives_modal"></div>
<div id="archives_container">
	<span class="float_right"><a href="#" id="close_archives">Close</a></span>
	<h2>Archives</h2>
	<ul>
        <?php wp_get_archives( 'type=monthly' ); ?>
	</ul>
</div>
<!-- end archives modal content -->

<!-- login modal content -->
<div id="login_modal"></div>
<div id="login_container">
    <span class="float_right"><a href="#" id="close_login">Close</a></span>
    <div id="pp_members_login_container">
    	<?php 
    		global $current_user;
    		get_currentuserinfo();

    		if ( !is_user_logged_in() ) { // Display WordPress login form:
    			echo "<h1>Login</h1>";
    			echo "<h4>Existing PellegriniPage.com Members</h4>";
			    wp_login_form();
			    echo "Not a member? | ";
			    wp_register('', ''); // Display "Site Admin" link.
			    echo "<h4>&ndash; &ndash; OR &ndash; &ndash;</h4>";
			    do_action( 'wordpress_social_login' );
			} else {
				echo '<h4>You are already logged in as: ' . $current_user->display_name . '</h4>';
				wp_loginout( home_url() ); // Display "Log Out" link.
			}
    	?>
    	
    	
    </div>
</div>
<!-- end login modal content -->

<header class="main_header">
	<div id="search_register">
		<span id="search"><?php get_search_form(); ?></span>
    </div>
	<div id="header_blue_line"></div>
	<div id="header_img_container">

		<div class="slider">
			<ul class="items">
				<li><img src="<?php bloginfo('stylesheet_directory'); ?>/img/slider/AvaSlider1.jpg" alt=""></li>
				<li><img src="<?php bloginfo('stylesheet_directory'); ?>/img/slider/engagement1.jpg" alt=""></li>
				<li><img src="<?php bloginfo('stylesheet_directory'); ?>/img/slider/AvaSlider2.jpg" alt=""></li>
				<li><img src="<?php bloginfo('stylesheet_directory'); ?>/img/slider/AvaSlider3.jpg" alt=""></li>
				<li><img src="<?php bloginfo('stylesheet_directory'); ?>/img/slider/engagement2.jpg" alt=""></li>
				<li><img src="<?php bloginfo('stylesheet_directory'); ?>/img/slider/AvaSlider4.jpg" alt=""></li>
				<li><img src="<?php bloginfo('stylesheet_directory'); ?>/img/slider/AvaSlider5.jpg" alt=""></li>
				<li><img src="<?php bloginfo('stylesheet_directory'); ?>/img/slider/AvaSlider6.jpg" alt=""></li>
			</ul>
		</div> <!-- end slider -->
	
		<div id="logo">PellegriniPage.com</div>
		<div id="nav_wrapper">
			<nav>
				<a href="<?php echo get_settings('home'); ?>">
					<div id="nav_home">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/img/nav_home.gif" alt="">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/img/flag_blue.png" id="home_flag" alt="">
					</div>
				</a>
				<a href="#">
					<div id="nav_archives">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/img/nav_archives.gif" alt="">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/img/flag_orange.png" id="archives_flag" alt="">
					</div>
				</a>
				<a href="http://pellegrinipage.com/wordpress/gallery">
					<div id="nav_photos">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/img/nav_photos.gif" alt="">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/img/flag_red.png" id="photos_flag" alt="">
					</div>
				</a>
				<a href="http://pellegrinipage.com/wordpress/contact">
					<div id="nav_contact">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/img/nav_contact.gif" alt="">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/img/flag_orange.png" id="contact_flag" alt="">
					</div>
				</a>
				<a href="#">
					<div id="nav_login">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/img/nav_login.gif" alt="">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/img/flag_blue.png" id="login_flag" alt="">
					</div>
				</a>
			</nav>
		</div> <!-- end nav_wrapper -->
	</div> <!-- end header_img_container -->
</header>

<header class="mobile_header">
	<h1 class="mobile_h1">PellegriniPage.com</h1>
	<div class="mobile_search"><?php get_search_form(); ?></div>
	<ul>
		<a href="<?php echo get_settings('home'); ?>"><li class="mobile_home_btn">Home</li></a>
		<a href="#"><li class="mobile_archives_btn">Archives</li></a>
		<a href="http://pellegrinipage.com/wordpress/gallery/"><li class="mobile_photos_btn">Photos</li></a>
		<a href="http://pellegrinipage.com/wordpress/contact/"><li class="mobile_contact_btn">Contact</li></a>
		<a href="#"><li class="mobile_login_btn">Login</li></a>
	</ul>
</header>
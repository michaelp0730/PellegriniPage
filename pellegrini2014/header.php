<!DOCTYPE html>
<!--[if IE 9]><html class="lt-ie10" lang="en" > <![endif]-->
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <link rel="alternate" type="application/rss+xml" title="<?php bloginfo( 'name' ); ?>" href="<?php bloginfo( 'rss2_url' ); ?>" />
    <link rel="alternate" type="application/atom+xml" title="<?php bloginfo( 'name' ); ?>" href="<?php bloginfo( 'atom_url' ); ?>" />
    <?php wp_enqueue_script("jquery"); /* Loads jQuery if it hasn't been loaded already */ ?>
    <?php /* The HTML5 Shim is required for older browsers, mainly older versions IE */ ?>
    <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
    <link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/css/normalize.css" type="text/css" media="all" />
    <link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/css/foundation.min.css" type="text/css" media="all" />
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Cherry+Cream+Soda|Lato:400,700" type="text/css" />
    <link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/css/slick.css" type="text/css" />
    <link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/css/custom.css" type="text/css" />
    <script src="<?php bloginfo( 'template_url' ); ?>/js/vendor/modernizr.js"></script>
</head>
<body <?php body_class(); ?>>
<!--[if lt IE 7]>
    <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
<![endif]-->
<?php add_filter('show_admin_bar', '__return_false'); ?>
<div class="row">
    <div class="large-12 columns">
        <div class="nav-bar right">
            <ul class="button-group">
                <li><a href="http://pellegrinipage.com/" class="button">Home</a></li>
                <li><a href="index.php?p=891" class="button">Archives</a></li>
                <li><a href="#" class="button" data-reveal-id="login-modal">Login</a></li>
            </ul>
        </div>
        <h1>Pellegrini Page</h1>
        <div class="large-4 medium-5 small-6 columns search-form">
            <?php get_search_form(); ?>
        </div>
        <h6>The life &amp; times of Michael, Jessica, Ava, Elise, and Enzo Pellegrini</h6>
        <hr />
        <div class="slick-slider">
            <div><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/slider/EliseBeach.jpg" /></div>
            <div><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/slider/AmazonSummerPicnic2014.jpg" /></div>
            <div><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/slider/AvaPainting.jpg" /></div>
            <div><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/slider/Elise1stBirthdayA.jpg" /></div>
            <div><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/slider/AvaFrontSteps.jpg" /></div>
            <div><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/slider/Elise1stBirthdayB.jpg" /></div>
            <div><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/slider/AvaFrontYardBellevue.jpg" /></div>
            <div><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/slider/Elise1stBirthdayC.jpg" /></div>
            <div><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/slider/PellegriniFamily4thOfJuly2014.jpg" /></div>
            <div><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/slider/Elise1stBirthdayD.jpg" /></div>
            <div><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/slider/Elise1stBirthdayF.jpg" /></div>
            <div><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/slider/Elise1stBirthdayE.jpg" /></div>
            <div><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/slider/Ava2ndBirthdayB.jpg" /></div>
            <div><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/slider/Ava2ndBirthdayA.jpg" /></div>
            <div><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/slider/Ava2ndBirthdayC.jpg" /></div>
            <div><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/slider/Elise8Months.jpg" /></div>
            <div><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/slider/Elise10MonthsA.jpg" /></div>
            <div><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/slider/Elise12MonthsA.jpg" /></div>
            <div><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/slider/family1.jpg" /></div>
            <div><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/slider/AvaTutu.jpg" /></div>
            <div><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/slider/mariners2014.jpg" /></div>
        <hr />
        </div>
    </div>
</div>

<div id="login-modal" class="reveal-modal" data-reveal>
<?php
    global $current_user;
    get_currentuserinfo();

    if ( !is_user_logged_in() ) { // Display WordPress login form:
        echo "<h2>Login to Pellegrini Page</h2>";
        echo "<p class=\"lead\">Existing PellegriniPage.com Members</p>";
        wp_login_form();
        echo "<h4>Not a member?</h4>";
        wp_register('', ''); // Display "Site Admin" link.
    } else {
        echo '<h3>You are already logged in as: ' . $current_user->display_name . '</h3>';
        wp_loginout( home_url() ); // Display "Log Out" link.
    }
?>
    <a class="close-reveal-modal">&#215;</a>
</div>
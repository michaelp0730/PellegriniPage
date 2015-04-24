<footer class="row">
    <div class="large-12 columns">
        <hr/>
        <div class="row">
            <div class="large-9 columns">
                <p>Copyright &copy; <?php echo (date('Y') == 2011) ? '2011' : '2011 - ' . date('Y'); ?> PellegriniPage.com | All Rights Reserved</p>
            </div>
            <div class="large-3 columns">
                <ul class="inline-list right">
                    <li><a href="http://pellegrinipage.com/">Home</a></li>
                    <li><a href="#" data-reveal-id="login-modal">Login</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer(); /* this is used by many Wordpress features and plugins to work proporly */ ?>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/slick/slick.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/foundation.min.js"></script>
<script>
    $(document).foundation();
    var doc = document.documentElement;
    doc.setAttribute('data-useragent', navigator.userAgent);

    $(document).ready(function(){
        $('.slick-slider').slick({
            infinite: true,
            arrows: true,
            dots: true,
            slidesToShow: 3,
            slidesToScroll: 3
        });
    });
</script>
</body>
</html>
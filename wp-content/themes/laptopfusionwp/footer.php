<footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-12 col-xs-12">
                        <div class="widget">
                            <!-- end widget-title -->
                            <?php if ( is_active_sidebar( 'footer-one' )): ?>
                            <?php dynamic_sidebar( 'footer-one' ); ?>       
                            <?php endif ?>

                            <!-- end links -->
                        </div>
                        <!-- end widget -->
                    </div>
                    <!-- end col -->

                    <div class="col-md-3 col-sm-12 col-xs-12">
                        <div class="widget">
                            <!-- end widget-title -->
                            <?php if ( is_active_sidebar( 'footer-two' )): ?>
                            <?php dynamic_sidebar( 'footer-two' ); ?>       
                            <?php endif ?>
                            <!-- end links -->
                        </div>
                        <!-- end widget -->
                    </div>
                    <!-- end col -->

                    <div class="col-md-3 col-sm-12 col-xs-12">
                        <div class="widget">
                            <div class="widget-title">
                                <h4>Social Profiles</h4>
                                <hr>
                            </div>
                            <!-- end widget-title -->

                            <div class="links-widget m30">
                                <ul class="sociallinks">
                                <?php if (ot_get_option('facebook_id')) : ?>
                            <li><a href="<?php echo ot_get_option('facebook_id') ?>" target="_blank"><i class="fa fa-facebook"></i> Facebook</a></li>
                        <?php endif ?>
                        <?php if (ot_get_option('twitter_id')) : ?>
                            <li><a href="<?php echo ot_get_option('twitter_id') ?>" target="_blank"><i class="fa fa-twitter"></i> Twitter</a></li>
                        <?php endif ?>
                        <?php if (ot_get_option('linkedin_id')) : ?>
                            <li><a href="<?php echo ot_get_option('linkedin_id') ?>" target="_blank"><i class="fa fa-linkedin"></i> LinkedIn</a></li>
                        <?php endif ?>
                        <?php if (ot_get_option('youtube_id')) : ?>
                            <li><a href="<?php echo ot_get_option('youtube_id') ?>" target="_blank"><i class="fa fa-youtube"></i> YouTube</a></li>
                        <?php endif ?>
                                </ul>
                            </div>
                            <!-- end links -->
                        </div>
                        <!-- end widget -->
                    </div>
                    <!-- end col -->

                    <div class="col-md-3 col-sm-12 col-xs-12">
                        <div class="widget">
                            <div class="widget-title">
                                <h4>Subscribe & Newsletter</h4>
                                <hr>
                            </div>
                            <!-- end widget-title -->

                            <div class="newsletter-widget m30">
                                <p>Subscribe to our weekly Newsletter and receive updates via email.</p>
                                <form class="form-inline" method="post" role="form">
                                    <div class="input-group form-group">
                                        <input type="text" name="email" placeholder="Add your email here.." required class="form-control" />
                                    </div>
                                    <input type="submit" value="Subscribe" class="btn btn-primary" />
                                </form>

                                <hr>
                                <h3>
                                    <span>12.441 Members</span>
                                </h3>

                            </div>
                            <!-- end mini-widget -->
                        </div>
                        <!-- end widget -->
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </footer>
        <!-- end footer -->

        <div id="sitefooter-wrap">
            <div id="sitefooter" class="container">
                <div id="copyright" class="row">
                    <div class="col-md-6 col-sm-12 text-left">
                        <?php echo ot_get_option('copyright'); ?>
                    </div>

                    <div class="col-md-6 col-sm-12">
                        <ul class="list-inline text-right">
                            <li><a class="topbutton" href="#">Back to top <i class="fa fa-angle-up"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- end wrapper -->
    <!-- END SITE -->
<?php wp_footer(); ?>
     <script>
        (function($) {
            $(window).load(function() {
                $('#property-slider .flexslider').flexslider({
                    animation: "fade",
                    slideshowSpeed: 6000,
                    animationSpeed: 1300,
                    directionNav: true,
                    controlNav: false,
                    keyboardNav: true
                });
            });
        })(jQuery);
    </script>
<?php echo ot_get_option('google_analytics_code'); ?>
</body>

</html>
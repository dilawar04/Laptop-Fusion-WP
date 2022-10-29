<?php /* Template Name: template-contact */ ?>
<?php get_header(); ?>
<div id="map" style="position: relative; overflow: hidden;">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3620.4031048334878!2d66.99980091452085!3d24.850078384058833!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb33e01777bd7b3%3A0x894b5cdbd0d13dc3!2sAl-Fateem+Academy!5e0!3m2!1sen!2s!4v1482242091395" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>

<?php if (have_posts()) : the_post() ?>
<div class="container sitecontainer bgw">
<div class="row">
<div class="col-md-12 m22 single-post">
<div class="widget">
<div class="large-widget m30">
<div class="post-desc">

<div class="row">
<div class="col-md-7 col-sm-12">
    <div class="row">
        <div class="col-md-12 col-xs-12">
            <div class="widget">
                <div class="widget-title">
                    <h4>Contact Form</h4>
                    <hr>
                </div>
                <!-- end widget-title -->
                <?php the_content(); ?>
                <!-- end newsletter -->
            </div>
            <!-- end form-container -->
        </div>
        <!-- end col -->
    </div>
    <!-- end row -->
</div>
<!-- end col -->

<div class="col-md-3 col-sm-12">
    <div class="widget">
        <div class="widget-title">
            <h4>Contact Details</h4>
            <hr>
        </div>
        <!-- end widget-title -->

        <div class="links-widget m30">
        <address>
            <p>Al-Fateem Academy,</p>
            <?php echo ot_get_option('address'); ?>
            <p>Tell: <?php echo ot_get_option('telephone'); ?><br>
            Email: <?php echo ot_get_option('email'); ?></p>
        </address>
           </div>
        <!-- end links -->
    </div>
    <!-- end widget -->

</div>

    <div class="col-md-2 col-sm-12">
        <div class="widget">
            <div class="widget-title">
                <h4>Social Profiles</h4>
                <hr>
            </div>
            <!-- end widget-title -->

            <div class="links-widget darkcolor m30">
                <ul class="sociallinks">
                    <?php if (ot_get_option('facebook_id')): ?>
                    <li><a href="<?php echo ot_get_option('facebook_id') ?>" target="_blank"><i class="fa fa-facebook"></i> Facebook</a></li>
                    <?php endif ?>

                    <?php if (ot_get_option('facebook_id')): ?>
                    <li><a href="<?php echo ot_get_option('twitter_id') ?>" target="_blank"><i class="fa fa-twitter"></i> Twitter</a></li>
                    <?php endif ?>

                    <?php if (ot_get_option('facebook_id')): ?>
                    <li><a href="<?php echo ot_get_option('Linkedin_id') ?>" target="_blank"><i class="fa fa-linkedin"></i> LinkedIn</a></li>
                    <?php endif ?>

                    <?php if (ot_get_option('facebook_id')): ?>
                    <li><a href="<?php echo ot_get_option('youtube_id') ?>" target="_blank"><i class="fa fa-youtube"></i> YouTube</a></li>
                    <?php endif ?>

                </ul>
            </div>
            <!-- end links -->
        </div>
        <!-- end widget -->
    </div>

    </div>
    <!-- end row -->

</div>
<!-- end post-desc -->
</div>
                <!-- end large-widget -->
</div>
<!-- end widget -->
</div>
<!-- end col -->
</div>
<!-- end row -->
</div>
<!-- end container -->
<?php endif ?>
<?php get_footer(); ?>
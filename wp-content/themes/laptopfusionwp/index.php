<?php get_header(); ?>
<div class="container sitecontainer bgw">
    
    <!-- BEGIN NEWS HERE -->
    
    <?php get_template_part('templates/news'); ?>
    
    <!-- END NEWS HERE -->
    
    <div class="row">
        <div class="col-md-9 col-sm-12">
                
            <!-- BEGIN SLIDER HERE -->
            
            <?php get_template_part('templates/slider'); ?>
            
            <!-- END SLIDER HERE -->
            <div class="widget searchwidget indexslider">
            <!-- BEGIN CONTENT HERE -->
            <?php if (have_posts() ): while (have_posts() ): the_post() ?>
                <?php get_template_part('templates/content', get_post_format() ) ?>
            <?php endwhile ?>
            <?php else: ?>
                <?php get_template_part('templates/content-none'); ?>
            <?php endif ?>

            <!-- END CONTENT HERE -->

            </div>
            <!-- end widget -->
            <?php //laptopfusionwp_paging_nav(); ?>
            <?php laptopfusionwp_numbered_pagination() ?>

            <!-- <div class="widget searchwidget indexslider">&nbsp;</div> -->
            <!-- end widget -->

                <!-- BEGIN LATEST POST HERE -->

                <?php get_template_part('templates/latest'); ?>

                <!-- END LATEST POST HERE -->

            <div class="row">
                <div class="col-md-12">
                    <div class="widget">
                        <div class="ads-widget">
                            <a href="#"><img src="<?php echo IMAGES ?>/ads/ads-970-90.jpg" alt="" class="img-responsive"></a>
                        </div>
                        <!-- end ads-widget -->
                    </div>
                    <!-- end widget -->
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->

        </div>
        <!-- end col -->
        <?php get_sidebar(); ?> 
    </div>
    <!-- end row -->
</div>
<!-- end container -->
<?php get_footer(); ?>


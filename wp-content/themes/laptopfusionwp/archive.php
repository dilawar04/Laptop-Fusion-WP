<?php get_header(); ?>
<?php if ( have_posts() ) : the_post() ?>
<section class="section bgg">
    <div class="container">    
        <div class="title-area">
            <?php  
                if ( is_day() ) {
                    printf( __( '<h2> Daily Archvie for %s</h2>', 'laptopfusionwp'), get_the_date() );
                } elseif ( is_month() ) {
                    printf( __( '<h2> Monthly Archvie for %s</h2>', 'laptopfusionwp'), get_the_date( _x('F Y', 'Monthly archive date format', 'laptopfusionwp') ) );
                } elseif ( is_year() ) {
                    printf( __( '<h2> Yearly Archvie for %s</h2>', 'laptopfusionwp'), get_the_date( _x('Y', 'Yearly archive date format', 'laptopfusionwp') ) );
                } else {
                    _e( 'Archive', 'laptopfusionwp');
                }
            ?>            
        </div><!-- /.pull-right -->
    </div><!-- end container -->
</section>
<?php endif ?>

<div class="container sitecontainer bgw">
    <div class="row">
        <div class="col-md-9 col-sm-9 col-xs-12 m22 single-post">
            <div class="widget searchwidget indexslider">
                <?php if ( have_posts() ) : while( have_posts() ) : the_post() ?>
                    <?php get_template_part( 'templates/content', get_post_format() ) ?>
                <?php endwhile ?>
                <?php else: ?>
                    <?php get_template_part( 'templates/content-none' ); ?>
                <?php endif ?>
            </div>
        </div><!-- end col -->
        <?php get_sidebar() ?>
    </div><!-- end row -->
</div>
<?php get_footer(); ?>

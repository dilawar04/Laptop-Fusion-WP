<?php get_header(); ?>
<?php if (have_posts() ): the_post() ?>
<section class="section bgg">
    <div class="container">    
        <div class="title-area">
        	<h2><?php the_title(); ?></h2>

        </div>
    </div>
</section>
<?php endif ?>
<div class="container sitecontainer bgw">
    <div class="row">
        <div class="col-md-9 col-sm-9 col-xs-12 m22 single-post">
            <div class="widget">
            	<div class="large-widget m30">
            		<div class="post-desc">
            			<p><?php the_content(); ?></p>
            		</div>
            	</div>
            </div>
        </div><!-- end col -->
        <?php get_sidebar(); ?>
    </div><!-- end row -->
</div>
<?php get_footer(); ?>
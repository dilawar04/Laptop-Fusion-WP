<?php get_header(); ?>
<?php if (have_posts () ): the_post() ?>
<div class="container sitecontainer single-wrapper bgw">
            <div class="row">
                <div class="col-md-9 col-sm-9 col-xs-12 m22 single-post">
                    <div class="widget">
                        <div class="large-widget m30">
                            <div class="post clearfix">
                                <div class="title-area">
                                    <?php $category_list = get_the_category_list('|'); ?>
                                    <?php if ($category_list): ?>
                                    <div class="colorfulcats">
                                        <span class="label label-info" style="color: white;"><?php echo $category_list; ?></span>
                                    </div>
                                    <?php endif ?>
                                    <h3><?php the_title(); ?></h3>
                                    <?php laptopfusionwp_post_meta(); ?>

                                </div><!-- /.pull-right -->

                                <div class="post-media">
                                    <?php if (has_post_thumbnail() && ! post_password_required() ): ?>
                                    <?php the_post_thumbnail() ?>
                                    <?php else: ?>
                                     <h2>No image found</h2>
                                    <?php endif ?>
                                </div>

                            </div><!-- end post -->

                            <div class="post-desc">
                                <p><?php the_content(); ?></p>

                                <div class="post-sharing">
                                    <ul class="list-inline">
                                <li><a href="https://www.facebook.com/sharer.php?u=<?php echo the_permalink() ?>/&intent=share" target="_blank" class="fb-button btn btn-primary"><i class="fa fa-facebook"></i> <span class="hidden-xs">Share on Facebook</span></a></li>
                                <li><a href="https://twitter.com/share?url=<?php echo the_permalink() ?>/&text=<?php echo the_title(); ?>&intent=share" target="_blank" class="tw-button btn btn-primary"><i class="fa fa-twitter"></i> <span class="hidden-xs">Tweet on Twitter</span></a></li>
                                </ul>
                            </div><!-- end post-sharing -->
                        </div><!-- end post-desc -->

                            <div class="post-bottom">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="tags">
                                            <h4>Tags</h4>
                                            <?php echo get_the_tag_list( ' ',' '); ?>
                                        </div><!-- end tags -->
                                    </div><!-- end col -->
                                </div><!-- end row -->
                            </div><!-- end bottom -->

                            <?php if (get_the_author_meta('description')): ?>
                            <div class="authorbox">
                                <div class="row">
                                    <div class="col-sm-12 col-md-12">
                                        <div class="post clearfix">
                                            <div class="avatar-author">
                                                <a href="author.html">
                                                    <?php echo get_avatar(get_the_author_meta('user_email'), $size=80, ''); ?>
                                                </a>
                                            </div>
                                            <div class="author-title desc">
                                                <a href="single.html"><?php the_author_meta('display_name'); ?></a>
                                                <a class="authorlink" href="<?php the_author_meta('url'); ?>" taret="_blank"><?php the_author_meta('url'); ?></a>
                                                <p><?php the_author_meta('description'); ?></p>
                                                <ul class="list-inline authorsocial">
                                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div><!-- end col -->
                                  </div><!-- end row -->
                            </div><!-- end authorbox -->
                        <?php endif ?>

                            <div class="row m22 related-posts">
                                <div class="col-md-12">
                                    <div class="widget">
                                        <div class="widget-title">
                                            <h4>You May Also Like <span><a href="#">View all</a></span></h4>
                                            <hr>
                                        </div><!-- end widget-title -->

                                        <div class="review-posts row m30">
                                            <?php
                                                $tags = wp_get_post_tags(get_the_ID());
                                                $tag_ids = [];
                                                foreach ($tags as $tag) {
                                                    $tag_ids = $tag->term_id;
                                                 } 
                                                 $args = [
                                                    'tag__in' => $tag_ids,
                                                    'post__not_in' => [get_the_ID()],
                                                    'posts_per_page' => 6, 
                                                 ];

                                                 $related = new wp_query($args);
                                            ?>

                                            <?php if ($related->have_posts() ): while($related->have_posts()) : $related->the_post() ?>
                                            <div class="post-review col-md-4 col-sm-12 col-xs-12">
                                                <div class="post-media entry">
                                                    <?php if (has_post_thumbnail() ):?>
                                                        <?php the_post_thumbnail(); ?>
                                                    <?php else: ?>
                                                        <h4>NO img found</h4>
                                                    <?php endif ?>

                                                    <div class="magnifier"></div>
                                                    </div><!-- end media -->
                                                
                                                <div class="post-title">
                                                    <h3><a href="<?php echo the_permalink() ?>"><?php the_title(); ?></a></h3>
                                                </div><!-- end post-title -->
                                                        </div><!-- end post-review -->
                                                <?php endwhile ?>
                                            <?php endif ?>
                                        </div><!-- end review-post -->
                                    </div><!-- end widget -->   
                                </div><!-- end col -->
                            </div><!-- end row -->

                            <?php comments_template(); ?>
                            
                        </div><!-- end large-widget -->
                    </div><!-- end widget -->
                </div><!-- end col -->
                <?php get_sidebar(); ?>
            </div><!-- end row -->
        </div><!-- end container -->
    <?php endif ?>
<?php get_footer(); ?>
<div class="widget">
    <div class="widget-title">
        <h4>Latest Laptops</h4>
        <hr>
    </div>
    <!-- end widget-title -->

    <div class="reviewlist review-posts row m30">
        <?php 
            $args = ['numberposts' => '6' ];
            $recent_posts = wp_get_recent_posts($args);
            foreach ($recent_posts as $recent_post) {
        ?>
        <div class="post-review col-md-4 col-sm-12">
            <div class="post-media entry">
                <a href="<?php echo the_permalink($recent_post['ID'] ); ?>" title="">
                    <?php if (has_post_thumbnail() ): ?>
                        <?php the_post_thumbnail('',['class' => 'img-responsive'] ) ?>
                    <?php else: ?>
                        <h4>No Image Found</h4>
                    <?php endif ?>
                    <div class="magnifier">
                    </div>
                </a>
            </div>
            <!-- end media -->
            <div class="post-title">
                <h3><a href="<?php echo the_permalink($recent_post['ID'] ); ?>"><?php echo $recent_post['post_title']; ?></a></h3>
            </div>
            <!-- end post-title -->
        </div>
        <!-- end post-review -->
        <?php } ?>
    </div>

</div>
<!-- end widget -->
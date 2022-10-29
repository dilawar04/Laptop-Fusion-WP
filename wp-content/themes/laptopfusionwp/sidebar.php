<div class="col-md-3 col-sm-12 col-xs-12">
                    <div class="widget">
                        <div class="widget-title">
                            <h4>Social Media</h4>
                            <hr>
                        </div>
                        <!-- end widget-title -->

                        <div class="social-media-widget m30">
                            <ul class="list-social clearfix">
                                <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li class="youtube"><a href="#"><i class="fa fa-youtube"></i></a></li>
                            </ul>
                        </div>
                        <!-- end social -->
                    </div>

                    <div class="widget hidden-xs">
                        <div class="widget-title">
                            <h4>Advertising</h4>
                            <hr>
                        </div>
                        <!-- end widget-title -->

                        <div class="ads-widget m30">
                            <a href="#"><img src="<?php echo ot_get_option('sidebar_banner') ?>" alt="" class="img-responsive"></a>
                        </div>
                        <!-- end ads-widget -->
                    </div>
                    <!-- end widget -->

                    <div class="widget">
                        <div class="widget-title">
                            <h4>Brands</h4>
                            <hr>
                        </div>
                        <!-- end widget-title -->

                        <div class="mini-widget m30">
                            <?php
                                $args = [
                                    'orderby' => 'name',
                                    'order' => 'ASC',
                                    'hide_empty' => true,
                                    'exclude' => '1',
                                ]; 
                                $categories = get_categories($args);
                                foreach ($categories as $category) {
                                $category_link =  get_category_link($category->cat_ID);
                            ?>
                            <div class="post clearfix">
                                <div class="mini-widget-title">
                                    <a href="<?php echo $category_link; ?>"><?php echo $category->name; ?></a>
                                    <div class="mini-widget-hr"></div>
                                </div>
                            </div>

                        <?php } ?>
                        </div>
                        <!-- end mini-widget -->

                    </div>
                    <!-- end widget -->

                </div>
                <!-- end col -->
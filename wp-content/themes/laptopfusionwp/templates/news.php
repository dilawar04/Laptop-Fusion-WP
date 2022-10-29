<?php  
	$args = ['post_type' => 'my_news', 'post_per_page' => -1, 'order' => 'DESC', 'order_by' => 'id'];
	$news = new WP_query($args);

?>

<?php if ($news->have_posts()): ?>
	
<div class="row hidden-xs">
    <div class="col-md-12">
        <div class="news-ticker clearfix">
            <div class="news-title">
                <h3>Trending News</h3>
            </div>
            <!-- end random -->
            <ul id="ticker">
            	<?php while ($news->have_posts()) : $news->the_poSt()?>
                <li><span><?php echo the_content(); ?></span></li>
            <?php endwhile; ?>
            </ul>
        </div>
        <!-- end news-ticker -->
    </div>
    <!-- end col -->
</div>
<!-- end row -->
<?php endif ?>

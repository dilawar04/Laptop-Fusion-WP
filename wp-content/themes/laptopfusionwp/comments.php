<?php if ( post_password_required()) return; ?>
<?php if ( comments_open()) : ?>
<div id="comments" class="row">
    <div class="col-md-12">
        <div class="widget">
            <div class="widget-title">
                <h4>What other's say about : How ThePhone thriller..</h4>
                <hr>
            </div><!-- end widget-title -->

            <div class="comments">
                <div class="well">
                    <?php foreach ($comments as $comment): ?>

                    <div class="media">
                        <div class="media-left">
                            <a href="#">
                              <img class="media-object img-circle" src="<?php echo get_avatar_url($comment) ?>" alt="<?php comment_author() ?>">
                            </a>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading"><?php comment_author(); ?></h4>
                            <div class="time-comment clearfix">
                                <small class="pull-left"><?php comment_date(); ?></small>
                                <a class="pull-right btn btn-primary btn-xs">Reply</a>
                            </div><!-- end time-comment -->
                            <?php if ($comment->comment_approved == '0'): ?>
                                <?php _e('Your comment is awaiting moderation','laptopfusionwp'); ?>
                        <?php else: ?>
                        <p><?php comment_text(); ?></p>
                        <?php endif ?>
                        </div>
                    </div><!-- end media -->
                    <?php endforeach ?>
                </div><!-- end well -->
            </div><!-- end collapse -->
        </div><!-- end widget -->   
    </div><!-- end col -->
</div><!-- end row -->
<?php endif ?>
<div class="row">
    <div class="col-md-12">
        <div class="widget">
            <div class="widget-title">
                <h4>Leave a Comment</h4>
                    <hr>
            </div><!-- end widget-title -->
    <div class="commentform">
        <form id="commentform" method="post" action="<?php echo site_url('wp-comments-post.php') ?>" class="row" >
            <input type="hidden" name="comment_post_ID" id="comment_post_ID" value="<?php echo $post->ID ?>">
            <div class="col-md-12 col-sm-12">
                <label>Comment <span class="required">*</span></label>
                <textarea name="comment" class="form-control" placeholder=""></textarea>
            </div>
    <div class="col-md-4 col-sm-12">
        <label>Name <span class="required">*</span></label>
        <input name="author" type="text" class="form-control" placeholder="">
    </div>
    <div class="col-md-4 col-sm-12">
        <label>Email <span class="required">*</span></label>
        <input name="email" type="email" class="form-control" placeholder="">
    </div>

    <div class="col-md-4 col-sm-12">
        <label>Website</label>
        <input name="url" type="text" class="form-control" placeholder="">
    </div>

    <div class="col-md-12 col-sm-12">
        <input type="submit" value="Send Comment" class="btn btn-primary" />
    </div>
                </form>
            </div><!-- end newsletter -->
        </div><!-- end widget -->   
    </div><!-- end col -->
</div><!-- end row -->

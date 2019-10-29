<?php 
if ($this->session->success) { ?>
    <?php echo $this->session->success; ?>
<?php   }?>
<!-- Categories -->




<!-- Recent Posts -->
<div class="container" style="margin-top: 50px">
    <div class="sixteen columns">
        <h3 class="margin-bottom-25">Recent Posts</h3>
    </div>
    <?php foreach ($blogs as $blog) { ?>


        <div class="one-third column">

            <!-- Post #3 -->
            <div class="recent-post">

                <?php if(!empty($blog->thumb)): ?>
                    <div class="recent-post-img"><a href="<?php echo base_url(); ?>blog/<?php echo $blog->blog_id; ?>"><img src="<?php echo base_url(); ?>uploads/blog/<?php echo $blog->thumb; ?>" style="max-height: 250px; width: 100%;" alt=""></a><div class="hover-icon"></div></div>
                    <?php else: ?>
                        <div class="recent-post-img"><a href="<?php echo base_url(); ?>blog/<?php echo $blog->blog_id; ?>"><img src="<?php echo base_url(); ?>uploads/blog/default.png" style="width: 100%; height: 253px;" alt=""></a><div class="hover-icon"></div></div>
                    <?php endif; ?>

                    <a href="<?php echo base_url(); ?>blog/<?php echo $blog->blog_id; ?>"><h4><?php echo $blog->blog_title; ?></h4></a>
                    <div class="meta-tags">
                        <span><?php echo date('F d, Y',strtotime($blog->create)); ?></span>
                        <span><a href="#">0 Comments</a></span>
                    </div>
                    <?php echo substr($blog->blog_description, 0,150); ?>
                    <a href="<?php echo base_url(); ?>blog/<?php echo $blog->blog_id; ?>" class="button">Read More</a>
                </div>
            </div>
        <?php } ?>

    </div>



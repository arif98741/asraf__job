<?php 
if ($this->session->success) { ?>
    <?php echo $this->session->success; ?>
<?php   }?>
<!-- Categories -->
<div class="container">
    <div class="sixteen columns">
        <h3 class="margin-bottom-25">জনপ্রিয় ক্যাটাগরি</h3>
        <ul id="popular-categories">
            <?php foreach ($jobcats as $jobcat) { ?>

                <li><a href="<?php echo base_url(); ?>seeker/job/browse_jobs_by_category/<?php echo $jobcat->jobcat_id; ?>"><i class="ln  ln-icon-Bar-Chart"></i> <?php echo $jobcat->jobcat_name; ?></a></li>
            <?php  } ?>

        </ul>

        <div class="clearfix"></div>
        <div class="margin-top-30"></div>

        <a href="<?php echo base_url(); ?>seeker/job/manage_categories" class="button centered">সকল ক্যাটাগরি</a>
        <div class="margin-bottom-50"></div>
    </div>
</div>


<div class="container">


    <!-- Recent Jobs -->
    <div class="eleven columns">
        <div class="padding-right">
            <h3 class="margin-bottom-25">সাম্পতিক চাকুরি</h3>
            <ul class="job-list">

                <?php foreach($front_jobs as $front_job){ ?>
                    <li class="highlighted">
                        <a href="<?php echo base_url(); ?>seeker/job/job_page/<?php echo $front_job->job_id; ?>" class="btn btn-info btn-xs view_data" >

                            <img src="<?php echo base_url(); ?>asset/front/company_images/27096.jpg" alt="">

                            <div class="job-list-content">
                                <h4>  <?php echo $front_job->job_title ;?>                                          
                                <?php  if($front_job->job_type =="Full-Time"){
                                    ?>
                                    <span style="background-color:#2980b9;" class="full-time"><?php echo $front_job->job_type ;?></span>
                                    <?php
                                }
                                else if($front_job->job_type =="Internship")
                                {
                                    ?>
                                    <span style="background-color:#f39c12;" class="full-time"><?php echo $front_job->job_type ;?></span>
                                    <?php   
                                }
                                else if($front_job->job_type =="Part-Time")
                                {
                                    ?>
                                    <span style="background-color:#d35400;" class="full-time"><?php echo $front_job->job_type ;?></span>
                                    <?php
                                }
                                else if($front_job->job_type =="Freelance")
                                {
                                    ?>
                                    <span style="background-color:#27ae60;" class="full-time"><?php echo $front_job->job_type ;?></span>
                                    <?php
                                } ?>
                            </h4>
                            <div class="job-icons">
                                <span><i class="fa fa-briefcase"></i> <?php echo $front_job->company_name; ?></span>
                                <span><i class="fa fa-map-marker"></i>  <?php echo $front_job->location; ?></span>
                                <span><i class="fa fa-money"></i> ৳<?php echo $front_job->salary; ?></span>
                            </div>
                        </div>

                        <div class="clearfix"></div>
                    </a>
                </li>
            <?php  } ?>

        </ul>

        <a href="<?php echo base_url(); ?>seeker/job/browse_jobs" class="button centered"><i class="fa fa-plus-circle"></i> সব গুলো দেখুন</a>
        <div class="margin-bottom-55"></div>
    </div>
</div>

<!-- Job Spotlight -->
<div class="five columns">
    <h3 class="margin-bottom-5">ফিচার জব</h3>

    <!-- Navigation -->
    <div class="showbiz-navigation">
        <div id="showbiz_left_1" class="sb-navigation-left"><i class="fa fa-angle-left"></i></div>
        <div id="showbiz_right_1" class="sb-navigation-right"><i class="fa fa-angle-right"></i></div>
    </div>
    <div class="clearfix"></div>

    <!-- Showbiz Container -->
    <div id="job-spotlight" class="showbiz-container">
        <div class="showbiz" data-left="#showbiz_left_1" data-right="#showbiz_right_1" data-play="#showbiz_play_1">
            <div class="overflowholder">

                <ul>

                    <li>
                        <div class="job-spotlight">
                            <a href="#"><h4>Web Developer                                            
                                <span style="background-color:#27ae60;" class="full-time">Freelance</span>
                            </h4></a>
                            <span><i class="fa fa-briefcase"></i>Tech Co.</span>
                            <span><i class="fa fa-map-marker"></i> Mohakhale, Dhaka</span>
                            <span><i class="fa fa-money"></i>50k</span>
                            <p>This is job description. Want to be a developer contact with us.</p>

                            <?php if($this->session->seeker):?>
                                   <a href="<?php echo base_url(); ?>seeker/job/job_page/13" class="button">Apply For This Job</a>

                                <?php else: ?>
                                     <!-- <a href="<?php// echo base_url(); ?>" class="button">Apply For This Job</a> -->

                                <?php endif; ?>
                        </div>
                    </li>




                </ul>
                <div class="clearfix"></div>

            </div>
            <div class="clearfix"></div>
        </div>
    </div>

</div>
</div>

<!-- Testimonials -->
<div id="testimonials">
    <!-- Slider -->
    <div class="container">
        <div class="sixteen columns">
            <div class="testimonials-slider">
                <ul class="slides">
                    <li>
                        <p>
                            I have already heard back about the internship I applied through Job Finder, that's the fastest job reply I've ever gotten and it's so much better than waiting weeks to hear back.
                            <span>Mirana Bulbul</span>
                        </p>
                    </li>

                    <li>
                        <p>
                            Its an awesome platform for finding real experienced clients for job
                            <span>Subrata Basak</span>
                        </p>
                    </li>

                    <li>
                        <p>
                            We always recommended this platform for interacting with company and job seekers.
                            <span>Salauddin Shiplu</span>
                        </p>
                    </li>

                </ul>
            </div>
        </div>
    </div>
</div>


<!-- Infobox -->
<div class="infobox">
    <div class="container">
        <div class="sixteen columns">আপনার নিজের ব্যান্ড তৈরি করুন<a href="login.php">শুরু করুন</a></div>
    </div>
</div>


<!-- Recent Posts -->
<div class="container">
    <div class="sixteen columns">
        <h3 class="margin-bottom-25">সাম্পরিত ব্লগ</h3>
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


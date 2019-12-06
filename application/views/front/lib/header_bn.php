
<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->
<head>

    <!-- Basic Page Needs
        ================================================== -->
        <meta charset="utf-8">
        <title>Job Portal</title>

    <!-- Mobile Specific Metas
        ================================================== -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- CSS
        ================================================== -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>asset/front/css/base.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>asset/front/css/responsive.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>asset/front/css/font-awesome.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>asst/front/css/colors/green.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>asset/front/css/style.css">
    <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    

</head>

<body>
    <div id="wrapper">
        <!-- Header
            ================================================== -->
            <header class="transparent sticky-header full-width">
                <div class="container">
                    <div class="sixteen columns">

                        <!-- Logo -->
                        <div id="logo">
                            <h1><a href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>asset/front/images/logo2.png" alt="Work Scout" /></a></h1>
                        </div>

                        <!-- Menu -->
                        <nav id="navigation" class="menu">
                            <ul id="responsive">

                                <li>
                                    <a href="<?php echo base_url(); ?>" id="current">হোম</a>
                                    
                                </li>

                               <!--  <li>
                                    <a href="#">Pages</a>
                                    <ul>
                                        <li><a href="<?php echo base_url(); ?>seeker/job/browse_jobs">Job Page</a></li>
                                        <li><a href="<?php echo base_url(); ?>contact">Contact</a></li>
                                    </ul>
                                </li> -->

                                <li>
                                    <a href="#">চাকুরী আগ্রহী</a>
                                    <ul>
                                       <?php if($this->session->seeker): ?>

                                        <li><a href="add-resume.php"> রিসিউম যুক্ত করুন </a></li>


                                        <li><a href="job-alerts.php">চাকুরি নোটীফিকেশন</a></li>
                                    <?php endif; ?>

                                    <li><a href="<?php echo base_url(); ?>seeker/job/browse_jobs">চাকুরী</a></li>
                                    <li><a href="<?php echo base_url(); ?>seeker/job/manage_categories">ক্যাটাগরি</a></li>
                                    <!--  <li><a href="manage-resumes.php">Manage Resumes</a></li> -->
                                    <li><a href="<?php echo base_url(); ?>browse_resumes/1">রিসিউম ব্রাউজ করুন</a></li>


                                </ul>
                            </li>


                            <li>
                                <a href="#">চাকুরিদাতা</a>
                                <ul>
                                    <?php if($this->session->company): ?>

                                        <li><a href="<?php echo base_url(); ?>company/job/add_job">চাকুরি যুক্ত করুন</a></li>
                                        <li><a href="<?php echo base_url(); ?>company/job/manage_jobs">সম্পাদনা</a></li>
                                        <li><a href="<?php echo base_url(); ?>company/application/manage_all_applications">আবেদন সম্পাদনা</a></li>

                                        <?php else: ?>

                                            <li><a href="<?php echo base_url(); ?>provider_registration">রেজিট্রেশন</a></li>
                                        <?php endif;?>

                                        
                                    </ul>
                                </li>
                                <li><a href="<?php echo base_url(); ?>/contact-us">যোগাযোগ</a></li>

                                <li><a href="<?php echo base_url(); ?>/blogs">ব্লগ</a></li>

                                <li>
                                    <div class="div" style="display: inline-block;">
                                        <form action="<?php echo base_url(); ?>search/search_action">
                                            <input type="text" name="search" style="max-width: 120px; height: 40px;  border-radius: 10px;" placeholder="সার্চ এখানে"> <button style="display: none;" type="submit"><i class="fa fa-search"></i></button>
                                        </form>
                                    </div>
                                </li>

                            </ul>

                            <ul class="float-right">

                                <?php if($this->session->company): ?>
                                    <li><a href="<?php echo base_url(); ?>company/logout"><i class="fa fa-lock"></i>(<?php echo $this->session->company_author; ?>) Log out</a></li>
                                <?php endif; ?>

                                <?php if($this->session->seeker): ?>

                                 <li><a href="<?php echo base_url(); ?>seeker/seeker/profile/<?php echo $this->session->seeker_id; ?>"><i class="fa fa-user"></i> Profile</a></li>
                                 <li><a href="<?php echo base_url(); ?>seeker/logout"><i class="fa fa-lock"></i> Log out</a></li>
                             <?php endif; ?>

                             <?php if(!$this->session->seeker && !$this->session->company): ?>
                                <li><a href="<?php echo base_url(); ?>signup"><i class="fa fa-user"></i> সাইন আপ</a></li>
                                <li><a href="<?php echo base_url(); ?>login"><i class="fa fa-lock"></i> লগ ইন</a></li>
                            <?php endif; ?>




                        </ul>

                    </nav>

                    <!-- Navigation -->
                    <div id="mobile-navigation">
                        <a href="#menu" class="menu-trigger"><i class="fa fa-reorder"></i> Menu</a>
                    </div>

                </div>
            </div>
        </header>
        <header class="sticky-header cloned headroom headroom--top headroom--not-bottom">
            <div class="container">
                <div class="sixteen columns">

                    <!-- Logo -->
                    <div id="logo">
                        <!--                            <h1><a href="--><?php // echo base_url(); ?><!--">sdfsdkjflksdflkj<img src="--><?php //echo base_url(); ?><!--asset/front/images/logo2.png" alt="Work Scout"></a></h1>-->
                        <h1>Job Portal</h1>
                    </div>

                    <!-- Menu -->
                    <nav id="navigation" class="menu sf-js-enabled sf-arrows">
                        <ul id="responsive">

                            <li><a href="index.html" class="sf-with-ul">হোম</a>
                                <ul style="display: none;">
                                    <li><a href="index.html">Home #1</a></li>
                                    <li><a href="index-2.html">Home #2</a></li>
                                    <li><a href="index-3.html">Home #3</a></li>
                                    <li><a href="index-4.html">Home #4</a></li>
                                    <li><a href="index-5.html">Home #5</a></li>
                                </ul>
                            </li>

                          <!--   <li><a href="#" class="sf-with-ul">Pages</a>
                                <ul style="display: none;">
                                    <li><a href="job-page.html">Job Page</a></li>
                                    <li><a href="job-page-alt.html">Job Page Alternative</a></li>
                                    <li><a href="resume-page.html">Resume Page</a></li>
                                    <li><a href="shortcodes.html">Shortcodes</a></li>
                                    <li><a href="icons.html">Icons</a></li>
                                    <li><a href="pricing-tables.html">Pricing Tables</a></li>
                                    <li><a href="contact.html">Contact</a></li>
                                </ul>
                            </li> -->

                            <li><a href="#" id="current" class="sf-with-ul">For Candidates</a>
                                <ul style="display: none;">
                                    <li><a href="browse-jobs.html">Browse Jobs</a></li>
                                    <li><a href="browse-categories.html">Browse Categories</a></li>
                                    <li><a href="add-resume.html">Add Resume</a></li>
                                    <li><a href="manage-resumes.html">Manage Resumes</a></li>
                                    <li><a href="job-alerts.html">Job Alerts</a></li>
                                </ul>
                            </li>

                            <li><a href="#" class="sf-with-ul">For Employers</a>
                                <ul style="display: none;">
                                    <li><a href="add-job.html">Add Job</a></li>
                                    <li><a href="manage-jobs.html">Manage Jobs</a></li>
                                    <li><a href="manage-applications.html">Manage Applications</a></li>
                                    <li><a href="browse-resumes.html">Browse Resumes</a></li>
                                </ul>
                            </li>

                            <li><a href="blog.html">Blog</a></li>
                        </ul>


                        <ul class="responsive float-right">
                            <li><a href="my-account.html#tab2"><i class="fa fa-user"></i> Sign Up</a></li>
                            <?php if(!$this->session->company): ?>

                                <li><a href="my-account.html"><i class="fa fa-lock"></i> Log In2</a></li>
                            <?php endif; ?>
                        </ul>

                    </nav>

                    <!-- Navigation -->
                    <div id="mobile-navigation">
                        <a href="#menu" class="menu-trigger"><i class="fa fa-reorder"></i> Menu</a>
                    </div>

                </div>
            </div>
        </header>
        <div class="clearfix"></div>
        <?php 
        if ($this->session->login_success) { ?>

            <div class="container message" style="margin-top: 100px;">
                <p style="padding: 6px; font-size: 18px;  color: green;"><?php echo $this->session->login_success; ?></p>
                
            </div>
            <?php   }?>
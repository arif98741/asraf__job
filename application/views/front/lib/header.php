
<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->
<head>

    <!-- Basic Page Needs
        ================================================== -->
        <meta charset="utf-8">
        <title>Work Scout</title>

    <!-- Mobile Specific Metas
        ================================================== -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- CSS
        ================================================== -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>asset/front/css/base.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>asset/front/css/responsive.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>asset/front/css/font-awesome.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>asset/front/css/style.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>asst/front/css/colors/green.css" id="colors">
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
                                    <a href="<?php echo base_url(); ?>" id="current">Home</a>
                                    
                                </li>

                                <li>
                                    <a href="#">Pages</a>
                                    <ul>
                                        <li><a href="job-page.php">Job Page</a></li>
                                        <li><a href="job-page-alt.php">Job Page Alternative</a></li>
                                        <li><a href="resume-page.php">Resume Page</a></li>
                                        <li><a href="shortcodes.php">Shortcodes</a></li>
                                        <li><a href="icons.php">Icons</a></li>
                                        <li><a href="pricing-tables.php">Pricing Tables</a></li>
                                        <li><a href="contact.php">Contact</a></li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="#">For Candidates</a>
                                    <ul>
                                        <li><a href="browse-jobs.php">Browse Jobs</a></li>
                                        <li><a href="browse-categories.php">Browse Categories</a></li>
                                        <li><a href="add-resume.php">Add Resume</a></li>
                                        <li><a href="manage-resumes.php">Manage Resumes</a></li>
                                        <li><a href="job-alerts.php">Job Alerts</a></li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="#">Job Providers</a>
                                    <ul>
                                        <li><a href="registration.php">Register</a></li>
                                        
                                        <li><a href="manage-jobs.php">Manage Jobs</a></li>
                                        <li><a href="manage-applications.php">Manage Applications</a></li>
                                        <li><a href="browse-resumes.php">Browse Resumes</a></li>
                                    </ul>
                                </li>

                                
                            </ul>


                            <ul class="float-right">
                                <li><a href="signup.php"><i class="fa fa-user"></i> Sign Up</a></li>
                                <li><a href="<?php echo base_url(); ?>login"><i class="fa fa-lock"></i> Log In</a></li>
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
                            <h1><a href="<?php  echo base_url(); ?>"><img src="<?php echo base_url(); ?>asset/front/images/logo2.png" alt="Work Scout"></a></h1>
                        </div>

                        <!-- Menu -->
                        <nav id="navigation" class="menu sf-js-enabled sf-arrows">
                            <ul id="responsive">

                                <li><a href="index.html" class="sf-with-ul">Home</a>
                                    <ul style="display: none;">
                                        <li><a href="index.html">Home #1</a></li>
                                        <li><a href="index-2.html">Home #2</a></li>
                                        <li><a href="index-3.html">Home #3</a></li>
                                        <li><a href="index-4.html">Home #4</a></li>
                                        <li><a href="index-5.html">Home #5</a></li>
                                    </ul>
                                </li>

                                <li><a href="#" class="sf-with-ul">Pages</a>
                                    <ul style="display: none;">
                                        <li><a href="job-page.html">Job Page</a></li>
                                        <li><a href="job-page-alt.html">Job Page Alternative</a></li>
                                        <li><a href="resume-page.html">Resume Page</a></li>
                                        <li><a href="shortcodes.html">Shortcodes</a></li>
                                        <li><a href="icons.html">Icons</a></li>
                                        <li><a href="pricing-tables.html">Pricing Tables</a></li>
                                        <li><a href="contact.html">Contact</a></li>
                                    </ul>
                                </li>

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
                                <li><a href="my-account.html"><i class="fa fa-lock"></i> Log In</a></li>
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
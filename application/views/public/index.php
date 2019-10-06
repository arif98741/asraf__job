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
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/colors/green.css" id="colors">
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
                            <h1><a href="index.html"><img src="images/logo2.png" alt="Work Scout" /></a></h1>
                        </div>

                        <!-- Menu -->
                        <nav id="navigation" class="menu">
                            <ul id="responsive">

                                <li>
                                    <a href="index.html" id="current">Home</a>

                                </li>

                                <li>
                                    <a href="#">Pages</a>
                                    <ul>
                                        <li><a href="job-page.html">Job Page</a></li>
                                        <li><a href="job-page-alt.html">Job Page Alternative</a></li>
                                        <li><a href="resume-page.html">Resume Page</a></li>
                                        <li><a href="shortcodes.html">Shortcodes</a></li>
                                        <li><a href="icons.html">Icons</a></li>
                                        <li><a href="pricing-tables.html">Pricing Tables</a></li>
                                        <li><a href="contact.html">Contact</a></li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="#">For Candidates</a>
                                    <ul>
                                        <li><a href="browse-jobs.html">Browse Jobs</a></li>
                                        <li><a href="browse-categories.html">Browse Categories</a></li>
                                        <li><a href="add-resume.html">Add Resume</a></li>
                                        <li><a href="manage-resumes.html">Manage Resumes</a></li>
                                        <li><a href="job-alerts.html">Job Alerts</a></li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="#">For Employers</a>
                                    <ul>
                                        <li><a href="add-job.php">Add Job</a></li>
                                        <li><a href="manage-jobs.html">Manage Jobs</a></li>
                                        <li><a href="manage-applications.html">Manage Applications</a></li>
                                        <li><a href="browse-resumes.html">Browse Resumes</a></li>
                                    </ul>
                                </li>

                                <li><a href="blog.html">Blog</a></li>
                            </ul>


                            <ul class="float-right">
                                <li><a href="signup.php"><i class="fa fa-user"></i> Sign Up</a></li>
                                <li><a href="login.php"><i class="fa fa-lock"></i> Log In</a></li>
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


        <!-- Banner
            ================================================== -->
            <div id="banner" class="with-transparent-header parallax background" style="background-image: url(images/banner-home-02.jpg)" data-img-width="2000" data-img-height="1330" data-diff="300">
                <div class="container">
                    <div class="sixteen columns">

                        <div class="search-container">

                            <!-- Form -->
                            <h2>Find job</h2>
                            <input type="text" name="keyword" class="ico-01" placeholder="job title, keywords or company name" value="" />
                            <input type="text" class="ico-02" placeholder="city, province or region" value="" />

                            <button type="submit" name="SEARCH" value="Search" onclick="return valid();"><i class="fa fa-search"></i></button>

                            <!-- Browse Jobs -->
                            <div class="browse-jobs">
                                Browse job offers by <a href="browse-categories.html"> category</a> or <a href="#">location</a>
                            </div>

                            <!-- Announce -->
                            <div class="announce">
                                We’ve over <strong>15 000</strong> job offers for you!
                            </div>

                        </div>

                    </div>
                </div>
            </div>


        <!-- Content
            ================================================== -->
            <!-- Categories -->
            <div class="container">
                <div class="sixteen columns">
                    <h3 class="margin-bottom-25">Popular Categories</h3>
                    <ul id="popular-categories">
                        <li><a href="#"><i class="ln  ln-icon-Bar-Chart"></i> Accounting / Finance</a></li>
                        <li><a href="#"><i class="ln ln-icon-Car"></i> Automotive Jobs</a></li>
                        <li><a href="#"><i class="ln ln-icon-Worker"></i> Construction / Facilities</a></li>
                        <li><a href="#"><i class="ln ln-icon-Student-Female"></i> Education Training</a></li>
                        <li><a href="#"><i class="ln  ln-icon-Medical-Sign"></i> Healthcare</a></li>
                        <li><a href="#"><i class="ln  ln-icon-Plates"></i> Restaurant / Food Service</a></li>
                        <li><a href="#"><i class="ln  ln-icon-Globe"></i> Transportation / Logistics</a></li>
                        <li><a href="#"><i class="ln  ln-icon-Laptop-3"></i> Telecommunications</a></li>
                    </ul>

                    <div class="clearfix"></div>
                    <div class="margin-top-30"></div>

                    <a href="browse-categories.html" class="button centered">Browse All Categories</a>
                    <div class="margin-bottom-50"></div>
                </div>
            </div>


            <div class="container">


                <!-- Recent Jobs -->
                <div class="eleven columns">
                    <div class="padding-right">
                        <h3 class="margin-bottom-25">Recent Jobs</h3>
                        <ul class="job-list">


                            <?php

                           // $stmt = $db->prepare("SELECT * FROM job ORDER BY id DESC LIMIT 4");
                           // $stmt->execute();

                           // while($row = $stmt->fetch(PDO::FETCH_ASSOC))
                            //{
                                ?>
                                <li class="highlighted">
                                    <a href="#small-dialog" type="button" name="view" value="view" id="<?php echo $row["id"]; ?>" class="popup-with-zoom-anim btn btn-info btn-xs view_data" >

                                        <img src="company_images/<?php echo $row['company_logo']; ?>">

                                        <div class="job-list-content">
                                            <h4><?php echo $row['job_title'];?>

                                            <?php
                                            if($row['job_type']=="Full-Time")
                                            {
                                                ?>
                                                <span style="background-color:#2980b9;" class="full-time"><?php echo $row['job_type'];?></span>
                                                <?php
                                            }
                                            else if($row['job_type']=="Internship")
                                            {
                                                ?>
                                                <span style="background-color:#f39c12;" class="full-time"><?php echo $row['job_type'];?></span>
                                                <?php   
                                            }
                                            else if($row['job_type']=="Part-Time")
                                            {
                                                ?>
                                                <span style="background-color:#d35400;" class="full-time"><?php echo $row['job_type'];?></span>
                                                <?php
                                            }
                                            else if($row['job_type']=="Freelance")
                                            {
                                                ?>
                                                <span style="background-color:#27ae60;" class="full-time"><?php echo $row['job_type'];?></span>
                                                <?php
                                            }
                                            ?>
                                        </h4>
                                        <div class="job-icons">
                                            <span><i class="fa fa-briefcase"></i> <?php echo $row['company_name'];?></span>
                                            <span><i class="fa fa-map-marker"></i> <?php echo $row['job_location'];?></span>
                                            <span><i class="fa fa-money"></i><?php echo $row['job_salary'];?></span>
                                        </div>
                                    </div>

                                    <div class="clearfix"></div>
                                </a>
                            </li>
                          
                    </ul>

                    <a href="browse-jobs.html" class="button centered"><i class="fa fa-plus-circle"></i> Show More Jobs</a>
                    <div class="margin-bottom-55"></div>
                </div>
            </div>

            <!-- Job Spotlight -->
            <div class="five columns">
                <h3 class="margin-bottom-5">Job Spotlight</h3>

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

                                <?php

                                $stmt = $db->prepare("SELECT * FROM job");
                                $stmt->execute();

                                while($row = $stmt->fetch(PDO::FETCH_ASSOC))
                                {
                                    ?>
                                    <li>
                                        <div class="job-spotlight">
                                            <a href="#"><h4><?php echo $row['job_title'];?>

                                            <?php
                                            if($row['job_type']=="Full-Time")
                                            {
                                                ?>
                                                <span style="background-color:#2980b9;" class="full-time"><?php echo $row['job_type'];?></span>
                                                <?php
                                            }
                                            else if($row['job_type']=="Internship")
                                            {
                                                ?>
                                                <span style="background-color:#f39c12;" class="full-time"><?php echo $row['job_type'];?></span>
                                                <?php   
                                            }
                                            else if($row['job_type']=="Part-Time")
                                            {
                                                ?>
                                                <span style="background-color:#d35400;" class="full-time"><?php echo $row['job_type'];?></span>
                                                <?php
                                            }
                                            else if($row['job_type']=="Freelance")
                                            {
                                                ?>
                                                <span style="background-color:#27ae60;" class="full-time"><?php echo $row['job_type'];?></span>
                                                <?php
                                            }
                                            ?>
                                        </h4></a>
                                        <span><i class="fa fa-briefcase"></i><?php echo $row['company_name'];?></span>
                                        <span><i class="fa fa-map-marker"></i> <?php echo $row['job_location'];?></span>
                                        <span><i class="fa fa-money"></i><?php echo $row['job_salary'];?></span>
                                        <p><?php echo $row['job_description'];?></p>
                                        <a href="job-page.html" class="button">Apply For This Job</a>
                                    </div>
                                </li>
                                <?php
                            }
                            ?>

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
                                <span>Collis Ta’eed, Envato</span>
                            </p>
                        </li>

                        <li>
                            <p>
                                Nam eu eleifend nulla. Duis consectetur sit amet risus sit amet venenatis. Pellentesque pulvinar ante a tincidunt placerat. Donec dapibus efficitur arcu, a rhoncus lectus egestas elementum.
                                <span>John Doe</span>
                            </p>
                        </li>

                        <li>
                            <p>
                                Maecenas congue sed massa et porttitor. Duis placerat commodo ex, ut faucibus est facilisis ac. Donec eleifend arcu sed sem posuere aliquet. Etiam lorem metus, suscipit vel tortor vitae.
                                <span>Tom Smith</span>
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
            <div class="sixteen columns">Start Building Your Own Job Board Now <a href="login.php">Get Started</a></div>
        </div>
    </div>


    <!-- Recent Posts -->
    <div class="container">
        <div class="sixteen columns">
            <h3 class="margin-bottom-25">Recent Posts</h3>
        </div>


        <div class="one-third column">

            <!-- Post #1 -->
            <div class="recent-post">
                <div class="recent-post-img"><a href="blog-single-post.html"><img src="images/recent-post-01.jpg" alt=""></a><div class="hover-icon"></div></div>
                <a href="blog-single-post.html"><h4>Hey Job Seeker, It’s Time To Get Up And Get Hired</h4></a>
                <div class="meta-tags">
                    <span>October 10, 2015</span>
                    <span><a href="#">0 Comments</a></span>
                </div>
                <p>The world of job seeking can be all consuming. From secretly stalking the open reqs page of your dream company to sending endless applications.</p>
                <a href="blog-single-post.html" class="button">Read More</a>
            </div>

        </div>


        <div class="one-third column">

            <!-- Post #2 -->
            <div class="recent-post">
                <div class="recent-post-img"><a href="blog-single-post.html"><img src="images/recent-post-02.jpg" alt=""></a><div class="hover-icon"></div></div>
                <a href="blog-single-post.html"><h4>How to "Woo" a Recruiter and Land Your Dream Job</h4></a>
                <div class="meta-tags">
                    <span>September 12, 2015</span>
                    <span><a href="#">0 Comments</a></span>
                </div>
                <p>Struggling to find your significant other the perfect Valentine’s Day gift? If I may make a suggestion: woo a recruiter. </p>
                <a href="blog-single-post.html" class="button">Read More</a>
            </div>

        </div>

        <div class="one-third column">

            <!-- Post #3 -->
            <div class="recent-post">
                <div class="recent-post-img"><a href="blog-single-post.html"><img src="images/recent-post-03.jpg" alt=""></a><div class="hover-icon"></div></div>
                <a href="blog-single-post.html"><h4>11 Tips to Help You Get New Clients Through Cold Calling</h4></a>
                <div class="meta-tags">
                    <span>August 27, 2015</span>
                    <span><a href="#">0 Comments</a></span>
                </div>
                <p>If your dream employer appears on this list, you’re certainly in good company. But it also means you’re up for some intense competition.</p>
                <a href="blog-single-post.html" class="button">Read More</a>
            </div>
        </div>

    </div>


        <!-- Footer
            ================================================== -->
            <div class="margin-top-15"></div>

            <div id="footer">
                <!-- Main -->
                <div class="container">

                    <div class="seven columns">
                        <h4>About</h4>
                        <p>Morbi convallis bibendum urna ut viverra. Maecenas quis consequat libero, a feugiat eros. Nunc ut lacinia tortor morbi ultricies laoreet ullamcorper phasellus semper.</p>
                        <a href="#" class="button">Get Started</a>
                    </div>

                    <div class="three columns">
                        <h4>Company</h4>
                        <ul class="footer-links">
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Careers</a></li>
                            <li><a href="#">Our Blog</a></li>
                            <li><a href="#">Terms of Service</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Hiring Hub</a></li>
                        </ul>
                    </div>

                    <div class="three columns">
                        <h4>Press</h4>
                        <ul class="footer-links">
                            <li><a href="#">In the News</a></li>
                            <li><a href="#">Press Releases</a></li>
                            <li><a href="#">Awards</a></li>
                            <li><a href="#">Testimonials</a></li>
                            <li><a href="#">Timeline</a></li>
                        </ul>
                    </div>

                    <div class="three columns">
                        <h4>Browse</h4>
                        <ul class="footer-links">
                            <li><a href="#">Freelancers by Category</a></li>
                            <li><a href="#">Freelancers in USA</a></li>
                            <li><a href="#">Freelancers in UK</a></li>
                            <li><a href="#">Freelancers in Canada</a></li>
                            <li><a href="#">Freelancers in Australia</a></li>
                            <li><a href="#">Find Jobs</a></li>

                        </ul>
                    </div>

                </div>

                <!-- Bottom -->
                <div class="container">
                    <div class="footer-bottom">
                        <div class="sixteen columns">
                            <h4>Follow Us</h4>
                            <ul class="social-icons">
                                <li><a class="facebook" href="https://www.facebook.com/capuchino.coffee.980"><i class="icon-facebook"></i></a></li>
                                <li><a class="twitter" href="https://www.facebook.com/capuchino.coffee.980"><i class="icon-twitter"></i></a></li>
                                <li><a class="gplus" href="https://www.facebook.com/capuchino.coffee.980"><i class="icon-gplus"></i></a></li>
                                <li><a class="linkedin" href="https://www.facebook.com/capuchino.coffee.980"><i class="icon-linkedin"></i></a></li>
                            </ul>
                            <div class="copyrights">©  Copyright 2016 by <a href="#">NVT Company</a>. All Rights Reserved.</div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Back To Top Button -->
            <div id="backtotop"><a href="#"></a></div>

        </div>
        <!-- Wrapper / End -->
    <!-- Scripts
        ================================================== -->
        <script src="scripts/jquery-2.1.3.min.js"></script>
        <script src="scripts/custom.js"></script>
        <script src="scripts/jquery.superfish.js"></script>
        <script src="scripts/jquery.themepunch.tools.min.js"></script>
        <script src="scripts/jquery.themepunch.revolution.min.js"></script>
        <script src="scripts/jquery.themepunch.showbizpro.min.js"></script>
        <script src="scripts/jquery.flexslider-min.js"></script>
        <script src="scripts/chosen.jquery.min.js"></script>
        <script src="scripts/jquery.magnific-popup.min.js"></script>
        <script src="scripts/waypoints.min.js"></script>
        <script src="scripts/jquery.counterup.min.js"></script>
        <script src="scripts/jquery.jpanelmenu.js"></script>
        <script src="scripts/stacktable.js"></script>
        <script src="scripts/headroom.min.js"></script>



    <!-- Style Switcher
        ================================================== -->
        <script src="scripts/switcher.js"></script>

        <div id="style-switcher">
            <h2>Style Switcher <a href="#"></a></h2>

            <div>
                <h3>Predefined Colors</h3>
                <ul class="colors" id="color1">
                    <li><a href="#" class="green" title="Green"></a></li>
                    <li><a href="#" class="blue" title="Blue"></a></li>
                    <li><a href="#" class="orange" title="Orange"></a></li>
                    <li><a href="#" class="navy" title="Navy"></a></li>
                    <li><a href="#" class="yellow" title="Yellow"></a></li>
                    <li><a href="#" class="peach" title="Peach"></a></li>
                    <li><a href="#" class="beige" title="Beige"></a></li>
                    <li><a href="#" class="purple" title="Purple"></a></li>
                    <li><a href="#" class="celadon" title="Celadon"></a></li>
                    <li><a href="#" class="pink" title="Pink"></a></li>
                    <li><a href="#" class="red" title="Red"></a></li>
                    <li><a href="#" class="brown" title="Brown"></a></li>
                    <li><a href="#" class="cherry" title="Cherry"></a></li>
                    <li><a href="#" class="cyan" title="Cyan"></a></li>
                    <li><a href="#" class="gray" title="Gray"></a></li>
                    <li><a href="#" class="olive" title="Olive"></a></li>
                </ul>

                <h3>Layout Style</h3>
                <div class="layout-style">
                    <select id="layout-style">
                        <option value="2">Wide</option>
                        <option value="1">Boxed</option>
                    </select>
                </div>

                <h3>Header Style</h3>
                <div class="layout-style">
                    <select id="header-style">
                        <option value="1">Style 1</option>
                        <option value="2">Style 2</option>
                        <option value="3">Style 3</option>
                    </select>
                </div>

                <h3>Background Image</h3>
                <ul class="colors bg" id="bg">
                    <li><a href="#" class="bg1"></a></li>
                    <li><a href="#" class="bg2"></a></li>
                    <li><a href="#" class="bg3"></a></li>
                    <li><a href="#" class="bg4"></a></li>
                    <li><a href="#" class="bg5"></a></li>
                    <li><a href="#" class="bg6"></a></li>
                    <li><a href="#" class="bg7"></a></li>
                    <li><a href="#" class="bg8"></a></li>
                    <li><a href="#" class="bg9"></a></li>
                    <li><a href="#" class="bg10"></a></li>
                    <li><a href="#" class="bg11"></a></li>
                    <li><a href="#" class="bg12"></a></li>
                    <li><a href="#" class="bg13"></a></li>
                    <li><a href="#" class="bg14"></a></li>
                    <li><a href="#" class="bg15"></a></li>
                    <li><a href="#" class="bg16"></a></li>
                </ul>

                <h3>Background Color</h3>
                <ul class="colors bgsolid" id="bgsolid">
                    <li><a href="#" class="green-bg" title="Green"></a></li>
                    <li><a href="#" class="blue-bg" title="Blue"></a></li>
                    <li><a href="#" class="orange-bg" title="Orange"></a></li>
                    <li><a href="#" class="navy-bg" title="Navy"></a></li>
                    <li><a href="#" class="yellow-bg" title="Yellow"></a></li>
                    <li><a href="#" class="peach-bg" title="Peach"></a></li>
                    <li><a href="#" class="beige-bg" title="Beige"></a></li>
                    <li><a href="#" class="purple-bg" title="Purple"></a></li>
                    <li><a href="#" class="red-bg" title="Red"></a></li>
                    <li><a href="#" class="pink-bg" title="Pink"></a></li>
                    <li><a href="#" class="celadon-bg" title="Celadon"></a></li>
                    <li><a href="#" class="brown-bg" title="Brown"></a></li>
                    <li><a href="#" class="cherry-bg" title="Cherry"></a></li>
                    <li><a href="#" class="cyan-bg" title="Cyan"></a></li>
                    <li><a href="#" class="gray-bg" title="Gray"></a></li>
                    <li><a href="#" class="olive-bg" title="Olive"></a></li>
                </ul>
            </div>
            <div id="reset"><a href="#" class="button color">Reset</a></div>
        </div>
    </body>
    </html>
    <!-- =============== Job Details Popup =============== -->
    <div id="small-dialog" class="zoom-anim-dialog mfp-hide apply-popup">
        <div class="modal-body" id="employee_detail">  
        </div>  
    </div>  
    <!-- =============== Job Details Popup =============== -->
    <script>  
       $(document).ready(function(){  
          $('.view_data').click(function(){  
             var j_id = $(this).attr("id");  
             $.ajax({  
                url:"select.php",  
                method:"post",  
                data:{j_id:j_id},  
                success:function(data){  
                   $('#employee_detail').html(data);  
                   $('#dataModal').modal("show");  
               }  
           });  
         });  
      });  
  </script>

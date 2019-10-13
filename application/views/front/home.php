<?php 
if ($this->session->success) { ?>
    <script>alert('<?php echo $this->session->success; ?>');</script>
<?php   }?>
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

        <a href="browse-categories.php" class="button centered">Browse All Categories</a>
        <div class="margin-bottom-50"></div>
    </div>
</div>


<div class="container">


    <!-- Recent Jobs -->
    <div class="eleven columns">
        <div class="padding-right">
            <h3 class="margin-bottom-25">Recent Jobs</h3>
            <ul class="job-list">


                <li class="highlighted">
                    <a href="job-page.php?id=MTQ=&amp;act=st" class="btn btn-info btn-xs view_data" >

                        <img src="<?php echo base_url(); ?>asset/front/company_images/658027.png">

                        <div class="job-list-content">
                            <h4>Full Stack Web Developer                                            
                                <span style="background-color:#27ae60;" class="full-time">Freelance</span>
                            </h4>
                            <div class="job-icons">
                                <span><i class="fa fa-briefcase"></i> Winkit</span>
                                <span><i class="fa fa-map-marker"></i> Khalanbari, Dhaka</span>
                                <span><i class="fa fa-money"></i>Negotable</span>
                            </div>
                        </div>

                        <div class="clearfix"></div>
                    </a>
                </li>
                <li class="highlighted">
                    <a href="job-page.php?id=MTE=&amp;act=st" class="btn btn-info btn-xs view_data" >

                        <img src="<?php echo base_url(); ?>asset/front/company_images/856711.jpg">

                        <div class="job-list-content">
                            <h4>SEO                                            
                                <span style="background-color:#f39c12;" class="full-time">Internship</span>
                            </h4>
                            <div class="job-icons">
                                <span><i class="fa fa-briefcase"></i> Tech Co.</span>
                                <span><i class="fa fa-map-marker"></i> Mohakhale, Dhaka</span>
                                <span><i class="fa fa-money"></i>50k</span>
                            </div>
                        </div>

                        <div class="clearfix"></div>
                    </a>
                </li>
                <li class="highlighted">
                    <a href="job-page.php?id=Mw==&amp;act=st" class="btn btn-info btn-xs view_data" >

                        <img src="<?php echo base_url(); ?>asset/front/company_images/241512.jpg">

                        <div class="job-list-content">
                            <h4>Receptionist                                            
                                <span style="background-color:#d35400;" class="full-time">Part-Time</span>
                            </h4>
                            <div class="job-icons">
                                <span><i class="fa fa-briefcase"></i> UY LAB</span>
                                <span><i class="fa fa-map-marker"></i> Wireless Morh, Mohakhale, Dhaka</span>
                                <span><i class="fa fa-money"></i>20k</span>
                            </div>
                        </div>

                        <div class="clearfix"></div>
                    </a>
                </li>
                <li class="highlighted">
                    <a href="job-page.php?id=Mg==&amp;act=st" class="btn btn-info btn-xs view_data" >

                        <img src="<?php echo base_url(); ?>asset/front/company_images/646259.jpg">

                        <div class="job-list-content">
                            <h4>Graphics Designer                                            
                                <span style="background-color:#2980b9;" class="full-time">Full-Time</span>
                            </h4>
                            <div class="job-icons">
                                <span><i class="fa fa-briefcase"></i> Soft-Tech</span>
                                <span><i class="fa fa-map-marker"></i> Dhanmondi, Dhaka</span>
                                <span><i class="fa fa-money"></i>40k</span>
                            </div>
                        </div>

                        <div class="clearfix"></div>
                    </a>
                </li>
            </ul>

            <a href="browse-jobs.php" class="button centered"><i class="fa fa-plus-circle"></i> Show More Jobs</a>
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

                        <li>
                            <div class="job-spotlight">
                                <a href="#"><h4>Web Developer                                            
                                    <span style="background-color:#27ae60;" class="full-time">Freelance</span>
                                </h4></a>
                                <span><i class="fa fa-briefcase"></i>Tech Co.</span>
                                <span><i class="fa fa-map-marker"></i> Mohakhale, Dhaka</span>
                                <span><i class="fa fa-money"></i>50k</span>
                                <p>This is job description. Want to be a developer contact with us.</p>
                                <a href="job-page.php" class="button">Apply For This Job</a>
                            </div>
                        </li>
                        <li>
                            <div class="job-spotlight">
                                <a href="#"><h4>Graphics Designer                                            
                                    <span style="background-color:#2980b9;" class="full-time">Full-Time</span>
                                </h4></a>
                                <span><i class="fa fa-briefcase"></i>Soft-Tech</span>
                                <span><i class="fa fa-map-marker"></i> Dhanmondi, Dhaka</span>
                                <span><i class="fa fa-money"></i>40k</span>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, yo</p>
                                <a href="job-page.php" class="button">Apply For This Job</a>
                            </div>
                        </li>
                        <li>
                            <div class="job-spotlight">
                                <a href="#"><h4>Receptionist                                            
                                    <span style="background-color:#d35400;" class="full-time">Part-Time</span>
                                </h4></a>
                                <span><i class="fa fa-briefcase"></i>UY LAB</span>
                                <span><i class="fa fa-map-marker"></i> Wireless Morh, Mohakhale, Dhaka</span>
                                <span><i class="fa fa-money"></i>20k</span>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum.</p>
                                <a href="job-page.php" class="button">Apply For This Job</a>
                            </div>
                        </li>
                        <li>
                            <div class="job-spotlight">
                                <a href="#"><h4>SEO                                            
                                    <span style="background-color:#f39c12;" class="full-time">Internship</span>
                                </h4></a>
                                <span><i class="fa fa-briefcase"></i>Tech Co.</span>
                                <span><i class="fa fa-map-marker"></i> Mohakhale, Dhaka</span>
                                <span><i class="fa fa-money"></i>50k</span>
                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, co</p>
                                <a href="job-page.php" class="button">Apply For This Job</a>
                            </div>
                        </li>
                        <li>
                            <div class="job-spotlight">
                                <a href="#"><h4>Full Stack Web Developer                                            
                                    <span style="background-color:#27ae60;" class="full-time">Freelance</span>
                                </h4></a>
                                <span><i class="fa fa-briefcase"></i>Winkit</span>
                                <span><i class="fa fa-map-marker"></i> Khalanbari, Dhaka</span>
                                <span><i class="fa fa-money"></i>Negotable</span>
                                <p>There is colors I like most.
                                    1) Red
                                    2)Black
                                    3)Green
                                    4)Yellow
                                    5) Blue

                                    There is colors I like most.There is colors I like most.There is colors I like most.There is colors I like most.There is colors I like most.
                                There is colors I like most.There is colors I like most.There is colors I like most.There is colors I like most.There is colors I like most.</p>
                                <a href="job-page.php" class="button">Apply For This Job</a>
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
            <div class="recent-post-img"><a href="blog-single-post.php"><img src="<?php echo base_url(); ?>asset/front/images/recent-post-01.jpg" alt=""></a><div class="hover-icon"></div></div>
            <a href="blog-single-post.php"><h4>Hey Job Seeker, It’s Time To Get Up And Get Hired</h4></a>
            <div class="meta-tags">
                <span>October 10, 2015</span>
                <span><a href="#">0 Comments</a></span>
            </div>
            <p>The world of job seeking can be all consuming. From secretly stalking the open reqs page of your dream company to sending endless applications.</p>
            <a href="blog-single-post.php" class="button">Read More</a>
        </div>

    </div>


    <div class="one-third column">

        <!-- Post #2 -->
        <div class="recent-post">
            <div class="recent-post-img"><a href="blog-single-post.php"><img src="<?php echo base_url(); ?>asset/front/images/recent-post-02.jpg" alt=""></a><div class="hover-icon"></div></div>
            <a href="blog-single-post.php"><h4>How to "Woo" a Recruiter and Land Your Dream Job</h4></a>
            <div class="meta-tags">
                <span>September 12, 2015</span>
                <span><a href="#">0 Comments</a></span>
            </div>
            <p>Struggling to find your significant other the perfect Valentine’s Day gift? If I may make a suggestion: woo a recruiter. </p>
            <a href="blog-single-post.php" class="button">Read More</a>
        </div>

    </div>

    <div class="one-third column">

        <!-- Post #3 -->
        <div class="recent-post">
            <div class="recent-post-img"><a href="blog-single-post.php"><img src="<?php echo base_url(); ?>asset/front/images/recent-post-03.jpg" alt=""></a><div class="hover-icon"></div></div>
            <a href="blog-single-post.php"><h4>11 Tips to Help You Get New Clients Through Cold Calling</h4></a>
            <div class="meta-tags">
                <span>August 27, 2015</span>
                <span><a href="#">0 Comments</a></span>
            </div>
            <p>If your dream employer appears on this list, you’re certainly in good company. But it also means you’re up for some intense competition.</p>
            <a href="blog-single-post.php" class="button">Read More</a>
        </div>
    </div>

</div>



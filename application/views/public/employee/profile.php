

<!-- Main Banner Section Start -->	
<div>	 

</div> 
         <!-- Scripts
          ================================================== -->
          <script type="text/javascript" src="<?php echo base_url();?>asset/public/assets1/plugins/js/jquery.min.js"></script>
          <script type="text/javascript" src="<?php echo base_url();?>asset/public/assets1/plugins/js/viewportchecker.js"></script>
          <script type="text/javascript" src="<?php echo base_url();?>asset/public/assets1/plugins/js/bootstrap.min.js"></script>
          <script type="text/javascript" src="<?php echo base_url();?>asset/public/assets1/plugins/js/bootsnav.js"></script>
          <script type="text/javascript" src="<?php echo base_url();?>asset/public/assets1/plugins/js/select2.min.js"></script>
          <script type="text/javascript" src="<?php echo base_url();?>asset/public/assets1/plugins/js/wysihtml5-0.3.0.js"></script>
          <script type="text/javascript" src="<?php echo base_url();?>asset/public/assets1/plugins/js/bootstrap-wysihtml5.js"></script>
          <script type="text/javascript" src="<?php echo base_url();?>asset/public/assets1/plugins/js/datedropper.min.js"></script>
          <script type="text/javascript" src="<?php echo base_url();?>asset/public/assets1/plugins/js/dropzone.js"></script>
          <script type="text/javascript" src="<?php echo base_url();?>asset/public/assets1/plugins/js/loader.js"></script>
          <script type="text/javascript" src="<?php echo base_url();?>asset/public/assets1/plugins/js/owl.carousel.min.js"></script>
          <script type="text/javascript" src="<?php echo base_url();?>asset/public/assets1/plugins/js/slick.min.js"></script>
          <script type="text/javascript" src="<?php echo base_url();?>asset/public/assets1/plugins/js/gmap3.min.js"></script>
          <!-- Custom Js -->
          <script src="<?php echo base_url();?>asset/public/assets1/js/custom.js"></script>
          <script src="<?php echo base_url();?>asset/public/assets1/js/jQuery.style.switcher.js"></script>
          <script type="text/javascript">
            $(document).ready(function() {
            	$('#styleOptions').styleSwitcher();
            });
          </script>
          <script type="text/javascript">

           $.fn.jQuerySimpleCounter = function( options ) {
            var settings = $.extend({
             start:  0,
             end:    100,
             easing: 'swing',
             duration: 400,
             complete: ''
           }, options );

            var thisElement = $(this);

            $({count: settings.start}).animate({count: settings.end}, {
             duration: settings.duration,
             easing: settings.easing,
             step: function() {
              var mathCount = Math.ceil(this.count);
              thisElement.text(mathCount);
            },
            complete: settings.complete
          });
          };


          $('#number1').jQuerySimpleCounter({end: 2500,duration: 5000});
          $('#number2').jQuerySimpleCounter({end: 151655,duration: 5000});
          $('#number3').jQuerySimpleCounter({end: 5654,duration: 5000});
          $('#number4').jQuerySimpleCounter({end: 1565,duration: 5000});



          /* AUTHOR LINK */
          $('.about-me-img').hover(function(){
           $('.authorWindowWrapper').stop().fadeIn('fast').find('p').addClass('trans');
         }, function(){
           $('.authorWindowWrapper').stop().fadeOut('fast').find('p').removeClass('trans');
         });
       </script>
       <script>
        function openRightMenu() {
         document.getElementById("rightMenu").style.display = "block";
       }

       function closeRightMenu() {
         document.getElementById("rightMenu").style.display = "none";
       }
     </script>
   </div>	
 </body>
 </html>         <!-- CONTENT -->
 <div id="content">
   <div class="container">
    <ol  class="breadcrumb">
      <li><a href="<?php echo base_url();?>">Home</a></li>
      <li class="active">Recruiter Login</li>
    </ol>
    <div class="row">
      <div class="col-sm-9 ma25" >
       <div class="top-emp-center p5">
         <h4>My Profile</h4>
       </div>
       

       <div class="row">
        <div class="col-md-12"><!-- <img src="<?php// echo base_url(); ?>uploads/employee/image/ <?php //echo $_SESSION['employee_image']; ?>" alt=""> --></div>
        <div class="col-md-12">Username: <?php echo $_SESSION['employee_username']; ?></div>
        <div class="col-md-12">Email: <?php echo $_SESSION['employee_email']; ?></div>
        <div class="col-sm-3"></div>
        <div class="col-sm-9 m10"> 
          <span id="id1"></span></div>
        </div>

        <div class="row">
          <div class="col-md-12">Name: <?php echo $_SESSION['employee_fullname']; ?></div>
          <div class="col-md-12">Username: <?php echo $_SESSION['employee_username']; ?></div>
          <div class="col-md-12">Email: <?php echo $_SESSION['employee_email']; ?></div>
          <div class="col-sm-3"></div>
          <div class="col-sm-9 m10"> 
            <span id="id1"></span></div>
          </div>
          


          <small>Note : In case you are using a public/shared computer we recommend that you logout to prevent any un-authorized access to your account.</small>
        </div><!--col-sm-9-->

        <div class="col-sm-3" >

          <div class="create-job">
           <div class="create-job-head">
            <h3> My Applied Jobs </h3>
          </div>
          <div class="create-job-content">
           <div class="mem-ben">Create Customized 'Job Alert'</div>
           <p class="mem-ben-p">Get Jobs regularly in your inbox by creating up to 5 personalized Job Alert</p>

           <div class="mem-ben">Create Multiple Profiles</div>
           <p class="mem-ben-p">Create upto 5 customized profiles to apply to jobs in different categories</p>

           <div class="mem-ben">Let Recruiters find you the right job</div>
           <p class="mem-ben-p">Thousands of recruiters search our database daily to find candidates. Get found by them</p>

           <div class="mem-ben">Confidentiality & Privacy Settings</div>
           <p class="mem-ben-p-last">Define your privacy level. Block your current employer from accessing your profile.</p>

           <div class="ali-right"><a href="jobseeker-registration.html"><input class="btn-blue btn bc" value="Register Now " type="button"></a></div>
         </div>
       </div><!--create-job-->

     </div><!--col-sm-3-->

   </div><!--row-->
 </div><!-- container -->

</div><!-- CONTENT -->

<!--ADVANCED SEARCH POPUP-->


<!--CREATE JOB ALERT END-->

<div class="clearfix"></div>
<!-- FOOTER -->


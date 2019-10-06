	<footer class="footer">				
       <div class="row no-padding" >
        <div class="container">  
         <div class="col-md-3 col-sm-12">	
          <div class="footer-widget">
           <h3 class="widgettitle widget-title">Information</h3>
           <div class="textwidget">
            <ul class="footer-navigation">
             <li><a href="<?php echo base_url();?>page/96/about-us" > About Us </a> </li>
             <li><a href="<?php echo base_url();?>page/97/terms-and-conditions" > Terms & Conditions </a></li>
             <li><a href="<?php echo base_url();?>page/98/privacy-policy" > Privacy Policy </a></li>
             <li><a href="<?php echo base_url();?>page/100/contact-us" > Contact Us </a></li>
             <li><a href="<?php echo base_url();?>page/99/help-and-faq" > Help / FAQ </a></li>
         </ul>
     </div>    
 </div><!-- widget-contact -->
</div><!-- col -->
<div class="col-md-3 col-sm-4">	
  <div class="footer-widget">
   <h3 class="widgettitle widget-title">Jobseekers</h3>
   <div class="textwidget">
    <ul class="footer-navigation">
     <li><a href="<?php echo base_url(); ?>employee/login" > Login/Register </a> </li>
                                    <!--<li><a href="#" > Follow Top Recruiters </a></li>
                                    <li><a href="#" > Resume Free Quality Score </a></li>
                                    <li><a href="#" > Career Advice </a></li>
                                    <li><a href="#" > Security Advice </a></li>
                                    <li><a href="#" > Resume Samples </a> </li>
                                    <li><a href="#" > Report a Problem </a></li>-->
                                </ul>
                            </div>
                            <h3 class="widgettitle widget-title">Recruiters</h3>
                            <div class="textwidget">
                            	<ul class="footer-navigation">
                            		<li><a href="recruiter-listing.html" > Browse All Recruiters </a> </li> 
                            		<!--<li><a href="recruiter-listing.html" > Go to OwoRecruiters </a></li>-->
                            		<!--<li><a href="#" > Report a Problem </a></li>-->
                            	</ul>
                            </div>
                        </div><!-- widget-contact -->
                    </div><!-- col -->
                    <div class="col-md-3 col-sm-4">
                    	<div class="footer-widget">							
                    		<h3 class="widgettitle widget-title">Browse Jobs</h3>
                    		<div class="textwidget">
                    			<ul class="footer-navigation">
                    				<li><a href="<?php echo base_url(); ?>jobs" > Browse All Jobs </a> </li>
                                    <!--<li><a href="#" > Premium MBA Jobs </a></li>
                                    	<li><a href="#" > Premium Engineering Jobs </a></li>-->
                                    	<li><a href="<?php echo base_url(); ?>jobs/job-type/Government-Job" > Govt. Jobs </a></li>
                                    	<li><a href="jobsearch_all8b8e.html?sch=2" > International Jobs </a></li>
                                    	<li><a href="job_by_company.html" > Jobs by Company </a> </li>
                                    	<li><a href="job_by_category.html" > Jobs by Category </a></li>
                                    	<li><a href="job_by_area.html" > Jobs by Location </a></li>
                                    </ul>
                                </div>
                            </div><!-- widget-contact -->					
                        </div><!-- col -->
                        <div class="col-md-3 col-sm-4">
                        	<div class="footer-widget">
                        		<h3 class="widgettitle widget-title">Govt Jobs</h3>
                        		<div class="textwidget">
                        			<ul class="footer-navigation">
                        				<li><a href="#" > Location </a></li>
                        			</ul>
                        		</div>
                        		<!-- <h3 class="widgettitle widget-title">Oversea Jobs</h3>
                        		<div class="textwidget">
                        			<ul class="footer-navigation">
                        				<li><a href="job_by_location2b8e.html?loc=2" > All Countries </a> </li>
                        			</ul>
                        		</div> -->
                        		<h3 class="widgettitle widget-title">Employers</h3>
                        		<!-- <div class="textwidget">
                        			<ul class="footer-navigation">
                        				<li><a href="employer-login.html" > Post Jobs </a> </li> -->
                        				<!--<li><a href="#" > Search Resumes</a> </li>-->
                        			<!-- </ul>
                        		</div> -->
                        	</div><!-- widget-contact -->
                        </div><!-- col -->

                    </div><!-- row -->
                </div><!-- container --><!-- footer -->

                <div class="row copyright">
                	<div class="container">
                		<div class="row">
                			<div class="col-sm-6 text-left">
                				<p>Copyright  © <?php echo date('Y');?>. All Rights Reserved </p>
                			</div>
                			<div class="col-sm-6">
                				<ul class="footer-social pull-right">
                					<li><a href="http://www.facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a></li>
                					<li><a href="http://www.googleplus.com/" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                					<li><a href="http://www.twitter.com/" target="_blank"><i class="fa fa-twitter"></i></a></li>
                					<li><a href="https://www.instagram.com/" target="_blank"><i class="fa fa-instagram"></i></a></li>
                					<li><a href="http://www.linkedin.com/" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                				</ul>
                			</div>
                		</div>

                	</div>
                </div>

            </footer>
            <!-- FOOTER -->


            <!-- GO TOP -->
            <a id="go-top"><i class="mt-icons-arrow-up2"></i></a>

            <script >
            	$('#myCarousel').carousel({
            		interval: 40000
            	});

            	$('.carousel .item').each(function(){
            		var next = $(this).next();
            		if (!next.length) {
            			next = $(this).siblings(':first');
            		}
            		next.children(':first-child').clone().appendTo($(this));

            		if (next.next().length>0) {

            			next.next().children(':first-child').clone().appendTo($(this)).addClass('rightest');

            		}
            		else {
            			$(this).siblings(':first').children(':first-child').clone().appendTo($(this));

            		}
            	});
            </script>

            <!--jQUERY-->
            <script src="<?php echo base_url(); ?>asset/public/assets/plugins/jquery/jquery-2.1.3.min.js"></script>

            <!-- BOOTSTRAP JS -->
            <script src="<?php echo base_url(); ?>asset/public/assets/bootstrap/js/bootstrap.min.js"></script>

            <!-- VIEWPORT -->
            <script src="<?php echo base_url(); ?>asset/public/assets/plugins/viewport/jquery.viewport.js"></script>

            <!-- MENU -->
            <script src="<?php echo base_url(); ?>asset/public/assets/plugins/menu/hoverIntent.js"></script>
            <script src="<?php echo base_url(); ?>asset/public/assets/plugins/menu/superfish.js"></script>

            <!-- FANCYBOX -->
            <script src="<?php echo base_url(); ?>asset/public/assets/plugins/fancybox/jquery.fancybox.pack.js"></script>

            <!-- REVOLUTION SLIDER -->
            <script src="<?php echo base_url(); ?>asset/public/assets/plugins/revolutionslider/js/jquery.themepunch.tools.min.js"></script>
            <script src="<?php echo base_url(); ?>asset/public/assets/plugins/revolutionslider/js/jquery.themepunch.revolution.min.js"></script>

            <!-- OWL Carousel -->
            <script src="<?php echo base_url(); ?>asset/public/assets/plugins/owl-carousel/owl.carousel.min.js"></script>

            <!-- PARALLAX -->
            <script src="<?php echo base_url(); ?>asset/public/assets/plugins/parallax/jquery.stellar.min.js"></script>

            <!-- ISOTOPE -->
            <script src="<?php echo base_url(); ?>asset/public/assets/plugins/isotope/imagesloaded.pkgd.min.js"></script>
            <script src="<?php echo base_url(); ?>asset/public/assets/plugins/isotope/isotope.pkgd.min.js"></script>

            <!-- PLACEHOLDER -->
            <script src="<?php echo base_url(); ?>asset/public/assets/plugins/placeholders/jquery.placeholder.min.js"></script>

            <!-- CONTACT FORM VALIDATE & SUBMIT -->
            <script src="<?php echo base_url(); ?>asset/public/assets/plugins/validate/jquery.validate.min.js"></script>
            <script src="<?php echo base_url(); ?>asset/public/assets/plugins/submit/jquery.form.min.js"></script>

            <!-- GOOGLE MAPS -->
            <script src="http://maps.google.com/maps/api/js?sensor=false&amp;language=en"></script>
            <script src="<?php echo base_url(); ?>asset/public/assets/plugins/googlemaps/gmap3.min.js"></script>

            <!-- CHARTS -->
            <script src="<?php echo base_url(); ?>asset/public/assets/plugins/charts/jquery.easypiechart.min.js"></script>

            <!-- COUNTER -->
            <script src="<?php echo base_url(); ?>asset/public/assets/plugins/counter/jQuerySimpleCounter.js"></script>

            <!-- STATISTICS -->
            <script src="<?php echo base_url(); ?>asset/public/assets/plugins/statistics/chart.min.js"></script>

            <!-- YOUTUBE PLAYER -->
            <script src="<?php echo base_url(); ?>asset/public/assets/plugins/ytplayer/jquery.mb.YTPlayer.js"></script>

            <!-- HOVERDIR -->
            <script src="<?php echo base_url(); ?>asset/public/assets/plugins/hoverdir/hoverdir.js"></script>

            <!-- MAGNIFY -->
            <script src="<?php echo base_url(); ?>asset/public/assets/plugins/magnify/jquery.magnify.js"></script>

            <!-- INSTAFEED -->
            <script src="<?php echo base_url(); ?>asset/public/assets/plugins/instafeed/instafeed.min.js"></script>

            <!-- TWITTERFETCHER -->
            <script src="<?php echo base_url(); ?>asset/public/assets/plugins/twitterfetcher/twitterfetcher.js"></script>

            <!-- TEXT ROTATOR -->
            <script src="<?php echo base_url(); ?>asset/public/assets/plugins/text-rotator/jquery.simple-text-rotator.min.js"></script>

            <!-- ANIMATIONS -->
            <script src="<?php echo base_url(); ?>asset/public/assets/plugins/animations/wow.min.js"></script>

            <!-- CUSTOM JS -->
            <script src="<?php echo base_url(); ?>asset/public/assets/js/custom.js"></script>

        </body>

        </html>

        <!--Auto Complete ---------------------------------------------------------------->

        <script type="text/javascript" src="<?php echo base_url(); ?>asset/public/js/jquery-1.10.2.min.html"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>asset/public/assets/js/auto/jquery.autocomplete.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>asset/public/assets/js/auto/jquery.autocomplete.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>asset/public/assets/js/auto/jquery.autocomplete.pack.js"></script>



<!--<script type="text/javascript" src="js/jquery-1.4.2.js"></script>
	<script type="text/javascript" src="js/jquery.autocomplete.js"></script>-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/public/assets/js/auto/jquery.autocomplete.css" />

	<script src="../../../../apis.google.com/js/platform.js" async defer></script>
	<script type="text/javascript">
		function onSignIn(googleUser) {
			var profile = googleUser.getBasicProfile();
        console.log('ID: ' + profile.getId()); // Do not send to your backend! Use an ID token instead.
        console.log('Name: ' + profile.getName());
        console.log('Image URL: ' + profile.getImageUrl());
        console.log('Email: ' + profile.getEmail());
        var id = profile.getId();
        var name = profile.getName();
        var email = profile.getEmail();
        var auth2 = gapi.auth2.getAuthInstance();
        auth2.signOut().then(function () {
		//alert("dfs");
		console.log('User signed out.');
	  // window.location='logout.php'; 
	});
       // alert(id);
       // alert(name);
       // alert(email);

       $.ajax({
       	type: "POST",
       	url: "ajax_google.php",
       	data: "id="+ id + "&name=" + name + "&email=" + email , 
       	success: function(msg){
       // alert(msg);
       window.location='emp_welcome.html';
   }
});
        //alert(profile.getId());
        // alert(profile.getName());
        // alert(profile.getImageUrl());
        // alert(profile.getEmail());
        
    }

</script>
<script>
	function signOut() {

	 // alert("dfsd");
	 var auth2 = gapi.auth2.getAuthInstance();
	 auth2.signOut().then(function () {
		//alert("dfs");
		console.log('User signed out.');
		window.location='employer-login5df0.html'; 
	});

	 
	}
</script>
<script type="text/javascript">
	function advancedsearch()
	{
//alert('ghghghfg');
var adkey = $("#ad-keyword").val();
var location = $("#location").val();
var advindustry = $("#advindustry").val();
var advfarea = $("#advfarea").val();
if(adkey != "" || location != "" || advindustry != ""  || advfarea != "")
{
	$('#advancesearchform').submit();
	return true;
}
else
{
	$('#divsearch').html("<div class='alert'>Please enter Keywords or Location or select Job Category or Industry to search</div>");
	return false;
}
/*
$.ajax({
	type: "POST",
    url: "http://198.38.86.159/~onlineexamboard/demo/advanced-job-portal//ajax_save_jobs.php",
	async:false,
	data: "id="+id+"&seeker_id="+seeker_id,
	success: function(msg){
		alert(msg);
	//window.location='http://198.38.86.159/~onlineexamboard/demo/advanced-job-portal/search.html';
}
});*/
}
</script>
<!--Auto Complete End ------------------------------------------------------------------->
<script type="text/javascript">

	//<![CDATA[

	

	// check-out date >= check-in date

	function customRange(dates) { 

		if (this.id == 'startdate') { 

			$('#enddate').datepick('option', 'minDate', dates[0] || null); 

		} 

		else { 

			$('#startdate').datepick('option', 'maxDate', dates[0] || null); 

		}

		var edt = $('#ed_timestamp').val();

		var sdt = $('#sd_timestamp').val();

		if ((edt > 0) && (sdt > 0)) {

			$('span.nights').text((edt - sdt) / (3600*24) + ' night(s)');

		} else {

			$('span.nights').text('');

		}

	}

	

	$(document).ready(function(){
		

		setTimeout(function(){
            $('.message').slideUp(600);
        },2000);

		$("#keyword").autocomplete("keyskillsearch.html", {

			width: 175,
			formatResult: function(data, value) {
			 //alert(data);
			 return value.split(",")[0];
			}
		});

		$("#ad-keyword").autocomplete("keyskillsearch.html", {
		 	//alert(data);
		 	width: 175,
		 	formatResult: function(data, value) {

		 		return value.split(",")[0];
		 	}
		 });

		$("#location").autocomplete("ajax_joblocation.html", {

			width: 165,
			formatResult: function(data, value) {
				return value.split(",")[0];
			}
		});

		$("#adv-location").autocomplete("ajax_joblocation.html", {

			width: 165,
			formatResult: function(data, value) {
				return value.split(",")[0];
			}
		});
		// Datepick input fields

	/*	$('#startdate').datepick({

			onSelect: customRange, 

			showTrigger: '#trigger',

			altField: '#sd_timestamp', 

			//altFormat: $.datepick.TIMESTAMP

		});

		$('#enddate').datepick({

			onSelect: customRange, 

			showTrigger: '#trigger',

			altField: '#ed_timestamp', 

		//	altFormat: $.datepick.TIMESTAMP

		});
		*/
		

		// Carousel slider

		/*$('.carousel ul').cycle({

			prev: '.previous',

			next: '.next',

			timeout: 6000,

			pause: 1

		});*/

		

		/* tabs */

		//var tabs = $("#tabs").tabs(function () {



			//$("#innerimages").css("display","none");

			//$("#innerimages_loader").css("display","none");

		//});		

		

		// Template setup

	//	Site.setup();



		// Google map setup

		// centerX: 27.9944

		// centerY: -9.84375

		// zoom: 2

		// clustering: true

		// NOTE: hotel list is loaded on the bottom of this file

		//Site.gmapInit(27.9944, -9.84375, 2, true);

		

	});

	

	//]]>

</script>
<script type="text/javascript">
	function chkempty()
	{
		if(tinyMCE.get("job_desc").getContent())
		{

			var idddd = "job_desc";
			alert(job_desc);
			chkkabuse();


		}
	}
	
	
	function chkkabuse(txtid)
	{
		// alert(txtid);
		// exit;
		var idd = txtid;
		//alert(idd);
		var textval =document.getElementById(idd).value;
		//alert(textval);
		if (window.XMLHttpRequest)
		{// code for IE7+, Firefox, Chrome, Opera, Safari
			xmlhttp=new XMLHttpRequest();
		}
		else
		{// code for IE6, IE5
			xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		}
		xmlhttp.onreadystatechange=function()
		{
			if (xmlhttp.readyState==4 && xmlhttp.status==200)
			{
		//alert(xmlhttp.responseText);
		
		//alert(xmlhttp.responseText);
		if(xmlhttp.responseText==0)
		{
			document.getElementById(txtid).focus();
			document.getElementById(txtid).value="";	
		//document.getElementById("name1").innerHTML="<font color='red' style='font-size:12px;'>Don't use abuse words,  </font> ";
		alert ("Don't use abuse words");
		

	}
	else
	{
		//document.getElementById("name1").innerHTML="<font color='#009966' style='font-size:12px;'>good</font>";
	}
}
}
xmlhttp.open("GET.html","chkabuse03d2.html?q="+textval,true);
xmlhttp.send();


}
</script>
<script type="text/javascript">
	function jobalertValidate()
	{
		var keywordalert=$('#keywordalert').val();
		var locationalert=$('#locationalert').val();
		var workexp=$('#workexp').val();
		var indus=$('#indus').val();
		var jobcat=$('#jobcat').val();
		var jobrole=$('#jobrole').val();
		var namealert=$('#namealert').val();
		var emailalert=$('#emailalert').val();

		var clr=0;
		$('.error').hide();
		if(keywordalert=="")
		{
			$('#keywordinfo').html('<span class="error">Please enter keyword</span>');
			$('#keywordalert').focus();
			document.myform1.keywordalert.style.borderColor="red";
			clr=1;
		}
		if(locationalert=="")
		{
			$('#locationinfo').html('<span class="error">Please enter location</span>');
			$('#locationalert').focus();
			document.myform1.locationalert.style.borderColor="red";
			clr=1;
		}
		if(workexp=="")
		{
			$('#workinfo').html('<span class="error">Please enter Experience</span>');
			$('#workexp').focus();
			document.myform1.workexp.style.borderColor="red";
			clr=1;
		}
		if(indus=="")
		{
			$('#industryinfo').html('<span class="error">Please enter industry</span>');
			$('#indus').focus();
			document.myform1.indus.style.borderColor="red";
			clr=1;
		}
		if(jobcat=="")
		{
			$('#categoryinfo').html('<span class="error">Please enter job category</span>');
			$('#jobcat').focus();
			document.myform1.jobcat.style.borderColor="red";
			clr=1;
		}
		if(jobrole=="")
		{
			$('#roleinfo').html('<span class="error">Please enter job role</span>');
			$('#jobrole').focus();
			document.myform1.jobrole.style.borderColor="red";
			clr=1;
		}
		if(namealert=="")
		{
			$('#nameinfo').html('<span class="error">Please enter Name</span>');
			$('#namealert').focus();
			document.myform1.namealert.style.borderColor="red";
			clr=1;
		}
		if(emailalert=="")
		{
			$('#emailinfo').html('<span class="error">Please enter Email</span>');
			$('#emailalert').focus();
			document.myform1.emailalert.style.borderColor="red";
			clr=1;
		}
	// var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;

	if(document.getElementById("inlineCheckbox1").checked == false){
		$('#termsinfo').html('<span class="error">Please agree to the terms and conditions to continue.</span>');
		clr=1;
	} 

	if(clr==0)
	{
		document.myform1.keywordalert.value=1;
		document.myform1.submit();
		return true;
	}
	
}

</script>

<style>
	.error,.redstar{ color:#F00;   font-size: 12px;}
</style>

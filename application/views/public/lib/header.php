<?php
	//echo '<pre>';
	//print_r($this->session); exit;
?>
<!doctype html>
<html lang="en">


<!-- Mirrored from 198.38.86.159/~onlineexamboard/demo/advanced-job-portal/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 14 Apr 2019 20:14:09 GMT -->
<head>

	<!-- Basic Page Needs
		================================================== -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
      <!-- CSS
      	================================================== -->
      	<link rel="stylesheet" href="<?php echo base_url(); ?>asset/public/assets1/plugins/css/plugins.css">
      	<!-- Custom style -->

      	<link rel="stylesheet" href="<?php echo base_url(); ?>asset/public/assets1/css/style.css">
      	<link type="text/css" rel="stylesheet" id="jssDefault" href="<?php echo base_url(); ?>asset/public/assets1/css/colors/green-style.css">
      	<meta charset="utf-8">
      	<meta http-equiv="X-UA-Compatible" content="IE=edge">
      	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
      	<meta name="keywords" content="">
      	<meta name="description" content="">

      	<title><?php
      	if (isset($title)) {
      		 echo $title;
      	}else{
      		echo "Job Portal";
      	}
      	
      	  ?></title>


      	<!-- FAVICON AND APPLE TOUCH -->    
      	<link rel="shortcut icon" href="<?php echo base_url(); ?>asset/public/favicon.png">
      	<link rel="apple-touch-icon-precomposed" sizes="180x180" href="apple-touch-180x180.html">

      	<!-- FONTS -->
      	<link href='https://fonts.googleapis.com/css?family=Noto+Sans:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
      	<!-- <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Raleway:400,500,300">-->
      	<link rel="stylesheet" href="<?php echo base_url(); ?>asset/public/assets/css/font-awesome.min.css">
      	<link rel="stylesheet" href="<?php echo base_url(); ?>asset/public/assets/fonts/icomoon.css">
      	<link href="<?php echo base_url(); ?>asset/public/font-n/stylesheet.css" rel="stylesheet" type="text/css" charset="utf-8" />

      	<!-- BOOTSTRAP CSS -->
      	<link rel="stylesheet" href="<?php echo base_url(); ?>asset/public/assets/bootstrap/css/bootstrap.min.css"> 

      	<!-- MT ICONS -->
      	<link rel="stylesheet" href="<?php echo base_url(); ?>asset/public/assets/fonts/mt-icons/mt-icons.css">

      	<!-- FANCYBOX -->
      	<link rel="stylesheet" href="<?php echo base_url(); ?>asset/public/assets/plugins/fancybox/jquery.fancybox.css">

      	<!-- REVOLUTION SLIDER -->
      	<link rel="stylesheet" href="<?php echo base_url(); ?>asset/public/assets/plugins/revolutionslider/css/settings.css">

      	<!-- OWL Carousel -->
      	<link rel="stylesheet" href="<?php echo base_url(); ?>asset/public/assets/plugins/owl-carousel/owl.carousel.css">
      	<link rel="stylesheet" href="<?php echo base_url(); ?>asset/public/assets/plugins/owl-carousel/owl.transitions.css">

      	<!-- MAGNIFY -->
      	<link rel="stylesheet" href="<?php echo base_url(); ?>asset/public/assets/plugins/magnify/magnify.css">

      	<!-- YOUTUBE PLAYER -->
      	<link rel="stylesheet" href="<?php echo base_url(); ?>asset/public/assets/plugins/ytplayer/css/YTPlayer.css">

      	<!-- TEXT ROTATOR -->
      	<link rel="stylesheet" href="<?php echo base_url(); ?>asset/public/assets/plugins/text-rotator/simpletextrotator.css">

      	<!-- ANIMATIONS -->
      	<link rel="stylesheet" href="<?php echo base_url(); ?>asset/public/assets/plugins/animations/animate.min.css">

      	<!-- CUSTOM & PAGES STYLE -->
      	<link rel="stylesheet" href="<?php echo base_url(); ?>asset/public/assets/css/custom.css">
      	<link rel="stylesheet" href="<?php echo base_url(); ?>asset/public/assets/css/pages-style.css">

      	<style>

      		ul.acc li {
      			margin-top: 10px;
      			margin-left: 4%;
      			display: inline-block;
      			width: 80px;
      			height: 80px;
      			overflow: hidden;
      			/* line-height: 71px; */
      			background:#fff;
      			border-radius: 100%;
      			border: 5px solid #017BC6;
      			margin-right: 19%;
      			margin-bottom: .5em;
      			padding: 20px;
      		}
      		ul.acc li:hover {
      			color:#fff;
      			position: relative;
      			background: rgba(234, 234, 234, 0.27);
      			box-shadow: inset 0 0 20px rgba(0, 0, 0, 0.19); }

      			ul.acc li a {
      				-webkit-transition-duration: 0.7s;
      				-moz-transition-duration: 0.7s;
      				-o-transition-duration: 0.7s;
      				transition-duration: 0.7s;
      				display: block;
      				width: 100%;
      				height: 200%;
      				position: relative;
      				color: #027BC4;

      			}
    /*  ul.acc li a:after {
        text-align: center;
        position: absolute;
        width: inherit;
        height: 50%;
        left: 0;
        bottom: 0;
        line-height: 60px;
        color: #fff; }*/

    </style>

</head>
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

			document.getElementById("name1").innerHTML="<font color='red' style='font-size:12px;'>Don't use abuse words,  </font> ";

		//document.getElementById('name').focus();
		document.getElementById('txtid').value="";
	}
	else
	{
		document.getElementById("name1").innerHTML="<font color='#009966' style='font-size:12px;'>good</font>";
	}
}
}
xmlhttp.open("GET.html","chkabuse03d2.html?q="+textval,true);
xmlhttp.send();


}
</script>
<script type="text/javascript">
	function send_mail(rec_name,rec_mail){
		document.getElementById('recname').value=rec_name;
		document.getElementById('recmail').value=rec_mail;
	}
</script>
<body>

	<div class="modal fade" id="recruiter-listing-send-message" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header" style="background-color: #017BC6; text-align:center;">
					<button type="button" style="color:#FFF;" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 style="color:#FFF; font-weight:bold;" class="modal-title" id="exampleModalLabel">Send Message To : <input class="btn" type="text" style="font-weight:bold; font-size:16px;" id="recname" readonly></h4>
				</div>
				<form action="#" method="post">
					<div class="modal-body">

						<div class="form-group">
							<label for="recipient-name" class="control-label">Email ID:</label>
							<input type="text" class="form-control" id="recipient-name" name="recipient-name" value="">
						</div>
						<div class="form-group">
							<label for="message-text" class="control-label">Message:</label>
							<textarea class="form-control" id="message-text" name="message-text"></textarea>
						</div>

						<div class="form-group">
							<label for="sub-text" class="control-label">Subject:</label>
							<textarea class="form-control" id="sub-text" name="sub-text"></textarea>
						</div>

						<input type="hidden" id="recmail" name="recmail"/>
					</div>
					<div class="modal-footer">

						<input type="submit" class="btn-blue btn bc" name="send_mail" value="Send message"/>
					</div>
				</form>
			</div>
		</div>
	</div>


	<div class="wrapper" id="page-wrapper"> 

		<!-- HEADER -->
		<div id="header-top" >
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="widget widget-pages">
							<ul class="header_top_list black" style="text-align:left;">
								<li><a style="color:black;" href="aboutus.html">About Us</a></li>
								<li><a style="color:black;" href="#"><i class="fa fa-phone" aria-hidden="true"></i> &nbsp;123456789</a></li>
								<li><a style="color:black;" href="mailto:basak.siplu.mirana@gmail.com"><i class="fa fa-envelope-o" aria-hidden="true"></i> &nbsp;basak.siplu.mirana@gmail.com</a></li>
							</ul>
						</div>
					</div><!-- col -->
					<!-- col -->

					<div class="col-sm-6">
						<div class="widget widget-pages">
							<ul class="header_top_list pull-right">
								<li>
									<?php if(!$this->session->employeelogin): ?>
										<a href="<?php echo base_url(); ?>employee/login">
											<i class="fa fa-user" aria-hidden="true"></i>
											Login
										</a>
										<?php else: ?>

											<a href="<?php echo base_url(); ?>employee/profile">
												<i class="fa fa-user" aria-hidden="true"></i>
												<?php echo $this->session->employee_fullname; ?>
											</a>


										<?php endif; ?>
									</li>
									<li>
										<!--<a href="http://198.38.86.159/~onlineexamboard/demo/advanced-job-portal/employer-login.html">-->


											<?php if(!$this->session->employeelogin): ?>
												<a href="<?php echo base_url(); ?>employee/registration">
													<i class="fa fa-pencil-square-o" aria-hidden="true"></i>
													Register
												</a>

												<?php else: ?>

													<a href="<?php echo base_url(); ?>employee/logout">
														<i class="fa fa-pencil-square-o" aria-hidden="true"></i>
														Logout
													</a>


												<?php endif; ?>


											</li>

										</ul>
									</div><!-- widget-pages -->
								</div><!-- col -->

								<!-- <div class="text-right botlink5"><a href="#">Job Seeker? Click here</a>  |  Report a Problem</div>-->
							</div><!-- row -->
						</div><!-- container -->
					</div><!-- header-top -->

					<?php if($this->session->success): ?>
						<p class="alert alert-success" class="message"><?php echo $this->session->success; ?></p>
					<?php endif; ?>

					<?php if($this->session->error): ?>
						<p class="alert alert-warning" class="message"><?php echo $this->session->error; ?></p>

					<?php endif; ?>


					<nav class="navbar navbar-default navbar-light white bootsnav">
						<div class="container">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
								<i class="fa fa-bars"></i>
							</button>
							<!-- Start Header Navigation -->
							<div class="navbar-header">
								<a class="navbar-brand" id="logo" href="<?php echo base_url(); ?>">
									<img src="<?php echo base_url(); ?>asset/public/images/logo-1546865669.png" alt="<?php echo base_url(); ?>">
								</a>
							</div>
							<!-- Collect the nav links, forms, and other content for toggling -->
							<div class="collapse navbar-collapse" id="navbar-menu">
								<ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
									<!--<li><a href="#"><i class="fa fa-sign-in" aria-hidden="true"></i>SignUp</a></li>-->

									<?php if(!$this->session->recruiterlogin): ?>
										<li class="left-br"><a href="<?php echo base_url(); ?>recruiter/login" class="signin">Recruiter's Login</a></li>
										<?php else: ?>

											<li class="left-br"><a href="<?php echo base_url(); ?>recruiter/logout" class="signin">Logout</a></li>
										<?php endif; ?>


									</ul>
									<ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">

										<li><a href="<?php echo base_url(); ?>">Home</a></li>					 
										<li  ><a href="<?php echo base_url(); ?>jobs/search">Jobs</a></li>                    
										<li ><a href="<?php echo base_url(); ?>jobs/job-type/Government-Job">Govt.jobs</a></li>
										<li ><a href="<?php echo base_url(); ?>jobs/job-type/overseas-job">Oversea jobs</a></li>
										<li ><a href="<?php echo base_url(); ?>recruiter/registration">Recruiters</a></li>
										<li  ><a href="<?php echo base_url();?>scholarship">Scholarship</a></li>
									</ul>
								</div>
								<!-- /.navbar-collapse -->
							</div>
						</nav>
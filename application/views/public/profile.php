

<title><?php echo $jobs[0]->job_title;?></title>
<!-- Page Heading Section Start -->	

<!-- Page Heading Section End -->	
<!-- Course Section Start -->	
<div style="padding-top:10px;" class="course-details-page pt-100 pb-70">
	<div class="container">
		<div class="row">

			<?php if($profile[0]->image == null || $profile[0]->image == ''): ?>

				<div style="" class="col-md-6"><img src="<?php echo base_url(); ?>uploads/job/<?php //echo $jobs[0]->job_thumbnail;?>" style="width: 80%; height: 250px;"  alt=""/>
					<div class="">


					<?php endif; ?>	
					<div style="" class="col-md-6"><img src="https://upload.wikimedia.org/wikipedia/commons/1/1e/Default-avatar.jpg" style="width: 80%; height: 250px;"  alt=""/>
						<div class="">


						</div>	
					</div>

					<div class="col-md-6 " style="margin-top: 20px;">
						<div class="tab-content">	
							<!-- Course Overview Tab Content Start-->	
							<div id="overview" class="tab-pane active">				
								<div class="row">				
									<div class="col-md-12">				
										<div class="course-details">	
											<h2 style="font-size: 18px !important;">Name : <?php echo $profile[0]->emp_name;?></h2>

												<h2 style="font-size: 18px !important;">Email:<?php echo $profile[0]->email;?></h2>							
												<h2 style="font-size: 18px !important;">Contact:<?php echo $profile[0]->contact;?></h2>
												<h2 style="font-size: 18px !important;">Address: <?php echo $profile[0]->address;?> </h2>
												<h2 style="font-size: 18px !important;">SSC GPA: <?php echo $profile[0]->ssc_gpa;?> </h2>	
												<h2 style="font-size: 18px !important;">HSC GPA: <?php echo $profile[0]->hsc_gpa;?> </h2>	
												<h2 style="font-size: 18px !important;">Experience: <?php echo $profile[0]->hsc_gpa;?> </h2>	

										</div>																
									</div>								
								</div>																
							</div>	
							<!-- Course Overview Tab Content End-->							

						</div>				
					</div>
					<!-- Course Info Start-->	
					
					<!-- Course Info End-->	
				</div>	
			</div>	
		</div>	

		<!-- Company List -->


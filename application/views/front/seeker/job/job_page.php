


<div id="titlebar" class="photo-bg" style="background: url(images/job-page-photo.jpg)">
	<div class="container">
		<div class="ten columns">
			<span><a href="browse-jobs.html"><?php echo $job->jobcat_name;?></a></span>
			<h2 style="text-transform:uppercase;"><?php echo $job->job_title;?><?php
			if($job->job_type =="Full-Time")
			{
				?>
				<span style="background-color:#2980b9;" class="full-time"><?php echo $job->job_type ;?></span>
				<?php
			}
			else if($job->job_type =="Internship")
			{
				?>
				<span style="background-color:#f39c12;" class="full-time"><?php echo $job->job_type ;?></span>
				<?php   
			}
			else if($job->job_type =="Part-Time")
			{
				?>
				<span style="background-color:#d35400;" class="full-time"><?php echo $job->job_type ;?></span>
				<?php
			}
			else if($job->job_type =="Freelance")
			{
				?>
				<span style="background-color:#27ae60;" class="full-time"><?php echo $job->job_type ;?></span>
				<?php
			}
			?></h2>
		</div>

		<div class="six columns">
			<a href="#" class="button dark"><i class="fa fa-star"></i> Bookmark This Job</a>
		</div>

	</div>
</div>
<div class="container">
	<?php if($this->session->error):?>


		<p style="padding: 7px; color: white; background: #6F6F6F;" class="message"><?php echo $this->session->error; ?></p>
	<?php endif;?>


	<?php if($this->session->success):?>

		<p style="padding: 7px; color: white; background: #6F6F6F;" class="message"><?php echo $this->session->success; ?></p>
	<?php endif;?>
	

	<!-- Recent Jobs -->
	<div class="eleven columns">
		<div class="padding-right">

			<!-- Company Info -->
			<div class="company-info">
				<img src="<?php echo base_url(); ?>asset/front/company_images/27096.jpg" alt="<?php echo $job->company_name;?>">
				<div class="content">
					<h4><?php echo $job->company_name;?></h4>
					<span><a href="<?php echo $job->company_website;?>"><i class="fa fa-link"></i>&nbsp;<?php echo $job->company_website;?></a></span>
					<!-- 	<span><a href="<?php //echo $job['company_twitter'];?>"><i class="fa fa-twitter"></i>&nbsp;<?php //echo $job['company_twitter'];?></a></span> -->
				</div>
				<div class="clearfix"></div>
			</div>

			<p class="margin-reset"><?php echo $job->job_description;?></p>

			<br>

		</div>
	</div>


	<!-- Widgets -->
	<div class="five columns">

		<!-- Sort by -->
		<div class="widget">
			<h4>Overview</h4>

			<div class="job-overview">

				<ul>
					<li>
						<i class="fa fa-map-marker"></i>
						<div>
							<strong>Location:</strong>
							<span style="text-transform:uppercase;"><?php echo $job->location;?></span>
						</div>
					</li>
					<li>
						<i class="fa fa-user"></i>
						<div>
							<strong>Job Title:</strong>
							<span style="text-transform:uppercase;"><?php echo $job->job_title;?></span>
						</div>
					</li>
					<li>
						<i class="fa fa-clock-o"></i>
						<div>
							<strong>Posted On:</strong>
							<span><?php echo date('d-m-Y',strtotime($job->posted_date));?></span>
						</div>
					</li>

					<li>
						<i class="fa fa-clock-o"></i>
						<div>
							<strong>Apply Last Date:</strong>
							<span><?php echo date('d-m-Y',strtotime($job->deadline));?></span>
						</div>
					</li>

					<li>
						<i class="fa fa-money"></i>
						<div>
							<strong>Salary:</strong>
							<span><?php echo $job->salary;?></span>
						</div>
					</li>
				</ul>

				<?php if (!$this->session->seeker) {  ?> 
					<a href="#" onclick="alert('you must have login to apply.')" class="button">Apply For This Job</a>
				<?php }else{?>

					<a href="#small-dialog" class="popup-with-zoom-anim button">Apply For This Job</a>
				<?php  }?>


				<div id="small-dialog" class="zoom-anim-dialog mfp-hide apply-popup">
					<div class="small-dialog-headline">
						<h2>Apply For This Job</h2>
						<p><?php 
						if(isset($errMSG))
						{
							echo $errMSG;
						}
						?></p>
					</div>

					<div class="small-dialog-content">
						<?php echo form_open_multipart('seeker/application/save_application',array('class'=> 'login')) ?>

						<!-- Input Box -->
						<input type="text" name="name" value="<?php echo $this->session->seeker_name; ?>" placeholder="Full Name" />
						<!-- Input Box --> 
						<input type="text" name="application_email" value="<?php echo $this->session->seeker_email; ?>" placeholder="Email Address" />
						<!-- Input Box -->
						<textarea type="text" name="apply_message" placeholder="Your message / cover letter sent to the employer"></textarea>

						<!-- Upload CV -->
						<div class="upload-info"><strong>Upload your CV (optional)</strong> <span>Max. file size: 5MB</span></div>
						<div class="clearfix"></div>

						<!-- Input Box -->

						<input type="file" name="cv">


						<div class="divider"></div>
						<input type="hidden" name="job_id" value="<?php  echo $job->job_id; ?>">
						<button type="submit" class="send" name="submit">Send Application</button>
					</form>
				</div>

			</div>

		</div>

	</div>

</div>
<!-- Widgets / End -->


</div>
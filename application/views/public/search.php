
<!-- Header End -->		


<!-- Page Heading Section Start -->	
<div class="pagehding-sec" style="margin-top: 100px;">
	<div class="images-overlay"></div>		
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="page-heading">
					<h1>Search Jobs</h1>
				</div>

				<div class="page-heading pull-right">
					<form action="<?php echo base_url();?>jobs/search" class="form-inline">
						<input type="text" name="location" class="form-control" placeholder="Location">
						<select name="category" class="form-control">
							<option disabled="" selected>Select Category</option>

							<?php foreach($jobcats as $jobcat): ?>

								<option value="<?php echo $jobcat->jobcat_name; ?>"><?php echo ucfirst( $jobcat->jobcat_name); ?></option>
							<?php endforeach; ?>
							
						</select>
						<input type="text" name="starting_salary" class="form-control" placeholder="Starting salary">
						<input type="text" name="ending_salary"  class="form-control" placeholder="Ending salary">
						<input type="submit" class="btn btn-primary btn-sm" value="Search now">
					</form>
				</div>

				
				
			</div>				
		</div>
	</div>
</div>
<!-- Page Heading Section End -->	
<!-- Course Section Start -->	
<div class="course-page-sec pt-50 pb-70">
	<div class="container">

		<h3 style="margin-top: 10px;">Search Results for <?php echo $searchkey; ?></h3>
		<div class="row">			
			<!-- Course Single Inner Start -->	

			<?php foreach($jobs as $job){ ?>
				<div class="col-md-4 col-sm-6">
					<div class="course-inner">
						<div class="course-thumb" >
							<?php if(empty($job->job_thumbnail) || $job->job_thumbnail == null): ?>

								<img src="https://increasify.com.au/wp-content/uploads/2016/08/default-image.png" alt=""/>

							<?php endif; ?>
							<img src="<?php echo base_url(); ?>uploads/job/<?php echo $job->job_thumbnail;?>"  alt=""/>
							
							<div class="teacher-thumb">
								<img src="<?php echo base_url(); ?>asset/public/img/teacher_1.png" alt=""/>
							</div>
							
							<div class="readmore-button">
								<a href="<?php echo base_url(); ?>jobs/job_single/<?php echo $job->job_id; ?>">Details</a>
							</div>
						</div>
						<div class="course-meta">
							<span class="course-price"><?php echo $job->salary_starting;?></span>
							<span class="course-rating">
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star-o"></i>
								<i class="fa fa-star-o"></i>
							</span>
						</div>						
						<div class="course-desc">
							<h2><a href="course_details.php?id=33"><?php echo $job->job_title ;?></a></h2>
							<span style="font-size: 16px;" class="course-price"><?php echo $job->company_name;?></span>
							<p><p style="text-align: justify;"><?php echo substr($job->job_description , 0,100);?></p>
						</div>
						<div class="course-info">
							<ul>
							</li>
							<li><a href="#"><i class="fa fa-map-marker"></i><?php echo $job->location ;?> </a></li>
							<li><a href="#"><i class="fa fa-calendar"></i><?php echo $job->deadline ;?></a></li>
						</ul>
					</div>
				</div>	
			</div>	

		<?php } ?>
		<!-- Course Single Inner End -->		
		
	</div>			
</div>
</div>
<!-- Course Section End -->		
<!-- Footer Section Start -->
<footer class="footer">	
	
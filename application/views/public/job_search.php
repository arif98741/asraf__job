<!-- Content Section -->
<div id="content-part">

	<div class="container">

		<div class="row" style="margin-top: 40px;">
			<form action="<?php echo base_url(); ?>jobs/search" method="get">

				<div class="col-md-12">
					<div class="row">
						<div class="col-md-2">
							<h4>Search Jobs</h4> 
						</div>
					</div>
					<div class="row">

						<div class="col-md-3">

							<select name="jobcat_id" id="" class="form-control">
								<option value="" disabled="" selected="">Select Category</option>
								<?php foreach($jobcats as $jobcat){ ?>

									<option value="<?php echo $jobcat->jobcat_name; ?>"><?php echo $jobcat->jobcat_name; ?></option>
								<?php } ?>
							</select>


						</div>

						<div class="col-md-3">

							<input type="text" name="location" class="form-control"  placeholder="Enter location">

						</div>

						<div class="col-md-2">

							<input type="text" name="starting_salary" class="form-control" placeholder="Starting salary">

						</div>

						<div class="col-md-2">

							<input type="text" name="ending_salary" class="form-control" placeholder="Upto tk">

						</div>


						<div class="col-md-2">

							<input type="submit" class="btn btn-sm btn-primary" value="Search" placeholder="Search Jobs Here....">

						</div>



					</form>


				</div>
				<br>

				<?php foreach($jobs as $job){ ?>

					<div class="job-list">
						<div class="row">
							<div class="cold-md-3">
								<img src="<?php echo base_url(); ?>uploads/job/<?php echo $job->job_thumbnail ?>" alt="" class="img-fluid">
							</div>
							<div class="cold-md-9">
								<h5><a href="<?php echo base_url();?>jobs/<?php echo $job->job_id;  ?>/<?php echo str_replace(' ', '-', $job->job_title); ?>" class=" text-muted"><?php echo $job->job_title; ?></a></h5>
								<small><strong>Company: <?php echo $job->company_name ?></strong></small><br>
								<small><strong>Salary Range: <?php echo $job->salary/1000; ?>k</strong></small><br>
								<small><?php echo substr($job->job_descri, 0,100); ?><a href="<?php echo base_url();?>jobs/<?php echo $job->job_id;  ?>/<?php echo str_replace(' ', '-', $job->job_title); ?>" class="btn btn-link">Read more</a></small>
							</div>
						</div>
						<br><br>

					</div>
				<?php } ?>
			</div>
		</div>
	</div>
</div>

<!-- Company List -->
<div id="company-list">
	<div class="container">
		<h4 class="text-center text-underline">Featured Companies</h4>
		<div class="row">

			<div class="col-md-2">
				<img src="<?php echo base_url();?>asset/public/asset/img/company/11.png" alt="" class="img-fluid">
			</div>
			<div class="col-md-2">
				<img src="<?php echo base_url();?>asset/public/asset/img/company/12.png" alt="" class="img-fluid">
			</div>
			<div class="col-md-2">
				<img src="<?php echo base_url();?>asset/public/asset/img/company/3.png" alt="" class="img-fluid">
			</div>
			<div class="col-md-2">
				<img src="<?php echo base_url();?>asset/public/asset/img/company/4.png" alt="" class="img-fluid">
			</div>

			<div class="col-md-2">
				<img src="<?php echo base_url();?>asset/public/asset/img/company/5.png" alt="" class="img-fluid">
			</div>

			<div class="col-md-2">
				<img src="<?php echo base_url();?>asset/public/asset/img/company/6.png" alt="" class="img-fluid">
			</div>

		</div>

		<div class="row">

			<div class="col-md-2">
				<img src="<?php echo base_url();?>asset/public/asset/img/company/1.png" alt="" class="img-fluid">
			</div>
			<div class="col-md-2">
				<img src="<?php echo base_url();?>asset/public/asset/img/company/2.png" alt="" class="img-fluid">
			</div>
			<div class="col-md-2">
				<img src="<?php echo base_url();?>asset/public/asset/img/company/10.png" alt="" class="img-fluid">
			</div>
			<div class="col-md-2">
				<img src="<?php echo base_url();?>asset/public/asset/img/company/9.png" alt="" class="img-fluid">
			</div>

			<div class="col-md-2">
				<img src="<?php echo base_url();?>asset/public/asset/img/company/8.png" alt="" class="img-fluid">
			</div>

			<div class="col-md-2">
				<img src="<?php echo base_url();?>asset/public/asset/img/company/7.png" alt="" class="img-fluid">
			</div>

		</div>



	</div>
</div>


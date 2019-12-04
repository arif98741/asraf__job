<div class="div" style="margin-top: 60px;"></div>
<div id="titlebar">
	<div class="container">
		<div class="ten columns">
			<span>We found <?php echo $total_job; ?> jobs matching:</span>
			<h2>Keyword: <i><?php echo $keyword; ?></i></h2>
		</div>

		<div class="six columns">
			<a href="add-job.html" class="button">Post a Job, It’s Free!</a>
		</div>

	</div>
</div>


<!-- Content
	================================================== -->
	<div class="container">
		<!-- Recent Jobs -->
		<div class="eleven columns">
			<div class="padding-right">
				<?php echo form_open_multipart('home/search_action',array('class' => 'list-search')) ?>
				
				<button><i class="fa fa-search"></i></button>
				<input type="text" name="keyword" placeholder="job title, keywords or company name" value=""/>
				<div class="clearfix"></div>
			</form>

			<ul class="job-list full">
				<?php foreach ($jobs as $job) { ?>


					<li><a href="<?php echo base_url(); ?>seeker/job/job_page/<?php echo $job->job_id; ?>">
						<?php if(!empty($job->logo)): ?>
							<img src="<?php echo base_url(); ?>/uploads/company/logo/<?php echo $job->logo; ?>" alt="">


							<?php else: ?>

								<img src="<?php echo base_url(); ?>/uploads/company/logo/default.png" alt="">


							<?php endif; ?>
							<div class="job-list-content">
								<h4><?php echo $job->job_title; ?> 

								<?php if($job->job_type  == 'Full-Time'){?>
									<span class="part-time">Full-Time</span>

								<?php }elseif($job->job_type  == 'Part-Time'){?>
									<span class="full-time">Full-Time</span>

								<?php }elseif($job->job_type  == 'Internship'){?>
									<span class="internship">Internship</span>


								<?php }?>

							</h4>
							<div class="job-icons">
								<span><i class="fa fa-briefcase"></i> <?php echo $job->company_name;?></span>
								<span><i class="fa fa-map-marker"></i> <?php echo $job->location;?></span>
								<span><i class="fa fa-money"></i> <?php //echo $job->rate; ?> / hour</span>
							</div>
							<p>The SEO/SEM Specialist will work with industry leaders and top retailers to define and deliver best practices through innovative SEO methodologies.</p>
						</div>
					</a>
					<div class="clearfix"></div>
				</li>

			<?php } ?>



		</ul>
		<div class="clearfix"></div>

		<div class="pagination-container">
			<nav class="pagination">
				<ul>
					<?php for($i=1; $i<=$total_no_of_pages; $i++){ ?>
						<li><a href="<?php echo base_url(); ?>seeker/job/browse_jobs/<?php echo $i; ?>" <?php if($i == $page_id): ?> class="current-page" <?php endif; ?>><?php echo $i; ?></a></li>
					<?php }?>
				</ul>
			</nav>

			<nav class="pagination-next-prev">
				<ul>
					<?php if($page_id != 1): ?>
						<li><a href="<?php echo base_url(); ?>seeker/job/browse_jobs/<?php echo $previous_page; ?>" class="prev">Previous</a></li>
					<?php endif; ?>

					<?php if($page_id !== $total_no_of_pages): ?>
						<li><a href="<?php echo base_url(); ?>seeker/job/browse_jobs/<?php echo $next_page; ?>" class="next">Next</a></li>

					<?php endif; ?>
				</ul>
			</nav>
		</div>

	</div>
</div>


<!-- Widgets -->
<div class="five columns">

	<!-- Sort by -->
	<div class="widget">
		<h4>Sort by</h4>

		<!-- Select -->
		<select data-placeholder="Choose Category" class="chosen-select-no-single">
			<option selected="selected" value="recent">Newest</option>
			<option value="oldest">Oldest</option>
			<option value="expiry">Expiring Soon</option>
			<option value="ratehigh">Hourly Rate – Highest First</option>
			<option value="ratelow">Hourly Rate – Lowest First</option>
		</select>

	</div>

	<!-- Location -->
	<div class="widget">
		<h4>Location</h4>
		<form action="#" method="get">
			<input type="text" placeholder="State / Province" value=""/>
			<input type="text" placeholder="City" value=""/>

		<!-- 	<input type="text" class="miles" placeholder="Miles" value=""/>
			<label for="zip-code" class="from">from</label>
			<input type="text" id="zip-code" class="zip-code" placeholder="Zip-Code" value=""/><br> -->

			<button class="button">Filter</button>
		</form>
	</div>

	<!-- Job Type -->
	<div class="widget">
		<h4>Job Type</h4>

		<ul class="checkboxes">
			<li>
				<input id="check-1" type="checkbox" name="check" value="check-1" checked>
				<label for="check-1">Any Type</label>
			</li>
			<li>
				<input id="check-2" type="checkbox" name="check" value="check-2">
				<label for="check-2">Full-Time <span>(312)</span></label>
			</li>
			<li>
				<input id="check-3" type="checkbox" name="check" value="check-3">
				<label for="check-3">Part-Time <span>(269)</span></label>
			</li>
			<li>
				<input id="check-4" type="checkbox" name="check" value="check-4">
				<label for="check-4">Internship <span>(46)</span></label>
			</li>
			<li>
				<input id="check-5" type="checkbox" name="check" value="check-5">
				<label for="check-5">Freelance <span>(119)</span></label>
			</li>
		</ul>

	</div>

	<!-- Rate/Hr -->
	<div class="widget">
		<h4>Rate / Hr</h4>

		<ul class="checkboxes">
			<li>
				<input id="check-6" type="checkbox" name="check" value="check-6" checked>
				<label for="check-6">Any Rate</label>
			</li>
			<li>
				<input id="check-7" type="checkbox" name="check" value="check-7">
				<label for="check-7">৳0 - ৳25 <span>(231)</span></label>
			</li>
			<li>
				<input id="check-8" type="checkbox" name="check" value="check-8">
				<label for="check-8">৳25 - ৳50 <span>(297)</span></label>
			</li>
			<li>
				<input id="check-9" type="checkbox" name="check" value="check-9">
				<label for="check-9">৳50 - ৳100 <span>(78)</span></label>
			</li>
			<li>
				<input id="check-10" type="checkbox" name="check" value="check-10">
				<label for="check-10">৳100 - ৳200 <span>(98)</span></label>
			</li>
			<li>
				<input id="check-11" type="checkbox" name="check" value="check-11">
				<label for="check-11">৳200+ <span>(21)</span></label>
			</li>
		</ul>

	</div>



</div>
<!-- Widgets / End -->


</div>
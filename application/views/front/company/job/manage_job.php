<div style="margin-top: 80px;"></div>
<div id="titlebar" class="single">
	<div class="container">

		<div class="sixteen columns">
			<h2>Manage Jobs</h2>
			<nav id="breadcrumbs">
				<ul>
					<li>You are here:</li>
					<li><a href="<?php echo base_url(); ?>">Home</a></li>
					<li>Job Dashboard</li>
				</ul>
			</nav>
		</div>

	</div>
</div>


<div class="container">
	
	<!-- Table -->
	<div class="sixteen columns">

		<p class="margin-bottom-25">Your listings are shown in the table below. Expired listings will be automatically removed after 30 days.</p>

		<table class="manage-table responsive-table">

			<tr>
				<th><i class="fa fa-file-text"></i> Title</th>
				<th><i class="fa fa-check-square-o"></i> Filled?</th>
				<th><i class="fa fa-calendar"></i> Date Posted</th>
				<th><i class="fa fa-calendar"></i> Date Expires</th>
				<th><i class="fa fa-user"></i> Applications</th>
				
				<th></th>
			</tr>

			<?php foreach($jobs as $job){ ?>
				<tr>
					<td class="title"><a href="#"><?php echo $job->job_title; ?> </a></td>
					<td class="centered">-</td>
					<td><?php echo date('F d, Y',strtotime($job->posted_date)); ?></td>
					<td><?php echo date('F d, Y',strtotime($job->deadline)); ?></td>
					<td class="centered"><a href="<?php echo base_url(); ?>company/application/manage_applications/<?php  echo $job->job_id;?>" class="button">Show (<?php echo $job->total_apply; ?>)</a></td>
					<td class="action">
						<a href="#" class="delete"><i class="fa fa-remove"></i> Delete</a>
					</td>
				</tr>
			<?php } ?>

			<!-- Item #2 -->
			

		</table>

		<br>
		<a href="<?php echo base_url(); ?>company/job/add_job" class="button">Add Job</a>

	</div>

</div>
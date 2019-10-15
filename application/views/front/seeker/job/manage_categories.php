<div id="titlebar" class="photo-bg" style="background-image: url(<?php echo base_url(); ?>asset/front/images/all-categories-photo.jpg);" style="margin-top: 100px !important;">
	<div class="container">
		<div class="ten columns">
			<h2>All Categories</h2>
		</div>

		<div class="six columns">
			<a href="add-job.html" class="button">Post a Job, It’s Free!</a>
		</div>

	</div>
</div>


<div id="categories">
	<!-- Categories Group -->
	<div class="categories-group">
		<div class="container">
			<div class="four columns"><h4>Categories</h4></div>
			<div class="four columns">
				<ul>
					<?php foreach ($categories as $category) { ?>
						
						<li><a href="<?php echo base_url(); ?>seeker/job/browse_jobs_by_category/<?php echo $category->jobcat_id; ?>"><?php echo $category->jobcat_name; ?></a></li>
					<?php }?>
					
				</ul>
			</div>
			
		</div>
	</div>
	

</div>
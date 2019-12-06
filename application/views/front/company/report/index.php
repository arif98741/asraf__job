<div style="margin-top: 80px;"></div>
<div id="titlebar" class="single submit-page">
	<div class="container">

		<div class="sixteen columns">
			<h2><i class="fa fa-list-alt"></i> Report</h2>
		</div>

	</div>
</div>
<div class="container">
	
	<!-- Submit Page -->
	<div class="sixteen columns">
		<div class="submit-page">

			<!-- Notice -->
			<div class="notification notice closeable margin-bottom-40">
				<p><span>Please fill up all data correctly</span></p>
			</div>
			<?php echo form_open('company/job/save_job',array()) ?>
			

			<!-- Title -->
			<div class="form">
				<h5>Select your report</h5>
				<div class="form-control">
					<select name="report_type" id="" >
						<option value="">Select Report Type</option>
						<option value="">Select Report Type</option>
					</select>
				</div>

				<input class="search-field" type="text" name="job_title" placeholder="" value=""/>
			</div>

			
			<div class="divider margin-top-0"></div>

			<button class="button big margin-top-5" type="submit" name="add_job">Add Job<i class="fa fa-arrow-circle-right"></i></button>
		</form>
	</div>
</div>

</div>

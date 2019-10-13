<div style="margin-top: 80px;"></div>
<div id="titlebar" class="single submit-page">
	<div class="container">

		<div class="sixteen columns">
			<h2><i class="fa fa-plus-circle"></i> Add Job</h2>
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
				<h5>Job Title</h5>

				<input class="search-field" type="text" name="job_title" placeholder="" value=""/>

			</div>

			<!-- Location -->
			<div class="form">
				<h5>Location <span>(optional)</span></h5>

				<input class="search-field" type="text" name="location" placeholder="e.g. London" value=""/>

				<p class="note">Leave this blank if the location is not important</p>
			</div>

			<!-- Job Type -->
			<div class="form">
				<h5>Job Type</h5>

				<select name="job_type" data-placeholder="Full-Time" class="chosen-select-no-single">
					<option value="" disabled="" selected="">Select Type</option>
					<option value="Full-Time">Full-Time</option>
					<option value="Part-Time">Part-Time</option>
					<option value="Internship">Internship</option>
					<option value="Freelance">Freelance</option>
				</select>

			</div>


			<!-- Choose Category -->
			<div class="form">
				<div class="select">
					<h5>Category</h5>
					<select name="jobcat_id" data-placeholder="Choose Categories" class="chosen-select">
						<option value="" disabled="" selected="">Select Category</option>
						<?php foreach ($jobcats as $jobcat) { ?>
							
						<option value="<?php echo $jobcat->jobcat_id; ?>" ><?php echo $jobcat->jobcat_name; ?></option>
						<?php } ?>
					</select>
				</div>
			</div>

			<!-- Salary -->
			<div class="form">
				<h5>Job Salary <span></span></h5>
				<input class="search-field" type="text" name="salary" placeholder="Salary" value=""/>

				<p class="note"></p>
			</div>

			<!-- Tags -->
			<div class="form">
				<h5>Job Tags <span>(optional)</span></h5>

				<input class="search-field" type="text" name="tags" placeholder="e.g. PHP, Social Media, Management" value=""/>

				<p class="note">Comma separate tags, such as required skills or technologies, for this job.</p>
			</div>


			<!-- Description -->
			<div class="form">
				<h5>Description</h5>

				<textarea class="WYSIWYG" name="job_description" cols="40" rows="3" id="summary" spellcheck="true"></textarea>

			</div>

			<!-- Application email/url -->
			<div class="form">
				<h5>Application email / URL</h5>

				<input type="text" name="joburl" placeholder="Enter an email address or website URL">

			</div>

			<!-- TClosing Date -->
			<div class="form">
				<h5>Closing Date <span>(optional)</span></h5>

				<input data-role="date" type="text" name="deadline" placeholder="yyyy-mm-dd">

				<p class="note">Deadline for new applicants.</p>
			</div>


			<!-- Teagline -->
			<div class="form">
				<h5>Tagline <span>(optional)</span></h5>

				<input type="text" name="tagline" placeholder="Briefly describe your company">

			</div>

			<!-- Logo -->
			<div class="form">
				<h5>Logo <span>(optional)</span></h5>
				<label class="upload-btn">

					<input type="file" name="logo" accept="image/*" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">

					<i class="fa fa-upload"></i> Browse
				</label>
				<span class="fake-input">No file selected</span>
			</div>

			<div class="form">
				<h5>File <span>(optional)</span></h5>
				<label class="upload-btn">

					<input type="file" name="file"  class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">

					<i class="fa fa-upload"></i> Browse
				</label>
				<span class="fake-input">No file selected</span>
			</div>

			<div class="divider margin-top-0"></div>

			<button class="button big margin-top-5" type="submit" name="add_job">Add Job<i class="fa fa-arrow-circle-right"></i></button>
		</form>
	</div>
</div>

</div>

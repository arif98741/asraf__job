<div style="margin-top: 80px;"></div>
<div id="titlebar" class="single submit-page">
	<div class="container">

		<div class="sixteen columns">
			<h2><i class="fa fa-refresh"></i> Update Company Profile</h2>
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
			<?php echo form_open_multipart('company/company/update_profile',array()) ?>
			

			<!-- Title -->
			<div class="form">
				<h5>Company Name</h5>

				<input class="search-field" type="text" name="company_name" placeholder="" value="<?php echo $company->company_name; ?>"/>

			</div>


<!-- Title -->
			<div class="form">
				<h5>Incharge</h5>

				<input class="search-field" type="text" name="full_name" placeholder="" value="<?php echo $company->full_name; ?>"/>

			</div>

			

			<div class="form">
				<h5>Address</h5>

				<input class="search-field" type="text" name="location" placeholder="" value="<?php echo $company->location; ?>"/>

			</div>


			<div class="form">
				<h5>Email</h5>

				<input class="search-field" type="text" name="email" readonly="" placeholder="" value="<?php echo $company->email; ?>"/>

			</div>


			<div class="form">
				<h5>Founded On</h5>

				<input class="search-field" type="text" name="founded_on" placeholder="" value="<?php echo $company->founded_on; ?>"/>

			</div>

			<div class="form">
				<h5>Voter ID</h5>

				<input class="search-field" type="text" name="voter_id" placeholder="" value="<?php echo $company->voter_id; ?>"/>

			</div>

			<div class="form">
				<h5>Trade License</h5>

				<input class="search-field" type="text" name="trade_license" placeholder="" value="<?php echo $company->trade_license; ?>"/>

			</div>

			

			<div class="form">
				<h5>Total Employee</h5>

				<input class="search-field" type="text" name="total_employee" placeholder="" value="<?php echo $company->total_employee; ?>"/>

			</div>


			<div class="form">
				<h5>Company Email</h5>

				<input class="search-field" type="text" name="company_email" placeholder="" value="<?php echo $company->company_email; ?>"/>

			</div>



			<div class="form">
				<h5>Company Contact</h5>

				<input class="search-field" type="text" name="company_contact" placeholder="" value="<?php echo $company->company_contact; ?>"/>
			</div>

			<div class="form">
				<h5>Logo</h5>

				<input class="search-field" type="file" name="logo"/>
			</div>

			<div class="divider margin-top-0"></div>

			<button class="button big margin-top-5" type="submit" name="add_job">Update Company<i class="fa fa-refresh"></i></button>
		</form>
	</div>
</div>

</div>

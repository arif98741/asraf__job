<div id="titlebar" class="resume" style="margin-top: 60px;">
	<div class="container">
		<div class="ten columns">
			<div class="resume-titlebar">

				
				<?php if(!empty($company->logo)): ?>
					<img src="<?php echo base_url(); ?>uploads/company/logo/<?php echo $company->logo; ?>" alt="">
					<?php else: ?>

						<img src="<?php echo base_url(); ?>uploads/company/default.png" alt="">
					<?php endif; ?>

					<div class="resumes-list-content">
						<h4><?php echo $company->company_name; ?> </h4>
						<span class="icons"><i class="fa fa-map-marker"></i> <?php echo $company->location; ?></span>
						
						<div class="clearfix"></div>

					</div>
				</div>
			</div>

			<div class="six columns">
				<div class="two-buttons">

					<a href="<?php echo base_url(); ?>company/company/edit_profile" class=""><i class="fa fa-pencil"></i> Edit Profile</a>
				</div>
			</div>

		</div>
	</div>

	<div class="container">
		<div class="edit columns">
			<h3>Address: <?php echo $company->location; ?></h3>
			<h3>National id: <?php echo $company->voter_id; ?></h3>
			<h3>Trade License: <?php echo $company->trade_license; ?></h3>
			<h3>Founded On: <?php echo $company->founded_on; ?></h3>
			<h3>Total Employee: <?php echo $company->total_employee; ?></h3>
		</div>
	</div>



	
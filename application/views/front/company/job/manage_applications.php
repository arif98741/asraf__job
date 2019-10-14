<div style="margin-top: 80px;"></div>
<div id="titlebar" class="single">
	<div class="container">

		<div class="sixteen columns">
			<h2>Manage Applications</h2>
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
	<h2>You are viewing applications of - <span style="color: green;"><?php echo $singlejob->job_title; ?><span></h2>
		<div class="eight columns">
			<!-- Select -->
			<select id="order_selector" data-placeholder="Newest first" class="" onchange="val()">

				<option value="<?php echo base_url(); ?>company/application/manage_applications/<?php echo $job_id; ?>/newest"><a href="facebook.com">Newest first</a></option>
				<option value="<?php echo base_url(); ?>company/application/manage_applications/<?php echo $job_id; ?>/name">Sort by name</option>
				<option value="<?php echo base_url(); ?>company/application/manage_applications/<?php echo $job_id; ?>/rating">Sort by rating</option>
			</select>
			<script>
				function val() {
					d = document.getElementById("order_selector").value;
					window.location = d;
				}
			</script>
			<div class="margin-bottom-35"></div>
		</div>


		<!-- Applications -->
		<div class="sixteen columns">

			<?php foreach ($applications as $application) { ?>
				

				<div class="application">
					<div class="app-content">

						<!-- Name / Avatar -->
						<div class="info">

							<?php if(!empty($application->image)): ?>
								<img src="<?php echo base_url(); ?>uploads/seeker/<?php echo $application->image; ?>" alt="">
								<?php else: ?>

									<img src="https://www.netclipart.com/pp/m/232-2329525_person-svg-shadow-default-profile-picture-png.png" alt="">
								<?php endif; ?>
								


								<span><?php echo $application->application_fullname; ?></span>
								<ul>
									<li><a href="<?php echo base_url(); ?>uploads/seeker/cv/<?php echo $application->cv; ?>"><i class="fa fa-file-text"></i> Download CV</a></li>
									<li><a href="#"><i class="fa fa-envelope"></i> Contact</a></li>
								</ul>
							</div>

							<!-- Buttons -->
							<div class="buttons">
								<!-- <a href="#one-1" class="button gray app-link"><i class="fa fa-pencil"></i> Edit</a> -->
								<a href="#two-1" class="button gray app-link"><i class="fa fa-sticky-note"></i> Add Note</a>
								<a href="#three-1" class="button gray app-link"><i class="fa fa-plus-circle"></i> Show Details</a>
							</div>
							<div class="clearfix"></div>

						</div>

						<!--  Hidden Tabs -->
						<div class="app-tabs">

							<a href="#" class="close-tab button gray" style="display: none;"><i class="fa fa-close"></i></a>

							<!-- First Tab -->
							<div class="app-tab-content" id="one-1" >

								<div class="select-grid">
									<select data-placeholder="Application Status" class="chosen-select-no-single" style="display: none;">
										<option value="">Application Status</option>
										<option value="new">New</option>
										<option value="interviewed">Interviewed</option>
										<option value="offer">Offer extended</option>
										<option value="hired">Hired</option>
										<option value="archived">Archived</option>
									</select><div class="chosen-container chosen-container-single chosen-container-single-nosearch" style="width: 100%;" title=""><a class="chosen-single chosen-default" tabindex="-1"><span>Application Status</span><div><b></b></div></a><div class="chosen-drop"><div class="chosen-search"><input type="text" autocomplete="off" readonly=""></div><ul class="chosen-results"></ul></div></div>
								</div>

								<div class="select-grid">
									<input type="number" min="1" max="5" placeholder="Rating (out of 5)">
								</div>

								<div class="clearfix"></div>
								<a href="#" class="button margin-top-15">Save</a>
								<a href="#" class="button gray margin-top-15 delete-application">Delete this application</a>

							</div>

							<!-- Second Tab -->
							<div class="app-tab-content" id="two-1" style="display: none;">
								<?php echo form_open('company/application/update_note/'.$application->application_id,array()) ?>

								<textarea name="apply_note" placeholder="Private note regarding this application"><?php echo $application->apply_note; ?></textarea>
								<input type="submit" value="Add Message" class="margin-top-15">
								<!-- 	<a href="#" class="button margin-top-15"></a> -->
								<?php form_close(); ?>
							</div>

							<!-- Third Tab -->
							<div class="app-tab-content" id="three-1" style="display: none;">
								<i>Full Name:</i>
								<span><?php echo $application->application_fullname; ?></span>

								<i>Email:</i>
								<span><a href="mailto:john.doe@example.com"><?php echo $application->application_email; ?></a></span>

								<i>Message:</i>
								<span><?php echo $application->apply_message; ?></span>
							</div>

						</div>

						<!-- Footer -->
						<div class="app-footer">

							<div class="rating three-stars" title="<?php echo $application->rating; ?>">
								<div class="star-rating"></div>
								<div class="star-bg"></div>
							</div>

							<ul>
								<li><i class="fa fa-file-text-o"></i> New</li>
								<li><i class="fa fa-calendar"></i> <?php echo $application->apply_date; ?></li>
							</ul>
							<div class="clearfix"></div>

						</div>
					</div>

				<?php } ?>
			</div>
		</div>
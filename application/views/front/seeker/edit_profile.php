<div class="container" style="margin-top: 60px;">
	
	<!-- Submit Page -->
	<div class="eight columns" style="margin-top: 50px;">
		<div class="submit-page">

			<!-- Linked In -->
			<div class="form">
				<h5>Edit Profile</h5>
				<a href="#" class="button linkedin-btn">Import from LinkedIn</a>
			</div>

			<!-- Email -->
			<div class="form">
				<h5>Your Name</h5>
				<input class="search-field" type="text" name="name" placeholder="Your full name" value="<?php echo $seeker->name; ?>">
			</div>

			<div class="form">
				<h5>Tagline</h5>
				<input class="search-field" type="text" name="tagline"  value="<?php echo $seeker->tagline; ?>">
			</div>



			<div class="form">
				<h5>Email</h5>
				<input class="search-field" type="text" name="email"  value="<?php echo $seeker->email; ?>">
			</div>



			<div class="form">
				<h5>Contact</h5>
				<input class="search-field" type="text" name="mobile"  value="<?php echo $seeker->mobile; ?>">
			</div>

			<div class="form">
				<h5>Address</h5>
				<input class="search-field" type="text" name="address"  value="<?php echo $seeker->address; ?>">
			</div>



			<div class="form">
				<h5>Website</h5>
				<input class="search-field" type="text" name="website"  value="<?php echo $seeker->website; ?>">
			</div>

			

			

			<!-- Logo -->
			<div class="form">
				<h5>Photo <span>(optional)</span></h5>
				<label class="upload-btn">
					<input type="file" multiple="">
					<i class="fa fa-upload"></i> Browse
				</label>
				<span class="fake-input">No file selected</span>
			</div>

			<!-- Email -->
			<div class="form">
				<h5>Video <span>(optional)</span></h5>
				<input class="search-field" type="text" placeholder="A link to a video about you" value="">
			</div>

			<!-- Description -->
			<div class="form">
				<h5>Resume Content</h5>
				<textarea class="WYSIWYG" name="summary" cols="40" rows="3" id="summary" spellcheck="true"></textarea>
			</div>


			<!-- Add URLs -->
			<div class="form with-line">
				<h5>URL(s) <span>(optional)</span></h5>
				<div class="form-inside">
					
					<!-- Adding URL(s) -->
					<div class="form boxed box-to-clone url-box" style="display: none;">
						<a href="#" class="close-form remove-box button"><i class="fa fa-close"></i></a>
						<input class="search-field" type="text" placeholder="Name" value="">
						<input class="search-field" type="text" placeholder="http://" value="">
					</div>

					<a href="#" class="button gray add-url add-box"><i class="fa fa-plus-circle"></i> Add URL</a>
					<p class="note">Optionally provide links to any of your websites or social network profiles.</p>
				</div>
			</div>


			<!-- Education -->


			<!-- Experience  -->
			<div class="form with-line">
				<h5>Experience <span>(optional)</span></h5>
				<div class="form-inside">

					<!-- Add Experience -->
					<div class="form boxed box-to-clone experience-box" style="display: none;">
						<a href="#" class="close-form remove-box button"><i class="fa fa-close"></i></a>
						<input class="search-field" type="text" placeholder="Employer" value="">
						<input class="search-field" type="text" placeholder="Job Title" value="">
						<input class="search-field" type="text" placeholder="Start / end date" value="">
						<textarea name="desc1" id="desc1" cols="30" rows="10" placeholder="Notes (optional)"></textarea>
					</div>

					<a href="#" class="button gray add-experience add-box"><i class="fa fa-plus-circle"></i> Add Experience</a>
				</div>
			</div>


			<div class="divider margin-top-0 padding-reset"></div>
			<a href="#" class="button big margin-top-5">Preview <i class="fa fa-arrow-circle-right"></i></a>

		</div>
	</div>

	<div class="four columns">
		
		
		<div class="form with-line">
			<h5>Education <span>(optional)</span></h5>
			<div class="form-inside">

				<!-- Add Education -->
				<div class="form boxed box-to-clone education-box" style="display: none;">
					<a href="#" class="close-form remove-box button"><i class="fa fa-close"></i></a>
					<input class="search-field" type="text" placeholder="School Name" value="">
					<input class="search-field" type="text" placeholder="Qualification(s)" value="">
					<input class="search-field" type="text" placeholder="Start / end date" value="">
					<textarea name="desc" id="desc" cols="30" rows="10" placeholder="Notes (optional)"></textarea>
				</div>

				<a href="#" class="button gray add-education add-box"><i class="fa fa-plus-circle"></i> Add Education</a>
			</div>
		</div>
	</div>

</div>
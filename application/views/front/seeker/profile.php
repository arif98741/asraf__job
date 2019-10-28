<div id="titlebar" class="resume" style="margin-top: 60px;">
	<div class="container">
		<div class="ten columns">
			<div class="resume-titlebar">

				
				<?php if(!empty($seeker->image)): ?>
					<img src="<?php echo base_url(); ?>uploads/seeker/image/<?php echo $seeker->image; ?>" alt="">
					<?php else: ?>

						<img src="<?php echo base_url(); ?>uploads/seeker/image/default.png" alt="">
					<?php endif; ?>




					<div class="resumes-list-content">
						<h4><?php echo $seeker->name; ?> <span><?php echo $seeker->tagline; ?></span></h4>
						<span class="icons"><i class="fa fa-map-marker"></i> <?php echo $seeker->address; ?></span>
						<span class="icons"><i class="fa fa-money"></i> <?php echo $seeker->rate; ?></span>
						<span class="icons"><a href="<?php echo $seeker->website; ?>"><i class="fa fa-link"></i> Website</a></span>
						<span class="icons"><a href="mailto:<?php echo $seeker->email; ?>"><i class="fa fa-envelope"></i> <?php echo $seeker->email; ?></a></span>
						<div class="skills">
							<?php foreach ($tags as $tag) {?>

								<span><?php echo $tag->tag_name; ?></span>
							<?php 	} ?>

						</div>
						<div class="clearfix"></div>

					</div>
				</div>
			</div>

			<div class="six columns">
				<div class="two-buttons">

					<a href="#edit-profile" class="popup-with-zoom-anim button"><i class="fa fa-pencil"></i> Edit Profile</a>

					<a href="#small-dialog" class="popup-with-zoom-anim button"><i class="fa fa-envelope"></i> Send Message</a>

					<div id="edit-profile" class="zoom-anim-dialog mfp-hide apply-popup">
						<div class="small-dialog-headline">
							<h2>Send Message to <?php echo $seeker->name; ?></h2>
						</div>

						<div class="small-dialog-content">
							<form action="#" method="get">
								<input type="text" placeholder="Full Name" value="">
								<input type="text" placeholder="Email Address" value="">
								<textarea placeholder="Message"></textarea>

								<button class="send">Send Message</button>
							</form>
						</div>

					</div>


					<div id="small-dialog" class="zoom-anim-dialog mfp-hide apply-popup">
						<div class="small-dialog-headline">
							<h2>Send Message to <?php echo $seeker->name; ?></h2>
						</div>

						<div class="small-dialog-content">
							<?php echo form_open('company/message/save_message', array()); ?>
								<input type="text" placeholder="Full Name" value="">
								<input type="text" placeholder="Email your Address" value="">
								<textarea placeholder="Message"></textarea>

								<button type="submit" class="send">Send Message</button>
							</form>
						</div>

					</div>


					<?php if($this->session->seeker): ?>
						<a href="<?php echo base_url(); ?>seeker/seeker/edit_profile" class=" dark"><i class="fa fa-cog"></i> Edit Profile</a>

						<?php endif; ?>

						<a href="#" class="button dark"><i class="fa fa-star"></i> Bookmark This Resume</a>

					</div>
				</div>

			</div>
		</div>

		<div class="container">
			<!-- Recent Jobs -->
			<div class="eight columns">
				<div class="padding-right">

					<h3 class="margin-bottom-15">About Me</h3>

					<p class="margin-reset">
						<?php echo $seeker->about_me; ?>
					</p>



				</div>
			</div>


			<!-- Widgets -->
			<div class="eight columns">

				<h3 class="margin-bottom-20">Education</h3>

				<!-- Resume Table -->
				<dl class="resume-table">
					<?php foreach ($educations as $education) { ?>
						<dt>
							<small class="date"><?php echo $education->grade_year; ?></small>
							<strong><?php echo $education->grade; ?></strong>
						</dt>
						<dd>
							<?php echo $education->grade_description; ?>
						</dd>

					<?php } ?>



				</dl>

			</div>

		</div>
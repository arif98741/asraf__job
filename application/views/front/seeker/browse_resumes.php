<div id="titlebar" style="margin-top: 50px;">
	<div class="container">
		<div class="ten columns">
			<span>We've found 92 resumes for:</span>
			<h2>Web, Software &amp; IT</h2>
		</div>

		<div class="six columns">
			<a href="add-resume.html" class="button">Post a Resume, It’s Free!</a>
		</div>

	</div>
</div>

<div class="container">
	<!-- Recent Jobs -->
	<div class="eleven columns">
		<div class="padding-right">

			<form action="#" method="get" class="list-search">
				<button><i class="fa fa-search"></i></button>
				<input type="text" placeholder="Search freelancer services (e.g. logo design)" value="">
				<div class="clearfix"></div>
			</form>

			<ul class="resumes-list">
				<?php foreach ($seekers as $seeker) { ?>

					<li><a href="<?php echo base_url(); ?>seeker/seeker/profile/<?php echo $seeker->seeker_id; ?>">
						<?php if(!empty($seeker->image)): ?>
							<img src="<?php echo base_url(); ?>uploads/seeker/image/<?php echo $seeker->image; ?>" alt="">
							<?php else: ?>

								<img src="<?php echo base_url(); ?>uploads/seeker/image/default.png" alt="">
							<?php endif; ?>

							<div class="resumes-list-content">
								<h4><?php echo $seeker->name; ?> <span><?php echo $seeker->tagline; ?></span></h4>
								<span><i class="fa fa-map-marker"></i> <?php echo $seeker->address; ?></span>
								<span><i class="fa fa-money"></i><?php echo $seeker->rate; ?></span>
								<p><?php echo $seeker->about_me; ?></p>

								<div class="skills">
									<span>Copywriting</span>
									<span>Content Writing</span>
									<span>Blog Writing</span>
								</div>
								<div class="clearfix"></div>

							</div>
						</a>
						<div class="clearfix"></div>
					</li>	
				<?php  }?>

			</ul>
			<div class="clearfix"></div>

			<div class="pagination-container">
				<nav class="pagination">
							<ul>
								<?php for($i=1; $i<=$total_no_of_pages; $i++){ ?>
									<li><a href="<?php echo base_url(); ?>browse_resumes/<?php echo $i; ?>" <?php if($i == $page_id): ?> class="current-page" <?php endif; ?>><?php echo $i; ?></a></li>
								<?php }?>
							</ul>
						</nav>

						<nav class="pagination-next-prev">
							<ul>
								<?php if($page_id != 1): ?>
									<li><a href="<?php echo base_url(); ?>browse_resumes/<?php echo $previous_page; ?>" class="prev">Previous</a></li>
								<?php endif; ?>

								<?php if($page_id !== $total_no_of_pages): ?>
									<li><a href="<?php echo base_url(); ?>browse_resumes/<?php echo $next_page; ?>" class="next">Next</a></li>
									
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
			<select data-placeholder="Choose Category" class="chosen-select-no-single" style="display: none;">
				<option selected="selected" value="recent">Relevance</option>
				<option value="">Hourly Rate – Highest First</option>
				<option value="">Hourly Rate – Lowest First</option>
			</select><div class="chosen-container chosen-container-single chosen-container-single-nosearch" style="width: 100%;" title=""><a class="chosen-single" tabindex="-1"><span>Relevance</span><div><b></b></div></a><div class="chosen-drop"><div class="chosen-search"><input type="text" autocomplete="off" readonly=""></div><ul class="chosen-results"></ul></div></div>

		</div>

		<!-- Skills -->
		<div class="widget">
			<h4>Skills</h4>

			<!-- Select -->
			<form action="#" method="get">
				<select data-placeholder="Select Skills" class="chosen-select" multiple="" style="display: none;">
					<option value="">Adobe Photoshop</option>
					<option value="">PHP</option>
					<option value="">HTML</option>
					<option value="">CSS</option>
					<option value="">JavaScript</option>
					<option value="">jQuery</option>
					<option value="">MySQL</option>
					<option value="">WordPress</option>
				</select><div class="chosen-container chosen-container-multi" style="width: 100%;" title=""><ul class="chosen-choices"><li class="search-field"><input type="text" value="Select Skills" class="default" autocomplete="off" style="width: 102px;"></li></ul><div class="chosen-drop"><ul class="chosen-results"></ul></div></div>
				<div class="margin-top-15"></div>
				<button class="button">Filter</button>
			</form>
		</div>

		<!-- Location -->
		<div class="widget">
			<h4>Location</h4>
			<form action="#" method="get">
				<input type="text" placeholder="State / Province" value="">
				<input type="text" placeholder="City" value="">

				<input type="text" class="miles" placeholder="Miles" value="">
				<label for="zip-code" class="from">from</label>
				<input type="text" id="zip-code" class="zip-code" placeholder="Zip-Code" value=""><br>

				<button class="button">Filter</button>
			</form>
		</div>

		<!-- Rate/Hr -->
		<div class="widget">
			<h4>Rate / Hr</h4>

			<ul class="checkboxes">
				<li>
					<input id="check-6" type="checkbox" name="check" value="check-6" checked="" class="first">
					<label for="check-6">Any Rate</label>
				</li>
				<li>
					<input id="check-7" type="checkbox" name="check" value="check-7">
					<label for="check-7">$0 - $25 <span>(231)</span></label>
				</li>
				<li>
					<input id="check-8" type="checkbox" name="check" value="check-8">
					<label for="check-8">$25 - $50 <span>(297)</span></label>
				</li>
				<li>
					<input id="check-9" type="checkbox" name="check" value="check-9">
					<label for="check-9">$50 - $100 <span>(78)</span></label>
				</li>
				<li>
					<input id="check-10" type="checkbox" name="check" value="check-10">
					<label for="check-10">$100 - $200 <span>(98)</span></label>
				</li>
				<li>
					<input id="check-11" type="checkbox" name="check" value="check-11">
					<label for="check-11">$200+ <span>(21)</span></label>
				</li>
			</ul>

		</div>



	</div>
	<!-- Widgets / End -->


</div>

<div id="titlebar" class="single" style="margin-top: 50px;">
	<div class="container">

		<div class="sixteen columns">
			<h2>Blog</h2>
			<span>Keep up to date with the latest news</span>
		</div>

	</div>
</div>
<div class="container">

	<!-- Blog Posts -->
	<div class="eleven columns">
		<div class="padding-right">

			<!-- Post -->
			<div class="post-container">

				<?php if(!empty($blog->thumb)): ?>
					<div class="post-img"><a href="#"><img src="<?php echo base_url().'uploads/blog/'.$blog->thumb; ?>" alt=""></a></div>
				<?php endif; ?>

				<div class="post-content">
					<a href="#"><h3><?php echo $blog->blog_title; ?></h3></a>
					<div class="meta-tags">
						<span><?php echo date('F d, Y',strtotime($blog->create)); ?> </span>
						<span><a href="#"><?php echo $total_comment; ?> Comments</a></span>
					</div>
					<div class="clearfix"></div>
					<div class="margin-bottom-25"></div>
					<?php echo $blog->blog_description; ?>
				</div>
			</div>

			<!-- Comments -->
			<section class="comments">
				<h4 id="blog-comment-section">Comments <span class="comments-amount">(<?php echo $total_comment; ?>)</span></h4>

				<ul>

					<?php foreach ($comments as $comment) { ?>
						

						<li>
							<div class="avatar"><img src="http://www.gravatar.com/avatar/00000000000000000000000000000000?d=mm&amp;s=70" alt=""></div>
							<div class="comment-content"><div class="arrow-comment"></div>
							<div class="comment-by"><?php echo $comment->commentor; ?><span class="date"><?php echo date('d F, Y',strtotime($comment->comment_time)); ?></span>
								<!-- <a href="#" class="reply"><i class="fa fa-reply"></i> Reply</a> -->
							</div>
							<p>Morbi velit eros, sagittis in facilisis non, rhoncus et erat. Nam posuere tristique sem, eu ultricies tortor imperdiet vitae. Curabitur lacinia neque non metus</p>
						</div>
					</li>
				<?php } ?>

				
			</ul>
		</section>

		<div class="clearfix"></div>
		<div class="margin-top-35"></div>
		<!-- Add Comment -->
		<h4 class="comment">Add Comment</h4>
		<div class="margin-top-20"></div>

		<!-- Add Comment Form -->
		<?php echo form_open_multipart('blog/save_blog_comment',array('class' => 'add-comment')) ?>

		<fieldset>

			<div>
				<label>Name:</label>
				<input type="text" name="commentor" required="">
			</div>

			<div>
				<label>Email: <span>*</span></label>
				<input type="text" name="comment_email" required="">
			</div>

			<div>
				<label>Comment: <span>*</span></label>
				<textarea cols="40" name="comment" rows="3" required=""></textarea>
				<input type="hidden" name="blog_id" value="<?php echo $blog->blog_id; ?>" >
			</div>

		</fieldset>

		<button type="submit" class="button color">Add Comment</button>
		<div class="clearfix"></div>
		<div class="margin-bottom-20"></div>

	</form>

</div>
</div>
<!-- Blog Posts / End -->


<!-- Widgets -->
<div class="five columns blog">

	<!-- Search -->
	<!-- <div class="widget">
		<h4>Search</h4>
		<div class="widget-box search">
			<div class="input"><input class="search-field" type="text" placeholder="To search type and hit enter" value=""></div>
		</div>
	</div> -->

	<div class="widget">
		<h4>Got any questions?</h4>
		<div class="widget-box">
			<p>If you are having any questions, please feel free to ask.</p>
			<a href="contact.html" class="button widget-btn"><i class="fa fa-envelope"></i> Drop Us a Line</a>
		</div>
	</div>

	<!-- Tabs -->
	<div class="widget">

		<ul class="tabs-nav blog">
			<li class="active"><a href="#tab1">Popular</a></li>
			<li><a href="#tab2">Featured</a></li>
			<li><a href="#tab3">Recent</a></li>
		</ul>

		<!-- Tabs Content -->
		<div class="tabs-container">

			<div class="tab-content" id="tab1" style="display: block;">

				<!-- Recent Posts -->
				<ul class="widget-tabs">

					<!-- Post #1 -->
					<li>
						<div class="widget-thumb">
							<a href="blog-single-post.html"><img src="images/blog-widget-01.png" alt=""></a>
						</div>

						<div class="widget-text">
							<h5><a href="blog-single-post.html">How to "Woo" a Recruiter and Land Your Dream Job</a></h5>
							<span>September 12, 2015</span>
						</div>
						<div class="clearfix"></div>
					</li>

					
				</ul>

			</div>

			<div class="tab-content" id="tab2" style="display: none;">
				
				<!-- Featured Posts -->
				<ul class="widget-tabs">

					<!-- Post #1 -->
					<li>
						<div class="widget-thumb">
							<a href="blog-single-post.html"><img src="images/blog-widget-02.png" alt=""></a>
						</div>

						<div class="widget-text">
							<h5><a href="blog-single-post.html">Hey Job Seeker, It’s Time To Get Up And Get Hired</a></h5>
							<span>October 10, 2015</span>
						</div>
						<div class="clearfix"></div>

					</li>

					<!-- Post #2 -->
					<li>
						<div class="widget-thumb">
							<a href="blog-single-post.html"><img src="images/blog-widget-01.png" alt=""></a>
						</div>

						<div class="widget-text">
							<h5><a href="blog-single-post.html">How4 to "Woo" a Recruiter and Land Your Dream Job</a></h5>
							<span>September 12, 2015</span>
						</div>
						<div class="clearfix"></div>
					</li>

					<!-- Post #3 -->
					<li>
						<div class="widget-thumb">
							<a href="blog-single-post.html"><img src="images/blog-widget-03.png" alt=""></a>
						</div>

						<div class="widget-text">
							<h5><a href="blog-single-post.html">11 Tips to Help You Get New Clients Through Cold Calling</a></h5>
							<span>August 27, 2015</span>
						</div>
						<div class="clearfix"></div>
					</li>
				</ul>
			</div>

			<div class="tab-content" id="tab3" style="display: none;">
				
				<!-- Recent Posts -->
				<ul class="widget-tabs">

					

					<?php foreach ($recent_blogs as $recent_blog) { ?>
						<li>
							<?php if(!empty($blog->thumb)): ?>
								<div class="widget-thumb">
									<a href="<?php echo base_url().'blog/'.$recent_blog->blog_id; ?>"><img src="<?php echo base_url().'uploads/blog/'.$recent_blog->thumb; ?>" alt=""></a>
								</div>

								<?php else: ?>
									<div class="widget-thumb">
										<a href="<?php echo base_url().'blog/'.$recent_blog->blog_id; ?>"><img src="<?php echo base_url(); ?>uploads/blog/default.png" alt=""></a>
									</div>

								<?php endif; ?>

								<div class="widget-text">
									<h5><a href="blog-single-post.html"><?php echo $recent_blog->blog_title; ?></a></h5>
									<span><?php echo date('d F, Y',strtotime($recent_blog->create)); ?></span>
								</div>
								<div class="clearfix"></div>
							</li>

						<?php  } ?>
					</ul>
				</div>

			</div>
		</div>


		<div class="widget">
			<h4>Social</h4>
			<ul class="social-icons">
				<li><a class="facebook" href="#"><i class="icon-facebook"></i></a></li>
				<li><a class="twitter" href="#"><i class="icon-twitter"></i></a></li>
				<li><a class="gplus" href="#"><i class="icon-gplus"></i></a></li>
				<li><a class="linkedin" href="#"><i class="icon-linkedin"></i></a></li>
			</ul>
		</div>

		<div class="clearfix"></div>
		<div class="margin-bottom-40"></div>

	</div>
	<!-- Widgets / End -->


</div>
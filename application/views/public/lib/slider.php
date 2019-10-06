

<!-- Main Banner Section Start -->	
<div>	 

	<div class="banner" style="background-image:url(<?php echo base_url(); ?>asset/public/assets1/img/banner-9.jpg);background-position:top;">
		<div class="container">
			<div class="banner-caption">
				<div class="col-md-12 col-sm-12 banner-text">
					<h1>Browse Jobs</h1>
					<form class="form-horizontal" action="<?php echo base_url();?>jobs/search_result/view?multiskill=234&location=24&category=13" name="homeadvancesearch" method="GET">
						<div class="col-md-4 no-padd">
							<div class="input-group">
								<input class="form-control right-bor" id="keyword" name="multiskill" type="text"  placeholder="Skills, Designations, Companies" value=''>
							</div>
						</div>
						<div class="col-md-3 no-padd">
							<div class="input-group">
								<input class="form-control right-bor" id="location" autocomplete="off" name="location"  type="text" value='' placeholder="Search By Location..">
							</div>
						</div>
						<div class="col-md-3 no-padd">
							<div class="input-group">
								<select id="category" name="category" class="form-control ">

									<option value="">select category</option>
									<?php 
									foreach ($categories as $category) { ?>
										<option value="<?php echo $category->jobcat_id; ?>"><?php echo $category->jobcat_name; ?></option>
									<?php		}?>

								</select>
							</div>
						</div>
						<div class="col-md-2 no-padd">
							<div class="input-group">
								<button type="submit" style="cursor: pointer;" class="btn btn-primary" id="homeadvsearch" type="submit" name="homeadvsearch" value="Search">Search Job</button>
								<span class="avd"><a href="advancesearch.html">Advanced Search</a></span>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>   
		<div class="company-brand">
			<div class="container">
				<div id="company-brands" class="owl-carousel">
					<div class="brand-img">
						<a href="http://www.capgemini.com/">
							<img src="<?php echo base_url(); ?>asset/public/adimages/1546865895.jpg" width="136" height="34" class="img-responsive" title="Capgemini" />
						</a>
					</div>
					<div class="brand-img">
						<a href="https://www.google.com/">
							<img src="<?php echo base_url(); ?>asset/public/adimages/1546865908.jpg" width="136" height="34" class="img-responsive" title="Google" />
						</a>
					</div>
					<div class="brand-img">
						<a href="https://www.cognizant.com/">
							<img src="<?php echo base_url(); ?>asset/public/adimages/1546865920.jpg" width="136" height="34" class="img-responsive" title="Cognizant" />
						</a>
					</div>
					<div class="brand-img">
						<a href="https://www.amazon.com/">
							<img src="<?php echo base_url(); ?>asset/public/adimages/1546865937.jpg" width="136" height="34" class="img-responsive" title="Amazon" />
						</a>
					</div>
					<div class="brand-img">
						<a href="https://www.infosys.com/">
							<img src="<?php echo base_url(); ?>asset/public/adimages/1546865954.jpg" width="136" height="34" class="img-responsive" title="Infosys" />
						</a>
					</div>
					<div class="brand-img">
						<a href="https://www.hcltech.com/">
							<img src="<?php echo base_url(); ?>asset/public/adimages/1546865967.jpg" width="136" height="34" class="img-responsive" title="HCL" />
						</a>
					</div>
					<div class="brand-img">
						<a href="https://www.kotak.com/en.html">
							<img src="<?php echo base_url(); ?>asset/public/adimages/1527831399.gif" width="136" height="34" class="img-responsive" title="KOTAK" />
						</a>
					</div>
					<div class="brand-img">
						<a href="https://www.microsoft.com/">
							<img src="<?php echo base_url(); ?>asset/public/adimages/1546865988.jpg" width="136" height="34" class="img-responsive" title="Microsoft" />
						</a>
					</div>
					<div class="brand-img">
						<a href="https://www2.deloitte.com/in/en.html">
							<img src="<?php echo base_url(); ?>asset/public/adimages/1527831479.gif" width="136" height="34" class="img-responsive" title="Deloitee" />
						</a>
					</div>
					<div class="brand-img">
						<a href="https://hexaware.com/">
							<img src="<?php echo base_url(); ?>asset/public/adimages/1546866011.jpg" width="136" height="34" class="img-responsive" title="Hexaware" />
						</a>
					</div>
					<div class="brand-img">
						<a href="https://www.accenture.com/in-en/new-applied-now">
							<img src="<?php echo base_url(); ?>asset/public/adimages/1527831564.gif" width="136" height="34" class="img-responsive" title="Accenture" />
						</a>
					</div>
					<div class="brand-img">
						<a href="https://www.intel.in/">
							<img src="<?php echo base_url(); ?>asset/public/adimages/1527845906.gif" width="136" height="34" class="img-responsive" title="Intel" />
						</a>
					</div>


				</div>
			</div>
		</div>	
	</div> 	 
</div> 
         <!-- Scripts
         	================================================== -->
         	<script type="text/javascript" src="<?php echo base_url(); ?>asset/public/js/jquery.min.js"></script>
         	<script type="text/javascript" src="<?php echo base_url(); ?>asset/public/assets1/plugins/js/viewportchecker.js"></script>
         	<script type="text/javascript" src="<?php echo base_url(); ?>asset/public/assets1/plugins/js/bootstrap.min.js"></script>
         	<script type="text/javascript" src="<?php echo base_url(); ?>asset/public/assets1/plugins/js/bootsnav.js"></script>
         	<script type="text/javascript" src="<?php echo base_url(); ?>asset/public/assets1/plugins/js/select2.min.js"></script>
         	<script type="text/javascript" src="<?php echo base_url(); ?>asset/public/assets1/plugins/js/wysihtml5-0.3.0.js"></script>
         	<script type="text/javascript" src="<?php echo base_url(); ?>asset/public/assets1/plugins/js/bootstrap-wysihtml5.js"></script>
         	<script type="text/javascript" src="<?php echo base_url(); ?>asset/public/assets1/plugins/js/datedropper.min.js"></script>
         	<script type="text/javascript" src="<?php echo base_url(); ?>asset/public/assets1/plugins/js/dropzone.js"></script>
         	<script type="text/javascript" src="<?php echo base_url(); ?>asset/public/assets1/plugins/js/loader.js"></script>
         	<script type="text/javascript" src="<?php echo base_url(); ?>asset/public/assets1/plugins/js/owl.carousel.min.js"></script>
         	<script type="text/javascript" src="<?php echo base_url(); ?>asset/public/assets1/plugins/js/slick.min.js"></script>
         	<script type="text/javascript" src="<?php echo base_url(); ?>asset/public/assets1/plugins/js/gmap3.min.js"></script>
         	<!-- Custom Js -->
         	<script src="<?php echo base_url(); ?>asset/public/assets1/js/custom.js"></script>
         	<script src="<?php echo base_url(); ?>asset/public/assets1/js/jQuery.style.switcher.js"></script>
         	<script type="text/javascript">
         		$(document).ready(function() {
         			$('#styleOptions').styleSwitcher();
         		});
         	</script>
         	<script type="text/javascript">

         		$.fn.jQuerySimpleCounter = function( options ) {
         			var settings = $.extend({
         				start:  0,
         				end:    100,
         				easing: 'swing',
         				duration: 400,
         				complete: ''
         			}, options );

         			var thisElement = $(this);

         			$({count: settings.start}).animate({count: settings.end}, {
         				duration: settings.duration,
         				easing: settings.easing,
         				step: function() {
         					var mathCount = Math.ceil(this.count);
         					thisElement.text(mathCount);
         				},
         				complete: settings.complete
         			});
         		};


         		$('#number1').jQuerySimpleCounter({end: 2500,duration: 5000});
         		$('#number2').jQuerySimpleCounter({end: 151655,duration: 5000});
         		$('#number3').jQuerySimpleCounter({end: 5654,duration: 5000});
         		$('#number4').jQuerySimpleCounter({end: 1565,duration: 5000});



         		/* AUTHOR LINK */
         		$('.about-me-img').hover(function(){
         			$('.authorWindowWrapper').stop().fadeIn('fast').find('p').addClass('trans');
         		}, function(){
         			$('.authorWindowWrapper').stop().fadeOut('fast').find('p').removeClass('trans');
         		});
         	</script>
         	<script>
         		function openRightMenu() {
         			document.getElementById("rightMenu").style.display = "block";
         		}

         		function closeRightMenu() {
         			document.getElementById("rightMenu").style.display = "none";
         		}
         	</script>
         </div>	
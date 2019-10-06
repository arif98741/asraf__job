

<!-- Main Banner Section Start -->	
<div>	 

	<div class="banner" style="background-image:url(assets1/img/banner-9.jpg);background-position:top;">
		<div class="container">
			<div class="banner-caption">
				<div class="col-md-12 col-sm-12 banner-text">
					<h1>Browse Jobs</h1>
					
					<form  action="<?php echo base_url(); ?>jobs/search_result/view" class="form-horizontal">
						<!-- khub tess -->
						<!-- <?php //echo form_open_multipart('registration/login_action',array(['class'=>'form-horizontal'])) ?> -->
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
										<option value="<?php  echo $category->jobcat_id?>"  ><?php  echo $category->jobcat_name?></option>

									<?php } ?>
								</select>
							</div>
						</div>
						<div class="col-md-2 no-padd">
							<div class="input-group">
								<button type="submit" class="btn btn-primary" id="homeadvsearch" type="submit" value="Search">Search Job</button>
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
							<img src="adimages/1546865895.jpg" width="136" height="34" class="img-responsive" title="Capgemini" />
						</a>
					</div>
					<div class="brand-img">
						<a href="https://www.google.com/">
							<img src="adimages/1546865908.jpg" width="136" height="34" class="img-responsive" title="Google" />
						</a>
					</div>
					<div class="brand-img">
						<a href="https://www.cognizant.com/">
							<img src="adimages/1546865920.jpg" width="136" height="34" class="img-responsive" title="Cognizant" />
						</a>
					</div>
					<div class="brand-img">
						<a href="https://www.amazon.com/">
							<img src="adimages/1546865937.jpg" width="136" height="34" class="img-responsive" title="Amazon" />
						</a>
					</div>
					<div class="brand-img">
						<a href="https://www.infosys.com">
							<img src="adimages/1546865954.jpg" width="136" height="34" class="img-responsive" title="Infosys" />
						</a>
					</div>
					<div class="brand-img">
						<a href="https://www.hcltech.com/">
							<img src="adimages/1546865967.jpg" width="136" height="34" class="img-responsive" title="HCL" />
						</a>
					</div>
					<div class="brand-img">
						<a href="https://www.kotak.com/en.html">
							<img src="adimages/1527831399.gif" width="136" height="34" class="img-responsive" title="KOTAK" />
						</a>
					</div>
					<div class="brand-img">
						<a href="https://www.microsoft.com/">
							<img src="adimages/1546865988.jpg" width="136" height="34" class="img-responsive" title="Microsoft" />
						</a>
					</div>
					<div class="brand-img">
						<a href="https://www2.deloitte.com/in/en.html">
							<img src="adimages/1527831479.gif" width="136" height="34" class="img-responsive" title="Deloitee" />
						</a>
					</div>
					<div class="brand-img">
						<a href="https://hexaware.com/">
							<img src="adimages/1546866011.jpg" width="136" height="34" class="img-responsive" title="Hexaware" />
						</a>
					</div>
					<div class="brand-img">
						<a href="https://www.accenture.com/in-en/new-applied-now">
							<img src="adimages/1527831564.gif" width="136" height="34" class="img-responsive" title="Accenture" />
						</a>
					</div>
					<div class="brand-img">
						<a href="https://www.intel.in">
							<img src="adimages/1527845906.gif" width="136" height="34" class="img-responsive" title="Intel" />
						</a>
					</div>

					
				</div>
			</div>
		</div>	
	</div> 	 
</div> 
         <!-- Scripts
         	================================================== -->
         	<script type="text/javascript" src="assets1/plugins/js/jquery.min.js"></script>
         	<script type="text/javascript" src="assets1/plugins/js/viewportchecker.js"></script>
         	<script type="text/javascript" src="assets1/plugins/js/bootstrap.min.js"></script>
         	<script type="text/javascript" src="assets1/plugins/js/bootsnav.js"></script>
         	<script type="text/javascript" src="assets1/plugins/js/select2.min.js"></script>
         	<script type="text/javascript" src="assets1/plugins/js/wysihtml5-0.3.0.js"></script>
         	<script type="text/javascript" src="assets1/plugins/js/bootstrap-wysihtml5.js"></script>
         	<script type="text/javascript" src="assets1/plugins/js/datedropper.min.js"></script>
         	<script type="text/javascript" src="assets1/plugins/js/dropzone.js"></script>
         	<script type="text/javascript" src="assets1/plugins/js/loader.js"></script>
         	<script type="text/javascript" src="assets1/plugins/js/owl.carousel.min.js"></script>
         	<script type="text/javascript" src="assets1/plugins/js/slick.min.js"></script>
         	<script type="text/javascript" src="assets1/plugins/js/gmap3.min.js"></script>
         	<!-- Custom Js -->
         	<script src="assets1/js/custom.js"></script>
         	<script src="assets1/js/jQuery.style.switcher.js"></script>
         	<script type="text/javascript">
         		$(document).ready(function() {
         			$('#styleOptions').styleSwitcher();
         		});
         	</script>
         	
         </div>	
     </body>
     </html>      

     <!-- CONTENT -->
     <div id="content">
     	<div class="container">
     		<div class="row">
     			<div class="col-md-0"></div>
     			<div class="col-md-11">
     				<ol class="breadcrumb">
     					<li><a href="http://198.38.86.159/~onlineexamboard/demo/advanced-job-portal/">Home</a></li>
     					<li><a href="#"> Jobs</a></li>
     					<li class="active">Search</li>
     				</ol>
     			</div> 
     			<!--col-md-2-->

     			<!--col-md-7-->

     			<div class="col-md-9"><br />	
     				<div class="col-md-6" style="border:1px solid #a1d8ff; height:126px;">
     					<div align="center">
     						<a href="#">
     							<img class="img-responsive" src="http://198.38.86.159/~onlineexamboard/demo/advanced-job-portal/images/quick-search-menu.jpg" alt="Quick Search" title="Quick Search" border="0"  />
     						</a>
     					</div>
     					<div align="center" style="margin-bottom: 10px;">
     						<span class="sub_heading3">View the Names of your job agent , which you have created.</span>
     					</div>
     				</div>


     				<div class="col-md-6" style="border:1px solid #a1d8ff; height:126px;">
     					<div align="center">
     						<a href="#">
     							<img class="img-responsive" src="#" alt="Advanced Search" title="Advanced Search" border="0"  />
     						</a>
     					</div>
     					<div align="center" style="margin-bottom: 10px;">
     						<span class="sub_heading3">Edit the Job Agent details to view the job posted.</span>
     					</div>
     				</div>



     				<div class="col-md-6" style="border:1px solid #a1d8ff; height:126px;">
     					<div align="center">
     						<a href="# ">
     							<img class="img-responsive" src="" alt="Search by Company" title="Search by Company" border="0"  />
     						</a>
     					</div>
     					<div align="center" style="margin-bottom: 10px;">
     						<span class="sub_heading3">List of jobs of  available to the Company </span>
     					</div>
     				</div>


     				<div class="col-md-6" style="border:1px solid #a1d8ff; height:126px;">
     					<div align="center">
     						<a href="#">
     							<img class="img-responsive" src="#" title="Industry wise Search" border="0" />
     						</a>
     					</div>
     					<div align="center" style="margin-bottom: 10px;">
     						<span class="sub_heading3">List of jobs of  available to the users under the different categories</span>
     					</div>
     				</div>
     			</div>
     			<div class="col-md-3">
     				<div class="create-job">
     					<div class="create-job-head">
     						<h3> Create Your Job Alert</h3>
     					</div>
     					<div class="create-job-content">
     						<p>
     							Specify your criteria and Regularly receive jobs of your choice 
     						Be the first to apply for these jobs Stay updated about the job market.</p>
     						<div class="ali-right"><input class="btn-blue btn" data-toggle="modal" data-target="#createjob" value="Create Now" type="button"></div>
     					</div>
     				</div><!--create-job-->

     				<div class="create-job">
     					<div class="create-job-head">
     						<h3> Recruiters </h3>
     					</div>
     					<div class="create-job-content">
     						<p> Connect to recruiters directly. More than 50,000 Recruiter across Industries.</p>
     						<div class="ali-right">  <a href="recruiter-listing.html" class="btn-blue btn" >View All<a></div>
     						</div>
     					</div><!--create-job-->


                    <!--<div class="career-services">
                       <div class="career-services-head">
                         <h3>Career Services</h3>
                       </div>
                        <div class="all-category"> 
                            <ul>
                             <li><a href="">Featured Service</a></li>
                             <li><a href="">Speak to HR Expert</a></li>
                             <li><a href="">Resume Spotlight</a></li>
                             <li><a href="">Career Guidence</a></li>
                             <li><a href="">Salary Negotiator</a></li>
                             <li><a href="">Interview Skills </a></li>
                            </ul>
                         </div>
                     </div>--><!--career-services-->

                   <!-- <div class="career-services">
                       <div class="career-services-head">
                         <h3>Premium Service</h3>
                       </div>
                        <div class="all-category"> 
                            <ul>
                             <li><a href="">Resume Writing</a></li>
                             <li><a href="">Background Verification</a></li>
                             <li><a href="">Aptitude Test</a></li>
                             <li><a href="">Jobs for You</a></li>
                            
                            </ul>
                         </div>
                     </div>-->


                     <div class="create-job">
                     	<div class="create-job-head">
                     		<h3> Featured Companies </h3>
                     	</div>
                     	<div class="create-job-content">
                     		<div class="fea-compa"><a href="#"> <img src="<?php echo base_url(); ?>asset/public/images/featured-companie-1.jpg" alt="featured-companie"></a></div>
                     		<div class="fea-compa"><a href="#"> <img src="<?php echo base_url(); ?>asset/public/images/featured-companie-2.jpg" alt="featured-companie"></a></div>
                     		<div class="fea-compa"><a href="#"> <img src="<?php echo base_url(); ?>asset/public/images/featured-companie-3.jpg" alt="featured-companie"></a></div>
                     		<div class="fea-compa"><a href="#"> <img src="<?php echo base_url(); ?>asset/public/images/featured-companie-4.jpg" alt="featured-companie"></a></div>
                     		<div class="fea-compa"><a href="#"> <img src="<?php echo base_url(); ?>asset/public/images/featured-companie-5.jpg" alt="featured-companie"></a></div>
                     		<div class="fea-compa"><a href="#"> <img src="<?php echo base_url(); ?>asset/public/images/featured-companie-6.jpg" alt="featured-companie"></a></div>
                     	</div>
                     </div><!--create-job-->

                     <div class="openings">
                     	<a href="#"><img src=""<?php echo base_url(); ?>asset/public/images/mg-group.jpg" alt="ads"></a>
                     </div><!--openings-->

                 </div><!--col-md-3-->

             </div><!--row-->
         </div><!-- container -->

     </div><!-- CONTENT -->
     <!--ADVANCED SEARCH POPUP-->

     <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
     	<div class="modal-dialog modal-lg" role="document">
     		<div class="modal-content">
     			<div class="modal-header avd-serbg">
     				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"> <img src="images/close-icon.png"></span></button>
     				<h4 class="modal-title mode-tit" id="myModalLabel">Advanced Search</h4>
     			</div>
     			<div class="modal-body avdbg1a">
     				<div id="divsearch"></div>

     				<div class="form-group m20">
     					<label class="col-sm-4 pedit2 text-right mtop4">Keyskills: </label>
     					<div class="col-sm-5">
     						<input type="text" class="form-control" id="ad-keyword" name="advkeyword" autocomplete="off" placeholder="Skills, Designation. Companies">
     					</div>
     				</div>        
     				<div class="form-group m20">
     					<label class="col-sm-4 pedit2 text-right mtop4">Location: </label>
     					<div class="col-sm-5">
     						<input type="text" id="adv-location" autocomplete="off" name="location" class="form-control" placeholder="Enter the cities you want to work in">
     					</div>
     				</div>   

     				<div class="form-group">
     					<label class="col-sm-4 pedit2 text-right mtop4">Work Experience: </label>
     					<div class="col-sm-2 padno">
     						<div class="col-sm-9">
     							<select name="advexperience" id="advexperience" class="form-control ">
     								<option value="" selected="">Select</option>
     								<!--  <option value="99">Fresher</option>-->
     								<option value="0">0</option>
     								<option value="1">1</option>
     								<option value="2">2</option>
     								<option value="3">3</option>
     								<option value="4">4</option>
     								<option value="5">5</option>
     								<option value="6">6</option>
     								<option value="7">7</option>
     								<option value="8">8</option>
     								<option value="9">9</option>
     								<option value="10">10</option>
     								<option value="11">11</option>
     								<option value="12">12</option>
     								<option value="13">13</option>
     								<option value="14">14</option>
     								<option value="15">15</option>
     								<option value="16">16</option>
     								<option value="17">17</option>
     								<option value="18">18</option>
     								<option value="19">19</option>
     								<option value="20">20</option>
     								<option value="21">21</option>
     								<option value="22">22</option>
     								<option value="23">23</option>
     								<option value="24">24</option>
     								<option value="25">25</option>
     								<option value="25">Above 25 Years</option>
                                       <!--<option value="0" label="0">0</option>
                                       <option value="1" label="1">1</option>
                                       <option value="2" label="2">2</option>
                                       <option value="3" label="3">3</option>
                                       <option value="4" label="4">4</option>-->
                                   </select>
                               </div>
                               <label>Years </label>
                           </div><!--col-sm-6-->
                           <div class="col-sm-3 padno">
                           	<div class="col-sm-8">
                           		<select id="admonths" name="admonths" class="form-control">
                           			<option value="" selected="">Select</option>
                           			<option value="0">0</option>
                           			<option value="1">1</option>
                           			<option value="2">2</option>
                           			<option value="3">3</option>
                           			<option value="4">4</option>
                           			<option value="5">5</option>
                           			<option value="6">6</option>
                           			<option value="7">7</option>
                           			<option value="8">8</option>
                           			<option value="9">9</option>
                           			<option value="10">10</option>
                           			<option value="11">11</option>
                           			<option value="12">12</option>
                           			<option value="13">13</option>
                           			<option value="14">14</option>
                           			<option value="15">15</option>
                           			<option value="16">16</option>
                           			<option value="17">17</option>
                           			<option value="18">18</option>
                           			<option value="19">19</option>
                           			<option value="20">20</option>
                           			<option value="21">21</option>
                           			<option value="22">22</option>
                           			<option value="23">23</option>
                           			<option value="24">24</option>
                           			<option value="25">25</option>
                           			<option value="25">Above 25 Years</option>
                           		</select>
                           	</div>
                           	<label> Months </label>
                           </div>
                       </div>

                       <div class="form-group">
                       	<label class="col-sm-4 pedit2 text-right mtop4">Expected Salary: </label>
                       	<div class="col-sm-2 padno">
                       		<div class="col-sm-10">
                       			<select name="advsalary" class="form-control ">
                       				<option value="" selected="">Min</option>
                       				<option value="0">0 Lacks</option>
                       				<option value="1">1 Lacks</option>
                       				<option value="2">2 Lacks</option>
                       				<option value="3">3 Lacks</option>
                       				<option value="4">4 Lacks</option>
                       				<option value="5">5 Lacks</option>
                       				<option value="6">6 Lacks</option>
                       				<option value="7">7 Lacks</option>
                       				<option value="8">8 Lacks</option>
                       				<option value="9">9 Lacks</option>
                       				<option value="10">10 Lacks</option>
                       				<option value="11">11 Lacks</option>
                       				<option value="12">12 Lacks</option>
                       				<option value="13">13 Lacks</option>
                       				<option value="14">14 Lacks</option>
                       				<option value="15">15 Lacks</option>
                       				<option value="16">16 Lacks</option>
                       				<option value="17">17 Lacks</option>
                       				<option value="18">18 Lacks</option>
                       				<option value="19">19 Lacks</option>
                       				<option value="20">20 Lacks</option>
                       				<option value="21">21 Lacks</option>
                       				<option value="22">22 Lacks</option>
                       				<option value="23">23 Lacks</option>
                       				<option value="24">24 Lacks</option>
                       				<option value="25">25 Lacks</option>

                       				<option value="25">Above 25 Lacks</option>
                                       <!--<option value="99">100000</option>
                                       	<option value="0" label="0">200000</option>-->

                                       </select>
                                   </div>
                                   <label><i class="fa fa-jpy"></i> </label>
                               </div><!--col-sm-6-->
                               <div class="col-sm-3 padno">
                               	<div class="col-sm-10">
                               		<select name="adv_max" class="form-control">
                               			<option value="" selected="">Max</option>
                               			<option value="0">0 Lacks</option>
                               			<option value="1">1 Lacks</option>
                               			<option value="2">2 Lacks</option>
                               			<option value="3">3 Lacks</option>
                               			<option value="4">4 Lacks</option>
                               			<option value="5">5 Lacks</option>
                               			<option value="6">6 Lacks</option>
                               			<option value="7">7 Lacks</option>
                               			<option value="8">8 Lacks</option>
                               			<option value="9">9 Lacks</option>
                               			<option value="10">10 Lacks</option>
                               			<option value="11">11 Lacks</option>
                               			<option value="12">12 Lacks</option>
                               			<option value="13">13 Lacks</option>
                               			<option value="14">14 Lacks</option>
                               			<option value="15">15 Lacks</option>
                               			<option value="16">16 Lacks</option>
                               			<option value="17">17 Lacks</option>
                               			<option value="18">18 Lacks</option>
                               			<option value="19">19 Lacks</option>
                               			<option value="20">20 Lacks</option>
                               			<option value="21">21 Lacks</option>
                               			<option value="22">22 Lacks</option>
                               			<option value="23">23 Lacks</option>
                               			<option value="24">24 Lacks</option>
                               			<option value="25">25 Lacks</option>

                               			<option value="25">Above 25 Lacks</option>
                               		</select>
                               	</div>
                               	<label> <i class="fa fa-jpy"></i> </label>
                               </div>
                           </div>
                           <div class="form-group">
                           	<label class="col-sm-4 pedit2 text-right mtop4"  >Industry:</label>
                           	<div class="col-sm-5">
                           		<select name="advindustry" id="advindustry" class="form-control" placeholder="Select the industry where you want to work">
                           			<option value="">Select</option>

                           			<option value="56">Construction</option>
                           			<option value="53">IT - BPO</option>
                           			<option value="50">IT-ERP-Oracle</option>
                           			<option value="42">KPO/Technical Support</option>
                           			<option value="34">Law Enforcement</option>
                           			<option value="35">Legal/Law</option>
                           			<option value="55">Management</option>
                           			<option value="36">Marketing/Sales</option>
                           			<option value="52">mech</option>
                           			<option value="51">Media </option>
                           			<option value="37">Media/Journalism</option>
                           			<option value="54">NGO/Social Services</option>
                           			<option value="57">Others</option>
                           			<option value="38">Production/Manufacturing/Maintenance</option>
                           			<option value="59">sindhu</option>
                           			<option value="44">Strategy Management</option>
                           			<option value="58">test</option>
                           			<option value="46">test cate</option>
                           			<option value="40">Tours and Travel</option>
                           			<option value="41">Transportation</option>
                           		</select>
                           		You can select at max 2 Industries
                           	</div>
                           </div>

                           <div class="form-group">
                           	<label class="col-sm-4 pedit2 text-right mtop4"  >Job Category:</label>
                           	<div class="col-sm-5">
                           		<select name="advfarea" id="advfarea" class="form-control" placeholder="Select the industry where you want to work">
                           			<option value="">Select</option>
                           			<option value="349">0 - 044 -</option>
                           			<option value="340">Accessory Designer</option>
                           			<option value="99">Accountant</option>
                           			<option value="73">Accounts Assistant</option>
                           			<option value="241">Accounts Manager</option>
                           			<option value="339">AD</option>
                           			<option value="154">Administration</option>
                           			<option value="316">Air Hostess/Steward/Cabin Crew</option>
                           			<option value="183">Anaesthetist</option>
                           			<option value="83">Animator</option>
                           			<option value="176">Apparel / Garment Designer</option>
                           			<option value="136">Architects</option>
                           			<option value="272">Art Director</option>
                           			<option value="258">Asst. Sales Manager</option>
                           			<option value="159">Autocad Draughtman/Designer</option>
                           			<option value="84">AV Executive</option>
                           			<option value="100">Bank Assurance</option>
                           			<option value="101">Banking - General</option>
                           			<option value="211">Banquet Manager</option>
                           			<option value="184">Beautician</option>
                           			<option value="185">Bio-Technology Research</option>
                           			<option value="317">Branch Head</option>
                           			<option value="259">Branch Manager</option>
                           			<option value="286">Building Inspection</option>
                           			<option value="260">Business Analyst</option>
                           			<option value="261">Business Development Executives</option>
                           			<option value="273">Cameraman</option>
                           			<option value="327">Cargo</option>
                           			<option value="137">Carpenter</option>
                           			<option value="74">Chartered Accountant</option>
                           			<option value="186">Chemical Research Scientist</option>
                           			<option value="187">Chemist</option>
                           			<option value="341">chennai</option>
                           			<option value="212">Chief Chef</option>
                           			<option value="160">Chief Engineer</option>
                           			<option value="161">Civil Engineer</option>
                           			<option value="102">Clerk/Office Boy</option>
                           			<option value="247">Company Secretary</option>
                           			<option value="293">Computer Operator/Data Entry</option>
                           			<option value="124">Configuration Manager</option>
                           			<option value="350">Construction</option>
                           			<option value="138">Construction Manager</option>
                           			<option value="274">Content Developer</option>
                           			<option value="139">Controller</option>
                           			<option value="275">Correspondent/Reporter</option>
                           			<option value="75">Cost Accountant</option>
                           			<option value="155">Councellor</option>
                           			<option value="328">Courier/Delivery</option>
                           			<option value="140">Crane Operator</option>
                           			<option value="262">Customer Relationship Officer</option>
                           			<option value="112">Customer Service Executive (Non Voice)</option>
                           			<option value="113">Customer Service Executive (Voice)</option>
                           			<option value="162">Customer Service/Tech. Support</option>
                           			<option value="223">Data Entry/Computer Operator</option>
                           			<option value="114">Data Processing Executive</option>
                           			<option value="125">Database Administrator</option>
                           			<option value="298">Database Programmer</option>
                           			<option value="297">DBA</option>
                           			<option value="188">Dentist</option>
                           			<option value="189">Dietician</option>
                           			<option value="329">Dockworker</option>
                           			<option value="190">Doctor</option>
                           			<option value="318">Documentation and Visa</option>
                           			<option value="319">Domestic Travel</option>
                           			<option value="191">ECG/CGA Technician</option>
                           			<option value="163">Electrical Engineer</option>
                           			<option value="141">Electrician</option>
                           			<option value="164">Engineer</option>
                           			<option value="143">Equipment Operator</option>
                           			<option value="103">Equity Analyst</option>
                           			<option value="85">Event Coordinator</option>
                           			<option value="86">Event/Promotios Manager</option>
                           			<option value="76">External Auditor</option>
                           			<option value="213">F & B Manager</option>
                           			<option value="126">Faculty</option>
                           			<option value="77">Finance Assistant</option>
                           			<option value="165">Foreman</option>
                           			<option value="330">Forklift Operator</option>
                           			<option value="214">Front Office Executive</option>
                           			<option value="345">gdfgdf</option>
                           			<option value="263">GM- Marketing</option>
                           			<option value="294">Graphic Designer /Animator</option>
                           			<option value="320">Ground Staff</option>
                           			<option value="127">H/W Installation / Maintenance Engg</option>
                           			<option value="128">Hardware Design Technical Leader</option>
                           			<option value="347">having 7 years exp. as a professional medical representative with flaring formulation, abbott health</option>
                           			<option value="348">having 7 years exp. as a professional medical representative with flaring formulation, abbott health</option>
                           			<option value="144">Heavy Equipment Operator</option>
                           			<option value="215">Hostess</option>
                           			<option value="193">House Keeping</option>
                           			<option value="216">House Keeping Executive</option>
                           			<option value="225">HR Executive / Recruiter</option>
                           			<option value="226">HR Manager</option>
                           			<option value="129">Instructional Designer</option>
                           			<option value="104">Insurance / Financial Advisor</option>
                           			<option value="105">Insurance Telesales</option>
                           			<option value="166">Interior Designer</option>
                           			<option value="78">Internal Auditor</option>
                           			<option value="343">it software- application programming / maintenance</option>
                           			<option value="346">IT-ERP- Business Analyst</option>
                           			<option value="177">Jewellery Designer</option>
                           			<option value="217">Kitchen Manager</option>
                           			<option value="194">Lab Technician</option>
                           			<option value="146">Laborer</option>
                           			<option value="248">Law Officer</option>
                           			<option value="249">Lawyer</option>
                           			<option value="250">Legal Adviser</option>
                           			<option value="251">Legal Assistant</option>
                           			<option value="252">Legal Consultant</option>
                           			<option value="253">Legal Editor</option>
                           			<option value="254">Legal Services - Manager</option>
                           			<option value="156">Librarian</option>
                           			<option value="331">Logistics Manager</option>
                           			<option value="235">Machine Operator</option>
                           			<option value="236">Machinist</option>
                           			<option value="237">Maintenance Supervisor</option>
                           			<option value="321">Management Trainee</option>
                           			<option value="322">Manager</option>
                           			<option value="79">Manager - Accounts</option>
                           			<option value="80">Manager- Finance Planning</option>
                           			<option value="228">Manager/Co-ordinator</option>
                           			<option value="264">Marketing Executives</option>
                           			<option value="265">Marketing Manager</option>
                           			<option value="167">Mechanical Engineer</option>
                           			<option value="238">Mechanical Technician</option>
                           			<option value="89">Media Planning - Manager / Executive</option>
                           			<option value="195">Medical Assistant</option>
                           			<option value="196">Medical Representative</option>
                           			<option value="115">Medical Transcriptionist</option>
                           			<option value="197">Medical Writer</option>
                           			<option value="179">Merchandiser</option>
                           			<option value="198">Microbiologist</option>
                           			<option value="148">Mining</option>
                           			<option value="107">Mutual Funds</option>
                           			<option value="130">Network Administrator</option>
                           			<option value="131">Network Designer</option>
                           			<option value="295">Network Engineer</option>
                           			<option value="278">News Editor</option>
                           			<option value="279">News Reador</option>
                           			<option value="199">Nurse</option>
                           			<option value="200">Nutritionist</option>
                           			<option value="323">Office Assistant</option>
                           			<option value="229">Office Secretary/AdminOfficer</option>
                           			<option value="287">Officer</option>
                           			<option value="108">Operations</option>
                           			<option value="332">Operations Management</option>
                           			<option value="201">Opthamologist</option>
                           			<option value="296">Oracle Developer</option>
                           			<option value="132">Other</option>
                           			<option value="149">Painter</option>
                           			<option value="256">Patent</option>
                           			<option value="203">Pharmaceutical Research</option>
                           			<option value="204">Pharmacist</option>
                           			<option value="300">Photoshop</option>
                           			<option value="205">Physician</option>
                           			<option value="206">Physiotherapist</option>
                           			<option value="150">Plumber</option>
                           			<option value="288">Process Engineer</option>
                           			<option value="122">Process Engineers</option>
                           			<option value="281">Production Manager</option>
                           			<option value="289">Production Quality Assurance</option>
                           			<option value="301">Programmer</option>
                           			<option value="169">Project Manager</option>
                           			<option value="282">Proof Reader</option>
                           			<option value="257">Proof Reader (Law)</option>
                           			<option value="207">Public Health Administration</option>
                           			<option value="231">Public Relation Officer</option>
                           			<option value="312">QA</option>
                           			<option value="290">Quality Assurance Engineer</option>
                           			<option value="291">Quality Assurance Manager</option>
                           			<option value="292">Quality Control Inspector</option>
                           			<option value="208">Radiographer</option>
                           			<option value="232">Receptionist/Front Office Executive</option>
                           			<option value="109">Relationship Manager</option>
                           			<option value="239">Repairman</option>
                           			<option value="325">Reservation and Ticketing</option>
                           			<option value="219">Reservation Manager</option>
                           			<option value="220">Restaurant Manager</option>
                           			<option value="151">Roofing</option>
                           			<option value="170">Safety Officer</option>
                           			<option value="268">Sales Executives</option>
                           			<option value="269">Sales Manager</option>
                           			<option value="97">Sales/Marketing Executive</option>
                           			<option value="209">Scientist</option>
                           			<option value="243">Security Guard</option>
                           			<option value="240">Security Installation</option>
                           			<option value="221">Security Manager</option>
                           			<option value="333">Shipping And Receiving</option>
                           			<option value="245">Site Manager</option>
                           			<option value="304">Software Application Developer</option>
                           			<option value="305">Software Engineer</option>
                           			<option value="222">Steward/Waiter</option>
                           			<option value="180">Stiching/Tailor</option>
                           			<option value="110">Stock Broking</option>
                           			<option value="171">Store Keeper</option>
                           			<option value="91">Studio Operation Manager</option>
                           			<option value="283">Sub Editor</option>
                           			<option value="95">Supervisor</option>
                           			<option value="181">Supervisor/Officer</option>
                           			<option value="172">Surveyor</option>
                           			<option value="306">System Administrator</option>
                           			<option value="133">System Analyst</option>
                           			<option value="303">System Programmer</option>
                           			<option value="81">Taxation - Manager</option>
                           			<option value="157">Teaching/Professor/Lecturer</option>
                           			<option value="117">Team Leader</option>
                           			<option value="308">Technical Architect</option>
                           			<option value="134">Technical Leader</option>
                           			<option value="135">Technical Support Engineer</option>
                           			<option value="118">Technical Support Executive (Voice)</option>
                           			<option value="309">Technical Writer</option>
                           			<option value="173">Technician</option>
                           			<option value="271">Tele Marketing Executives</option>
                           			<option value="119">Telemarketing Executive</option>
                           			<option value="311">Testing Engineer</option>
                           			<option value="182">Textile Designer</option>
                           			<option value="326">Tour Operator</option>
                           			<option value="335">Train Operator</option>
                           			<option value="120">Trainee/Management Trainee</option>
                           			<option value="313">Trainer</option>
                           			<option value="246">Training Officer</option>
                           			<option value="284">Translator</option>
                           			<option value="336">Transportation Supervisor</option>
                           			<option value="233">Travel/Immigration Coordinator</option>
                           			<option value="337">Truck Driver</option>
                           			<option value="234">Typist</option>
                           			<option value="210">Veterinary</option>
                           			<option value="285">Video Editor</option>
                           			<option value="92">Visualiser- Art Director</option>
                           			<option value="121">Voice & Accent Trainer</option>
                           			<option value="338">Warehouse Worker</option>
                           			<option value="314">Web Designer</option>
                           			<option value="315">Web Developer</option>
                           			<option value="153">Welder</option>
                           			<option value="174">Workman / Foreman / Technician</option>
                           		</select>
                           	</div>
                           </div>
                           <div class="form-group">
                           	<label class="col-sm-4 pedit2 text-right mtop4"  >Job Type:</label>
                           	<div class="col-sm-5">  
                           		<div class="btn-group" data-toggle="buttons">
                           			<label class="btn btn-primary2 active">
                           				<input type="radio" name="options" id="option1" autocomplete="off" checked value="">  All Jobs 
                           			</label>
                           			<label class="btn btn-primary2">
                           				<input type="radio" name="options" id="option2" autocomplete="off" value="Company"> Company Jobs 
                           			</label>
                           			<label class="btn btn-primary2">
                           				<input type="radio" name="options" id="option3" autocomplete="off" value="Consultant"> Consultant Jobs
                           			</label>
                           		</div>
                           	</div>
                           </div>  
                           <div class="form-group">
                           	<label class="col-sm-4 pedit2 text-right mtop4"  > Sort By:</label>
                           	<div class="col-sm-5">  
                           		<div class="btn-group" data-toggle="buttons">
                           			<label class="btn btn-primary2 active">
                           				<input type="radio" name="options1" id="option1" autocomplete="off" checked> Relevance  
                           			</label>
                           			<label class="btn btn-primary2">
                           				<input type="radio" name="options2" id="option2" value="date" autocomplete="off">  Date
                           			</label>
                           		</div>
                           	</div>
                           </div> 
                           <div class="form-group">
                           	<input type="hidden" name="hiddenval" value="valhid" />
                           	<div class="col-sm-12 text-center"><input name="advancesearch" class="btn-blue btn bc3" onclick="advancedsearch()" value="Search" type="button"> </div>
                           </div>   
                       </form>
                   </div>
               </div>
           </div>
       </div>

       <!--ADVANCED SEARCH POPUP END-->

       <!--CREATE JOB ALERT POPUP-->

       <div class="modal fade bs-example-modal-lg2" id="createjob" tabindex="-1" role="dialog" aria-labelledby="search">
       	<div class="modal-dialog modal-lg" role="document">
       		<div class="modal-content">
       			<div class="modal-header avd-serbg">
       				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"> <img src="images/close-icon.png"></span></button>
       				<h4 class="modal-title mode-tit" id="myModalLabel">Tell us what kind of jobs you want</h4>
       			</div>
       			<div class="modal-body avdbg1a">

       				<div class="form-group m20">
       					<label class="col-sm-4 pedit2 text-right mtop4"><span class="redstar">*</span> Keyword:</label>
       					<div class="col-sm-5">
       						<input type="text" name="keywordalert" id="keywordalert" class="form-control" placeholder="Skills, Designation. Companies">
       					</div>
       					<div><span id="keywordinfo"></span></div>
       				</div>        
       				<div class="form-group m20">
       					<label class="col-sm-4 pedit2 text-right mtop4"><span class="redstar">*</span> Location: </label>
       					<div class="col-sm-5">
       						<input type="text" name="locationalert" id="locationalert" class="form-control" placeholder="Enter the cities you want to work in">
       					</div>
       					<div><span id="locationinfo"></span></div>
       				</div>   

       				<div class="form-group">
       					<label class="col-sm-4 pedit2 text-right mtop4"><span class="redstar">*</span> Work Experience: </label>
       					<div class="col-sm-2 padno">
       						<div class="col-sm-9">
       							<select class="form-control " name="workexp" id="workexp">
       								<option value="">Select</option>
       								<option value='0'>0</option><option value='1'>1</option><option value='2'>2</option><option value='3'>3</option><option value='4'>4</option><option value='5'>5</option><option value='6'>6</option><option value='7'>7</option><option value='8'>8</option><option value='9'>9</option><option value='10'>10</option><option value='11'>11</option><option value='12'>12</option><option value='13'>13</option><option value='14'>14</option><option value='15'>15</option><option value='16'>16</option><option value='17'>17</option><option value='18'>18</option><option value='19'>19</option><option value='20'>20</option>                                    </select>
       							</div>

       							<label>Years </label>
       						</div><!--col-sm-6-->
       						<div class="col-sm-3 padno">
       							<div class="col-sm-8">
       								<select class="form-control" name="workexpmon" id="workexpmon">
       									<option value="">Select</option>

       									<option value='0'>0</option><option value='1'>1</option><option value='2'>2</option><option value='3'>3</option><option value='4'>4</option><option value='5'>5</option><option value='6'>6</option><option value='7'>7</option><option value='8'>8</option><option value='9'>9</option><option value='10'>10</option><option value='11'>11</option><option value='12'>12</option>                                    </select>
       								</div>
       								<label> Months </label>
       							</div>
       							<div><span id="workinfo"></span></div>
       						</div>

       						<div class="form-group">
       							<label class="col-sm-4 pedit2 text-right mtop4">Expected Salary: </label>
       							<div class="col-sm-2 padno">
       								<div class="col-sm-9">
       									<select class="form-control " name="salmin" id="salmin">
       										<option value="">Min</option>
       										<option value="0.5">0.5</option>
       										<option value='1'>1</option><option value='2'>2</option><option value='3'>3</option><option value='4'>4</option><option value='5'>5</option><option value='6'>6</option><option value='7'>7</option><option value='8'>8</option><option value='9'>9</option><option value='10'>10</option><option value='11'>11</option><option value='12'>12</option><option value='13'>13</option><option value='14'>14</option><option value='15'>15</option><option value='16'>16</option><option value='17'>17</option><option value='18'>18</option><option value='19'>19</option><option value='20'>20</option><option value='21'>21</option><option value='22'>22</option><option value='23'>23</option><option value='24'>24</option><option value='25'>25</option><option value='26'>26</option><option value='27'>27</option><option value='28'>28</option><option value='29'>29</option><option value='30'>30</option><option value='31'>31</option><option value='32'>32</option><option value='33'>33</option><option value='34'>34</option><option value='35'>35</option><option value='36'>36</option><option value='37'>37</option><option value='38'>38</option><option value='39'>39</option><option value='40'>40</option><option value='41'>41</option><option value='42'>42</option><option value='43'>43</option><option value='44'>44</option><option value='45'>45</option><option value='46'>46</option><option value='47'>47</option><option value='48'>48</option><option value='49'>49</option><option value='50'>50</option>                                    </select>
       									</div>

       								</div><!--col-sm-6-->
       								<div class="col-sm-3 padno">
       									<div class="col-sm-8">
       										<select class="form-control" name="salmax" id="salmax">
       											<option value="">Max</option>
       											<option value='2'>2</option><option value='3'>3</option><option value='4'>4</option><option value='5'>5</option><option value='6'>6</option><option value='7'>7</option><option value='8'>8</option><option value='9'>9</option><option value='10'>10</option><option value='11'>11</option><option value='12'>12</option><option value='13'>13</option><option value='14'>14</option><option value='15'>15</option><option value='16'>16</option><option value='17'>17</option><option value='18'>18</option><option value='19'>19</option><option value='20'>20</option><option value='21'>21</option><option value='22'>22</option><option value='23'>23</option><option value='24'>24</option><option value='25'>25</option><option value='26'>26</option><option value='27'>27</option><option value='28'>28</option><option value='29'>29</option><option value='30'>30</option><option value='31'>31</option><option value='32'>32</option><option value='33'>33</option><option value='34'>34</option><option value='35'>35</option><option value='36'>36</option><option value='37'>37</option><option value='38'>38</option><option value='39'>39</option><option value='40'>40</option><option value='41'>41</option><option value='42'>42</option><option value='43'>43</option><option value='44'>44</option><option value='45'>45</option><option value='46'>46</option><option value='47'>47</option><option value='48'>48</option><option value='49'>49</option><option value='50'>50</option>                                    </select>
       										</div>
       										<label>In Lakhs </label>
       									</div>
       								</div>
       								<div class="form-group">
       									<label class="col-sm-4 pedit2 text-right mtop4"  ><span class="redstar">*</span> Industry:</label>
       									<div class="col-sm-5">
       										<select name="indus" id="indus" class="form-control " placeholder="Select the industry where you want to work">
       											<option value=''>-&nbsp;Select&nbsp;-</option>

       											<option value='Construction'>Construction</option><option value='IT - BPO'>IT - BPO</option><option value='IT-ERP-Oracle'>IT-ERP-Oracle</option><option value='KPO/Technical Support'>KPO/Technical Support</option><option value='Law Enforcement'>Law Enforcement</option><option value='Legal/Law'>Legal/Law</option><option value='Management'>Management</option><option value='Marketing/Sales'>Marketing/Sales</option><option value='mech'>mech</option><option value='Media '>Media </option><option value='Media/Journalism'>Media/Journalism</option><option value='NGO/Social Services'>NGO/Social Services</option><option value='Others'>Others</option><option value='Production/Manufacturing/Maintenance'>Production/Manufacturing/Maintenance</option><option value='sindhu'>sindhu</option><option value='Strategy Management'>Strategy Management</option><option value='test'>test</option><option value='test cate'>test cate</option><option value='Tours and Travel'>Tours and Travel</option><option value='Transportation'>Transportation</option>								</select>

       										</div>
       										<div><span id="industryinfo"></span></div>
       									</div>

       									<div class="form-group">
       										<label class="col-sm-4 pedit2 text-right mtop4"  ><span class="redstar">*</span> Job Category:</label>
       										<div class="col-sm-5">
       											<select name="jobcat" id="jobcat" class="form-control " placeholder="Select the industry where you want to work" >

       												<option value='' >--Select--</option> 			  

       												<option value='349'>0 - 044 - </option> <option value='340'>Accessory Designer </option> <option value='99'>Accountant </option> <option value='73'>Accounts Assistant </option> <option value='241'>Accounts Manager </option> <option value='339'>AD </option> <option value='154'>Administration </option> <option value='316'>Air Hostess/Steward/Cabin Crew </option> <option value='183'>Anaesthetist </option> <option value='83'>Animator </option> <option value='176'>Apparel / Garment Designer </option> <option value='136'>Architects </option> <option value='272'>Art Director </option> <option value='258'>Asst. Sales Manager </option> <option value='159'>Autocad Draughtman/Designer </option> <option value='84'>AV Executive </option> <option value='100'>Bank Assurance </option> <option value='101'>Banking - General </option> <option value='211'>Banquet Manager </option> <option value='184'>Beautician </option> <option value='185'>Bio-Technology Research </option> <option value='317'>Branch Head </option> <option value='259'>Branch Manager </option> <option value='286'>Building Inspection </option> <option value='260'>Business Analyst </option> <option value='261'>Business Development Executives </option> <option value='273'>Cameraman </option> <option value='327'>Cargo </option> <option value='137'>Carpenter </option> <option value='74'>Chartered Accountant </option> <option value='186'>Chemical Research Scientist </option> <option value='187'>Chemist </option> <option value='341'>chennai </option> <option value='212'>Chief Chef </option> <option value='160'>Chief Engineer </option> <option value='161'>Civil Engineer </option> <option value='102'>Clerk/Office Boy </option> <option value='247'>Company Secretary </option> <option value='293'>Computer Operator/Data Entry </option> <option value='124'>Configuration Manager </option> <option value='350'>Construction </option> <option value='138'>Construction Manager </option> <option value='274'>Content Developer </option> <option value='139'>Controller </option> <option value='275'>Correspondent/Reporter </option> <option value='75'>Cost Accountant </option> <option value='155'>Councellor </option> <option value='328'>Courier/Delivery </option> <option value='140'>Crane Operator </option> <option value='262'>Customer Relationship Officer </option> <option value='112'>Customer Service Executive (Non Voice) </option> <option value='113'>Customer Service Executive (Voice) </option> <option value='162'>Customer Service/Tech. Support </option> <option value='223'>Data Entry/Computer Operator </option> <option value='114'>Data Processing Executive </option> <option value='125'>Database Administrator </option> <option value='298'>Database Programmer </option> <option value='297'>DBA </option> <option value='188'>Dentist </option> <option value='189'>Dietician </option> <option value='329'>Dockworker </option> <option value='190'>Doctor </option> <option value='318'>Documentation and Visa </option> <option value='319'>Domestic Travel </option> <option value='191'>ECG/CGA Technician </option> <option value='163'>Electrical Engineer </option> <option value='141'>Electrician </option> <option value='164'>Engineer </option> <option value='143'>Equipment Operator </option> <option value='103'>Equity Analyst </option> <option value='85'>Event Coordinator </option> <option value='86'>Event/Promotios Manager </option> <option value='76'>External Auditor </option> <option value='213'>F & B Manager </option> <option value='126'>Faculty </option> <option value='77'>Finance Assistant </option> <option value='165'>Foreman </option> <option value='330'>Forklift Operator </option> <option value='214'>Front Office Executive </option> <option value='345'>gdfgdf </option> <option value='263'>GM- Marketing </option> <option value='294'>Graphic Designer /Animator </option> <option value='320'>Ground Staff </option> <option value='127'>H/W Installation / Maintenance Engg </option> <option value='128'>Hardware Design Technical Leader </option> <option value='347'>having 7 years exp. as a professional medical representative with flaring formulation, abbott health </option> <option value='348'>having 7 years exp. as a professional medical representative with flaring formulation, abbott health </option> <option value='144'>Heavy Equipment Operator </option> <option value='215'>Hostess </option> <option value='193'>House Keeping </option> <option value='216'>House Keeping Executive </option> <option value='225'>HR Executive / Recruiter </option> <option value='226'>HR Manager </option> <option value='129'>Instructional Designer </option> <option value='104'>Insurance / Financial Advisor </option> <option value='105'>Insurance Telesales </option> <option value='166'>Interior Designer </option> <option value='78'>Internal Auditor </option> <option value='343'>it software- application programming / maintenance </option> <option value='346'>IT-ERP- Business Analyst </option> <option value='177'>Jewellery Designer </option> <option value='217'>Kitchen Manager </option> <option value='194'>Lab Technician </option> <option value='146'>Laborer </option> <option value='248'>Law Officer </option> <option value='249'>Lawyer </option> <option value='250'>Legal Adviser </option> <option value='251'>Legal Assistant </option> <option value='252'>Legal Consultant </option> <option value='253'>Legal Editor </option> <option value='254'>Legal Services - Manager </option> <option value='156'>Librarian </option> <option value='331'>Logistics Manager </option> <option value='235'>Machine Operator </option> <option value='236'>Machinist </option> <option value='237'>Maintenance Supervisor </option> <option value='321'>Management Trainee </option> <option value='322'>Manager </option> <option value='79'>Manager - Accounts </option> <option value='80'>Manager- Finance Planning </option> <option value='228'>Manager/Co-ordinator </option> <option value='264'>Marketing Executives </option> <option value='265'>Marketing Manager </option> <option value='167'>Mechanical Engineer </option> <option value='238'>Mechanical Technician </option> <option value='89'>Media Planning - Manager / Executive </option> <option value='195'>Medical Assistant </option> <option value='196'>Medical Representative </option> <option value='115'>Medical Transcriptionist </option> <option value='197'>Medical Writer </option> <option value='179'>Merchandiser </option> <option value='198'>Microbiologist </option> <option value='148'>Mining </option> <option value='107'>Mutual Funds </option> <option value='130'>Network Administrator </option> <option value='131'>Network Designer </option> <option value='295'>Network Engineer </option> <option value='278'>News Editor </option> <option value='279'>News Reador </option> <option value='199'>Nurse </option> <option value='200'>Nutritionist </option> <option value='323'>Office Assistant </option> <option value='229'>Office Secretary/AdminOfficer </option> <option value='287'>Officer </option> <option value='108'>Operations </option> <option value='332'>Operations Management </option> <option value='201'>Opthamologist </option> <option value='296'>Oracle Developer </option> <option value='132'>Other </option> <option value='149'>Painter </option> <option value='256'>Patent </option> <option value='203'>Pharmaceutical Research </option> <option value='204'>Pharmacist </option> <option value='300'>Photoshop </option> <option value='205'>Physician </option> <option value='206'>Physiotherapist </option> <option value='150'>Plumber </option> <option value='288'>Process Engineer </option> <option value='122'>Process Engineers </option> <option value='281'>Production Manager </option> <option value='289'>Production Quality Assurance </option> <option value='301'>Programmer </option> <option value='169'>Project Manager </option> <option value='282'>Proof Reader </option> <option value='257'>Proof Reader (Law) </option> <option value='207'>Public Health Administration </option> <option value='231'>Public Relation Officer </option> <option value='312'>QA </option> <option value='290'>Quality Assurance Engineer </option> <option value='291'>Quality Assurance Manager </option> <option value='292'>Quality Control Inspector </option> <option value='208'>Radiographer </option> <option value='232'>Receptionist/Front Office Executive </option> <option value='109'>Relationship Manager </option> <option value='239'>Repairman </option> <option value='325'>Reservation and Ticketing </option> <option value='219'>Reservation Manager </option> <option value='220'>Restaurant Manager </option> <option value='151'>Roofing </option> <option value='170'>Safety Officer </option> <option value='268'>Sales Executives </option> <option value='269'>Sales Manager </option> <option value='97'>Sales/Marketing Executive </option> <option value='209'>Scientist </option> <option value='243'>Security Guard </option> <option value='240'>Security Installation </option> <option value='221'>Security Manager </option> <option value='333'>Shipping And Receiving </option> <option value='245'>Site Manager </option> <option value='304'>Software Application Developer </option> <option value='305'>Software Engineer </option> <option value='222'>Steward/Waiter </option> <option value='180'>Stiching/Tailor </option> <option value='110'>Stock Broking </option> <option value='171'>Store Keeper </option> <option value='91'>Studio Operation Manager </option> <option value='283'>Sub Editor </option> <option value='95'>Supervisor </option> <option value='181'>Supervisor/Officer </option> <option value='172'>Surveyor </option> <option value='306'>System Administrator </option> <option value='133'>System Analyst </option> <option value='303'>System Programmer </option> <option value='81'>Taxation - Manager </option> <option value='157'>Teaching/Professor/Lecturer </option> <option value='117'>Team Leader </option> <option value='308'>Technical Architect </option> <option value='134'>Technical Leader </option> <option value='135'>Technical Support Engineer </option> <option value='118'>Technical Support Executive (Voice) </option> <option value='309'>Technical Writer </option> <option value='173'>Technician </option> <option value='271'>Tele Marketing Executives </option> <option value='119'>Telemarketing Executive </option> <option value='311'>Testing Engineer </option> <option value='182'>Textile Designer </option> <option value='326'>Tour Operator </option> <option value='335'>Train Operator </option> <option value='120'>Trainee/Management Trainee </option> <option value='313'>Trainer </option> <option value='246'>Training Officer </option> <option value='284'>Translator </option> <option value='336'>Transportation Supervisor </option> <option value='233'>Travel/Immigration Coordinator </option> <option value='337'>Truck Driver </option> <option value='234'>Typist </option> <option value='210'>Veterinary </option> <option value='285'>Video Editor </option> <option value='92'>Visualiser- Art Director </option> <option value='121'>Voice & Accent Trainer </option> <option value='338'>Warehouse Worker </option> <option value='314'>Web Designer </option> <option value='315'>Web Developer </option> <option value='153'>Welder </option> <option value='174'>Workman / Foreman / Technician </option> 									</select>


       											</div>
       											<div><span id="categoryinfo"></span></div>
       										</div>
       										<div class="form-group">
       											<label class="col-sm-4 pedit2 text-right mtop4"  ><span class="redstar">*</span> Role:</label>
       											<div class="col-sm-5">  
       												<select name="jobrole" id="jobrole" class="form-control " placeholder="Select the role where you want to work" >

       													<option value='' >--Select--</option> 			  

       													<option value='349'>0 - 044 - </option> <option value='340'>Accessory Designer </option> <option value='99'>Accountant </option> <option value='73'>Accounts Assistant </option> <option value='241'>Accounts Manager </option> <option value='339'>AD </option> <option value='154'>Administration </option> <option value='316'>Air Hostess/Steward/Cabin Crew </option> <option value='183'>Anaesthetist </option> <option value='83'>Animator </option> <option value='176'>Apparel / Garment Designer </option> <option value='136'>Architects </option> <option value='272'>Art Director </option> <option value='258'>Asst. Sales Manager </option> <option value='159'>Autocad Draughtman/Designer </option> <option value='84'>AV Executive </option> <option value='100'>Bank Assurance </option> <option value='101'>Banking - General </option> <option value='211'>Banquet Manager </option> <option value='184'>Beautician </option> <option value='185'>Bio-Technology Research </option> <option value='317'>Branch Head </option> <option value='259'>Branch Manager </option> <option value='286'>Building Inspection </option> <option value='260'>Business Analyst </option> <option value='261'>Business Development Executives </option> <option value='273'>Cameraman </option> <option value='327'>Cargo </option> <option value='137'>Carpenter </option> <option value='74'>Chartered Accountant </option> <option value='186'>Chemical Research Scientist </option> <option value='187'>Chemist </option> <option value='341'>chennai </option> <option value='212'>Chief Chef </option> <option value='160'>Chief Engineer </option> <option value='161'>Civil Engineer </option> <option value='102'>Clerk/Office Boy </option> <option value='247'>Company Secretary </option> <option value='293'>Computer Operator/Data Entry </option> <option value='124'>Configuration Manager </option> <option value='350'>Construction </option> <option value='138'>Construction Manager </option> <option value='274'>Content Developer </option> <option value='139'>Controller </option> <option value='275'>Correspondent/Reporter </option> <option value='75'>Cost Accountant </option> <option value='155'>Councellor </option> <option value='328'>Courier/Delivery </option> <option value='140'>Crane Operator </option> <option value='262'>Customer Relationship Officer </option> <option value='112'>Customer Service Executive (Non Voice) </option> <option value='113'>Customer Service Executive (Voice) </option> <option value='162'>Customer Service/Tech. Support </option> <option value='223'>Data Entry/Computer Operator </option> <option value='114'>Data Processing Executive </option> <option value='125'>Database Administrator </option> <option value='298'>Database Programmer </option> <option value='297'>DBA </option> <option value='188'>Dentist </option> <option value='189'>Dietician </option> <option value='329'>Dockworker </option> <option value='190'>Doctor </option> <option value='318'>Documentation and Visa </option> <option value='319'>Domestic Travel </option> <option value='191'>ECG/CGA Technician </option> <option value='163'>Electrical Engineer </option> <option value='141'>Electrician </option> <option value='164'>Engineer </option> <option value='143'>Equipment Operator </option> <option value='103'>Equity Analyst </option> <option value='85'>Event Coordinator </option> <option value='86'>Event/Promotios Manager </option> <option value='76'>External Auditor </option> <option value='213'>F & B Manager </option> <option value='126'>Faculty </option> <option value='77'>Finance Assistant </option> <option value='165'>Foreman </option> <option value='330'>Forklift Operator </option> <option value='214'>Front Office Executive </option> <option value='345'>gdfgdf </option> <option value='263'>GM- Marketing </option> <option value='294'>Graphic Designer /Animator </option> <option value='320'>Ground Staff </option> <option value='127'>H/W Installation / Maintenance Engg </option> <option value='128'>Hardware Design Technical Leader </option> <option value='347'>having 7 years exp. as a professional medical representative with flaring formulation, abbott health </option> <option value='348'>having 7 years exp. as a professional medical representative with flaring formulation, abbott health </option> <option value='144'>Heavy Equipment Operator </option> <option value='215'>Hostess </option> <option value='193'>House Keeping </option> <option value='216'>House Keeping Executive </option> <option value='225'>HR Executive / Recruiter </option> <option value='226'>HR Manager </option> <option value='129'>Instructional Designer </option> <option value='104'>Insurance / Financial Advisor </option> <option value='105'>Insurance Telesales </option> <option value='166'>Interior Designer </option> <option value='78'>Internal Auditor </option> <option value='343'>it software- application programming / maintenance </option> <option value='346'>IT-ERP- Business Analyst </option> <option value='177'>Jewellery Designer </option> <option value='217'>Kitchen Manager </option> <option value='194'>Lab Technician </option> <option value='146'>Laborer </option> <option value='248'>Law Officer </option> <option value='249'>Lawyer </option> <option value='250'>Legal Adviser </option> <option value='251'>Legal Assistant </option> <option value='252'>Legal Consultant </option> <option value='253'>Legal Editor </option> <option value='254'>Legal Services - Manager </option> <option value='156'>Librarian </option> <option value='331'>Logistics Manager </option> <option value='235'>Machine Operator </option> <option value='236'>Machinist </option> <option value='237'>Maintenance Supervisor </option> <option value='321'>Management Trainee </option> <option value='322'>Manager </option> <option value='79'>Manager - Accounts </option> <option value='80'>Manager- Finance Planning </option> <option value='228'>Manager/Co-ordinator </option> <option value='264'>Marketing Executives </option> <option value='265'>Marketing Manager </option> <option value='167'>Mechanical Engineer </option> <option value='238'>Mechanical Technician </option> <option value='89'>Media Planning - Manager / Executive </option> <option value='195'>Medical Assistant </option> <option value='196'>Medical Representative </option> <option value='115'>Medical Transcriptionist </option> <option value='197'>Medical Writer </option> <option value='179'>Merchandiser </option> <option value='198'>Microbiologist </option> <option value='148'>Mining </option> <option value='107'>Mutual Funds </option> <option value='130'>Network Administrator </option> <option value='131'>Network Designer </option> <option value='295'>Network Engineer </option> <option value='278'>News Editor </option> <option value='279'>News Reador </option> <option value='199'>Nurse </option> <option value='200'>Nutritionist </option> <option value='323'>Office Assistant </option> <option value='229'>Office Secretary/AdminOfficer </option> <option value='287'>Officer </option> <option value='108'>Operations </option> <option value='332'>Operations Management </option> <option value='201'>Opthamologist </option> <option value='296'>Oracle Developer </option> <option value='132'>Other </option> <option value='149'>Painter </option> <option value='256'>Patent </option> <option value='203'>Pharmaceutical Research </option> <option value='204'>Pharmacist </option> <option value='300'>Photoshop </option> <option value='205'>Physician </option> <option value='206'>Physiotherapist </option> <option value='150'>Plumber </option> <option value='288'>Process Engineer </option> <option value='122'>Process Engineers </option> <option value='281'>Production Manager </option> <option value='289'>Production Quality Assurance </option> <option value='301'>Programmer </option> <option value='169'>Project Manager </option> <option value='282'>Proof Reader </option> <option value='257'>Proof Reader (Law) </option> <option value='207'>Public Health Administration </option> <option value='231'>Public Relation Officer </option> <option value='312'>QA </option> <option value='290'>Quality Assurance Engineer </option> <option value='291'>Quality Assurance Manager </option> <option value='292'>Quality Control Inspector </option> <option value='208'>Radiographer </option> <option value='232'>Receptionist/Front Office Executive </option> <option value='109'>Relationship Manager </option> <option value='239'>Repairman </option> <option value='325'>Reservation and Ticketing </option> <option value='219'>Reservation Manager </option> <option value='220'>Restaurant Manager </option> <option value='151'>Roofing </option> <option value='170'>Safety Officer </option> <option value='268'>Sales Executives </option> <option value='269'>Sales Manager </option> <option value='97'>Sales/Marketing Executive </option> <option value='209'>Scientist </option> <option value='243'>Security Guard </option> <option value='240'>Security Installation </option> <option value='221'>Security Manager </option> <option value='333'>Shipping And Receiving </option> <option value='245'>Site Manager </option> <option value='304'>Software Application Developer </option> <option value='305'>Software Engineer </option> <option value='222'>Steward/Waiter </option> <option value='180'>Stiching/Tailor </option> <option value='110'>Stock Broking </option> <option value='171'>Store Keeper </option> <option value='91'>Studio Operation Manager </option> <option value='283'>Sub Editor </option> <option value='95'>Supervisor </option> <option value='181'>Supervisor/Officer </option> <option value='172'>Surveyor </option> <option value='306'>System Administrator </option> <option value='133'>System Analyst </option> <option value='303'>System Programmer </option> <option value='81'>Taxation - Manager </option> <option value='157'>Teaching/Professor/Lecturer </option> <option value='117'>Team Leader </option> <option value='308'>Technical Architect </option> <option value='134'>Technical Leader </option> <option value='135'>Technical Support Engineer </option> <option value='118'>Technical Support Executive (Voice) </option> <option value='309'>Technical Writer </option> <option value='173'>Technician </option> <option value='271'>Tele Marketing Executives </option> <option value='119'>Telemarketing Executive </option> <option value='311'>Testing Engineer </option> <option value='182'>Textile Designer </option> <option value='326'>Tour Operator </option> <option value='335'>Train Operator </option> <option value='120'>Trainee/Management Trainee </option> <option value='313'>Trainer </option> <option value='246'>Training Officer </option> <option value='284'>Translator </option> <option value='336'>Transportation Supervisor </option> <option value='233'>Travel/Immigration Coordinator </option> <option value='337'>Truck Driver </option> <option value='234'>Typist </option> <option value='210'>Veterinary </option> <option value='285'>Video Editor </option> <option value='92'>Visualiser- Art Director </option> <option value='121'>Voice & Accent Trainer </option> <option value='338'>Warehouse Worker </option> <option value='314'>Web Designer </option> <option value='315'>Web Developer </option> <option value='153'>Welder </option> <option value='174'>Workman / Foreman / Technician </option> 									</select>


       												</div>
       												<div><span id="roleinfo"></span></div>
       											</div>  
       											<div class="form-group">
       												<label class="col-sm-4 pedit2 text-right mtop4"  ><span class="redstar">*</span> Name Your Job Alert:</label>
       												<div class="col-sm-5">  
       													<input type="text" name="namealert" id="namealert" class="form-control" placeholder="Enter a name that will help you reconize this job alert">

       												</div>
       												<div><span id="nameinfo"></span></div>
       											</div>  
       											<div class="form-group">
       												<label class="col-sm-4 pedit2 text-right mtop4"  ><span class="redstar">*</span> Email Id:</label>
       												<div class="col-sm-5">  
       													<input type="email" name="emailalert" id="emailalert" class="form-control" placeholder="Enter a mail id">

       												</div>
       												<div><span id="emailinfo"></span></div>

       											</div>

       											<div class="form-group ">
       												<label class="col-sm-4 pedit2 text-right"></label>
       												<div class="col-sm-7">
       													<label class="checkbox-inline">
       														<input type="checkbox" name="closejob" id="inlineCheckbox1" value="1"> <span class="redstar">*</span> Also send me job closely related to my search terms.
       													</label>
       												</div>

       											</div>

       											<div class="form-group ">
       												<label class="col-sm-4 pedit2 text-right"></label>
       												<div class="col-sm-7">
       													<div ><span id="termsinfo"></span></div>
       												</div>

       											</div>



       											<div class="form-group">
       												<div class="col-sm-12 text-center"><input class="btn-blue btn bc3" name="submitalert" onclick="return jobalertValidate();" value="Create Job Alert "> </div>
       											</div>   
       										</form>
       									</div>
       								</div>
       							</div>
       						</div>

       						<!--CREATE JOB ALERT END-->

       						<div class="clearfix"></div>
       						<!-- FOOTER -->



<!-- Main Banner Section Start -->	
<div>	 

</div> 
      
   </div>	
 </body>
 </html>         <!-- CONTENT -->
 <div id="content">
   <div class="container">
    <ol  class="breadcrumb">
      <li><a href="<?php echo base_url();?>">Home</a></li>
      <li class="active">Application TO Scholarship</li>
    </ol>
    <div class="row">
      <div class="col-sm-9 ma25" >
       <div class="top-emp-center p5">
         <h4>Application TO Scholarship - <?php echo $scholarship->scholarship_name; ?></h4>
       </div>
      
       <div class="eform">
        <div class="row">
          <div class="col-md-12">Enter details</div>
          <div class="col-sm-3"></div>
          <div class="col-sm-9 m10"> 
            <span id="id1"></span></div>
          </div>


          <?php echo form_open_multipart('publicview/save_scholarship_application/'.$scholarship->id,array('class'=>'form-horizontal')) ?>
          <div class="form-group">
            <label  class="col-sm-3   control-label efs"><span class="red-star">*</span>Necessary Files</label>
            <div class="col-sm-9">
              <input type="file" class="form-control" name="attachment" id="username"  >
            </div>
          </div>
          <div class="form-group">
            <label  class="col-sm-3  control-label efs"><span class="red-star">*</span> Details and comment</label>
            <div class="col-sm-9">
              <textarea name="description" class="form-control">
                
              </textarea>
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-offset-3 col-sm-9  click-here">


             
              <?php if($this->session->errors):?>

                <p class="alert alert-warning " class="message"><?php echo $this->session->errors; ?></p>

              <?php endif; ?>
    </div>

  </div> 
  <div class="form-group">
    <div class="col-sm-offset-3 col-sm-9">
      <button type="submit" name="submit" id="submit" class="btn-blue btn bcL">Apply</button>
      <!--<a href="http://198.38.86.159/~onlineexamboard/demo/advanced-job-portal//fblog_new" class="btn-blue btn bcL" >Login with Facebook</a>-->
      
    </div>
  </div>
  
</form>

</div><!--eform-->
</div><!--col-sm-9-->

<div class="col-sm-3" >

  <div class="create-job">
   <div class="create-job-head">
    <h3> Member Benefits </h3>
  </div>
  <div class="create-job-content">
   <div class="mem-ben">Create Customized 'Job Alert'</div>
   <p class="mem-ben-p">Get Jobs regularly in your inbox by creating up to 5 personalized Job Alert</p>

   <div class="mem-ben">Create Multiple Profiles</div>
   <p class="mem-ben-p">Create upto 5 customized profiles to apply to jobs in different categories</p>

   <div class="mem-ben">Let Recruiters find you the right job</div>
   <p class="mem-ben-p">Thousands of recruiters search our database daily to find candidates. Get found by them</p>

   <div class="mem-ben">Confidentiality & Privacy Settings</div>
   <p class="mem-ben-p-last">Define your privacy level. Block your current employer from accessing your profile.</p>

   <div class="ali-right"><a href="jobseeker-registration.html"><input class="btn-blue btn bc" value="Register Now " type="button"></a></div>
 </div>
</div><!--create-job-->

</div><!--col-sm-3-->

</div><!--row-->
</div><!-- container -->

</div><!-- CONTENT -->

<!--ADVANCED SEARCH POPUP-->


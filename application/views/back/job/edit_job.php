


<div class="main-panel">
  <div class="content-wrapper">
    <!-- <div class="row purchace-popup">
      <div class="col-12">
        <span class="d-block d-md-flex align-items-center">
          <p>Like what you see? Check out our premium version for more.</p>
          <a class="btn ml-auto download-button d-none d-md-block" href="https://github.com/BootstrapDash/StarAdmin-Free-Bootstrap-Admin-Template" target="_blank">Download Free Version</a>
          <a class="btn purchase-button mt-4 mt-md-0" href="https://www.bootstrapdash.com/product/star-admin-pro/" target="_blank">Upgrade To Pro</a>
          <i class="mdi mdi-close popup-dismiss d-none d-md-block"></i>
        </span>
      </div>
    </div> -->

    <div class="col-10 stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Job Posting</h4>
       <!--    <p class="card-description">
            Add Job 
          </p> -->

          <?php if($this->session->success): ?>
            <p class="alert alert-success" id="message"><?php echo $this->session->success; ?></p>
          <?php endif; ?>

          <?php if($this->session->error): ?>
            <p class="alert alert-error" id="message"><?php echo $this->session->error; ?></p>
          <?php endif; ?> 


          <?php echo form_open('job/update_job/'.$job[0]->job_id,array()) ?>
          <div class="form-group row">
            <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Job Title</label>
            <div class="col-sm-9">
              <input type="text" value="<?php echo $job[0]->job_title; ?>" name="job_title" class="form-control" id="exampleInputEmail2" >
            </div>
          </div>
          <div class="form-group row">
            <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Skill</label>
            <div class="col-sm-9"> 
              <input type="text" name="skill" value="<?php echo $job[0]->skill; ?>"  class="form-control" id="exampleInputEmail2" placeholder="Enter Skill">
            </div>
          </div>

          <div class="form-group row">
            <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Category Name </label>
            <div class="col-sm-9">
              <select name="jobcat_id" id="" class="form-control">
                <option  disabled="">Select Option</option>

                <?php foreach($jobcats as $jobcat){ ?>


                  <option value="<?php echo $jobcat->jobcat_id; ?>" <?php if($jobcat->jobcat_id == $job[0]->jobcat_id){ ?> selected <?php } ?>><?php echo ucfirst($jobcat->jobcat_name); ?></option>

                <?php } ?>



              </select>
            </div>
          </div>

          <div class="form-group row">
            <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Company Name</label>
            <div class="col-sm-9">
              <input type="text"value="<?php echo $job[0]->company_name; ?>" name="company_name" class="form-control" id="exampleInputEmail2" placeholder="Enter Company name">
            </div>
          </div>

          <div class="form-group row">
            <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Salary</label>
            <div class="col-sm-9">
              <input type="number" value="<?php echo $job[0]->salary; ?>"name="salary" class="form-control" id="exampleInputEmail2" placeholder="Enter your salary">
            </div>
          </div>

          <div class="form-group row">
            <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Posted Date</label>
            <div class="col-sm-9">
              <input type="date"value="<?php echo $job[0]->posted_date; ?>" name="posted_date" class="form-control" id="exampleInputEmail2" placeholder="Enter your posted_date">
            </div>
          </div>

          <div class="form-group row">
            <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Deadline</label>
            <div class="col-sm-9">
              <input type="date"value="<?php echo $job[0]->deadline; ?>" name="deadline" class="form-control" id="exampleInputEmail2" placeholder="Enter your deadline">
            </div>
          </div>

          <div class="form-group row">
            <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Job Description</label>
            <div class="col-sm-9">
              <textarea name="job_descri" id="" class="form-control" cols="30" rows="10"><?php echo substr($job[0]->job_descri,0,80) ; ?></textarea>
            </div>
          </div>




          <button type="submit" class="btn btn-success btn-fw">
            <i class="mdi mdi-check"></i>Update</button>
            <button class="btn btn-light">Cancel</button>
          </form>
        </div>
      </div>
    </div>



    <script src="https://cdn.ckeditor.com/4.11.3/standard/ckeditor.js"></script>
    <script>
      CKEDITOR.replace( 'job_descri' );
    </script>


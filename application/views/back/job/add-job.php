


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

    <div class="col-11 stretch-card">
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
            <p class="alert alert-warning" id="message"><?php echo $this->session->error; ?></p>
          <?php endif; ?> 

          <?php echo form_open_multipart('job/save_job',array()) ?>
          <div class="form-group row">
            <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Job Title</label>
            <div class="col-sm-9">
              <input type="text" name="job_title" class="form-control" id="exampleInputEmail2" placeholder="Enter job title">
            </div>
          </div>
          <div class="form-group row">
            <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Location</label>
            <div class="col-sm-9">
              <input type="text" name="location" class="form-control" id="exampleInputEmail2" placeholder="Enter location">
            </div>
          </div>



          <div class="form-group row">
            <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Category Name </label>
            <div class="col-sm-9">
              <select name="jobcat_id" id="" class="form-control">
                <option value="">Select Option</option>
                <?php foreach($jobcats as $jobcat){ ?>
                  <option value="<?php echo $jobcat->jobcat_id ?>"><?php echo ucfirst($jobcat->jobcat_name); ?></option>

                <?php } ?>

              </select>
            </div>
          </div>


          <div class="form-group row">
            <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Company </label>
            <div class="col-sm-9">
              <select name="company_id" id="" class="form-control">
                <option value="">Select Option</option>
                <?php foreach($companies as $company){ ?>

                  <option value="<?php echo $company->company_id ?>"><?php echo ucfirst($company->company_name); ?></option>

                <?php } ?>

              </select>
            </div>
          </div>

          <div class="form-group row">
            <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Job Type </label>
            <div class="col-sm-9">
              <select name="job_type" id="" class="form-control">
                <option value="">Select Option</option>

                <option value="Government Job">Government Job</option>
                <option value="Local Job">Local Job</option>
                <option value="Overseas Job">Overseas Job</option>

                
              </select>
            </div>
          </div>

          


          <div class="form-group row">
            <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Skill</label>
            <div class="col-sm-9">
              <input type="text" name="skill" class="form-control" id="exampleInputEmail2" placeholder="Enter Skill">
            </div>
          </div>

          <div class="form-group row">
            <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Experience</label>
            <div class="col-sm-9">
              <input type="text" name="experience" class="form-control" id="exampleInputEmail2" placeholder="Enter Experience">
            </div>
          </div>

          


          <div class="form-group row">
            <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Starting Salary</label>
            <div class="col-sm-9">
              <input type="number" name="starting_salary" class="form-control" id="exampleInputEmail2" placeholder="Enter starting salary">
            </div>
          </div>

          <div class="form-group row">
            <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Ending Salary</label>
            <div class="col-sm-9">
              <input type="number" name="ending_salary" class="form-control" id="exampleInputEmail2" placeholder="Enter ending salary">
            </div>
          </div>

          <div class="form-group row">
            <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Education</label>
            <div class="col-sm-9">
              <input type="text" name="education" class="form-control" id="exampleInputEmail2" placeholder="Enter education">
            </div>
          </div>

          <div class="form-group row">
            <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Posted Date</label>
            <div class="col-sm-9">
              <input type="date" name="posted_date" class="form-control" id="exampleInputEmail2" placeholder="Enter your posted_date">
            </div>
          </div>

          <div class="form-group row">
            <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Deadline</label>
            <div class="col-sm-9">
              <input type="date" name="deadline" class="form-control" id="exampleInputEmail2" placeholder="Enter your deadline">
            </div>
          </div>

          <div class="form-group row">
            <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Job Thumbnail</label>
            <div class="col-sm-9">
              <input type="file" name="job_thumbnail" class="form-control" id="exampleInputEmail2">
            </div>
          </div>
          <div class="form-group row">
            <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Job Featured</label>
            <div class="col-sm-9">
              <select name="featured_job" id="" class="form-control">
                <option value="" disabled="">Select Option</option>
                <option value="0" selected="">Not Featured</option>
                <option value="1">Featured</option>

              </select>
            </div>
          </div>

          <div class="form-group row">
            <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Job Description</label>
            <div class="col-sm-9">
              <textarea name="job_description" id="" class="form-control" cols="30" rows="10"></textarea>
            </div>
          </div>
          <!-- <button type="submit" class="btn btn-success mr-2">Submit</button> -->
          <button type="submit" class="btn btn-success btn-fw">
            <i class="mdi mdi-check"></i>Save</button>
            <button class="btn btn-light">Cancel</button>
          </form>
        </div>
      </div>
    </div>
    <script src="https://cdn.ckeditor.com/4.11.3/standard/ckeditor.js"></script>
    <script>
      CKEDITOR.replace( 'job_descri' );
    </script>





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
  			<h4 class="card-title">Add Scholarship</h4>
       <!--    <p class="card-description">
            Add Job 
        </p> -->


        <?php if($this->session->success): ?>
        	<p class="alert alert-success success" id="message"><?php echo $this->session->success; ?></p>
        <?php endif; ?>

        <?php if($this->session->error): ?>
        	<p class="alert alert-warning" id="message"><?php echo $this->session->error; ?></p>
        <?php endif; ?> 

        <?php echo form_open_multipart('admin/scholarship/save_scholarship',array()) ?>
        <div class="form-group row">
        	<label for="exampleInputEmail2" class="col-sm-3 col-form-label">Scholarship Name</label>
        	<div class="col-sm-9">
        		<input type="text" name="scholarship_name" class="form-control" id="exampleInputEmail2" placeholder="Enter scholarship name">
        	</div>
        </div>
        <div class="form-group row">
        	<label for="exampleInputEmail2" class="col-sm-3 col-form-label">Univeristy Name</label>
        	<div class="col-sm-9">
        		<input type="text" name="university_name" class="form-control" id="exampleInputEmail2" placeholder="Enter university_name">
        	</div>
        </div>

        <div class="form-group row">
        	<label for="exampleInputEmail2" class="col-sm-3 col-form-label">Application Deadline</label>
        	<div class="col-sm-9">
        		<input type="date" name="deadline" class="form-control" id="exampleInputEmail2"">
        	</div>
        </div>

        <div class="form-group row">
        	<label for="exampleInputEmail2" class="col-sm-3 col-form-label">Scholarship Cover Image</label>
        	<div class="col-sm-9">
        		<input type="file" name="thumbnail" class="form-control" id="exampleInputEmail2">
        	</div>
        </div>

         <div class="form-group row">
        	<label for="exampleInputEmail2" class="col-sm-3 col-form-label">Description </label>
        	<div class="col-sm-9">
        		<textarea name="description" id="" cols="30" rows="5" class="form-control" placeholder="Enter scholarship details"></textarea>
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





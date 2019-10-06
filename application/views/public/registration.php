
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Employee LOgin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>asset/reglogin/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>asset/reglogin/vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="`vendors/css/vendor.bundle.addons.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>asset/reglogin/css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="<?php echo base_url(); ?>asset/reglogin/images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper auth-page">
      <div class="content-wrapper d-flex align-items-center auth auth-bg-1 theme-one">
        <div class="row w-100">

          <div class="col-lg-5 mx-auto">
           <?php if($this->session->success): ?>
            <p class="alert alert-success success" id="message"><?php echo $this->session->success; ?></p>
          <?php endif; ?>

          <?php if($this->session->error): ?>
            <p class="alert alert-warning error" id="message"><?php echo $this->session->error; ?></p>
          <?php endif; ?>
          <div class="auto-form-wrapper">
            <h2 class="text-center">Employee Registration </h2>
             <?php echo form_open('registration/save_empployee',array()) ?>
              <div class="form-group">
                <label class="label">Employee Name</label>
                <div class="input-group">
                  <input type="text" name="name" class="form-control" >
                  <div class="input-group-append">
                    <span class="input-group-text">
                      <i class="mdi mdi-check-circle-outline"></i>
                    </span>
                  </div>
                </div>
              </div>

              <div class="form-group">
                <label class="label">Email</label>
                <div class="input-group">
                  <input type="text" name="email" class="form-control" >
                  <div class="input-group-append">
                    <span class="input-group-text">
                      <i class="mdi mdi-check-circle-outline"></i>
                    </span>
                  </div>
                </div>
              </div>

              <div class="form-group">
                <label class="label">Password</label>
                <div class="input-group">
                  <input type="password" name="password" class="form-control" >
                  <div class="input-group-append">
                    <span class="input-group-text">
                      <i class="mdi mdi-check-circle-outline"></i>
                    </span>
                  </div>
                </div>
              </div>

              <div class="form-group">
                <label class="label">Contact</label>
                <div class="input-group">
                  <input type="text" name="contact" class="form-control" >
                  <div class="input-group-append">
                    <span class="input-group-text">
                      <i class="mdi mdi-check-circle-outline"></i>
                    </span>
                  </div>
                </div>
              </div>

              <div class="form-group">
                <label class="label">Address</label>
                <div class="input-group">
                  <input type="text" name="address" class="form-control" >
                  <div class="input-group-append">
                    <span class="input-group-text">
                      <i class="mdi mdi-check-circle-outline"></i>
                    </span>
                  </div>
                </div>
              </div>


              <div class="form-group">
                <label class="label">SSC GPA</label>
                <div class="input-group">
                  <input type="text" name="ssc_gpa" class="form-control" >
                  <div class="input-group-append">
                    <span class="input-group-text">
                      <i class="mdi mdi-check-circle-outline"></i>
                    </span>
                  </div>
                </div>
              </div>

              <div class="form-group">
                <label class="label">HSC GPA</label>
                <div class="input-group">
                  <input type="text" name="hsc_gpa" class="form-control" >
                  <div class="input-group-append">
                    <span class="input-group-text">
                      <i class="mdi mdi-check-circle-outline"></i>
                    </span>
                  </div>
                </div>
              </div>

              <div class="form-group">
                <label class="label">Experience</label>
                <div class="input-group">
                  <input type="text" name="experience" class="form-control" placeholder="">
                  <div class="input-group-append">
                    <span class="input-group-text">
                      <i class="mdi mdi-check-circle-outline"></i>
                    </span>
                  </div>
                </div>
              </div>


              <div class="form-group">
                <label class="label">Previous Company</label>
                <div class="input-group">
                  <input type="text" name="preveous_company" class="form-control" placeholder="">
                  <div class="input-group-append">
                    <span class="input-group-text">
                      <i class="mdi mdi-check-circle-outline"></i>
                    </span>
                  </div>
                </div>
              </div>

              <div class="form-group">
                <button type="submit" class="btn btn-primary submit-btn btn-block">Register</button>
              </div>
              

              <div class="text-block text-center my-3">
                <a href="<?php echo base_url(); ?>" class="text-black text-small"><strong>Homepage</strong></a> | 
                <span class="text-small font-weight-semibold">already registered ?</span>
                <a href="<?php echo base_url(); ?>login" class="text-black text-small">login here..</a>
              </div>
            </form>
          </div>


        </div>
      </div>
    </div>
    <!-- content-wrapper ends -->
  </div>
  <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
<!-- plugins:js -->
<script src="<?php echo base_url(); ?>asset/reglogin/vendors/js/vendor.bundle.base.js"></script>
<script src="<?php echo base_url(); ?>asset/reglogin/vendors/js/vendor.bundle.addons.js"></script>
<!-- endinject -->
<!-- inject:js -->
<script src="<?php echo base_url(); ?>asset/reglogin/js/off-canvas.js"></script>
<script src="<?php echo base_url(); ?>asset/reglogin/js/misc.js"></script>
<!-- endinject -->
<script src="<?php echo base_url(); ?>asset/public/js/jquery-2.2.4.min.js"></script>
      <script>
        $(document).ready(function() {
          //alert('hi');
          setTimeout(function(){
            $('.success').slideUp(500);
          },5000);

          setTimeout(function(){
            $('.error').slideUp(500);
          },5000);

        });
      </script>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Employee Login</title>
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
          <div class="col-lg-4 mx-auto">

            <?php if($this->session->success): ?>
            <p class="alert alert-success success" id="message"><?php echo $this->session->success; ?></p>
            <?php endif; ?>

            <?php if($this->session->error): ?>
            <p class="alert alert-warning error" id="message"><?php echo $this->session->error; ?></p>
            <?php endif; ?> 

            <div class="auto-form-wrapper">
              <h2 class="text-center">Employee Login</h2>
              <?php echo form_open_multipart('registration/login_action',array()) ?>
                <div class="form-group">
                  <label class="label">Username</label>
                  <div class="input-group">
                    <input type="text" name="username" class="form-control" placeholder="Username">
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
                    <input type="password" name="password" class="form-control" placeholder="*********">
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <i class="mdi mdi-check-circle-outline"></i>
                      </span>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <button class="btn btn-primary submit-btn btn-block">Login</button>
                </div>
                
                <div class="text-block text-center my-3">

                  <a href="<?php echo base_url(); ?>" class="text-black text-small"><strong>Homepage</strong></a> | 

                  <span class="text-small font-weight-semibold">not registered ?</span>
                  <a href="<?php echo base_url(); ?>registration" class="text-black text-small">Create new account</a>
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
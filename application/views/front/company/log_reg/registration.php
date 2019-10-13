

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Job Providers Registration</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="<?php echo base_url(); ?>asset/front/images/icons/favicon.ico" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/front/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/front/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/front/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/front/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/front/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/front/vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/front/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/front/vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/front/css/util.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/front/css/m.css">
    <!--===============================================================================================-->
</head>
<body>

    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-50">
               <?php echo form_open('company/company/save_company',array('class'=> 'login100-form validate-form')) ?>

               <span class="login100-form-title p-b-33">
                Provider Register
            </span>
            <?php if($this->session->success): ?>
               <p class="alert alert-success  message"><?php echo $this->session->success; ?></p>

           <?php endif; ?>

            <?php if($this->session->error): ?>
               <p class="alert alert-warning message"><?php echo $this->session->error; ?></p>

           <?php endif; ?>

           <div class="wrap-input100" data-validate="">
            <input class="input100" type="text" name="company_name" placeholder="Company Name" required="">
            <span class="focus-input100-1"></span>
            <span class="focus-input100-2"></span>
        </div>

        <div class="wrap-input100" data-validate="">
            <input class="input100" type="text" name="email" placeholder="Company Email" required="">
            <span class="focus-input100-1"></span>
            <span class="focus-input100-2"></span>
        </div>

        <div class="wrap-input100" data-validate="">
            <input class="input100" type="text" name="full_name" placeholder="Author Name" required="">
            <span class="focus-input100-1"></span>
            <span class="focus-input100-2"></span>
        </div>


        <div class="wrap-input100" data-validate="">
            <input class="input100" type="text" name="location" placeholder="Location" required="">
            <span class="focus-input100-1"></span>
            <span class="focus-input100-2"></span>
        </div>

        <div class="wrap-input100 rs1" data-validate="Password is required">
            <input class="input100" type="password" name="password" placeholder="Password" required="">
            <span class="focus-input100-1"></span>
            <span class="focus-input100-2"></span>
        </div>

        <div class="wrap-input100 rs1" data-validate="Password is required">
            <input class="input100" type="password" name="password_confirm" placeholder="Confirm Password" required="">
            <span class="focus-input100-1" ></span>
            <span class="focus-input100-2"></span>
        </div>

        <div class="container-login100-form-btn m-t-20">
            <button type="submit" class="login100-form-btn" name="SUBMIT">
                Register
            </button>
        </div>



    </form>
</div>
</div>
</div>



<!--===============================================================================================-->
<script src="<?php echo base_url(); ?>asset/front/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="<?php echo base_url(); ?>asset/front/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
<script src="<?php echo base_url(); ?>asset/front/vendor/bootstrap/js/popper.js"></script>
<script src="<?php echo base_url(); ?>asset/front/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="<?php echo base_url(); ?>asset/front/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
<script src="<?php echo base_url(); ?>asset/front/vendor/daterangepicker/moment.min.js"></script>
<script src="<?php echo base_url(); ?>asset/front/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
<script src="<?php echo base_url(); ?>asset/front/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
<script src="<?php echo base_url(); ?>asset/front/js/m.js"></script>

<script type="text/javascript">
    var pwd = new LiveValidation('company_password', {
        validMessage: "Correct"
    });

    pwd.add(Validate.Presence);

    pwd.add(Validate.Length, {
        minimum: 6,
        maximum: 15
    });

    var cpwd = new LiveValidation('company_cpassword', {
        validMessage: "Correct"
    });

    cpwd.add(Validate.Presence);

    cpwd.add(Validate.Length, {
        minimum: 6,
        maximum: 15
    });

    cpwd.add(Validate.Confirmation, {
        match: 'company_password'
    });
</script>

<script>
    $(document).ready(function() {
        setTimeout(function(){
            $('.message').slideUp(500);
        },3000);
    });
</script>
</body>

</html>

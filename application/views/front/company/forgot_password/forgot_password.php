<div style="margin-top:100px;" class=""></div>
<div class="container">


    <div class="row">
        <h2 style="text-align: center;">Company Forgot Password</h2><hr>
        <div class="col-md-4" style="margin: 0 auto; max-width: 600px;">
            <?php if($this->session->error): ?>
                <p class="alert alert-warning" id="message" style="color:white; background: orange; padding: 6px;"><?php echo $this->session->error; ?></p><br>
            <?php endif; ?>
            <?php echo form_open('company/company/forgot_password',array('class'=> 'login')) ?>

            <p class="form-row form-row-wide">
                <label for="username">
                    User Email:
                    <i class="ln ln-icon-Male"></i>
                    <input type="email" class="input-text" name="email" id="username" value="">
                </label>
            </p>

            <p class="form-row">
                <input type="submit" class="button border fw margin-top-10" name="btn-login"  placeholder="Enter you email" value="Login">

                <!-- <label for="rememberme" class="rememberme">
                    <input name="rememberme" type="checkbox" id="rememberme" value="forever"> Remember Me
                </label> -->
            </p>

        
        </form>
    </div>
</div>
</div>

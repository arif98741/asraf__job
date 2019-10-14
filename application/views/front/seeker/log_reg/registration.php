<div style="margin-top:100px;" class=""></div>
<div class="container">


    <div class="row">
        <h2 style="text-align: center;">Seeker Registration Page</h2><hr>
        <div class="col-md-4" style="margin: 0 auto; max-width: 600px;">
            <?php if($this->session->error): ?>
                <p class="alert alert-warning" id="message" style="color:white; background: orange; padding: 10px;"><?php echo $this->session->error; ?></p><br>
            <?php endif; ?>
            <?php echo form_open_multipart('seeker/seeker/save_seeker',array('class'=> 'login')) ?>


            <p class="form-row form-row-wide">
                <label for="username">
                    Name:
                    <i class="ln ln-icon-Male"></i>
                    <input type="text" class="input-text" name="name"  >
                </label>
            </p>

            <p class="form-row form-row-wide">
                <label for="username">
                    Email:
                    <i class="ln ln-icon-Email"></i>
                    <input type="email" class="input-text" name="email"  >
                </label>
            </p>

            

            <p class="form-row form-row-wide">
                <label for="password">
                    Password:
                    <i class="ln ln-icon-Lock-2"></i>
                    <input class="input-text" type="password" name="password" i>
                </label>
            </p>

            <p class="form-row form-row-wide">
                <label for="password">
                    Mobile:
                    <i class="ln ln-icon-User"></i>
                    <input class="input-text" type="text" name="mobile" >
                </label>
            </p>


            <p class="form-row form-row-wide">
                <label for="password">
                    Address:
                    <i class="ln ln-icon-Globe"></i>
                    <textarea class="input-text" name="address" ></textarea>
                </label>
            </p>

             <p class="form-row form-row-wide">
                <label for="password">
                    Image:
                    <i class="ln ln-icon-User"></i>
                    <input type="file" name="image">
                </label>
            </p>


            <p class="form-row">
                <input type="submit" class="button border fw margin-top-10" name="btn-login" value="Register">

                <!-- <label for="rememberme" class="rememberme">
                    <input name="rememberme" type="checkbox" id="rememberme" value="forever"> Remember Me
                </label> -->
            </p>

           <!--  <p class="lost_password">
                <a href="fpass.php">Lost Your Password?</a>
            </p> -->

        </form>
    </div>
</div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        setTimeout(function(){
            $('#message').slideUp(800);
        },4000);
    });
</script>

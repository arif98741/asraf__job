<div style="margin-top:100px;" class=""></div>
<div class="container">


    <div class="row">
        <div class="col-md-4" style="margin: 0 auto; max-width: 600px;">
            <?php echo form_open('login/login',array('class'=> 'login')) ?>


            <select style="font-size:20px;" name="position">
                <option>--Select position--</option>
                <option value="company">Company Providers</option>
                <option value="seeker">Job Seekers</option>
            </select>


            <p class="form-row form-row-wide">
                <label for="username">
                    User Email:
                    <i class="ln ln-icon-Male"></i>
                    <input type="email" class="input-text" name="txtemail" id="username" value="">
                </label>
            </p>

            <p class="form-row form-row-wide">
                <label for="password">
                    Password:
                    <i class="ln ln-icon-Lock-2"></i>
                    <input class="input-text" type="password" name="txtupass" id="password">
                </label>
            </p>

            <p class="form-row">
                <input type="submit" class="button border fw margin-top-10" name="btn-login" value="Login">

                <label for="rememberme" class="rememberme">
                    <input name="rememberme" type="checkbox" id="rememberme" value="forever"> Remember Me
                </label>
            </p>

           <!--  <p class="lost_password">
                <a href="fpass.php">Lost Your Password?</a>
            </p> -->

        </form>
    </div>
</div>
</div>

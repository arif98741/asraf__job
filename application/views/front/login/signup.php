<div style="margin-top:100px;" class=""></div>
<div class="container">


    <div class="row">
        <h2 style="text-align: center;">Sign UP</h2><hr>
        <div class="col-md-4" style="margin: 0 auto; max-width: 600px;">
            <?php if($this->session->error): ?>
                <p class="alert alert-warning" id="message" style="color:white; background: orange; padding: 6px;"><?php echo $this->session->error; ?></p><br>
            <?php endif; ?>
            <?php echo form_open('login/login',array('class'=> 'login')) ?>


            <select style="font-size:20px;  height: 50px;" id="login_dropdown" name="position">
                <option selected="">--Select position--</option>
                <option value="company">Company Providers</option>
                <option value="seeker">Job Seekers</option>
            </select>

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

        $('#login_dropdown').change(function(event) {
            var value = $(this).val();

            if (value == 'company') {
                
                window.location.href = "<?php echo base_url(); ?>provider_registration";
            }else if (value == 'seeker') {
                
                window.location.href = "<?php echo base_url(); ?>seeker/registration";
            }
        });
    });
</script>

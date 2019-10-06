

<!-- Main Banner Section Start -->	
<div>	 

</div> 
</html>

<!-- CONTENT -->
<div id="content">
  <div class="container">



    <ol  class="breadcrumb">
      <li><a href="index.html">Home</a></li>
      <li class="active">Contact Us</li>
    </ol>
    
    <div class="row">
      <div class="col-sm-9" >
       <div class="top-emp-center p5">
         <h4>Scholarships</h4>
       </div>
       <div class="row"> 
         <div class="col-sm-12"> 
           <table class="table table-bordered">
             <thead>
               <tr>
                 <th>Sl</th>
                 <th>Scholarship Name</th>
                 <th>Univeristy</th>
                 <th>Description</th>
                 <th>Deadline</th>
                 <th>-</th>
               </tr>
             </thead>
             <tbody>
              <?php $i = 1; foreach($scholarships as $scholarship) {?>
               <tr>
                <td ><?php echo $i ;?></td>
                <td ><?php echo $scholarship->scholarship_name; ?></td>
                <td ><?php echo $scholarship->university_name; ?></td>
                <td ><?php echo $scholarship->description;?></td>
                <td ><?php echo $scholarship->deadline; ?></td>
                <td>
                  <a href="<?php echo base_url();?>scholarship/apply/<?php echo $scholarship->id; ?>" class="btn btn-sm btn-primary">Apply</a>
                  
                </td>


              </tr>
              <?php $i++;} ?>
            </tbody>
          </table>    
        </div><!--col-sm-12-->
      </div>



    </div><!--col-sm-9-->

    <div class="col-sm-3" >

      <div class="create-job">
       <div class="create-job-head">
        <h3> Enquiry Form </h3>
      </div>
      <div class="create-job-content">

       <p ></p>
       <form  action="#" name="formreg" id="formreg" method="post" onsubmit="return ChkContact()">
        <div class="form-group">
          <input type="text" class="form-control" id="fullname" name="fullname" value="" placeholder="*Name"><div id='id1'></div>
        </div>
        <div class="form-group">
          <input type="email" class="form-control" id="email" name="email"  placeholder="Email"><div id='id2'></div>
        </div>
        <div class="form-group">
          <input type="text" class="form-control" id="mobile" name="mobile" maxlength="10" placeholder="*Phone"><div id='id3'></div>
        </div>
        <div class="form-group">
          <textarea class="form-control" id="message" name="message" rows="3" placeholder="*Message"></textarea><div id='id4'></div>
        </div>
        <div class="form-group">


         <div id='id5'></div>
       </div>
       <!--<div class="g-recaptcha" data-sitekey="6LdwJCMUAAAAAENeQP_xGsG-VFH4vNd1OGHGs8Wy"></div>-->
       <div class="ali-right"> 
         <input  type="hidden" id="formsubmit" name="formsubmit" value="add">
         <input class="btn-blue btn" type="submit" name="Submits"  value="Submit" onclick="return ValidCaptcha();" >
       </div>
     </form>
   </div>
 </div><!--create-job-->



</div><!--row-->
</div><!-- container -->

</div><!-- CONTENT -->

<script type="text/javascript">

/*  function DrawCaptcha()
    {
        var a = Math.ceil(Math.random() * 10)+ '';
        var b = Math.ceil(Math.random() * 10)+ '';       
        var code = a + ' + ' + b+ ' = ';
        document.getElementById("txtCaptcha").value = code;
        document.getElementById("total").value = parseInt(a)+parseInt(b);
      } */

      function ChkContact()
      {

//tinyMCE.triggerSave();
if(document.getElementById('fullname').value=='')
{
	
  document.getElementById('id1').innerHTML='<span style="color:#DE1616;">Enter the Name</span>';
  document.getElementById('fullname').focus();
  return false;
}
var noalpha = /^[a-zA-Z ]*$/;

if (!noalpha.test(document.getElementById('fullname').value)) {
     /*alert("Special characters are not allowed in companyname field.");
     document.form1.companyname.value="";*/
     document.getElementById('id1').innerHTML='<span style="color:#DE1616;">Enter the Name in Alphabets Only</span>';
     document.getElementById('fullname').focus();
     return false;
   }
   if(document.getElementById('email').value=='')
   {
    document.getElementById('id1').innerHTML='';
    document.getElementById('id2').innerHTML='<span style="color:#DE1616;">Enter the Email-Id</span>';
    document.getElementById('email').focus();
    return false;
  }
  if(echeck(document.getElementById('email').value)==false)
  {
    document.getElementById('id2').innerHTML=''
    document.getElementById('id2').innerHTML='<span style="color:#DE1616;">Check your Email ID</span>';
    document.getElementById('email').focus();
    return false;
  }
  if(document.getElementById('mobile').value=='')
  {
   document.getElementById('id1').innerHTML='';
   document.getElementById('id2').innerHTML='';
   document.getElementById('id3').innerHTML='<span style="color:#DE1616; ">Enter your mobile number</span>';
   document.getElementById('mobile').focus();
   return false;
 }
	/*else if(!numberReg.test($("#mobile").val())){
	 document.getElementById('id1').innerHTML='';
		document.getElementById('id2').innerHTML='';
		document.getElementById('id3').innerHTML='<span style="color:#DE1616; font-family: monospace;">Enter Valid Mobile Number</span>';
		document.getElementById('mobile').focus();
		return false;
    //$('#mobileLabel').html('<span class="error"> Numbers only</span>');clr=1;
  }*/
  if(document.getElementById('message').value=='')
  {
   document.getElementById('id1').innerHTML='';
   document.getElementById('id2').innerHTML='';
   document.getElementById('id3').innerHTML='';
   document.getElementById('id4').innerHTML='<span style="color:#DE1616;">Enter the Message</span>';
   document.getElementById('message').focus();
   return false;
 }
 if(document.getElementById('message').value.length <=10)
 {
   document.getElementById('id1').innerHTML='';
   document.getElementById('id2').innerHTML='';
   document.getElementById('id3').innerHTML='';
   document.getElementById('id4').innerHTML='<span style="color:#DE1616;">Enter the Message in atleast 10 Characters</span>';
   document.getElementById('message').focus();
   return false;
 }
 if(document.getElementById('txtInput').value=="")
 {

  document.getElementById('id5').innerHTML='<span style="color:#DE1616;">Enter the Captcha</span>';
  document.getElementById('txtInput').focus();
  return false;
}
else
{
 document.getElementById('id1').innerHTML='';
 document.getElementById('id2').innerHTML='';
 document.getElementById('id3').innerHTML='';
 document.getElementById('id4').innerHTML='';
 document.getElementById('id5').innerHTML='';
 document.getElementById("formreg").submit();

 return true;
}


/*	var captcha=ValidBotBoot();
	
	if(captcha==false) {
		alert("Please enter valid captcha code");
		document.getElementById('BotBootInput').focus();
		return false;
	}*/
	
	/*if(document.getElementById('reg_answer').value=='')
		{
		alert("Please enter the captcha code");
		document.getElementById('reg_answer').focus();
		return false;
		}
		if(document.getElementById('reg_answer').value!='')
		{
		if(document.getElementById('reg_answer').value!=document.getElementById('total').value)
        {
		alert("Please enter the valid captcha code");
		document.getElementById('reg_answer').focus();
		return false;
		}
  }*/

}

function echeck(str) 
{

  var at="@";
  var dot=".";
  var lat=str.indexOf(at);
  var lstr=str.length;
  var ldot=str.indexOf(dot);
  if (str.indexOf(at)==-1){

   return false;
 }

 if (str.indexOf(at)==-1 || str.indexOf(at)==0 || str.indexOf(at)==lstr){

   return false;
 }

 if (str.indexOf(dot)==-1 || str.indexOf(dot)==0 || str.indexOf(dot)==lstr){

  return false;
}

if (str.indexOf(at,(lat+1))!=-1){

  return false;
}

if (str.substring(lat-1,lat)==dot || str.substring(lat+1,lat+2)==dot){

  return false;
}

if (str.indexOf(dot,(lat+2))==-1){

  return false;
}

if (str.indexOf(" ")!=-1){

  return false;
}

return true;			
}

</script>

<!--<script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
  <script type="text/javascript" src="assets/js/jquery-1.2.6.min.js"></script>-->
  <!--ADVANCED SEARCH POPUP-->


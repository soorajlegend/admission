<?php
session_start();
error_reporting(0);
include 'header.php';
include('../connect.php');

if(isset($_SESSION['serial'])){

//update scratch card status
$sqli = " update scratchcard set status='1' where serial='".$_SESSION['serial']."'";
if (mysqli_query($conn, $sqli)) {
}

 date_default_timezone_set('Africa/Lagos');
 $current_date = date('Y-m-d');

if(isset($_POST["btnsubmit"]))
{

//Get application ID
function applicationID(){
$string = (uniqid(rand(), true));
return substr($string, 0,5);
}
	
$applicationID = "ADM/".date("Y")."/".applicationID();		


$fullname = mysqli_real_escape_string($conn,$_POST['txtfullname']);
$sex = mysqli_real_escape_string($conn,$_POST['cmdsex']);
$phone = mysqli_real_escape_string($conn,$_POST['txtphone']);
$email = mysqli_real_escape_string($conn,$_POST['txtemail']);
$lga = mysqli_real_escape_string($conn,$_POST['txtlga']);
$state = mysqli_real_escape_string($conn,$_POST['txtstate']);

$status='0';
 $msg='';
  $msg_error='';
   $msg_success='';


$sql = "INSERT INTO `admission` (`ID`, `fullname`, `sex`, `phone`, `email`, `lga`, `state`, `ppic`, `ipic`, `bpic`, `photo`, `status`, `date_admission`, `applicationID`) VALUES (NULL, '$fullname', '$sex', '$phone', '$email', '$lga', '$state', '', '', '', '', '0', '$current_date', '$applicationID')";
 
 if ($conn->query($sql) === TRUE) {
 
$_SESSION['email']=$email;
$_SESSION['fullname']=$fullname;
$_SESSION['ApplicationID']=$applicationID;




?>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
Swal.fire({
title: 'Your information has been saved, what next is to upload your Primary School Certificate, Birth Certificate and Indegene Certificate ',
showCancelButton: false,
confirmButtonText: `Okay`,
denyButtonText: `Don't save`,
}).then((result) => {
if (result.isConfirmed) {
window.location = 'upload.php';
} else if (result.isDenied) {
Swal.fire('Changes are not saved', '', 'info')
}
})
</script>

<?php



    }else { 
?>
<script>
alert('Problem Occured , Try Again');

</script>
<?php
}
}
}

else{
  header("location:../index.php");
}
?>


<title>Application Form | GSS Janbulo</title>
<?php if ($msg <> "") { ?>
  <style type="text/css">
<!--
.style1 {
	font-size: 12px;
	color: #FF0000;
}
-->
  </style>
  <div class="alert alert-dismissable alert-<?php echo $msgType; ?>">
    <button data-dismiss="alert" class="close" type="button">x</button>
    <p><?php echo $msg; ?></p>
  </div>
<?php } ?>
<p><h4><?php echo "<p> <font color=red font face='arial' size='3pt'>$msg_error</font> </p>"; ?></h4>  </p>
  <h4><?php echo "<p> <font color=green font face='arial' size='3pt'>$msg_success</font> </p>"; ?></h4>  </p>
<div class="container">
  <div class="row">
    <div class="col-lg-3"></div>
    <div class="col-lg-6 col-md-12">
      <div class="well contact-form-container">
        <form class="form-horizontal contactform" action="" method="post" name="f" >
          <fieldset>
	
                         <div class="form-group">
              <label class="col-lg-12 control-label" for="pass1">Fullname
                <input type="text"  id="pass1" class="form-control" name="txtfullname" value="<?php if (isset($_POST['txtfullname']))?><?php echo $_POST['txtfullname']; ?>" required="">
              </label>
            </div>
			<div class="form-group">
              <label class="col-lg-12 control-label" for="pass1">Gender
               <select name="cmdsex" id="gender" class="form-control" required="">
                                                    <option value=" ">--Select Gender--</option>
                                                     <option value="Male">Male</option>
                                                      <option value="Female">Female</option>
                                              </select>
              </label>
            </div>
			  <div class="form-group">
              <label class="col-lg-12 control-label" for="pass1">Guadian's Phone Number
                <input type="text"  id="pass1" class="form-control" name="txtphone" value="<?php if (isset($_POST['txtphone']))?><?php echo $_POST['txtphone']; ?>" required="">
              </label>
            </div>
				  <div class="form-group">
              <label class="col-lg-12 control-label" for="uemail">Guadian's Email Address
             <input type="email" name="txtemail" class="form-control" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"  value="<?php if (isset($_POST['txtemail']))?><?php echo $_POST['txtemail']; ?>" required>
              </label>
            </div>
            <div class="form-group">
              <label class="col-lg-12 control-label" for="pass1">State
                <input type="text"  id="pass1" class="form-control" name="txtstate" value="<?php if (isset($_POST['txtstate']))?><?php echo $_POST['txtstate']; ?>" required="">
              </label>
            </div>
			 <div class="form-group">
              <label class="col-lg-12 control-label" for="pass1">Local Government Area
                <input type="text"  id="pass1" class="form-control" name="txtlga" value="<?php if (isset($_POST['txtlga']))?><?php echo $_POST['txtlga']; ?> " required="">
              </label>
            </div>
				
			
		
			

            <div style="height: 10px;clear: both"></div>

            <div class="form-group">
			
			
              <div class="col-lg-10">
                <button class="btn btn-primary" type="submit" name="btnsubmit">Submit</button> 
              </div>
            </div>
          </fieldset>
        </form>
      </div>
    </div>
  </div>
</div>

<p>
</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p data-v-6f398a90="">&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>

<?php
session_start();
error_reporting(0);
include 'header.php';
include('../connect.php');



$sql = "select * from admission where email='".$_SESSION['email']."'"; 
$result = $conn->query($sql);
$row = mysqli_fetch_array($result);



if(isset($_POST['btnupload'])){

  $photo=$_POST['photo'];
$ipc=$_POST['ipc'];
$bpic=$_POST['bpic'];
$ppic=$_POST['ppic'];
  //ipc
$ipic= addslashes(file_get_contents($_FILES['ipic']['tmp_name']));
	$ipic_name= addslashes($_FILES['ipic']['name']);
	$ipic_size= getimagesize($_FILES['ipic']['tmp_name']);
	move_uploaded_file($_FILES["ipic"]["tmp_name"],"../upload/" . $_FILES["ipic"]["name"]);			
			$ipic="upload/".$_FILES["ipic"]["name"];

 $ipic = " update admission set ipic='$ipic' where email='".$_SESSION['email']."'";
  


  //bpic


 $bpic= addslashes(file_get_contents($_FILES['bpic']['tmp_name']));
  $bpic_name= addslashes($_FILES['bpic']['name']);
  $bpic_size= getimagesize($_FILES['bpic']['tmp_name']);
  move_uploaded_file($_FILES["bpic"]["tmp_name"],"../upload/" . $_FILES["bpic"]["name"]);     
      $bpic="upload/".$_FILES["bpic"]["name"];

 $bpic = " update admission set bpic='$bpic' where email='".$_SESSION['email']."'";


//ppic 

 $ppic= addslashes(file_get_contents($_FILES['ppic']['tmp_name']));
  $ppic_name= addslashes($_FILES['ppic']['name']);
  $ppic_size= getimagesize($_FILES['ppic']['tmp_name']);
  move_uploaded_file($_FILES["ppic"]["tmp_name"],"../upload/" . $_FILES["ppic"]["name"]);     
      $ppic="upload/".$_FILES["ppic"]["name"];
 $ppic = " update admission set ppic='$ppic' where email='".$_SESSION['email']."'";
  




      $photo= addslashes(file_get_contents($_FILES['photo']['tmp_name']));
  $photo_name= addslashes($_FILES['photo']['name']);
  $photo_size= getimagesize($_FILES['photo']['tmp_name']);
  move_uploaded_file($_FILES["photo"]["tmp_name"],"../upload/" . $_FILES["photo"]["name"]);     
      $photo="upload/".$_FILES["photo"]["name"];

 $photo = " update admission set photo='$photo' where email='".$_SESSION['email']."'";
  



  

   if (mysqli_query($conn, $bpic) && mysqli_query($conn, $ipic) && mysqli_query($conn, $ppic) && mysqli_query($conn, $photo) ) {

    ?>
									
<script>
alert('Your appliaction has been submitted successfully! ');
window.location = "../index.php";

</script>

	<?php	
}
}

?>

<title>Upload Image | GSS Jan Bulo</title>
	<style type="text/css">
<!--
.style1 {
	color: #0000FF;
	font-weight: bold;
}
.style2 {color: #FF0000}
-->
    </style>
	<div class="container">
  <div class="row">
    <div class="col-lg-3"></div>

    <div class="col-lg-6 col-md-12"></div>
      <div class="well contact-form-container">
       	<form  class="wizard-big" method="post"  enctype="multipart/form-data">
          <fieldset>
            
			  <div class="form-group">
            
              <br />
              Fullname <?php echo $_SESSION['fullname']; ?>
              </label>
            </div>
			
            <div class="form-group">
              <label class="col-lg-12 control-label" for="uemail">Guadian's Email Address <?php echo $_SESSION['email']; ?>
             
              </label>
            </div>

<div class="form-group">
              <label class="col-lg-12 control-label" for="uemail">Application ID: <?php echo $_SESSION['ApplicationID']; ?>
             
              </label>
            </div>
			 <div class="form-group">
              <label class="col-lg-12 control-label" for="pass1"><span class="controls"><br />
              <br />
              <h4 class="text-danger">N/B: Copy out your email and Application ID</h4>
               <br />
             </span>
              <br />
              <br />
               <div class="form-group">
              <label class="col-lg-12 control-label" for="pass1">Passport Photograph
                <input type="file"   class="form-control" name="photo" required="">
              </label>
            </div>
           <div class="form-group">
              <label class="col-lg-12 control-label" for="pass1">Primary School Certificate
                <input type="file"   class="form-control" name="ppic" required="">
              </label>
            </div>
      <div class="form-group">
              <label class="col-lg-12 control-label" for="pass1">Indegende Certificate
                <input type="file"   class="form-control" name="ipic" required="">
              </label>
            </div>
            <div class="form-group">
              <label class="col-lg-12 control-label" for="pass1">Certificate of Birth
                <input type="file"  class="form-control" name="bpic"   required="">
              </label>
            </div>
    


              </label>
            </div>
		  <div class="form-group">
             
			 
		    <label class="col-lg-12 control-label" for="pass1"></label>
		  </div>
           


            <div style="height: 10px;clear: both"></div>




           
                <p>&nbsp;</p>
                <table width="233" border="0">
                  <tr>
                    <td width="81">&nbsp; 
					  <div class="form-group">
                        <div class="col-lg-10">
                          <div align="center">
                            <button class="btn btn-primary" type="submit" name="btnupload">Upload</button>
                          </div>
                        </div>
				      </div>
					  <div align="center"><a href="../login.php"></a></div></td>
                    <td width="142">&nbsp;
                      <div align="center"><a href="../index.php">Finish </a></div></td>
                  </tr>
          </table> 
             
          </fieldset>
        </form>
      </div>
    </div>
  </div>
</div>


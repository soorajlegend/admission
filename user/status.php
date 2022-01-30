  <!DOCTYPE html>
  <html>
  <head> 
    <link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon" />
    <title>Admission Letter</title>
    <meta content="width=device-width, initial-scale=1.0, shrink-to-fit=no" name="viewport">
    <style type="text/css">
      body{
        max-width:100%;
        padding: 50px 30px;
        word-wrap: break-word;
      }
      body p{
        word-wrap:break-word;
        max-width: 100%;
      }
      @media print{
        body{
          padding: 30px ;
        }
        .printbtn{
          display: none;
        }
      }
    </style>
  </head>
  <body>
  
  
   

<?php
session_start();
error_reporting(0);
include('connect.php');

if(strlen($_SESSION['uemail'])=="" || !isset($_SESSION["uemail"]))
    {   
    header("Location: login.php"); 
    }
    else{ }
      
$email = $_SESSION['uemail'];
$adm = $_SESSION['adm'];
?>
      <div id="content">
        <div class="content_item" class="container">
          <div class="col-md-12">
            <div class="well well-md">
              <p>
                <?php 

$sql = "SELECT * FROM admission WHERE email = '$email' AND applicationID='$adm' AND status = '1'";
  $result = mysqli_query($conn, $sql);
($row = mysqli_fetch_assoc($result));
if ( $row['status'] == '1') {
				 ?>
              </p>
              <div style="width:720px; height:950px; border: 2px solid black; padding:15px; ">
              <p>
                <img src="../images/apple-touch-icon.jpg" width="88" height="86" />
              </p>
              <div style="text-align: center; margin-top: -95px;   "><h2 style="margin-left: 50px;"><b>GOVERNMENT SECONDARY SCHOOL JANBULO</b></h2>

                Address: No. 1 Janbulo, Kano State Nigeria.




                <h4><b>Office of the Registrar</b></h4>
<hr>
              </div>

              NAME: &nbsp; &nbsp; &nbsp;<b><?php echo $row['fullname']?></b> <div style="margin-top:-20px; " align="right">DATE: &nbsp; <b><?php

                echo $row['date_admission'];
              ?></b>
            </div>
                      <p>I am pleased to inform you that you are admitted into <b>GSS Janbulo Kano.</b></p>
                      <p>
                       This admission is however, subject to the following conditions:
                       <br>

<ol type="a">
  <li>
    You must have a First School Leaving Ceritifcate.
  </li>

  <li>
    You must have a valid Indegene Ceritificate.
  </li>
<li>
    You must have a valid Ceritificate of Birth.
  </li>

  <li>
   The particulars provided in processing the application are correct in every respect. If at any point of registration it is discovered that you provide <b>false</b>, incorrect or misleading information, the admission will be cancelled.
  </li>
  <li>
    You present for security at the time of registration, the original of your credentials listed in processing your application.
  </li>
  <li>
    You pay the relevant fee as per the list is attached.
  </li>
  <li>
    <b>Registration fees are non-refundable.</b>
  </li>
  <li>
    You abide by the conditions specified in this letter of admission and in the School.
  </li>
  <li>
    You abide by the Islamic injuctions including school dress code which is being enforced.
  </li>
  <li>
    Our school recognizes high moral Islamic Values and you are expected to conduct yourself in agreement with the principles upon which the school was established.
  </li>
  
</ol>
                     </p>

Congratulations, I pray that Allah will guide you through, Amin.
                       
<br>
<br>
<div style="margin-top: 250px;">
Yours faithfully,
<br>
<br>
---------------------<br>
Registrar
                      </p>

                  <?php }else{ ?>
                    <h4 style="color:red">Sorry, no Admission yet. Check back later.</h4>
                    <?php } ?>
             
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<br>
<br>
<br>
 <div class="printbtn">
<button onclick="window.print();">Print</button>
</div>
</body>
  </html>

<?php
session_start();
error_reporting(0);
include('../connect.php');
if(strlen($_SESSION['uemail'])=="" || !isset($_SESSION["uemail"]))
    {   
    header("Location: login.php"); 
    }
    else{
	
      
$email = $_SESSION['uemail'];

 $sql = "SELECT * FROM admission WHERE email='".$email."' AND applicationID='".$_SESSION['adm']."'";
  $result = mysqli_query($conn, $sql);
($row = mysqli_fetch_assoc($result));
if (mysqli_num_rows($result) > 0) {
// output data of each row

 header("location:status.php");
 	}

}
?>
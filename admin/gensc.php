<?php


session_start();
error_reporting(0);
include('../connect.php');
if(strlen($_SESSION['admin-username'])=="" || !isset($_SESSION['admin-username']))
    {   
    header("Location:login.php"); 
    }
    else{

    	echo "generating scratch card";


function serno($limit){
$codes = '';
for($i = 0; $i < $limit; $i++) { $codes .= mt_rand(0, 9); }
return $codes;
}
echo serno(10);

	echo "<br>";

	function pin($limit){
$codep = '';
for($i = 0; $i < $limit; $i++) { $codep .= mt_rand(0, 9); }
return $codep;

}
echo pin(10);

	

// save scratch card details

	$save =mysqli_query($conn, "INSERT INTO scratchcard (pin, serial, status) VALUES()");
}

?>

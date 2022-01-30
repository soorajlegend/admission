<?php
// error_reporting(0);
include('../connect.php');
$alert="";

     $i=0;
     if(isset($_GET['code'])){
     $code = $_GET['code'];
        while( $i <= $code) {
        //Generate random numbers
        $codes= mt_rand(0, 9).mt_rand(0, 9).mt_rand(0, 9).mt_rand(0, 9).mt_rand(0, 9).mt_rand(0, 9).mt_rand(0, 9).mt_rand(0, 9).mt_rand(0, 9).mt_rand(0, 9).mt_rand(0, 9).mt_rand(0, 9);
        $codep= mt_rand(0, 9).mt_rand(0, 9).mt_rand(0, 9).mt_rand(0, 9).mt_rand(0, 9).mt_rand(0, 9).mt_rand(0, 9).mt_rand(0, 9).mt_rand(0, 9).mt_rand(0, 9).mt_rand(0, 9).mt_rand(0, 9);
        
        //insert pin and serial number generated 
        $query ="INSERT INTO scratchcard(pin, ser, status) VALUES ('$codep','$codes','0')";
        // if($conn -> query($query)===true){
        // $output="the pins has been generated successfully";
        //     }else{
        //     echo"error".$query.$conn -> error;

        // echo $i." ".strlen($codep)." ".strlen($codes)."<br>";
        $i++;

         }
         $alert=' <script>
         swal({
           title: "Success!",
           text: "Good",
           type: "success",
           timer: 2000,
           showConfirmButton: false
         }, function(){
               window.location.href = "dashboard.php";
         });
         </script>';
        }
//         $alert=' <script>
// swal({
//   title: "Success!",
//   text: "Good",
//   type: "success",
//   timer: 2000,
//   showConfirmButton: false
// }, function(){
//       window.location.href = "index.php";
// });
// </script>';
            
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
    <title>Scratch card</title>
</head>
<style>
    body{
        align-item: center;
    }
</style>
<body>
<?php echo $alert; ?>
</body>
</html>
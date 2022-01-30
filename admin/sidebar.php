
      
<?php
include 'connect.php';
$output="";
if (isset($_POST['submit'])){
  $numberOfCode= $_POST['code'];
  for ($i=0; $i < $numberOfCode; $i++) { 
    $ser= mt_rand(10, 10000000000000);

    $pin= mt_rand(1000000000, 10000000000000);
  $sql ="SELECT pin FROM codes WHERE pin='$code' ";
  $result=mysqli_query($conn,$sql) or die(mysqli_error());
  $count=mysqli_num_rows($result);
  if($count == 1){
  continue;
} else {  
  $query ="INSERT INTO scratchcard(ser, pin) VALUES ('$ser','$code')";
  if($conn -> query($query)===true){
      $output="the pins has been generated successfully";
            } else{
      echo"error".$query.$conn -> error;
    }
}
  }
}


?>
                           <style type="text/css">
 
  

 .loader{
  display: none;
    width: 150px;
    height: 7px;
    margin-left: -50px;
    margin-top: -70px;
    border-radius: 4px;
    background-color: #28a745;;
    position: relative;
    -webkit-animation-name: example; /* Chrome, Safari, Opera */
    -webkit-animation-duration: 1s; /* Chrome, Safari, Opera */
    -webkit-animation-iteration-count: infinite; /* Chrome, Safari, Opera */
    animation-name: example;
    animation-duration: 1s;
    animation-iteration-count: infinite;
}

/* Chrome, Safari, Opera */
@-webkit-keyframes example {
  0%   {background-color:red; left:0px; top:0px;}
    25%  {background-color:#28a745; left:100%; top:0px;}
    50%  {background-color:#28a745; left:100px; top:0px; display: none;}
    75%  {background-color:#28a745;left:100%; top:0px;}
    100% {background-color:#28a745; left:100%; top:0px; display: none;}
}

/* Standard syntax */
@keyframes example {
    0%   {background-color:#28a745; width: 150px; left:0px; top:0px;}
    100% {background-color:#28a745; width: 150px; left:120%; top:0px; display: none;}
}
</style>
<script src="plugins/jquery/jquery.min.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
  $("#sc").click(function(){
    $.post("gensc.php",
    {
      name: "Dodfdfdk",
      city: "Duckburg"
    },
    function(data,status){
      alert("Data: " + data + "\nStatus: " + status);
    });
  });
});
</script>

        <li class="nav-item menu-open">
            <a href="index.php" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Admin Dashboard
              <i class="right fas fa-angle-left"></i></p>
            </a></li>
			 			

 

<li class="nav-item">
            <a href="#" class="nav-link">
             <i class="fas fa-stamp"></i>
              <p>
              Scratch Cards
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                 
                <form action="scratch-code.php" method="GET" >
        <div align="left" style="width: 100%;">
  <div id="loader" class="loader"></div>
<br>
 
<label>Generate Scratch Card</label>
<select name="code" id="code" required class="form-control">
      <option>25</option>
      <option>50</option>
      <option>100</option>
     
      <option selected disabled>How many?</option>
    </select>
    <p><?php echo "$output"; ?></p>
    <button type="submit" class="btn btn-outline-success" name="" onclick="" onmouseover="checkCode()" style="margin-top: 5%;" >Generate</button>
    <div align="right">
    <br>
   
    </div>
      </form>
              </li>
         


               <li class="nav-item">
                <a href="user-record.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View active scratch cards</p>
                </a>
              </li>
               <li class="nav-item">
                <a href="user-record.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View used scratch cards</p>
                </a>
              </li>
              </ul>
          </li>
           



           	 <li class="nav-item">
            <a href="#" class="nav-link">
             <i class="fas fa-database"></i>
              <p>
               Records
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="user-record.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Applicants</p>
                </a>
              </li>
			   
             
              </ul>
          </li>
		    <li class="nav-header">Settings</li>
          <li class="nav-item">
            <a href="changepassword.php" class="nav-link">
           <i class="fa fa-cog" style="font-size:18px;color:red"></i>
              <p>Change Password</p>
            </a>
          </li>
      
          <a href="../index.php" class="nav-link">
         <i class="fas fa-exchange-alt" style="font-size:18px"></i>
              <p>Switch To User</p>
            </a>
          </li>
  
          <li class="nav-item">
            <a href="logout.php" class="nav-link">
       <i class='fas fa-sign-out-alt' style='font-size:18px;color:red'></i>
              <p class="text">Logout</p>
            </a>
          </li>
            
     
         
             
         
          </li>




      </div>
      </div>
      <script type="text/javascript">
        function turnOnLoader() {
  var loader = document.getElementById('loader');
  loader.style.display = "block";
}

function checkCode() {
  if (getElementById("code").value == "How many?") {
    alert("please choose the rate of the code you want to generate.");
  }
}
      </script>








		  
		 
             <script type="text/javascript">
        function turnOnLoader() {
  var loader = document.getElementById('loader');
  loader.style.display = "block";
}

function checkCode() {
  if (getElementById("code").value == "How many?") {
    alert("please choose the rate of the code you want to generate.");
  }
}
      </script>
		  
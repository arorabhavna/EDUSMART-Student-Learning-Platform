<?php
   define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', 'root');
   define('DB_DATABASE', 'studlearning');
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['email']);
      $mypassword = mysqli_real_escape_string($db,$_POST['pswd']); 
      
      $sql = "SELECT email,pswd FROM login_student WHERE email = '$myusername' and pswd = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      //$active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         //session_register("myusername");
		 echo "success";
         $_SESSION['login_user'] = $myusername;
         echo include 'dashboard_student.php';
         //header("dashboard.html");
      }else {
		  $check_email = mysqli_query($db, "SELECT email FROM login_student WHERE email = '$myusername' ");
	if(mysqli_num_rows($check_email) > 0){
	  
		  echo "<script> alert('incorrect password');</script>";
		  //header("location: register.html");
		  echo include 'login_student.html';
	  $error = "Your Login Name or Password is invalid";}
		else{
	echo"<script type='text/javascript'>alert('User Email don't  exist. please signup');</script>";
	  header("location: signup_student.html");}
   }}
      
   


?>
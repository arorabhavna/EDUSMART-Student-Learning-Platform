<!DOCTYPE html>
<html lang="en">
<head>
  
  <title>LearnSmart</title>
  
  <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="base.css">
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<nav class="navbar navbar-default navbar-fixed-top " style="background-color: #202F3F   ">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <div class="nav navbar-brand navbar-left"></div>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <a class="navbar-brand navbar-left" href="#myPage"><big><b>LEARN SMART<b></big></a>
      <!-- <ul class="nav navbar-nav navbar-right">
        <li><a href="#about"><big><b>ABOUT</b></big></a></li>
        <li><a href="#courses"><big><b>COURSES</b></big></a></li>
        <li><a href="#notes"><big><b>NOTES</b></big></a></li>
        <li><a href="#tests" class="navbar-left"><big><b>ASSESMENT</b></big></a></li>
        
        
      </ul> -->
    </div>
  </div>


<div style="height:30px ;width:100%; background-color:#cbf55a">

</div></nav>
  
  
</div>
<body class=" w3-content" style="max-width:1600px">
<br><br><br><br>


<?php

		session_start();
		$myusername=$_SESSION['login_user'];
		
		$con=mysqli_connect("localhost","root","root","studlearning");
        // Check connection
        if (mysqli_connect_errno())
        {
          echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }
		
		$sql1="SELECT usn from student WHERE email='$myusername'";
		$result1=mysqli_query($con,$sql1);
		$row1=mysqli_fetch_assoc($result1);
		$usn=$row1['usn'];
		
		
	
		$course_list = $_POST['course'];
		//echo gettype($course_list);
	   
		echo 'You have been enrolled for :'.'<br>';
		$count=1;
		foreach($course_list as $c)
		{
			echo"$count."." $c"."<br>";
			$count=$count+1;
			
			
			$sql2="SELECT course_id FROM courses WHERE name='$c'";
			$result2=mysqli_query($con,$sql2);
			$row2=mysqli_fetch_assoc($result2);
			$courseid=$row2['course_id'];
			
			
			$sql3="INSERT INTO course_details VALUES ('$usn','$courseid')";
			$result3=mysqli_query($con,$sql3);
		}
	   
	   mysqli_close($con);
	   
	   echo"<a href='dashboard_student.php'>Go To Dashborad</a>";
	   
	   ?>

 

</body>
</html>





































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
//echo"<h1>ALL NOTES</h1>";
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
		 $sql2="SELECT distinct emp_id from notes";
        $result2=mysqli_query($con,$sql2); 
		
		//$sql3="SELECT * FROM notes  ";
		//$result3=mysqli_query($con,$sql3);
		
        // Associative array
        $row2=mysqli_fetch_assoc($result2);
		echo'<form action="n.php" method="post">';
        foreach($result2 as $row2)
        { 
        	$emp=$row2['emp_id'];
        	//echo'hi'.$emp;
        	echo"<u>$emp</u>"."<br>";
        	$sql3="SELECT * FROM notes where emp_id='$emp'";
			$result3=mysqli_query($con,$sql3);
			$count=0;
			foreach($result3 as $row3)
        	{
	          $value=$row3['name'];
	          $count+=1;
			  echo "<input type='radio' name='notes' value='$value'>";
			  printf ("$count. %s\n",$row3["name"]);
			  echo'<br>';
			}
			  
          		$row2=mysqli_fetch_assoc($result2);
          }
		  echo '<input type="submit" value="VIEW"></input>';
      echo'</form>';
        // Free result set
       // mysqli_free_result($result3);

        mysqli_close($con);
 




?>
<a href="dashboard_student.php"><button>GO TO DASHBOARD</button></a>
</body>
</html>
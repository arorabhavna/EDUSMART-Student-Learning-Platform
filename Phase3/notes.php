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
  <style>
.demo{
  
  font-size: 100px;
  margin-top: 0px;
  padding-right: 10px;
}

</style>
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
<p align="right" id="demo"></p>
<?php
        
        if(!isset( $_SESSION['login_user'] ) )
        {session_start();}
        $con=mysqli_connect("localhost","root","root","studlearning");
        // Check connection
        $_SESSION['nname']=$_POST['notes'];
        if (mysqli_connect_errno())
          {
          echo "Failed to connect to MySQL: " . mysqli_connect_error();
          }




        $nname = $_POST['notes'];
        $sql="SELECT * FROM notes WHERE name='$nname' ";
        $result=mysqli_query($con,$sql);
        $row=mysqli_fetch_assoc($result);
        $filename=$row['link'];
        //echo $filename;

        $file = fopen($filename,"r");

        while(! feof($file))
          {
          echo fgets($file). "<br />";
          }

        fclose($file);

        //readfile($filename, 'DBMS_PROJECT/notes');

      ?>

<a href="dashboard_student.php"><button>GO TO DASHBOARD</button></a>


</body>
</html>

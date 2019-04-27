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
        $_SESSION['tname']=$_POST['test'];
        if (mysqli_connect_errno())
          {
          echo "Failed to connect to MySQL: " . mysqli_connect_error();
          }




        $tname = $_POST['test'];
        $sql="SELECT * FROM test WHERE test_name='$tname' ";
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

        //readfile($filename, 'DBMS_PROJECT/test');

?>
<script>
// Set the date we're counting down to
var countDownDate = new Date().getTime();
var d = <?php
  $dbc = mysqli_connect("localhost", "root", "root", "studlearning") or die("error connecting to database");

            //Create query to fetch the records
            
            $sql1 = "SELECT duration from test WHERE test_name = '$tname'";
            $max = mysqli_query($dbc, $sql1) or die("error executing the query");

            while($row  = mysqli_fetch_assoc($max)){
                   $records[] = $row;
            }
             //print(json_encode($records));
             $max =  $records[0]['duration'];
             echo $max*60000;
    ?>;
countDownDate+=d;

// Update the count down every 1 second
var x = setInterval(function() {

  // Get todays date and time
  var now = new Date().getTime();
    
  // Find the distance between now and the count down date
  var distance = countDownDate - now;
    
  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
  // Output the result in an element with id="demo"
  document.getElementById("demo").innerHTML = days + "d " + hours + "h "
  + minutes + "m " + seconds + "s ";
    
  // If the count down is over, write some text 
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "EXPIRED";
    window.location.href = "timeup.html";
  }
}, 1000);
</script>
 
<form method="post" action='quiz_validate.php'>
  
  QUESTION 1
   <select name="q1">
    <option>A</option>
    <option>B</option>
    <option>C</option>
    <option>D</option>
  </select><br>

  
  QUESTION 2
   <select name="q2">
    <option>A</option>
    <option>B</option>
    <option>C</option>
    <option>D</option>
  </select><br>


  QUESTION 3
   <select name="q3">
    <option>A</option>
    <option>B</option>
    <option>C</option>
    <option>D</option>
  </select><br>

  QUESTION 4
   <select name="q4">
    <option>A</option>
    <option>B</option>
    <option>C</option>
    <option>D</option>
  </select><br>

  QUESTION 5
   <select name="q5">
    <option>A</option>
    <option>B</option>
    <option>C</option>
    <option>D</option>
  </select><br>

  QUESTION 6
   <select name="q6">
    <option>A</option>
    <option>B</option>
    <option>C</option>
    <option>D</option>
  </select><br>

  QUESTION 7
   <select name="q7">
    <option>A</option>
    <option>B</option>
    <option>C</option>
    <option>D</option>
  </select><br>

  QUESTION 8
   <select name="q8">
    <option>A</option>
    <option>B</option>
    <option>C</option>
    <option>D</option>
  </select><br>

  QUESTION 9
   <select name="q9">
    <option>A</option>
    <option>B</option>
    <option>C</option>
    <option>D</option>
  </select><br>

  QUESTION 10
   <select name="q10">
    <option>A</option>
    <option>B</option>
    <option>C</option>
    <option>D</option>
  </select><br>

<input type="submit" name="submit" value="CHECK" style="background-color: green;color:white">

</form>


</body>
</html>

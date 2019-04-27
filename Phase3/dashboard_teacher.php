<!DOCTYPE html>
<html lang="en">
<head>
  
  <title>LearnSmart</title>
  <style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}
</style>
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
      <ul class="nav navbar-nav navbar-right">
        
        <li><a href="addtests.php"><big><b>TESTS</b></big></a></li>
        <li><a href="addnotes.php"><big><b>NOTES</b></big></a></li>
        <li><a href="logout_teacher.php" class="navbar-left"><big><b>LOGOUT</b></big></a></li>
        
        
      </ul>
    </div>
  </div>


<div style="height:30px ;width:100%; background-color:#cbf55a">

</div></nav>
  
  
</div>
<body class=" w3-content" style="max-width:1600px">

<br><br><br><br>
<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
  <div class="w3-container">
    <a href="#" onclick="w3_close()" class="w3-hide-large w3-right w3-jumbo w3-padding w3-hover-grey" title="close menu">
      <i class="fa fa-remove"></i>
    </a>
    <img src="avatar2.png" style="width:45%;" class="w3-round"><br><br>
    <h4><b>
	TEACHER
	<br>
    <?php
      if(!isset( $_SESSION['login_user'] ) )
      {
       session_start();
      }
  
    $myusername=$_SESSION['login_user'];
     $con=mysqli_connect("localhost","root","root","studlearning");
        // Check connection
        if (mysqli_connect_errno())
          {
          echo "Failed to connect to MySQL: " . mysqli_connect_error();
          }

        $sql1="SELECT name from faculty WHERE email='$myusername'";
    $result1=mysqli_query($con,$sql1);
    $row1=mysqli_fetch_assoc($result1);
    $name=$row1['name'];
    
    echo "$name"."<br>";
    echo "$myusername";
    
    //printf('%s',$name);
    mysqli_close($con);
    
      ?>
		
	</b></h4>
    <p class="w3-text-grey"></p>
  </div>
  <div class="w3-bar-block">
    <a href="addtests.php" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-th-large fa-fw w3-margin-right"></i>ADD TESTS</a> 
    <a href="addnotes.php" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-file-text fa-fw w3-margin-right"></i>ADD NOTES</a> 
    <a href="#marksanalysis" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-pencil fa-fw w3-margin-right"></i>MARKS ANALYSIS</a>
    
  </div>
  
</nav>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px">

  <!-- Header -->
  <header id="portfolio">
    <a href="#"><img src="/w3images/avatar_g2.jpg" style="width:65px;" class="w3-circle w3-right w3-margin w3-hide-large w3-hover-opacity"></a>
    <span class="w3-button w3-hide-large w3-xxlarge w3-hover-text-grey" onclick="w3_open()"><i class="fa fa-bars"></i></span>
    
  </header>
  
         
    <h3><b>My Added Notes</b></h3>
      
      <?php
    //session_start();
    $myusername=$_SESSION["login_user"];
        //emailid=$_POST['email'];
    
        $con=mysqli_connect("localhost","root","root","studlearning");
        // Check connection
        if (mysqli_connect_errno())
          {
          echo "Failed to connect to MySQL: " . mysqli_connect_error();
          }
    
        $sql1="SELECT emp_id from faculty WHERE email='$myusername'";
    $result1=mysqli_query($con,$sql1);
    $row1=mysqli_fetch_assoc($result1);
    $usn=$row1['emp_id'];
    $sql2="SELECT name FROM notes WHERE emp_id='$usn' ";
        $result2=mysqli_query($con,$sql2);

        // Associative array
        $row2=mysqli_fetch_assoc($result2);
    $count=1;
    //echo 'helo';
         foreach($result2 as $row2)
        { 
          
      printf ("$count . %s\n",$row2["name"]);
      echo'<br>';
      $count=$count+1;
          $row2=mysqli_fetch_assoc($result2);
          } 

        // Free result set
        mysqli_free_result($result2);

        mysqli_close($con);
      ?><a href = "addnotes.php"><button>Add new</button></a>

	  <hr>

      
      <h3><b>My Added Tests</b></h3>
      
      <?php
    //session_start();
    $myusername=$_SESSION["login_user"];
        //emailid=$_POST['email'];
    
        $con=mysqli_connect("localhost","root","root","studlearning");
        // Check connection
        if (mysqli_connect_errno())
          {
          echo "Failed to connect to MySQL: " . mysqli_connect_error();
          }
    
        $sql1="SELECT emp_id from faculty WHERE email='$myusername'";
    $result1=mysqli_query($con,$sql1);
    $row1=mysqli_fetch_assoc($result1);
    $usn=$row1['emp_id'];
    $sql2="select test_name,avg(marks) from test_details
 where test_name in (SELECT test_name from test where emp_id = '$usn') 
 group by test_name";
	
        $result2=mysqli_query($con,$sql2);

        // Associative array
        $row2=mysqli_fetch_assoc($result2);
	
    $count=1;
    //echo 'helo';
         foreach($result2 as $row2)
        { 
          
      printf ("$count . %s , avg score %d\n",$row2["test_name"],$row2["avg(marks)"]);
	  //printf ();
      echo' <br>';
      $count=$count+1;
          $row2=mysqli_fetch_assoc($result2);
          } 

        // Free result set
        mysqli_free_result($result2);

        mysqli_close($con);
      ?>
		<a href = "addtests.php"><button>Add new</button></a>
		<hr>
		
		<h3><b>Marks Analysis</b></h3>
	<form action = "marks.php" method = "POST">
    <div class="w3-section  w3-padding-16">
      <span class="w3-margin-right">COURSE:</span> 
      <select name = "name">
		<?php
		
				//emailid=$_POST['email'];
        $con=mysqli_connect("localhost","root","root","studlearning");
        // Check connection
        if (mysqli_connect_errno())
          {
          echo "Failed to connect to MySQL: " . mysqli_connect_error();
          }

        
		$sql2="SELECT test_name FROM test ";
        $result2=mysqli_query($con,$sql2);

        // Associative array
        $row=mysqli_fetch_assoc($result);
		$count=1;
        foreach($result2 as $row2)
        { 
			$value = $row2['test_name'];
			
          echo"<option name='courses' value ='$value'>$value";
		  //printf ("$count. %s\n",$row2["course_id"]);
		  //echo'<br>';
		  
          //$row=mysqli_fetch_assoc($result);
          }

        // Free result set
        mysqli_free_result($result2);

        mysqli_close($con);
      ?>

		
	  </select>
	  <button type= "submit" name = "submit" value = "submit">     View</button>
  </div></form>
      <hr>
    
	
  <!-- <h3><b>Delete Notes</b></h3>
  <form action = "deletenotes.php" method = "POST">
    <div class="w3-section  w3-padding-16">
      <span class="w3-margin-right">Notes:</span> 
      <select name = "name">
    <?php
    
      /*  //emailid=$_POST['email'];
        $con=mysqli_connect("localhost","root","root","studlearning");
        // Check connection
        if (mysqli_connect_errno())
          {
          echo "Failed to connect to MySQL: " . mysqli_connect_error();
          }

        $myusername=$_SESSION['login_user'];
    //$sql2="SELECT name FROM notes WHERE emp_id=(SELECT emp_id from faculty where email='$myusername') ";
        $result2=mysqli_query($con,$sql2);

        // Associative array
      //  $row=mysqli_fetch_assoc($result);
    //$count=1;
        //foreach($result2 as $row2)
        { 
      //$value = $row2['name'];
      
          //echo"<option name='notes' value ='$value'>$value";
      //printf ("$count. %s\n",$row2["course_id"]);
      //echo'<br>';
      
          //$row=mysqli_fetch_assoc($result);
          }

        // Free result set
        //mysqli_free_result($result2);

        //mysqli_close($con);*/
      ?>
    
    </select>
    <button type= "submit" name = "submit" value = "submit">     DELETE</button>
      <hr>
    </div> -->
  
  <!-- Footer -->
  <footer class="w3-container w3-padding-32 " style="background-color: ">
  
      
   
  </footer>
  
  

<!-- End page content -->
</div>
<div class="container">

</div>



<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
  
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})
</script>

</body>
</html>

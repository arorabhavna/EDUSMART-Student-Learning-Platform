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
        
        
        <li><a href="logout_student.php" class="navbar-left"><big><b>LOGOUT</b></big></a></li>
        
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
    <img src="avatar_girl.png" style="width:45%;" class="w3-round"><br><br>
    <h4><b>
	STUDENT NAME<br>
	<?php
		if(!isset( $_SESSION['login_user'] ) )
		{session_start();}
	
		$myusername=$_SESSION['login_user'];
		 $con=mysqli_connect("localhost","root","root","studlearning");
        // Check connection
        if (mysqli_connect_errno())
          {
          echo "Failed to connect to MySQL: " . mysqli_connect_error();
          }

        $sql1="SELECT name from student WHERE email='$myusername'";
		$result1=mysqli_query($con,$sql1);
		$row1=mysqli_fetch_assoc($result1);
		$name=$row1['name'];
		
        echo "$name"."<br>";
		echo "$myusername";
		//printf('%s',$name);
		mysqli_close($con);
		
      ?>
	</b></h4>
    <p class="w3-text-grey">BTech \ BRANCH \</p>
  </div>
  <div class="w3-bar-block">
    
    <a href="#mytests" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-file-text fa-fw w3-margin-right"></i>TESTS</a> 
    <a href="#mynotes" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-pencil fa-fw w3-margin-right"></i>NOTES</a>
    <a href="#mycourses" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-book fa-fw w3-margin-right"></i>COURSES</a>
    <a href="#progress" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-line-chart fa-fw w3-margin-right"></i>PROGRESS</a>
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
  
  

    
    <h3 id="mynotes"><b>My Notes</b></h3>
    <div class="w3-section  w3-padding-16">
      <span class="w3-margin-right">Filter:</span> 
      <a href="allnotes.php"><button class="w3-button w3-black" >ALL</button></a>
      <a href="facultygroup.php"><button class="w3-button w3-white" ><i class="fa fa-user w3-margin-right"></i>Faculty</button></a>
      <a href="coursegroup.php"><button class="w3-button w3-white w3-hide-small"><i class="fa fa-book w3-margin-right"></i>Courses</button></a>
      <hr>
    </div>
    <?php



  /* <!-- First Photo Grid-->
  <div class="w3-row-padding" id="notes">
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="some.jpg" alt="" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b><u>Conditional Statements in C</u></b></p>
        <p></p>
      </div>
    </div>
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="some.jpg" alt="" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b><u>Conditional Statements in Python</u></b></p>
        <p></p></div>
    </div>
    <div class="w3-third w3-container">
      <img src="some.jpg" alt="" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b><u>Brute Force Approach to Algorithms</u></b></p>
        <p></p></div>
    </div>
  </div>
  
  <!-- Second Photo Grid-->
  <div class="w3-row-padding">
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="some.jpg" alt="" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b><u>More on VLSI</u></b></p>
        <p></p></div>
    </div>
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="some.jpg" alt="" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b><u>Heap Construction and heapsort</u></b></p>
        <p></p></div>
    </div>
    <div class="w3-third w3-container">
      <img src="some.jpg" alt="" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b><u>Implementing lambda functions in python</u></b></p>
        <p></p></div>
    </div>
  </div> */

  
  /*<!-- Pagination -->
  
  <div class="w3-center w3-padding-32">
    <div class="w3-bar">-
      <a href="#" class="w3-bar-item w3-button w3-hover-black">«</a>
      <a href="#" class="w3-bar-item w3-black w3-button">1</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-black">2</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-black">3</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-black">4</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-black">»</a>
    </div>
  </div>*/
?>
  
  

  

    <h3 id="mycourses"><b>My Courses</b></h3>
	   
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

        $sql1="SELECT usn from student WHERE email='$myusername'";
    		$result1=mysqli_query($con,$sql1);
    		$row1=mysqli_fetch_assoc($result1);
    		$usn=$row1['usn'];
        $_SESSION['usn']=$usn;
    		$sql2="SELECT course_id FROM course_details WHERE usn='$usn' ";
        $result2=mysqli_query($con,$sql2);

        /*$sql_e="SELECT courses.name from courses where exists(select distinct name from course_details where usn='$usn' and courses.course_id=course_details.course_id)";
        $result_e=mysqli_query($con,$sql_e);
        
		    $count=1;
        $e=mysqli_fetch_assoc($result_e);
        foreach($result_e as $e)
        {
          $cname=$e['name'];

          printf("$count. %s\n",$cname);
          echo'<br>';
          $count=$count+1;
          $e=mysqli_fetch_assoc($result_e);
        }*/
		    $count=1;
         foreach($result2 as $row2)
        { 
          
    		  $id=$row2["course_id"];
    		  printf ("$count . %s\n ---- ",$id);
    		  $sql3="SELECT name from courses where course_id='$id'";
    		  $result3=mysqli_query($con,$sql3);
    		  $row3=mysqli_fetch_assoc($result3);
    		  $cname=$row3['name'];
    		  printf("%s\n",$cname);
    		  echo'<br>';
    		  $count=$count+1;
          //$row2=mysqli_fetch_assoc($result2);
          } 

        // Free result set
        //mysqli_free_result($result2);

        mysqli_close($con);
      ?>
		<a href="addcourse.php "><button>ENROLL FOR NEW </button></a>
		<hr>


		
		
	<h3 id="mytests"><b>My Tests</b></h3>
	    
       <table border="1" cellpadding="10" cellspacing="10"><tr><th>Test Name</th><th>Marks</th></tr>

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

        $sql1="SELECT usn from student WHERE email='$myusername'";
        $result1=mysqli_query($con,$sql1);
        $row1=mysqli_fetch_assoc($result1);
        $usn=$row1['usn'];
        $sql2="SELECT test_name,marks FROM test_details WHERE usn='$usn' ";
        $result2=mysqli_query($con,$sql2);

        // Associative array
        //$row2=mysqli_fetch_assoc($result2);
        $count=1;
    
        foreach($result2 as $row2)
        { 
          
          $tname=$row2["test_name"];
          $marks=$row2["marks"];
          echo'<tr>';
          echo'<td>'.$tname.'</td>';
          //printf ("$count . %s\n ---- ",$tname);
          
          //printf("%s\n",$marks);
          echo'<td>'.$marks.'</td></tr>';
          //echo'<br>';
          $count=$count+1;
          //$row2=mysqli_fetch_assoc($result2);
          } 

        // Free result set
        mysqli_free_result($result2);

        mysqli_close($con);
      ?>
      </table><br><br>
	   <a href="take_newtest.php "><button>TAKE UP NEW TEST </button></a>
    <hr>
	
	
	
    <h3 id="progress"><b>Progress Analysis</b></h3>
    
    <!-- Progress bars / Skills -->
    <p>Problem Solving in C</p>
    <div class="w3-white">
      <div class="w3-container  w3-padding w3-center" style="width:95%;background-color:#49DD8E">95%</div>
    </div>
    <p>Data Structures</p>
    <div class="w3-white">
      <div class="w3-container  w3-padding w3-center" style="width:85%; background-color:#FF605F">85%</div>
    </div>
    <p>Algorithms</p>
    <div class="w3-white">
      <div class="w3-container w3-blue w3-padding w3-center" style="width:80%;background-color:#AE99FF">80%</div>
    </div>
    <p>
      <button class="w3-button  w3-padding-large w3-margin-top w3-margin-bottom" style="background-color: gold">
        <i class="fa fa-download w3-margin-right"></i>Download Progress
      </button>
    </p>
    <hr>
    
    
      
      
      
      
  

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


function func1(){
  alert("func1111");
}
function func2(){
  alert("func2222");
}
function func3(){
  alert("func3333");
}
</script>

</body>
</html>

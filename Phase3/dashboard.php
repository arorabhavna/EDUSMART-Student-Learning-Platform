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
        <li><a href="#about"><big><b>ABOUT</b></big></a></li>
        <li><a href="#courses"><big><b>COURSES</b></big></a></li>
        <li><a href="#notes"><big><b>NOTES</b></big></a></li>
        <li><a href="#tests" class="navbar-left"><big><b>ASSESMENT</b></big></a></li>
        
        
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
	STUDENT NAME
	<?php
        echo $_SESSION['login_user']
		//printf('%s',$name);
		
      ?>
	</b></h4>
    <p class="w3-text-grey">BTech \ BRANCH \</p>
  </div>
  <div class="w3-bar-block">
    <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-th-large fa-fw w3-margin-right"></i>ABOUT</a> 
    <a href="#tests" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-file-text fa-fw w3-margin-right"></i>TESTS</a> 
    <a href="#notes" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-pencil fa-fw w3-margin-right"></i>NOTES</a>
    <a href="#courses" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-book fa-fw w3-margin-right"></i>COURSES</a>
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
  
  <h3 id="about"><b>About Me</b></h3>
    <p>Just me, myself and I, exploring the universe of unknownment. I have a heart of love and an interest of lorem ipsum and mauris neque quam blog. I want to share my world with you. Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla. Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>
    <hr>

    
    <h3><b>My Notes</b></h3>
    <div class="w3-section  w3-padding-16">
      <span class="w3-margin-right">Filter:</span> 
      <button class="w3-button w3-black">ALL</button>
      <button class="w3-button w3-white"><i class="fa fa-user w3-margin-right"></i>Faculty</button>
      <button class="w3-button w3-white w3-hide-small"><i class="fa fa-book w3-margin-right"></i>Courses</button>
      <hr>
    </div>
    



  <!-- First Photo Grid-->
  <div class="w3-row-padding" id="notes">
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="some.jpg" alt="" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b><u>Conditional Statements in C</u></b></p>
        <p>qweqtye qgwrrg fiuwfk kwefv vwefiwf goiwegfweh wduiewffwge  dwefdiu weydywwe ufguwegf fewif bweufgiw vcwiue</p>
      </div>
    </div>
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="some.jpg" alt="" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b><u>Conditional Statements in Python</u></b></p>
        <p>Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>
      </div>
    </div>
    <div class="w3-third w3-container">
      <img src="some.jpg" alt="" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b><u>Brute Force Approach to Algorithms</u></b></p>
        <p>Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>
      </div>
    </div>
  </div>
  
  <!-- Second Photo Grid-->
  <div class="w3-row-padding">
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="some.jpg" alt="" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b><u>More on VLSI</u></b></p>
        <p>qwequi qwgeoiqwg fbw dwfh, euwfguw vfuew uwgdih dfwve justtyr ,qdqvd.uwegwfei bdweug dewj digld diwiof. </p>
      </div>
    </div>
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="some.jpg" alt="" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b><u>Heap Construction and heapsort</u></b></p>
        <p>Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>
      </div>
    </div>
    <div class="w3-third w3-container">
      <img src="some.jpg" alt="" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b><u>Implementing lambda functions in python</u></b></p>
        <p>Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>
      </div>
    </div>
  </div>

  <!-- Pagination -->
  <div class="w3-center w3-padding-32">
    <div class="w3-bar">
      <a href="#" class="w3-bar-item w3-button w3-hover-black">«</a>
      <a href="#" class="w3-bar-item w3-black w3-button">1</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-black">2</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-black">3</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-black">4</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-black">»</a>
    </div>
  </div>

  <!-- Images of Me -->
  <div class="w3-row-padding w3-padding-16" id="about">
    <div class="w3-col m6">
      <img src="some.jpg" alt="" style="width:100%">
    </div>
    <div class="w3-col m6">
      <img src="some.jpg" alt="" style="width:100%">
    </div>
  </div>

  <div id="tests" class="w3-container w3-padding-large" style="margin-bottom:32px">
    

    <h3 id="about"><b>COURSES</b></h3>
    <p>your enrolled courses</p>
      <?php
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
		$sql2="SELECT course_id FROM course_details WHERE usn='$usn' ";
        $result2=mysqli_query($con,$sql2);

        // Associative array
        $row=mysqli_fetch_assoc($result);
		$count=1;
        foreach($result2 as $row2)
        { 
          printf ("$count %s\n",$row2["course_id"]);
		  echo'<br>';
          //$row=mysqli_fetch_assoc($result);
          }

        // Free result set
        mysqli_free_result($result2);

        mysqli_close($con);
      ?>



    <h3><b>Progress Analysis</b></h3>
    
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
</script>

</body>
</html>

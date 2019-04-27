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
            //Connect to database
            $dbc = mysqli_connect("localhost", "root", "root", "studlearning") or die("error connecting to database");
            $tname=$_SESSION['tname'];
            $sql1 = "select * from quiz_ans where test_name = '$tname';";
            $count = 0;

            $ans = mysqli_query($dbc, $sql1) or die("error executing the query");
            //$records  = mysqli_fetch_assoc($ans);
            //echo "$records['q1']";
            while($row  = mysqli_fetch_assoc($ans)){
                   $records[] = $row;
            }

            $sql = "SELECT max_marks_allotted from test WHERE test_name = 'List Tuples and Dictionary in Python'";
            $max = mysqli_query($dbc, $sql) or die("error executing the query");

            while($row  = mysqli_fetch_assoc($max)){
                   $records1[] = $row;
            }
             //print(json_encode($records));
             $max =  $records1[0]['max_marks_allotted'];
             $marks_per_q=$max/10;

            //echo $records[0]['q1'];
            //$q1 = $_POST["ques1"];
            if($records[0]['q1'] == $_POST["q1"])
                  $count+=1;
            if($records[0]['q2'] == $_POST["q2"])
                  $count+=1;
            if($records[0]['q3'] ==$_POST["q3"])
                  $count+=1;
            if($records[0]['q4'] == $_POST["q4"])
                  $count+=1;
            if($records[0]['q5'] == $_POST["q5"])
                  $count+=1;
            if($records[0]['q6'] == $_POST["q6"])
                  $count+=1;
            if($records[0]['q7'] == $_POST["q7"])
                  $count+=1;
            if($records[0]['q8'] == $_POST["q8"])
                  $count+=1;
            if($records[0]['q9'] == $_POST["q9"])
                  $count+=1;
            if($records[0]['q10'] == $_POST["q10"])
                  $count+=1;

            $total=$count*$marks_per_q;

            $sql2="SELECT test_id from test where test_name='$tname'";
            $result1=mysqli_query($dbc,$sql2);
            $row4=mysqli_fetch_assoc($result1);
            $testid=$row4['test_id'];
            //echo gettype($total);
            $usn=$_SESSION['usn'];
            echo"For student with usn "."$usn"."<br>";
            $sql3="INSERT INTO test_details values ('$testid','$tname','$usn',$total)";
            $result2=mysqli_query($dbc,$sql3);
            $sql4="UPDATE test set avg_score=(SELECT AVG(marks) from test_details WHERE test_name='$tname') WHERE test_name='$tname'";
            $result4=mysqli_query($dbc,$sql4);
            echo'marks are : '.$total;
            echo'<br>';
             mysqli_close($dbc);
         
         echo"<a href='dashboard_student.php'>Go To Dashborad</a>";
            

?>


</body>
</html>
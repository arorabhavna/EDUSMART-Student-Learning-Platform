
 <?php
            session_start(); // this NEEDS TO BE AT THE TOP of the page before any output etc
            $test = $_POST['name'];

            //Connect to database
            $dbc = mysqli_connect("localhost", "root", "root", "studlearning") or die("error connecting to database");
            
            //Create query to fetch the records
            $query = "SELECT marks from test_details WHERE test_name ='$test'";
            $sql = "SELECT max_marks_allotted from test WHERE test_name = '$test'";
            $max = mysqli_query($dbc, $sql) or die("error executing the query");

            while($row  = mysqli_fetch_assoc($max)){
                   $records[] = $row;
            }
             //print(json_encode($records));
             $max =  $records[0]['max_marks_allotted'];
            $div = 5;
            $res1 = array();
            foreach (range($div, $max, $div) as $number) {
                    $res1[$number] = 0 ;

}           
            $res1+=array("$max"=>0);
            //print(json_encode($res1));
            $visitors = mysqli_query($dbc, $query) or die("error executing the query");

            //Create an array to hold the records
            $records = array();

            //Retrive the records and add it to the array
            while($row  = mysqli_fetch_assoc($visitors)){
                $records[] = $row;
                //echo $records[0]['marks'];
            }
            $i = 0;
            while($i<count($records))
            {
                $val = $records[$i]['marks'];
                //echo $val."<br>";
                foreach ($res1 as $key => $value) {
                    if($val<=$key)
                    {
                        $res1[$key]+=1;
                        break;
                    }
                }
                
                //$res1[$index]+=1;
                $i = $i+1;
            }
            //print(json_encode($res1));
            $res2 = array();
            $res3 = array();
            $i = 0;
            foreach ($res1 as $key => $value) {
                array_push($res2,$value);
                array_push($res3,$key);
                //$res2[$i]['students'] ="below ".$key;
                //$i+=1;

            }
            $sql2 = "SELECT AVG(marks),max(marks),min(marks)  FROM test_details
WHERE test_name='$test';";
$max1 = mysqli_query($dbc, $sql2) ;
while($row  = mysqli_fetch_assoc($max1)){
                   
                   $records1[] = $row;
            }
            $avg = $records1[0]['AVG(marks)'];
            $max = $records1[0]['max(marks)'];
            $min = $records1[0]['min(marks)'];
            // print(json_encode($records1));
             //$max =  $records[0]['avgma'];
             //echo "$max";
            //print(json_encode($res2));
            //print(json_encode($res3));
           
            mysqli_free_result($visitors);

            //Close connection
            mysqli_close($dbc);
          //mysqli_close($dbc);
    ?>
                    

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



   <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
<style type="text/css">
    .canvas { max-width: 200px; }
    .class1{
        height: 1000px;
        width: 500px;
        padding-left: 50px;
        
    }
</style> 

    </head>
    <body>
    <h1 style="text-align: center"><?php echo"$test";?> Marks Details</h1>
    <h3>Avg Score:<?php echo "$avg"; ?><h3>
    <h3>Highest Score:<?php echo "$max"; ?><h3>
    <h3>Lowest Score:<?php echo "$min"; ?><h3>
    <div class= "class1"  ><br>
    <canvas id="myChart" width="20" height="20"></canvas>        
    </div>
    
    <script>
        var ctx = document.getElementById("myChart").getContext('2d');
var myChart = new Chart(ctx, {
  type: 'bar',
  data: {
    labels: <?php  print(json_encode($res3)); ?>,
    datasets: [{
      label: 'no of students',
      data: <?php print(json_encode($res2)); ?>,
      backgroundColor: 'rgba(255, 99, 132, 1)',
    }]
  },
  options: {
    scales: {
      xAxes: [{
        display: false,
        barPercentage: 1.30,
      }, {
        display: true,
      }],
      yAxes: [{
        ticks: {
          beginAtZero:true
        }
      }]
    }
  }
});
        
    </script>


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

 

</body>
</html>









































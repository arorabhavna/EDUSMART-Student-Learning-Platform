 <?php
      session_start();
      if(isset($_REQUEST['submit']))
      {
            $dbc = mysqli_connect("localhost", "root", "root", "studlearning") or die("error connecting to database");
            $name = $_POST["name"];
        $notes_id = $_POST["notes_id"];
     $course_id = $_POST["course_id"];
    $link = $_POST["link"];
       $emp_id = $_POST["empid"];
       $time = $_POST["time"];
       $marks = $_POST["marks"];

       $sql = "insert into test values('$notes_id','$name','$time','$marks',0,'$course_id','$emp_id','$link');";
       if(mysqli_query($dbc,$sql)){
        echo "<script> alert('Test added successully');</script>";
        echo include 'dashboard_teacher.php';
       }
       else
       {
        echo "error : ".$sql."<br>".mysqli_error($dbc);
       }
    }
?>
<!DOCTYPE html>
<html>
<title> Test | LEARN SMART</title>
<link rel="stylesheet" href="signup.css">
<body>

<div class="bgimg">
  
    <div class="container">
    <form action="<?=$_SERVER['PHP_SELF'];?>" method="post" >
    <h2 style="text-align:center;font-family: Lucida Sans Unicode, Lucida Grande, sans-serif">
      
     New Test
    </h2>

    <label for="notes_id"><b>TestId</b></label>
    <input type="text" placeholder="Enter TestId" name="notes_id" required>

    <label for="name"><b>Test Name</b></label>
    <input type="text" placeholder="test Name" name="name" required>
    <br>
    <label for="time"><b>Duration</b></label><br>
    <input type="number" placeholder="Duration" name="time" required>
    <br><br>
    <label for="marks"><b>Marks</b></label><br>
    <input type="number" placeholder="Marks" name="marks" required>
    
    <br><br>
    <label for="course_id"><b>Course Id</b></label>
    <input type="text" placeholder="Enter course id" name="course_id" required><br>

    <label for="empid"><b>EmpId</b></label>
    <input type="text" placeholder="Enter EmpId" name="empid" required>

    <label for="link"><b>Test Link</b></label>
    <input type="text" placeholder="Test link" name="link" required>

    <label for="submit"><b>  </b></label>
    <input type="submit" class="btn1" name="submit" style="background-color: #32CD32" value="submit">

    
  </form>
  </div>
</div>


</body>
</html>

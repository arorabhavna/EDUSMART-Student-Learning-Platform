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

       $sql = "insert into notes values('$notes_id','$name','$course_id',0,'$emp_id','$link');";
       if(mysqli_query($dbc,$sql)){
        echo "<script> alert('Notes added successully');</script>";
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
<title>LOGIN Notes | LEARN SMART</title>
<link rel="stylesheet" href="signup.css">
<body>

<div class="bgimg">
  
    <div class="container">
    <form action="<?=$_SERVER['PHP_SELF'];?>" method="post" >
    <h2 style="text-align:center;font-family: Lucida Sans Unicode, Lucida Grande, sans-serif">
      
     New Notes
    </h2>

    <label for="notes_id"><b>NotesId</b></label>
    <input type="text" placeholder="Enter NotesId" name="notes_id" required>

    <label for="name"><b>Topic Name</b></label>
    <input type="text" placeholder="topic Name" name="name" required>

    

    <label for="course_id"><b>Course Id</b></label>
    <input type="text" placeholder="Enter course id" name="course_id" required><br>

    <label for="empid"><b>EmpId</b></label>
    <input type="text" placeholder="Enter EmpId" name="empid" required>

    <label for="link"><b>File Link</b></label>
    <input type="text" placeholder="File link" name="link" required>

    <label for="submit"><b>  </b></label>
    <input type="submit" class="btn1" name="submit" style="background-color: #32CD32" value="submit">

    
  </form>
  </div>
</div>


</body>
</html>

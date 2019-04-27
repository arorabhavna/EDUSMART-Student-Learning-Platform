<?php
//session_start();
$name=$_POST['notes'];
$myusername=$_SESSION['login_user'];
$con=mysqli_connect("localhost","root","root","studlearning");
        // Check connection
        if (mysqli_connect_errno())
          {
          echo "Failed to connect to MySQL: " . mysqli_connect_error();
          }

          $sql="DELETE from notes where name='$name' and emp_id=(SELECT emp_id from faculty where email='$myusername')";
          $result=mysqli_query($con,$sql);
          echo"<script>alert('notes deleted successfully');</script>";
          if($result)
          {header("location:dashboard_teacher.php");}

?>
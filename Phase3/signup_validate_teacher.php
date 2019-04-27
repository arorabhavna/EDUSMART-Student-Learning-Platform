
<html>
<head>
	<title></title>
</head>
<body>
	
	
	<?php
	$user_name="root";
$servername="localhost";
$password="root";
$conn1=mysqli_connect($servername,$user_name,$password,"studlearning");
	$name = $_POST["name"];
	
	$gender = $_POST["gender"];
	$email = $_POST["email"];
	$pass = $_POST["psw"];
	$dept = $_POST["DeptId"];
	$desg = $_POST["desg"];
	$usn = $_POST["empid"];
	$sql1 = "Insert into faculty values('$usn','$name','$gender','$email','$desg','$dept');";
	if(!(mysqli_query($conn1,$sql1)))
	{
		echo "signup failed".  mysqli_error($conn1);

	}
	
	$sql2="INSERT INTO login_teacher VALUES ('$email','$pass')";
	
	if(mysqli_query($conn1,$sql2)){
	echo include 'login_teacher.html';
}
else{
	echo "error : ".$sql2."<br>".mysqli_error($conn1);
}
mysqli_close($conn1);
	
	?>
	
	
</body>
</html>
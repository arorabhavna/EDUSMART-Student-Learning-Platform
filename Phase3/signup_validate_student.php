
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
	$dob = $_POST["dob"];
	$gender = $_POST["gender"];
	$email = $_POST["email"];
	$pass = $_POST["psw"];
	$dept = $_POST["DeptId"];
	$usn = $_POST["usn"];
	$sql1 = "Insert into student values('$usn','$name','gender','$dob','$email',0,0,'$dept');";
	if(!(mysqli_query($conn1,$sql1)))
	{
		echo "signup failed".  mysqli_error($conn1);

	}
	
	$sql2="INSERT INTO login_student VALUES ('$email','$pass')";
	
	if(mysqli_query($conn1,$sql2)){
	echo include 'login_student.html';
}
else{
	echo "error : ".$sql2."<br>".mysqli_error($conn1);
}
mysqli_close($conn1);
	
	?>
	
	
</body>
</html>
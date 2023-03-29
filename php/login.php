
<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$db="schoollogin";
	$conn = mysqli_connect($servername, $username, $password,$db);
	$email=$_POST['email'];
	
	$pwd=$_POST['pwd'];

	$sql = "INSERT INTO `crudlogin`(`email`,`pwd`) 
	VALUES ('$email','$pwd')";
	if (mysqli_query($conn, $sql)) {
		echo json_encode(array("statusCode"=>200));
	} 
	else {
		echo json_encode(array("statusCode"=>201));
	}
	mysqli_close($conn);
?>
<?php

$servername = "localhost";
$username = "root";
$password = "8XpzkgF85Z";
$dbname = "clicker";

//create new connection

$conn = new mysqli($servername, $username, $password, $dbname);
$email = $_POST['email'];
$password = $_POST['password'];


if ($conn -> connect_error) {
	die("connection failed:" . $conn -> connect_error);
}

	
	$sql = "SELECT * FROM teacher";
	$result = mysqli_query($conn, $sql);
	
	if ($result->num_rows > 0) {
		while ($row = $result->fetch_assoc()) {
			if ($row['email'] == $email && $row['password'] == $password) {
				session_start();
				$_SESSION["teacher_id"] = $row['teacher_id'];
				$_SESSION["first_name"] = $row['first_name'];
				$_SESSION["last_name"] = $row['last_name'];
				$_SESSION["subject"] = $row['subject'];
				$_SESSION["email"] = $row['email'];
				header("Location:teacher_portal.html");
			}
		}
	 } else {
		header("Location:login.html");	 
		echo "<script type='text/javascript'>alert('NOT FOUND, PLEASE TRY AGAIN')</script>";
		
	 }
	















// 
// $sql = "SELECT email, password, first_name, subject FROM teacher";
// $result = mysqli_query($conn, $sql);
//
// while($row = mysqli_fetch_array($result)){
	// if($row['email'] == $email && $row['password'] == $password){
		// echo "Hello " . $row['first_name'] . "!";
		// session_start();
		// $_SESSION["name"] = $row['first_name'];
		// $_SESSION["subject"] = $row['subject'];
		// header("Location:managequestions.php");
	// }
// }
// 
// header("Location:login.html");


?>
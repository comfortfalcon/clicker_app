<?php

$servername = "localhost";
$username = "root";
$password = "8XpzkgF85Z";
$dbname = "clicker";

//create new connection

$conn = new mysqli($servername, $username, $password, $dbname);
$roomcode = $_POST['roomcode'];
$nickname = $_POST['nickname'];

if ($conn -> connect_error) {
	die("connection failed:" . $conn -> connect_error);
}

$sql = "SELECT room_code, set_id FROM set";
$result = mysqli_query($conn, $sql);

while($row = mysqli_fetch_array($result)){
	if($row['room_code'] == $roomcode){
		echo $row['set_id'];
		header("Location:clicker.html");
	}
}
echo $roomcode;
echo $nickname;
?>
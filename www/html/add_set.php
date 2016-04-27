
<?php

ini_set('display_errors', 'On');
error_reporting(E_ALL);

session_start();

$servername = "localhost";
$username = "root";
$password = "8XpzkgF85Z";
$dbname = "clicker";

//create new connection

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("connection failed:" . $conn->connect_error);
}

$set_name = $_POST['set'];
$set_id = uniqid();
$class_id = $_SESSION["class_id"];
$num_questions = $_POST['num_questions'];
$room_code = 1234;


$_SESSION["set_id"] = $set_id;

$sql = "INSERT INTO set_name(class_id, set_id, set_name, number_questions, room_code) 
		VALUES ('$class_id', '$set_id', '$set_name', '$num_questions', '$room_code')";

if ($conn->query($sql) === TRUE) {
    header("Location:teacher_portal.html");
} else {
    echo mysql_errno($conn);
   //header("Location:teacher_portal.html");
    echo $set_name;
    echo $set_id;
    echo $class_id;
    echo $num_questions;
}

?>
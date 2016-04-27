/**
 * Created by PhpStorm.
 * User: dks560
 * Date: 4/26/2016
 * Time: 8:25 PM
 */

<?php

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

$set_name = $_POST['set_name'];
$set_id = uniqid();
$class_id = $_SESSION["class_id"];
$num_questions = $_POST['num_questions'];


$_SESSION["set_id"] = $set_id;

$sql = "INSERT INTO set(class_id, set_id, set_name, number_questions, room_code) 
		VALUES ('$class_id', '$set_id', '$set_name', '$num_questions', '' )";

if ($conn->query($sql) === TRUE) {
    header("Location:teacher_portal.html");
} else {
    header("Location:teacher_portal.html");
}

?>
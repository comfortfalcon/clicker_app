<?php

$servername = "localhost";
$username = "root";
$password = "8XpzkgF85Z";
$dbname = "clicker";

//create new connection

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn -> connect_error) {
    die("connection failed:" . $conn -> connect_error);
}


$firstname2 = $_POST['firstname'];
$lastname2 = $_POST['lastname'];
$subject2 = $_POST['subject'];
$email2 = $_POST['email'];
$password2 = $_POST['password'];
$id = uniqid();

$sql = "SELECT email FROM teacher";
$result = mysqli_query($conn, $sql);


$sql = "INSERT INTO set(class_id, set_id, set_name, number_questions, room_code) 
			VALUES ('$class_id', '$set_id', '$set_name', '$number_questions', '$room_code')";

if ($conn -> query($sql) === TRUE) {
    header("Location:login.html");
} else {
    header("Location:sign_up.html");
}


?>
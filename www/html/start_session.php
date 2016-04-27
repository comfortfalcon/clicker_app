<?php
$servername = "localhost";
$username = "root";
$password = "8XpzkgF85Z";
$dbname = "clicker";
$random = $_GET['name'];

//create new connection

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn -> connect_error) {
    die("connection failed:" . $conn -> connect_error);
}

$sql = "UPDATE set_name SET roomcode='" . $random . "' WHERE set_id='" . $_SESSION['set_id'] ."'";
$result = mysqli_query($conn, $sql);

$conn->close();

header("Location:teacher_session.php");
?>
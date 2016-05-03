<?php
session_start();
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
$_SESSION["room_code"] = $random;

$sql = "UPDATE set_name SET room_code='$random' WHERE set_id='" . $_SESSION['set_id'] ."'";
//echo $sql;
$result = mysqli_query($conn, $sql);

echo '<pre>' . var_export($_SESSION, true) . '</pre>';


header("Location:teacher_session.php");
?>
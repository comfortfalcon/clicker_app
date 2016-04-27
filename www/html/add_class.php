
/**
 * Created by PhpStorm.
 * User: dks560
 * Date: 4/25/2016
 * Time: 3:38 PM
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

$class2 = $_POST['class'];
$num_student = $_POST['num_of_student'];
$teacher_id = $_SESSION["teacher_id"];
$id = uniqid();

$_SESSION["class_id"] = $id;
$_SESSION["class_name"] = $class2;

$sql = "INSERT INTO class(teacher_id, class_id, class_name, number_students) 
		VALUES ('$teacher_id', '$id', '$class2', '$num_student')";

if ($conn->query($sql) === TRUE) {
    header("Location:teacher_portal.php");
} else {
    header("Location:teacher_portal.php");
}

?>
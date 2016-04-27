<<<<<<< HEAD
<?php

=======

<?php



session_start();

>>>>>>> origin/master
$servername = "localhost";
$username = "root";
$password = "8XpzkgF85Z";
$dbname = "clicker";

//create new connection

$conn = new mysqli($servername, $username, $password, $dbname);

<<<<<<< HEAD
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


=======
if ($conn->connect_error) {
    die("connection failed:" . $conn->connect_error);
}

$set_name = $_POST['set'];
$set_id = uniqid();
$class_id = $_SESSION["class_id"];
$num_questions = $_POST['num_questions'];
$room_code = 1234;


$_SESSION["set_id"] = $set_id;
$_SESSION["set_name"] = $set_name;

$sql = "INSERT INTO set_name(class_id, set_id, set_name, number_questions, room_code) 
		VALUES ('$class_id', '$set_id', '$set_name', '$num_questions', '$room_code')";

if ($conn->query($sql) === TRUE) {
    header("Location:teacher_portal.php");
} else {
    echo mysql_errno($conn);
   //header("Location:teacher_portal.php");
    echo $set_name;
    echo $set_id;
    echo $class_id;
    echo $num_questions;
}

>>>>>>> origin/master
?>
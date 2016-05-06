<?php

session_start();

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

$sql_1 = "SELECT room_code,set_name, set_id FROM set_name WHERE room_code = '$roomcode'";
$result_1 = mysqli_query($conn, $sql_1);
$row = mysqli_fetch_assoc($result);
$set_name = $row[1];
echo $set_name;
$sql_3 ="select session_id from session WHERE set_name ='$set_name'";
$result_3 = mysqli_query($conn, $sql_3);
$row2 = mysqli_fetch_assoc($result_3);
$session_id = $row2[0];

echo $session_id;
if ($result_1->num_rows > 0) {
    $array_sql= "select s.set_name, s.number_questions, q.question_id, q.question, q.answer  from set_name s JOIN question q on q.set_id = s.set_id WHERE s.room_code = '$roomcode'";
    $result = mysqli_query($conn, $array_sql);
    while($row = mysqli_fetch_array($result)) {
        $result_array[] = $row;
    }
    $_SESSION['set'] = $result_array;
    $_SESSION['cur_q'] = 0;

$sql_2 = "Insert into student(student_name, session_id) VALUES ('$nickname', '$session_id')";
    $result_4 = mysqli_query($conn,$sql_2);

   //  header("Location:clicker.php");
} else {
    
   // header("Location:portal.html");
}


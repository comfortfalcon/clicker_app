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

$sql_1 = "SELECT room_code, set_id FROM set_name WHERE room_code = '$roomcode'";
$result_1 = mysqli_query($conn, $sql_1);


if ($result_1->num_rows > 0) {
    $array_sql= "select s.set_name, s.number_questions, q.question_id, q.question, q.answer  from set_name s JOIN question q on q.set_id = s.set_id WHERE s.room_code = '$roomcode'";
    $result = mysqli_query($conn, $array_sql);
    while($row = mysqli_fetch_array($result)) {
        $result_array[] = $row;
    }
    $_SESSION['set'] = $result_array;
    $_SESSION['cur_q'] = 0;
    
    //var_dump($_SESSION);
   // var_dump($result_array);
    echo '<pre>' . var_export($_SESSION, true) . '</pre>';

    echo '<pre>' . var_export($result_array, true) . '</pre>';


     header("Location:clicker.php");
} else {
    
    header("Location:portal.html");
}

//
//
//while($row = mysqli_fetch_array($result)){
//	if($row['room_code'] == $roomcode){
//		header("Location:clicker.php");
//		
//	}
//}
//
//$_SESSION["room_code"] = $roomcode;
//$_SESSION["nickname"] = $nickname;
//
//
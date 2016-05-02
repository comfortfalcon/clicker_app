<?php
/**
 * Created by PhpStorm.
 * User: dks560
 * Date: 5/2/2016
 * Time: 3:45 PM
 */

session_start();

$servername = "localhost";
$username = "root";
$password = "8XpzkgF85Z";
$dbname = "clicker";

$temp_array = $_SESSION['set'];
$question_id = $temp_array[0][2];

//create new connection

$conn = new mysqli($servername, $username, $password, $dbname);

$sql = "UPDATE question SET A = A + 1 WHERE question_id = '$question_id' ";

mysqli_query($conn, $sql);

header("Location:next_question.php");
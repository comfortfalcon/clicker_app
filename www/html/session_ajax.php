<?php
/**
 * Created by PhpStorm.
 * User: dks560
 * Date: 5/2/2016
 * Time: 7:44 PM
 */


session_start();

$servername = "localhost";
$username = "root";
$password = "8XpzkgF85Z";
$dbname = "clicker";
$session = $_SESSION['set_id'];

//create new connection

$conn = new mysqli($servername, $username, $password, $dbname);

$sql = "select question,A,B,C,D,E,F from question q join set_name s on q.set_id = s.set_id WHERE s.set_id = '$session'";

$result = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_row($result)) {
    $question_data[] = $row;
}
echo json_encode($question_data);


<?php
/**
 * Created by PhpStorm.
 * User: dks560
 * Date: 5/1/2016
 * Time: 3:08 PM
 */

session_start();
if (isset($_POST['set_set'])) {
    $_SESSION["set_id"] = $_POST['set_select'];
    $set_id = $_SESSION["set_id"];
    $servername = "localhost";
    $username = "root";
    $password = "8XpzkgF85Z";
    $dbname = "clicker";

//create new connection

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("connection failed:" . $conn->connect_error);
    }

    $sql = "select set_name from set_name where set_id = '$set_id'";

    $result = mysqli_query($conn, $sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $_SESSION["set_name"] = $row['set_name'];
        }
    }
    header("Location:teacher_portal.php");

} else {

    echo "didn't work";
}
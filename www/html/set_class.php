<?php
/**
 * Created by PhpStorm.
 * User: dks560
 * Date: 5/1/2016
 * Time: 12:46 PM
 */
 session_start();
if (isset($_POST['class_set'])) {
    $_SESSION["set_id"] = $_POST['class_select'];
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

    $sql = "select class_name from class where class_id = '$set_id'";

    $result = mysqli_query($conn, $sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $_SESSION["class_name"] = $row['class_name'];
        }
    }
    header("Location:teacher_portal.php");
    
} else {
    
    echo "didn't work";
}
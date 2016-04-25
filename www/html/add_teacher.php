<?php

$servername = "localhost";
$username = "root";
$password = "8XpzkgF85Z";
$dbname = "clicker";

//create new connection

$conn = new mysqli($servername, $username, $password, $dbname);

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

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        if ($row['email'] == $email2){
            header("Location:sign_up.html");  
        }
		else {
		
		}
    }
}

$sql = "INSERT INTO teacher(teacher_id, first_name, last_name, subject, email, password) 
			VALUES ('$id', '$firstname2', '$lastname2', '$subject2', '$email2', '$password2')";

			if ($conn -> query($sql) === TRUE) {
    			header("Location:login.html");
			} else {
    			header("Location:sign_up.html");
}


?>
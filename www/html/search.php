<?php
$servername = "localhost";
$username = "root";
$password = "8XpzkgF85Z";
$dbname = "bookstore";

//create new connection

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn -> connect_error) {
	die("connection failed:" . $conn -> connect_error);
}

$search = $_POST['search'];

$sql = "SELECT title, author, year, price, image, image_source FROM book WHERE title LIKE '%$search%'" ;

$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0 ) {
	
	while ($row = mysqli_fetch_assoc($result)) {
		echo "Title: " . $row["title"];
		echo "Author: " . $row["author"];
		echo "Year: " . $row["year"];
		echo "Price: " . $row["price"];
		echo "Image_Source: " . $row["image_source"];
		echo '<img src="data:image/jpeg;base64,'.base64_encode($row["image"]) . ' "/>';
	}
	
	
	
}

?>
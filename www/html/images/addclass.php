<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">

  <!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame 
       Remove this if you use the .htaccess -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title>clicker</title>
  <meta name="description" content="">
  <meta name="author" content="Robert">

  <meta name="viewport" content="width=device-width; initial-scale=1.0">

  <!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
  <link rel="shortcut icon" href="/favicon.ico">
  <link rel="apple-touch-icon" href="/apple-touch-icon.png">
</head>
<body>
<button onclick="makeid()">Start Session</button>
<script>
function makeid()
{
    var text = "";
    var possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";

    for( var i=0; i < 4; i++ )
        text += possible.charAt(Math.floor(Math.random() * possible.length));
    window.location.href = "http://seniorproj2016.x10host.com/addclass.php?name=" + text;
    return text;
}
</script>
<?php
$servername = "localhost";
$username = "seniorp5_user";
$password = "password";
$dbname = "seniorp5_db1";
$random = $_GET['name'];
echo "room code" . $random;
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$question = mysqli_real_escape_string($conn, $_POST['question']);
	$answer = mysqli_real_escape_string($conn, $_POST['answer']);

$sql = "INSERT INTO table1 (question, answer)
VALUES ('$question', '$answer')";

if ($conn->query($sql) === TRUE) {
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$sql = "SELECT question, answer FROM table1";
$result = mysqli_query($conn, $sql);

$sql = "UPDATE table1 SET roomcode='" . $random . "' WHERE number=1";
$result = mysqli_query($conn, $sql);

$conn->close();
?>
</body>
</html>
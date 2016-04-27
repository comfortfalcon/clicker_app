
<?php



session_start();

$servername = "localhost";
$username = "root";
$password = "8XpzkgF85Z";
$dbname = "clicker";

//create new connection

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("connection failed:" . $conn->connect_error);
}

$question_id = uniqid();
$set_id = $_SESSION["set_id"];
$question = $_POST['question'];
$answer = $_POST['answer'];


$_SESSION["question_id"] = $question_id;


$sql = "INSERT INTO question(question_id, set_id, question, answer) 
		VALUES ('$question_id', '$set_id', '$question', '$answer' )";

if ($conn->query($sql) === TRUE) {
    header("Location:teacher_portal.php");
} else {
    //header("Location:teacher_portal.php");
    echo $question_id;
    echo $set_id;
    echo $question;
    echo $answer;
}

?>
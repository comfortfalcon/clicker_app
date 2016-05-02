<?php
session_start();
echo "Room Code is" . $_SESSION['room_code'];
var_dump($_SESSION);
var_dump($_POST);


if(isset($_POST)) {
    
    echo "post recieved";
    
}


 ?>
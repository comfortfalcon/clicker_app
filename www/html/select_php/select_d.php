<?php
/**
 * Created by PhpStorm.
 * User: dks560
 * Date: 5/2/2016
 * Time: 3:46 PM
 */

session_start();

$servername = "localhost";
$username = "root";
$password = "8XpzkgF85Z";
$dbname = "clicker";

//create new connection

$conn = new mysqli($servername, $username, $password, $dbname);

$sql = "UPDATE question SET D = D + 1 WHERE question_id = '$question_id' ";

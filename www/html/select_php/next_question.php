<?php
/**
 * Created by PhpStorm.
 * User: dks560
 * Date: 5/2/2016
 * Time: 3:47 PM
 */

session_start();

echo '<pre>' . var_export($_SESSION, true) . '</pre>';

$temp_array = $_SESSION['set'];
if(!count($temp_array) >  0) {
    header("Location: ../index.html");
}
unset($temp_array[0]);
$final_array = array_values($temp_array);
$_SESSION['set'] = $final_array;

header("Location: ../clicker.php");

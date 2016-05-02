<?php
session_start();
$question_array = $_SESSION['set'];
echo '<pre>' . var_export($question_array, true) . '</pre>';

echo count($question_array);
echo $question_array[0][2];

?>

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
<div>
    <header>
        <h1><?php echo $question_array[$cur_q][3] ?> </h1>
    </header>
    <nav>
        <p><a href="/">Home</a></p>
        <table>
            <tr>
                <td>
                    <button onclick="window.location.href='select_php/select_a.php'">A</button>
                </td>
                <td>
                    <button onclick="window.location.href='select_php/select_b.php'">B</button>
                </td>
            </tr>
            <tr>
                <td>
                    <button onclick="window.location.href='select_php/select_c.php'">C</button>
                </td>
                <td>
                    <button onclick="window.location.href='select_php/select_d.php'">D</button>
                </td>
            </tr>
            <tr>
                <td>
                    <button onclick="window.location.href='select_php/select_e.php'">E</button>
                </td>
                <td>
                    <button onclick="window.location.href='select_php/select_f.php'">F</button>
                </td>
            </tr>
        </table>
                    <button onclick="window.location.href='select_php/next_question.php'">Next Question</button>

    </nav>

    <div>

    </div>


</div>
</body>
<style>
    button {
        width: 150px
    }
</style>
</html>

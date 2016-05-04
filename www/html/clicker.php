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

    <meta name="viewport" content="width=device-width; initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">
    <!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
    <link rel="shortcut icon" href="/favicon.ico">
    <link rel="apple-touch-icon" href="/apple-touch-icon.png">
</head>

<body>
<div>
    <header>
        <h1><?php echo $question_array[$cur_q][3] ?> </h1>
    </header>
    <div class="container">
    <nav>
        
        <div class="row">
            <div class="col-lg-4 col-lg-offset-4">
                <div class="col-sm-10">
                <p><a href="/">Home</a></p>
                </div>
                <div class="col-sm-10">
                    <p><b>Submit answers to questions</b></p>
                </div>
        <div class="col-sm-10">
                    <button class="btn btn-info btn-lg" onclick="window.location.href='select_php/select_a.php'">A</button>
        
                
                    <button class="btn btn-info btn-lg" onclick="window.location.href='select_php/select_b.php'">B</button>
                    
                
                    <button class="btn btn-info btn-lg" onclick="window.location.href='select_php/select_c.php'">C</button>
        </div>
                <div class="col-sm-10">
                    <button class="btn btn-info btn-lg" onclick="window.location.href='select_php/select_d.php'">D</button>
                    
                    <button class="btn btn-info btn-lg" onclick="window.location.href='select_php/select_e.php'">E</button>
                
                    <button class="btn btn-info btn-lg" onclick="window.location.href='select_php/select_f.php'">F</button>
                </div>
                <div class="col-sm-10">
                    <button class="btn btn-info btn-lg" onclick="window.location.href='select_php/next_question.php'">Next Question</button>
                </div>
            </div>
    </nav>
        </div>
    </div>

    <div>

    </div>


</div>
<!-- Scripts -->
<script src="js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
</body>
</html>

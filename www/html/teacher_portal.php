<?php session_start();

?>

<!DOCTYPE HTML>
<!--
Minimaxing by HTML5 UP
html5up.net | @n33co
Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
<head>
    <title>Teacher Portal</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-default navbar-static-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <ul class="nav navbar-nav">
                <li><a href="index.html">Home</a></li>
                <li class="active"><a href="login.html">Login</a></li>
                <li><a href="sign_up.html">Sign Up</a></li>
                <li><a href="portal.html">Student Portal</a></li>

            </ul>
        </div>
    </div>
</nav>

<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h2>Current Teacher : <?php echo $_SESSION["first_name"]; ?>  </h2>
            <h3>Current Class : <?php echo $_SESSION["class_name"]; ?>  </h3>
            <h3>Current Set : <?php echo $_SESSION["set_name"]; ?>  </h3>
            <button class="bg-primary" onclick="make_id()">Start Session</button>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-4">
            
            <div id="class_display">
                <form name="set_class" method="post" action="set_class.php">
                    <div class="input-group">
                    <?php
                    $mysqli = new mysqli("localhost", "root", "8XpzkgF85Z", "clicker");
                    if ($mysqli->connect_error) {
                        die();
                    }
                    $query = $mysqli->query("Select class_name, class_id from class where teacher_id = '" . $_SESSION["teacher_id"] . "'");
                    ?>
                    <h2>Select Class</h2>
                    <select class="form-control" name="class_select">
                        <?php while ($option = $query->fetch_object()) { ?>
                            <option
                                value="<?php echo $option->class_id; ?>"> <?php echo $option->class_name; ?></option>
                        <?php } ?>
                    </select>
                    <input class="btn-default" type="submit" name="class_set" value="Set"/>
                    </div>
                </form>
            </div>
            
            <form action="add_class.php" method="post" class="form-group"
                  novalidate="">
                <div id="class_name" class=" form-group">
                    <label for="class"> Class Name: </label>
                    <input type="text" name="class" id="class" required="required">
                </div>
                <div id="num_students" class=" form-group">
                    <label for="number_students"> Number of Students: </label>
                    <input type="text" name="number_students" id="number_students" required="required">
                </div>

                <div class="form-group-lg">
                    <input class="btn-default" type="submit" value="Submit">
                </div> 
            </form>
        </div>
        <div class="col-sm-4">
            <div id="set_display">
                
                <form name="set_set" method="post" action="set_set.php">
                    <div class="input-group">
                    <?php
                    $mysqli = new mysqli("localhost", "root", "8XpzkgF85Z", "clicker");
                    if ($mysqli->connect_error) {
                        die();
                    }
                    $query = $mysqli->query("Select set_name, set_id from set_name where class_id = '" . $_SESSION["class_id"] . "'");
                    ?>
                    <h2>Select Set</h2>
                    <select class="form-control" name="set_select">
                        <?php while ($option = $query->fetch_object()) { ?>
                            <option
                                value="<?php echo $option->set_id; ?>"> <?php echo $option->set_name; ?></option>
                        <?php } ?>
                    </select>
                    <input class="btn-default" type="submit" name="set_set" value="Set"/>
                    </div>
                </form>
            </div>


            <form action="add_set.php" method="post"
                  novalidate="">
                <div id="set_name" class="form-group">
                    <label for="set_name">Set Name:</label>
                    <input type="text" name="set" id="set" required="required">
                </div>
                <div id="num_question" class="form-group">
                    <label for="num_question"> Number of Questions </label>
                    <input type="number" name="num_questions" id="num_questions" required="required">
                </div>
                <div class="form-group-lg">
                    <input type="submit" value="Submit">
                </div>
            </form>

        </div>

        <div class="col-sm-4">
            <form action="add_question.php" method="post"
                  novalidate="">
                <h2>Add Question</h2>
                <div id="question_name" class="form-group">
                    <label for="question_name">Question: </label>
                    <input type="text" name="question" id="question" required="required">
                </div>
                <div id="q_answer" class="form-group">
                    <label for="q_answer">Answer: </label>
                    <input type="text" name="answer" id="answer" required="required">
                </div>
                <div class="form-group">
                    <input class="btn-default" type="submit" value="Submit">
                </div>
            </form>
        </div>
    </div>
</div>


<!-- Scripts -->
<script src="js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>
    function make_id() {
        var text = "";
        var possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";

        for (var i = 0; i < 4; i++)
            text += possible.charAt(Math.floor(Math.random() * possible.length));
        window.location.href = "http://derekanesmith.com/start_session.php?name=" + text;
        //return text;
    }
</script>
</body>
</html>
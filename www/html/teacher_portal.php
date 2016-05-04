
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
    <!--[if lte IE 8]>
    <script src="assets/js/ie/html5shiv.js"></script><![endif]-->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">
</head>
<body>
<div id="page-wrapper">
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
            <div id="col-sm-4">
            <p>Current Teacher : <?php echo $_SESSION["first_name"]; ?>  </p>
                    <div id="class_display">
                        <p>Current Class : <?php echo $_SESSION["class_name"]; ?>  </p>
                        <form name="set_class" method="post" action="set_class.php">
                        <?php
                            $mysqli = new mysqli("localhost", "root", "8XpzkgF85Z", "clicker");
                            if ($mysqli->connect_error) {
                                die();
                            }
                            $query = $mysqli->query("Select class_name, class_id from class where teacher_id = '" . $_SESSION["teacher_id"] . "'");
                        ?>
                        <h2>Select Class</h2>
                        <select name ="class_select">
                            <?php while($option = $query-> fetch_object()){ ?>
                                <option value="<?php echo $option->class_id; ?>"> <?php echo $option->class_name; ?></option>
                        <?php } ?>
                        </select>
                            <input type="submit" name="class_set" value="set_class"/>
                            </form>
                    </div>
                    
                    <form action="add_class.php" method="post"
                    novalidate="">
                    <div id="class_name" class="field f_100 ui-resizable-disabled ui-state-disabled">
                        <label for="class"> Class Name: </label>
                        <input type="text" name="class" id="class" required="required">
                    </div>
                    <div id="num_students" class="field f_100 ui-resizable-disabled ui-state-disabled">
                        <label for="number_students"> Number of Students: </label>
                        <input type="text" name="number_students" id="number_students" required="required">
                    </div>

                    <div id="form-submit" class="field f_100 clearfix submit">
                        <input type="submit" value="Submit">
                    </div>
                    </form>
                    
                
            
            
                <div id="set_display">
                <p>Current Set : <?php echo $_SESSION["set_name"]; ?>  </p>
                    <form name="set_set" method="post" action="set_set.php">
                        <?php
                        $mysqli = new mysqli("localhost", "root", "8XpzkgF85Z", "clicker");
                        if ($mysqli->connect_error) {
                            die();
                        }
                        $query = $mysqli->query("Select set_name, set_id from set_name where class_id = '" . $_SESSION["class_id"] . "'");
                        ?>
                        <h2>Select Set</h2>
                        <select name ="set_select">
                            <?php while($option = $query-> fetch_object()){ ?>
                                <option value="<?php echo $option->set_id; ?>"> <?php echo $option->set_name; ?></option>
                            <?php } ?>
                        </select>
                        <input type="submit" name="set_set" value="set_set"/>
                    </form>
                    </div>

                
                <form action="add_set.php" method="post"
                      novalidate="">
                    <div id="set_name" class="field f_100 ui-resizable-disabled ui-state-disabled">
                        <label for="set_name">Set Name:</label>
                        <input type="text" name="set" id="set" required="required">
                    </div>
                    <div id="num_question" class="field f_100 ui-resizable-disabled ui-state-disabled">
                        <label for="num_question"> Number of Questions </label>
                        <input type="number" name="num_questions" id="num_questions" required="required">
                    </div>
                    <div id="form_submit" class="field f_100 clearfix submit">
                        <input type="submit" value="Submit">
                    </div>
                </form>
                    
            
        
        
            
                
                <form action="add_question.php" method="post"
                      novalidate="">
                    <h2>Add Question</h2>
                    <div id="question_name" class="field f_100 ui-resizable-disabled ui-state-disabled">
                        <label for="question_name">Question: </label>
                        <input type="text" name="question" id="question" required="required">
                    </div>
                    <div id="q_answer" class="field f_100 ui-resizable-disabled ui-state-disabled">
                        <label for="q_answer">Answer: </label>
                        <input type="text" name="answer" id="answer" required="required">
                    </div>
                    <div id="q_form_submit" class="field f_100 clearfix submit">
                        <input type="submit" value="Submit">
                    </div>
                </form>
                <button onclick="make_id()">Start Session</button>
            </div>
            </div>
        </div>
    </div>
</div> 
<?php var_dump($_SESSION); ?>
<!-- Scripts -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/skel.min.js"></script>
<script src="assets/js/skel-viewport.min.js"></script>
<script src="assets/js/util.js"></script>
<!--[if lte IE 8]>
<script src="assets/js/ie/respond.min.js"></script><![endif]-->
<script src="assets/js/main.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>
    function make_id()
    {
        var text = "";
        var possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";

        for( var i=0; i < 4; i++ )
            text += possible.charAt(Math.floor(Math.random() * possible.length));
        window.location.href = "http://derekanesmith.com/start_session.php?name=" + text;
        return text;
    }
</script>
</body>
</html>
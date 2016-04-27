
<?php session_start(); ?>

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
    <link rel="stylesheet" href="assets/css/main.css"/>
    <!--[if lte IE 9]>
    <link rel="stylesheet" href="assets/css/ie9.css"/><![endif]-->
</head>
<body>
<div id="page-wrapper">
    <div id="header-wrapper">
        <div class="container">
            <div class="row">
                <div class="12u">
                    <header id="header">
                        <h1><a href="#" id="logo" class="current-page-item">Teacher Portal</a></h1>
                        <nav id="nav">
                            <a href="index.html">Homepage</a>
                            <a href="login.html">Login</a>
                            <a href="sign_up.html">Sign up</a>
                            <a href="portal.html">Student Portal</a>
                        </nav>
                    </header>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <p>Current Teacher : <?php echo $_SESSION["first_name"]; ?>  </p>
            <div class="6u">
                <div id="class_insert">
                    <div id="class_display">
                        <p>Current Class : <?php echo $_SESSION["class_name"]; ?>  </p>
                        
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
                </div>
            </div>
            <div id="6u">
                <p>Current Set : <?php echo $_SESSION["set_name"]; ?>  </p>
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
            </div>
        </div>
        <div class="row">
            <div class="6u">
                <form action="add_question.php" method="post"
                      novalidate="">
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
                <button onclick="makeid()">Start Session</button>
            </div>
        </div>
    </div>
</div>
<!-- Scripts -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/skel.min.js"></script>
<script src="assets/js/skel-viewport.min.js"></script>
<script src="assets/js/util.js"></script>
<!--[if lte IE 8]>
<script src="assets/js/ie/respond.min.js"></script><![endif]-->
<script src="assets/js/main.js"></script>
<script>
    function makeid()
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
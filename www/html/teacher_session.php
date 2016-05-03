<?php
session_start();
echo '<pre>' . var_export($_SESSION, true) . '</pre>';

?>

<!doctype html>
<html lang="en">
<head>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/skel.min.js"></script>
    <script src="assets/js/skel-viewport.min.js"></script>
    <script src="assets/js/util.js"></script>
    <!--[if lte IE 8]>
    <script src="assets/js/ie/respond.min.js"></script><![endif]-->
    <script src="assets/js/main.js"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.12.2.min.js"></script>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<h1>User Answers</h1>
<div id="output">this will be replaced</div>


<script>

    setInterval(function () {
        $.ajax({
            url: 'session_ajax.php',
            data: "#output",
            dataType: 'json',
            success: function (rows) {
                $('#output').html(rows);
            }

        })
    }, 1000)

</script>
</body>
</html>



<!--for (var i = 0; i < rows.length; i++) {-->
<!---->
<!---->
<!--var question = rows[i][0];-->
<!--var A = rows[i][1];-->
<!--var B = rows[i][2];-->
<!--var C = rows[i][3];-->
<!--var D = rows[i][4];-->
<!--var E = rows[i][5];-->
<!--var F = rows[i][6];-->
<!--$('#output').html("")-->
<!--.append("<b>Question Set: </b>")-->
<!--.append("<b>question: </b>" + question)-->
<!--.append("<b>A: </b>" + A)-->
<!--.append("<b>B: </b>" + B)-->
<!--.append("<b>C: </b>" + C)-->
<!--.append("<b>D: </b>" + D)-->
<!--.append("<b>E: </b>" + E)-->
<!--.append("<b>F: </b>" + F)-->
<!--.append("<hr />");-->
<!---->
<!--}-->
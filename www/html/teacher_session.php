<?php
session_start();
//echo '<pre>' . var_export($_SESSION, true) . '</pre>';

?>

<!doctype html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<h1>User Answers</h1>
<h2>Room Number = <?php echo $_SESSION['room_code']?></h2>
<table class="table table-bordered">
    <tr class="records">
        <thead>
        <tr>
            <th>Question</th>
            <th>A</th>
            <th>B</th>
            <th>C</th>
            <th>D</th>
            <th>E</th>
            <th>F</th>
        </tr>
        </thead>
        <tbody class="record">
      
        </tbody>
</table>
    </tr>



<script>

    setInterval(function () {
        
        $.ajax({
            url: 'session_ajax.php',
            data: "",
            dataType: 'json',
            success: function (rows) {
                    $(".records").remove();
                    var data = rows;
                
                for (var i = 0; i < data.length; i++) {
                    var question = data[i][0];
                    var A = data[i][1];
                    var B = data[i][2];
                    var C = data[i][3];
                    var D = data[i][4];
                    var E = data[i][5];
                    var F = data[i][6];
                
                    $(".record").append("<tr class= \"records\">" +
                        "<td class= \"records\">" + question + "</td>" +
                        "<td class= \"records\">" + A + "</td>" +
                        "<td class= \"records\">" + B + "</td>" +
                        "<td class= \"records\">" + C + "</td>" +
                        "<td class= \"records\">" + D + "</td>" +
                        "<td class= \"records\">" + E + "</td>" +
                        "<td class= \"records\">" + F + "</td>" +
                        "</tr class= \"records\">");

                }
                
            }
        })
    }, 1000)

</script>
<script src="js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
</body>
</html>
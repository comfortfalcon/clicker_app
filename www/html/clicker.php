<?php
session_start();
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
      <h1>Submit answers to questions</h1>
    </header>
    <nav>
      <p><a href="/">Home</a></p>
      <table>
	<tr>
	<td>
    <button onclick="setVariable('A')">A</button>
	</td>
	<td>
	<button onclick="setVariable('B')">B</button>
	</td>
	</tr>
	<tr>
	<td>
    <button onclick="setVariable('C')">C</button>
	</td>
	<td>
	<button onclick="setVariable('D')">D</button>
	</td>
	</tr>
	<tr>
	<td>
    <button onclick="setVariable('E')">E</button>
	</td>
	<td>
	<button onclick="setVariable('F')">F</button>
	</td>
	</tr>
	</table>
	
	<form method="post" action="submit.php">
<input type="text" value="<?php echo $_SESSION["room_code"]; ?>">
<input type="text" id="answer">
<input type="submit" value="Submit" />
    </form>
    
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
<script>
function setVariable(a) {
	document.getElementById('answer').value = a;
}
function setVariable(b) {
	document.getElementById('answer').value = b;
}
function setVariable(c) {
	document.getElementById('answer').value = c;
}
function setVariable(d) {
	document.getElementById('answer').value = d;
}
function setVariable(e) {
	document.getElementById('answer').value = e;
}
function setVariable(f) {
	document.getElementById('answer').value = f;
}
</script>
</html>

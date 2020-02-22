<?php
    require 'connection.php';
    session_start();
?>
<!DOCTYPE html>
<html >
<head>
	<title> UPLOAD YOU PICTURE HERE CODE</title>
	<link rel="stylesheet" type="text/css" href="css/form.css">
	 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <style type="text/css">
    body{
      margin-left: 400px;
      margin-right: 400px;
    }
  </style>
</head>
<body onload="startTime()">
<div class="container">
  <div class="jumbotron">
  	<h4 style="text-align:center;"> Campus Calendar </h4>
  		<p id = "p1"> </p>
		<p id="txt"></p>

	</div>
<form action="login_submit.php" method="post">
  <div class="container">
    <label for="uname"><b>Email</b></label>
    <input type="text" placeholder="Enter your email" name="uname" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <button type="submit" class="btn btn-default" style="background-color: orange">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <span class="login_rso"> <a href="rso_login.php">Log in to your organization page..</a></span>
  </div>
</form>


<script>
var today = new Date();
var date = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate();
document.getElementById("p1").innerHTML = date;

function startTime() {
  var today = new Date();
  var h = today.getHours();
  var m = today.getMinutes();
  var s = today.getSeconds();
  m = checkTime(m);
  s = checkTime(s);
  document.getElementById('txt').innerHTML =
  h + ":" + m + ":" + s;
  var t = setTimeout(startTime, 500);
}
function checkTime(i) {
  if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
  return i;
}
</script>
</body>
</html>
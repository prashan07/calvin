<?php
<<<<<<< HEAD
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
=======
  require 'connection.php';
  session_start();
?>

<!doctype html>
<html lang="en">
  <head>
  	<title>Sidebar 01</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/style.css">
  </head>
  <body>
		
		<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar">
				<div class="p-4 pt-5">
<<<<<<< HEAD:sidebar-01/form.php
		  		<a href="#" class="img logo rounded-circle mb-5" style="background-image: url(images/Capture.JPG);"></a>
          <label for="name" class="name">
            <?php
            if(isset($_SESSION['email'])){
            $id = $_SESSION['email'];
            $query="select rso.name from rso where rid = '$id' ";
           $result = mysqli_query($con, $query) or die(mysqli_error($con));
             $array = mysqli_fetch_array($result);
            echo 'Hi '.$array['name'];
          }
            ?>
          </label>
=======
		  		<a href="#" class="img logo rounded-circle mb-5" style="background-image: url(images/avatar.png);"></a>
          <label for="name" class="name"> Name : </label>
>>>>>>> 86d64b203b7f48d5390859576dda6be2f2dd849c:sidebar-01/index.php
	        <ul class="list-unstyled components mb-5">
	          <li class="active">
	            <a href="#home">Home</a>
	          </li>
	          <li>
	              <a href="#about">All Events</a>
	          </li>
              </ul>
	          </li>
	        </ul>

	      </div>
    	</nav>

        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5">

       <section class="search">
          <div class="container">
            <div class="search_form">
        <form class="header-search-form">
            <input type="text" placeholder="Search Student Organizations or Events...."/>
        </form>
          </div>
        </div>
        </section>

        <section class="event">
        <div class="jumbotron">
          <div class="row">
            <div class="col-md-6">
              <body onload="myFunction()">
          <!-- <input type="file" id="myFile" multiple size="50" onchange="myFunction()"> -->

       

      </div>
      <div class="col-md-6">
<<<<<<< HEAD:sidebar-01/form.php
        <form method="POST" action="insert.php" enctype="multipart/form-data">
          <input type="text" class="form-control" name="name" id="inputname" placeholder="Name of RSO" required>
          <input type="text" class="form-control" name="event" id="inputdate" placeholder="Event" required>
      <input type="date" class="form-control" name="date" id="inputdate" placeholder="Date" required>
      <input type="location" class="form-control" name="location" id="inputlocation" placeholder="Location">
      <input type="time" class="form-control" name="time" id="inputtime" placeholder="Time">
      <input type="audience" class="form-control" name="audience" id="inputaudience" placeholder="Audience">
      <input type="description" class="form-control" name="description" id="inputdesc" placeholder="Description">
      <input type ="file" name = 'image'> 

        
=======
        <form class="sell_form" action="insert.php">
          <input type="event" class="form-control" id="inputdate" placeholder="Event" required>
      <input type="date" class="form-control" name="date" id="inputdate" placeholder="Date" required>
      <input type="location" class="form-control" name="loaction" id="inputlocation" placeholder="Location">
      <input type="time" class="form-control" name="time" id="inputtime" placeholder="Time">
      <input type="audience" class="form-control" name="audience" id="inputaudience" placeholder="Audience">
      <input type="description" class="form-control" name="description" id="inputdesc" placeholder="Description">
>>>>>>> 86d64b203b7f48d5390859576dda6be2f2dd849c:sidebar-01/index.php
      <input type="submit" value="Submit" class="btn btn-primary">
    </form>
      </div>
    </div>
</div>
        </section>
      </div>
		</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  <script>


</script>
  </body>
</html>
>>>>>>> 86d64b203b7f48d5390859576dda6be2f2dd849c

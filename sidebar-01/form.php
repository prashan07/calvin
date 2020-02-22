<?php
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
        <form method="POST" action="insert.php" enctype="multipart/form-data">
          <input type="text" class="form-control" name="name" id="inputname" placeholder="Name of RSO" required>
          <input type="text" class="form-control" name="event" id="inputdate" placeholder="Event" required>
      <input type="date" class="form-control" name="date" id="inputdate" placeholder="Date" required>
      <input type="location" class="form-control" name="location" id="inputlocation" placeholder="Location">
      <input type="time" class="form-control" name="time" id="inputtime" placeholder="Time">
      <input type="audience" class="form-control" name="audience" id="inputaudience" placeholder="Audience">
      <input type="description" class="form-control" name="description" id="inputdesc" placeholder="Description">
      <input type ="file" name = 'image'> 

        
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

<?php
require 'connection.php';
session_start();
$id= $_SESSION['id'];
?>
<!doctype html>
<html lang="en">
  <head>
  	<title>Sidebar 01</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<link rel="stylesheet" href="css/style.css">
  </head>
  <body>
		
		<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar">
				<div class="p-4 pt-5">
		  		<a href="#" class="img logo rounded-circle mb-5" style="background-image: url(images/avatar.png);"></a>
          <?php
          $query="select name from student where id = '$id' ";
           $result = mysqli_query($con, $query) or die(mysqli_error($con));
             $array = mysqli_fetch_array($result);
             echo '<label for="name" class="name">Hello, '.$array['rso'].' </label>';
            
          ?>
          
	        <ul class="list-unstyled components mb-5">
	          <li class="active">
	            <a href="#home">Home</a>
            </li>
            <li>
                <a href="#about">All Events</a>
            </li>
            <li>
                <a href="#about">Recommended</a>
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
        
              <?php
        // if(isset($_SESSION['email'])){
            
            $query="select * from event";
            $result = mysqli_query($con, $query) or die(mysqli_error($con));
            //$array = mysqli_fetch_array($result);
          //}

         while ($array=mysqli_fetch_array($result)) {
           # code...
        echo '  <section class="event">
              <div class="jumbotron">
                <div class="row">
                
              <div class="col-md-6">';
               echo '<img src ="uploads/'.$array['image'].'">';
               echo '</div>';

         echo ' <div class="col-md-6">';
            echo '<h3> Event : '.$array['name'].'</h3>';
             echo '<h3>Date : '.$array['date'].'</h3>';
              echo '<h3>Location : '.$array['location'].'</h3>';
              echo '<h3>Time : '.$array['time'].'</h3>';
              echo '<h3>Audience : '.$array['audience'].'</h3>';
              echo '<h3>Description : '.$array['description'] .'</h3>';
      echo '</div>' ;
      echo '</div>' ;
      echo '</div>' ;

            }
        ?>

      </div>
		</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>
<?php
    require 'connection.php';
    session_start();
<<<<<<< HEAD
    if (isset($_SESSION['email'])){
        $email= $_SESSION['email'];
        $name= mysqli_real_escape_string($con,$_POST['name']);
=======
>>>>>>> 86d64b203b7f48d5390859576dda6be2f2dd849c
    $event= mysqli_real_escape_string($con,$_POST['event']);
    $date=mysqli_real_escape_string($con,$_POST['date']);
    $location=mysqli_real_escape_string($con,$_POST['location']);
    $time=mysqli_real_escape_string($con,$_POST['time']);
    $audience=mysqli_real_escape_string($con,$_POST['audience']);
    $description=mysqli_real_escape_string($con,$_POST['description']);
<<<<<<< HEAD
    $image=$_FILES['image']['name'];
     $target= "images/".basename($image);
     $file = $_FILES['image']['name'];
    $file_loc = $_FILES['image']['tmp_name'];
    $folder = "uploads/";
    move_uploaded_file($file_loc, $folder.$file);
    $user_registration_query="insert into event(name, rso,date,location,time,audience, description,image) values ('$name' ,'$event','$date','$location','$time','$audience','$description','$image')";
    $user_registration_result=mysqli_query($con,$user_registration_query) or die(mysqli_error($con));

    

    }
   
 
    /*$duplicate_user_query="select id from rso where name='$email'";
=======
    
 
    $duplicate_user_query="select id from rso where name='$email'";
>>>>>>> 86d64b203b7f48d5390859576dda6be2f2dd849c
    $duplicate_user_result=mysqli_query($con,$duplicate_user_query) or die(mysqli_error($con));
    $rows_fetched=mysqli_num_rows($duplicate_user_result);
    if($rows_fetched>0){
        //duplicate registration
        //header('location: signup.php');
        ?>
        <script>
            window.alert("Email already exists in our database!");
        </script>
        <meta http-equiv="refresh" content="1;url=signup.php" />
        <?php
<<<<<<< HEAD
    }else{}*/
        
        //die($user_registration_query);
        
        // echo "User successfully registered";
      $_SESSION['email']= $email;
        //The mysqli_insert_id() function returns the id (generated with AUTO_INCREMENT) used in the last query.
        $_SESSION['id']=mysqli_insert_id($con);
        //header('location: products.php');  //for redirecting
   
        ?>

           <meta http-equiv="refresh" content="3;url=index_server.php" />
=======
    }else{
        $user_registration_query="insert into users(name,email,password,contact,city,address) values ('$name','$email','$password','$contact','$city','$address')";
        //die($user_registration_query);
        $user_registration_result=mysqli_query($con,$user_registration_query) or die(mysqli_error($con));
        echo "User successfully registered";
        $_SESSION['email']=$email;
        //The mysqli_insert_id() function returns the id (generated with AUTO_INCREMENT) used in the last query.
        $_SESSION['id']=mysqli_insert_id($con); 
        //header('location: products.php');  //for redirecting
        ?>
        <meta http-equiv="refresh" content="3;url=products.php" />
        <?php
    }
    
?>
>>>>>>> 86d64b203b7f48d5390859576dda6be2f2dd849c

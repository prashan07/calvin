<?php
    require 'connection.php';
    session_start();
    $event= mysqli_real_escape_string($con,$_POST['event']);
    $date=mysqli_real_escape_string($con,$_POST['date']);
    $location=mysqli_real_escape_string($con,$_POST['location']);
    $time=mysqli_real_escape_string($con,$_POST['time']);
    $audience=mysqli_real_escape_string($con,$_POST['audience']);
    $description=mysqli_real_escape_string($con,$_POST['description']);
    
 
    $duplicate_user_query="select id from rso where name='$email'";
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
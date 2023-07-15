<?php

include('db.php');  
  
        $email = $_POST['email'];
        $password = $_POST['password'];

        $email = stripcslashes($email);  
        $password = stripcslashes($password);  
        $email = mysqli_real_escape_string($conn, $email);  
        $password = mysqli_real_escape_string($conn, $password);  
      
        $sql = "select *from registration where email = '$email' and password = '$password'";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            session_start();
            $_SESSION['email']=$email;
            header("Location:newindex.php");
            echo "<script type='text/javascript'>alert('Login Sucessfully....')</script>";
  
        }  
        else{  
            echo "<script type='text/javascript'>alert('Login failed. Invalid username or password')</script>";
            
        }     

        ?>
<?php
    $name = $_POST['name'];
    $phone_no = $_POST['phone_no'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $check_box = $_POST['check_box'];


    //Database Connection....

    $conn = new mysqli('localhost','root','','my_db');
    if($conn->connect_error)
    {
        
        die('connection failed :' .$conn->connect_error);
    }
    else{
        $stmt = $conn->prepare("insert into registration(name, phone_no, email, password, confirm_password, check_box)
        values(?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sissss" ,$name, $phone_no, $email, $password, $confirm_password, $check_box); 
        $stmt->execute();
        echo "<script type='text/javascript'>alert('Registration Sucessfully....')</script>";
        $stmt->close();
        $conn->close();
    }


?>

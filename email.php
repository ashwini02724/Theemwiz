<?php
include('db.php');  
    $email = $_POST['email'];


   
    else{
        $stmt = $conn->prepare("insert into email(email) values(?)");
        $stmt->bind_param("s", $email); 
        $stmt->execute();
        echo "<script type='text/javascript'>alert('Email sent Sucessfully....')</script>";
        $stmt->close();
        $conn->close();
    }
    


?>

<?php 
    include "connection.php";

    if(isset($_POST["submit"])) {
        $username = $_POST["username"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $confirm_password = $_POST["confirm-password"];
        
        $sql = "INSERT INTO collect_data(username,email,password,confirm_password) values('$username','$email','$password','$confirm_password')";

        if(mysqli_query($conn, $sql)){
            echo "record added successfully";
        }else{
            echo "error";
        }
    }
?>
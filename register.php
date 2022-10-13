<?php 
    include "connection.php";

    if(isset($_POST["submit"])) {
        $username = $_POST["username"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $confirm_password = $_POST["confirm-password"];
        
        $check = "SELECT * FROM collect_data WHERE email = '$email'";

        $result1 = mysqli_query($conn, $check);

        $num1 = mysqli_num_rows($result1);
        if($num1 == 1){
            echo "Email already taken";
        }else{
            $sql = "INSERT INTO collect_data(username,email,password,confirm_password) values('$username','$email','$password','$confirm_password')";
            mysqli_query($conn, $sql);
            echo "Registration Successfully";
        }
    }
?>
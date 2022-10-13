<?php 

    include "connection.php";
    
    if(isset($_POST["submit"])){
        $username = $_POST["username"];
        $email = $_POST["email"];
        $password = $_POST["password"];

        $s = "SELECT username, email, password FROM collect_data WHERE email = '$email'";

        $result = mysqli_query($conn, $s);

        $num = mysqli_num_rows($result);

        if($num == 1){
            header('location: home.html');
        }else{
            echo "Wrong Email or Password";
        }
    }
?>
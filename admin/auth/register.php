<?php
require('../config/config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $email = $_POST['email'];
    // $password = md5($_POST['password']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);


    if ($username != "" && $email != "" && $password != "") {

        $check= "SELECT * FROM users WHERE email='$email' OR username='$username'";
        $result= mysqli_query($conn, $check);

        if($result->num_rows>0){
            echo "<div class='alert alert-danger' role='alert'> User or email already exists </div";
            header("Refresh:0; url=../register.php?msg=error");
        }
        else{
            $query = "INSERT INTO users(username, email, password) VALUES('$username', '$email', '$password')";
            $result = mysqli_query($conn, $query);
            if ($result) {
                header("Refresh:0; url=../index.php?msg=register");
            } else {
                header("Refresh:0; url=../register.php?msg=error");
            }
        }
        
       
    } 
    else {
        echo "<div class='alert alert-danger' role='alert'> All Data are required </div";
        header("Refresh:2;");
    }
}

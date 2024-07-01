<?php
require("../config/config.php");
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    // $password = md5($_POST['password']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    if ($email != "" && $password != "") {

        $check = "SELECT * FROM users WHERE email='$email' AND password='$password'";
        $result = mysqli_query($conn, $check);

        if ($result->num_rows > 0) {
            
            $row = mysqli_fetch_assoc($result);
            $_SESSION['id'] = $row['id'];
            $_SESSION['username'] = $row['username'];
            $_SESSION['email'] = $row['email'];
            echo "Login successful.";
            header("Refresh:0; url=../dashboard.php");
        } else {
            echo "<div class='alert alert-danger' role='alert'> User not found </div";
            header("Refresh:2; url=../index.php");
        }
    } else {
        echo "<div class='alert alert-danger' role='alert'> All Data are required </div";
        header("Refresh:2;");
    }
    
}

?>
<?php
require("../config/config.php");
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if ($email != "" && $password != "") {
        $check = "SELECT * FROM users WHERE email='$email'";
        $result = mysqli_query($conn, $check);
        if ($result) {
            $row = mysqli_fetch_assoc($result);
            if ($row) {
                if (password_verify($password, $row['password'])) {
                    $_SESSION['id'] = $row['id'];
                    $_SESSION['username'] = $row['username'];
                    $_SESSION['email'] = $row['email'];
                    echo "Login successful.";
                    header("Refresh:0; url=../dashboard.php");
                    exit(); // Ensure script stops after redirection
                } else {
                    echo "<div class='alert alert-danger' role='alert'>Password does not match</div>";
                    header("Refresh:2; url=../index.php");
                    exit();
                }
            } else {
                echo "<div class='alert alert-danger' role='alert'>User not found</div>";
                header("Refresh:2; url=../index.php");
                exit();
            }
        } else {
            echo "<div class='alert alert-danger' role='alert'>Database query failed</div>";
            header("Refresh:2; url=../index.php");
            exit();
        }
    } else {
        echo "<div class='alert alert-danger' role='alert'>All fields are required</div>";
        header("Refresh:2; url=../index.php");
        exit();
    }
}

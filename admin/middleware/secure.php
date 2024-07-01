<?php

session_start();

if (!isset($_SESSION['email'])) {
    // Redirect the user to the login page if not logged in
    header("Location: ../index.php");
    exit(); // Ensure script execution stops after redirection
}

?>
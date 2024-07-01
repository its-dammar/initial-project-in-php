<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "php_tms";

$conn = new mysqli($servername, $username, $password, $database);

// if($conn){
//     echo "Connection is successful";
// }
// else{
//     echo "Connection is not successful";
// }

// ____________________________________________________________________________________
// another way to connect to the database

// $conn = new mysqli("localhost", "root", "", "php_tms");

// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }
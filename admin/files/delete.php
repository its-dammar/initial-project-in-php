<?php
include("../config/config.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query1 = "SELECT * FROM files WHERE id= $id";
    $result = mysqli_query($conn, $query1);
    $row = $result->fetch_assoc();
    $filelink = $row['file_link'];
    $finallink = '../uploads/' . $filelink;
    unlink($finallink);

    $query = " DELETE FROM files WHERE id =$id";
    $result = mysqli_query($conn, $query);
    if ($result) {
        header('Refresh: 0; url=index.php');
    } else {
        echo "your data is not delete";
    }
}

<?php
require("../config/config.php");
if(isset($_GET['id'])){
    $id = $_GET['id'];

    $query="DELETE FROM tasks WHERE id=$id";
    $result= mysqli_query($conn, $query);
    if($result){
        header("Location: index.php?msg=delete");
    }
    else{
        echo "Error in deleting index.php?msg=error";
    }
}
$conn->close();
?>
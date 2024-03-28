<?php

session_start();

if(!isset($_SESSION['username'])){

}
else{
    header("Refresh:0; url=index.php");

} 

?>
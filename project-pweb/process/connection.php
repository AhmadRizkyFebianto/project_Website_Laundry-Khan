<?php
$host = "127.0.0.1";
$usname = "root";
$passw = "";
$db = "pweb";
    $conn = mysqli_connect($host,$usname,$passw,$db);
    if (!$conn) {
    
        echo "Connection failed!";
    
    }
?>
<?php
    $hostname="174.129.60.181";
    $username="user";
    $password="password";
    $database="cloud-computing";
    $port="3306"; 

    $conn=new mysqli($hostname,$username,$password,$database,$port);
    if ($conn->connect_error) {
        die("Connessione fallita: " . $conn->connect_error);
    }
?>
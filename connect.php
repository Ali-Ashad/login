<?php

$host="localhost";
$user="root";
$pass="";
$db="login";
$conn = new mysqli('localhost', 'root', '', 'login', 3307);

if($conn->connect_error){
    echo "Failed to connect DB".$conn->connect_error;
}
?>
<?php

$dbHost = "localhost";
$dbUsername = "root";
$dbPass = ""; 
$dbName = "vaxcare";

$conn = new mysqli($dbHost, $dbUsername, $dbPass, $dbName);

if ($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}

?>
<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "database_dia4";

$connection = mysqli_connect($host, $username, $password, $database);

if($connection ->connect_error){
    die("Connection failed".$connection->connect_error);
}else{
    //echo"Connected"."<br>";
}
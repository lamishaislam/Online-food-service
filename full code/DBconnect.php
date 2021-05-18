<?php

$Survername = "localhost";
$username = "root";
$password = "";
@dbname = "chef";

//creating connection

$conn = new mysqli($Survername,$username,$password);

if($conn->connect_error){
    die("connection failed: ".$conn->connect_error);
}
else{
    mysqli_select_db($conn, $dbname);
    echo "connection successful"
}
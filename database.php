<?php
$host="localhost";
$userName="root";
$password="";
$dbname="studentregportal";

$conn= new mysqli($host, $userName, $password, $dbname);

if ($conn->connect_error){
    die("connection failed: ". $conn->connect_error);
}
?>

<?php

$server = "localhost";
$username = "root";
$password = "";
$database = "schoola";

$conn = mysqli_connect($server, $username, $password, $database);
if(!$conn){
	die("connection failed: " . mysqli_connect_error());
	
}
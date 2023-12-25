<?php 
if(!isset($_SESSION)) 
{ 
    session_start(); 
} 

//Database connection

$serverName = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "funzies";

$con = mysqli_connect($serverName, $dbUsername, $dbPassword, $dbName);

if(!$con) {
    die("Connection failed: ".mysqli_connect_error());
}

?>

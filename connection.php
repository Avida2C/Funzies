<?php 
// Check if a session has already been started; if not, then start a new session.
if(!isset($_SESSION)) 
{ 
    session_start(); 
} 

//Database connection
$serverName = "localhost"; 
$dbUsername = "root";      
$dbPassword = "";          
$dbName = "funzies";       

// Attempt connection
$con = mysqli_connect($serverName, $dbUsername, $dbPassword, $dbName);

if(!$con) {
    // If connection fails to connect to the db, end script and output an error message.
    die("Connection failed: ".mysqli_connect_error());
}

?>

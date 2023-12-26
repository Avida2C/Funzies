<?php 
// Check if a session has already been started; if not, then start a new session.
if(!isset($_SESSION)) 
{ 
    session_start(); 
} 

//Database connection
$serverName = "localhost"; // The hostname of the database server.
$dbUsername = "root";      // The username for accessing the database.
$dbPassword = "";          // The password for the database user.
$dbName = "funzies";       // The name of the database to connect to.

// Attempt to establish a connection.
$con = mysqli_connect($serverName, $dbUsername, $dbPassword, $dbName);

// Check if the connection was successful. If not, end the script and output an error message.
if(!$con) {
    die("Connection failed: ".mysqli_connect_error());
}

?>

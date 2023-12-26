<?php
require "../functions.php"; 

//the following will reset the session data completely:
session_unset(); // Remove all session variables.
session_destroy(); // Destroy the session itself.
session_regenerate_id(); // Generate a new session ID to avoid session fixation attacks.

// Redirect to location:
header("Location: admin.php"); // Redirect the browser to the admin page.
die; // Terminates the script.
?>
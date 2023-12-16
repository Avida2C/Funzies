<?php
require "functions.php";

//the following will reset the session data completely:
session_unset();
session_destroy();
session_regenerate_id();

//go to location: 
header("Location: index.php");
die;
?>
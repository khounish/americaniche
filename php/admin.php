<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if(($_SESSION["loggedin"] == true) && ($_SESSION["privileges"] == "admin") )
{
header("location: /.admin/index.php");
}
else
{
  echo "Permission Denied";
}
?>

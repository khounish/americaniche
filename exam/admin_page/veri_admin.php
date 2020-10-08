<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if($_SESSION["privileges"] !== "admin")
{
    header("location: http://www.americaniche.com/exam/index.php");
    exit;
}
?>

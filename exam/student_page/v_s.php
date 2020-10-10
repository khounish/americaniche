<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if($_SESSION["s_privileges"] !== "student")
{
    header("location: http://www.americaniche.com/exam/");
    exit;
    session_destroy();
}
?>

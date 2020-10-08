<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
<<<<<<< HEAD
if($_SESSION["privileges"] !== "admin")
=======
if ($_SESSION["privileges"] !== "admin")
>>>>>>> 6c530246508c1c17b0c1527ee9532f2e40172a1a
{
    header("location: http://www.americaniche.com/exam/index.php");
    exit;
}
?>

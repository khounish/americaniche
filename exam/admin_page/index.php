<!DOCTYPE html>
<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== "admin"){
    header("location: /exam/index.php");
    exit;
}
?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Americaniche Exam Portal</title>
    </head>
    <frameset cols = "195,*" border="0">
      <frame src = "page.php" name = "menu_page" />
      <frame src = "blank.php" name = "main_page" />

      <noframes>
          <body>Your browser does not support frames.</body>
      </noframes>

      </frameset>

</html>

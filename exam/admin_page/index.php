<!DOCTYPE html>
<?php
// Initialize the session

// Check if the user is logged in, if not then redirect him to login page
if ($_SESSION["privileges"] !== "admin")
{
    header("location: /exam/");
    exit;
}
?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Americaniche Exam Portal</title>
    </head>
    <frameset cols = "13.2%,*" border="0">
      <frame src = "page.php" name = "menu_page" />
      <frame src = "blank.php" name = "main_page" />

      <noframes>
          <body>Your browser does not support frames.</body>
      </noframes>

      </frameset>

</html>

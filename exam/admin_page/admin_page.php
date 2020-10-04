<!DOCTYPE html>
<?php
include_once ("veri_admin.php");
?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Admin's Page</title>
    <link rel="stylesheet" href="css/style.css">
  </head>

  <body>
    <div class="header">
        <h1>Exam Portal Admin's Page</h1>
    </div>

    <div class="left">
      <div class="dropdown-menu">
      <button class="menu-btn">Admin's Section</button>
      <div class="menu-content">
      <a class="links" href="../Add_question/AddNewQues.php">Add Question</a>
      <a class="links" href="#">Modification</a>
      <a class="links" href="#">Reports</a>
      <a class="links" href="#">OneView</a>
      <a class="links" href="/php/exam_logout.php">Logout</a>
</div>

</div>
<div class="image" >
  <img src="image/logo.png">
</div>

</div>


  </body>
</html>

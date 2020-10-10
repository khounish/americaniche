<?php
include_once ("v_s.php");
?>
<html>
<style>
div.a {
  text-align: center;
}
</style>
   <body >
<div class=a>
 <img src="../image/logo.png">
      <h1> Welcome to Americaniche Exam Portal.</h1> </div>
      <br><p style="color : red"><?php echo htmlspecialchars($_SESSION["s_error"]); ?>
   </body>

</html>

<?php
require_once "v_s.php";
?>
<!DOCTYPE html>
<html>
<style>
div.a {
  text-align: center;
}
</style>
   <body >
<div class=a>
 <img src="/photos/logo.png" align=center alt="logo" width="300px" height="300px">
      <h1> Hello! <?php echo htmlspecialchars($_SESSION["username"]); ?> Welcome to AmericaNiche Academy</h1> </div>
   </body>

</html>

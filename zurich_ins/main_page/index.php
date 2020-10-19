<?php
require_once "veri.php";
?>
<!DOCTYPE html>
<html>
<style>
 #webterminal{
   display:none;
 }
</style>

   <head>
      <title>Zurich</title>
      <script>
      document.getElementById("webterminal").style.display="none";
      </script>
   </head>
<frameset cols = "184,*,184" border="0">

   <frame src = "left.php" name = "left" scrolling="no" />
   <frame src = "center.php" name = "center"/>

   <div id="webterminal">
   <frameset rows = "*,250" border="0">

   <frame src = "center.php" name = "center"/>
   <frame src = "shellinabox.php" name = "centerdown"/>

   </frameset>
  </div>
   <frame src = "right.php" name = "right" scrolling="no" />
      <noframes>
         <body>Your brower does not support frames.</body>
      </noframes>
</frameset>
</html>

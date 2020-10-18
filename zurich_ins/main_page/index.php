<?php
require_once "veri.php";
?>
<!DOCTYPE html>
<html>

   <head>
      <title>Zurich</title>
   </head>
<frameset cols = "184,*,184" border="0">

 <frame src = "left.php" name = "right" scrolling="no" />

      <frameset rows = "1,0" border="0">
      <!-- <frame src = "top.html" name = "top_page" scrolling="no" /> -->
        <frame src = "center.php" name = "center" scrolling="no" />
      </frameset>
 <frame src = "right.php" name = "left" scrolling="no" />
      <noframes>
         <body>Your brower does not support frames.</body>
      </noframes>
</frameset>
</html>

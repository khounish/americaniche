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
 
   </head>
 
<frameset cols = "184,*,184" border="0">

   <frame src = "left.php" name = "left" scrolling="no" />
   <frame src = "center.php" name = "center"/>
   <frame src = "right.php" name = "right" scrolling="no" />
 
</frameset>
  <script>
        var origCols = null;
        function receiveMessage(event)
        {
          if(origCols!=null)
           showFrame()
          else
           hideFrame();
        }

        addEventListener("message", receiveMessage, false);

        function hideFrame() {
            var frameset = document.getElementById("frameSet");
            origCols = frameset.rows;
            frameset.rows = "0, *";
        }

        function showFrame() {
            document.getElementById("frameSet").rows = origCols;
            origCols = null;
        }
        </script>
</html>

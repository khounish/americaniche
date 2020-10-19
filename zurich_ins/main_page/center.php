<?php
require_once "veri.php";
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
 <style type="text/css">
body {
    font-family:verdana,arial,sans-serif;
    font-size:10pt;
    margin:30px;
    background-color:#ffcc00;
    }
</style>
<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>


</head>
<body>
<h1>Content</h1>
<br>

<button id="button1">Toggle 'em</button>
<p>Hiya</p>
<p>Such interesting text, eh?</p>

<script>
$('button').on('click',function(){
     $( "p" ).toggle( "slow" );
      $( "h1" ).toggle( "slow" );
});
</script>
  </body>
</html>

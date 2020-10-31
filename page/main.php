<?php
require_once "v_s.php";
?>
<!DOCTYPE html>
<html>
<style>
.logo {
    background:url("/photos/logo_big.png");
    background-size: cover;
    width:110px;
    height: 110px;
    border-radius: 50%;
    margin:0 auto;
    box-shadow:
    /* logo shadow */
    0px 0px 2px blue,
    /* offset */
    0px 0px 0px 5px #24cfaa,
    /*bottom right */
    8px 8px 15px #a7aaaf,
    /* top left */
    -8px -8px 15px #ffffff
    ;
}
</style>
   <body >
<div class=a>
<div> <div class="logo"></div><br><br></div>
      <h1> Hello! <?php echo htmlspecialchars($_SESSION["username"]); ?> Welcome to AmericaNiche Academy</h1> </div>
   </body>

</html>

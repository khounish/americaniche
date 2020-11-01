<?php
require_once "v_s.php";
?>
<!DOCTYPE html>
<html>
<style>
.logo {
    background:url("/photos/logo_big.png");
    background-size: cover;
    width:250px;
    height: 250px;
    border-radius: 50%;
    margin:10 px;
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
.m {
   text-align : center;
}
</style>
   <body >
<div> <div class="logo"></div><br><br></div><br>
<div class="m"> <h1> Hello! <b style="text-transform: uppercase;"><?php echo htmlspecialchars($_SESSION["username"]); ?> </b>Welcome to AmericaNiche Academy</h1></div>
   </body>

</html>

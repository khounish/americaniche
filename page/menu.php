<?php
require_once "v_s.php";
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/style.css" />
 </head>
   <body bgcolor = "#eb782c" color=red>
   <div id="position1"> <div class="logo"></div><br><br></div>

<div id="position2">
<br><a href="practice.php" target="main_page">Practice now</a>
<br>
</div>
<div id="position">
<br><a href="practice.php" target="main_page">Logout</a>
    </div>


<div id="position3">
   <ul id="myUL" style="margin-top:50">
   <ul id="myUL">
  <li><span class="caret"><font color=white>Prepare Environment</span>
    <ul class="nested">
      <li><a href = "/videos/vm_install.php" target = "main_page">How to install VM</a></li>
      <li><a href = "/videos/fedora_install.php" target = "main_page">How to install Fedora31</a></li>
</ul>
</li>
  
  <ul id="myUL">
  <li><span class="caret"><font color=white>Videos</span>
   <ul class="nested">
      <li><a href = "/videos/day1.php" target = "main_page">Day1</a></li>
      <li><a href = "/videos/day2.php" target = "main_page">Day2</a></li>
</ul>
</li>

<li><span class="caret"><font color=white>Assignments</span>
<ul class="nested">
     <li> <a href = "assig/assig_1.php" target = "main_page">Assignment1</a><br></li>
     <li> <a href = "assig/assig_2.php" target = "main_page">Assignment2</a><br></li>
</li>
</ul>

<ul id="myUL">
  <li><span class="caret"><font color=white>Server OS</span>
    <ul class="nested">
      <li><a href = "http://software.americaniche.com" target = "main_page">Download</a></li>
</ul>
</li>

<ul id="myUL">
  <li><span class="caret">Imprt. source</span>
    <ul class="nested"><font color=white>
      <li><a href = "/pdf/ascii.pdf" target = "main_page">ASCII Code</a></li>
      <li><a href = "/pdf/blc.pdf" target = "main_page">Bacis linux command</a></li>
    </ul>
</li>
</div>


<script>
var toggler = document.getElementsByClassName("caret");
var i;

for (i = 0; i < toggler.length; i++) {
  toggler[i].addEventListener("click", function() {
    this.parentElement.querySelector(".nested").classList.toggle("active");
    this.classList.toggle("caret-down");
  });
}
</script>
</body>
</html>

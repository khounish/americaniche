<?php
require_once "v_s.php";
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/style.css" />
 </head>
   <body bgcolor = "#025241" color=red>
   <div id="position1"> <div class="logo"></div><br><br></div>
   <div id="position2">
   <br><a href="practice.php" target="main_page">Practice now</a>
<br>
<p><a href="../php/logout.php" target="_top" style="color:red;">Logout</a></p><br>
</div>


<div id="position3">
   <ul id="myUL" style="margin-top:50">
   <ul id="myUL">
  <li><span class="caret"><font color=white>Prepare your system</span>
    <ul class="nested">
      <li><a href = "http://videos.americaniche.com/ws4a.html" target = "main_page">How to insatall Linux</a></li>
</ul>
</li>
  
   <ul id="myUL">
  <li><span class="caret"><font color=white>Videos</span>
    <ul class="nested">
      <li><a href = "/videos/day1.php" target = "main_page">Day1</a></li>
      <li><a href = "/videos/day2.php" target = "main_page">Day2</a></li>
      <li><a href = "/videos/day3.php" target = "main_page">Day3</a></li>
      <li><a href = "/videos/day4.php" target = "main_page">Day4</a></li>
      <li><a href = "/videos/day5a.php" target = "main_page">day5 part 1</a></li>
      <li><a href = "/videos/day5b.php" target = "main_page">Day5 part 2</a></li>
      <li><a href = "/videos/day5c.php" target = "main_page">Day5 part 3</a></li>
</ul>
</li>

<li><span class="caret"><font color=white>Assignments</span>
<ul class="nested">
     <li> <a href = "assig/assig_1.php" target = "main_page">Assignment1</a><br></li>
     <li> <a href = "assig/assig_2.php" target = "main_page">Assignment2</a><br></li>
      <li> <a href = "assig/assig_3.php" target = "main_page">Assignment3</a><br></li>
      <li> <a href = "assig/assig_4.php" target = "main_page">Assignment4</a><br></li>
      <li> <a href = "assig/assig_5.php" target = "main_page">Assignment5</a><br></li>
      <li> <a href = "assig/assig_6.php" target = "main_page">Assignment6</a><br></li>
      <li> <a href = "assig/assig_7.php" target = "main_page">Assignment7</a><br></li>
</ul>
</li>

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

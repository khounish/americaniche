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
<br><a href="/php/logout.php" target="_top">Logout</a>
    </div>


<div id="position3">
   <ul id="myUL" style="margin-top:50">
   <ul id="myUL">
  <li><span class="caret"><font color=white>Prepare Environment</span>
    <ul class="nested">
      <li><a href = "/videos/vm_install.php" target = "main_page">VM Installation</a></li>
      <li><a href = "/videos/fedora_install.php" target = "main_page">OS Installation</a></li>
      <li><a href = "/videos/wsl_install.php" target = "main_page">WSL Installation</a></li>
      <li><a href = "/videos/ubuntu_install.php" target = "main_page">Ubuntu Installion</a></li>
</ul>
</li>
  
 <ul id="myUL">
  <li><span class="caret"><font color=white>Training Videos</span>
    <ul class="nested">
      <li><a href = "/videos/orientation.php" target = "main_page">Orientation Day</a></li>
      <li><a href = "/videos/day1.php" target = "main_page">OS Introduction</a></li>
      <li><a href = "/videos/day2.php" target = "main_page">Linux Voyage</a></li>
      <li><a href = "/videos/day3.php" target = "main_page">Path & Editor</a></li>
      <li><a href = "/videos/day4.php" target = "main_page">Fork & Join</a></li>
     
   </ul>
</li>  
 
  <li><span class="caret"><font color=white>AWS Training</span>
    <ul class="nested">
      <li><a href = "/videos/aws_basics.php" target = "main_page">AWS Basics</a></li>
      <li><a href = "/videos/IAM.php" target = "main_page">IAM</a></li>
      <li><a href = "/videos/s3.php" target = "main_page">S3</a></li>
   </ul>
</li>   
   
<ul id="myUL">
  <li><span class="caret"><font color=white>Assignments</span>
    <ul class="nested">
      <li><a href = "assig/assig_1.php" target = "main_page">Assignment 1</a></li>
      <li><a href = "assig/assig_2.php" target = "main_page">Assignment 2</a></li>
</ul>
</li>

<ul id="myUL">
  <li><span class="caret"><font color=white>Download Softwares</span>
    <ul class="nested">
      <li><a href = "http://software.americaniche.com" target = "main_page">Download</a></li>
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

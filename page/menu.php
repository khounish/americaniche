<?php
require_once "v_s.php";
?>
<html>
<head>
	<style>/* -----
SVG Icons - svgicons.sparkk.fr
----- */

.svg-icon {
  width: 1em;
  height: 1em;
}

.svg-icon path,
.svg-icon polygon,
.svg-icon rect {
  fill: #4691f6;
}

.svg-icon circle {
  stroke: #4691f6;
  stroke-width: 1;
}
	</style>
<link rel="stylesheet" type="text/css" href="css/style.css" />
 </head>
   <body bgcolor = "#eb782c" color=red>
   <div id="position1"> <div class="logo"></div><br><br></div>

<div id="position2">
<br><a href="practice.php" target="main_page">Practice now</a>
<br>
</div>
<div id="position">
<svg class="svg-icon" viewBox="0 0 20 20">
							<path fill="none" d="M16.198,10.896c-0.252,0-0.455,0.203-0.455,0.455v2.396c0,0.626-0.511,1.137-1.138,1.137H5.117c-0.627,0-1.138-0.511-1.138-1.137V7.852c0-0.626,0.511-1.137,1.138-1.137h5.315c0.252,0,0.456-0.203,0.456-0.455c0-0.251-0.204-0.455-0.456-0.455H5.117c-1.129,0-2.049,0.918-2.049,2.047v5.894c0,1.129,0.92,2.048,2.049,2.048h9.488c1.129,0,2.048-0.919,2.048-2.048v-2.396C16.653,11.099,16.45,10.896,16.198,10.896z"></path>
							<path fill="none" d="M14.053,4.279c-0.207-0.135-0.492-0.079-0.63,0.133c-0.137,0.211-0.077,0.493,0.134,0.63l1.65,1.073c-4.115,0.62-5.705,4.891-5.774,5.082c-0.084,0.236,0.038,0.495,0.274,0.581c0.052,0.019,0.103,0.027,0.154,0.027c0.186,0,0.361-0.115,0.429-0.301c0.014-0.042,1.538-4.023,5.238-4.482l-1.172,1.799c-0.137,0.21-0.077,0.492,0.134,0.629c0.076,0.05,0.163,0.074,0.248,0.074c0.148,0,0.294-0.073,0.382-0.207l1.738-2.671c0.066-0.101,0.09-0.224,0.064-0.343c-0.025-0.118-0.096-0.221-0.197-0.287L14.053,4.279z"></path>
						</svg><a href="/php/logout.php" target="_top">Logout</a>
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
  
  // <ul id="myUL">
  //<li><span class="caret"><font color=white>Videos</span>
    //<ul class="nested">
      //<li><a href = "/videos/day1.php" target = "main_page">Day1</a></li>
      //<li><a href = "/videos/day2.php" target = "main_page">Day2</a></li>
//</ul>
//</li>

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

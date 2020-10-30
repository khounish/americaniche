<?php
require_once "v_s.php";
?>
<html>
<head>
  <style>
  .logo {
  	width:100px;
  	height:100px;
  	border-radius:50%;
  	overflow: hidden;
    align:center;
    margin-left: 20px;
  }
  a:link {
  color: white;
  background-color: transparent;
  text-decoration: none;

}
a:visited {
  color: pink;
  background-color: transparent;
  text-decoration: none;
}

a:hover {
  color: red;
  background-color: transparent;
  text-decoration: underline;
}

a:active {
  color: yellow;
  background-color: transparent;
  text-decoration: underline;
}/* Remove default bullets */

ul, #myUL {
  list-style-type: none;
  color: #24cfaa;
}

/* Remove margins and padding from the parent ul */
#myUL {
  margin: 0;
  padding: 0;
  color: #24cfaa;
}

/* Style the caret/arrow */
.caret {
  cursor: pointer;
  user-select: none; /* Prevent text selection */
  color: #24cfaa;
}

/* Create the caret/arrow with a unicode, and style it */
.caret::before {
  content: "\25B6";
  color: #24cfaa;
  display: inline-block;
  margin-right: 6px;
}

/* Rotate the caret/arrow icon when clicked on (using JavaScript) */
.caret-down::before {
  transform: rotate(90deg);
  color: #24cfaa;
}

/* Hide the nested list */
.nested {
  display: none;
  color: #24cfaa;
}

/* Show the nested list when the user clicks on the caret/arrow (with JavaScript) */
.active {
  display: block;
}

</style>
   <body bgcolor = "#ecf0f3" color=red><b>
   <img src="/photos/logo.png" class="logo" alt="logo">

   <ul id="myUL" style="margin-top:50">
  <li><span class="caret"><font color=#24cfaa>Assignments</span>
    <ul class="nested">
     <li> <a href = "http://videos.americaniche.com/asgn1.html" target = "main_page">Assignment1</a><br></li>
     <li> <a href = "http://videos.americaniche.com/asgn2.html" target = "main_page">Assignment2</a><br></li>
      <li> <a href = "http://videos.americaniche.com/asgn3.html" target = "main_page">Assignment3</a><br></li>
      <li> <a href = "http://videos.americaniche.com/asgn4.html" target = "main_page">Assignment4</a><br></li>
      <li> <a href = "http://videos.americaniche.com/asgn5.html" target = "main_page">Assignment5</a><br></li>
      <li> <a href = "http://videos.americaniche.com/asgn6.html" target = "main_page">Assignment6</a><br></li>
      <li> <a href = "http://videos.americaniche.com/asgn7.html" target = "main_page">Assignment7</a><br></li>
</ul>
</li>

<ul id="myUL">
  <li><span class="caret"><font color=#24cfaa>Videos</span>
    <ul class="nested">
      <li><a href = "http://videos.americaniche.com/day1.html" target = "main_page">Day1</a></li>
      <li><a href = "http://videos.americaniche.com/day2.html" target = "main_page">Day2</a></li>
      <li><a href = "http://videos.americaniche.com/day3.html" target = "main_page">Day3</a></li>
      <li><a href = "http://videos.americaniche.com/day4.html" target = "main_page">Day4</a></li>
      <li><a href = "http://videos.americaniche.com/day5a.html" target = "main_page">day5 part 1</a></li>
      <li><a href = "http://videos.americaniche.com/day5b.html" target = "main_page">Day5 part 2</a></li>
      <li><a href = "http://videos.americaniche.com/day5c.html" target = "main_page">Day5 part 3</a></li>
      <li><a href = "http://videos.americaniche.com/day6a.html" target = "main_page">Day6 part 1</a></li>
      <li><a href = "http://videos.americaniche.com/day6b.html" target = "main_page">Day6 part 2</a></li>
      <li><a href = "http://videos.americaniche.com/day7.html" target = "main_page">Day7 </a></li>
      <li><a href = "http://videos.americaniche.com/day8.html" target = "main_page">Day8 </a></li>
      <li><a href = "http://videos.americaniche.com/day9.html" target = "main_page">Day9 </a></li>
      <li><a href = "http://videos.americaniche.com/day10.html" target = "main_page">Day10 </a></li>
      <li><a href = "http://videos.americaniche.com/day11.html" target = "main_page">Day11 </a></li>
      <li><a href = "http://videos.americaniche.com/day12.html" target = "main_page">Day12</a></li>
      <li><a href = "http://videos.americaniche.com/day13.html" target = "main_page">Day13</a></li>
</ul>
</li>

<li><span class="caret"><font color=#24cfaa>Workshop</span>
    <ul class="nested">
      <li><a href = "http://videos.americaniche.com/ws1.html" target = "main_page">WorkShop1</a></li>
      <li><a href = "http://videos.americaniche.com/ws2.html" target = "main_page">WorkShop2</a></li>
      <li><a href = "http://videos.americaniche.com/ws3.html" target = "main_page">WorkShop3</a></li>
      <li><a href = "http://videos.americaniche.com/ws4a.html" target = "main_page">WorkShop4 Part1</a></li>
      <li><a href = "http://videos.americaniche.com/ws4b.html" target = "main_page">WorkShop4 Part2</a></li>
</ul>

<ul id="myUL">
  <li><span class="caret"><font color=#24cfaa>Server OS</span>
    <ul class="nested">
      <li><a href = "http://software.americaniche.com" target = "main_page">Fedora31</a></li>
      <li><a href = "http://software.americaniche.com" target = "main_page">Ubuntu18.04.4</a></li>
      <li><a href = "http://software.americaniche.com" target = "main_page">CentOS</a></li>

</ul>
</li>
<ul id="myUL">
  <li><span class="caret">Imprt. source</span>
    <ul class="nested"><font color=#24cfaa>
      <li><a href = "/pdf/ascii.pdf" target = "main_page">ASCII Code</a></li>
      <li><a href = "/pdf/blc.pdf" target = "main_page">Bacis linux command</a></li>
    </ul>
</li>

<ul id="myUL">
<li><span class="caret">Mysql</span>
 <ul class="nested"><font color=#24cfaa>
<li> <a href = "http://videos.americaniche.com/pf.html" target = "main_page">Port Forwarding</a><li>
<li> <a href = "http://videos.americaniche.com/pfcss1.html" target = "main_page">Port Forwarding1</a><li>
<li> <a href = "http://videos.americaniche.com/msql_testing.html" target = "main_page">Mysql Connection</a><li>
      <li> <a href = "http://videos.americaniche.com/gasgn1.html" target = "main_page">Guided Exercise</a><br></li>
      <li> <a href = "http://videos.americaniche.com/gasgn2.html" target = "main_page">Mysql Exercise 1</a><br></li>
<li> <a href = "http://videos.americaniche.com/airflow.html" target = "main_page">Airflow</a><br></li>
<li> <a href = "http://videos.americaniche.com/samba.html" target = "main_page">Samba</a><br></li>
</ul>

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

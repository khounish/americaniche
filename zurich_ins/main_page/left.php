<?php
require_once "veri.php";
?>
<!DOCTYPE html>
<html>
<style>
body{
text-align: left;
font-family: sans-serif;}
a:link {
  color: white;
  background-color: transparent;
  text-decoration: none;
  font-size: 15px;

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
}

/* Remove margins and padding from the parent ul */
#myUL {
  margin: 0;
  padding: 0;
}

/* Style the caret/arrow */
.caret {
  cursor: pointer;
  user-select: none; /* Prevent text selection */
}

/* Create the caret/arrow with a unicode, and style it */
.caret::before {
  content: "\25B6";
  color: white;
  display: inline-block;
 margin-right: 6px;
}

/* Rotate the caret/arrow icon when clicked on (using JavaScript) */
.caret-down::before {
  transform: rotate(90deg);
  margin-right: 6px;
}

/* Hide the nested list */
.nested {
  display: none;
}

/* Show the nested list when the user clicks on the caret/arrow (with JavaScript) */
.active {
  display: block;
}

</style>
   <body bgcolor = "rgba(15,18,59,0.5)" color=red><b>
   <img src="/zurich_ins/images/zurich-1.png" align=center height="150px"><br><br>
<ul id="myUL">
  <li><span class="caret"><font color=white>Videos</span>
    <ul class="nested">
      <li><a href = "http://videos.americaniche.com/day1.html" target = "center">Day1</a></li>
      <li><a href = "http://videos.americaniche.com/day2.html" target = "center">Day2</a></li>
      <li><a href = "http://videos.americaniche.com/day3.html" target = "center">Day3</a></li>
      <li><a href = "http://videos.americaniche.com/day4.html" target = "center">Day4</a></li>
      <li><a href = "http://videos.americaniche.com/day5a.html" target = "center">Day5</a></li>

</ul>
</li>
 <li><span class="caret">Assignments</span>
    <ul class="nested">
     <li> <a href = "assignment.php" target = "center">Assignment1</a><br></li>
     <li> <a href = "assignment2.php" target = "center">Assignment2</a><br></li>
      <li> <a href = "http://videos.americaniche.com/asgn3.html" target = "center">Assignment3</a><br></li>
      <li> <a href = "http://videos.americaniche.com/asgn4.html" target = "center">Assignment4</a><br></li>
      <li> <a href = "http://videos.americaniche.com/asgn5.html" target = "center">Assignment5</a><br></li>

</ul>
<li><span class="caret"><font color=white>Workshop</span>
    <ul class="nested">
      <li><a href = "http://videos.americaniche.com/ws1.html" target = "center">WorkShop1</a></li>
</ul>
<li><span class="caret">Mysql</span>
 <ul class="nested">
<li> <a href = "http://videos.americaniche.com/pf.html" target = "center">Port Forwarding</a><li>
</ul>

</ul>
<p style="color:red;"><a href="../php/logout.php" target="_top">logout<a><p>


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

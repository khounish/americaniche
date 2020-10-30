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
   <body bgcolor = "#24cfaa" color=red><b>
   <img src="/photos/user.png" class="logo" alt="logo">
     <p style="text-align:center;margin-right:px;color:white;"><?php echo htmlspecialchars($_SESSION["username"]); ?><br><a href="/php/logout.php" style="color:red;text-decoration:underline" target = "_top">Logout</a></p>

     <ul id="myUL" style="margin-top:50">
  <li><span class="caret"><font color=white>My Assignments</span>
    <ul class="nested">
      <li><a href = "/assignments/assigment_1.html" target = "main_page">Asgn_1</a></li>
      <li><a href = "/assignments/assignment_2.html" target = "main_page">Asgn_2</a></li>
      <li><a href = "/assignments/assignment_3.html" target = "main_page">Asgn_3</a></li>
     <li><a href = "/assignments/assignmnent_4.html" target = "main_page">Asgn_4</a></li>
      <li><a href = "/assignments/assignment_5.html" target = "main_page">Asgn_5</a></li>
      <li><a href = "/assignments/assignment_6.html" target = "main_page">Asgn_6</a></li>
      <li><a href = "/assignments/assignment_7.html" target = "main_page">Asgn_7</a></li>
      <li><a href = "/assignments/assignment_8.html" target = "main_page">Asgn_8</a></li>
      <li><a href = "/assignments/assignment_9.html" target = "main_page">Asgn_9</a></li>
</ul>
</li>
   
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

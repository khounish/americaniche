<?php
require_once "veri.php";
?>
<html>
<style>
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
body{
color: white;
text-shadow: 0px 0px 5px #123456;
height: 250vh;
text-align: center;
font-family: sans-serif;
}
/* toggle switch css*/
/*body {
  margin:0;
  padding:0;
  background:#151515;
}

.center {
  position:absolute;
  left:50%;
  top:50%;
  transform:translate(-50%, -50%);
}*/
.box{
  height: 80px;
  width: 80px;
  background: blue;
}
input[type="checkbox"] {
  margin:10px;
  position:relative;
  width:120px;
  height:40px;
  -webkit-appearance: none;
  background: linear-gradient(0deg, #333, #000);
  outline: none;
  border-radius: 20px;
  box-shadow: 0 0 0 4px #353535, 0 0 0 5px #3e3e3e, inset 0 0 10px rgba(0,0,0,1);
}

input:checked[type="checkbox"]:nth-of-type(1) {
  background: linear-gradient(0deg, #e67e22, #f39c12);
  box-shadow: 0 0 0 4px #353535, 0 0 0 5px #3e3e3e, inset 0 0 10px rgba(0,0,0,1);
}

input:checked[type="checkbox"]:nth-of-type(2) {
  background: linear-gradient(0deg, #70a1ff, #1e90ff);
  box-shadow: 0 0 0 4px #353535, 0 0 0 5px #3e3e3e, inset 0 0 10px rgba(0,0,0,1);
}

input[type="checkbox"]:before {
  content:'';
  position:absolute;
  top:0;
  left:0;
  width:80px;
  height:40px;
  background: linear-gradient(0deg, #000, #6b6b6b);
  border-radius: 20px;
  box-shadow: 0 0 0 1px #232323;
  transform: scale(.98,.96);
  transition:.5s;
}

input:checked[type="checkbox"]:before {
  left:40px;
}

input[type="checkbox"]:after{
  content:'';
  position:absolute;
  top:calc(50% - 2px);
  left:70px;
  width:4px;
  height:4px;
  background: linear-gradient(0deg, #6b6b6b, #000);
  border-radius: 50%;
  transition:.5s;
}

input:checked[type="checkbox"]:after {
  left:110px;
}

h1 {
  margin:0;
  padding:0;
  font-family: sans-serif;
  text-align:center;
  color:#fff;
  font-size:16px;
  padding:15px 0;
  text-transform: uppercase;
  letter-spacing:4px;
}

</style>
   <body bgcolor = "rgba(15,18,59,0.5)" color=red><b>
     <br><br>
      <h2 style="color:white;text-decoration:underline">My Contents</h1>
<ul id="myUL"><br><br><br>
  <li><span class="caret"><font color=white>My Assignments</span>
    <ul class="nested">
      <li><a href = "http://somnath.americaniche.com/Assignments/assigment_1.html" target = "main_page">Asign_1</a></li>
      <li><a href = "http://somnath.americaniche.com/Assignments/assignment_2.html" target = "main_page">Asign_2</a></li>
    </ul>
    <div class="center"><br><br>
  <h3> Practice Now </h3>
  /*<input type="checkbox" name="">*/
      <!--<button id="button1" onclick="parent.postMessage('button1 clicked', '*');">click me</button>-->

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

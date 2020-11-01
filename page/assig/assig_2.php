<?php
require_once "v_s.php";
?>
<!DOCTYPE html>
<html>
<head>
</head>
<link rel="stylesheet" type="text/css" href="../css/webterminal.css" />
   <body > 
   <div id="heading">
      <h1 style="text-align:center; color:white">Assignment 2</h1>
    </div>
<OL>
<li> Print " Welcome to day 2 session "  on default stdout device
<li> Print " Today is Tuesday" on a file and print back the same on stdout
<li> Read " 100" into a variable and  print it on default stdout device
<li> what is the differnce while storing   "100" into a variable and printing it back 
<li> create 5  empty files and show the latest file in ascending or descending order
<li> Create below structre of 
       <ul>
      <li>Kurukshtra_Training</li>
      <li> create a folder Kurukshtra_Training/Linux/Os_Overview </li>
	   <li> create a folder Kurukshtra_Training/Linux/Linux_Voyage/Day1 to Kurukshtra_Training/Linux/Linux_Voyage/Day2 Kurukshtra_Training/Linux/Linux_Voyage/Day1 in one command  </li>
	   <li> create a folder Kurukshtra_Training/Languag/Python </li>
	   <li> create a folder Kurukshtra_Training/Php </li>
	   <li> create a folder Kurukshtra_Training/RDBMS/mysql Kurukshtra_Training/RDBMS/Postgresql   </li>
    </ul>
<li>  Change direcotry and reachto Postgresql folder 
<li>  List whats there under Kurukshtra_Training/Linux/ using relative path 
<li>  List whats there under Kurukshtra_Training/Linux/Linux_Voyage using absolute path  
<li>  change directoty to  Linux_Voyage folder create a folder Kurukshtra_Training/Linux/Linux_Voyage/Day2 Kurukshtra_Training/Linux/Linux_Voyage/Day4 using relative path
<li>  Under Day4 create  4 empty files names .   ps.txt grep.txt egrep.txt head.txt and  show proof that they are empty files
<li>  Create a basic password  command sets  which will ask for a password , at the time  of input  the password will not be visible. after password is take as input print the input on default stdout and alos store it on a file. show the proof that password is saved in a file.   </li>
<?php
include "switch.php";
?>
<br><br>
<?php
include "webterminal.php";
?>
<script src="../script/webterminal.js"></script>
</body>
</html>
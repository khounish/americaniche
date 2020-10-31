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
      <h1 style="text-align:center; color:white">Assignment 6</h1>
    </div>
    <OL>
<LI> Write a small script to take 2 inputs from command line parameter as 5 and 6 .upon execution  the script show  the same values
<LI> Modify  above script by changing   values to  10 and 12  inside  the script . i.e. you will pass 5,6 but it will print 	10  12</li>
<li> Write a script to  take input   1 input from command line parameter as 8 and one from keyboard . Add the values in scripts and show on screen
<li> Save the above script into a new script  perform  the same  but this time the it should generate generate a add.csv file with  taken inputs and its total. 
<li> Write the above script in such a way that if you execute the script then it keep on appending values inside the csv file. grow he csvfile file to atleast have 10 rows with same or different dataset.
<li> Write a script to  choose 5th line of the csv file , take 2 input values and create another csv file with same inputs and its multiplication values.(multiplication.csv)
<li> Write a script to  choose 8th line  from add.csv and 1st line of multiplication. take input as last field of tboth file , generate a csv file with  2 inputs values and its division value.(division.csv)
<li>Write a script to take command line paramter as calculator 1 + 2  and check if  its a +  between 2 values then print  the addition</li>
<li> enhance  the script to check if its + then add  if its - then substract ,if * then multiply or  / then devide.
<li> write a script  to take 3rd line fro add.csv and also 1st line from multiplication.csv  compare the fields and provide the  report  . if all values are equal in both file  then you can print both file have same value else print the file which has greater values with values.
</ol> 
<?php
include "switch.php";
?>
<br><br><br><br>
<?php
include "webterminal.php";
?>
<script src="../script/webterminal.js"></script>
</body>
</html>
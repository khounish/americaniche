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
      <h1 style="text-align:center; color:white">Assignment 4</h1>
    </div>
    <OL>
<li>  define what you mean  by  cui and gui .
<li>   what is a csv file. solve  below  .   By observing selling trend,  Investors wants to decide on  which brand and on which branch they wan to  invest onto computer 
 <p>       Build a csv database in a flat file named Salestrend.csv. criterias as mentioned below
	<ul>
         <li>	  HP brand  at branch tatanagar  sales 1000 computers in 1 month
	<li>	  HP brand  at branch tatanagar  sales 1500 computers in 2 month
		<li>  HP brand  at branch tatanagar  sales 10000 computers in 3 month
		 <li> HP brand  at branch ranchi   sales 1000 computers in 1 month
	  <li>>HP brand  at branch ranchi  sales 2500 computers in 2 month
	<li>	  HP brand  at branch ranchi  sales 10000 computers in 3 month
	<li>	  HP brand  at branch dhanbad    sales 10000 computers in 1 month
<li>  HP brand  at branch dhanbad  sales 5000 computers in 2 month
<li>		  HP brand  at branch dhanbad  sales 40000 computers in 3 month
<li>		  HP brand  at branch hyderabad   sales 10000 computers in 1 month
<li>		  HP brand  at branch  hyderabad  sales 10000 computers in one month
<li>		  HP brand  at branch hyderabad sales  50000 computers in one month
<li>		  Dell  brand  at branch tatanagar  sales 10000 computers in 1 month
<li>		  Dell  brand  at branch tatanagar  sales 15000 computers in 2 month
<li>		  Dell brand  at branch tatanagar  sales 45000 computers in 3 month
<li>		  Dell brand  at branch ranchi   sales 3000 computers in 1 month
<li>		  Dell brand  at branch ranchi  sales 6000 computers in 2 month
<li>		  Dell brand  at branch ranchi  sales 9000 computers in 3 month
<li>		  Dell brand  at branch dhanbad    sales 4000 computers in 1 month
<li>		  Dell brand  at branch dhanbad  sales 8000 computers in 2 month
   <li>       Dell brand at branch dhanbad  sales 40000 computers in 3 month
<li>		  Dell brand  at branch hyderabad   sales 20000 computers in 1 month
<li>		  Dell brand  at branch  hyderabad  sales 10000 computers in one month
<li>		  Dell brand  at branch hyderabad sales  50000 computers in one month
</p>		  
</ul>		  
<li> From above file figure out which  brand at what location sold highest using filters and pipes.
<li> From above file figure out which  brand at what location sold  second highest using filters and pipes.<li>
<li> From above file figure out which  brand at what location sold  lowest using filters and pipes.
<li> Figure our what are the distinguished branches present .( you might have to use uniq command )
<li> find  branch and brand who sold more than 30000 in 3 months 
<li> find the branch and brand details for past 2 months 
<li> find  uniq brand name in stdout. We dont want brand name to be repeated in output
<li> How many time  word sales  apeared in  the file .
<li>  How do we make uniform apearance of a  delimiters  . show with example
<li>  Define fork and join in  your language with example. 
<li>  All  process id is has a parent process id which is again child id of  another parent process id . ultimately all process ids are limked to  process id 1 . how will  you reach to  process id 1. explain your approach.
<li>  Which command can show you overall  dynamic report of process  activities.
<li>  How to  see how much  memory is used in megabytes. use command combination and  show only  used memory.
<li>  write a command set to  check disk space available percentage .	</li>
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
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
      <h1 style="text-align:center; color:white">Assignment 7</h1>
    </div>
    <OL>
<LI> AmericaNiche Academy  is Hiring 15 new joinees  whose user id is determined to be trainee1....... trainer 14.  create a file to  embed the training usernames as row. write a script to  
<pre>
 Get the user data from the file.  
 Generate  the encrypted random password for each user and create the user.
 Append the password,username in userdatabasefile.csv
 Extend the Script to  autovalidate user created
password to be sent using command line and varification should  be seemless.
 once user validaton is  done , it  shoudl open the userdatabasefile.csv 
and append a on a new Column "Validation Pass or Validatio  Fails " at third columen of the file.

</pre> </li>
 <li> Americaniche Academy wants to  build a menu driven password change script/turned as useful software  . 
    The  menu will  be  having one option enter the username:   at coordinates 15,20 on the screen.
   Company policy is that they will change paassword to  the same what it was initially  provided.
  
    Trainer14 on one morning feels he is not able to loging to the system with given password.
	
	write a script to  put the username which will check if its present in your  bulk  validated userdatabasefile..csv
	if it finds then it resets  with the old password , use the validation script using ssh techinique and
	finaly print the password on the screen so that system admin can copy and send him back then password via email
</li>
<li>
3)  After a while a situation arises when on the same day  trainer5 ... wanted to  reset their password. System admin decided to  enhance the script in such a way that it can accomodate multiple user password reset sequentialy (one by one) . he decided to keep on  reseting pasword with one originally created  unless there is a choice  which stops the script. here also after each changes se the validation script using ssh techinique and prints on screen 
</li>
<li>

4)  Latter management decides that user  bulk password changing technique is  to  be faster  and non interactive.  write the script to address same through your own apporach. trainer1.. tainer7 wantes password reset to  original one . here also after each changes se the validation script using ssh techinique and prints on screen
</li>
</OL>
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
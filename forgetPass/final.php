<?php session_start(); ?>
<html>
<head>
  <style>
    body{
      text-align: center;
      color:white;
      background-color: black;
    }

  </style>
</head>
<body>
<?php
include('data_base.php');

$pass1 = mysqli_real_escape_string($con,$_POST["pass1"]);
$pass2 = mysqli_real_escape_string($con,$_POST["pass2"]);
$curDate = date("Y-m-d H:i:s");
if ($pass1!=$pass2)
    {
    $_SESSION['error'] = "<p>Password do not match, both password should be same.<br /><br /></p>";
    header("location: new_pass.html");
		}
	else
	{

//$pass1 = md5($pass1);
mysqli_query($con,"SELECT `userid` from `userdetails` WHERE `email`='".$_SESSION['email1']."';");
$row= mysqli_fetch_array(mysqli_query);
$userid=$row['userid'];
mysqli_query($conn,"UPDATE `user_pswd` SET `password`='".$pass1."', `create_date`='".$curDate."' WHERE `userid`='".$userid."';");

mysqli_query($conn,"DELETE FROM `password_reset_temp` WHERE `email`='".$email."';");

echo '<h1>Congratulations! Your password has been updated successfully.</h1>
<h2><a href=" /index.php" style="text-size:20px;color:red">Click here</a> to Login.</h2><br />';
		}
session_destroy();
?>
</html>

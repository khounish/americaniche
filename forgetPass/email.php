<?php session_start(); ?>
<html>
<head>
<title> Forgot Password </title>
<link rel="stylesheet" type="text/css" href='css/style.css'>
</head>
<body>
  <div class="box">
	<img src="img/usr.png" class="usrimg">
  <h2> AmericaNiche Academy</h2>

  <form method="post" action="forget_password.php" name="reset"><br /><br />

  <label><strong>Enter Your Email Address:</strong></label><br /><br />
  <input type="text" placeholder="username@americaniche.com " name="email" required>
  <p style="color : red"><?php echo htmlspecialchars($_SESSION["error"]); ?></p><br>
  <br /><br />
  <input type="submit" value="Submit"/>
  </form>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</body>
</html>
<?php session_destroy(); ?>

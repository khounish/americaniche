<?php
session_start();
?>
<html>
<head>
	<link rel="stylesheet" type="text/css"href='config/style.css'>
</head>

<body>
	<div class="box">
	<img src="photos/logo_big.png" class="usrimg">
	 <h2> Americaniche Academy</h2>

		<form action="php/login.php" method="post">
			<p>USER NAME</p>
			<input type="text" name="username" placeholder="Enter username " required class="error">
			<p>PASSWORD</p>
			<input type="password" name="password" placeholder="Enter password" required>
			<input type="submit" value="login">
			<br><p style="color : red"><?php echo htmlspecialchars($_SESSION["error"]); ?></p><br>
			<a href=" forgetPass/email.php">Forget Password..?</a>

		</form>



	</div>

</body>
</html>
<?php session_destroy() ?>

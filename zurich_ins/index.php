<?php
session_start();
?>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>E-Learn</title>
    <link rel="stylesheet" href="css/page.css">
  </head>
  <body>
      <div class="loginbox">
        <img src="images/zurich-1.png" class="avatar"><br><br><br>
          <h1>Login Here</h1><br><br>
            <form action="php/login.php" method="post">
              <p>Username</p>
              <input type="text" name="username" placeholder="Enter Username" required>
              <p>Password</p>
              <input type="password" name="password" placeholder="Password" required><br><br><br><br>
              <input type="submit" value="Login">
            </form>

      </div>

  </body>
</html>
<?php session_destroy(); ?>

<html>
<head>
<title> Reset Password - Americaniche Academy</title>
<style>
 body{
   background-color: black;
   color:white;
   font-size: 10px;
     }
</style>
</head>
<body>
  <?php
  include('data_base.php');
  if (isset($_GET["key"]) && isset($_GET["email"])&& isset($_GET["action"]) && ($_GET["action"]=="reset")  && !isset($_POST["action"]))
  {
    $key = $_GET["key"];
    $email = $_GET["email"];
    $curDate = date("Y-m-d H:i:s");
    $query = mysqli_query($conn,"SELECT * FROM password_reset_temp WHERE `kkey`='".$key."' and `email`='".$email."';");
    $row = mysqli_num_rows($query);

    if ($row=="")
    {
      echo '<h2>Invalid Link</h2><p>The link is invalid/expired. Either you did not copy the correct link from the email,
      or you have already used the key in which case it is deactivated.</p>
      <p><a href="https://www.americaniche.com/index.php">Click here</a> to reset password.</p>';
    }
  else
  {
  	$row = mysqli_fetch_assoc($query);
  	$expDate = $row['exptime'];
        echo $expDate;
        echo $curDate;
  	if ($expDate >= $curDate)
    {
     header("location: new_pass.html");
   }
   // else
   // {
   // echo '<h2>Link Expired</h2>
    <p>The link is expired. You are trying to use the expired link which as valid only 24 hours (1 days after request).<br /><br /></p><p><a href="https://www.americaniche.com/index.php">Click here</a> to reset password.</p>';

//  }
  }
}?>
  </body>
  </html>

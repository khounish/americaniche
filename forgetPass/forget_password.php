<?php session_start(); ?>
<html>
<body>
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include('data_base.php');


$email = $_POST["email"];
$email = filter_var($email, FILTER_SANITIZE_EMAIL);
$email = filter_var($email, FILTER_VALIDATE_EMAIL);
$error= "";

if (!$email)
        {
        	 $error .="Invalid email address please type a valid email address!";
        }

else
       { 
         $sel_query = "SELECT * FROM userdetails WHERE email='".$email."'";
         $results = mysqli_query($conn,$sel_query);
         $row = mysqli_num_rows($results);
         

         if ($row=="")
          {
     		$error .= "No user is registered with this email address!";
    	  }
      
       }



if($error!="")
  {
   $_SESSION["error"] = $error;
   header("location: email.php");
  }

else
   {
    $expFormat = mktime(date("H"), date("i"), date("s"), date("m")  , date("d")+1, date("Y"));
  	$expDate = date("Y-m-d H:i:s",$expFormat);
  	$key = md5(2418*2+$email);
  	$addKey = substr(md5(uniqid(rand(),1)),3,10);
  	$key = $key . $addKey;
  // Insert Temp Table
    mysqli_query($conn,"INSERT INTO `password_reset_temp` (`email`, `kkey`, `exptime`)VALUES ('".$email."', '".$key."', '".$expDate."');");
    $output='<p>Dear user,</p>';
    $output.='<p>Please click on the following link to reset your password.</p>';
    $output.='<p>-------------------------------------------------------------</p>';
    $output.='<p><a href="http://www.americaniche.com/forgetPass/new_password.php?key='.$key.'&email='.$email.'&action=reset" target="_blank">http://www.americaniche.com/forgetPass/new_password.php?key='.$key.'&email='.$email.'&action=reset</a></p>';
    $output.='<p>-------------------------------------------------------------</p>';
    $output.='<p>Please be sure to copy the entire link into your browser.
    The link will expire after 1 day for security reason.</p>';
    $output.='<p>If you did not request this forgotten password email, no action
    is needed, your password will not be reset. However, you may want to log into
    your account and change your security password as someone may have guessed it.</p>';
   $output.='<p>Thanks,</p>';
   $body = $output;


   $subject = "Password Recovery - Americaniche Academy";

   $email_to = $email;
   $fromserver = "info@americaniche.com";
   require("PHPMailer/PHPMailerAutoload.php");
   $mail = new PHPMailer();
   $mail->IsSMTP();
   $mail->Host = "10.0.0.160"; // Enter your host here
   //$mail->SMTPAuth = false;
   //$mail->Username = "info@americaniche.com"; // Enter your email here
   //$mail->Password = ""; //Enter your passwrod here
   $mail->Port = 25;
   $mail->IsHTML(true);
   $mail->From = "info@americaniche.com";
   $mail->FromName = "Americaniche Academy";
   $mail->Sender = $fromserver; // indicates ReturnPath header
   $mail->Subject = $subject;
   $mail->Body = $body;
   $mail->AddAddress($email_to);
   if(!$mail->Send())
   {
   echo "Mailer Error: " . $mail->ErrorInfo;
   }
   else
   {
   echo "<p>An email has been sent to you with instructions on how to reset your password.</p>
  <br /><br /><br />";
   }

  }

?>
</body>
</html>

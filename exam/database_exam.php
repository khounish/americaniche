
<?php
$conn=mysqli_connect("192.168.56.101","somnath","somnath1","Create_Question_Bank");

//connection checking
if($conn === false)
{
  die("ERROR:connection not successful" . mysqli_connect_error());
}
?>
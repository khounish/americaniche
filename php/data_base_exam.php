<?php
$conn_1 = mysqli_connect("192.168.56.101","somnath","somnath1","Core_Question_Bank");
//connection checking
if($conn === false)
{
  die("ERROR:connection not successful" . mysqli_connect_error());
}
?>

<?php
session_start();
//Get the data exracted from input parameters
$username=$_POST["username"];
$password=$_POST["password"];
//server side  validation of those parameters
//establish a connection to database
// Create connection
require_once "data_base.php";
//Construct a sql query

//Find the userId for the given username
$sql1 = "SELECT userid FROM userdetails WHERE username = '$username'";
$userid = (($conn->query($sql1))->fetch_assoc())["userid"];
//Find the privileges of userID
$sql2 = "SELECT privilege FROM userdetails WHERE userid = '$userid'";
$privileges = (($conn->query($sql2))->fetch_assoc())["privilege"];
//Find the original password for the correspoding userid
$sql3 = "SELECT password FROM user_pswd WHERE userid = '$userid'";
$password_ori = (($conn->query($sql3))->fetch_assoc())["password"];

//validate the results from db and respond back
if ($userid != "")
{
    if ($password_ori == $password)
    {
      header("location: /page/index.php");
      // Store data in session variables
      $_SESSION["loggedin"] = true;
      $_SESSION["id"] = $userid;
      $_SESSION["username"] = $username;
      $_SESSION["privileges"] = $privileges;
    }
    else
    {
      header("location: /index.php");
      $_SESSION["error"] = "Invalid Password";
    }
}
else
{
  header("location: /index.php");
 $_SESSION["error"] = "Invalid Username";
}
$conn->close();
?>

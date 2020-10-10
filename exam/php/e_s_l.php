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
$sql1 = "SELECT user_id FROM userdetails WHERE username = '$username'";
$userid = (($conn->query($sql1))->fetch_assoc())["user_id"];
//Find the privileges of userID
$sql2 = "SELECT privilege FROM userdetails WHERE user_id = '$userid'";
$privileges = (($conn->query($sql2))->fetch_assoc())["privilege"];
//Find the original password for the correspoding userid
$sql3 = "SELECT password FROM user_pswd WHERE user_id = '$userid'";
$password_ori = (($conn->query($sql3))->fetch_assoc())["password"];

//validate the results from db and respond back
if ($userid != "")
{
    if ($privileges == "student")
    {
                  if ($password_ori == $password)
                    {
                    header("location: ../student_page/index.php");
                    // Store data in session variables
                    $_SESSION["s_loggedin"] = true;
                    $_SESSION["s_id"] = $userid;
                    $_SESSION["s_username"] = $username;
                    $_SESSION["s_privileges"] = $privileges;
                    }
                  else
                     {
                      header("location: /exam/index.php");
                      $_SESSION["error_s"] = "Invalid Password";
                      }
      }
      else
            {
            header("location: ../index.php");
            $_SESSION["error_s"] = "You are not student";
            }
}
else
{
  header("location: ../index.php");
 $_SESSION["error_s"] = "Invalid Username";
}
$conn->close();
?>
<?php
session_start();

//Get the data exracted from input parameters
$username=$_POST["username"];
$password=$_POST["password"];

// Create connection
require_once "data_base.php";
require_once "data_base_exam.php";
//Construct a sql query

//Find the userId for the given username
$sql1 = "SELECT user_id FROM userdetails WHERE username = '$username'";
$userid = (($conn->query($sql1))->fetch_assoc())["userid"];
//Find the privileges of userID
$sql2 = "SELECT privilege FROM userdetails WHERE user_id = '$userid'";
$privileges = (($conn->query($sql2))->fetch_assoc())["privilege"];
//Find the original password for the correspoding userid
$sql3 = "SELECT password FROM user_pswd WHERE user_id = '$userid'";
$password_ori = (($conn->query($sql3))->fetch_assoc())["password"];

//Exam information
//Exam  id
$sql4 = "SELECT id FROM Exam_scheduler WHERE user_id = '$userid'";
$exam_id = (($conn_1->query($sql4))->fetch_assoc())["id"];
//Date
$sql5 = "SELECT Date FROM Exam_scheduler WHERE id = '$exam_id'";
$date = (($conn_1->query($sql4))->fetch_assoc())["Date"];
//Duration
$sql6= "SELECT Duration FROM Exam_scheduler WHERE id = '$exam_id'";
$duration = (($conn_1->query($sql6))->fetch_assoc())["Duration"];
//Subject
$sql7 = "SELECT Subject FROM Exam_scheduler WHERE id = '$exam_id'";
$subject = (($conn_1->query($sql7))->fetch_assoc())["Subject"];
//Universal level
$sql8 = "SELECT Level FROM Exam_scheduler WHERE id = '$exam_id'";
$level = (($conn_1->query($sql8))->fetch_assoc())["Level"];
//Start time
$sql9 = "SELECT Start_time FROM Exam_scheduler WHERE id = '$exam_id'";
$start_time = (($conn_1->query($sql9))->fetch_assoc())["Start_time"];

$end_time = (int) $start_time + (int) $duration;

//validate the results from db and respond back
if ($userid != "")
{
    if ($privileges == "student")
    {
                  if ($password_ori == $password)
                    {
                          if( (int) date(Hi) > (int) $start_time && (int) date(Hi) < (int) $end_time && date(dmY) === (int) $date)
                              {
                                header("location: http://www.americaniche.com/exam/");
                                // Store data in session variables
                                $_SESSION["loggedin"] = true;
                                $_SESSION["id"] = $userid;
                                $_SESSION["username"] = $username;
                                $_SESSION["privileges"] = $privileges;
                                $_SESSION["date"] = $date;
                                $_SESSION["duration"] = $duration;
                                $_SESSION["subject"] = $subject;
                                $_SESSION["level"] = $level;
                                $_SESSION["start_time"] = $start_time;
                                $_SESSION["exam_id"] = $exam_id;

                              }

                          else 
                              {
                                header("location: /exam/index.php");
                                $_SESSION["error"] = "Exam not stared yet";
                        
                              }
                    }
                  else
                     {
                      header("location: /exam/index.php");
                      $_SESSION["error"] = "Invalid Password";
                      }
      }
      else
            {
            header("location: /exam/index.php");
            $_SESSION["error"] = "Permission denied";
            }
}
else
{
  header("location: /exam/index.php");
 $_SESSION["error"] = "Invalid Username";
}
$conn->close();
?>

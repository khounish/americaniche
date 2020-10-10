<?php
session_start();
require_once "data_base_exam.php";
$userid = $_SESSION["s_id"];
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
if(  date("Y-m-d") ===  $date )
  {
    header("location: http://www.americaniche.com/exam/exam_page/index.php");
    // Store data in session variables
      $_SESSION["date"] = $date;
      $_SESSION["duration"] = $duration;
      $_SESSION["subject"] = $subject;
      $_SESSION["level"] = $level;
      $_SESSION["start_time"] = $start_time;
      $_SESSION["exam_id"] = $exam_id;

    }

else 
                              {
                                header("location: /exam/student_page/index.php");
                                $_SESSION["s_error"] = $date ;
                        
                              }
$conn_1->close();
?>

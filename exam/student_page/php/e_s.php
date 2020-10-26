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
$date = (($conn_1->query($sql5))->fetch_assoc())["Date"];
//Duration
$sql6= "SELECT Duration FROM Exam_scheduler WHERE id = '$exam_id'";
$duration = (($conn_1->query($sql6))->fetch_assoc())["Duration"];
//Universal level
$sql8 = "SELECT Level FROM Exam_scheduler WHERE id = '$exam_id'";
$level = (($conn_1->query($sql8))->fetch_assoc())["Level"];
//Category Id
$sql9 = "SELECT Category_id FROM Exam_scheduler WHERE id = '$exam_id'";
$cetegory_id = (($conn_1->query($sql9))->fetch_assoc())["Category_id"];
//No. of question
$sql10 = "SELECT NoQues FROM Exam_scheduler WHERE id = '$exam_id'";
$noques = (($conn_1->query($sql10))->fetch_assoc())["NoQues"];

//validate the results from db and respond back
if(  date("Y-m-d") ===  $date )
  {
    require_once "s_q.php";
    header("location: http://www.americaniche.com/exam/student_page/exam_page/index.php");
    // Store data in session variables
      $_SESSION["date"] = $date;
      $_SESSION["duration"] = $duration;
      $_SESSION["level"] = $level;
      $_SESSION["category_id"] = $category_id;
      $_SESSION["exam_id"] = $exam_id;
      $_SESSION["no_ques"] = $noques;
      

    }

else 
                              {
                                header("location: /exam/student_page/index.php");
                                $_SESSION["s_error"] = "No exam assigned today ,exam on $date" ;
                        
                              }
$conn_1->close();
?>

<?php
//verify authentification:
 require_once "veri_admin.php";
//get input from form:
 $user_id = $_POST["userid"];
 $date = $_POST["date"];
 $subject = $_POST["subject"];
 $time = $_POST["start_time"];
 $duration =$_POST["duration"];
 $level = $_POST["level"];
 $examinator = $_SESSION['username'];
//connection to db:
 require_once "data_base_exam.php";
//save informition to database:
    $sql1 = "INSERT INTO Exam_scheduler (userid,Date,Start_time,Duration,Subject,Level,Examinator) VALUES ('$user_id','$date', '$time', '$duration', '$subject','$level', '$examinator')";
if(mysqli_query($conn,$sql1))
{
    $_SESSION["m"] = "updated";
    header ("Location: /exam/admin_page/set_exam/set_exam.php");
}
else
{
    $_SESSION["m"] = "not updated";
    header ("Location: /exam/admin_page/set_exam/set_exam.php");
}
?>

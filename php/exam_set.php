<?php
//verify authentification:
 require_once "veri_admin.php";

//get input from form:
 $user_id = $_POST["userid"];
 $date = $_POST["date"];
 $subject = $_POST["subject"];
 $time = $_POST["start_time"];
 $duration =["duration"];
 $level = $_POST["level"];

//connection to db:
 require_once "data_base_exam.php";

//save informition to database:
 mysqli_query($conn, "INSERT INTO `Exam_scheduler` (``,`userid`,`date`,`start_time`,`duration`,`subject`,`level`,`examinator`) VALUES ( '".$user_id."', '".$date."', '".$time. "', '".$duration."', '".$subject."','".$level."', '".$_SESSION['username']."');");

 ?>
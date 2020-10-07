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
 $examinator = $_SESSION['username'];

//alert funtion:
 function function_alert($message) { 
    echo "<script>alert('$message');</script>"; 
} 

//connection to db:
 require_once "data_base_exam.php";

//save informition to database:
    $sql1 = "INSERT INTO Exam_scheduler (userid,date,start_time,duration,subject,level,examinator) VALUES ('$user_id','$date', '$time', '$duration', '$subject','$level', '$examinator')";

if(mysqli_query($conn,$sql1))
{
    $_SESSION["messeage"] = "Databast updated";
    echo '<script>location.reload();</script>';
    header ("Location: / ");
}
else
{
    $alert = mysqli_error($conn);
    $_SESSION["messeage"] = $alert;
    echo '<script>javascript:history.go(-1)</script>';
}
/* try it 
header('Location: ' . $_SESSION['PHP_SELF']);
       	die();*/
?>

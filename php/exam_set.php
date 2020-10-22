<?php
//verify authentification:
 require_once "veri_admin.php";
//get input from form:
 $username = $_POST["username_s"];
 $date = $_POST["date"];
//$category_id = $_POST["category_id"];
$keyword = $_POST['keyword'];
$topic = $_POST['topic'];
$subtopic = $_POST['subtopic'];
 $duration =$_POST["duration"];
 $level = $_POST["level"];
 //$noques = $_POST["noques"];
 $examinator = $_SESSION['username'];
//connection to db:
 require_once "data_base_exam.php";
 require_once "data_base.php";
$sql = "SELECT * FROM QuesCat WHERE Topic = '$topic' and Subtopic = '$subtopic' and Keywords = '$keyword'";
if($result = mysqli_query($conn_1, $sql))
{
 $row = mysqli_fetch_assoc($result);
 $category = $row['Category_id'];
 echo "$category";
}
 $sql1 = "SELECT user_id FROM userdetails WHERE username = '$username'";
 $userid = (($conn->query($sql1))->fetch_assoc())["user_id"];
//save informition to database:
$sql1 = "INSERT INTO Exam_scheduler (id,user_id,Duration,Category_id,Level,Examinator) VALUES (NULL,'$userid','$duration','$category','$level','$examinator')";
echo "$sql1";
if(mysqli_query($conn_1,$sql1))
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

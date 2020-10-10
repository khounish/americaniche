<?php
session_start();
//get input from form:
 $topic = $_POST["topic"];
 $subtopic = $_POST["subtopic"];
 $keyword = $_POST["keyword"];
//connection to db:
 require_once "data_base_exam.php";
//save informition to database:
$sql1 = "INSERT INTO QuesCat (Category_id,Topic,Subtopic,Keywords) VALUES (NULL,'$topic','$subtopic','$keyword')";
if(mysqli_query($conn_1,$sql1))
{
  $_SESSION["m_c"] = "updated";
  header ("Location: /exam/admin_page/category/index.php");
}
else
{
 $_SESSION["m_c"] = "not updated";
 header ("Location: /exam/admin_page/category/index.php");
}
?>

<?php
session_start();
include('data_base_exam.php');
$qtype = $_POST['question_type'];
$ques = $_POST['question'];
$format = $_POST['format'];
$level = $_POST['level'];
$keyword = $_POST['keyword'];
$topic = $_POST['topic'];
$subtopic = $_POST['subtopic'];
$id = $_POST['id']
if ($qtype == 1)
{
  $op1 = $_POST['option1'];
  $op2 = $_POST['option2'];
  $op3 = $_POST['option3'];
  $op4 = $_POST['option4'];
  $ans = $_POST['answer'];
}
$ans = 0;
//querying category table
$sql = "SELECT * QuesCat WHERE Topic = '$topic' and Subtopic = '$subtopic' and Keywords = '$keyword'";
if($result = mysqli_query($conn_1, $sql))
{
 $row = mysqli_fetch_assoc($result);
 $category = $row['Category_id'];
}
 $creationdate = date("jS \of F Y");
 $createdby = $_SESSION['username'];
$sql1 = "UPDATE Questions SET Questiontext ='$ques', Right_option = '$ans', Questiontype = '$qtype', Format = '$format', CreatedBy = '$createdby', ExpertLevel = '$level', Category_id = '$category' WHERE Question_id = '$id'";

if (mysqli_query($conn_1, $sql1))
{
  if($qtype)
  {

    $sql2 = "UPDATE Options SET option1 = '$op1', option2 = '$op2', option3 = '$op3', option4 = '$op4') WHERE Question_id='$id'";

    mysqli_query($conn_1, $sql2);
  }
  header("location: /exam/Add_question/AddNewQues.php");
  exit;
}
else
{
  $_SESSION["error"] = "Question NOT Modified";
  header("location: /exam/Add_question/AddNewQues.php");
}
?>

<?php
session_start();
include('data_base_exam.php');
$qtype = $_POST['question_type'];
$ques = $_POST['question'];
$format = $_POST['format'];
$level = $_POST['level'];
$category = $_POST['category']

if($qtype)
{
  $op1 = $_POST['option1'];
  $op2 = $_POST['option2'];
  $op3 = $_POST['option3'];
  $op4 = $_POST['option4'];
  $ans = $_POST['answer'];
}
$ans = 1;
$creationdate = date("jS \of F Y");
$createdby = $_SESSION['username'];
$sql1 = "INSERT INTO Questions (Questiontext,Right_option,Questiontype,Format,CreatedBy,ExpertLevel) VALUES ('$ques','$ans','$qtype','$format','$createdby','$level' )";

if (mysqli_query($conn_1, $sql1))
{
  $last_id = mysqli_insert_id($conn_1);
  if($qtype)
  {
    $sql2 = "INSERT INTO Options (Question_id,option1,option2,option3,option4)VALUES ('$last_id','$op1','$op2','$op3','$op4')";
    mysqli_query($conn_1, $sql2);
  }
  header("location: /exam/Add_question/AddNewQues.php");
  exit;
}
else
{

  header("location: /exam/Add_question/AddNewQues.php");
}
?>

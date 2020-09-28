<?php
session_start();
include('database_exam.php');
$qtype = $_POST['question_type'];
$ques = $_POST['question'];
$format = $_POST['format'];
$format = $_POST['level'];
if ($qtype === "objective")
{
  $op1 = $_POST['option1'];
  $op2 = $_POST['option2'];
  $op3 = $_POST['option3'];
  $op4 = $_POST['option4'];
  $ans = $_POST['answer'];
}
$creationdate = date("jS \of F Y");
$createdby = $_SESSION['username'];
$sql1 = "INSERT INTO Question VALUES ( , ,\'.$ques.\',\'.$ans.\',\'.$qtype.\',\'.$format.\',\'.$creationdate.\',\'.$createdby.\',\'.$level.\' )";
$sql2 = "INSERT INTO option VALUES ( , ,)";
if (mysqli_query($conn, $sql1))
{
  echo "New record created for successfully";
}
else
{
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

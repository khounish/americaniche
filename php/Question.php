<?php
session_start();
include('data_base_exam.php');
$qtype = $_POST['question_type'];
$ques = $_POST['question'];
$format = $_POST['format'];
$level = $_POST['level'];
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
//$sql2 = "INSERT INTO option VALUES ( , ,)";
if (mysqli_query($conn, $sql1))
{
  echo "New record created successfully";
}
else
{
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
session_destroy();
?>
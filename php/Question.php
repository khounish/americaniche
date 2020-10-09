<?php
session_start();

 //alert funtion:
 function function_alert($message) {
  echo "<script>alert('$message');</script>";
}

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

if (mysqli_query($conn_1, $sql1))
{


}
else
{
  $alert = mysqli_error($conn);
  function_alert($alert);
  header("location: /exam/Add_question/AddNewQues.php");
}
?>

<?php
$conn_1 = mysqli_connect("192.168.56.101","somnath","somnath1","Core_Question_Bank");
//connection checking
if($conn === false)
{
  die("ERROR:connection not successful" . mysqli_connect_error());
}
$q = $_REQUEST['q'];
$sql = "SELECT Category_id FROM QuesCat WHERE Topic = '$q'";
$result = mysqli_query($conn_1,$sql);
while($row = mysqli_fetch_assoc($result))
{ $p = $row['Category_id'];
  $sql1 = "SELECT * FROM Questions WHERE Category_id = '$p'";
  if($result = mysqli_query($conn_1,$sql1))
  {
    if(mysqli_num_rows($result)>0)
    {  echo "<table>";
      while($row = mysqli_fetch_assoc($result))
      {   echo "<tr>";
          echo "<td> <a style=\"text-decoration:none\" href=\".php?qid=$row[Question_id]\">Q$row[Question_id]. $row[Questiontext]</a></td>";
          echo "</tr>";
      }
       echo "</table>";
    }
    else
    {
      echo "</p>Please insert a question to view it here</p>";
    }
  }
 else
 {
    echo "<p>Unable to make query to database</p>";
  }
}
 ?>

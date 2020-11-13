<html>
 <head><title>Exam Menu</title>
  <style>
  table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
         }

  td, th {
          border: 1px solid #dddddd;
          text-align: left;
          padding: 8px;
   }

  tr:nth-child(even) {
                     background-color: #dddddd;
  }
  </style></head>

 <body>
  <?php>
   require_once "data_base_exam.php";
   $userid = $_SESSION["s_id"];
   $sql = "SELECT Category_id,Duration FROM Exam_scheduler WHERE user_id = '$userid'";
   if($result = mysqli_query($conn_1,$sql))
   {
     if(mysqli_num_rows($result) > 0)
        {
         echo "<table>";
             echo "<tr>";
                 echo "<th>Topic</th>";
                 echo "<th>Duration</th>";
                 echo "<th> </th>";
             echo "</tr>";
         while($row = mysqli_fetch_array($result))
         {
             $cat_id = $row['Category_id'];
             $sql2 = "SELECT Topic FROM QuesCat WHERE Category_id = '$cat_id'"
             if($result1 = mysqli_query($conn_1,$sql2))
             {
               if(mysqli_num_rows($result1) > 0)
               {
                 $row2 = mysqli_fetch_assoc($result1)
                 echo "<tr>";
                  echo "<td>" . $row2['Topic'] . "</td>";
                  echo "<td>" . $row['Duration'] . "</td>";
                  echo "<td> <button>Start Exam</button></td>";
                echo "</tr>";
               }
            }
         }
         echo "</table>";
       }
     }
  <?>




</body>
</html>

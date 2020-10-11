<?php
require_once "veri_admin.php";
 ?>
<html>
 <head>
   <style>
    select {
            font-size: 20px;
           }

     body{
       background-color: white;
       font-size: 30px;
         }

    h3{
      position: relative;
      left :45px;
      top: 20px;
      font-size: 50px;
    }

	   h4{
	      margin-top:-5px;
	      text-align:center;
		    height:4%
        font-size: 80px;
        text-decoration: underline;
        padding-top: 8px;
	     }
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
    .button{
            background-color: grey;
            border: none;
            color: #030D93;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
           }

        #logo{
             float:left;
             height: 85px;
             width: 110px;
             background-color: white;
             position: relative;
             left:10px;
           }
        #heading{
          background-color: #d8d9da;
          height:85px;
                }
        #subheading{
          margin-top: 0px;
          background-color: #7c89c0;
          height:52px;
          color:white;
                   }
        #Quest{
                   float: right;
                   height: 100%;
                   width: 55%;

                   font-size: 20px;
                   text-align: center;
                   margin-top:-20px;
		   right:15px;
		   border-style: outset;
		   border-color: #7c89c0;
		   border-width: 10px;
                 }
      a{
        color:orange;
      }

  </style>
  <title>ADD Question</title>
 </head>
 <body>

    <div id="heading">

     <h3>Americaniche Academy</h3>
    </div>
	  <h4 id="subheading"><i>ADD NEW CATEGORY<i></h4>
    <div id="Quest">
    <?php
    include("data_base_exam.php");
    $sql = "SELECT * FROM QuesCat";
   if($result = mysqli_query($conn_1, $sql))
    {
    if(mysqli_num_rows($result) > 0)
       {
        echo "<table>";
            echo "<tr>";
                echo "<th>ID</th>";
                echo "<th>Topic</th>";
                echo "<th>Subtopic</th>";
                echo "<th>Keywords</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['Category_id'] . "</td>";
                echo "<td>" . $row['Topic'] . "</td>";
                echo "<td>" . $row['Subtopic'] . "</td>";
                echo "<td>" . $row['Keywords'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } }
?>
     </div>

      <form name="CATEGORY" action="php/category.php" method="post" >

       <p>Enter the topic of the question:<input type="text" name="topic" required>
       <p>Enter the subtopic of the question:<input type="text" name="subtopic" required>
       <p>Enter the keyword of the question:<input type="text" name="keyword" required><br><br>
       <button class="button" type="submit">Add Category</button>
       <br><?php echo htmlspecialchars($_SESSION["m_c"]); ?>
     </form>
</html>

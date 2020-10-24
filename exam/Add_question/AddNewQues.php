<?php
session_start();
require_once "veri.php";
 ?>
<html>
 <head>
   <style>
    select {
            font-size: 15px;
           }

     body{
       background-color: white;
       font-size: 25px;
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
                   width: 35%;

                   font-size: 20px;
                   text-align:center;
                   margin-top:-20px;
		               right:15px;
		               border-style: outset;
		               border-color: #7c89c0;
		               border-width: 10px;
                 }

        button{
          background-color: white;
          border: none;
          padding: 10px 100px;
          text-align: center;
          text-decoration: none;
          display: inline-block;
          font-size: 20px;
          margin: 4px 2px;
          cursor: pointer;
          border-radius: 4px;
          border: 2px solid #4CAF50; /* Green */
        }


  </style>
  <title>ADD Question</title>
 </head>

 <body>
    <!--HEADER-->
    <div id="heading">
     <h3>Americaniche Academy</h3>
    </div>

	  <h4 id="subheading"><i>ADD NEW QUESTION<i></h4>

     <!-- DIVISION TO DISPLAY ALL THE INSERTED QUESTION FROM DATABASE -->
     <div id="Quest">
       <h2>Question Bank<h2>
         <p>Select the topic to view question related to the topic<p>
           <?php
           include('data_base_exam.php');
           $sql2 = "SELECT distinct Topic FROM QuesCat";
            $result2 = mysqli_query($conn_1,$sql2);
          while($row2 = mysqli_fetch_assoc($result2))

             {
              $t=$row['Topic'];
              echo "<button onclick=\"showQuestion({$row['Topic'])}\">{$row['Topic']}</button>";
            }
          ?>
      <?php
       /*include('data_base_exam.php');
       $sql1 = "SELECT * FROM Questions order by Question_id DESC";
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
       }*/
      ?>
    </div>

     <!-- FORM TO ACCEPT DATA FROM ADMIN -->
     <form name="addques" action="/php/Question.php" method="post" >

      <p>Select the Question Type: <select name="question_type" onchange="addFields(this)" >
      <option value="0" >subjective</option>
      <option value="1" >objective</option></select></p>

      <p>Enter your question</p><textarea name="question" rows="8" cols="70" required ></textarea><br><br>

      <!-- DIVISION TO APPEND EXTRA FORM FIELDS WHEN OBJECTIVE TYPE OF QUESTION IS SELECTED -->
      <div id="container"></div>

      <p>Enter the format of the question:<input type="text" name="format"  required>

      <p>Level of the question:<select name="level" required>
      <option value="easy">easy</option>
      <option value="medium">medium</option>
      <option value="complex">complex</option></p></select>

      <p>Topic of the question:<select name="topic" required>
     <?php
     $sql2 = "SELECT * FROM QuesCat";
      $result2 = mysqli_query($conn_1,$sql2);
    while($row2 = mysqli_fetch_assoc($result2))

       {
     ?>
      <option value="<?php echo "{$row2['Topic']}" ?>"> <?php echo "{$row2['Topic']}" ?> </option>
    <?php
       }
    ?>
    </select>

    <p>Subtopic of the question:<select name="subtopic" required>
   <?php
   $sql3 = "SELECT * FROM QuesCat";

   $result3 = mysqli_query($conn_1,$sql3);
  while($row3 = mysqli_fetch_assoc($result3))
     {
   ?>
    <option value="<?php echo "{$row3['Subtopic']}" ?>"> <?php echo "{$row3['Subtopic']}" ?> </option>
  <?php
     }
  ?>
  </select>

  <p>Keyword of the question:<select name="keyword" required>
 <?php
 $sql3 = "SELECT * FROM QuesCat";

 $result3 = mysqli_query($conn_1,$sql3);
while($row3 = mysqli_fetch_assoc($result3))
   {
 ?>
  <option value="<?php echo "{$row3['Keywords']}" ?>"> <?php echo "{$row3['Keywords']}" ?> </option>
<?php
   }
?>
</select><br><br>

      <input class="button" type="submit" name="submit" value="AddQuestion">


     </form>

    <script>

        function addFields(element){
          var number = element.value;
            if(number == "1")
            {
              var container = document.getElementById("container");

              container.appendChild(document.createTextNode("Enter the options:"));
              container.appendChild(document.createElement("br"));
              for (i=0;i<4;i++)
              {

                container.appendChild(document.createTextNode( i+1 + " "));
                var input = document.createElement("input");
                input.type = "text";
                input.name = "option"+i;
                container.appendChild(input);
                container.appendChild(document.createElement("br"));

              }
              container.appendChild(document.createElement("br"));
              container.appendChild(document.createTextNode("Enter the correct options:"));
              var input = document.createElement("input");
              input.type = "text";
              input.name = "answer";
              container.appendChild(input);
              container.appendChild(document.createElement("br"));
            }



          else if(number == "0"){
            var element = document.getElementById("container");
            while (element.hasChildNodes()) {
            element.removeChild(element.firstChild);
          }

          }
        }

        function showQuestion(t) {
         var xhttp = new XMLHttpRequest();
         xhttp.onreadystatechange = function() {
         if (this.readyState == 4 && this.status == 200) {
         document.getElementById("Quest").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "quest_bank.asp?q="+t, true);
  xhttp.send();
}

</script>
</html>

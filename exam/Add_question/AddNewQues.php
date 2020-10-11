<?php
require_once "veri.php";
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
                   width: 45%;
                   background-color: #c1e1ec;
                   font-size: 27px;
                   text-align:center;
                   margin-top:-20px;
		               right:15px;
		               border-style: outset;
		               border-color: #7c89c0;
		               border-width: 10px;
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
     <div id="Quest"><h5>The Question Added to database</h5>
      <?php
       include('data_base_exam.php');
       $sql1 = "SELECT * FROM Questions order by Question_id DESC";
       if($result = mysqli_query($conn_1,$sql1))
       {
         if(mysqli_num_rows($result)>0)
         {
           while($row = mysqli_fetch_assoc($result))
	         {
             echo "<p> <a style=\"text-decoration:none\" href=\".php?qid=$row[Question_id]\">Q$row[Question_id]. $row[Questiontext]</a><p>";
           }
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

      <p>Category:<select name="keyword" required>
      <option value="1">Linux_LinuxCommands_WalletCommands</option>
      <option value="15">Linux_vi_viCommands</option></p></select><br><br>

      <button class="button" type="submit">Add Question</button>


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

</script>
</html>

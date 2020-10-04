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
       background-image: url('logo.png'),linear-gradient(to right,#030D93 , white);
       background-repeat: no-repeat,no-repeat;
       background-position: right ;

	     color:white;
       font-size: 30px;

         }

     h1{
       background-image: linear-gradient(red,black);
       text-align: center;
	     margin-top:-8px;
       }
	   h2{
	   text-align:center;
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
   </style>
  <title>ADD Question</title>
 </head>
 <body>
   <div class="box">
 <h1>Americaniche Academy</h1>
	   <h2>ADD NEW QUESTION</h2><hr><br><br>
   <form  action="/php/Question.php" method="post">


    <p>Select the Question Type: <select name="question_type" onchange="addFields(this)" >
    <option value="0" >subjective</option>
    <option value="1" >multiple choice question</option>
    <option value="2" >single choice question</option></select></p>


    <p>Enter your question</p><textarea name="question" rows="8" cols="70" required></textarea><br><br>
    <div id="container"></div>

    <p>Enter the format of the question:<input type="text" name="format" required>

    <p>Level of the question:<select name="level" required>
    <option value="easy">easy</option>
    <option value="medium">medium</option>
    <option value="complex">complex</option></p></select><br>

    <br><button class="button" type="submit"  onclick="AddNewQues.html">Add Question</button><input class="button" type="submit" value="Done">

    </form>
  </div>
<br><br><a href="/php/exam_logout.php" style="color:red;text-decoration:underline" target = "_top">Logout</a><br>
</body>
<script>
function addFields(element){


            var number = element.value;
            if(number == "1"||number == "2")
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
              container.appendChild(document.createTextNode("Enter the correct options:                    "));
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
            //document.getElementById('container').style.display = "none";
            //document.getElementById('container').style.display = "none";
          }
        }

</script>
</html>

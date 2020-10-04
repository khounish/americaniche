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
       background-image: url('../image/logo.png'),linear-gradient(to right,#030D93,white);
       background-repeat: no-repeat,no-repeat;
       background-position: right;
       font-size: 30px;
	     color:white;


         }


     h1{
       background-image:linear-gradient(red,black);
       text-align: center;
       margin-top: -6px;
       height:12%;
       }

    .submit{
border-radius: 2px;
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
     <br><br>
     <form  action="/php/exam_set.php" method="post">

       <div>
     		<label>Enter the date of examination:</label>
     		<input type="text" size="25" /><br><br>
     	</div>
     	<div>
     		<label>Enter the time of examination:</label>
     		<input type="text" size="25" /><br><br>
     	</div>
     	<div>
     		<label>Enter duration of examination:</label>
     		<input type="text" size="25" /><br><br>
     	</div>
      <div>
     		<label>Enter the topic of examination:</label>
     		<input type="text" size="25" /><br><br>
     	</div>


     	<div>
     		<input type="submit" class="submit" name="submit" value="submit" />
     	</div>
    </form>
  </div>
<br><br><a href="/php/exam_logout.php" style="color:red;text-decoration:underline" target = "_top">Logout</a><br>
</body>

</html>

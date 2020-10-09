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
       background-position: right bottom;
       font-size: 30px;
	     color:white;


         }


     h1{
       background-image:linear-gradient(to left,#030D93,#CB0A1F,#030D93);
       text-align: center;
       margin-top: -6px;
       height:12%;
       }
      h2{
          text-align: center;
          height:4%;
          margin-top: -10px;
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
  <title>set exam</title>
 </head>
 <body>
   <div class="box">
     <h1>Americaniche Academy</h1>
     <h2>SET NEW EXAM</h2><hr><br><br>

     <form  action="/php/exam_set.php" method="post">

      <div>
     		<label>Enter the date of examination:</label>
     		<input type="text" size="25" name="date"/><br><br>
     	</div>
     	<div>
     		<label>Enter the time of examination:</label>
     		<input type="text" size="25" name="start_time"/><br><br>
     	</div>
     	<div>
     		<label>Enter duration of examination:</label>
     		<input type="text" size="25" name="duration"/><br><br>
     	</div>
      <div>
     		<label>Enter the topic of examination:</label>
     		<input type="text" size="25" name="subject" /><br><br>
       </div>
       <div>
     		<label>Enter the User Id:</label>
     		<input type="text" size="25" name="userid"/><br><br>
     	</div>
       <div>
     		<label>Enter the level:</label>
     		<input type="text" size="25" name="level"/><br><br>
     	</div>



     	<div>
         <input type="submit" class="submit" name="submit" value="submit" />
         <br><?php echo htmlspecialchars($_SESSION["m"]); ?>
     	</div>
    </form>
  </div>
<br><br><a href="/php/exam_logout.php" style="color:red;text-decoration:underline" target = "_top">Logout</a><br>
</body>

</html>

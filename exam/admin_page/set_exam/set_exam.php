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
                   height: 55%;
                   width: 45%;

                   font-size: 30px;
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

	  <h4 id="subheading"><i>SET NEW EXAM<i></h4>

    <form  action="/php/exam_set.php" method="post">

 <!--<div>
      		<label>Enter the date of examination:</label>
      		<input type="date" size="25" name="date"/><br><br>
    </div>-->

<!--<div>
  		<label>Enter the number of question:</label>
    	<input type="text" size="25" name="noques"/><br><br>
    </div>-->

  	<div>
    	<label>Enter duration of examination:</label>
      <input type="text" size="25" name="duration"/><br>
    </div>

    <div>
    	<label>Enter the Username:</label>
  		<input type="text" size="25" name="username_s"/><br>
  	</div>

    <div>
      <p>Level of the question:<select name="level" required>
      <option value="1">easy</option>
      <option value="2">medium</option>
      <option value="3">complex</option></p></select>
  	</div>

    <p>Topic of the question:<select name="topic" required>
    <?php
       include('data_base_exam.php');
       $sql2 = "SELECT * FROM QuesCat";
       $result2 = mysqli_query($conn_1,$sql2);
       while($row2 = mysqli_fetch_assoc($result2)){
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


      	<div>
          <input type="submit" class="button" name="submit" value="submit" />
          <br><?php echo htmlspecialchars($_SESSION["m"]); ?>
      	</div>
     </form>
</html>

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
       background-color: rgb(242, 242, 242);
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
          background-color: rgba(3, 13, 147, 0.6);
          height:85px;
          color: white;
                }
        #subheading{
          margin-top: 0px;
          background-color: rgb(186, 94, 94, 0.4);
          height:52px;
                   }
        #Quest{
                   float: right;
                   height: 100%;
                   width: 45%;
                   background-color: white;
                   font-size: 30px;
                   text-align: center;

                 }


  </style>
  <title>ADD Question</title>
 </head>
 <body>
    <!--Heading division-->
    <div id="heading">
     <img id="logo" src="logo.png">
     <h3>Americaniche Academy</h3>
    </div>


	  <h4 id="subheading"><i>ADD NEW CATEGORY ID<i></h4>


        <form name="CATEGORY" action="" method="post" >

         <p>Enter the topic of the question:<input type="text" name="topic" required>
         <p>Enter the subtopic of the question:<input type="text" name="subtopic" required>
         <p>Enter the keyword of the question:<input type="text" name="keyword" required><br><br>
         <button class="button" type="submit">Add Category</button>

        </form>

 </body>

</html>

<html>
 <head>
  <title>Online test</title>
  <?php
  require_once "veri.php";
  ?>

  <style>
  .heading{
    background-color: rgba(3, 13, 147, 0.6);
    height:100px;
    color: white;

    margin-bottom: 0px;
    }
  .subheading{
    margin-top: -38px;
    background-color: rgb(186, 94, 94, 0.4);
    height:60px;

    text-decoration: underline;
  }
  .Questions{
    position: absolute;
    right: 0px;
    height: 100%;
    width: 25%;
    background-color: white;

  }
 .nested{
   display: none;
 }
   .button{
     border-radius: 100%;
     background-color: rgb(3, 13, 147);
     color:white;
     width: 25px;
     height: 25px;
     margin-right: 2.5em;
   }

   .button:hover{
     background-color: red;
   }

    #logo{
      float:left;
      height: 100px;
      width: 110px;
      background-color: white;
      position: relative;
      left:20px;
    }
    #countdown{
      float: right;
      font-size: 40px;
      color: white;
      bottom: 50px;
      left: 20px;
    }
    #topic{
      font-size: 40px;
      left: 40px;
      text-align: center;
    }
  #date1{
    float: right;
    font-size: 25px;
  }

  h3{
    position: relative;
    left :45px;

    top: 30px;
    font-size: 40px;
    }
  body{
      background-color: rgb(242, 242, 242);
    }
  h1{
    color:rgba(3, 13, 147);
  }


  </style>
    <script>
  // Set the date we're counting down to

  var countDownDate = new Date().getTime();
  countDownDate = countDownDate + 3600000;
  // Update the count down every 1 second
  var x = setInterval(function() {

    // Get today's date and time
    var now = new Date().getTime();
    var date = new Date();

    d=date.getDate();
    m=date.getMonth();
    y=date.getFullYear();
    m=m+1;
    document.getElementById('date1').innerHTML ="DATE:" + d + "/" + m +"/" + y ;
    // Find the distance between now and the count down date
    var distance = countDownDate - now;

    // Time calculations for days, hours, minutes and seconds
    //var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

    // Output the result in an element with id="demo"
    document.getElementById("countdown").innerHTML =hours + "h "
    + minutes + "m " + seconds + "s " ;

    // If the count down is over, write some text
    if (distance < 0) {
      clearInterval(x);
      document.getElementById("countdown").innerHTML = "EXPIRED";
    }
  }, 1000);
  </script>
 </head>

 <body>
   <div class="heading">
     <img id="logo" src="logo.png">
     <p id="countdown" ></p>
     <h3 >Americaniche Academy</h3>
   </div>

   <div class="subheading">
    <p id="date1"></p>
   <p id="topic"><strong><i>Linux Test</i></p>

   </div>

   <div class="Questions">
     <h1 style="text-align:center">Questions</h1>
     <ul>
       <li >Subjective Questions</li>
       <div>
     <button class="button">1 </button>
     <button class="button">2</button>
     <button class="button">3</button>
     <button class="button">4</button>
     <button class="button">5</button>
     <button class="button">6</button>
   </div>
       <li>Multiple Choice Question</li>
     </ul>

   </div>
   <div class="question">
   <form>
     <p></p>

   </form></div>

 </body>
 </html>
